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

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Entity\Category;
use Eccube\Entity\Product;
use Eccube\Form\DataTransformer;
use Plugin\ReferralCode\Entity\ReferralCodeDetail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class ReferralCodeDetailType.
 */
class ReferralCodeDetailType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
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
            ->add(
                $builder->create('Product', HiddenType::class)
                    ->addModelTransformer(new DataTransformer\EntityToIdTransformer($this->entityManager, Product::class))
            )
            ->add(
                $builder->create('Category', HiddenType::class)
                    ->addModelTransformer(new DataTransformer\EntityToIdTransformer($this->entityManager, Category::class))
            )
            /*
            ->add('id', HiddenType::class, [
                'label' => '紹介コード詳細ID',
                'required' => false,
            ])
             */
            ->add('referral_code_type', HiddenType::class, [
                'required' => false,
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReferralCodeDetail::class,
        ]);
    }
}
