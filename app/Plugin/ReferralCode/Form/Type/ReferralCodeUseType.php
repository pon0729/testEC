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

namespace Plugin\ReferralCode\Form\Type;

use Eccube\Common\Constant;
use Plugin\ReferralCode\Entity\ReferralCode;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class ReferralCodeUseType.
 */
class ReferralCodeUseType extends AbstractType
{
    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * constructor
     */
    public function __construct(
        ValidatorInterface $validator
    ) {
        $this->validator = $validator;
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
                'label' => 'referral_code.form.referral_code_use_type.referral_code.label',
                'required' => false,
                'trim' => true,
                'mapped' => false,
            ])
            ->add('referral_code_use', ChoiceType::class, [
                'choices' => [
                    trans('referral_code.form.referral_code_use_type.referral_code_use.choices.not_use') => Constant::DISABLED,
                    trans('referral_code.form.referral_code_use_type.referral_code_use.choices.use') => Constant::ENABLED
                ],
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'label' => '',
                'data' => Constant::ENABLED,
            ])
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
                $form = $event->getForm();
                $data = $form->getData();

                if ($data['referral_code_use'] === Constant::ENABLED) {
                    $errors = $this->validator->validate($form['referral_code'], [
                        new Assert\NotBlank(),
                    ]);
                    foreach ($errors as $error) {
                        $form['referral_code']->addError(new FormError($error->getMessage()));
                    }
                }
            });
    }

    /**
     * {@inheritdoc}
     */
    /*
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReferralCode::class,
        ]);
    }
     */
}
