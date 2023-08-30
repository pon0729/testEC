<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class EccubeProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/retail_admin')) {
            // admin_login
            if ('/retail_admin/login' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\AdminController::login',  '_route' => 'admin_login',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_admin_login;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_login', key($requiredSchemes)));
                }

                return $ret;
            }
            not_admin_login:

            // admin_homepage
            if ('/retail_admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\AdminController::index',  '_route' => 'admin_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_homepage'));
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_admin_homepage;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_homepage', key($requiredSchemes)));
                }

                return $ret;
            }
            not_admin_homepage:

            if (0 === strpos($pathinfo, '/retail_admin/s')) {
                // admin_homepage_sale
                if ('/retail_admin/sale_chart' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\AdminController::sale',  '_route' => 'admin_homepage_sale',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_homepage_sale;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_homepage_sale', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_homepage_sale:

                if (0 === strpos($pathinfo, '/retail_admin/se')) {
                    // admin_homepage_nonstock
                    if ('/retail_admin/search_nonstock' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\AdminController::searchNonStockProducts',  '_route' => 'admin_homepage_nonstock',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_homepage_nonstock;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_homepage_nonstock', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_homepage_nonstock:

                    // admin_homepage_customer
                    if ('/retail_admin/search_customer' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\AdminController::searchCustomer',  '_route' => 'admin_homepage_customer',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_homepage_customer;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_homepage_customer', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_homepage_customer:

                    if (0 === strpos($pathinfo, '/retail_admin/setting/shop')) {
                        // admin_setting_shop_csv
                        if (0 === strpos($pathinfo, '/retail_admin/setting/shop/csv') && preg_match('#^/retail_admin/setting/shop/csv(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_shop_csv']), array (  'id' => 3,  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\CsvController::index',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_setting_shop_csv;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_csv', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_setting_shop_csv:

                        if (0 === strpos($pathinfo, '/retail_admin/setting/shop/delivery')) {
                            // admin_setting_shop_delivery
                            if ('/retail_admin/setting/shop/delivery' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::index',  '_route' => 'admin_setting_shop_delivery',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_delivery;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_delivery', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_delivery:

                            // admin_setting_shop_delivery_new
                            if ('/retail_admin/setting/shop/delivery/new' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::edit',  '_route' => 'admin_setting_shop_delivery_new',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_delivery_new;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_delivery_new', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_delivery_new:

                            // admin_setting_shop_delivery_edit
                            if (preg_match('#^/retail_admin/setting/shop/delivery/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_shop_delivery_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::edit',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_delivery_edit;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_delivery_edit', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_delivery_edit:

                            // admin_setting_shop_delivery_delete
                            if (preg_match('#^/retail_admin/setting/shop/delivery/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_shop_delivery_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::delete',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['DELETE'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['DELETE']);
                                    }
                                    goto not_admin_setting_shop_delivery_delete;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_delivery_delete;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_delivery_delete', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_delivery_delete:

                            // admin_setting_shop_delivery_visibility
                            if (preg_match('#^/retail_admin/setting/shop/delivery/(?P<id>\\d+)/visibility$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_shop_delivery_visibility']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::visibility',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['PUT'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['PUT']);
                                    }
                                    goto not_admin_setting_shop_delivery_visibility;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_delivery_visibility;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_delivery_visibility', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_delivery_visibility:

                            // admin_setting_shop_delivery_sort_no_move
                            if ('/retail_admin/setting/shop/delivery/sort_no/move' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::moveSortNo',  '_route' => 'admin_setting_shop_delivery_sort_no_move',);
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['POST'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['POST']);
                                    }
                                    goto not_admin_setting_shop_delivery_sort_no_move;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_delivery_sort_no_move;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_delivery_sort_no_move', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_delivery_sort_no_move:

                        }

                        elseif (0 === strpos($pathinfo, '/retail_admin/setting/shop/mail')) {
                            // admin_setting_shop_mail
                            if ('/retail_admin/setting/shop/mail' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController::index',  '_route' => 'admin_setting_shop_mail',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_mail;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_mail', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_mail:

                            // admin_setting_shop_mail_edit
                            if (preg_match('#^/retail_admin/setting/shop/mail/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_shop_mail_edit']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController::index',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_mail_edit;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_mail_edit', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_mail_edit:

                            // admin_setting_shop_mail_preview
                            if ('/retail_admin/setting/shop/mail/preview' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController::preview',  '_route' => 'admin_setting_shop_mail_preview',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_mail_preview;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_mail_preview', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_mail_preview:

                        }

                        elseif (0 === strpos($pathinfo, '/retail_admin/setting/shop/payment')) {
                            // admin_setting_shop_payment
                            if ('/retail_admin/setting/shop/payment' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::index',  '_route' => 'admin_setting_shop_payment',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_payment;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_payment', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_payment:

                            // admin_setting_shop_payment_new
                            if ('/retail_admin/setting/shop/payment/new' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::edit',  '_route' => 'admin_setting_shop_payment_new',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_payment_new;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_payment_new', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_payment_new:

                            // admin_setting_shop_payment_edit
                            if (preg_match('#^/retail_admin/setting/shop/payment/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_shop_payment_edit']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::edit',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_payment_edit;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_payment_edit', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_payment_edit:

                            // admin_payment_image_add
                            if ('/retail_admin/setting/shop/payment/image/add' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::imageAdd',  '_route' => 'admin_payment_image_add',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_payment_image_add;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_payment_image_add', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_payment_image_add:

                            // admin_setting_shop_payment_delete
                            if (preg_match('#^/retail_admin/setting/shop/payment/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_shop_payment_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::delete',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['DELETE'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['DELETE']);
                                    }
                                    goto not_admin_setting_shop_payment_delete;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_payment_delete;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_payment_delete', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_payment_delete:

                            // admin_setting_shop_payment_visible
                            if (preg_match('#^/retail_admin/setting/shop/payment/(?P<id>\\d+)/visible$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_shop_payment_visible']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::visible',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['PUT'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['PUT']);
                                    }
                                    goto not_admin_setting_shop_payment_visible;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_payment_visible;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_payment_visible', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_payment_visible:

                            // admin_setting_shop_payment_sort_no_move
                            if ('/retail_admin/setting/shop/payment/sort_no/move' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::moveSortNo',  '_route' => 'admin_setting_shop_payment_sort_no_move',);
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['POST'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['POST']);
                                    }
                                    goto not_admin_setting_shop_payment_sort_no_move;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_payment_sort_no_move;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_payment_sort_no_move', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_payment_sort_no_move:

                        }

                        // admin_setting_shop
                        if ('/retail_admin/setting/shop' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\ShopController::index',  '_route' => 'admin_setting_shop',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_setting_shop;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_setting_shop:

                        if (0 === strpos($pathinfo, '/retail_admin/setting/shop/tax')) {
                            // admin_setting_shop_tax
                            if ('/retail_admin/setting/shop/tax' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController::index',  '_route' => 'admin_setting_shop_tax',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_tax;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_tax', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_tax:

                            // admin_setting_shop_tax_new
                            if ('/retail_admin/setting/shop/tax/new' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController::index',  '_route' => 'admin_setting_shop_tax_new',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_tax_new;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_tax_new', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_tax_new:

                            // admin_setting_shop_tax_delete
                            if (preg_match('#^/retail_admin/setting/shop/tax/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_shop_tax_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController::delete',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['DELETE'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['DELETE']);
                                    }
                                    goto not_admin_setting_shop_tax_delete;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_shop_tax_delete;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_shop_tax_delete', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_shop_tax_delete:

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/retail_admin/setting/system')) {
                        // admin_setting_system_authority
                        if ('/retail_admin/setting/system/authority' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\AuthorityController::index',  '_route' => 'admin_setting_system_authority',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_setting_system_authority;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_authority', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_setting_system_authority:

                        // admin_setting_system_log
                        if ('/retail_admin/setting/system/log' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\LogController::index',  '_route' => 'admin_setting_system_log',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_setting_system_log;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_log', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_setting_system_log:

                        if (0 === strpos($pathinfo, '/retail_admin/setting/system/masterdata')) {
                            // admin_setting_system_masterdata
                            if ('/retail_admin/setting/system/masterdata' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController::index',  '_route' => 'admin_setting_system_masterdata',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_masterdata;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_masterdata', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_masterdata:

                            // admin_setting_system_masterdata_view
                            if (preg_match('#^/retail_admin/setting/system/masterdata/(?P<entity>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_system_masterdata_view']), array (  'entity' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController::index',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_masterdata_view;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_masterdata_view', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_masterdata_view:

                            // admin_setting_system_masterdata_edit
                            if ('/retail_admin/setting/system/masterdata/edit' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController::edit',  '_route' => 'admin_setting_system_masterdata_edit',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_masterdata_edit;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_masterdata_edit', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_masterdata_edit:

                        }

                        elseif (0 === strpos($pathinfo, '/retail_admin/setting/system/member')) {
                            // admin_setting_system_member
                            if ('/retail_admin/setting/system/member' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::index',  '_route' => 'admin_setting_system_member',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_member;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_member', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_member:

                            // admin_setting_system_member_new
                            if ('/retail_admin/setting/system/member/new' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::create',  '_route' => 'admin_setting_system_member_new',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_member_new;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_member_new', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_member_new:

                            // admin_setting_system_member_edit
                            if (preg_match('#^/retail_admin/setting/system/member/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_system_member_edit']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::edit',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_member_edit;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_member_edit', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_member_edit:

                            // admin_setting_system_member_up
                            if (preg_match('#^/retail_admin/setting/system/member/(?P<id>\\d+)/up$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_system_member_up']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::up',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['PUT'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['PUT']);
                                    }
                                    goto not_admin_setting_system_member_up;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_member_up;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_member_up', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_member_up:

                            // admin_setting_system_member_down
                            if (preg_match('#^/retail_admin/setting/system/member/(?P<id>\\d+)/down$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_system_member_down']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::down',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['PUT'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['PUT']);
                                    }
                                    goto not_admin_setting_system_member_down;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_member_down;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_member_down', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_member_down:

                            // admin_setting_system_member_delete
                            if (preg_match('#^/retail_admin/setting/system/member/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_setting_system_member_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::delete',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['DELETE'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['DELETE']);
                                    }
                                    goto not_admin_setting_system_member_delete;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_member_delete;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_member_delete', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_member_delete:

                        }

                        // admin_setting_system_security
                        if ('/retail_admin/setting/system/security' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\SecurityController::index',  '_route' => 'admin_setting_system_security',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_setting_system_security;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_security', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_setting_system_security:

                        if (0 === strpos($pathinfo, '/retail_admin/setting/system/system')) {
                            // admin_setting_system_system
                            if ('/retail_admin/setting/system/system' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\SystemController::index',  '_route' => 'admin_setting_system_system',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_system;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_system', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_system:

                            // admin_setting_system_system_phpinfo
                            if ('/retail_admin/setting/system/system/phpinfo' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\SystemController::phpinfo',  '_route' => 'admin_setting_system_system_phpinfo',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_setting_system_system_phpinfo;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_setting_system_system_phpinfo', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_setting_system_system_phpinfo:

                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/retail_admin/shipping')) {
                    // admin_shipping_update_order_status
                    if (preg_match('#^/retail_admin/shipping/(?P<id>\\d+)/order_status$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_shipping_update_order_status']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::updateOrderStatus',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['PUT'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['PUT']);
                            }
                            goto not_admin_shipping_update_order_status;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_shipping_update_order_status;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_shipping_update_order_status', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_shipping_update_order_status:

                    // admin_shipping_update_tracking_number
                    if (preg_match('#^/retail_admin/shipping/(?P<id>\\d+)/tracking_number$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_shipping_update_tracking_number']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::updateTrackingNumber',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['PUT'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['PUT']);
                            }
                            goto not_admin_shipping_update_tracking_number;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_shipping_update_tracking_number;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_shipping_update_tracking_number', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_shipping_update_tracking_number:

                    // admin_shipping_edit
                    if (preg_match('#^/retail_admin/shipping/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_shipping_edit']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\ShippingController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_shipping_edit;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_shipping_edit', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_shipping_edit:

                    // admin_shipping_preview_notify_mail
                    if (0 === strpos($pathinfo, '/retail_admin/shipping/preview_notify_mail') && preg_match('#^/retail_admin/shipping/preview_notify_mail/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_shipping_preview_notify_mail']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\ShippingController::previewShippingNotifyMail',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_shipping_preview_notify_mail;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_shipping_preview_notify_mail', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_shipping_preview_notify_mail:

                    // admin_shipping_notify_mail
                    if (0 === strpos($pathinfo, '/retail_admin/shipping/notify_mail') && preg_match('#^/retail_admin/shipping/notify_mail/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_shipping_notify_mail']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\ShippingController::notifyMail',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['PUT'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['PUT']);
                            }
                            goto not_admin_shipping_notify_mail;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_shipping_notify_mail;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_shipping_notify_mail', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_shipping_notify_mail:

                }

                elseif (0 === strpos($pathinfo, '/retail_admin/store/plugin')) {
                    if (0 === strpos($pathinfo, '/retail_admin/store/plugin/api')) {
                        if (0 === strpos($pathinfo, '/retail_admin/store/plugin/api/search')) {
                            // admin_store_plugin_owners_search
                            if ('/retail_admin/store/plugin/api/search' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::search',  '_route' => 'admin_store_plugin_owners_search',);
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_store_plugin_owners_search;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_owners_search', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_store_plugin_owners_search:

                            // admin_store_plugin_owners_search_page
                            if (0 === strpos($pathinfo, '/retail_admin/store/plugin/api/search/page') && preg_match('#^/retail_admin/store/plugin/api/search/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_plugin_owners_search_page']), array (  'page_no' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::search',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_store_plugin_owners_search_page;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_owners_search_page', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_store_plugin_owners_search_page:

                        }

                        // admin_store_plugin_api_schema_update
                        if ('/retail_admin/store/plugin/api/schema_update' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiSchemaUpdate',  '_route' => 'admin_store_plugin_api_schema_update',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['POST']);
                                }
                                goto not_admin_store_plugin_api_schema_update;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_store_plugin_api_schema_update;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_api_schema_update', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_store_plugin_api_schema_update:

                        if (0 === strpos($pathinfo, '/retail_admin/store/plugin/api/install')) {
                            // admin_store_plugin_install_confirm
                            if (preg_match('#^/retail_admin/store/plugin/api/install/(?P<id>\\d+)/confirm$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_plugin_install_confirm']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::doConfirm',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_store_plugin_install_confirm;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_install_confirm', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_store_plugin_install_confirm:

                            // admin_store_plugin_api_install
                            if ('/retail_admin/store/plugin/api/install' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiInstall',  '_route' => 'admin_store_plugin_api_install',);
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['POST'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['POST']);
                                    }
                                    goto not_admin_store_plugin_api_install;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_store_plugin_api_install;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_api_install', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_store_plugin_api_install:

                        }

                        // admin_store_plugin_api_uninstall
                        if (0 === strpos($pathinfo, '/retail_admin/store/plugin/api/delete') && preg_match('#^/retail_admin/store/plugin/api/delete/(?P<id>\\d+)/uninstall$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_plugin_api_uninstall']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiUninstall',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['DELETE']);
                                }
                                goto not_admin_store_plugin_api_uninstall;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_store_plugin_api_uninstall;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_api_uninstall', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_store_plugin_api_uninstall:

                        if (0 === strpos($pathinfo, '/retail_admin/store/plugin/api/upgrade')) {
                            // admin_store_plugin_api_upgrade
                            if ('/retail_admin/store/plugin/api/upgrade' === $pathinfo) {
                                $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiUpgrade',  '_route' => 'admin_store_plugin_api_upgrade',);
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($requestMethod, ['POST'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['POST']);
                                    }
                                    goto not_admin_store_plugin_api_upgrade;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_store_plugin_api_upgrade;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_api_upgrade', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_store_plugin_api_upgrade:

                            // admin_store_plugin_update_confirm
                            if (preg_match('#^/retail_admin/store/plugin/api/upgrade/(?P<id>\\d+)/confirm$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_plugin_update_confirm']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::doUpdateConfirm',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$context->getScheme()])) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_admin_store_plugin_update_confirm;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_update_confirm', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_store_plugin_update_confirm:

                        }

                        // admin_store_plugin_api_update
                        if ('/retail_admin/store/plugin/api/update' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiUpdate',  '_route' => 'admin_store_plugin_api_update',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['POST']);
                                }
                                goto not_admin_store_plugin_api_update;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_store_plugin_api_update;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_api_update', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_store_plugin_api_update:

                    }

                    // admin_store_plugin
                    if ('/retail_admin/store/plugin' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::index',  '_route' => 'admin_store_plugin',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_plugin;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_plugin:

                    // admin_store_plugin_update
                    if (preg_match('#^/retail_admin/store/plugin/(?P<id>\\d+)/update$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_plugin_update']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::update',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['POST']);
                            }
                            goto not_admin_store_plugin_update;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_plugin_update;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_update', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_plugin_update:

                    // admin_store_plugin_enable
                    if (preg_match('#^/retail_admin/store/plugin/(?P<id>\\d+)/enable$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_plugin_enable']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::enable',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['POST']);
                            }
                            goto not_admin_store_plugin_enable;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_plugin_enable;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_enable', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_plugin_enable:

                    // admin_store_plugin_disable
                    if (preg_match('#^/retail_admin/store/plugin/(?P<id>\\d+)/disable$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_plugin_disable']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::disable',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['POST']);
                            }
                            goto not_admin_store_plugin_disable;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_plugin_disable;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_disable', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_plugin_disable:

                    // admin_store_plugin_uninstall
                    if (preg_match('#^/retail_admin/store/plugin/(?P<id>\\d+)/uninstall$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_plugin_uninstall']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::uninstall',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_admin_store_plugin_uninstall;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_plugin_uninstall;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_uninstall', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_plugin_uninstall:

                    // admin_store_plugin_install
                    if ('/retail_admin/store/plugin/install' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::install',  '_route' => 'admin_store_plugin_install',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_plugin_install;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_plugin_install', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_plugin_install:

                    // admin_store_authentication_setting
                    if ('/retail_admin/store/plugin/authentication_setting' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::authenticationSetting',  '_route' => 'admin_store_authentication_setting',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_authentication_setting;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_authentication_setting', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_authentication_setting:

                }

                elseif (0 === strpos($pathinfo, '/retail_admin/store/template')) {
                    // admin_store_template
                    if ('/retail_admin/store/template' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::index',  '_route' => 'admin_store_template',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_template;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_template', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_template:

                    // admin_store_template_download
                    if (preg_match('#^/retail_admin/store/template/(?P<id>\\d+)/download$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_template_download']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::download',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_template_download;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_template_download', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_template_download:

                    // admin_store_template_delete
                    if (preg_match('#^/retail_admin/store/template/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_store_template_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::delete',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_admin_store_template_delete;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_template_delete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_template_delete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_template_delete:

                    // admin_store_template_install
                    if ('/retail_admin/store/template/install' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::install',  '_route' => 'admin_store_template_install',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_store_template_install;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_store_template_install', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_store_template_install:

                }

            }

            elseif (0 === strpos($pathinfo, '/retail_admin/c')) {
                // admin_change_password
                if ('/retail_admin/change_password' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\AdminController::changePassword',  '_route' => 'admin_change_password',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_change_password;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_change_password', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_change_password:

                if (0 === strpos($pathinfo, '/retail_admin/content')) {
                    if (0 === strpos($pathinfo, '/retail_admin/content/block')) {
                        // admin_content_block
                        if ('/retail_admin/content/block' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::index',  '_route' => 'admin_content_block',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_block;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_block', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_block:

                        // admin_content_block_new
                        if ('/retail_admin/content/block/new' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::edit',  '_route' => 'admin_content_block_new',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_block_new;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_block_new', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_block_new:

                        // admin_content_block_edit
                        if (preg_match('#^/retail_admin/content/block/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_block_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::edit',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_block_edit;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_block_edit', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_block_edit:

                        // admin_content_block_delete
                        if (preg_match('#^/retail_admin/content/block/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_block_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::delete',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['DELETE']);
                                }
                                goto not_admin_content_block_delete;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_block_delete;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_block_delete', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_block_delete:

                    }

                    // admin_content_cache
                    if ('/retail_admin/content/cache' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\CacheController::index',  '_route' => 'admin_content_cache',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_content_cache;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_cache', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_content_cache:

                    // admin_content_css
                    if ('/retail_admin/content/css' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\CssController::index',  '_route' => 'admin_content_css',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_content_css;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_css', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_content_css:

                    if (0 === strpos($pathinfo, '/retail_admin/content/file_')) {
                        // admin_content_file
                        if ('/retail_admin/content/file_manager' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::index',  '_route' => 'admin_content_file',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_file;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_file', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_file:

                        // admin_content_file_view
                        if ('/retail_admin/content/file_view' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::view',  '_route' => 'admin_content_file_view',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_file_view;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_file_view', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_file_view:

                        // admin_content_file_delete
                        if ('/retail_admin/content/file_delete' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::delete',  '_route' => 'admin_content_file_delete',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['DELETE']);
                                }
                                goto not_admin_content_file_delete;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_file_delete;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_file_delete', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_file_delete:

                        // admin_content_file_download
                        if ('/retail_admin/content/file_download' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::download',  '_route' => 'admin_content_file_download',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_file_download;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_file_download', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_file_download:

                    }

                    // admin_content_js
                    if ('/retail_admin/content/js' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\JsController::index',  '_route' => 'admin_content_js',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_content_js;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_js', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_content_js:

                    if (0 === strpos($pathinfo, '/retail_admin/content/layout')) {
                        // admin_content_layout
                        if ('/retail_admin/content/layout' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::index',  '_route' => 'admin_content_layout',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_layout;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_layout', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_layout:

                        // admin_content_layout_delete
                        if (preg_match('#^/retail_admin/content/layout/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_layout_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::delete',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['DELETE']);
                                }
                                goto not_admin_content_layout_delete;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_layout_delete;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_layout_delete', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_layout_delete:

                        // admin_content_layout_new
                        if ('/retail_admin/content/layout/new' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::edit',  '_route' => 'admin_content_layout_new',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_layout_new;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_layout_new', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_layout_new:

                        // admin_content_layout_edit
                        if (preg_match('#^/retail_admin/content/layout/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_layout_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::edit',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_layout_edit;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_layout_edit', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_layout_edit:

                        // admin_content_layout_view_block
                        if ('/retail_admin/content/layout/view_block' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::viewBlock',  '_route' => 'admin_content_layout_view_block',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['GET']);
                                }
                                goto not_admin_content_layout_view_block;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_layout_view_block;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_layout_view_block', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_layout_view_block:

                        // admin_content_layout_preview
                        if (preg_match('#^/retail_admin/content/layout/(?P<id>\\d+)/preview$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_layout_preview']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::preview',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_layout_preview;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_layout_preview', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_layout_preview:

                    }

                    // admin_content_maintenance
                    if ('/retail_admin/content/maintenance' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\MaintenanceController::index',  '_route' => 'admin_content_maintenance',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_content_maintenance;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_maintenance', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_content_maintenance:

                    if (0 === strpos($pathinfo, '/retail_admin/content/news')) {
                        // admin_content_news
                        if ('/retail_admin/content/news' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::index',  '_route' => 'admin_content_news',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_news;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_news', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_news:

                        // admin_content_news_page
                        if (0 === strpos($pathinfo, '/retail_admin/content/news/page') && preg_match('#^/retail_admin/content/news/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_news_page']), array (  'page_no' => 1,  '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::index',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_news_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_news_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_news_page:

                        // admin_content_news_new
                        if ('/retail_admin/content/news/new' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::edit',  '_route' => 'admin_content_news_new',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_news_new;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_news_new', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_news_new:

                        // admin_content_news_edit
                        if (preg_match('#^/retail_admin/content/news/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_news_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::edit',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_news_edit;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_news_edit', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_news_edit:

                        // admin_content_news_delete
                        if (preg_match('#^/retail_admin/content/news/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_news_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::delete',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['DELETE']);
                                }
                                goto not_admin_content_news_delete;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_news_delete;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_news_delete', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_news_delete:

                    }

                    elseif (0 === strpos($pathinfo, '/retail_admin/content/page')) {
                        // admin_content_page
                        if ('/retail_admin/content/page' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::index',  '_route' => 'admin_content_page',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_page:

                        // admin_content_page_new
                        if ('/retail_admin/content/page/new' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::edit',  '_route' => 'admin_content_page_new',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_page_new;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_page_new', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_page_new:

                        // admin_content_page_edit
                        if (preg_match('#^/retail_admin/content/page/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_page_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::edit',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_page_edit;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_page_edit', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_page_edit:

                        // admin_content_page_delete
                        if (preg_match('#^/retail_admin/content/page/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_content_page_delete']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::delete',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['DELETE']);
                                }
                                goto not_admin_content_page_delete;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_content_page_delete;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_content_page_delete', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_content_page_delete:

                    }

                }

                elseif (0 === strpos($pathinfo, '/retail_admin/contact')) {
                    // plugin_contact
                    if ('/retail_admin/contact' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\ContactManagement4\\Controller\\Admin\\ContactController::index',  '_route' => 'plugin_contact',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_contact;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_contact', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_contact:

                    // plugin_contact_page
                    if (preg_match('#^/retail_admin/contact(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_contact_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\ContactManagement4\\Controller\\Admin\\ContactController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_contact_page;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_contact_page', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_contact_page:

                    // plugin_contact_new
                    if ('/retail_admin/contact/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\ContactManagement4\\Controller\\Admin\\ContactEditController::index',  '_route' => 'plugin_contact_new',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_contact_new;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_contact_new', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_contact_new:

                    // plugin_contact_edit
                    if (preg_match('#^/retail_admin/contact/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_contact_edit']), array (  '_controller' => 'Plugin\\ContactManagement4\\Controller\\Admin\\ContactEditController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_contact_edit;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_contact_edit', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_contact_edit:

                    // plugin_contact_reply_new
                    if (preg_match('#^/retail_admin/contact/(?P<contact_id>[^/]++)/reply/new$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_contact_reply_new']), array (  '_controller' => 'Plugin\\ContactManagement4\\Controller\\Admin\\ContactReplyEditController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_contact_reply_new;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_contact_reply_new', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_contact_reply_new:

                    // plugin_contact_reply_edit
                    if (preg_match('#^/retail_admin/contact/(?P<contact_id>[^/]++)/reply/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_contact_reply_edit']), array (  'id' => NULL,  '_controller' => 'Plugin\\ContactManagement4\\Controller\\Admin\\ContactReplyEditController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_contact_reply_edit;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_contact_reply_edit', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_contact_reply_edit:

                    if (0 === strpos($pathinfo, '/retail_admin/contact/search/customer/html')) {
                        // plugin_contact_search_customer_html
                        if ('/retail_admin/contact/search/customer/html' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\ContactManagement4\\Controller\\Admin\\SearchCustomerController::searchCustomerHtml',  '_route' => 'plugin_contact_search_customer_html',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_contact_search_customer_html;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_contact_search_customer_html', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_contact_search_customer_html:

                        // plugin_contact_search_customer_html_page
                        if (0 === strpos($pathinfo, '/retail_admin/contact/search/customer/html/page') && preg_match('#^/retail_admin/contact/search/customer/html/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_contact_search_customer_html_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\ContactManagement4\\Controller\\Admin\\SearchCustomerController::searchCustomerHtml',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_contact_search_customer_html_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_contact_search_customer_html_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_contact_search_customer_html_page:

                    }

                    // plugin_contact_search_customer_by_id
                    if ('/retail_admin/contact/search/customer/id' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\ContactManagement4\\Controller\\Admin\\SearchCustomerController::searchCustomerById',  '_route' => 'plugin_contact_search_customer_by_id',);
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['POST']);
                            }
                            goto not_plugin_contact_search_customer_by_id;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_contact_search_customer_by_id;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_contact_search_customer_by_id', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_contact_search_customer_by_id:

                }

                elseif (0 === strpos($pathinfo, '/retail_admin/customer')) {
                    // admin_customer
                    if ('/retail_admin/customer' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::index',  '_route' => 'admin_customer',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer:

                    // admin_customer_page
                    if (0 === strpos($pathinfo, '/retail_admin/customer/page') && preg_match('#^/retail_admin/customer/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_customer_page']), array (  'page_no' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer_page;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer_page', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer_page:

                    // admin_customer_resend
                    if (preg_match('#^/retail_admin/customer/(?P<id>\\d+)/resend$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_customer_resend']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::resend',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer_resend;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer_resend', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer_resend:

                    // admin_customer_delete
                    if (preg_match('#^/retail_admin/customer/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_customer_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::delete',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_admin_customer_delete;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer_delete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer_delete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer_delete:

                    // admin_customer_export
                    if ('/retail_admin/customer/export' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::export',  '_route' => 'admin_customer_export',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer_export;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer_export', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer_export:

                    // admin_customer_delivery_new
                    if (preg_match('#^/retail_admin/customer/(?P<id>\\d+)/delivery/new$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_customer_delivery_new']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController::edit',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer_delivery_new;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer_delivery_new', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer_delivery_new:

                    // admin_customer_delivery_edit
                    if (preg_match('#^/retail_admin/customer/(?P<id>\\d+)/delivery/(?P<did>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_customer_delivery_edit']), array (  'did' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController::edit',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer_delivery_edit;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer_delivery_edit', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer_delivery_edit:

                    // admin_customer_delivery_delete
                    if (preg_match('#^/retail_admin/customer/(?P<id>\\d+)/delivery/(?P<did>\\d+)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_customer_delivery_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController::delete',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_admin_customer_delivery_delete;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer_delivery_delete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer_delivery_delete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer_delivery_delete:

                    // admin_customer_new
                    if ('/retail_admin/customer/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerEditController::index',  '_route' => 'admin_customer_new',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer_new;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer_new', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer_new:

                    // admin_customer_edit
                    if (preg_match('#^/retail_admin/customer/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_customer_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerEditController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_customer_edit;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_customer_edit', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_customer_edit:

                }

            }

            elseif (0 === strpos($pathinfo, '/retail_admin/order')) {
                // admin_shipping_csv_import
                if ('/retail_admin/order/shipping_csv_upload' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\CsvImportController::csvShipping',  '_route' => 'admin_shipping_csv_import',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_shipping_csv_import;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_shipping_csv_import', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_shipping_csv_import:

                // admin_shipping_csv_template
                if ('/retail_admin/order/csv_template' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\CsvImportController::csvTemplate',  '_route' => 'admin_shipping_csv_template',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_shipping_csv_template;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_shipping_csv_template', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_shipping_csv_template:

                // admin_order_new
                if ('/retail_admin/order/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::index',  '_route' => 'admin_order_new',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_order_new;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_new', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_order_new:

                // admin_order_edit
                if (preg_match('#^/retail_admin/order/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_order_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::index',));
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_order_edit;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_edit', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_order_edit:

                if (0 === strpos($pathinfo, '/retail_admin/order/search')) {
                    if (0 === strpos($pathinfo, '/retail_admin/order/search/customer/html')) {
                        // admin_order_search_customer_html
                        if ('/retail_admin/order/search/customer/html' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchCustomerHtml',  '_route' => 'admin_order_search_customer_html',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_order_search_customer_html;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_search_customer_html', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_order_search_customer_html:

                        // admin_order_search_customer_html_page
                        if (0 === strpos($pathinfo, '/retail_admin/order/search/customer/html/page') && preg_match('#^/retail_admin/order/search/customer/html/page(?:/(?P<page_no>[^/]++))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_order_search_customer_html_page']), array (  'page_no' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchCustomerHtml',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_order_search_customer_html_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_search_customer_html_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_order_search_customer_html_page:

                    }

                    // admin_order_search_customer_by_id
                    if ('/retail_admin/order/search/customer/id' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchCustomerById',  '_route' => 'admin_order_search_customer_by_id',);
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['POST']);
                            }
                            goto not_admin_order_search_customer_by_id;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_order_search_customer_by_id;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_search_customer_by_id', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_order_search_customer_by_id:

                    if (0 === strpos($pathinfo, '/retail_admin/order/search/product')) {
                        // admin_order_search_product
                        if ('/retail_admin/order/search/product' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchProduct',  '_route' => 'admin_order_search_product',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_order_search_product;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_search_product', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_order_search_product:

                        // admin_order_search_product_page
                        if (0 === strpos($pathinfo, '/retail_admin/order/search/product/page') && preg_match('#^/retail_admin/order/search/product/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_order_search_product_page']), array (  'page_no' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchProduct',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_order_search_product_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_search_product_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_order_search_product_page:

                    }

                    // admin_order_search_order_item_type
                    if ('/retail_admin/order/search/order_item_type' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchOrderItemType',  '_route' => 'admin_order_search_order_item_type',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_order_search_order_item_type;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_search_order_item_type', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_order_search_order_item_type:

                }

                // admin_order_mail
                if (preg_match('#^/retail_admin/order/(?P<id>\\d+)/mail$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_order_mail']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\MailController::index',));
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_order_mail;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_mail', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_order_mail:

                // admin_order_mail_view
                if ('/retail_admin/order/mail/view' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\MailController::view',  '_route' => 'admin_order_mail_view',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_order_mail_view;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_mail_view', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_order_mail_view:

                // admin_order
                if ('/retail_admin/order' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::index',  '_route' => 'admin_order',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_order;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_order:

                // admin_order_page
                if (0 === strpos($pathinfo, '/retail_admin/order/page') && preg_match('#^/retail_admin/order/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_order_page']), array (  'page_no' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::index',));
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_order_page;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_page', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_order_page:

                // admin_order_bulk_delete
                if ('/retail_admin/order/bulk_delete' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::bulkDelete',  '_route' => 'admin_order_bulk_delete',);
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['POST']);
                        }
                        goto not_admin_order_bulk_delete;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_order_bulk_delete;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_bulk_delete', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_order_bulk_delete:

                if (0 === strpos($pathinfo, '/retail_admin/order/export')) {
                    // admin_order_export_order
                    if ('/retail_admin/order/export/order' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportOrder',  '_route' => 'admin_order_export_order',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_order_export_order;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_export_order', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_order_export_order:

                    // admin_order_export_shipping
                    if ('/retail_admin/order/export/shipping' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportShipping',  '_route' => 'admin_order_export_shipping',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_order_export_shipping;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_export_shipping', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_order_export_shipping:

                    if (0 === strpos($pathinfo, '/retail_admin/order/export/pdf')) {
                        // admin_order_export_pdf
                        if ('/retail_admin/order/export/pdf' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportPdf',  '_route' => 'admin_order_export_pdf',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_order_export_pdf;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_export_pdf', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_order_export_pdf:

                        // admin_order_pdf_download
                        if ('/retail_admin/order/export/pdf/download' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportPdfDownload',  '_route' => 'admin_order_pdf_download',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_order_pdf_download;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_order_pdf_download', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_order_pdf_download:

                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/retail_admin/product')) {
                if (0 === strpos($pathinfo, '/retail_admin/product/c')) {
                    if (0 === strpos($pathinfo, '/retail_admin/product/category')) {
                        // admin_product_category
                        if ('/retail_admin/product/category' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::index',  '_route' => 'admin_product_category',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_category;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_category', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_category:

                        // admin_product_category_show
                        if (preg_match('#^/retail_admin/product/category(?:/(?P<parent_id>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_category_show']), array (  'parent_id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::index',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_category_show;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_category_show', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_category_show:

                        // admin_product_category_edit
                        if (preg_match('#^/retail_admin/product/category/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_category_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::index',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_category_edit;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_category_edit', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_category_edit:

                        // admin_product_category_delete
                        if (preg_match('#^/retail_admin/product/category/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_category_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::delete',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['DELETE']);
                                }
                                goto not_admin_product_category_delete;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_category_delete;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_category_delete', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_category_delete:

                        // admin_product_category_sort_no_move
                        if ('/retail_admin/product/category/sort_no/move' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::moveSortNo',  '_route' => 'admin_product_category_sort_no_move',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['POST']);
                                }
                                goto not_admin_product_category_sort_no_move;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_category_sort_no_move;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_category_sort_no_move', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_category_sort_no_move:

                        // admin_product_category_export
                        if ('/retail_admin/product/category/export' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::export',  '_route' => 'admin_product_category_export',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_category_export;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_category_export', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_category_export:

                        // admin_product_category_csv_import
                        if ('/retail_admin/product/category_csv_upload' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::csvCategory',  '_route' => 'admin_product_category_csv_import',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_category_csv_import;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_category_csv_import', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_category_csv_import:

                    }

                    elseif (0 === strpos($pathinfo, '/retail_admin/product/class_category')) {
                        // admin_product_class_category
                        if (preg_match('#^/retail_admin/product/class_category/(?P<class_name_id>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_class_category']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::index',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_class_category;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_class_category', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_class_category:

                        // admin_product_class_category_edit
                        if (preg_match('#^/retail_admin/product/class_category/(?P<class_name_id>\\d+)/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_class_category_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::index',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_class_category_edit;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_class_category_edit', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_class_category_edit:

                        // admin_product_class_category_delete
                        if (preg_match('#^/retail_admin/product/class_category/(?P<class_name_id>\\d+)/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_class_category_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::delete',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['DELETE']);
                                }
                                goto not_admin_product_class_category_delete;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_class_category_delete;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_class_category_delete', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_class_category_delete:

                        // admin_product_class_category_visibility
                        if (preg_match('#^/retail_admin/product/class_category/(?P<class_name_id>\\d+)/(?P<id>\\d+)/visibility$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_class_category_visibility']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::visibility',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['PUT'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['PUT']);
                                }
                                goto not_admin_product_class_category_visibility;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_class_category_visibility;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_class_category_visibility', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_class_category_visibility:

                        // admin_product_class_category_sort_no_move
                        if ('/retail_admin/product/class_category/sort_no/move' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::moveSortNo',  '_route' => 'admin_product_class_category_sort_no_move',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['POST']);
                                }
                                goto not_admin_product_class_category_sort_no_move;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_class_category_sort_no_move;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_class_category_sort_no_move', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_class_category_sort_no_move:

                    }

                    elseif (0 === strpos($pathinfo, '/retail_admin/product/class_name')) {
                        // admin_product_class_name
                        if ('/retail_admin/product/class_name' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::index',  '_route' => 'admin_product_class_name',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_class_name;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_class_name', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_class_name:

                        // admin_product_class_name_edit
                        if (preg_match('#^/retail_admin/product/class_name/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_class_name_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::index',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_class_name_edit;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_class_name_edit', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_class_name_edit:

                        // admin_product_class_name_delete
                        if (preg_match('#^/retail_admin/product/class_name/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_class_name_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::delete',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['DELETE']);
                                }
                                goto not_admin_product_class_name_delete;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_class_name_delete;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_class_name_delete', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_class_name_delete:

                        // admin_product_class_name_sort_no_move
                        if ('/retail_admin/product/class_name/sort_no/move' === $pathinfo) {
                            $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::moveSortNo',  '_route' => 'admin_product_class_name_sort_no_move',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['POST']);
                                }
                                goto not_admin_product_class_name_sort_no_move;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_admin_product_class_name_sort_no_move;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_class_name_sort_no_move', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_admin_product_class_name_sort_no_move:

                    }

                    // admin_product_csv_template
                    if (0 === strpos($pathinfo, '/retail_admin/product/csv_template') && preg_match('#^/retail_admin/product/csv_template/(?P<type>\\w+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_csv_template']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::csvTemplate',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_csv_template;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_csv_template', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_csv_template:

                }

                // admin_product_csv_import
                if ('/retail_admin/product/product_csv_upload' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::csvProduct',  '_route' => 'admin_product_csv_import',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_product_csv_import;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_csv_import', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_product_csv_import:

                if (0 === strpos($pathinfo, '/retail_admin/product/product/class')) {
                    // admin_product_product_class
                    if (preg_match('#^/retail_admin/product/product/class/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_product_class']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductClassController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_product_class;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_product_class', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_product_class:

                    // admin_product_product_class_clear
                    if (preg_match('#^/retail_admin/product/product/class/(?P<id>\\d+)/clear$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_product_class_clear']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductClassController::clearProductClasses',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_product_class_clear;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_product_class_clear', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_product_class_clear:

                }

                // admin_product
                if ('/retail_admin/product' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::index',  '_route' => 'admin_product',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_product;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_product:

                // admin_product_page
                if (0 === strpos($pathinfo, '/retail_admin/product/page') && preg_match('#^/retail_admin/product/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_page']), array (  'page_no' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::index',));
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_product_page;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_page', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_product_page:

                if (0 === strpos($pathinfo, '/retail_admin/product/product')) {
                    // admin_product_image_add
                    if ('/retail_admin/product/product/image/add' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::addImage',  '_route' => 'admin_product_image_add',);
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['POST']);
                            }
                            goto not_admin_product_image_add;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_image_add;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_image_add', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_image_add:

                    // admin_product_product_new
                    if ('/retail_admin/product/product/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::edit',  '_route' => 'admin_product_product_new',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_product_new;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_product_new', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_product_new:

                    // admin_product_product_edit
                    if (preg_match('#^/retail_admin/product/product/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_product_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::edit',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_product_edit;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_product_edit', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_product_edit:

                    // admin_product_product_delete
                    if (preg_match('#^/retail_admin/product/product/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_product_delete']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::delete',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_admin_product_product_delete;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_product_delete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_product_delete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_product_delete:

                    // admin_product_product_copy
                    if (preg_match('#^/retail_admin/product/product/(?P<id>\\d+)/copy$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_product_copy']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::copy',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['POST']);
                            }
                            goto not_admin_product_product_copy;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_product_copy;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_product_copy', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_product_copy:

                    // admin_product_product_display
                    if (preg_match('#^/retail_admin/product/product/(?P<id>\\d+)/display$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_product_display']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::display',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_product_display;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_product_display', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_product_display:

                }

                // admin_product_classes_load
                if (0 === strpos($pathinfo, '/retail_admin/product/classes') && preg_match('#^/retail_admin/product/classes/(?P<id>\\d+)/load$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_classes_load']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::loadProductClasses',));
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['GET']);
                        }
                        goto not_admin_product_classes_load;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_product_classes_load;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_classes_load', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_product_classes_load:

                if (0 === strpos($pathinfo, '/retail_admin/product/category')) {
                    // admin_product_recommend_category
                    if (preg_match('#^/retail_admin/product/category/(?P<id>\\d+)/recommend$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_recommend_category']), array (  '_controller' => 'Plugin\\CategoryRecommend4\\Controller\\CategoryRecommendController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_recommend_category;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_recommend_category', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_recommend_category:

                    // plugin_category_recommend_new
                    if (preg_match('#^/retail_admin/product/category/(?P<id>\\d+)/recommend/new$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_category_recommend_new']), array (  '_controller' => 'Plugin\\CategoryRecommend4\\Controller\\CategoryRecommendController::edit',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_category_recommend_new;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_category_recommend_new', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_category_recommend_new:

                    // plugin_category_recommend_edit
                    if (preg_match('#^/retail_admin/product/category/(?P<id>\\d+)/recommend/(?P<rid>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_category_recommend_edit']), array (  'rid' => NULL,  '_controller' => 'Plugin\\CategoryRecommend4\\Controller\\CategoryRecommendController::edit',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_category_recommend_edit;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_category_recommend_edit', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_category_recommend_edit:

                    // plugin_category_recommend_delete
                    if (0 === strpos($pathinfo, '/retail_admin/product/category/recommend') && preg_match('#^/retail_admin/product/category/recommend/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_category_recommend_delete']), array (  '_controller' => 'Plugin\\CategoryRecommend4\\Controller\\CategoryRecommendController::delete',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_plugin_category_recommend_delete;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_category_recommend_delete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_category_recommend_delete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_category_recommend_delete:

                    // plugin_category_recommend_rank_move
                    if (preg_match('#^/retail_admin/product/category/(?P<id>\\d+)/recommend/sort_no/move$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_category_recommend_rank_move']), array (  '_controller' => 'Plugin\\CategoryRecommend4\\Controller\\CategoryRecommendController::moveRank',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_category_recommend_rank_move;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_category_recommend_rank_move', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_category_recommend_rank_move:

                    if (0 === strpos($pathinfo, '/retail_admin/product/category/recommend/search/product')) {
                        // plugin_category_recommend_search_product
                        if ('/retail_admin/product/category/recommend/search/product' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\CategoryRecommend4\\Controller\\CategoryRecommendSearchModelController::searchProduct',  '_route' => 'plugin_category_recommend_search_product',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_category_recommend_search_product;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_category_recommend_search_product', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_category_recommend_search_product:

                        // plugin_category_recommend_search_product_page
                        if (0 === strpos($pathinfo, '/retail_admin/product/category/recommend/search/product/page') && preg_match('#^/retail_admin/product/category/recommend/search/product/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_category_recommend_search_product_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\CategoryRecommend4\\Controller\\CategoryRecommendSearchModelController::searchProduct',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_category_recommend_search_product_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_category_recommend_search_product_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_category_recommend_search_product_page:

                    }

                }

                // admin_product_export
                if ('/retail_admin/product/export' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::export',  '_route' => 'admin_product_export',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_product_export;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_export', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_product_export:

                // admin_product_bulk_product_status
                if (0 === strpos($pathinfo, '/retail_admin/product/bulk/product-status') && preg_match('#^/retail_admin/product/bulk/product\\-status/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_bulk_product_status']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::bulkProductStatus',));
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['POST']);
                        }
                        goto not_admin_product_bulk_product_status;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_product_bulk_product_status;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_bulk_product_status', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_product_bulk_product_status:

                if (0 === strpos($pathinfo, '/retail_admin/product/tag')) {
                    // admin_product_tag
                    if ('/retail_admin/product/tag' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\TagController::index',  '_route' => 'admin_product_tag',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_tag;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_tag', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_tag:

                    // admin_product_tag_delete
                    if (preg_match('#^/retail_admin/product/tag/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_tag_delete']), array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\TagController::delete',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_admin_product_tag_delete;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_tag_delete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_tag_delete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_tag_delete:

                    // admin_product_tag_sort_no_move
                    if ('/retail_admin/product/tag/sort_no/move' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eccube\\Controller\\Admin\\Product\\TagController::moveSortNo',  '_route' => 'admin_product_tag_sort_no_move',);
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['POST']);
                            }
                            goto not_admin_product_tag_sort_no_move;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_product_tag_sort_no_move;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_product_tag_sort_no_move', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_product_tag_sort_no_move:

                }

            }

            elseif (0 === strpos($pathinfo, '/retail_admin/plugin')) {
                if (0 === strpos($pathinfo, '/retail_admin/plugin/referral_code')) {
                    // plugin_referral_code_admin_new
                    if ('/retail_admin/plugin/referral_code/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\EditController::index',  '_route' => 'plugin_referral_code_admin_new',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_referral_code_admin_new;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_new', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_referral_code_admin_new:

                    // plugin_referral_code_admin_edit
                    if (preg_match('#^/retail_admin/plugin/referral_code/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_referral_code_admin_edit']), array (  'id' => NULL,  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\EditController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_referral_code_admin_edit;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_edit', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_referral_code_admin_edit:

                    if (0 === strpos($pathinfo, '/retail_admin/plugin/referral_code/config')) {
                        // referral_code_admin_config
                        if ('/retail_admin/plugin/referral_code/config' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeConfigController::index',  '_route' => 'referral_code_admin_config',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_referral_code_admin_config;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'referral_code_admin_config', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_referral_code_admin_config:

                        // referral_code_admin_config_update
                        if ('/retail_admin/plugin/referral_code/config/update' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeConfigController::update',  '_route' => 'referral_code_admin_config_update',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_referral_code_admin_config_update;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'referral_code_admin_config_update', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_referral_code_admin_config_update:

                    }

                    // plugin_referral_code_admin_list
                    if ('/retail_admin/plugin/referral_code' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeController::index',  '_route' => 'plugin_referral_code_admin_list',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_referral_code_admin_list;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_list', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_referral_code_admin_list:

                    // plugin_referral_code_admin_enable
                    if (preg_match('#^/retail_admin/plugin/referral_code/(?P<id>\\d+)/enable$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_referral_code_admin_enable']), array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeController::enable',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_referral_code_admin_enable;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_enable', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_referral_code_admin_enable:

                    // plugin_referral_code_admin_delete
                    if (preg_match('#^/retail_admin/plugin/referral_code/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_referral_code_admin_delete']), array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeController::delete',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_referral_code_admin_delete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_delete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_referral_code_admin_delete:

                    // plugin_referral_code_admin_download_referral_code_orders_csv
                    if ('/retail_admin/plugin/referral_code/download_referral_code_orders_csv' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeController::downloadReferralCodeOrdersCsv',  '_route' => 'plugin_referral_code_admin_download_referral_code_orders_csv',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_referral_code_admin_download_referral_code_orders_csv;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_download_referral_code_orders_csv', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_referral_code_admin_download_referral_code_orders_csv:

                    if (0 === strpos($pathinfo, '/retail_admin/plugin/referral_code/search/product')) {
                        // plugin_referral_code_admin_search_product
                        if ('/retail_admin/plugin/referral_code/search/product' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeSearchModelController::searchProduct',  '_route' => 'plugin_referral_code_admin_search_product',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_referral_code_admin_search_product;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_search_product', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_referral_code_admin_search_product:

                        // plugin_referral_code_admin_search_product_page
                        if (0 === strpos($pathinfo, '/retail_admin/plugin/referral_code/search/product/page') && preg_match('#^/retail_admin/plugin/referral_code/search/product/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_referral_code_admin_search_product_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeSearchModelController::searchProduct',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_referral_code_admin_search_product_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_search_product_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_referral_code_admin_search_product_page:

                    }

                    elseif (0 === strpos($pathinfo, '/retail_admin/plugin/referral_code/search/category')) {
                        // plugin_referral_code_admin_search_category
                        if ('/retail_admin/plugin/referral_code/search/category' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeSearchModelController::searchCategory',  '_route' => 'plugin_referral_code_admin_search_category',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_referral_code_admin_search_category;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_search_category', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_referral_code_admin_search_category:

                        // plugin_referral_code_admin_search_category_page
                        if (0 === strpos($pathinfo, '/retail_admin/plugin/referral_code/search/category/page') && preg_match('#^/retail_admin/plugin/referral_code/search/category/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_referral_code_admin_search_category_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\ReferralCode\\Controller\\Admin\\ReferralCodeSearchModelController::searchCategory',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_referral_code_admin_search_category_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_admin_search_category_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_referral_code_admin_search_category_page:

                    }

                }

                elseif (0 === strpos($pathinfo, '/retail_admin/plugin/yamato')) {
                    if (0 === strpos($pathinfo, '/retail_admin/plugin/yamatosubscription')) {
                        // yamato_subscription_admin_config
                        if ('/retail_admin/plugin/yamatosubscription/config' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionConfigController::index',  '_route' => 'yamato_subscription_admin_config',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['GET', 'POST']);
                                }
                                goto not_yamato_subscription_admin_config;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_yamato_subscription_admin_config;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_subscription_admin_config', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_yamato_subscription_admin_config:

                        // plugin_yamato_subscription_admin_list
                        if ('/retail_admin/plugin/yamatosubscription' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionController::index',  '_route' => 'plugin_yamato_subscription_admin_list',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['GET']);
                                }
                                goto not_plugin_yamato_subscription_admin_list;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_list;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_list', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_list:

                        // plugin_yamato_subscription_admin_list_page
                        if (0 === strpos($pathinfo, '/retail_admin/plugin/yamatosubscription/page') && preg_match('#^/retail_admin/plugin/yamatosubscription/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_admin_list_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionController::index',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_list_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_list_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_list_page:

                        // plugin_yamato_subscription_admin_bulk_credit
                        if ('/retail_admin/plugin/yamatosubscription/bulkcredit' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionController::bulkCredit',  '_route' => 'plugin_yamato_subscription_admin_bulk_credit',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['POST']);
                                }
                                goto not_plugin_yamato_subscription_admin_bulk_credit;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_bulk_credit;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_bulk_credit', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_bulk_credit:

                        // plugin_yamato_subscription_admin_export_order
                        if ('/retail_admin/plugin/yamatosubscription/export/order' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionController::exportOrder',  '_route' => 'plugin_yamato_subscription_admin_export_order',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['GET']);
                                }
                                goto not_plugin_yamato_subscription_admin_export_order;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_export_order;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_export_order', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_export_order:

                        if (0 === strpos($pathinfo, '/retail_admin/plugin/yamatosubscription/detail')) {
                            // plugin_yamato_subscription_admin_detail_change_contents
                            if (preg_match('#^/retail_admin/plugin/yamatosubscription/detail/(?P<id>\\d+)/change_contents$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_admin_detail_change_contents']), array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionDetailChangeContentsController::index',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['GET', 'POST']);
                                    }
                                    goto not_plugin_yamato_subscription_admin_detail_change_contents;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_plugin_yamato_subscription_admin_detail_change_contents;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_detail_change_contents', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_plugin_yamato_subscription_admin_detail_change_contents:

                            // plugin_yamato_subscription_admin_detail
                            if (preg_match('#^/retail_admin/plugin/yamatosubscription/detail/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_admin_detail']), array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionDetailController::index',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($canonicalMethod, ['GET'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['GET']);
                                    }
                                    goto not_plugin_yamato_subscription_admin_detail;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_plugin_yamato_subscription_admin_detail;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_detail', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_plugin_yamato_subscription_admin_detail:

                            // plugin_yamato_subscription_admin_detail_shipping_edit
                            if (preg_match('#^/retail_admin/plugin/yamatosubscription/detail/(?P<id>\\d+)/shipping/edit$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_admin_detail_shipping_edit']), array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionDetailShippingController::index',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['GET', 'POST']);
                                    }
                                    goto not_plugin_yamato_subscription_admin_detail_shipping_edit;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_plugin_yamato_subscription_admin_detail_shipping_edit;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_detail_shipping_edit', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_plugin_yamato_subscription_admin_detail_shipping_edit:

                        }

                        // plugin_yamato_subscription_admin_discount_list
                        if ('/retail_admin/plugin/yamatosubscription/discount/setting' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionDiscountController::index',  '_route' => 'plugin_yamato_subscription_admin_discount_list',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['GET', 'POST']);
                                }
                                goto not_plugin_yamato_subscription_admin_discount_list;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_discount_list;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_discount_list', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_discount_list:

                        if (0 === strpos($pathinfo, '/retail_admin/plugin/yamatosubscription/search/product')) {
                            // plugin_yamato_subscription_admin_search_product
                            if ('/retail_admin/plugin/yamatosubscription/search/product' === $pathinfo) {
                                $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionDetailChangeContentsController::searchProduct',  '_route' => 'plugin_yamato_subscription_admin_search_product',);
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['GET', 'POST']);
                                    }
                                    goto not_plugin_yamato_subscription_admin_search_product;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_plugin_yamato_subscription_admin_search_product;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_search_product', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_plugin_yamato_subscription_admin_search_product:

                            // plugin_yamato_subscription_admin_search_product_page
                            if (0 === strpos($pathinfo, '/retail_admin/plugin/yamatosubscription/search/product/page') && preg_match('#^/retail_admin/plugin/yamatosubscription/search/product/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_admin_search_product_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionDetailChangeContentsController::searchProduct',));
                                $requiredSchemes = array (  'https' => 0,);
                                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                    if ($hasRequiredScheme) {
                                        $allow = array_merge($allow, ['GET', 'POST']);
                                    }
                                    goto not_plugin_yamato_subscription_admin_search_product_page;
                                }
                                if (!$hasRequiredScheme) {
                                    if ('GET' !== $canonicalMethod) {
                                        goto not_plugin_yamato_subscription_admin_search_product_page;
                                    }

                                    return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_search_product_page', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_plugin_yamato_subscription_admin_search_product_page:

                        }

                        // plugin_yamato_subscription_admin_search_order_item_type
                        if ('/retail_admin/plugin/yamatosubscription/search/order_item_type' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionDetailChangeContentsController::searchOrderItemType',  '_route' => 'plugin_yamato_subscription_admin_search_order_item_type',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['POST']);
                                }
                                goto not_plugin_yamato_subscription_admin_search_order_item_type;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_search_order_item_type;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_search_order_item_type', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_search_order_item_type:

                        // plugin_yamato_subscription_admin_detail_cancel
                        if (0 === strpos($pathinfo, '/retail_admin/plugin/yamatosubscription/cancel') && preg_match('#^/retail_admin/plugin/yamatosubscription/cancel/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_admin_detail_cancel']), array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionDetailController::cancel',));
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['PUT'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['PUT']);
                                }
                                goto not_plugin_yamato_subscription_admin_detail_cancel;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_detail_cancel;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_detail_cancel', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_detail_cancel:

                    }

                    elseif (0 === strpos($pathinfo, '/retail_admin/plugin/yamato_subscription/search/product')) {
                        // plugin_yamato_subscription_admin_discount_search_product
                        if ('/retail_admin/plugin/yamato_subscription/search/product' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionSearchModelController::searchProduct',  '_route' => 'plugin_yamato_subscription_admin_discount_search_product',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_discount_search_product;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_discount_search_product', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_discount_search_product:

                        // plugin_yamato_subscription_admin_discount_search_product_page
                        if (0 === strpos($pathinfo, '/retail_admin/plugin/yamato_subscription/search/product/page') && preg_match('#^/retail_admin/plugin/yamato_subscription/search/product/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_admin_discount_search_product_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionSearchModelController::searchProduct',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_discount_search_product_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_discount_search_product_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_discount_search_product_page:

                    }

                    elseif (0 === strpos($pathinfo, '/retail_admin/plugin/yamato_subscription/search/category')) {
                        // plugin_yamato_subscription_admin_discount_search_category
                        if ('/retail_admin/plugin/yamato_subscription/search/category' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionSearchModelController::searchCategory',  '_route' => 'plugin_yamato_subscription_admin_discount_search_category',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_discount_search_category;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_discount_search_category', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_discount_search_category:

                        // plugin_yamato_subscription_admin_discount_search_category_page
                        if (0 === strpos($pathinfo, '/retail_admin/plugin/yamato_subscription/search/category/page') && preg_match('#^/retail_admin/plugin/yamato_subscription/search/category/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_admin_discount_search_category_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionSearchModelController::searchCategory',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_plugin_yamato_subscription_admin_discount_search_category_page;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_admin_discount_search_category_page', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_plugin_yamato_subscription_admin_discount_search_category_page:

                    }

                }

                elseif (0 === strpos($pathinfo, '/retail_admin/plugin/SortProduct4Plus')) {
                    // plugin_SortProduct
                    if ('/retail_admin/plugin/SortProduct4Plus' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\SortProduct4Plus\\Controller\\Admin\\SortProductController::index',  '_route' => 'plugin_SortProduct',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_SortProduct;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_SortProduct', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_SortProduct:

                    // sort_product4_admin_config
                    if ('/retail_admin/plugin/SortProduct4Plus/config' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\SortProduct4Plus\\Controller\\Admin\\SortProductController::index',  '_route' => 'sort_product4_admin_config',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_sort_product4_admin_config;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'sort_product4_admin_config', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_sort_product4_admin_config:

                    // plugin_SortProduct_byCategory
                    if (preg_match('#^/retail_admin/plugin/SortProduct4Plus(?:/(?P<categoryId>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_SortProduct_byCategory']), array (  'categoryId' => NULL,  '_controller' => 'Plugin\\SortProduct4Plus\\Controller\\Admin\\SortProductController::index',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plugin_SortProduct_byCategory;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_SortProduct_byCategory', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plugin_SortProduct_byCategory:

                    // plg_SortProduct_product_rank_move
                    if ('/retail_admin/plugin/SortProduct4Plus/rank/move' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\SortProduct4Plus\\Controller\\Admin\\SortProductController::moveRank',  '_route' => 'plg_SortProduct_product_rank_move',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_plg_SortProduct_product_rank_move;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'plg_SortProduct_product_rank_move', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_plg_SortProduct_product_rank_move:

                }

            }

            // admin_logout
            if ('/retail_admin/logout' === $pathinfo) {
                $ret = ['_route' => 'admin_logout'];
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_admin_logout;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_logout', key($requiredSchemes)));
                }

                return $ret;
            }
            not_admin_logout:

            if (0 === strpos($pathinfo, '/retail_admin/related_product/search/product')) {
                // admin_related_product_search
                if ('/retail_admin/related_product/search/product' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\RelatedProduct4\\Controller\\Admin\\RelatedProductController::searchProduct',  '_route' => 'admin_related_product_search',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_related_product_search;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_related_product_search', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_related_product_search:

                // admin_related_product_search_product_page
                if (0 === strpos($pathinfo, '/retail_admin/related_product/search/product/page') && preg_match('#^/retail_admin/related_product/search/product/page(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_related_product_search_product_page']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\RelatedProduct4\\Controller\\Admin\\RelatedProductController::searchProduct',));
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_related_product_search_product_page;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_related_product_search_product_page', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_related_product_search_product_page:

            }

            elseif (0 === strpos($pathinfo, '/retail_admin/yamato_payment/config')) {
                // yamato_payment4_admin_config
                if ('/retail_admin/yamato_payment/config' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\Admin\\ConfigController::index',  '_route' => 'yamato_payment4_admin_config',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_yamato_payment4_admin_config;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_payment4_admin_config', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_yamato_payment4_admin_config:

                // yamato_payment4_admin_config_ip_address
                if ('/retail_admin/yamato_payment/config/ip_address' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\Admin\\ConfigController::getGlobalIpAddress',  '_route' => 'yamato_payment4_admin_config_ip_address',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_yamato_payment4_admin_config_ip_address;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_payment4_admin_config_ip_address', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_yamato_payment4_admin_config_ip_address:

            }

            elseif (0 === strpos($pathinfo, '/retail_admin/yamato_payment4/payment_status')) {
                // yamato_payment4_admin_payment_status
                if ('/retail_admin/yamato_payment4/payment_status' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\Admin\\PaymentStatusController::index',  '_route' => 'yamato_payment4_admin_payment_status',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_yamato_payment4_admin_payment_status;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_payment4_admin_payment_status', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_yamato_payment4_admin_payment_status:

                // yamato_payment4_admin_payment_status_pageno
                if (preg_match('#^/retail_admin/yamato_payment4/payment_status(?:/(?P<page_no>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'yamato_payment4_admin_payment_status_pageno']), array (  'page_no' => NULL,  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\Admin\\PaymentStatusController::index',));
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_yamato_payment4_admin_payment_status_pageno;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_payment4_admin_payment_status_pageno', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_yamato_payment4_admin_payment_status_pageno:

                // yamato_payment4_admin_payment_status_request
                if ('/retail_admin/yamato_payment4/payment_status/request_action/' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\Admin\\PaymentStatusController::requestAction',  '_route' => 'yamato_payment4_admin_payment_status_request',);
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['POST']);
                        }
                        goto not_yamato_payment4_admin_payment_status_request;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_yamato_payment4_admin_payment_status_request;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_payment4_admin_payment_status_request', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_yamato_payment4_admin_payment_status_request:

            }

            elseif (0 === strpos($pathinfo, '/retail_admin/eccube_updater_405_to_406')) {
                if (0 === strpos($pathinfo, '/retail_admin/eccube_updater_405_to_406/c')) {
                    // eccube_updater405to406_admin_config
                    if ('/retail_admin/eccube_updater_405_to_406/config' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\EccubeUpdater405to406\\Controller\\Admin\\ConfigController::index',  '_route' => 'eccube_updater405to406_admin_config',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_eccube_updater405to406_admin_config;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'eccube_updater405to406_admin_config', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_eccube_updater405to406_admin_config:

                    // eccube_updater405to406_admin_complete
                    if ('/retail_admin/eccube_updater_405_to_406/complete' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\EccubeUpdater405to406\\Controller\\Admin\\ConfigController::complete',  '_route' => 'eccube_updater405to406_admin_complete',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_eccube_updater405to406_admin_complete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'eccube_updater405to406_admin_complete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_eccube_updater405to406_admin_complete:

                    if (0 === strpos($pathinfo, '/retail_admin/eccube_updater_405_to_406/check_')) {
                        // eccube_updater405to406_admin_check_plugin_version
                        if ('/retail_admin/eccube_updater_405_to_406/check_plugin_version' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\EccubeUpdater405to406\\Controller\\Admin\\ConfigController::checkPluginVersion',  '_route' => 'eccube_updater405to406_admin_check_plugin_version',);
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$context->getScheme()])) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_eccube_updater405to406_admin_check_plugin_version;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'eccube_updater405to406_admin_check_plugin_version', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_eccube_updater405to406_admin_check_plugin_version:

                        // eccube_updater405to406_admin_check_permission
                        if ('/retail_admin/eccube_updater_405_to_406/check_permission' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\EccubeUpdater405to406\\Controller\\Admin\\ConfigController::checkPermission',  '_route' => 'eccube_updater405to406_admin_check_permission',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['POST']);
                                }
                                goto not_eccube_updater405to406_admin_check_permission;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_eccube_updater405to406_admin_check_permission;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'eccube_updater405to406_admin_check_permission', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_eccube_updater405to406_admin_check_permission:

                        // eccube_updater405to406_admin_check_source
                        if ('/retail_admin/eccube_updater_405_to_406/check_source' === $pathinfo) {
                            $ret = array (  '_controller' => 'Plugin\\EccubeUpdater405to406\\Controller\\Admin\\ConfigController::checkSource',  '_route' => 'eccube_updater405to406_admin_check_source',);
                            $requiredSchemes = array (  'https' => 0,);
                            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                            if (!in_array($requestMethod, ['POST'])) {
                                if ($hasRequiredScheme) {
                                    $allow = array_merge($allow, ['POST']);
                                }
                                goto not_eccube_updater405to406_admin_check_source;
                            }
                            if (!$hasRequiredScheme) {
                                if ('GET' !== $canonicalMethod) {
                                    goto not_eccube_updater405to406_admin_check_source;
                                }

                                return array_replace($ret, $this->redirect($rawPathinfo, 'eccube_updater405to406_admin_check_source', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_eccube_updater405to406_admin_check_source:

                    }

                }

                // eccube_updater405to406_admin_update_files
                if ('/retail_admin/eccube_updater_405_to_406/update_files' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\EccubeUpdater405to406\\Controller\\Admin\\ConfigController::updateFiles',  '_route' => 'eccube_updater405to406_admin_update_files',);
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['POST']);
                        }
                        goto not_eccube_updater405to406_admin_update_files;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_eccube_updater405to406_admin_update_files;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'eccube_updater405to406_admin_update_files', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_eccube_updater405to406_admin_update_files:

                // eccube_updater405to406_admin_update_data
                if ('/retail_admin/eccube_updater_405_to_406/update_data' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\EccubeUpdater405to406\\Controller\\Admin\\ConfigController::updateData',  '_route' => 'eccube_updater405to406_admin_update_data',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_eccube_updater405to406_admin_update_data;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'eccube_updater405to406_admin_update_data', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_eccube_updater405to406_admin_update_data:

                // eccube_updater405to406_admin_dump_autoload
                if ('/retail_admin/eccube_updater_405_to_406/dump_autoload' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\EccubeUpdater405to406\\Controller\\Admin\\ConfigController::dumpAutoload',  '_route' => 'eccube_updater405to406_admin_dump_autoload',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_eccube_updater405to406_admin_dump_autoload;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'eccube_updater405to406_admin_dump_autoload', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_eccube_updater405to406_admin_dump_autoload:

                // eccube_updater405to406_admin_gen_proxy
                if ('/retail_admin/eccube_updater_405_to_406/gen_proxy' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\EccubeUpdater405to406\\Controller\\Admin\\ConfigController::generateProxy',  '_route' => 'eccube_updater405to406_admin_gen_proxy',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_eccube_updater405to406_admin_gen_proxy;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'eccube_updater405to406_admin_gen_proxy', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_eccube_updater405to406_admin_gen_proxy:

            }

            elseif (0 === strpos($pathinfo, '/retail_admin/graphiql')) {
                // admin_api_graphiql
                if ('/retail_admin/graphiql' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\GraphiQLController::graphiql',  '_route' => 'admin_api_graphiql',);
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['GET']);
                        }
                        goto not_admin_api_graphiql;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_api_graphiql;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_graphiql', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_api_graphiql:

                // admin_api_graphiql_api
                if ('/retail_admin/graphiql/api' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\GraphiQLController::index',  '_route' => 'admin_api_graphiql_api',);
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['POST']);
                        }
                        goto not_admin_api_graphiql_api;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_api_graphiql_api;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_graphiql_api', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_api_graphiql_api:

            }

            elseif (0 === strpos($pathinfo, '/retail_admin/api')) {
                // admin_api_config
                if ('/retail_admin/api/config' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::index',  '_route' => 'admin_api_config',);
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['GET']);
                        }
                        goto not_admin_api_config;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_admin_api_config;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_config', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_admin_api_config:

                if (0 === strpos($pathinfo, '/retail_admin/api/oauth')) {
                    // admin_api_oauth
                    if ('/retail_admin/api/oauth' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::index',  '_route' => 'admin_api_oauth',);
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['GET']);
                            }
                            goto not_admin_api_oauth;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_api_oauth;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_oauth', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_api_oauth:

                    // admin_api_oauth_new
                    if ('/retail_admin/api/oauth/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::create',  '_route' => 'admin_api_oauth_new',);
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                            }
                            goto not_admin_api_oauth_new;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_api_oauth_new;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_oauth_new', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_api_oauth_new:

                    // admin_api_oauth_delete
                    if (0 === strpos($pathinfo, '/retail_admin/api/oauth/delete') && preg_match('#^/retail_admin/api/oauth/delete/(?P<identifier>\\w+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_api_oauth_delete']), array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::delete',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_admin_api_oauth_delete;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_api_oauth_delete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_oauth_delete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_api_oauth_delete:

                    // admin_api_oauth_clear_expired_tokens
                    if ('/retail_admin/api/oauth/clear_expired_tokens' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::clearExpiredTokens',  '_route' => 'admin_api_oauth_clear_expired_tokens',);
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_admin_api_oauth_clear_expired_tokens;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_api_oauth_clear_expired_tokens;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_oauth_clear_expired_tokens', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_api_oauth_clear_expired_tokens:

                }

                elseif (0 === strpos($pathinfo, '/retail_admin/api/webhook')) {
                    // admin_api_webhook
                    if ('/retail_admin/api/webhook' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::index',  '_route' => 'admin_api_webhook',);
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['GET']);
                            }
                            goto not_admin_api_webhook;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_api_webhook;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_webhook', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_api_webhook:

                    // admin_api_webhook_new
                    if ('/retail_admin/api/webhook/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::edit',  '_route' => 'admin_api_webhook_new',);
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                            }
                            goto not_admin_api_webhook_new;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_api_webhook_new;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_webhook_new', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_api_webhook_new:

                    // admin_api_webhook_edit
                    if (0 === strpos($pathinfo, '/retail_admin/api/webhook/edit') && preg_match('#^/retail_admin/api/webhook/edit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_api_webhook_edit']), array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::edit',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                            }
                            goto not_admin_api_webhook_edit;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_api_webhook_edit;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_webhook_edit', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_api_webhook_edit:

                    // admin_api_webhook_delete
                    if (0 === strpos($pathinfo, '/retail_admin/api/webhook/delete') && preg_match('#^/retail_admin/api/webhook/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_api_webhook_delete']), array (  '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::delete',));
                        $requiredSchemes = array (  'https' => 0,);
                        $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                        if (!in_array($requestMethod, ['DELETE'])) {
                            if ($hasRequiredScheme) {
                                $allow = array_merge($allow, ['DELETE']);
                            }
                            goto not_admin_api_webhook_delete;
                        }
                        if (!$hasRequiredScheme) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_admin_api_webhook_delete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'admin_api_webhook_delete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_admin_api_webhook_delete:

                }

            }

            // oauth2_authorize
            if ('/retail_admin/authorize' === $pathinfo) {
                $ret = array (  '_controller' => 'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\AuthorizationController::indexAction',  '_route' => 'oauth2_authorize',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_oauth2_authorize;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'oauth2_authorize', key($requiredSchemes)));
                }

                return $ret;
            }
            not_oauth2_authorize:

        }

        elseif (0 === strpos($pathinfo, '/block/cart')) {
            // block_cart
            if ('/block/cart' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Block\\CartController::index',  '_route' => 'block_cart',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_block_cart;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'block_cart', key($requiredSchemes)));
                }

                return $ret;
            }
            not_block_cart:

            // block_cart_sp
            if ('/block/cart_sp' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Block\\CartController::index',  '_route' => 'block_cart_sp',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_block_cart_sp;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'block_cart_sp', key($requiredSchemes)));
                }

                return $ret;
            }
            not_block_cart_sp:

        }

        elseif (0 === strpos($pathinfo, '/block/search_product')) {
            // block_search_product
            if ('/block/search_product' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Block\\SearchProductController::index',  '_route' => 'block_search_product',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_block_search_product;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'block_search_product', key($requiredSchemes)));
                }

                return $ret;
            }
            not_block_search_product:

            // block_search_product_sp
            if ('/block/search_product_sp' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Block\\SearchProductController::index',  '_route' => 'block_search_product_sp',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_block_search_product_sp;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'block_search_product_sp', key($requiredSchemes)));
                }

                return $ret;
            }
            not_block_search_product_sp:

        }

        elseif (0 === strpos($pathinfo, '/contact')) {
            // contact
            if ('/contact' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\ContactController::index',  '_route' => 'contact',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_contact;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'contact', key($requiredSchemes)));
                }

                return $ret;
            }
            not_contact:

            // contact_complete
            if ('/contact/complete' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\ContactController::complete',  '_route' => 'contact_complete',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_contact_complete;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'contact_complete', key($requiredSchemes)));
                }

                return $ret;
            }
            not_contact_complete:

        }

        elseif (0 === strpos($pathinfo, '/cart')) {
            // cart
            if ('/cart' === $pathinfo) {
                $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedCartController::index',  '_route' => 'cart',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_cart;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'cart', key($requiredSchemes)));
                }

                return $ret;
            }
            not_cart:

            // cart_handle_item
            if (preg_match('#^/cart/(?P<operation>up|down|remove)/(?P<productClassId>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'cart_handle_item']), array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedCartController::handleCartItem',));
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($requestMethod, ['PUT'])) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, ['PUT']);
                    }
                    goto not_cart_handle_item;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_cart_handle_item;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'cart_handle_item', key($requiredSchemes)));
                }

                return $ret;
            }
            not_cart_handle_item:

            // cart_buystep
            if (0 === strpos($pathinfo, '/cart/buystep') && preg_match('#^/cart/buystep/(?P<cart_key>[a-zA-Z0-9]+[_][\\x20-\\x7E]+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'cart_buystep']), array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedCartController::buystep',));
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_cart_buystep;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'cart_buystep', key($requiredSchemes)));
                }

                return $ret;
            }
            not_cart_buystep:

        }

        elseif (0 === strpos($pathinfo, '/entry')) {
            // entry
            if ('/entry' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\EntryController::index',  '_route' => 'entry',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_entry;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'entry', key($requiredSchemes)));
                }

                return $ret;
            }
            not_entry:

            // entry_complete
            if ('/entry/complete' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\EntryController::complete',  '_route' => 'entry_complete',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_entry_complete;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'entry_complete', key($requiredSchemes)));
                }

                return $ret;
            }
            not_entry_complete:

            // entry_activate
            if (0 === strpos($pathinfo, '/entry/activate') && preg_match('#^/entry/activate/(?P<secret_key>[^/]++)(?:/(?P<qtyInCart>[^/]++))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'entry_activate']), array (  'qtyInCart' => NULL,  '_controller' => 'Eccube\\Controller\\EntryController::activate',));
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_entry_activate;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'entry_activate', key($requiredSchemes)));
                }

                return $ret;
            }
            not_entry_activate:

        }

        elseif (0 === strpos($pathinfo, '/forgot')) {
            // forgot
            if ('/forgot' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\ForgotController::index',  '_route' => 'forgot',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_forgot;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'forgot', key($requiredSchemes)));
                }

                return $ret;
            }
            not_forgot:

            // forgot_complete
            if ('/forgot/complete' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\ForgotController::complete',  '_route' => 'forgot_complete',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_forgot_complete;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'forgot_complete', key($requiredSchemes)));
                }

                return $ret;
            }
            not_forgot_complete:

            // forgot_reset
            if (0 === strpos($pathinfo, '/forgot/reset') && preg_match('#^/forgot/reset/(?P<reset_key>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'forgot_reset']), array (  '_controller' => 'Eccube\\Controller\\ForgotController::reset',));
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_forgot_reset;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'forgot_reset', key($requiredSchemes)));
                }

                return $ret;
            }
            not_forgot_reset:

        }

        elseif (0 === strpos($pathinfo, '/help')) {
            // help_tradelaw
            if ('/help/tradelaw' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\HelpController::tradelaw',  '_route' => 'help_tradelaw',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_help_tradelaw;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'help_tradelaw', key($requiredSchemes)));
                }

                return $ret;
            }
            not_help_tradelaw:

            // help_about
            if ('/help/about' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\HelpController::about',  '_route' => 'help_about',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_help_about;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'help_about', key($requiredSchemes)));
                }

                return $ret;
            }
            not_help_about:

            // help_agreement
            if ('/help/agreement' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\HelpController::agreement',  '_route' => 'help_agreement',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_help_agreement;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'help_agreement', key($requiredSchemes)));
                }

                return $ret;
            }
            not_help_agreement:

            // help_privacy
            if ('/help/privacy' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\HelpController::privacy',  '_route' => 'help_privacy',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_help_privacy;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'help_privacy', key($requiredSchemes)));
                }

                return $ret;
            }
            not_help_privacy:

        }

        // help_guide
        if ('/guide' === $pathinfo) {
            $ret = array (  '_controller' => 'Eccube\\Controller\\HelpController::guide',  '_route' => 'help_guide',);
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_help_guide;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'help_guide', key($requiredSchemes)));
            }

            return $ret;
        }
        not_help_guide:

        if (0 === strpos($pathinfo, '/install')) {
            // install
            if ('/install' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Install\\InstallController::index',  '_route' => 'install',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_install;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'install', key($requiredSchemes)));
                }

                return $ret;
            }
            not_install:

            if (0 === strpos($pathinfo, '/install/step')) {
                // install_step1
                if ('/install/step1' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Install\\InstallController::step1',  '_route' => 'install_step1',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_install_step1;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'install_step1', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_install_step1:

                // install_step2
                if ('/install/step2' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Install\\InstallController::step2',  '_route' => 'install_step2',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_install_step2;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'install_step2', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_install_step2:

                // install_step3
                if ('/install/step3' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Install\\InstallController::step3',  '_route' => 'install_step3',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_install_step3;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'install_step3', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_install_step3:

                // install_step4
                if ('/install/step4' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Install\\InstallController::step4',  '_route' => 'install_step4',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_install_step4;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'install_step4', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_install_step4:

                // install_step5
                if ('/install/step5' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Install\\InstallController::step5',  '_route' => 'install_step5',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_install_step5;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'install_step5', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_install_step5:

            }

            // install_complete
            if ('/install/complete' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Install\\InstallController::complete',  '_route' => 'install_complete',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_install_complete;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'install_complete', key($requiredSchemes)));
                }

                return $ret;
            }
            not_install_complete:

        }

        elseif (0 === strpos($pathinfo, '/mypage')) {
            if (0 === strpos($pathinfo, '/mypage/change')) {
                // mypage_change
                if ('/mypage/change' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Mypage\\ChangeController::index',  '_route' => 'mypage_change',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_change;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_change', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_change:

                // mypage_change_complete
                if ('/mypage/change_complete' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Mypage\\ChangeController::complete',  '_route' => 'mypage_change_complete',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_change_complete;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_change_complete', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_change_complete:

            }

            elseif (0 === strpos($pathinfo, '/mypage/delivery')) {
                // mypage_delivery
                if ('/mypage/delivery' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::index',  '_route' => 'mypage_delivery',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_delivery;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_delivery', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_delivery:

                // mypage_delivery_new
                if ('/mypage/delivery/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::edit',  '_route' => 'mypage_delivery_new',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_delivery_new;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_delivery_new', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_delivery_new:

                // mypage_delivery_edit
                if (preg_match('#^/mypage/delivery/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'mypage_delivery_edit']), array (  'id' => NULL,  '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::edit',));
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_delivery_edit;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_delivery_edit', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_delivery_edit:

                // mypage_delivery_delete
                if (preg_match('#^/mypage/delivery/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'mypage_delivery_delete']), array (  '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::delete',));
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['DELETE'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['DELETE']);
                        }
                        goto not_mypage_delivery_delete;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_delivery_delete;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_delivery_delete', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_delivery_delete:

            }

            // mypage_login
            if ('/mypage/login' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::login',  '_route' => 'mypage_login',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_mypage_login;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_login', key($requiredSchemes)));
                }

                return $ret;
            }
            not_mypage_login:

            // mypage
            if ('/mypage' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::index',  '_route' => 'mypage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_mypage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'mypage'));
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_mypage;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'mypage', key($requiredSchemes)));
                }

                return $ret;
            }
            not_mypage:

            // mypage_history
            if (0 === strpos($pathinfo, '/mypage/history') && preg_match('#^/mypage/history/(?P<order_no>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'mypage_history']), array (  '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::history',));
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_mypage_history;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_history', key($requiredSchemes)));
                }

                return $ret;
            }
            not_mypage_history:

            // mypage_order
            if (0 === strpos($pathinfo, '/mypage/order') && preg_match('#^/mypage/order/(?P<order_no>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'mypage_order']), array (  '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::order',));
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($requestMethod, ['PUT'])) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, ['PUT']);
                    }
                    goto not_mypage_order;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_mypage_order;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_order', key($requiredSchemes)));
                }

                return $ret;
            }
            not_mypage_order:

            if (0 === strpos($pathinfo, '/mypage/favorite')) {
                // mypage_favorite
                if ('/mypage/favorite' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::favorite',  '_route' => 'mypage_favorite',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_favorite;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_favorite', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_favorite:

                // mypage_favorite_delete
                if (preg_match('#^/mypage/favorite/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'mypage_favorite_delete']), array (  '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::delete',));
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['DELETE'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['DELETE']);
                        }
                        goto not_mypage_favorite_delete;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_favorite_delete;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_favorite_delete', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_favorite_delete:

            }

            elseif (0 === strpos($pathinfo, '/mypage/withdraw')) {
                // mypage_withdraw
                if ('/mypage/withdraw' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Mypage\\WithdrawController::index',  '_route' => 'mypage_withdraw',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_withdraw;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_withdraw', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_withdraw:

                // mypage_withdraw_complete
                if ('/mypage/withdraw_complete' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\Mypage\\WithdrawController::complete',  '_route' => 'mypage_withdraw_complete',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_withdraw_complete;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_withdraw_complete', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_withdraw_complete:

            }

            elseif (0 === strpos($pathinfo, '/mypage/kuronekocredit')) {
                // mypage_kuronekocredit
                if ('/mypage/kuronekocredit' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\CreditController::index',  '_route' => 'mypage_kuronekocredit',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_kuronekocredit;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_kuronekocredit', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_kuronekocredit:

                // mypage_kuronekocredit_delete
                if ('/mypage/kuronekocredit/delete' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\CreditController::delete',  '_route' => 'mypage_kuronekocredit_delete',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_kuronekocredit_delete;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_kuronekocredit_delete', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_kuronekocredit_delete:

                // mypage_kuronekocredit_register
                if ('/mypage/kuronekocredit/register' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\CreditController::register',  '_route' => 'mypage_kuronekocredit_register',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_mypage_kuronekocredit_register;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'mypage_kuronekocredit_register', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_mypage_kuronekocredit_register:

            }

        }

        elseif (0 === strpos($pathinfo, '/shopping')) {
            // shopping_nonmember
            if ('/shopping/nonmember' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\NonMemberShoppingController::index',  '_route' => 'shopping_nonmember',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_shopping_nonmember;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_nonmember', key($requiredSchemes)));
                }

                return $ret;
            }
            not_shopping_nonmember:

            // shopping_customer
            if ('/shopping/customer' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\NonMemberShoppingController::customer',  '_route' => 'shopping_customer',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_shopping_customer;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_customer', key($requiredSchemes)));
                }

                return $ret;
            }
            not_shopping_customer:

            if (0 === strpos($pathinfo, '/shopping/shipping_multiple')) {
                // shopping_shipping_multiple
                if ('/shopping/shipping_multiple' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\ShippingMultipleController::index',  '_route' => 'shopping_shipping_multiple',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_shopping_shipping_multiple;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_shipping_multiple', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_shopping_shipping_multiple:

                // shopping_shipping_multiple_edit
                if ('/shopping/shipping_multiple_edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eccube\\Controller\\ShippingMultipleController::shippingMultipleEdit',  '_route' => 'shopping_shipping_multiple_edit',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_shopping_shipping_multiple_edit;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_shipping_multiple_edit', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_shopping_shipping_multiple_edit:

            }

            // shopping
            if ('/shopping' === $pathinfo) {
                $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedShoppingController::index',  '_route' => 'shopping',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_shopping;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'shopping', key($requiredSchemes)));
                }

                return $ret;
            }
            not_shopping:

            // shopping_redirect_to
            if ('/shopping/redirect_to' === $pathinfo) {
                $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedShoppingController::redirectTo',  '_route' => 'shopping_redirect_to',);
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($requestMethod, ['POST'])) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, ['POST']);
                    }
                    goto not_shopping_redirect_to;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_shopping_redirect_to;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_redirect_to', key($requiredSchemes)));
                }

                return $ret;
            }
            not_shopping_redirect_to:

            if (0 === strpos($pathinfo, '/shopping/c')) {
                // shopping_confirm
                if ('/shopping/confirm' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedShoppingController::confirm',  '_route' => 'shopping_confirm',);
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['POST']);
                        }
                        goto not_shopping_confirm;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_shopping_confirm;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_confirm', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_shopping_confirm:

                // shopping_complete
                if ('/shopping/complete' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedShoppingController::complete',  '_route' => 'shopping_complete',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_shopping_complete;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_complete', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_shopping_complete:

                // shopping_checkout
                if ('/shopping/checkout' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedShoppingController::checkout',  '_route' => 'shopping_checkout',);
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['POST']);
                        }
                        goto not_shopping_checkout;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_shopping_checkout;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_checkout', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_shopping_checkout:

            }

            elseif (0 === strpos($pathinfo, '/shopping/shipping')) {
                // shopping_shipping
                if (preg_match('#^/shopping/shipping/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'shopping_shipping']), array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedShoppingController::shipping',));
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_shopping_shipping;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_shipping', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_shopping_shipping:

                // shopping_shipping_edit
                if (0 === strpos($pathinfo, '/shopping/shipping_edit') && preg_match('#^/shopping/shipping_edit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'shopping_shipping_edit']), array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedShoppingController::shippingEdit',));
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_shopping_shipping_edit;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_shipping_edit', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_shopping_shipping_edit:

            }

            // shopping_login
            if ('/shopping/login' === $pathinfo) {
                $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedShoppingController::login',  '_route' => 'shopping_login',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_shopping_login;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_login', key($requiredSchemes)));
                }

                return $ret;
            }
            not_shopping_login:

            // shopping_error
            if ('/shopping/error' === $pathinfo) {
                $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\CustomizedShoppingController::error',  '_route' => 'shopping_error',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_shopping_error;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'shopping_error', key($requiredSchemes)));
                }

                return $ret;
            }
            not_shopping_error:

            if (0 === strpos($pathinfo, '/shopping/yamato')) {
                if (0 === strpos($pathinfo, '/shopping/yamato/deferred/sms')) {
                    // deferred_sms_auth
                    if ('/shopping/yamato/deferred/sms/auth' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\PaymentController::requestSmsAuth',  '_route' => 'deferred_sms_auth',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_deferred_sms_auth;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'deferred_sms_auth', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_deferred_sms_auth:

                    // yamato_sms_complete
                    if ('/shopping/yamato/deferred/sms/complete' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\PaymentController::completeSmsPayment',  '_route' => 'yamato_sms_complete',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_yamato_sms_complete;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_sms_complete', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_yamato_sms_complete:

                    // yamato_sms_receive
                    if ('/shopping/yamato/deferred/sms/receive' === $pathinfo) {
                        $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\PaymentController::receiveSmsPost',  '_route' => 'yamato_sms_receive',);
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$context->getScheme()])) {
                            if ('GET' !== $canonicalMethod) {
                                goto not_yamato_sms_receive;
                            }

                            return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_sms_receive', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_yamato_sms_receive:

                }

                // yamato_three_d_secure_receive
                if ('/shopping/yamato/threeDSecure/receive' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\PaymentController::receiveThreeDSecurePost',  '_route' => 'yamato_three_d_secure_receive',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_yamato_three_d_secure_receive;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_three_d_secure_receive', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_yamato_three_d_secure_receive:

                // yamato_shopping_payment_recv
                if ('/shopping/yamato_payment_recv' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\PaymentRecvController::index',  '_route' => 'yamato_shopping_payment_recv',);
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$context->getScheme()])) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_yamato_shopping_payment_recv;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_shopping_payment_recv', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_yamato_shopping_payment_recv:

            }

        }

        elseif (0 === strpos($pathinfo, '/products')) {
            // product_list
            if ('/products/list' === $pathinfo) {
                $ret = array (  '_controller' => 'Eccube\\Controller\\ProductController::index',  '_route' => 'product_list',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_product_list;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'product_list', key($requiredSchemes)));
                }

                return $ret;
            }
            not_product_list:

            // product_detail
            if (0 === strpos($pathinfo, '/products/detail') && preg_match('#^/products/detail/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'product_detail']), array (  '_controller' => 'Eccube\\Controller\\ProductController::detail',));
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($canonicalMethod, ['GET'])) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, ['GET']);
                    }
                    goto not_product_detail;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_product_detail;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'product_detail', key($requiredSchemes)));
                }

                return $ret;
            }
            not_product_detail:

            // product_add_favorite
            if (0 === strpos($pathinfo, '/products/add_favorite') && preg_match('#^/products/add_favorite/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'product_add_favorite']), array (  '_controller' => 'Eccube\\Controller\\ProductController::addFavorite',));
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_product_add_favorite;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'product_add_favorite', key($requiredSchemes)));
                }

                return $ret;
            }
            not_product_add_favorite:

            // product_add_cart
            if (0 === strpos($pathinfo, '/products/add_cart') && preg_match('#^/products/add_cart/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'product_add_cart']), array (  '_controller' => 'Eccube\\Controller\\ProductController::addCart',));
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($requestMethod, ['POST'])) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, ['POST']);
                    }
                    goto not_product_add_cart;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_product_add_cart;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'product_add_cart', key($requiredSchemes)));
                }

                return $ret;
            }
            not_product_add_cart:

        }

        elseif (0 === strpos($pathinfo, '/plugin')) {
            // plugin_referral_code_shopping
            if ('/plugin/referral_code/shopping/shopping_referral_code' === $pathinfo) {
                $ret = array (  '_controller' => 'Plugin\\ReferralCode\\Controller\\ShoppingController::shoppingReferralCode',  '_route' => 'plugin_referral_code_shopping',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_plugin_referral_code_shopping;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_referral_code_shopping', key($requiredSchemes)));
                }

                return $ret;
            }
            not_plugin_referral_code_shopping:

            if (0 === strpos($pathinfo, '/plugin/yamatosubscription/mypage')) {
                // plugin_yamato_subscription_mypage
                if ('/plugin/yamatosubscription/mypage' === $pathinfo) {
                    $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\MypageController::index',  '_route' => 'plugin_yamato_subscription_mypage',);
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['GET']);
                        }
                        goto not_plugin_yamato_subscription_mypage;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_plugin_yamato_subscription_mypage;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_mypage', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_plugin_yamato_subscription_mypage:

                // plugin_yamato_subscription_mypage_cancel
                if (preg_match('#^/plugin/yamatosubscription/mypage/(?P<id>\\d+)/cancel$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_mypage_cancel']), array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\MypageController::cancel',));
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($requestMethod, ['POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['POST']);
                        }
                        goto not_plugin_yamato_subscription_mypage_cancel;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_plugin_yamato_subscription_mypage_cancel;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_mypage_cancel', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_plugin_yamato_subscription_mypage_cancel:

                // plugin_yamato_subscription_mypage_detail
                if (preg_match('#^/plugin/yamatosubscription/mypage/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_mypage_detail']), array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\MypageDetailController::index',));
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                        }
                        goto not_plugin_yamato_subscription_mypage_detail;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_plugin_yamato_subscription_mypage_detail;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_mypage_detail', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_plugin_yamato_subscription_mypage_detail:

                // plugin_yamato_subscription_mypage_change_credit_card
                if (preg_match('#^/plugin/yamatosubscription/mypage/(?P<id>\\d+)/change_credit_card$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plugin_yamato_subscription_mypage_change_credit_card']), array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\MypageDetailController::change_credit_card',));
                    $requiredSchemes = array (  'https' => 0,);
                    $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        if ($hasRequiredScheme) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                        }
                        goto not_plugin_yamato_subscription_mypage_change_credit_card;
                    }
                    if (!$hasRequiredScheme) {
                        if ('GET' !== $canonicalMethod) {
                            goto not_plugin_yamato_subscription_mypage_change_credit_card;
                        }

                        return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_mypage_change_credit_card', key($requiredSchemes)));
                    }

                    return $ret;
                }
                not_plugin_yamato_subscription_mypage_change_credit_card:

            }

            // plugin_yamato_subscription_shopping
            if ('/plugin/yamatosubscription/shopping' === $pathinfo) {
                $ret = array (  '_controller' => 'Plugin\\YamatoSubscription\\Controller\\ShoppingController::index',  '_route' => 'plugin_yamato_subscription_shopping',);
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($requestMethod, ['POST'])) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, ['POST']);
                    }
                    goto not_plugin_yamato_subscription_shopping;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_plugin_yamato_subscription_shopping;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'plugin_yamato_subscription_shopping', key($requiredSchemes)));
                }

                return $ret;
            }
            not_plugin_yamato_subscription_shopping:

        }

        // user_data
        if (0 === strpos($pathinfo, '/user_data') && preg_match('#^/user_data/(?P<route>([0-9a-zA-Z_\\-]+\\/?)+(?<!\\/))$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'user_data']), array (  '_controller' => 'Eccube\\Controller\\UserDataController::index',));
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_user_data;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'user_data', key($requiredSchemes)));
            }

            return $ret;
        }
        not_user_data:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Customize\\Controller\\TopController::index',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_homepage;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'homepage', key($requiredSchemes)));
            }

            return $ret;
        }
        not_homepage:

        // logout
        if ('/logout' === $pathinfo) {
            $ret = ['_route' => 'logout'];
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_logout;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'logout', key($requiredSchemes)));
            }

            return $ret;
        }
        not_logout:

        // yamato_payment4_log
        if ('/yamato_payment4_log' === $pathinfo) {
            $ret = array (  '_controller' => 'Plugin\\YamatoPayment4\\Controller\\PaymentController::log',  '_route' => 'yamato_payment4_log',);
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_yamato_payment4_log;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'yamato_payment4_log', key($requiredSchemes)));
            }

            return $ret;
        }
        not_yamato_payment4_log:

        // api
        if ('/api' === $pathinfo) {
            $ret = array (  '_controller' => 'Plugin\\Api\\Controller\\ApiController::index',  '_route' => 'api',);
            $requiredSchemes = array (  'https' => 0,);
            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                if ($hasRequiredScheme) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                }
                goto not_api;
            }
            if (!$hasRequiredScheme) {
                if ('GET' !== $canonicalMethod) {
                    goto not_api;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'api', key($requiredSchemes)));
            }

            return $ret;
        }
        not_api:

        // oauth2_token
        if ('/token' === $pathinfo) {
            $ret = array (  '_controller' => 'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\TokenController::indexAction',  '_route' => 'oauth2_token',);
            $requiredSchemes = array (  'https' => 0,);
            $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
            if (!in_array($requestMethod, ['POST'])) {
                if ($hasRequiredScheme) {
                    $allow = array_merge($allow, ['POST']);
                }
                goto not_oauth2_token;
            }
            if (!$hasRequiredScheme) {
                if ('GET' !== $canonicalMethod) {
                    goto not_oauth2_token;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'oauth2_token', key($requiredSchemes)));
            }

            return $ret;
        }
        not_oauth2_token:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
