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

use Carbon\Carbon;
use Eccube\Common\Constant;
use Plugin\ReferralCode\Entity\ReferralCode;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;
use Plugin\ReferralCode\Form\Type\Admin\ReferralCodeDetailType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class ReferralCodeType.
 */
class ReferralCodeType extends AbstractType
{
    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * @var ReferralCodeRepository
     */
    protected $referralCodeRepository;

    public function __construct(
        ValidatorInterface $validator,
        ReferralCodeRepository $referralCodeRepository
    ) {
        $this->validator = $validator;
        $this->referralCodeRepository = $referralCodeRepository;
    }

    /**
     * buildForm.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('referral_code', TextType::class, [
                'label' => 'referral_code.admin.form.referral_code_type.referral_code.label',
                'required' => true,
                'trim' => true,
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Regex(['pattern' => '/^[a-zA-Z0-9]+$/i']),
                ],
            ])
            ->add('referral_code_name', TextType::class, [
                'label' => 'referral_code.admin.form.referral_code_type.referral_code_name.label',
                'required' => true,
                'trim' => true,
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('referral_code_type', ChoiceType::class, [
                'choices' => [
                    trans('referral_code.admin.form.referral_code_type.referral_code_type.choices.product') => ReferralCode::PRODUCT,
                    trans('referral_code.admin.form.referral_code_type.referral_code_type.choices.category') => ReferralCode::CATEGORY,
                    trans('referral_code.admin.form.referral_code_type.referral_code_type.choices.all') => ReferralCode::ALL,
                ],
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'label' => 'referral_code.admin.form.referral_code_type.referral_code_type.label',
                'label_attr' => [
                    'class' => 'radio-inline',
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('referral_code_member', ChoiceType::class, [
                'choices' => [
                    trans('referral_code.admin.form.referral_code_type.referral_code_member.choices.member') => Constant::ENABLED,
                    trans('referral_code.admin.form.referral_code_type.referral_code_member.choices.all') => Constant::DISABLED,
                ],
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'label' => 'referral_code.admin.form.referral_code_type.referral_code_member.label',
                'label_attr' => [
                    'class' => 'radio-inline',
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('discount_type', ChoiceType::class, [
                'choices' => [
                    trans('referral_code.admin.form.referral_code_type.discount_type.choices.discount_price') => ReferralCode::DISCOUNT_PRICE,
                    trans('referral_code.admin.form.referral_code_type.discount_type.choices.discount_rate') => ReferralCode::DISCOUNT_RATE,
                ],
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'label' => 'referral_code.admin.form.referral_code_type.discount_type.label',
                'label_attr' => [
                    'class' => 'radio-inline',
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('referral_code_lower_limit', MoneyType::class, [
                'label' => 'referral_code.admin.form.referral_code_type.referral_code_lower_limit.label',
                'required' => false,
                'currency' => 'JPY',
                'scale' => 0,
                'constraints' => [
                    new Assert\Range([
                        'min' => 0,
                    ]),
                ],
            ])
            ->add('discount_price', MoneyType::class, [
                'label' => 'referral_code.admin.form.referral_code_type.discount_price.label',
                'required' => false,
                'currency' => 'JPY',
                'scale' => 0,
                'constraints' => [
                    new Assert\Range([
                        'min' => 0,
                    ]),
                ],
            ])
            ->add('discount_rate', IntegerType::class, [
                'label' => 'referral_code.admin.form.referral_code_type.discount_rate.label',
                'required' => false,
                'constraints' => [
                    new Assert\Range([
                        'min' => 0, # 紹介コードの割引なしを対応
                        'max' => 100,
                    ]),
                ],
            ])
            // 有効期間(FROM)
            ->add('available_from_date', DateType::class, [
                'label' => 'referral_code.admin.form.referral_code_type.available_from_date.label',
                'required' => true,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => [
                    'placeholder' => 'yyyy-MM-dd',
                    'min' => '1900-01-01',
                    'max' => '9999-12-31',
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            // 有効期間(TO)
            ->add('available_to_date', DateType::class, [
                'label' => 'referral_code.admin.form.referral_code_type.available_to_date.label',
                'required' => true,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => [
                    'placeholder' => 'yyyy-MM-dd',
                    'min' => '1900-01-01',
                    'max' => '9999-12-31',
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('referral_code_release', IntegerType::class, [
                'label' => 'referral_code.admin.form.referral_code_type.referral_code_release.label',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 1000000,
                    ]),
                ],
            ])
            ->add('referral_code_use_time', HiddenType::class, [])
            ->add('ReferralCodeDetails', CollectionType::class, [
                'entry_type' => ReferralCodeDetailType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
            ])
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
                $form = $event->getForm();
                $ReferralCode = $form->getData();

                if (count($ReferralCode->getReferralCodeDetails()) === 0 && $ReferralCode->getReferralCodeType() !== ReferralCode::ALL) {
                    $form['referral_code_type']->addError( new FormError(trans('referral_code.admin.edit.error.referral_code_type.required')) );
                }

                // 値引き額、値引き率の必須チェック
                if ($ReferralCode->getDiscountType() === ReferralCode::DISCOUNT_PRICE) {
                    $errors = $this->validator->validate($ReferralCode->getDiscountPrice(), [
                        new Assert\NotBlank(),
                    ]);
                    foreach ($errors as $error) {
                        $form['discount_price']->addError(new FormError($error->getMessage()));
                    }
                } elseif ($ReferralCode->getDiscountType() === ReferralCode::DISCOUNT_RATE) {
                    $errors = $this->validator->validate($ReferralCode->getDiscountRate(), [
                        new Assert\NotBlank(),
                    ]);
                    foreach ($errors as $error) {
                        $form['discount_rate']->addError(new FormError($error->getMessage()));
                    }
                }

                if ( !empty($ReferralCode->getAvailableFromDate()) && !empty($ReferralCode->getAvailableToDate()) ) {
                    $fromDate = Carbon::instance($ReferralCode->getAvailableFromDate());
                    $toDate = Carbon::instance($ReferralCode->getAvailableToDate());
                    if ($fromDate->gt($toDate)) {
                        $form['available_from_date']->addError( new FormError(trans('referral_code.admin.edit.error.available_date.invalid')) );
                    }
                }

                // 既に登録されている紹介コードは利用できない
                if ( !is_null($ReferralCode->getReferralCode()) ) {
                    $qb = $this->referralCodeRepository
                        ->createQueryBuilder('rc')
                        ->select('COUNT(rc)')
                        ->where('rc.referral_code = :referral_code')
                        ->setParameter('referral_code', $ReferralCode->getReferralCode());

                    if ( is_null($ReferralCode->getId()) ) {
                        $count = $qb->getQuery()->getSingleScalarResult();
                    } else {
                        $qb->andWhere('rc.id <> :id')->setParameter('id', $ReferralCode->getId());
                        $count = $qb->getQuery()->getSingleScalarResult();
                    }
                    if ($count > 0) {
                        $form['referral_code']->addError( new FormError(trans('referral_code.admin.edit.error.referral_code.duplicate')) );
                    }
                }
            });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReferralCode::class,
        ]);
    }
}
