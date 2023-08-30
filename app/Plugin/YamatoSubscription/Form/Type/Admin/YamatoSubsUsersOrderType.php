<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\YamatoSubscription\Form\Type\Admin;

use Plugin\YamatoSubscription\Entity\YamatoSubsUsersOrder;
use Plugin\YamatoSubscription\Form\Type\Admin\YamatoSubsUsersOrderItemType;
use Plugin\YamatoSubscription\Form\Type\Admin\YamatoSubsUsersShippingType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


class YamatoSubsUsersOrderType extends AbstractType
{
    /**
     * buildForm.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('use_point', NumberType::class, [
                'required' => true,
                'constraints' => [
                    new Assert\Regex([
                        'pattern' => "/^\d+$/u",
                        'message' => 'form_error.numeric_only',
                    ]),
                ],
            ])
            ->add('YamatoSubsUsersOrderItems', CollectionType::class, [
                'entry_type' => YamatoSubsUsersOrderItemType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
            ])
            ->add('YamatoSubsUsersOrderItemsErrors', TextType::class, [
                'mapped' => false,
            ])
            ->add('return_link', HiddenType::class, [
                'mapped' => false,
            ])
            ->add('delivery_count_update', NumberType::class, [
                'required' => false,
                'mapped' => false,
            ])
            ->add('delivery_count_reset', CheckboxType::class, [
                'required' => false,
                'mapped' => false,
                'label' => 'yamatosubscription.admin.detail.reset_label',
                'allow_extra_fields' => true,
            ]);

        $builder->addEventListener(FormEvents::POST_SET_DATA, [$this, 'sortOrderItems']);
        $builder->addEventListener(FormEvents::POST_SET_DATA, [$this, 'addShippingForm']);
        $builder->addEventListener(FormEvents::POST_SUBMIT, [$this, 'validateOrderItems']);
    }

    /**
     * 受注明細をソートする.
     *
     * @param FormEvent $event
     */
    public function sortOrderItems(FormEvent $event) {
        /** @var YamatoSubsUsersOrder $YamatoSubsUsersOrder */
        $YamatoSubsUsersOrder = $event->getData();
        if (null === $YamatoSubsUsersOrder) {
            return;
        }
        $YamatoSubsUsersOrderItems = $YamatoSubsUsersOrder->getYamatoSubsUsersSortedOrderItems();

        $form = $event->getForm();
        $form['YamatoSubsUsersOrderItems']->setData($YamatoSubsUsersOrderItems);
    }

    /**
     * 単一配送時に, Shippingのフォームを追加する.
     * 複数配送時はShippingの編集は行わない.
     *
     * @param FormEvent $event
     */
    public function addShippingForm(FormEvent $event) {
        /** @var YamatoSubsUsersOrder $YamatoSubsUsersOrder */
        $YamatoSubsUsersOrder = $event->getData();

        // 複数配送時はShippingの編集は行わない
        if ($YamatoSubsUsersOrder && $YamatoSubsUsersOrder->isMultiple()) {
            return;
        }

        $data = $YamatoSubsUsersOrder ? $YamatoSubsUsersOrder->getYamatoSubsUsersShippings()->first() : null;
        $form = $event->getForm();
        $form->add('YamatoSubsUsersShipping', YamatoSubsUsersShippingType::class, [
            'mapped' => false,
            'data' => $data,
        ]);
    }

    /**
     * 受注明細のバリデーションを行う.
     * 商品明細が1件も登録されていない場合はエラーとする.
     *
     * @param FormEvent $event
     */
    public function validateOrderItems(FormEvent $event)
    {
        /** @var YamatoSubsUsersOrder $YamatoSubsUsersOrder */
        $YamatoSubsUsersOrder = $event->getData();
        $YamatoSubsUsersOrderItems = $YamatoSubsUsersOrder->getYamatoSubsUsersOrderItems();

        $count = 0;
        foreach ($YamatoSubsUsersOrderItems as $YamatoSubsUsersOrderItem) {
            if ($YamatoSubsUsersOrderItem->isProduct()) {
                $count++;
            }
        }
        // 商品明細が1件もない場合はエラーとする.
        if ($count < 1) {
            // 画面下部にエラーメッセージを表示させる
            $form = $event->getForm();
            $form['YamatoSubsUsersOrderItemsErrors']->addError(new FormError(trans('admin.order.product_item_not_found')));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => YamatoSubsUsersOrder::class,
        ]);
    }
}
