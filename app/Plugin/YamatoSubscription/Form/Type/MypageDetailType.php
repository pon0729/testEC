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

namespace Plugin\YamatoSubscription\Form\Type;

use Eccube\Common\EccubeConfig;
use Plugin\YamatoSubscription\Controller\ControllerTrait;
use Plugin\YamatoSubscription\Entity\YamatoSubs;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class MypageDetailType extends AbstractType
{
    use ControllerTrait;

    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var AuthorizationCheckerInterface
     */
    protected $authorizationChecker;

    /**
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * @var YamatoSubsRepository
     */
    protected $yamatoSubsRepository;

    public function __construct(
        EccubeConfig $eccubeConfig,
        RequestStack $requestStack,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        YamatoSubsRepository $yamatoSubsRepository
    )
    {
        $this->eccubeConfig = $eccubeConfig;
        $this->requestStack = $requestStack;
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenStorage = $tokenStorage;
        $this->yamatoSubsRepository = $yamatoSubsRepository;
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
            ->add('subs_month_period', ChoiceType::class, [
                'choices' => ['1ヶ月間隔' => 1, '2ヶ月間隔' => 2, '3ヶ月間隔' => 3],
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'label' => 'お届け間隔',
                //'data' => 1,
            ])
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
                if (!$this->authorizationChecker->isGranted('ROLE_USER')) {
                    return;
                }

                $request = $this->requestStack->getCurrentRequest();
                $form = $event->getForm();
                $inputYamatoSubs = $form->getData();

                $id = intval($request->attributes->get('id'), 10);
                $Customer = $this->tokenStorage->getToken()->getUser();
                $YamatoSubs = $this->yamatoSubsRepository->findOneBy(['visible' => true, 'id' => $id, 'cancelled_date' => null]);

                /* 定期配送ID */
                if (empty($YamatoSubs)) {
                    throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
                }
                $SubsCustomer = $YamatoSubs->getYamatoSubsHistories()->last()->getOrder()->getCustomer();
                if ($Customer->getId() !== $SubsCustomer->getId()) {
                    throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
                }

                /* 配送間隔 */
                // nop
            });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => YamatoSubs::class,
        ]);
    }
}
