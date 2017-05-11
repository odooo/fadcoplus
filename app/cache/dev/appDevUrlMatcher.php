<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/5e1858b')) {
            // _assetic_5e1858b
            if ($pathinfo === '/js/5e1858b.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5e1858b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5e1858b',);
            }

            // _assetic_5e1858b_0
            if ($pathinfo === '/js/5e1858b_mails-box_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5e1858b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5e1858b_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/df51a00')) {
            // _assetic_df51a00
            if ($pathinfo === '/css/df51a00.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df51a00',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_df51a00',);
            }

            // _assetic_df51a00_0
            if ($pathinfo === '/css/df51a00_custom_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df51a00',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_df51a00_0',);
            }

        }

        // _assetic_1b37284
        if ($pathinfo === '/js/1b37284.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1b37284',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1b37284',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/datatable/me')) {
            // fadco_datable_ajax_user_paginate
            if (0 === strpos($pathinfo, '/datatable/me/pagination') && preg_match('#^/datatable/me/pagination/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fadco_datable_ajax_user_paginate')), array (  '_controller' => 'FadcoBundle\\Controller\\DataTable\\DataTable\\Ajax\\DataTableAjaxController::userPaginateAction',));
            }

            // fadco_datable_ajax_delete_frais
            if (0 === strpos($pathinfo, '/datatable/me/autres/frais') && preg_match('#^/datatable/me/autres/frais/(?P<id>[^/]++)/delete/vente/(?P<vente>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fadco_datable_ajax_delete_frais')), array (  '_controller' => 'FadcoBundle\\Controller\\DataTable\\DataTable\\Ajax\\DataTableAjaxController::deleteAutresFraisAction',));
            }

        }

        // fadco_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fadco_homepage')), array (  '_controller' => 'FadcoBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/indicateurperformance')) {
            // fadco_indicateur_performance
            if (rtrim($pathinfo, '/') === '/indicateurperformance') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fadco_indicateur_performance');
                }

                return array (  '_controller' => 'FadcoBundle:IndicateurPerformance:index',  '_route' => 'fadco_indicateur_performance',);
            }

            // fadco_indicateur_performance_nombre_visited_client
            if ($pathinfo === '/indicateurperformance/nombre-visited-client') {
                return array (  '_controller' => 'FadcoBundle:IndicateurPerformance:nombreVisitedClient',  '_route' => 'fadco_indicateur_performance_nombre_visited_client',);
            }

            if (0 === strpos($pathinfo, '/indicateurperformance/d')) {
                // fadco_indicateur_performance_dsc
                if ($pathinfo === '/indicateurperformance/dsc') {
                    return array (  '_controller' => 'FadcoBundle\\Controller\\IndicateurPerformance\\DSCPerformanceController::indexAction',  '_route' => 'fadco_indicateur_performance_dsc',);
                }

                // fadco_indicateur_performance_dai
                if ($pathinfo === '/indicateurperformance/dai') {
                    return array (  '_controller' => 'FadcoBundle:IndicateurPerformance/DAIPerformance:index',  '_route' => 'fadco_indicateur_performance_dai',);
                }

                // fadco_indicateur_performance_archives
                if ($pathinfo === '/indicateurperformance/dossiers') {
                    return array (  '_controller' => 'FadcoBundle:IndicateurPerformance/ConsultationArchives:index',  '_route' => 'fadco_indicateur_performance_archives',);
                }

                if (0 === strpos($pathinfo, '/indicateurperformance/ds')) {
                    // fadco_indicateur_performance_dsav
                    if ($pathinfo === '/indicateurperformance/dsav') {
                        return array (  '_controller' => 'FadcoBundle:IndicateurPerformance/DSAVPerformance:index',  '_route' => 'fadco_indicateur_performance_dsav',);
                    }

                    // fadco_indicateur_performance_dsj
                    if ($pathinfo === '/indicateurperformance/dsj') {
                        return array (  '_controller' => 'FadcoBundle:IndicateurPerformance/DSJPerformance:index',  '_route' => 'fadco_indicateur_performance_dsj',);
                    }

                }

                // fadco_indicateur_performance_dfca
                if ($pathinfo === '/indicateurperformance/dfca') {
                    return array (  '_controller' => 'FadcoBundle\\Controller\\IndicateurPerformance\\DFCAPerformanceController::indexAction',  '_route' => 'fadco_indicateur_performance_dfca',);
                }

            }

        }

        // fadco_home
        if ($pathinfo === '/dashbord') {
            return array (  '_controller' => 'FadcoBundle\\Controller\\DefaultController::dashbordAction',  '_route' => 'fadco_home',);
        }

        if (0 === strpos($pathinfo, '/alerte')) {
            // alertes_lu
            if (preg_match('#^/alerte/(?P<id>[^/]++)/lu$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alertes_lu')), array (  '_controller' => 'FadcoBundle\\Controller\\GestionDesAlertesController::luAction',));
            }

            // alertes_raflaichir
            if (preg_match('#^/alerte/(?P<id>[^/]++)/raflaichir$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alertes_raflaichir')), array (  '_controller' => 'FadcoBundle\\Controller\\GestionDesAlertesController::raflaichirAction',));
            }

            // grh_alertes_show_all
            if ($pathinfo === '/alerte/ShowAll') {
                return array (  '_controller' => 'FadcoBundle\\Controller\\GestionDesAlertesController::ShowAllAction',  '_route' => 'grh_alertes_show_all',);
            }

        }

        if (0 === strpos($pathinfo, '/mails')) {
            // box_mails_index
            if ($pathinfo === '/mails/inbox') {
                return array (  '_controller' => 'FadcoBundle:MailBox:inbox',  '_route' => 'box_mails_index',);
            }

            // box_mails_envoi
            if ($pathinfo === '/mails/envoi') {
                return array (  '_controller' => 'FadcoBundle\\Controller\\MailsEnvoyesController::envoimailsAction',  '_route' => 'box_mails_envoi',);
            }

            // box_mails_compose
            if ($pathinfo === '/mails/compose') {
                return array (  '_controller' => 'FadcoBundle:MailBox:compose',  '_route' => 'box_mails_compose',);
            }

            // box_mails_read
            if (0 === strpos($pathinfo, '/mails/inbox') && preg_match('#^/mails/inbox/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'box_mails_read')), array (  '_controller' => 'FadcoBundle:MailBox:read',));
            }

            // box_mail_fetch_message
            if (0 === strpos($pathinfo, '/mails/fetch-messages') && preg_match('#^/mails/fetch\\-messages/(?P<inbox>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'box_mail_fetch_message')), array (  '_controller' => 'FadcoBundle:MailBox:fetchMessages',));
            }

            // box_mails_auth
            if ($pathinfo === '/mails/auth/user') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_box_mails_auth;
                }

                return array (  '_controller' => 'FadcoBundle\\Controller\\MailsEnvoyesController::authAction',  '_route' => 'box_mails_auth',);
            }
            not_box_mails_auth:

            // box_mails_deconnexion
            if ($pathinfo === '/mails/deconnexion') {
                return array (  '_controller' => 'FadcoBundle\\Controller\\MailsEnvoyesController::deconnexionAction',  '_route' => 'box_mails_deconnexion',);
            }

            // box_mails_session_storage
            if ($pathinfo === '/mails/session/storage') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_box_mails_session_storage;
                }

                return array (  '_controller' => 'FadcoBundle\\Controller\\MailsEnvoyesController::sessionStorageAction',  '_route' => 'box_mails_session_storage',);
            }
            not_box_mails_session_storage:

        }

        if (0 === strpos($pathinfo, '/admin/rigth')) {
            // rigth
            if (rtrim($pathinfo, '/') === '/admin/rigth') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rigth');
                }

                return array (  '_controller' => 'FadcoBundle\\Controller\\RigthController::indexAction',  '_route' => 'rigth',);
            }

            // rigth_show
            if (preg_match('#^/admin/rigth/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rigth_show')), array (  '_controller' => 'FadcoBundle\\Controller\\RigthController::showAction',));
            }

            // rigth_new
            if ($pathinfo === '/admin/rigth/new') {
                return array (  '_controller' => 'FadcoBundle\\Controller\\RigthController::newAction',  '_route' => 'rigth_new',);
            }

            // rigth_create
            if ($pathinfo === '/admin/rigth/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rigth_create;
                }

                return array (  '_controller' => 'FadcoBundle\\Controller\\RigthController::createAction',  '_route' => 'rigth_create',);
            }
            not_rigth_create:

            // rigth_edit
            if (preg_match('#^/admin/rigth/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rigth_edit')), array (  '_controller' => 'FadcoBundle\\Controller\\RigthController::editAction',));
            }

            // rigth_update
            if (preg_match('#^/admin/rigth/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_rigth_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rigth_update')), array (  '_controller' => 'FadcoBundle\\Controller\\RigthController::updateAction',));
            }
            not_rigth_update:

            // rigth_delete
            if (preg_match('#^/admin/rigth/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rigth_delete')), array (  '_controller' => 'FadcoBundle\\Controller\\RigthController::deleteAction',));
            }

            // rigth_change
            if (preg_match('#^/admin/rigth/(?P<userId>[^/]++)/change/(?P<option>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rigth_change')), array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::changeRigthAction',));
            }

        }

        if (0 === strpos($pathinfo, '/fadcoplus/prestataire')) {
            // grh_prestataire
            if (rtrim($pathinfo, '/') === '/fadcoplus/prestataire') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'grh_prestataire');
                }

                return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::indexAction',  '_route' => 'grh_prestataire',);
            }

            // grh_prestataire_voir
            if (preg_match('#^/fadcoplus/prestataire/(?P<id>[^/]++)/voir$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grh_prestataire_voir')), array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::voirAction',));
            }

            // grh_prestataire_active
            if (preg_match('#^/fadcoplus/prestataire/(?P<id>[^/]++)/active$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grh_prestataire_active')), array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::activeAction',));
            }

            // grh_prestataire_desactive
            if (preg_match('#^/fadcoplus/prestataire/(?P<id>[^/]++)/desactive$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grh_prestataire_desactive')), array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::desactiveAction',));
            }

            // grh_prestataire_show
            if ($pathinfo === '/fadcoplus/prestataire/show') {
                return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::showAction',  '_route' => 'grh_prestataire_show',);
            }

            // crediter_compte_distributeur
            if (0 === strpos($pathinfo, '/fadcoplus/prestataire/distributeur') && preg_match('#^/fadcoplus/prestataire/distributeur\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crediter_compte_distributeur')), array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::creditAccountAction',));
            }

            // grh_prestataire_edit
            if ($pathinfo === '/fadcoplus/prestataire/edit') {
                return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::editAction',  '_route' => 'grh_prestataire_edit',);
            }

            if (0 === strpos($pathinfo, '/fadcoplus/prestataire/change')) {
                // grh_prestataire_change_password
                if ($pathinfo === '/fadcoplus/prestataire/change/password') {
                    return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::changePasswordAction',  '_route' => 'grh_prestataire_change_password',);
                }

                // grh_prestataire_change
                if ($pathinfo === '/fadcoplus/prestataire/change') {
                    return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::changeAction',  '_route' => 'grh_prestataire_change',);
                }

            }

            // grh_prestataire_new
            if (0 === strpos($pathinfo, '/fadcoplus/prestataire/new') && preg_match('#^/fadcoplus/prestataire/new(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grh_prestataire_new')), array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::editAction',  'id' => '= null',));
            }

            // grh_prestataire_update
            if (0 === strpos($pathinfo, '/fadcoplus/prestataire/update') && preg_match('#^/fadcoplus/prestataire/update(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_grh_prestataire_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grh_prestataire_update')), array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::updateAction',  'id' => '= null',));
            }
            not_grh_prestataire_update:

            // grh_prestataire_modifier_profile
            if ($pathinfo === '/fadcoplus/prestataire/aller/modifier/profile') {
                return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::modifierProfileAction',  '_route' => 'grh_prestataire_modifier_profile',);
            }

            if (0 === strpos($pathinfo, '/fadcoplus/prestataire/p')) {
                // grh_prestataire_modifier_profile_photo
                if ($pathinfo === '/fadcoplus/prestataire/photo/prestataire/update') {
                    return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::photoPrestataireAction',  '_route' => 'grh_prestataire_modifier_profile_photo',);
                }

                if (0 === strpos($pathinfo, '/fadcoplus/prestataire/prestataire')) {
                    // grh_prestataire_get_prestataire_enabled
                    if ($pathinfo === '/fadcoplus/prestataire/prestataire/enabled') {
                        return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getPrestataireEnabledAction',  '_route' => 'grh_prestataire_get_prestataire_enabled',);
                    }

                    // grh_prestataire_get_bon_interne
                    if ($pathinfo === '/fadcoplus/prestataire/prestataire/bon/interne') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_grh_prestataire_get_bon_interne;
                        }

                        return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getBonInterneByPrestataireAction',  '_route' => 'grh_prestataire_get_bon_interne',);
                    }
                    not_grh_prestataire_get_bon_interne:

                    // grh_prestataire_detail_bon_interne
                    if ($pathinfo === '/fadcoplus/prestataire/prestataire/detail/bon/interne') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_grh_prestataire_detail_bon_interne;
                        }

                        return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getDetailBIAction',  '_route' => 'grh_prestataire_detail_bon_interne',);
                    }
                    not_grh_prestataire_detail_bon_interne:

                    // grh_prestataire_get_bon_commande
                    if ($pathinfo === '/fadcoplus/prestataire/prestataire/bon/commande') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_grh_prestataire_get_bon_commande;
                        }

                        return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getBonCommandeByPrestataireAction',  '_route' => 'grh_prestataire_get_bon_commande',);
                    }
                    not_grh_prestataire_get_bon_commande:

                    // grh_prestataire_detail_bon_commande
                    if ($pathinfo === '/fadcoplus/prestataire/prestataire/detail/bon/commande') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_grh_prestataire_detail_bon_commande;
                        }

                        return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getDetailBCAction',  '_route' => 'grh_prestataire_detail_bon_commande',);
                    }
                    not_grh_prestataire_detail_bon_commande:

                    // grh_prestataire_get_bon_commande_journalier
                    if ($pathinfo === '/fadcoplus/prestataire/prestataire/bon/commande/journalier') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_grh_prestataire_get_bon_commande_journalier;
                        }

                        return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getBonJournalierByPrestataireAction',  '_route' => 'grh_prestataire_get_bon_commande_journalier',);
                    }
                    not_grh_prestataire_get_bon_commande_journalier:

                    // grh_prestataire_detail_bon_commande_journalier
                    if ($pathinfo === '/fadcoplus/prestataire/prestataire/detail/bon/commande/journalier') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_grh_prestataire_detail_bon_commande_journalier;
                        }

                        return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getDetailBCJAction',  '_route' => 'grh_prestataire_detail_bon_commande_journalier',);
                    }
                    not_grh_prestataire_detail_bon_commande_journalier:

                    // grh_prestataire_get_contre_performance
                    if ($pathinfo === '/fadcoplus/prestataire/prestataire/contre/performance') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_grh_prestataire_get_contre_performance;
                        }

                        return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getContrePerformanceByPrestataireAction',  '_route' => 'grh_prestataire_get_contre_performance',);
                    }
                    not_grh_prestataire_get_contre_performance:

                    // grh_prestataire_get_rapport_mensuel
                    if ($pathinfo === '/fadcoplus/prestataire/prestataire/rapport/mensuel') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_grh_prestataire_get_rapport_mensuel;
                        }

                        return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getRapportBonMensuelByPrestataireAction',  '_route' => 'grh_prestataire_get_rapport_mensuel',);
                    }
                    not_grh_prestataire_get_rapport_mensuel:

                    if (0 === strpos($pathinfo, '/fadcoplus/prestataire/prestataire/d')) {
                        // grh_prestataire_detail_rapport_mensuel
                        if ($pathinfo === '/fadcoplus/prestataire/prestataire/detail/rapport/mensuel') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_grh_prestataire_detail_rapport_mensuel;
                            }

                            return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getDetailRapportBMAction',  '_route' => 'grh_prestataire_detail_rapport_mensuel',);
                        }
                        not_grh_prestataire_detail_rapport_mensuel:

                        // grh_prestataire_direction_service
                        if ($pathinfo === '/fadcoplus/prestataire/prestataire/direction/service') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_grh_prestataire_direction_service;
                            }

                            return array (  '_controller' => 'FadcoBundle\\Controller\\PrestataireController::getDirectionServiceBisAction',  '_route' => 'grh_prestataire_direction_service',);
                        }
                        not_grh_prestataire_direction_service:

                    }

                }

            }

        }

        // global_rewrite_url
        if (0 === strpos($pathinfo, '/global/url/generate') && preg_match('#^/global/url/generate/(?P<url>[^/]++)/(?P<date>[^/]++)/(?P<extension>[^/]++)/data$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_rewrite_url')), array (  '_controller' => 'FadcoBundle\\Controller\\RewriteUrlController::dataUrlAction',));
        }

        if (0 === strpos($pathinfo, '/archive/dossier')) {
            // archive_dossier
            if (rtrim($pathinfo, '/') === '/archive/dossier') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'archive_dossier');
                }

                return array (  '_controller' => 'FadcoBundle\\Controller\\DossierController::indexAction',  '_route' => 'archive_dossier',);
            }

            // archive_dossier_show
            if (preg_match('#^/archive/dossier/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archive_dossier_show')), array (  '_controller' => 'FadcoBundle\\Controller\\DossierController::showAction',));
            }

            // archive_dossier_new
            if ($pathinfo === '/archive/dossier/new') {
                return array (  '_controller' => 'FadcoBundle\\Controller\\DossierController::newAction',  '_route' => 'archive_dossier_new',);
            }

            // archive_dossier_create
            if ($pathinfo === '/archive/dossier/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_archive_dossier_create;
                }

                return array (  '_controller' => 'FadcoBundle\\Controller\\DossierController::createAction',  '_route' => 'archive_dossier_create',);
            }
            not_archive_dossier_create:

            // archive_dossier_edit
            if (preg_match('#^/archive/dossier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archive_dossier_edit')), array (  '_controller' => 'FadcoBundle\\Controller\\DossierController::editAction',));
            }

            // archive_dossier_update
            if (preg_match('#^/archive/dossier/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_archive_dossier_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archive_dossier_update')), array (  '_controller' => 'FadcoBundle\\Controller\\DossierController::updateAction',));
            }
            not_archive_dossier_update:

            // archive_dossier_delete
            if (preg_match('#^/archive/dossier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_archive_dossier_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archive_dossier_delete')), array (  '_controller' => 'FadcoBundle\\Controller\\DossierController::deleteAction',));
            }
            not_archive_dossier_delete:

            // archive_dossier_search
            if ($pathinfo === '/archive/dossier/search') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_archive_dossier_search;
                }

                return array (  '_controller' => 'FadcoBundle\\Controller\\DossierController::searchAction',  '_route' => 'archive_dossier_search',);
            }
            not_archive_dossier_search:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/admin/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/admin/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/admin/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/admin/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/admin/resetting/reset') && preg_match('#^/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/ajaxify-search')) {
            // ajaxify_search_count_all
            if ($pathinfo === '/ajaxify-search/count') {
                return array (  '_controller' => 'ajaxify_search.controller:count',  '_route' => 'ajaxify_search_count_all',);
            }

            // ajaxify_search_search
            if ($pathinfo === '/ajaxify-search/search') {
                return array (  '_controller' => 'ajaxify_search.controller:search',  '_route' => 'ajaxify_search_search',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
