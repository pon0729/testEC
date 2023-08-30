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

namespace Plugin\ReferralCode\Form\Type\Admin;

use Plugin\ReferralCode\Entity\ReferralCodeConfig;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\Form\Extension\Core\Type\CollectionType;
//use Plugin\ReferralCode\Entity\ReferralCodeDeliveryConfigType;

/**
 * Class ReferralCodeConfigType.
 */
class ReferralCodeConfigType extends AbstractType
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
            ->add('delivery_free_amount', MoneyType::class, [
                'label' => 'referral_code.admin.form.referral_code_config_type.delivery_free_amount.label',
                'required' => false,
                'currency' => 'JPY',
                'scale' => 0,
                'constraints' => array(
                    new Assert\Range(array(
                        'min' => 0,
                    )),
                ),
            ])
            ->add('subscription_discount_rate', IntegerType::class, [
                'label' => 'referral_code.admin.form.referral_code_config_type.subscription_discount_rate.label',
                'required' => true,
                'constraints' => [
                    new Assert\Range([
                        'min' => 0, # 割引率なしも対応
                        'max' => 100,
                    ]),
                ],
            ]);
#            ->add('ReferralCodeDeliveryConfigs', CollectionType::class, [
#                'type' => new ReferralCodeDeliveryConfigType(),
#                'allow_add' => true,
#                'allow_delete' => true,
#            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReferralCodeConfig::class,
        ]);
    }
}
