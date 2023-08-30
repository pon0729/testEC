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

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Common\EccubeConfig;
use Eccube\Entity\Master\OrderItemType as OrderItemTypeMaster;
use Eccube\Entity\Master\TaxDisplayType;
use Eccube\Entity\Master\TaxType;
use Eccube\Entity\OrderItem;
use Eccube\Entity\ProductClass;
use Eccube\Form\DataTransformer;
use Eccube\Form\Type\PriceType;
use Eccube\Repository\Master\OrderItemTypeRepository;
use Eccube\Repository\OrderItemRepository;
use Eccube\Repository\ProductClassRepository;
use Eccube\Repository\TaxRuleRepository;
use Eccube\Service\TaxRuleService;
use Eccube\Util\StringUtil;
use Plugin\YamatoSubscription\Entity\YamatoSubsUsersOrderItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class YamatoSubsUsersOrderItemType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var TaxRuleService
     */
    protected $taxRuleService;

    /**
     * @var ProductClassRepository
     */
    protected $productClassRepository;

    /**
     * @var OrderItemRepository
     */
    protected $orderItemRepository;

    /**
     * @var OrderItemTypeRepository
     */
    protected $orderItemTypeRepository;

    /**
     * @var TaxRuleRepository
     */
    protected $taxRuleRepository;

    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * OrderItemType constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param EccubeConfig $eccubeConfig
     * @param TaxRuleService $taxRuleService
     * @param ProductClassRepository $productClassRepository
     * @param OrderItemRepository $orderItemRepository
     * @param OrderItemTypeRepository $orderItemTypeRepository
     * @param TaxRuleRepository $taxRuleRepository
     * @param ValidatorInterface $validator
     *
     * @throws \Exception
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        EccubeConfig $eccubeConfig,
        TaxRuleService $taxRuleService,
        ProductClassRepository $productClassRepository,
        OrderItemRepository $orderItemRepository,
        OrderItemTypeRepository $orderItemTypeRepository,
        TaxRuleRepository $taxRuleRepository,
        ValidatorInterface $validator
    ) {
        $this->entityManager = $entityManager;
        $this->eccubeConfig = $eccubeConfig;
        $this->taxRuleService = $taxRuleService;
        $this->productClassRepository = $productClassRepository;
        $this->orderItemRepository = $orderItemRepository;
        $this->orderItemTypeRepository = $orderItemTypeRepository;
        $this->taxRuleRepository = $taxRuleRepository;
        $this->validator = $validator;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('product_name', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_mtext_len'],
                    ]),
                ],
            ])
            ->add('price', PriceType::class, [
                'accept_minus' => true,
            ])
            ->add('quantity', IntegerType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_int_len'],
                    ]),
                ],
            ])
            ->add('tax_rate', IntegerType::class, [
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Range(['min' => 0]),
/*
                    new Assert\Regex([
                        'pattern' => "/^\d+(\.\d+)?$/u",
                        'message' => 'form_error.float_only',
                    ]),
*/
                ],
            ]);

        $builder
            ->add($builder->create('order_item_type', HiddenType::class)
                ->addModelTransformer(new DataTransformer\EntityToIdTransformer(
                    $this->entityManager,
                    OrderItemTypeMaster::class
                )))
            ->add($builder->create('tax_type', HiddenType::class)
                ->addModelTransformer(new DataTransformer\EntityToIdTransformer(
                    $this->entityManager,
                    TaxType::class
                )))
            ->add($builder->create('ProductClass', HiddenType::class)
                ->addModelTransformer(new DataTransformer\EntityToIdTransformer(
                    $this->entityManager,
                    ProductClass::class
                )));

        // 受注明細フォームの税率を補完する
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $YamatoSubsUsersOrderItem = $event->getData();

            if (!isset($YamatoSubsUsersOrderItem['tax_rate']) || StringUtil::isBlank($YamatoSubsUsersOrderItem['tax_rate'])) {
                $orderItemTypeId = $YamatoSubsUsersOrderItem['order_item_type'];

                if ($orderItemTypeId == OrderItemTypeMaster::PRODUCT) {
                    /** @var ProductClass $ProductClass */
                    $ProductClass = $this->productClassRepository->find($YamatoSubsUsersOrderItem['ProductClass']);
                    $Product = $ProductClass->getProduct();
                    $TaxRule = $this->taxRuleRepository->getByRule($Product, $ProductClass);

                    if (!isset($YamatoSubsUsersOrderItem['tax_type']) || StringUtil::isBlank($YamatoSubsUsersOrderItem['tax_type'])) {
                        $YamatoSubsUsersOrderItem['tax_type'] = TaxType::TAXATION;
                    }

                } else {
                    if ($orderItemTypeId == OrderItemTypeMaster::DISCOUNT && $YamatoSubsUsersOrderItem['tax_type'] == TaxType::NON_TAXABLE) {
                        $YamatoSubsUsersOrderItem['tax_rate'] = '0';
                        $event->setData($YamatoSubsUsersOrderItem);

                        return;
                    }

                    $TaxRule = $this->taxRuleRepository->getByRule();
                }

                $YamatoSubsUsersOrderItem['tax_rate'] = $TaxRule->getTaxRate();
                $event->setData($YamatoSubsUsersOrderItem);
            }
        });

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            /** @var OrderItem $OrderItem */
            $YamatoSubsUsersOrderItem = $event->getData();

            $OrderItemType = $YamatoSubsUsersOrderItem->getOrderItemType();

            switch ($OrderItemType->getId()) {
                case OrderItemTypeMaster::PRODUCT:
                    $ProductClass = $YamatoSubsUsersOrderItem->getProductClass();
                    $Product = $ProductClass->getProduct();
                    $YamatoSubsUsersOrderItem->setProduct($Product);
                    if (null === $YamatoSubsUsersOrderItem->getPrice()) {
                        $YamatoSubsUsersOrderItem->setPrice($ProductClass->getPrice02());
                    }
                    if (null === $YamatoSubsUsersOrderItem->getProductCode()) {
                        $YamatoSubsUsersOrderItem->setProductCode($ProductClass->getCode());
                    }
                    if (null === $YamatoSubsUsersOrderItem->getClassName1() && $ProductClass->hasClassCategory1()) {
                        $ClassCategory1 = $ProductClass->getClassCategory1();
                        $YamatoSubsUsersOrderItem->setClassName1($ClassCategory1->getClassName()->getName());
                        $YamatoSubsUsersOrderItem->setClassCategoryName1($ClassCategory1->getName());
                    }
                    if (null === $YamatoSubsUsersOrderItem->getClassName2() && $ProductClass->hasClassCategory2()) {
                        if ($ClassCategory2 = $ProductClass->getClassCategory2()) {
                            $YamatoSubsUsersOrderItem->setClassName2($ClassCategory2->getClassName()->getName());
                            $YamatoSubsUsersOrderItem->setClassCategoryName2($ClassCategory2->getName());
                        }
                    }
                    if (null === $YamatoSubsUsersOrderItem->getRoundingType()) {
                        $TaxRule = $this->taxRuleRepository->getByRule($Product, $ProductClass);
                        $YamatoSubsUsersOrderItem->setRoundingType($TaxRule->getRoundingType())
                            ->setTaxAdjust($TaxRule->getTaxAdjust());
                    }
                    break;
                default:
                    if (null === $YamatoSubsUsersOrderItem->getRoundingType()) {
                        $TaxRule = $this->taxRuleRepository->getByRule();
                        $YamatoSubsUsersOrderItem->setRoundingType($TaxRule->getRoundingType())
                            ->setTaxAdjust($TaxRule->getTaxAdjust());
                    }
            }

            // 邪道なやり方だが、一旦TaxProcessor側の実装を真似てtax_display_typeを取得。。。
            $YamatoSubsUsersOrderItem->setTaxDisplayType($this->getTaxDisplayType($OrderItemType));

            // 税額計算
            if ($YamatoSubsUsersOrderItem->getTaxDisplayType()->getId() == TaxDisplayType::INCLUDED) {
                $tax = $this->taxRuleService->calcTaxIncluded(
                    $YamatoSubsUsersOrderItem->getPrice(),
                    $YamatoSubsUsersOrderItem->getTaxRate(),
                    $YamatoSubsUsersOrderItem->getRoundingType()->getId(),
                    $YamatoSubsUsersOrderItem->getTaxAdjust()
                );
            } else {
                $tax = $this->taxRuleService->calcTax(
                    $YamatoSubsUsersOrderItem->getPrice(),
                    $YamatoSubsUsersOrderItem->getTaxRate(),
                    $YamatoSubsUsersOrderItem->getRoundingType()->getId(),
                    $YamatoSubsUsersOrderItem->getTaxAdjust()
                );
            }
            $YamatoSubsUsersOrderItem->setTax($tax);
        });

        // price, quantityのバリデーション
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            /** @var OrderItem $OrderItem */
            $YamatoSubsUsersOrderItem = $event->getData();

            $OrderItemType = $YamatoSubsUsersOrderItem->getOrderItemType();
            switch ($OrderItemType->getId()) {
                // 商品明細: 金額 -> 正, 個数 -> 正負
                case OrderItemTypeMaster::PRODUCT:
                    $errors = $this->validator->validate($YamatoSubsUsersOrderItem->getPrice(), [new Assert\GreaterThanOrEqual(0)]);
                    $this->addErrorsIfExists($form['price'], $errors);
                    $errors = $this->validator->validate($YamatoSubsUsersOrderItem->getQuantity(), [new Assert\GreaterThanOrEqual(0)]);
                    $this->addErrorsIfExists($form['quantity'], $errors);
                    break;

                // 値引き明細: 金額 -> 負, 個数 -> 正
                case OrderItemTypeMaster::DISCOUNT:
                    $errors = $this->validator->validate($YamatoSubsUsersOrderItem->getPrice(), [new Assert\LessThanOrEqual(0)]);
                    $this->addErrorsIfExists($form['price'], $errors);
                    $errors = $this->validator->validate($YamatoSubsUsersOrderItem->getQuantity(), [new Assert\GreaterThanOrEqual(0)]);
                    $this->addErrorsIfExists($form['quantity'], $errors);

                    break;

                // 送料, 手数料: 金額 -> 正, 個数 -> 正
                case OrderItemTypeMaster::DELIVERY_FEE:
                case OrderItemTypeMaster::CHARGE:
                    $errors = $this->validator->validate($YamatoSubsUsersOrderItem->getPrice(), [new Assert\GreaterThanOrEqual(0)]);
                    $this->addErrorsIfExists($form['price'], $errors);
                    $errors = $this->validator->validate($YamatoSubsUsersOrderItem->getQuantity(), [new Assert\GreaterThanOrEqual(0)]);
                    $this->addErrorsIfExists($form['quantity'], $errors);

                    break;

                default:
                    break;
            }
        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => YamatoSubsUsersOrderItem::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'order_item';
    }

    /**
     * @param FormInterface $form
     * @param ConstraintViolationListInterface $errors
     */
    protected function addErrorsIfExists(FormInterface $form, ConstraintViolationListInterface $errors)
    {
        if (empty($errors)) {
            return;
        }

        foreach ($errors as $error) {
            $form->addError(new FormError(
                $error->getMessage(),
                $error->getMessageTemplate(),
                $error->getParameters(),
                $error->getPlural()));
        }
    }

    /**
     * ref: \Eccube\Service\PurchaseFlow\Processor\TaxProcessor#getTaxDisplayType()
     * 税表示区分を取得する.
     *
     * - 商品: 税抜
     * - 送料: 税込
     * - 値引き: 税抜
     * - 手数料: 税込
     * - ポイント値引き: 税込
     *
     * @param $OrderItemType
     *
     * @return TaxType
     */
    private function getTaxDisplayType($OrderItemType)
    {
        if ($OrderItemType instanceof OrderItemTypeMaster) {
            $OrderItemType = $OrderItemType->getId();
        }

        switch ($OrderItemType) {
            case OrderItemTypeMaster::PRODUCT:
                return $this->entityManager->find(TaxDisplayType::class, TaxDisplayType::EXCLUDED);
            case OrderItemTypeMaster::DELIVERY_FEE:
                return $this->entityManager->find(TaxDisplayType::class, TaxDisplayType::INCLUDED);
            case OrderItemTypeMaster::DISCOUNT:
                return $this->entityManager->find(TaxDisplayType::class, TaxDisplayType::INCLUDED);
            case OrderItemTypeMaster::CHARGE:
                return $this->entityManager->find(TaxDisplayType::class, TaxDisplayType::INCLUDED);
            case OrderItemTypeMaster::POINT:
                return $this->entityManager->find(TaxDisplayType::class, TaxDisplayType::INCLUDED);
            default:
                return $this->entityManager->find(TaxDisplayType::class, TaxDisplayType::EXCLUDED);
        }
    }
}
