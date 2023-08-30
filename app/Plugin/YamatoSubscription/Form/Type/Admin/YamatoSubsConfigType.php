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

use Plugin\YamatoSubscription\Entity\YamatoSubsConfig;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class YamatoSubsConfigType extends AbstractType
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
            ->add('ignoring_sale_type_ids', TextType::class, [
                'label' => "除外対象販売種別(カンマ区切り)",
                'required' => false,
                'constraints' => [
                    new Assert\Regex(['pattern' => '/^[0-9,]+$/'])
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    /*
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => YamatoSubsConfig::class,
        ]);
    }
    */
}
