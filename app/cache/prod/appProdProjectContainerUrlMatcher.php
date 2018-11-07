<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request;

        // mautic_js
        if ('/mtc.js' === $pathinfo) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_js', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\JsController::indexAction',  '_route' => 'mautic_js',);
        }

        // mautic_base_index
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'mautic_base_index');
            }

            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_base_index', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mautic_base_index',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // mautic_secure_root
            if ('/s' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_secure_root', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::redirectSecureRootAction',  '_route' => 'mautic_secure_root',);
            }

            // mautic_secure_root_slash
            if ('/s' === rtrim($pathinfo, '/')) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'mautic_secure_root_slash');
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_secure_root_slash', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::redirectSecureRootAction',  '_route' => 'mautic_secure_root_slash',);
            }

        }

        // mautic_remove_trailing_slash
        if (preg_match('#^/(?P<url>.*/)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_mautic_remove_trailing_slash;
            }

            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_remove_trailing_slash', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_remove_trailing_slash')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\CommonController::removeTrailingSlashAction',));
        }
        not_mautic_remove_trailing_slash:

        if (0 === strpos($pathinfo, '/oauth/v')) {
            if (0 === strpos($pathinfo, '/oauth/v1')) {
                // bazinga_oauth_server_requesttoken
                if ('/oauth/v1/request_token' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_bazinga_oauth_server_requesttoken;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'bazinga_oauth_server_requesttoken', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'bazinga.oauth.controller.server:requestTokenAction',  '_route' => 'bazinga_oauth_server_requesttoken',);
                }
                not_bazinga_oauth_server_requesttoken:

                if (0 === strpos($pathinfo, '/oauth/v1/a')) {
                    if (0 === strpos($pathinfo, '/oauth/v1/authorize')) {
                        // bazinga_oauth_login_allow
                        if ('/oauth/v1/authorize' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_bazinga_oauth_login_allow;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'bazinga_oauth_login_allow', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth1\\AuthorizeController::allowAction',  '_route' => 'bazinga_oauth_login_allow',);
                        }
                        not_bazinga_oauth_login_allow:

                        // bazinga_oauth_server_authorize
                        if ('/oauth/v1/authorize' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_bazinga_oauth_server_authorize;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'bazinga_oauth_server_authorize', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'bazinga.oauth.controller.server:authorizeAction',  '_route' => 'bazinga_oauth_server_authorize',);
                        }
                        not_bazinga_oauth_server_authorize:

                        if (0 === strpos($pathinfo, '/oauth/v1/authorize_login')) {
                            // mautic_oauth1_server_auth_login
                            if ('/oauth/v1/authorize_login' === $pathinfo) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_mautic_oauth1_server_auth_login;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_oauth1_server_auth_login', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth1\\SecurityController::loginAction',  '_route' => 'mautic_oauth1_server_auth_login',);
                            }
                            not_mautic_oauth1_server_auth_login:

                            // mautic_oauth1_server_auth_login_check
                            if ('/oauth/v1/authorize_login_check' === $pathinfo) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_mautic_oauth1_server_auth_login_check;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_oauth1_server_auth_login_check', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth1\\SecurityController::loginCheckAction',  '_route' => 'mautic_oauth1_server_auth_login_check',);
                            }
                            not_mautic_oauth1_server_auth_login_check:

                        }

                    }

                    // bazinga_oauth_server_accesstoken
                    if ('/oauth/v1/access_token' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_bazinga_oauth_server_accesstoken;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bazinga_oauth_server_accesstoken', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'bazinga.oauth.controller.server:accessTokenAction',  '_route' => 'bazinga_oauth_server_accesstoken',);
                    }
                    not_bazinga_oauth_server_accesstoken:

                }

            }

            if (0 === strpos($pathinfo, '/oauth/v2')) {
                // fos_oauth_server_token
                if ('/oauth/v2/token' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_oauth_server_token;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'fos_oauth_server_token', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
                }
                not_fos_oauth_server_token:

                if (0 === strpos($pathinfo, '/oauth/v2/authorize')) {
                    // fos_oauth_server_authorize
                    if ('/oauth/v2/authorize' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_oauth_server_authorize;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'fos_oauth_server_authorize', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\AuthorizeController::authorizeAction',  '_route' => 'fos_oauth_server_authorize',);
                    }
                    not_fos_oauth_server_authorize:

                    if (0 === strpos($pathinfo, '/oauth/v2/authorize_login')) {
                        // mautic_oauth2_server_auth_login
                        if ('/oauth/v2/authorize_login' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_mautic_oauth2_server_auth_login;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_oauth2_server_auth_login', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginAction',  '_route' => 'mautic_oauth2_server_auth_login',);
                        }
                        not_mautic_oauth2_server_auth_login:

                        // mautic_oauth2_server_auth_login_check
                        if ('/oauth/v2/authorize_login_check' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_mautic_oauth2_server_auth_login_check;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_oauth2_server_auth_login_check', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginCheckAction',  '_route' => 'mautic_oauth2_server_auth_login_check',);
                        }
                        not_mautic_oauth2_server_auth_login_check:

                    }

                }

            }

        }

        // mautic_asset_download
        if (0 === strpos($pathinfo, '/asset') && preg_match('#^/asset(?:/(?P<slug>[^/]++))?$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_asset_download', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_download')), array (  'slug' => '',  '_controller' => 'Mautic\\AssetBundle\\Controller\\PublicController::downloadAction',));
        }

        if (0 === strpos($pathinfo, '/dwc')) {
            // mautic_api_dynamicContent_index
            if ('/dwc' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_api_dynamicContent_index', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentApiController::getEntitiesAction',  '_route' => 'mautic_api_dynamicContent_index',);
            }

            // mautic_api_dynamicContent_action
            if (preg_match('#^/dwc/(?P<objectAlias>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_api_dynamicContent_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_dynamicContent_action')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentApiController::processAction',));
            }

        }

        // mautic_plugin_tracker
        if (0 === strpos($pathinfo, '/plugin') && preg_match('#^/plugin/(?P<integration>.+)/tracking\\.gif$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_plugin_tracker', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_tracker')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::pluginTrackingGifAction',));
        }

        if (0 === strpos($pathinfo, '/email')) {
            // mautic_email_tracker
            if (preg_match('#^/email/(?P<idHash>[^/\\.]++)\\.gif$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_email_tracker', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_tracker')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::trackingImageAction',));
            }

            // mautic_email_webview
            if (0 === strpos($pathinfo, '/email/view') && preg_match('#^/email/view/(?P<idHash>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_email_webview', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_webview')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::indexAction',));
            }

            // mautic_email_unsubscribe
            if (0 === strpos($pathinfo, '/email/unsubscribe') && preg_match('#^/email/unsubscribe/(?P<idHash>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_email_unsubscribe', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_unsubscribe')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::unsubscribeAction',));
            }

            // mautic_email_resubscribe
            if (0 === strpos($pathinfo, '/email/resubscribe') && preg_match('#^/email/resubscribe/(?P<idHash>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_email_resubscribe', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_resubscribe')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::resubscribeAction',));
            }

        }

        // mautic_mailer_transport_callback
        if (0 === strpos($pathinfo, '/mailer') && preg_match('#^/mailer/(?P<transport>[^/]++)/callback$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_mautic_mailer_transport_callback;
            }

            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_mailer_transport_callback', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_mailer_transport_callback')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::mailerCallbackAction',));
        }
        not_mautic_mailer_transport_callback:

        // mautic_email_preview
        if (0 === strpos($pathinfo, '/email/preview') && preg_match('#^/email/preview(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_email_preview', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_preview')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::previewAction',  'objectId' => 0,));
        }

        if (0 === strpos($pathinfo, '/form')) {
            // mautic_form_postresults
            if ('/form/submit' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_form_postresults', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::submitAction',  '_route' => 'mautic_form_postresults',);
            }

            // mautic_form_generateform
            if ('/form/generate.js' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_form_generateform', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::generateAction',  '_route' => 'mautic_form_generateform',);
            }

            // mautic_form_postmessage
            if ('/form/message' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_form_postmessage', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::messageAction',  '_route' => 'mautic_form_postmessage',);
            }

            // mautic_form_preview
            if (preg_match('#^/form(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_form_preview', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_preview')), array (  'id' => '0',  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::previewAction',));
            }

            // mautic_form_embed
            if (0 === strpos($pathinfo, '/form/embed') && preg_match('#^/form/embed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_form_embed', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_embed')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::embedAction',));
            }

            // mautic_form_postresults_ajax
            if ('/form/submit/ajax' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_form_postresults_ajax', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\AjaxController::submitAction',  '_route' => 'mautic_form_postresults_ajax',);
            }

        }

        if (0 === strpos($pathinfo, '/installer')) {
            // mautic_installer_home
            if ('/installer' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_installer_home', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',  '_route' => 'mautic_installer_home',);
            }

            // mautic_installer_remove_slash
            if ('/installer' === rtrim($pathinfo, '/')) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'mautic_installer_remove_slash');
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_installer_remove_slash', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\CommonController::removeTrailingSlashAction',  '_route' => 'mautic_installer_remove_slash',);
            }

            // mautic_installer_step
            if (0 === strpos($pathinfo, '/installer/step') && preg_match('#^/installer/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_installer_step', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_installer_step')), array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',));
            }

            // mautic_installer_final
            if ('/installer/final' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_installer_final', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::finalAction',  '_route' => 'mautic_installer_final',);
            }

            // mautic_installer_catchcall
            if (preg_match('#^/installer/(?P<noerror>(?).+)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_installer_catchcall', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_installer_catchcall')), array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',));
            }

        }

        if (0 === strpos($pathinfo, '/notification')) {
            // mautic_receive_notification
            if ('/notification/receive' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_receive_notification', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::receiveAction',  '_route' => 'mautic_receive_notification',);
            }

            // mautic_subscribe_notification
            if ('/notification/subscribe' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_subscribe_notification', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::subscribeAction',  '_route' => 'mautic_subscribe_notification',);
            }

            // mautic_notification_popup
            if ('/notification' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_notification_popup', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\PopupController::indexAction',  '_route' => 'mautic_notification_popup',);
            }

        }

        if (0 === strpos($pathinfo, '/OneSignalSDK')) {
            // mautic_onesignal_worker
            if ('/OneSignalSDKWorker.js' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_onesignal_worker', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::workerAction',  '_route' => 'mautic_onesignal_worker',);
            }

            // mautic_onesignal_updater
            if ('/OneSignalSDKUpdaterWorker.js' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_onesignal_updater', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::updaterAction',  '_route' => 'mautic_onesignal_updater',);
            }

        }

        // mautic_onesignal_manifest
        if ('/manifest.json' === $pathinfo) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_onesignal_manifest', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::manifestAction',  '_route' => 'mautic_onesignal_manifest',);
        }

        // mautic_app_notification
        if ('/notification/appcallback' === $pathinfo) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_app_notification', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\AppCallbackController::indexAction',  '_route' => 'mautic_app_notification',);
        }

        if (0 === strpos($pathinfo, '/mt')) {
            // mautic_page_tracker
            if ('/mtracking.gif' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_page_tracker', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::trackingImageAction',  '_route' => 'mautic_page_tracker',);
            }

            if (0 === strpos($pathinfo, '/mtc')) {
                // mautic_page_tracker_cors
                if ('/mtc/event' === $pathinfo) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_page_tracker_cors', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::trackingAction',  '_route' => 'mautic_page_tracker_cors',);
                }

                // mautic_page_tracker_getcontact
                if ('/mtc' === $pathinfo) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_page_tracker_getcontact', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::getContactIdAction',  '_route' => 'mautic_page_tracker_getcontact',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/r')) {
            // mautic_url_redirect
            if (preg_match('#^/r/(?P<redirectId>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_url_redirect', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_url_redirect')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction',));
            }

            // mautic_page_redirect
            if (0 === strpos($pathinfo, '/redirect') && preg_match('#^/redirect/(?P<redirectId>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_page_redirect', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_redirect')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction',));
            }

        }

        // mautic_page_preview
        if (0 === strpos($pathinfo, '/page/preview') && preg_match('#^/page/preview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_page_preview', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_preview')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::previewAction',));
        }

        // mautic_gated_video_hit
        if ('/video/hit' === $pathinfo) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_gated_video_hit', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::hitVideoAction',  '_route' => 'mautic_gated_video_hit',);
        }

        if (0 === strpos($pathinfo, '/plugins/integrations/auth')) {
            // mautic_integration_auth_user
            if (0 === strpos($pathinfo, '/plugins/integrations/authuser') && preg_match('#^/plugins/integrations/authuser/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_integration_auth_user', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_user')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authUserAction',));
            }

            // mautic_integration_auth_callback
            if (0 === strpos($pathinfo, '/plugins/integrations/authcallback') && preg_match('#^/plugins/integrations/authcallback/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_integration_auth_callback', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_callback')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction',));
            }

            // mautic_integration_auth_postauth
            if (0 === strpos($pathinfo, '/plugins/integrations/authstatus') && preg_match('#^/plugins/integrations/authstatus/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_integration_auth_postauth', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_postauth')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction',));
            }

        }

        // mautic_receive_sms
        if ('/sms/receive' === $pathinfo) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_receive_sms', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::receiveAction',  '_route' => 'mautic_receive_sms',);
        }

        if (0 === strpos($pathinfo, '/passwordreset')) {
            // mautic_user_passwordreset
            if ('/passwordreset' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_user_passwordreset', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\PublicController::passwordResetAction',  '_route' => 'mautic_user_passwordreset',);
            }

            // mautic_user_passwordresetconfirm
            if ('/passwordresetconfirm' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_user_passwordresetconfirm', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\PublicController::passwordResetConfirmAction',  '_route' => 'mautic_user_passwordresetconfirm',);
            }

        }

        if (0 === strpos($pathinfo, '/saml')) {
            // lightsaml_sp.metadata
            if ('/saml/metadata.xml' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'lightsaml_sp.metadata', key($requiredSchemes));
                }

                return array (  '_controller' => 'LightSaml\\SpBundle\\Controller\\DefaultController::metadataAction',  '_route' => 'lightsaml_sp.metadata',);
            }

            // lightsaml_sp.discovery
            if ('/saml/discovery' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'lightsaml_sp.discovery', key($requiredSchemes));
                }

                return array (  '_controller' => 'LightSaml\\SpBundle\\Controller\\DefaultController::discoveryAction',  '_route' => 'lightsaml_sp.discovery',);
            }

        }

        // mautic_plugin_fullcontact_index
        if ('/fullcontact/callback' === $pathinfo) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_plugin_fullcontact_index', key($requiredSchemes));
            }

            return array (  '_controller' => 'MauticPlugin\\MauticFullContactBundle\\Controller\\PublicController::callbackAction',  '_route' => 'mautic_plugin_fullcontact_index',);
        }

        // mautic_plugin_clearbit_index
        if ('/clearbit/callback' === $pathinfo) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_plugin_clearbit_index', key($requiredSchemes));
            }

            return array (  '_controller' => 'MauticPlugin\\MauticClearbitBundle\\Controller\\PublicController::callbackAction',  '_route' => 'mautic_plugin_clearbit_index',);
        }

        if (0 === strpos($pathinfo, '/plugin')) {
            // mautic_integration_contacts
            if (preg_match('#^/plugin/(?P<integration>.+)/contact_data$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_integration_contacts', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_contacts')), array (  '_controller' => 'MauticPlugin\\MauticCrmBundle\\Controller\\PublicController::contactDataAction',));
            }

            // mautic_integration_companies
            if (preg_match('#^/plugin/(?P<integration>.+)/company_data$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_integration_companies', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_companies')), array (  '_controller' => 'MauticPlugin\\MauticCrmBundle\\Controller\\PublicController::companyDataAction',));
            }

            // mautic_integration.pipedrive.webhook
            if ('/plugin/pipedrive/webhook' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mautic_integrationpipedrivewebhook;
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_integration.pipedrive.webhook', key($requiredSchemes));
                }

                return array (  '_controller' => 'MauticPlugin\\MauticCrmBundle\\Controller\\PipedriveController::webhookAction',  '_route' => 'mautic_integration.pipedrive.webhook',);
            }
            not_mautic_integrationpipedrivewebhook:

        }

        if (0 === strpos($pathinfo, '/focus')) {
            // mautic_focus_generate
            if (preg_match('#^/focus/(?P<id>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_focus_generate', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_focus_generate')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\PublicController::generateAction',));
            }

            // mautic_focus_pixel
            if (preg_match('#^/focus/(?P<id>[^/]++)/viewpixel\\.gif$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_focus_pixel', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_focus_pixel')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\PublicController::viewPixelAction',));
            }

        }

        // mautic_social_js_generate
        if (0 === strpos($pathinfo, '/social/generate') && preg_match('#^/social/generate/(?P<formName>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_social_js_generate', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_js_generate')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\JsController::generateAction',));
        }

        if (0 === strpos($pathinfo, '/citrix')) {
            // mautic_citrix_proxy
            if ('/citrix/proxy' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_citrix_proxy', key($requiredSchemes));
                }

                return array (  '_controller' => 'MauticPlugin\\MauticCitrixBundle\\Controller\\PublicController::proxyAction',  '_route' => 'mautic_citrix_proxy',);
            }

            // mautic_citrix_sessionchanged
            if ('/citrix/sessionChanged' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_citrix_sessionchanged', key($requiredSchemes));
                }

                return array (  '_controller' => 'MauticPlugin\\MauticCitrixBundle\\Controller\\PublicController::sessionChangedAction',  '_route' => 'mautic_citrix_sessionchanged',);
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/files')) {
                // mautic_core_api_file_list
                if (preg_match('#^/api/files/(?P<dir>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_core_api_file_list;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_core_api_file_list', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_api_file_list')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\Api\\FileApiController::listAction',  '_format' => 'json',));
                }
                not_mautic_core_api_file_list:

                // mautic_core_api_file_create
                if (preg_match('#^/api/files/(?P<dir>[^/]++)/new$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_core_api_file_create;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_core_api_file_create', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_api_file_create')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\Api\\FileApiController::createAction',  '_format' => 'json',));
                }
                not_mautic_core_api_file_create:

                // mautic_core_api_file_delete
                if (preg_match('#^/api/files/(?P<dir>[^/]++)/(?P<file>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_core_api_file_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_core_api_file_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_api_file_delete')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\Api\\FileApiController::deleteAction',  '_format' => 'json',));
                }
                not_mautic_core_api_file_delete:

            }

            if (0 === strpos($pathinfo, '/api/themes')) {
                // mautic_core_api_theme_list
                if ('/api/themes' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_core_api_theme_list;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_core_api_theme_list', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\Api\\ThemeApiController::listAction',  '_format' => 'json',  '_route' => 'mautic_core_api_theme_list',);
                }
                not_mautic_core_api_theme_list:

                // mautic_core_api_theme_get
                if (preg_match('#^/api/themes/(?P<theme>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_core_api_theme_get;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_core_api_theme_get', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_api_theme_get')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\Api\\ThemeApiController::getAction',  '_format' => 'json',));
                }
                not_mautic_core_api_theme_get:

                // mautic_core_api_theme_create
                if ('/api/themes/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_core_api_theme_create;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_core_api_theme_create', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\Api\\ThemeApiController::newAction',  '_format' => 'json',  '_route' => 'mautic_core_api_theme_create',);
                }
                not_mautic_core_api_theme_create:

                // mautic_core_api_theme_delete
                if (preg_match('#^/api/themes/(?P<theme>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_core_api_theme_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_core_api_theme_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_api_theme_delete')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\Api\\ThemeApiController::deleteAction',  '_format' => 'json',));
                }
                not_mautic_core_api_theme_delete:

            }

            // mautic_core_api_stats
            if (0 === strpos($pathinfo, '/api/stats') && preg_match('#^/api/stats(?:/(?P<table>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mautic_core_api_stats;
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_core_api_stats', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_api_stats')), array (  'table' => '',  '_controller' => 'Mautic\\CoreBundle\\Controller\\Api\\StatsApiController::listAction',  '_format' => 'json',));
            }
            not_mautic_core_api_stats:

            if (0 === strpos($pathinfo, '/api/assets')) {
                // mautic_api_assets_getall
                if ('/api/assets' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_assets_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_assets_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_assets_getall',);
                }
                not_mautic_api_assets_getall:

                // mautic_api_assets_getone
                if (preg_match('#^/api/assets/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_assets_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_assets_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_assets_getone')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_assets_getone:

                // mautic_api_assets_new
                if ('/api/assets/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_assets_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_assets_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_assets_new',);
                }
                not_mautic_api_assets_new:

                if (0 === strpos($pathinfo, '/api/assets/batch')) {
                    // mautic_api_assets_newbatch
                    if ('/api/assets/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_assets_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_assets_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_assets_newbatch',);
                    }
                    not_mautic_api_assets_newbatch:

                    if (0 === strpos($pathinfo, '/api/assets/batch/edit')) {
                        // mautic_api_assets_editbatchput
                        if ('/api/assets/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_assets_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_assets_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_assets_editbatchput',);
                        }
                        not_mautic_api_assets_editbatchput:

                        // mautic_api_assets_editbatchpatch
                        if ('/api/assets/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_assets_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_assets_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_assets_editbatchpatch',);
                        }
                        not_mautic_api_assets_editbatchpatch:

                    }

                }

                // mautic_api_assets_editput
                if (preg_match('#^/api/assets/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_assets_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_assets_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_assets_editput')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_assets_editput:

                // mautic_api_assets_editpatch
                if (preg_match('#^/api/assets/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_assets_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_assets_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_assets_editpatch')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_assets_editpatch:

                // mautic_api_assets_deletebatch
                if ('/api/assets/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_assets_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_assets_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_assets_deletebatch',);
                }
                not_mautic_api_assets_deletebatch:

                // mautic_api_assets_delete
                if (preg_match('#^/api/assets/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_assets_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_assets_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_assets_delete')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_assets_delete:

            }

            if (0 === strpos($pathinfo, '/api/ca')) {
                if (0 === strpos($pathinfo, '/api/campaigns')) {
                    // mautic_api_campaigns_getall
                    if ('/api/campaigns' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_campaigns_getall;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaigns_getall', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_campaigns_getall',);
                    }
                    not_mautic_api_campaigns_getall:

                    // mautic_api_campaigns_getone
                    if (preg_match('#^/api/campaigns/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_campaigns_getone;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaigns_getone', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaigns_getone')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::getEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_campaigns_getone:

                    // mautic_api_campaigns_new
                    if ('/api/campaigns/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_campaigns_new;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaigns_new', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_campaigns_new',);
                    }
                    not_mautic_api_campaigns_new:

                    if (0 === strpos($pathinfo, '/api/campaigns/batch')) {
                        // mautic_api_campaigns_newbatch
                        if ('/api/campaigns/batch/new' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mautic_api_campaigns_newbatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_campaigns_newbatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_campaigns_newbatch',);
                        }
                        not_mautic_api_campaigns_newbatch:

                        if (0 === strpos($pathinfo, '/api/campaigns/batch/edit')) {
                            // mautic_api_campaigns_editbatchput
                            if ('/api/campaigns/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_mautic_api_campaigns_editbatchput;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_campaigns_editbatchput', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_campaigns_editbatchput',);
                            }
                            not_mautic_api_campaigns_editbatchput:

                            // mautic_api_campaigns_editbatchpatch
                            if ('/api/campaigns/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_mautic_api_campaigns_editbatchpatch;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_campaigns_editbatchpatch', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_campaigns_editbatchpatch',);
                            }
                            not_mautic_api_campaigns_editbatchpatch:

                        }

                    }

                    // mautic_api_campaigns_editput
                    if (preg_match('#^/api/campaigns/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_mautic_api_campaigns_editput;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaigns_editput', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaigns_editput')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_campaigns_editput:

                    // mautic_api_campaigns_editpatch
                    if (preg_match('#^/api/campaigns/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_mautic_api_campaigns_editpatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaigns_editpatch', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaigns_editpatch')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_campaigns_editpatch:

                    // mautic_api_campaigns_deletebatch
                    if ('/api/campaigns/batch/delete' === $pathinfo) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_campaigns_deletebatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaigns_deletebatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_campaigns_deletebatch',);
                    }
                    not_mautic_api_campaigns_deletebatch:

                    // mautic_api_campaigns_delete
                    if (preg_match('#^/api/campaigns/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_campaigns_delete;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaigns_delete', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaigns_delete')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::deleteEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_campaigns_delete:

                    if (0 === strpos($pathinfo, '/api/campaigns/events')) {
                        // mautic_api_events_getall
                        if ('/api/campaigns/events' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mautic_api_events_getall;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_events_getall', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\EventApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_events_getall',);
                        }
                        not_mautic_api_events_getall:

                        // mautic_api_events_getone
                        if (preg_match('#^/api/campaigns/events/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mautic_api_events_getone;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_events_getone', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_events_getone')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\EventApiController::getEntityAction',  '_format' => 'json',));
                        }
                        not_mautic_api_events_getone:

                        // mautic_api_campaigns_events_contact
                        if (0 === strpos($pathinfo, '/api/campaigns/events/contact') && preg_match('#^/api/campaigns/events/contact/(?P<contactId>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mautic_api_campaigns_events_contact;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_campaigns_events_contact', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaigns_events_contact')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\EventLogApiController::getContactEventsAction',  '_format' => 'json',));
                        }
                        not_mautic_api_campaigns_events_contact:

                        // mautic_api_campaigns_edit_contact_event
                        if (preg_match('#^/api/campaigns/events/(?P<eventId>\\d+)/contact/(?P<contactId>\\d+)/edit$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_campaigns_edit_contact_event;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_campaigns_edit_contact_event', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaigns_edit_contact_event')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\EventLogApiController::editContactEventAction',  '_format' => 'json',));
                        }
                        not_mautic_api_campaigns_edit_contact_event:

                        // mautic_api_campaigns_batchedit_events
                        if ('/api/campaigns/events/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_campaigns_batchedit_events;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_campaigns_batchedit_events', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\EventLogApiController::editEventsAction',  '_format' => 'json',  '_route' => 'mautic_api_campaigns_batchedit_events',);
                        }
                        not_mautic_api_campaigns_batchedit_events:

                    }

                    // mautic_api_campaign_contact_events
                    if (preg_match('#^/api/campaigns/(?P<campaignId>\\d+)/events/contact/(?P<contactId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_campaign_contact_events;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaign_contact_events', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaign_contact_events')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\EventLogApiController::getContactEventsAction',  '_format' => 'json',));
                    }
                    not_mautic_api_campaign_contact_events:

                    // mautic_api_campaigngetcontacts
                    if (preg_match('#^/api/campaigns/(?P<id>\\d+)/contacts$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_campaigngetcontacts;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaigngetcontacts', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaigngetcontacts')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::getContactsAction',  '_format' => 'json',));
                    }
                    not_mautic_api_campaigngetcontacts:

                    // mautic_api_campaignaddcontact
                    if (preg_match('#^/api/campaigns/(?P<id>\\d+)/contact/(?P<leadId>[^/]++)/add$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_campaignaddcontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaignaddcontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaignaddcontact')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::addLeadAction',  '_format' => 'json',));
                    }
                    not_mautic_api_campaignaddcontact:

                    // mautic_api_campaignremovecontact
                    if (preg_match('#^/api/campaigns/(?P<id>\\d+)/contact/(?P<leadId>[^/]++)/remove$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_campaignremovecontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_campaignremovecontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaignremovecontact')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::removeLeadAction',  '_format' => 'json',));
                    }
                    not_mautic_api_campaignremovecontact:

                    // bc_mautic_api_campaignaddcontact
                    if (preg_match('#^/api/campaigns/(?P<id>\\d+)/contact/add/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bc_mautic_api_campaignaddcontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bc_mautic_api_campaignaddcontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_campaignaddcontact')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::addLeadAction',  '_format' => 'json',));
                    }
                    not_bc_mautic_api_campaignaddcontact:

                    // bc_mautic_api_campaignremovecontact
                    if (preg_match('#^/api/campaigns/(?P<id>\\d+)/contact/remove/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bc_mautic_api_campaignremovecontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bc_mautic_api_campaignremovecontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_campaignremovecontact')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::removeLeadAction',  '_format' => 'json',));
                    }
                    not_bc_mautic_api_campaignremovecontact:

                }

                if (0 === strpos($pathinfo, '/api/categories')) {
                    // mautic_api_categories_getall
                    if ('/api/categories' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_categories_getall;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_categories_getall', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_categories_getall',);
                    }
                    not_mautic_api_categories_getall:

                    // mautic_api_categories_getone
                    if (preg_match('#^/api/categories/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_categories_getone;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_categories_getone', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_categories_getone')), array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::getEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_categories_getone:

                    // mautic_api_categories_new
                    if ('/api/categories/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_categories_new;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_categories_new', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_categories_new',);
                    }
                    not_mautic_api_categories_new:

                    if (0 === strpos($pathinfo, '/api/categories/batch')) {
                        // mautic_api_categories_newbatch
                        if ('/api/categories/batch/new' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mautic_api_categories_newbatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_categories_newbatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_categories_newbatch',);
                        }
                        not_mautic_api_categories_newbatch:

                        if (0 === strpos($pathinfo, '/api/categories/batch/edit')) {
                            // mautic_api_categories_editbatchput
                            if ('/api/categories/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_mautic_api_categories_editbatchput;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_categories_editbatchput', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_categories_editbatchput',);
                            }
                            not_mautic_api_categories_editbatchput:

                            // mautic_api_categories_editbatchpatch
                            if ('/api/categories/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_mautic_api_categories_editbatchpatch;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_categories_editbatchpatch', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_categories_editbatchpatch',);
                            }
                            not_mautic_api_categories_editbatchpatch:

                        }

                    }

                    // mautic_api_categories_editput
                    if (preg_match('#^/api/categories/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_mautic_api_categories_editput;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_categories_editput', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_categories_editput')), array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_categories_editput:

                    // mautic_api_categories_editpatch
                    if (preg_match('#^/api/categories/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_mautic_api_categories_editpatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_categories_editpatch', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_categories_editpatch')), array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_categories_editpatch:

                    // mautic_api_categories_deletebatch
                    if ('/api/categories/batch/delete' === $pathinfo) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_categories_deletebatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_categories_deletebatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_categories_deletebatch',);
                    }
                    not_mautic_api_categories_deletebatch:

                    // mautic_api_categories_delete
                    if (preg_match('#^/api/categories/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_categories_delete;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_categories_delete', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_categories_delete')), array (  '_controller' => 'Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::deleteEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_categories_delete:

                }

            }

            if (0 === strpos($pathinfo, '/api/messages')) {
                // mautic_api_messages_getall
                if ('/api/messages' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_messages_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_messages_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_messages_getall',);
                }
                not_mautic_api_messages_getall:

                // mautic_api_messages_getone
                if (preg_match('#^/api/messages/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_messages_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_messages_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_messages_getone')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_messages_getone:

                // mautic_api_messages_new
                if ('/api/messages/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_messages_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_messages_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_messages_new',);
                }
                not_mautic_api_messages_new:

                if (0 === strpos($pathinfo, '/api/messages/batch')) {
                    // mautic_api_messages_newbatch
                    if ('/api/messages/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_messages_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_messages_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_messages_newbatch',);
                    }
                    not_mautic_api_messages_newbatch:

                    if (0 === strpos($pathinfo, '/api/messages/batch/edit')) {
                        // mautic_api_messages_editbatchput
                        if ('/api/messages/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_messages_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_messages_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_messages_editbatchput',);
                        }
                        not_mautic_api_messages_editbatchput:

                        // mautic_api_messages_editbatchpatch
                        if ('/api/messages/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_messages_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_messages_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_messages_editbatchpatch',);
                        }
                        not_mautic_api_messages_editbatchpatch:

                    }

                }

                // mautic_api_messages_editput
                if (preg_match('#^/api/messages/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_messages_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_messages_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_messages_editput')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_messages_editput:

                // mautic_api_messages_editpatch
                if (preg_match('#^/api/messages/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_messages_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_messages_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_messages_editpatch')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_messages_editpatch:

                // mautic_api_messages_deletebatch
                if ('/api/messages/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_messages_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_messages_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_messages_deletebatch',);
                }
                not_mautic_api_messages_deletebatch:

                // mautic_api_messages_delete
                if (preg_match('#^/api/messages/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_messages_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_messages_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_messages_delete')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_messages_delete:

            }

            if (0 === strpos($pathinfo, '/api/d')) {
                if (0 === strpos($pathinfo, '/api/data')) {
                    // mautic_widget_types
                    if ('/api/data' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_widget_types;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_widget_types', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\Api\\WidgetApiController::getTypesAction',  '_format' => 'json',  '_route' => 'mautic_widget_types',);
                    }
                    not_mautic_widget_types:

                    // mautic_widget_data
                    if (preg_match('#^/api/data/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_widget_data;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_widget_data', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_widget_data')), array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\Api\\WidgetApiController::getDataAction',  '_format' => 'json',));
                    }
                    not_mautic_widget_data:

                }

                if (0 === strpos($pathinfo, '/api/dynamiccontents')) {
                    // mautic_api_dynamicContents_getall
                    if ('/api/dynamiccontents' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_dynamicContents_getall;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_getall', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_dynamicContents_getall',);
                    }
                    not_mautic_api_dynamicContents_getall:

                    // mautic_api_dynamicContents_getone
                    if (preg_match('#^/api/dynamiccontents/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_dynamicContents_getone;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_getone', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_dynamicContents_getone')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::getEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_dynamicContents_getone:

                    // mautic_api_dynamicContents_new
                    if ('/api/dynamiccontents/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_dynamicContents_new;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_new', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_dynamicContents_new',);
                    }
                    not_mautic_api_dynamicContents_new:

                    if (0 === strpos($pathinfo, '/api/dynamiccontents/batch')) {
                        // mautic_api_dynamicContents_newbatch
                        if ('/api/dynamiccontents/batch/new' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mautic_api_dynamicContents_newbatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_newbatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_dynamicContents_newbatch',);
                        }
                        not_mautic_api_dynamicContents_newbatch:

                        if (0 === strpos($pathinfo, '/api/dynamiccontents/batch/edit')) {
                            // mautic_api_dynamicContents_editbatchput
                            if ('/api/dynamiccontents/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_mautic_api_dynamicContents_editbatchput;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_editbatchput', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_dynamicContents_editbatchput',);
                            }
                            not_mautic_api_dynamicContents_editbatchput:

                            // mautic_api_dynamicContents_editbatchpatch
                            if ('/api/dynamiccontents/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_mautic_api_dynamicContents_editbatchpatch;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_editbatchpatch', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_dynamicContents_editbatchpatch',);
                            }
                            not_mautic_api_dynamicContents_editbatchpatch:

                        }

                    }

                    // mautic_api_dynamicContents_editput
                    if (preg_match('#^/api/dynamiccontents/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_mautic_api_dynamicContents_editput;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_editput', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_dynamicContents_editput')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_dynamicContents_editput:

                    // mautic_api_dynamicContents_editpatch
                    if (preg_match('#^/api/dynamiccontents/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_mautic_api_dynamicContents_editpatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_editpatch', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_dynamicContents_editpatch')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_dynamicContents_editpatch:

                    // mautic_api_dynamicContents_deletebatch
                    if ('/api/dynamiccontents/batch/delete' === $pathinfo) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_dynamicContents_deletebatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_deletebatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_dynamicContents_deletebatch',);
                    }
                    not_mautic_api_dynamicContents_deletebatch:

                    // mautic_api_dynamicContents_delete
                    if (preg_match('#^/api/dynamiccontents/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_dynamicContents_delete;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_dynamicContents_delete', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_dynamicContents_delete')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::deleteEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_dynamicContents_delete:

                }

            }

            if (0 === strpos($pathinfo, '/api/emails')) {
                // mautic_api_emails_getall
                if ('/api/emails' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_emails_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_emails_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_emails_getall',);
                }
                not_mautic_api_emails_getall:

                // mautic_api_emails_getone
                if (preg_match('#^/api/emails/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_emails_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_emails_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_emails_getone')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_emails_getone:

                // mautic_api_emails_new
                if ('/api/emails/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_emails_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_emails_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_emails_new',);
                }
                not_mautic_api_emails_new:

                if (0 === strpos($pathinfo, '/api/emails/batch')) {
                    // mautic_api_emails_newbatch
                    if ('/api/emails/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_emails_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_emails_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_emails_newbatch',);
                    }
                    not_mautic_api_emails_newbatch:

                    if (0 === strpos($pathinfo, '/api/emails/batch/edit')) {
                        // mautic_api_emails_editbatchput
                        if ('/api/emails/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_emails_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_emails_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_emails_editbatchput',);
                        }
                        not_mautic_api_emails_editbatchput:

                        // mautic_api_emails_editbatchpatch
                        if ('/api/emails/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_emails_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_emails_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_emails_editbatchpatch',);
                        }
                        not_mautic_api_emails_editbatchpatch:

                    }

                }

                // mautic_api_emails_editput
                if (preg_match('#^/api/emails/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_emails_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_emails_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_emails_editput')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_emails_editput:

                // mautic_api_emails_editpatch
                if (preg_match('#^/api/emails/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_emails_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_emails_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_emails_editpatch')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_emails_editpatch:

                // mautic_api_emails_deletebatch
                if ('/api/emails/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_emails_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_emails_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_emails_deletebatch',);
                }
                not_mautic_api_emails_deletebatch:

                // mautic_api_emails_delete
                if (preg_match('#^/api/emails/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_emails_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_emails_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_emails_delete')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_emails_delete:

                // mautic_api_sendemail
                if (preg_match('#^/api/emails/(?P<id>\\d+)/send$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_sendemail;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_sendemail', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_sendemail')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::sendAction',  '_format' => 'json',));
                }
                not_mautic_api_sendemail:

                // mautic_api_sendcontactemail
                if (preg_match('#^/api/emails/(?P<id>\\d+)/contact/(?P<leadId>[^/]++)/send$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_sendcontactemail;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_sendcontactemail', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_sendcontactemail')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::sendLeadAction',  '_format' => 'json',));
                }
                not_mautic_api_sendcontactemail:

                // bc_mautic_api_sendcontactemail
                if (preg_match('#^/api/emails/(?P<id>\\d+)/send/contact/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_bc_mautic_api_sendcontactemail;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'bc_mautic_api_sendcontactemail', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_sendcontactemail')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::sendLeadAction',  '_format' => 'json',));
                }
                not_bc_mautic_api_sendcontactemail:

            }

            if (0 === strpos($pathinfo, '/api/forms')) {
                // mautic_api_forms_getall
                if ('/api/forms' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_forms_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_forms_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_forms_getall',);
                }
                not_mautic_api_forms_getall:

                // mautic_api_forms_getone
                if (preg_match('#^/api/forms/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_forms_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_forms_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_forms_getone')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_forms_getone:

                // mautic_api_forms_new
                if ('/api/forms/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_forms_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_forms_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_forms_new',);
                }
                not_mautic_api_forms_new:

                if (0 === strpos($pathinfo, '/api/forms/batch')) {
                    // mautic_api_forms_newbatch
                    if ('/api/forms/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_forms_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_forms_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_forms_newbatch',);
                    }
                    not_mautic_api_forms_newbatch:

                    if (0 === strpos($pathinfo, '/api/forms/batch/edit')) {
                        // mautic_api_forms_editbatchput
                        if ('/api/forms/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_forms_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_forms_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_forms_editbatchput',);
                        }
                        not_mautic_api_forms_editbatchput:

                        // mautic_api_forms_editbatchpatch
                        if ('/api/forms/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_forms_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_forms_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_forms_editbatchpatch',);
                        }
                        not_mautic_api_forms_editbatchpatch:

                    }

                }

                // mautic_api_forms_editput
                if (preg_match('#^/api/forms/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_forms_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_forms_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_forms_editput')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_forms_editput:

                // mautic_api_forms_editpatch
                if (preg_match('#^/api/forms/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_forms_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_forms_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_forms_editpatch')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_forms_editpatch:

                // mautic_api_forms_deletebatch
                if ('/api/forms/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_forms_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_forms_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_forms_deletebatch',);
                }
                not_mautic_api_forms_deletebatch:

                // mautic_api_forms_delete
                if (preg_match('#^/api/forms/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_forms_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_forms_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_forms_delete')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_forms_delete:

                // mautic_api_formresults
                if (preg_match('#^/api/forms/(?P<formId>\\d+)/submissions$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_formresults;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_formresults', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_formresults')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\SubmissionApiController::getEntitiesAction',  '_format' => 'json',));
                }
                not_mautic_api_formresults:

                // mautic_api_formresult
                if (preg_match('#^/api/forms/(?P<formId>\\d+)/submissions/(?P<submissionId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_formresult;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_formresult', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_formresult')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\SubmissionApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_formresult:

                // mautic_api_contactformresults
                if (preg_match('#^/api/forms/(?P<formId>\\d+)/submissions/contact/(?P<contactId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_contactformresults;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_contactformresults', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_contactformresults')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\SubmissionApiController::getEntitiesForContactAction',  '_format' => 'json',));
                }
                not_mautic_api_contactformresults:

                // mautic_api_formdeletefields
                if (preg_match('#^/api/forms/(?P<formId>\\d+)/fields/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_formdeletefields;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_formdeletefields', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_formdeletefields')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::deleteFieldsAction',  '_format' => 'json',));
                }
                not_mautic_api_formdeletefields:

                // mautic_api_formdeleteactions
                if (preg_match('#^/api/forms/(?P<formId>\\d+)/actions/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_formdeleteactions;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_formdeleteactions', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_formdeleteactions')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::deleteActionsAction',  '_format' => 'json',));
                }
                not_mautic_api_formdeleteactions:

            }

            if (0 === strpos($pathinfo, '/api/contacts')) {
                // mautic_api_contacts_getall
                if ('/api/contacts' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_contacts_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_contacts_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_contacts_getall',);
                }
                not_mautic_api_contacts_getall:

                // mautic_api_contacts_getone
                if (preg_match('#^/api/contacts/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_contacts_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_contacts_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_contacts_getone')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_contacts_getone:

                // mautic_api_contacts_new
                if ('/api/contacts/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_contacts_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_contacts_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_contacts_new',);
                }
                not_mautic_api_contacts_new:

                if (0 === strpos($pathinfo, '/api/contacts/batch')) {
                    // mautic_api_contacts_newbatch
                    if ('/api/contacts/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_contacts_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_contacts_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_contacts_newbatch',);
                    }
                    not_mautic_api_contacts_newbatch:

                    if (0 === strpos($pathinfo, '/api/contacts/batch/edit')) {
                        // mautic_api_contacts_editbatchput
                        if ('/api/contacts/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_contacts_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_contacts_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_contacts_editbatchput',);
                        }
                        not_mautic_api_contacts_editbatchput:

                        // mautic_api_contacts_editbatchpatch
                        if ('/api/contacts/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_contacts_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_contacts_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_contacts_editbatchpatch',);
                        }
                        not_mautic_api_contacts_editbatchpatch:

                    }

                }

                // mautic_api_contacts_editput
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_contacts_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_contacts_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_contacts_editput')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_contacts_editput:

                // mautic_api_contacts_editpatch
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_contacts_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_contacts_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_contacts_editpatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_contacts_editpatch:

                // mautic_api_contacts_deletebatch
                if ('/api/contacts/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_contacts_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_contacts_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_contacts_deletebatch',);
                }
                not_mautic_api_contacts_deletebatch:

                // mautic_api_contacts_delete
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_contacts_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_contacts_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_contacts_delete')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_contacts_delete:

                // mautic_api_dncaddcontact
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/dnc/(?P<channel>[^/]++)/add$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_dncaddcontact;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_dncaddcontact', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_dncaddcontact')), array (  'channel' => 'email',  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::addDncAction',  '_format' => 'json',));
                }
                not_mautic_api_dncaddcontact:

                // mautic_api_dncremovecontact
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/dnc/(?P<channel>[^/]++)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_dncremovecontact;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_dncremovecontact', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_dncremovecontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::removeDncAction',  '_format' => 'json',));
                }
                not_mautic_api_dncremovecontact:

                // mautic_api_getcontactevents
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/activity$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactevents;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getcontactevents', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontactevents')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getActivityAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontactevents:

                // mautic_api_getcontactsevents
                if ('/api/contacts/activity' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactsevents;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getcontactsevents', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getAllActivityAction',  '_format' => 'json',  '_route' => 'mautic_api_getcontactsevents',);
                }
                not_mautic_api_getcontactsevents:

                // mautic_api_getcontactnotes
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/notes$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactnotes;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getcontactnotes', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontactnotes')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getNotesAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontactnotes:

                // mautic_api_getcontactdevices
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/devices$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactdevices;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getcontactdevices', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontactdevices')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getDevicesAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontactdevices:

                // mautic_api_getcontactcampaigns
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/campaigns$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactcampaigns;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getcontactcampaigns', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontactcampaigns')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getCampaignsAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontactcampaigns:

                // mautic_api_getcontactssegments
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/segments$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactssegments;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getcontactssegments', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontactssegments')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getListsAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontactssegments:

                // mautic_api_getcontactscompanies
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/companies$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactscompanies;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getcontactscompanies', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontactscompanies')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getCompaniesAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontactscompanies:

                // mautic_api_utmcreateevent
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/utm/add$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_utmcreateevent;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_utmcreateevent', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_utmcreateevent')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::addUtmTagsAction',  '_format' => 'json',));
                }
                not_mautic_api_utmcreateevent:

                // mautic_api_utmremoveevent
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/utm/(?P<utmid>[^/]++)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_utmremoveevent;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_utmremoveevent', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_utmremoveevent')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::removeUtmTagsAction',  '_format' => 'json',));
                }
                not_mautic_api_utmremoveevent:

                if (0 === strpos($pathinfo, '/api/contacts/list')) {
                    // mautic_api_getcontactowners
                    if ('/api/contacts/list/owners' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getcontactowners;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_getcontactowners', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getOwnersAction',  '_format' => 'json',  '_route' => 'mautic_api_getcontactowners',);
                    }
                    not_mautic_api_getcontactowners:

                    // mautic_api_getcontactfields
                    if ('/api/contacts/list/fields' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getcontactfields;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_getcontactfields', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getFieldsAction',  '_format' => 'json',  '_route' => 'mautic_api_getcontactfields',);
                    }
                    not_mautic_api_getcontactfields:

                    // mautic_api_getcontactsegments
                    if ('/api/contacts/list/segments' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getcontactsegments;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_getcontactsegments', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::getListsAction',  '_format' => 'json',  '_route' => 'mautic_api_getcontactsegments',);
                    }
                    not_mautic_api_getcontactsegments:

                }

            }

            if (0 === strpos($pathinfo, '/api/segments')) {
                // mautic_api_lists_getall
                if ('/api/segments' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_lists_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_lists_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_lists_getall',);
                }
                not_mautic_api_lists_getall:

                // mautic_api_lists_getone
                if (preg_match('#^/api/segments/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_lists_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_lists_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_lists_getone')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_lists_getone:

                // mautic_api_lists_new
                if ('/api/segments/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_lists_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_lists_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_lists_new',);
                }
                not_mautic_api_lists_new:

                if (0 === strpos($pathinfo, '/api/segments/batch')) {
                    // mautic_api_lists_newbatch
                    if ('/api/segments/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_lists_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_lists_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_lists_newbatch',);
                    }
                    not_mautic_api_lists_newbatch:

                    if (0 === strpos($pathinfo, '/api/segments/batch/edit')) {
                        // mautic_api_lists_editbatchput
                        if ('/api/segments/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_lists_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_lists_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_lists_editbatchput',);
                        }
                        not_mautic_api_lists_editbatchput:

                        // mautic_api_lists_editbatchpatch
                        if ('/api/segments/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_lists_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_lists_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_lists_editbatchpatch',);
                        }
                        not_mautic_api_lists_editbatchpatch:

                    }

                }

                // mautic_api_lists_editput
                if (preg_match('#^/api/segments/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_lists_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_lists_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_lists_editput')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_lists_editput:

                // mautic_api_lists_editpatch
                if (preg_match('#^/api/segments/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_lists_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_lists_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_lists_editpatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_lists_editpatch:

                // mautic_api_lists_deletebatch
                if ('/api/segments/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_lists_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_lists_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_lists_deletebatch',);
                }
                not_mautic_api_lists_deletebatch:

                // mautic_api_lists_delete
                if (preg_match('#^/api/segments/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_lists_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_lists_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_lists_delete')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_lists_delete:

                // mautic_api_segmentaddcontact
                if (preg_match('#^/api/segments/(?P<id>\\d+)/contact/(?P<leadId>[^/]++)/add$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_segmentaddcontact;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_segmentaddcontact', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_segmentaddcontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::addLeadAction',  '_format' => 'json',));
                }
                not_mautic_api_segmentaddcontact:

                // mautic_api_segmentremovecontact
                if (preg_match('#^/api/segments/(?P<id>\\d+)/contact/(?P<leadId>[^/]++)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_segmentremovecontact;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_segmentremovecontact', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_segmentremovecontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::removeLeadAction',  '_format' => 'json',));
                }
                not_mautic_api_segmentremovecontact:

            }

            if (0 === strpos($pathinfo, '/api/companies')) {
                // mautic_api_companies_getall
                if ('/api/companies' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_companies_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_companies_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_companies_getall',);
                }
                not_mautic_api_companies_getall:

                // mautic_api_companies_getone
                if (preg_match('#^/api/companies/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_companies_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_companies_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_companies_getone')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_companies_getone:

                // mautic_api_companies_new
                if ('/api/companies/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_companies_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_companies_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_companies_new',);
                }
                not_mautic_api_companies_new:

                if (0 === strpos($pathinfo, '/api/companies/batch')) {
                    // mautic_api_companies_newbatch
                    if ('/api/companies/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_companies_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_companies_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_companies_newbatch',);
                    }
                    not_mautic_api_companies_newbatch:

                    if (0 === strpos($pathinfo, '/api/companies/batch/edit')) {
                        // mautic_api_companies_editbatchput
                        if ('/api/companies/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_companies_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_companies_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_companies_editbatchput',);
                        }
                        not_mautic_api_companies_editbatchput:

                        // mautic_api_companies_editbatchpatch
                        if ('/api/companies/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_companies_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_companies_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_companies_editbatchpatch',);
                        }
                        not_mautic_api_companies_editbatchpatch:

                    }

                }

                // mautic_api_companies_editput
                if (preg_match('#^/api/companies/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_companies_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_companies_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_companies_editput')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_companies_editput:

                // mautic_api_companies_editpatch
                if (preg_match('#^/api/companies/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_companies_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_companies_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_companies_editpatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_companies_editpatch:

                // mautic_api_companies_deletebatch
                if ('/api/companies/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_companies_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_companies_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_companies_deletebatch',);
                }
                not_mautic_api_companies_deletebatch:

                // mautic_api_companies_delete
                if (preg_match('#^/api/companies/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_companies_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_companies_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_companies_delete')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_companies_delete:

                // mautic_api_companyaddcontact
                if (preg_match('#^/api/companies/(?P<companyId>\\d+)/contact/(?P<contactId>\\d+)/add$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_companyaddcontact;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_companyaddcontact', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_companyaddcontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::addContactAction',  '_format' => 'json',));
                }
                not_mautic_api_companyaddcontact:

                // mautic_api_companyremovecontact
                if (preg_match('#^/api/companies/(?P<companyId>\\d+)/contact/(?P<contactId>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_companyremovecontact;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_companyremovecontact', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_companyremovecontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::removeContactAction',  '_format' => 'json',));
                }
                not_mautic_api_companyremovecontact:

            }

            if (0 === strpos($pathinfo, '/api/fields')) {
                // mautic_api_fields_getall
                if (preg_match('#^/api/fields/(?P<object>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_fields_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_getall', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_getall')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::getEntitiesAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_getall:

                // mautic_api_fields_getone
                if (preg_match('#^/api/fields/(?P<object>[^/]++)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_fields_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_getone')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_getone:

                // mautic_api_fields_new
                if (preg_match('#^/api/fields/(?P<object>[^/]++)/new$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_fields_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_new', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_new')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::newEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_new:

                // mautic_api_fields_newbatch
                if (preg_match('#^/api/fields/(?P<object>[^/]++)/batch/new$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_fields_newbatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_newbatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_newbatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::newEntitiesAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_newbatch:

                // mautic_api_fields_editbatchput
                if (preg_match('#^/api/fields/(?P<object>[^/]++)/batch/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_fields_editbatchput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_editbatchput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_editbatchput')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::editEntitiesAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_editbatchput:

                // mautic_api_fields_editbatchpatch
                if (preg_match('#^/api/fields/(?P<object>[^/]++)/batch/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_fields_editbatchpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_editbatchpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_editbatchpatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::editEntitiesAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_editbatchpatch:

                // mautic_api_fields_editput
                if (preg_match('#^/api/fields/(?P<object>[^/]++)/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_fields_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_editput')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_editput:

                // mautic_api_fields_editpatch
                if (preg_match('#^/api/fields/(?P<object>[^/]++)/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_fields_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_editpatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_editpatch:

                // mautic_api_fields_deletebatch
                if (preg_match('#^/api/fields/(?P<object>[^/]++)/batch/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_fields_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_deletebatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_deletebatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::deleteEntitiesAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_deletebatch:

                // mautic_api_fields_delete
                if (preg_match('#^/api/fields/(?P<object>[^/]++)/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_fields_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_fields_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_fields_delete')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_fields_delete:

            }

            if (0 === strpos($pathinfo, '/api/notes')) {
                // mautic_api_notes_getall
                if ('/api/notes' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_notes_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notes_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notes_getall',);
                }
                not_mautic_api_notes_getall:

                // mautic_api_notes_getone
                if (preg_match('#^/api/notes/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_notes_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notes_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_notes_getone')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_notes_getone:

                // mautic_api_notes_new
                if ('/api/notes/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_notes_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notes_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_notes_new',);
                }
                not_mautic_api_notes_new:

                if (0 === strpos($pathinfo, '/api/notes/batch')) {
                    // mautic_api_notes_newbatch
                    if ('/api/notes/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_notes_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_notes_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notes_newbatch',);
                    }
                    not_mautic_api_notes_newbatch:

                    if (0 === strpos($pathinfo, '/api/notes/batch/edit')) {
                        // mautic_api_notes_editbatchput
                        if ('/api/notes/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_notes_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_notes_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notes_editbatchput',);
                        }
                        not_mautic_api_notes_editbatchput:

                        // mautic_api_notes_editbatchpatch
                        if ('/api/notes/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_notes_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_notes_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notes_editbatchpatch',);
                        }
                        not_mautic_api_notes_editbatchpatch:

                    }

                }

                // mautic_api_notes_editput
                if (preg_match('#^/api/notes/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_notes_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notes_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_notes_editput')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_notes_editput:

                // mautic_api_notes_editpatch
                if (preg_match('#^/api/notes/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_notes_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notes_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_notes_editpatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_notes_editpatch:

                // mautic_api_notes_deletebatch
                if ('/api/notes/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_notes_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notes_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notes_deletebatch',);
                }
                not_mautic_api_notes_deletebatch:

                // mautic_api_notes_delete
                if (preg_match('#^/api/notes/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_notes_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notes_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_notes_delete')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\NoteApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_notes_delete:

            }

            if (0 === strpos($pathinfo, '/api/devices')) {
                // mautic_api_devices_getall
                if ('/api/devices' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_devices_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_devices_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_devices_getall',);
                }
                not_mautic_api_devices_getall:

                // mautic_api_devices_getone
                if (preg_match('#^/api/devices/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_devices_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_devices_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_devices_getone')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_devices_getone:

                // mautic_api_devices_new
                if ('/api/devices/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_devices_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_devices_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_devices_new',);
                }
                not_mautic_api_devices_new:

                if (0 === strpos($pathinfo, '/api/devices/batch')) {
                    // mautic_api_devices_newbatch
                    if ('/api/devices/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_devices_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_devices_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_devices_newbatch',);
                    }
                    not_mautic_api_devices_newbatch:

                    if (0 === strpos($pathinfo, '/api/devices/batch/edit')) {
                        // mautic_api_devices_editbatchput
                        if ('/api/devices/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_devices_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_devices_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_devices_editbatchput',);
                        }
                        not_mautic_api_devices_editbatchput:

                        // mautic_api_devices_editbatchpatch
                        if ('/api/devices/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_devices_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_devices_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_devices_editbatchpatch',);
                        }
                        not_mautic_api_devices_editbatchpatch:

                    }

                }

                // mautic_api_devices_editput
                if (preg_match('#^/api/devices/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_devices_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_devices_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_devices_editput')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_devices_editput:

                // mautic_api_devices_editpatch
                if (preg_match('#^/api/devices/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_devices_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_devices_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_devices_editpatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_devices_editpatch:

                // mautic_api_devices_deletebatch
                if ('/api/devices/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_devices_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_devices_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_devices_deletebatch',);
                }
                not_mautic_api_devices_deletebatch:

                // mautic_api_devices_delete
                if (preg_match('#^/api/devices/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_devices_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_devices_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_devices_delete')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\DeviceApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_devices_delete:

            }

            if (0 === strpos($pathinfo, '/api/tags')) {
                // mautic_api_tags_getall
                if ('/api/tags' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_tags_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tags_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tags_getall',);
                }
                not_mautic_api_tags_getall:

                // mautic_api_tags_getone
                if (preg_match('#^/api/tags/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_tags_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tags_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_tags_getone')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_tags_getone:

                // mautic_api_tags_new
                if ('/api/tags/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_tags_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tags_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_tags_new',);
                }
                not_mautic_api_tags_new:

                if (0 === strpos($pathinfo, '/api/tags/batch')) {
                    // mautic_api_tags_newbatch
                    if ('/api/tags/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_tags_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_tags_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tags_newbatch',);
                    }
                    not_mautic_api_tags_newbatch:

                    if (0 === strpos($pathinfo, '/api/tags/batch/edit')) {
                        // mautic_api_tags_editbatchput
                        if ('/api/tags/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_tags_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_tags_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tags_editbatchput',);
                        }
                        not_mautic_api_tags_editbatchput:

                        // mautic_api_tags_editbatchpatch
                        if ('/api/tags/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_tags_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_tags_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tags_editbatchpatch',);
                        }
                        not_mautic_api_tags_editbatchpatch:

                    }

                }

                // mautic_api_tags_editput
                if (preg_match('#^/api/tags/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_tags_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tags_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_tags_editput')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_tags_editput:

                // mautic_api_tags_editpatch
                if (preg_match('#^/api/tags/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_tags_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tags_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_tags_editpatch')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_tags_editpatch:

                // mautic_api_tags_deletebatch
                if ('/api/tags/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_tags_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tags_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tags_deletebatch',);
                }
                not_mautic_api_tags_deletebatch:

                // mautic_api_tags_delete
                if (preg_match('#^/api/tags/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_tags_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tags_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_tags_delete')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\TagApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_tags_delete:

            }

            if (0 === strpos($pathinfo, '/api/segments')) {
                // bc_mautic_api_segmentaddcontact
                if (preg_match('#^/api/segments/(?P<id>\\d+)/contact/add/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_bc_mautic_api_segmentaddcontact;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'bc_mautic_api_segmentaddcontact', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_segmentaddcontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::addLeadAction',  '_format' => 'json',));
                }
                not_bc_mautic_api_segmentaddcontact:

                // bc_mautic_api_segmentremovecontact
                if (preg_match('#^/api/segments/(?P<id>\\d+)/contact/remove/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_bc_mautic_api_segmentremovecontact;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'bc_mautic_api_segmentremovecontact', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_segmentremovecontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::removeLeadAction',  '_format' => 'json',));
                }
                not_bc_mautic_api_segmentremovecontact:

            }

            if (0 === strpos($pathinfo, '/api/co')) {
                if (0 === strpos($pathinfo, '/api/companies')) {
                    // bc_mautic_api_companyaddcontact
                    if (preg_match('#^/api/companies/(?P<companyId>\\d+)/contact/add/(?P<contactId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bc_mautic_api_companyaddcontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bc_mautic_api_companyaddcontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_companyaddcontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::addContactAction',  '_format' => 'json',));
                    }
                    not_bc_mautic_api_companyaddcontact:

                    // bc_mautic_api_companyremovecontact
                    if (preg_match('#^/api/companies/(?P<companyId>\\d+)/contact/remove/(?P<contactId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bc_mautic_api_companyremovecontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bc_mautic_api_companyremovecontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_companyremovecontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\CompanyApiController::removeContactAction',  '_format' => 'json',));
                    }
                    not_bc_mautic_api_companyremovecontact:

                }

                if (0 === strpos($pathinfo, '/api/contacts')) {
                    // bc_mautic_api_dncaddcontact
                    if (preg_match('#^/api/contacts/(?P<id>\\d+)/dnc/add(?:/(?P<channel>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bc_mautic_api_dncaddcontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bc_mautic_api_dncaddcontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_dncaddcontact')), array (  'channel' => 'email',  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::addDncAction',  '_format' => 'json',));
                    }
                    not_bc_mautic_api_dncaddcontact:

                    // bc_mautic_api_dncremovecontact
                    if (preg_match('#^/api/contacts/(?P<id>\\d+)/dnc/remove/(?P<channel>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bc_mautic_api_dncremovecontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bc_mautic_api_dncremovecontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_dncremovecontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::removeDncAction',  '_format' => 'json',));
                    }
                    not_bc_mautic_api_dncremovecontact:

                    // bc_mautic_api_getcontactevents
                    if (preg_match('#^/api/contacts/(?P<id>\\d+)/events$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_bc_mautic_api_getcontactevents;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bc_mautic_api_getcontactevents', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_getcontactevents')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getEventsAction',  '_format' => 'json',));
                    }
                    not_bc_mautic_api_getcontactevents:

                }

            }

            if (0 === strpos($pathinfo, '/api/notifications')) {
                // mautic_api_notifications_getall
                if ('/api/notifications' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_notifications_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notifications_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notifications_getall',);
                }
                not_mautic_api_notifications_getall:

                // mautic_api_notifications_getone
                if (preg_match('#^/api/notifications/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_notifications_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notifications_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_notifications_getone')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_notifications_getone:

                // mautic_api_notifications_new
                if ('/api/notifications/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_notifications_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notifications_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_notifications_new',);
                }
                not_mautic_api_notifications_new:

                if (0 === strpos($pathinfo, '/api/notifications/batch')) {
                    // mautic_api_notifications_newbatch
                    if ('/api/notifications/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_notifications_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_notifications_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notifications_newbatch',);
                    }
                    not_mautic_api_notifications_newbatch:

                    if (0 === strpos($pathinfo, '/api/notifications/batch/edit')) {
                        // mautic_api_notifications_editbatchput
                        if ('/api/notifications/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_notifications_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_notifications_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notifications_editbatchput',);
                        }
                        not_mautic_api_notifications_editbatchput:

                        // mautic_api_notifications_editbatchpatch
                        if ('/api/notifications/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_notifications_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_notifications_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notifications_editbatchpatch',);
                        }
                        not_mautic_api_notifications_editbatchpatch:

                    }

                }

                // mautic_api_notifications_editput
                if (preg_match('#^/api/notifications/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_notifications_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notifications_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_notifications_editput')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_notifications_editput:

                // mautic_api_notifications_editpatch
                if (preg_match('#^/api/notifications/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_notifications_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notifications_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_notifications_editpatch')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_notifications_editpatch:

                // mautic_api_notifications_deletebatch
                if ('/api/notifications/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_notifications_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notifications_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_notifications_deletebatch',);
                }
                not_mautic_api_notifications_deletebatch:

                // mautic_api_notifications_delete
                if (preg_match('#^/api/notifications/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_notifications_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_notifications_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_notifications_delete')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_notifications_delete:

            }

            if (0 === strpos($pathinfo, '/api/p')) {
                if (0 === strpos($pathinfo, '/api/pages')) {
                    // mautic_api_pages_getall
                    if ('/api/pages' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_pages_getall;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_pages_getall', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_pages_getall',);
                    }
                    not_mautic_api_pages_getall:

                    // mautic_api_pages_getone
                    if (preg_match('#^/api/pages/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_pages_getone;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_pages_getone', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_pages_getone')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::getEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_pages_getone:

                    // mautic_api_pages_new
                    if ('/api/pages/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_pages_new;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_pages_new', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_pages_new',);
                    }
                    not_mautic_api_pages_new:

                    if (0 === strpos($pathinfo, '/api/pages/batch')) {
                        // mautic_api_pages_newbatch
                        if ('/api/pages/batch/new' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mautic_api_pages_newbatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_pages_newbatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_pages_newbatch',);
                        }
                        not_mautic_api_pages_newbatch:

                        if (0 === strpos($pathinfo, '/api/pages/batch/edit')) {
                            // mautic_api_pages_editbatchput
                            if ('/api/pages/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_mautic_api_pages_editbatchput;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_pages_editbatchput', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_pages_editbatchput',);
                            }
                            not_mautic_api_pages_editbatchput:

                            // mautic_api_pages_editbatchpatch
                            if ('/api/pages/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_mautic_api_pages_editbatchpatch;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_pages_editbatchpatch', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_pages_editbatchpatch',);
                            }
                            not_mautic_api_pages_editbatchpatch:

                        }

                    }

                    // mautic_api_pages_editput
                    if (preg_match('#^/api/pages/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_mautic_api_pages_editput;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_pages_editput', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_pages_editput')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_pages_editput:

                    // mautic_api_pages_editpatch
                    if (preg_match('#^/api/pages/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_mautic_api_pages_editpatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_pages_editpatch', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_pages_editpatch')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_pages_editpatch:

                    // mautic_api_pages_deletebatch
                    if ('/api/pages/batch/delete' === $pathinfo) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_pages_deletebatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_pages_deletebatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_pages_deletebatch',);
                    }
                    not_mautic_api_pages_deletebatch:

                    // mautic_api_pages_delete
                    if (preg_match('#^/api/pages/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_pages_delete;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_pages_delete', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_pages_delete')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::deleteEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_pages_delete:

                }

                if (0 === strpos($pathinfo, '/api/points')) {
                    // mautic_api_points_getall
                    if ('/api/points' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_points_getall;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_points_getall', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_points_getall',);
                    }
                    not_mautic_api_points_getall:

                    // mautic_api_points_getone
                    if (preg_match('#^/api/points/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_points_getone;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_points_getone', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_points_getone')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::getEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_points_getone:

                    // mautic_api_points_new
                    if ('/api/points/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_points_new;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_points_new', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_points_new',);
                    }
                    not_mautic_api_points_new:

                    if (0 === strpos($pathinfo, '/api/points/batch')) {
                        // mautic_api_points_newbatch
                        if ('/api/points/batch/new' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mautic_api_points_newbatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_points_newbatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_points_newbatch',);
                        }
                        not_mautic_api_points_newbatch:

                        if (0 === strpos($pathinfo, '/api/points/batch/edit')) {
                            // mautic_api_points_editbatchput
                            if ('/api/points/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_mautic_api_points_editbatchput;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_points_editbatchput', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_points_editbatchput',);
                            }
                            not_mautic_api_points_editbatchput:

                            // mautic_api_points_editbatchpatch
                            if ('/api/points/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_mautic_api_points_editbatchpatch;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_points_editbatchpatch', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_points_editbatchpatch',);
                            }
                            not_mautic_api_points_editbatchpatch:

                        }

                    }

                    // mautic_api_points_editput
                    if (preg_match('#^/api/points/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_mautic_api_points_editput;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_points_editput', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_points_editput')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_points_editput:

                    // mautic_api_points_editpatch
                    if (preg_match('#^/api/points/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_mautic_api_points_editpatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_points_editpatch', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_points_editpatch')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_points_editpatch:

                    // mautic_api_points_deletebatch
                    if ('/api/points/batch/delete' === $pathinfo) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_points_deletebatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_points_deletebatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_points_deletebatch',);
                    }
                    not_mautic_api_points_deletebatch:

                    // mautic_api_points_delete
                    if (preg_match('#^/api/points/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_points_delete;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_points_delete', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_points_delete')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::deleteEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_points_delete:

                    // mautic_api_getpointactiontypes
                    if ('/api/points/actions/types' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getpointactiontypes;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_getpointactiontypes', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::getPointActionTypesAction',  '_format' => 'json',  '_route' => 'mautic_api_getpointactiontypes',);
                    }
                    not_mautic_api_getpointactiontypes:

                    if (0 === strpos($pathinfo, '/api/points/triggers')) {
                        // mautic_api_triggers_getall
                        if ('/api/points/triggers' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mautic_api_triggers_getall;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_triggers_getall', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_triggers_getall',);
                        }
                        not_mautic_api_triggers_getall:

                        // mautic_api_triggers_getone
                        if (preg_match('#^/api/points/triggers/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mautic_api_triggers_getone;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_triggers_getone', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_triggers_getone')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::getEntityAction',  '_format' => 'json',));
                        }
                        not_mautic_api_triggers_getone:

                        // mautic_api_triggers_new
                        if ('/api/points/triggers/new' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mautic_api_triggers_new;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_triggers_new', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_triggers_new',);
                        }
                        not_mautic_api_triggers_new:

                        if (0 === strpos($pathinfo, '/api/points/triggers/batch')) {
                            // mautic_api_triggers_newbatch
                            if ('/api/points/triggers/batch/new' === $pathinfo) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_mautic_api_triggers_newbatch;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_triggers_newbatch', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_triggers_newbatch',);
                            }
                            not_mautic_api_triggers_newbatch:

                            if (0 === strpos($pathinfo, '/api/points/triggers/batch/edit')) {
                                // mautic_api_triggers_editbatchput
                                if ('/api/points/triggers/batch/edit' === $pathinfo) {
                                    if ($this->context->getMethod() != 'PUT') {
                                        $allow[] = 'PUT';
                                        goto not_mautic_api_triggers_editbatchput;
                                    }

                                    $requiredSchemes = array (  'https' => 0,);
                                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                        return $this->redirect($rawPathinfo, 'mautic_api_triggers_editbatchput', key($requiredSchemes));
                                    }

                                    return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_triggers_editbatchput',);
                                }
                                not_mautic_api_triggers_editbatchput:

                                // mautic_api_triggers_editbatchpatch
                                if ('/api/points/triggers/batch/edit' === $pathinfo) {
                                    if ($this->context->getMethod() != 'PATCH') {
                                        $allow[] = 'PATCH';
                                        goto not_mautic_api_triggers_editbatchpatch;
                                    }

                                    $requiredSchemes = array (  'https' => 0,);
                                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                        return $this->redirect($rawPathinfo, 'mautic_api_triggers_editbatchpatch', key($requiredSchemes));
                                    }

                                    return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_triggers_editbatchpatch',);
                                }
                                not_mautic_api_triggers_editbatchpatch:

                            }

                        }

                        // mautic_api_triggers_editput
                        if (preg_match('#^/api/points/triggers/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_triggers_editput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_triggers_editput', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_triggers_editput')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::editEntityAction',  '_format' => 'json',));
                        }
                        not_mautic_api_triggers_editput:

                        // mautic_api_triggers_editpatch
                        if (preg_match('#^/api/points/triggers/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_triggers_editpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_triggers_editpatch', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_triggers_editpatch')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::editEntityAction',  '_format' => 'json',));
                        }
                        not_mautic_api_triggers_editpatch:

                        // mautic_api_triggers_deletebatch
                        if ('/api/points/triggers/batch/delete' === $pathinfo) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_mautic_api_triggers_deletebatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_triggers_deletebatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_triggers_deletebatch',);
                        }
                        not_mautic_api_triggers_deletebatch:

                        // mautic_api_triggers_delete
                        if (preg_match('#^/api/points/triggers/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_mautic_api_triggers_delete;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_triggers_delete', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_triggers_delete')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::deleteEntityAction',  '_format' => 'json',));
                        }
                        not_mautic_api_triggers_delete:

                        // mautic_api_getpointtriggereventtypes
                        if ('/api/points/triggers/events/types' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mautic_api_getpointtriggereventtypes;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_getpointtriggereventtypes', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::getPointTriggerEventTypesAction',  '_format' => 'json',  '_route' => 'mautic_api_getpointtriggereventtypes',);
                        }
                        not_mautic_api_getpointtriggereventtypes:

                        // mautic_api_pointtriggerdeleteevents
                        if (preg_match('#^/api/points/triggers/(?P<triggerId>\\d+)/events/delete$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_mautic_api_pointtriggerdeleteevents;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_pointtriggerdeleteevents', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_pointtriggerdeleteevents')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::deletePointTriggerEventsAction',  '_format' => 'json',));
                        }
                        not_mautic_api_pointtriggerdeleteevents:

                    }

                }

            }

            // mautic_api_adjustcontactpoints
            if (0 === strpos($pathinfo, '/api/contacts') && preg_match('#^/api/contacts/(?P<leadId>\\d+)/points/(?P<operator>[^/]++)/(?P<delta>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mautic_api_adjustcontactpoints;
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_api_adjustcontactpoints', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_adjustcontactpoints')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::adjustPointsAction',  '_format' => 'json',));
            }
            not_mautic_api_adjustcontactpoints:

            if (0 === strpos($pathinfo, '/api/reports')) {
                // mautic_api_getreports
                if ('/api/reports' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getreports;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getreports', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\Api\\ReportApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getreports',);
                }
                not_mautic_api_getreports:

                // mautic_api_getreport
                if (preg_match('#^/api/reports/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getreport;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getreport', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getreport')), array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\Api\\ReportApiController::getReportAction',  '_format' => 'json',));
                }
                not_mautic_api_getreport:

            }

            if (0 === strpos($pathinfo, '/api/s')) {
                if (0 === strpos($pathinfo, '/api/smses')) {
                    // mautic_api_smses_getall
                    if ('/api/smses' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_smses_getall;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_smses_getall', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_smses_getall',);
                    }
                    not_mautic_api_smses_getall:

                    // mautic_api_smses_getone
                    if (preg_match('#^/api/smses/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_smses_getone;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_smses_getone', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_smses_getone')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::getEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_smses_getone:

                    // mautic_api_smses_new
                    if ('/api/smses/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_smses_new;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_smses_new', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_smses_new',);
                    }
                    not_mautic_api_smses_new:

                    if (0 === strpos($pathinfo, '/api/smses/batch')) {
                        // mautic_api_smses_newbatch
                        if ('/api/smses/batch/new' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mautic_api_smses_newbatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_smses_newbatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_smses_newbatch',);
                        }
                        not_mautic_api_smses_newbatch:

                        if (0 === strpos($pathinfo, '/api/smses/batch/edit')) {
                            // mautic_api_smses_editbatchput
                            if ('/api/smses/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_mautic_api_smses_editbatchput;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_smses_editbatchput', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_smses_editbatchput',);
                            }
                            not_mautic_api_smses_editbatchput:

                            // mautic_api_smses_editbatchpatch
                            if ('/api/smses/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_mautic_api_smses_editbatchpatch;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_smses_editbatchpatch', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_smses_editbatchpatch',);
                            }
                            not_mautic_api_smses_editbatchpatch:

                        }

                    }

                    // mautic_api_smses_editput
                    if (preg_match('#^/api/smses/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_mautic_api_smses_editput;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_smses_editput', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_smses_editput')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_smses_editput:

                    // mautic_api_smses_editpatch
                    if (preg_match('#^/api/smses/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_mautic_api_smses_editpatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_smses_editpatch', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_smses_editpatch')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_smses_editpatch:

                    // mautic_api_smses_deletebatch
                    if ('/api/smses/batch/delete' === $pathinfo) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_smses_deletebatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_smses_deletebatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_smses_deletebatch',);
                    }
                    not_mautic_api_smses_deletebatch:

                    // mautic_api_smses_delete
                    if (preg_match('#^/api/smses/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_smses_delete;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_smses_delete', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_smses_delete')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::deleteEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_smses_delete:

                    // mautic_api_smses_send
                    if (preg_match('#^/api/smses/(?P<id>\\d+)/contact/(?P<contactId>[^/]++)/send$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_smses_send;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_smses_send', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_smses_send')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::sendAction',  '_format' => 'json',));
                    }
                    not_mautic_api_smses_send:

                }

                if (0 === strpos($pathinfo, '/api/stages')) {
                    // mautic_api_stages_getall
                    if ('/api/stages' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_stages_getall;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_stages_getall', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_stages_getall',);
                    }
                    not_mautic_api_stages_getall:

                    // mautic_api_stages_getone
                    if (preg_match('#^/api/stages/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_stages_getone;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_stages_getone', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_stages_getone')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::getEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_stages_getone:

                    // mautic_api_stages_new
                    if ('/api/stages/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_stages_new;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_stages_new', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_stages_new',);
                    }
                    not_mautic_api_stages_new:

                    if (0 === strpos($pathinfo, '/api/stages/batch')) {
                        // mautic_api_stages_newbatch
                        if ('/api/stages/batch/new' === $pathinfo) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mautic_api_stages_newbatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_stages_newbatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_stages_newbatch',);
                        }
                        not_mautic_api_stages_newbatch:

                        if (0 === strpos($pathinfo, '/api/stages/batch/edit')) {
                            // mautic_api_stages_editbatchput
                            if ('/api/stages/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_mautic_api_stages_editbatchput;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_stages_editbatchput', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_stages_editbatchput',);
                            }
                            not_mautic_api_stages_editbatchput:

                            // mautic_api_stages_editbatchpatch
                            if ('/api/stages/batch/edit' === $pathinfo) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_mautic_api_stages_editbatchpatch;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($rawPathinfo, 'mautic_api_stages_editbatchpatch', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_stages_editbatchpatch',);
                            }
                            not_mautic_api_stages_editbatchpatch:

                        }

                    }

                    // mautic_api_stages_editput
                    if (preg_match('#^/api/stages/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_mautic_api_stages_editput;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_stages_editput', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_stages_editput')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_stages_editput:

                    // mautic_api_stages_editpatch
                    if (preg_match('#^/api/stages/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_mautic_api_stages_editpatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_stages_editpatch', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_stages_editpatch')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::editEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_stages_editpatch:

                    // mautic_api_stages_deletebatch
                    if ('/api/stages/batch/delete' === $pathinfo) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_stages_deletebatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_stages_deletebatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_stages_deletebatch',);
                    }
                    not_mautic_api_stages_deletebatch:

                    // mautic_api_stages_delete
                    if (preg_match('#^/api/stages/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_mautic_api_stages_delete;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_stages_delete', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_stages_delete')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::deleteEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_stages_delete:

                    // mautic_api_stageddcontact
                    if (preg_match('#^/api/stages/(?P<id>\\d+)/contact/(?P<contactId>[^/]++)/add$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_stageddcontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_stageddcontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_stageddcontact')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::addContactAction',  '_format' => 'json',));
                    }
                    not_mautic_api_stageddcontact:

                    // mautic_api_stageremovecontact
                    if (preg_match('#^/api/stages/(?P<id>\\d+)/contact/(?P<contactId>[^/]++)/remove$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_stageremovecontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_stageremovecontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_stageremovecontact')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::removeContactAction',  '_format' => 'json',));
                    }
                    not_mautic_api_stageremovecontact:

                    // bc_mautic_api_stageddcontact
                    if (preg_match('#^/api/stages/(?P<id>\\d+)/contact/add/(?P<contactId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bc_mautic_api_stageddcontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bc_mautic_api_stageddcontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_stageddcontact')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::addContactAction',  '_format' => 'json',));
                    }
                    not_bc_mautic_api_stageddcontact:

                    // bc_mautic_api_stageremovecontact
                    if (preg_match('#^/api/stages/(?P<id>\\d+)/contact/remove/(?P<contactId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bc_mautic_api_stageremovecontact;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'bc_mautic_api_stageremovecontact', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bc_mautic_api_stageremovecontact')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::removeContactAction',  '_format' => 'json',));
                    }
                    not_bc_mautic_api_stageremovecontact:

                }

            }

            if (0 === strpos($pathinfo, '/api/users')) {
                // mautic_api_users_getall
                if ('/api/users' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_users_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_users_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_users_getall',);
                }
                not_mautic_api_users_getall:

                // mautic_api_users_getone
                if (preg_match('#^/api/users/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_users_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_users_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_users_getone')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_users_getone:

                // mautic_api_users_new
                if ('/api/users/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_users_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_users_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_users_new',);
                }
                not_mautic_api_users_new:

                if (0 === strpos($pathinfo, '/api/users/batch')) {
                    // mautic_api_users_newbatch
                    if ('/api/users/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_users_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_users_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_users_newbatch',);
                    }
                    not_mautic_api_users_newbatch:

                    if (0 === strpos($pathinfo, '/api/users/batch/edit')) {
                        // mautic_api_users_editbatchput
                        if ('/api/users/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_users_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_users_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_users_editbatchput',);
                        }
                        not_mautic_api_users_editbatchput:

                        // mautic_api_users_editbatchpatch
                        if ('/api/users/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_users_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_users_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_users_editbatchpatch',);
                        }
                        not_mautic_api_users_editbatchpatch:

                    }

                }

                // mautic_api_users_editput
                if (preg_match('#^/api/users/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_users_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_users_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_users_editput')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_users_editput:

                // mautic_api_users_editpatch
                if (preg_match('#^/api/users/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_users_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_users_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_users_editpatch')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_users_editpatch:

                // mautic_api_users_deletebatch
                if ('/api/users/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_users_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_users_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_users_deletebatch',);
                }
                not_mautic_api_users_deletebatch:

                // mautic_api_users_delete
                if (preg_match('#^/api/users/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_users_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_users_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_users_delete')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_users_delete:

                // mautic_api_getself
                if ('/api/users/self' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getself;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getself', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::getSelfAction',  '_format' => 'json',  '_route' => 'mautic_api_getself',);
                }
                not_mautic_api_getself:

                // mautic_api_checkpermission
                if (preg_match('#^/api/users/(?P<id>\\d+)/permissioncheck$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_checkpermission;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_checkpermission', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_checkpermission')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::isGrantedAction',  '_format' => 'json',));
                }
                not_mautic_api_checkpermission:

                // mautic_api_getuserroles
                if ('/api/users/list/roles' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getuserroles;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_getuserroles', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::getRolesAction',  '_format' => 'json',  '_route' => 'mautic_api_getuserroles',);
                }
                not_mautic_api_getuserroles:

            }

            if (0 === strpos($pathinfo, '/api/roles')) {
                // mautic_api_roles_getall
                if ('/api/roles' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_roles_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_roles_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_roles_getall',);
                }
                not_mautic_api_roles_getall:

                // mautic_api_roles_getone
                if (preg_match('#^/api/roles/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_roles_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_roles_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_roles_getone')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_roles_getone:

                // mautic_api_roles_new
                if ('/api/roles/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_roles_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_roles_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_roles_new',);
                }
                not_mautic_api_roles_new:

                if (0 === strpos($pathinfo, '/api/roles/batch')) {
                    // mautic_api_roles_newbatch
                    if ('/api/roles/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_roles_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_roles_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_roles_newbatch',);
                    }
                    not_mautic_api_roles_newbatch:

                    if (0 === strpos($pathinfo, '/api/roles/batch/edit')) {
                        // mautic_api_roles_editbatchput
                        if ('/api/roles/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_roles_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_roles_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_roles_editbatchput',);
                        }
                        not_mautic_api_roles_editbatchput:

                        // mautic_api_roles_editbatchpatch
                        if ('/api/roles/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_roles_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_roles_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_roles_editbatchpatch',);
                        }
                        not_mautic_api_roles_editbatchpatch:

                    }

                }

                // mautic_api_roles_editput
                if (preg_match('#^/api/roles/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_roles_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_roles_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_roles_editput')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_roles_editput:

                // mautic_api_roles_editpatch
                if (preg_match('#^/api/roles/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_roles_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_roles_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_roles_editpatch')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_roles_editpatch:

                // mautic_api_roles_deletebatch
                if ('/api/roles/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_roles_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_roles_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_roles_deletebatch',);
                }
                not_mautic_api_roles_deletebatch:

                // mautic_api_roles_delete
                if (preg_match('#^/api/roles/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_roles_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_roles_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_roles_delete')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_roles_delete:

            }

            if (0 === strpos($pathinfo, '/api/hooks')) {
                // mautic_api_hooks_getall
                if ('/api/hooks' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_hooks_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_hooks_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_hooks_getall',);
                }
                not_mautic_api_hooks_getall:

                // mautic_api_hooks_getone
                if (preg_match('#^/api/hooks/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_hooks_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_hooks_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_hooks_getone')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_hooks_getone:

                // mautic_api_hooks_new
                if ('/api/hooks/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_hooks_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_hooks_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_hooks_new',);
                }
                not_mautic_api_hooks_new:

                if (0 === strpos($pathinfo, '/api/hooks/batch')) {
                    // mautic_api_hooks_newbatch
                    if ('/api/hooks/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_hooks_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_hooks_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_hooks_newbatch',);
                    }
                    not_mautic_api_hooks_newbatch:

                    if (0 === strpos($pathinfo, '/api/hooks/batch/edit')) {
                        // mautic_api_hooks_editbatchput
                        if ('/api/hooks/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_hooks_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_hooks_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_hooks_editbatchput',);
                        }
                        not_mautic_api_hooks_editbatchput:

                        // mautic_api_hooks_editbatchpatch
                        if ('/api/hooks/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_hooks_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_hooks_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_hooks_editbatchpatch',);
                        }
                        not_mautic_api_hooks_editbatchpatch:

                    }

                }

                // mautic_api_hooks_editput
                if (preg_match('#^/api/hooks/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_hooks_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_hooks_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_hooks_editput')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_hooks_editput:

                // mautic_api_hooks_editpatch
                if (preg_match('#^/api/hooks/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_hooks_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_hooks_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_hooks_editpatch')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_hooks_editpatch:

                // mautic_api_hooks_deletebatch
                if ('/api/hooks/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_hooks_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_hooks_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_hooks_deletebatch',);
                }
                not_mautic_api_hooks_deletebatch:

                // mautic_api_hooks_delete
                if (preg_match('#^/api/hooks/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_hooks_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_hooks_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_hooks_delete')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_hooks_delete:

                // mautic_api_webhookevents
                if ('/api/hooks/triggers' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_webhookevents;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_webhookevents', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::getTriggersAction',  '_format' => 'json',  '_route' => 'mautic_api_webhookevents',);
                }
                not_mautic_api_webhookevents:

            }

            if (0 === strpos($pathinfo, '/api/focus')) {
                // mautic_api_focus_getall
                if ('/api/focus' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_focus_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_focus_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_focus_getall',);
                }
                not_mautic_api_focus_getall:

                // mautic_api_focus_getone
                if (preg_match('#^/api/focus/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_focus_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_focus_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_focus_getone')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_focus_getone:

                // mautic_api_focus_new
                if ('/api/focus/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_focus_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_focus_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_focus_new',);
                }
                not_mautic_api_focus_new:

                if (0 === strpos($pathinfo, '/api/focus/batch')) {
                    // mautic_api_focus_newbatch
                    if ('/api/focus/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_focus_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_focus_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_focus_newbatch',);
                    }
                    not_mautic_api_focus_newbatch:

                    if (0 === strpos($pathinfo, '/api/focus/batch/edit')) {
                        // mautic_api_focus_editbatchput
                        if ('/api/focus/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_focus_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_focus_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_focus_editbatchput',);
                        }
                        not_mautic_api_focus_editbatchput:

                        // mautic_api_focus_editbatchpatch
                        if ('/api/focus/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_focus_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_focus_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_focus_editbatchpatch',);
                        }
                        not_mautic_api_focus_editbatchpatch:

                    }

                }

                // mautic_api_focus_editput
                if (preg_match('#^/api/focus/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_focus_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_focus_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_focus_editput')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_focus_editput:

                // mautic_api_focus_editpatch
                if (preg_match('#^/api/focus/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_focus_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_focus_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_focus_editpatch')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_focus_editpatch:

                // mautic_api_focus_deletebatch
                if ('/api/focus/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_focus_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_focus_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_focus_deletebatch',);
                }
                not_mautic_api_focus_deletebatch:

                // mautic_api_focus_delete
                if (preg_match('#^/api/focus/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_focus_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_focus_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_focus_delete')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_focus_delete:

                // mautic_api_focusjs
                if (preg_match('#^/api/focus/(?P<id>\\d+)/js$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_focusjs;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_focusjs', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_focusjs')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\Api\\FocusApiController::generateJsAction',  '_format' => 'json',));
                }
                not_mautic_api_focusjs:

            }

            if (0 === strpos($pathinfo, '/api/tweets')) {
                // mautic_api_tweets_getall
                if ('/api/tweets' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_tweets_getall;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tweets_getall', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tweets_getall',);
                }
                not_mautic_api_tweets_getall:

                // mautic_api_tweets_getone
                if (preg_match('#^/api/tweets/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_tweets_getone;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tweets_getone', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_tweets_getone')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_tweets_getone:

                // mautic_api_tweets_new
                if ('/api/tweets/new' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_tweets_new;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tweets_new', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_tweets_new',);
                }
                not_mautic_api_tweets_new:

                if (0 === strpos($pathinfo, '/api/tweets/batch')) {
                    // mautic_api_tweets_newbatch
                    if ('/api/tweets/batch/new' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mautic_api_tweets_newbatch;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_api_tweets_newbatch', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::newEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tweets_newbatch',);
                    }
                    not_mautic_api_tweets_newbatch:

                    if (0 === strpos($pathinfo, '/api/tweets/batch/edit')) {
                        // mautic_api_tweets_editbatchput
                        if ('/api/tweets/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_mautic_api_tweets_editbatchput;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_tweets_editbatchput', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tweets_editbatchput',);
                        }
                        not_mautic_api_tweets_editbatchput:

                        // mautic_api_tweets_editbatchpatch
                        if ('/api/tweets/batch/edit' === $pathinfo) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_mautic_api_tweets_editbatchpatch;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_api_tweets_editbatchpatch', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::editEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tweets_editbatchpatch',);
                        }
                        not_mautic_api_tweets_editbatchpatch:

                    }

                }

                // mautic_api_tweets_editput
                if (preg_match('#^/api/tweets/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_tweets_editput;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tweets_editput', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_tweets_editput')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_tweets_editput:

                // mautic_api_tweets_editpatch
                if (preg_match('#^/api/tweets/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_tweets_editpatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tweets_editpatch', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_tweets_editpatch')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_tweets_editpatch:

                // mautic_api_tweets_deletebatch
                if ('/api/tweets/batch/delete' === $pathinfo) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_tweets_deletebatch;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tweets_deletebatch', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::deleteEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_tweets_deletebatch',);
                }
                not_mautic_api_tweets_deletebatch:

                // mautic_api_tweets_delete
                if (preg_match('#^/api/tweets/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_tweets_delete;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_api_tweets_delete', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_tweets_delete')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\Api\\TweetApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_tweets_delete:

            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            // mautic_core_ajax
            if ('/s/ajax' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_core_ajax', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\AjaxController::delegateAjaxAction',  '_route' => 'mautic_core_ajax',);
            }

            if (0 === strpos($pathinfo, '/s/update')) {
                // mautic_core_update
                if ('/s/update' === $pathinfo) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_core_update', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\UpdateController::indexAction',  '_route' => 'mautic_core_update',);
                }

                // mautic_core_update_schema
                if ('/s/update/schema' === $pathinfo) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_core_update_schema', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\UpdateController::schemaAction',  '_route' => 'mautic_core_update_schema',);
                }

            }

            // mautic_core_form_action
            if (0 === strpos($pathinfo, '/s/action') && preg_match('#^/s/action/(?P<objectAction>[^/]++)(?:/(?P<objectModel>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?)?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_core_form_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_form_action')), array (  'objectModel' => '',  '_controller' => 'Mautic\\CoreBundle\\Controller\\FormController::executeAction',  'objectId' => 0,));
            }

            // mautic_core_file_action
            if (0 === strpos($pathinfo, '/s/file') && preg_match('#^/s/file/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_core_file_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_file_action')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\FileController::executeAction',  'objectId' => 0,));
            }

            if (0 === strpos($pathinfo, '/s/themes')) {
                // mautic_themes_index
                if ('/s/themes' === $pathinfo) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_themes_index', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\ThemeController::indexAction',  '_route' => 'mautic_themes_index',);
                }

                // mautic_themes_action
                if (preg_match('#^/s/themes/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_themes_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_themes_action')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\ThemeController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/credentials')) {
                // mautic_client_index
                if (preg_match('#^/s/credentials(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_client_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_client_index')), array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::indexAction',  'page' => 0,));
                }

                // mautic_client_action
                if (preg_match('#^/s/credentials/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_client_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_client_action')), array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/assets')) {
                // mautic_asset_index
                if (preg_match('#^/s/assets(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_asset_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_index')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::indexAction',  'page' => 0,));
                }

                // mautic_asset_remote
                if ('/s/assets/remote' === $pathinfo) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_asset_remote', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::remoteAction',  '_route' => 'mautic_asset_remote',);
                }

                // mautic_asset_action
                if (preg_match('#^/s/assets/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_asset_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_action')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/ca')) {
                if (0 === strpos($pathinfo, '/s/calendar')) {
                    // mautic_calendar_index
                    if ('/s/calendar' === $pathinfo) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_calendar_index', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\CalendarBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mautic_calendar_index',);
                    }

                    // mautic_calendar_action
                    if (preg_match('#^/s/calendar/(?P<objectAction>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_calendar_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_calendar_action')), array (  '_controller' => 'Mautic\\CalendarBundle\\Controller\\DefaultController::executeAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/s/campaign')) {
                    if (0 === strpos($pathinfo, '/s/campaigns')) {
                        // mautic_campaignevent_action
                        if (0 === strpos($pathinfo, '/s/campaigns/events') && preg_match('#^/s/campaigns/events/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_campaignevent_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaignevent_action')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\EventController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_campaignsource_action
                        if (0 === strpos($pathinfo, '/s/campaigns/sources') && preg_match('#^/s/campaigns/sources/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_campaignsource_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaignsource_action')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\SourceController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_campaign_index
                        if (preg_match('#^/s/campaigns(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_campaign_index', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_index')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::indexAction',  'page' => 0,));
                        }

                        // mautic_campaign_action
                        if (preg_match('#^/s/campaigns/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_campaign_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_action')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_campaign_contacts
                        if (0 === strpos($pathinfo, '/s/campaigns/view') && preg_match('#^/s/campaigns/view/(?P<objectId>[a-zA-Z0-9_-]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_campaign_contacts', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_contacts')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::contactsAction',  'page' => 0,  'objectId' => 0,));
                        }

                    }

                    // mautic_campaign_preview
                    if (0 === strpos($pathinfo, '/s/campaign/preview') && preg_match('#^/s/campaign/preview(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_campaign_preview', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_preview')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::previewAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/categories')) {
                    // mautic_category_index
                    if (preg_match('#^/s/categories(?:/(?P<bundle>[^/]++)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_category_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_category_index')), array (  'bundle' => 'category',  '_controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::indexAction',  'page' => 0,));
                    }

                    // mautic_category_action
                    if (preg_match('#^/s/categories/(?P<bundle>[^/]++)/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_category_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_category_action')), array (  'bundle' => 'category',  '_controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::executeCategoryAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/messages')) {
                // mautic_message_index
                if (preg_match('#^/s/messages(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_message_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_message_index')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::indexAction',  'page' => 0,));
                }

                // mautic_message_contacts
                if (0 === strpos($pathinfo, '/s/messages/contacts') && preg_match('#^/s/messages/contacts/(?P<objectId>[a-zA-Z0-9_-]+)/(?P<channel>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_message_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_message_contacts')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::contactsAction',  'page' => 0,  'objectId' => 0,));
                }

                // mautic_message_action
                if (preg_match('#^/s/messages/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_message_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_message_action')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::executeAction',  'objectId' => 0,));
                }

            }

            // mautic_config_action
            if (0 === strpos($pathinfo, '/s/config') && preg_match('#^/s/config/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_config_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_config_action')), array (  '_controller' => 'Mautic\\ConfigBundle\\Controller\\ConfigController::executeAction',  'objectId' => 0,));
            }

            // mautic_sysinfo_index
            if ('/s/sysinfo' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_sysinfo_index', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\ConfigBundle\\Controller\\SysinfoController::indexAction',  '_route' => 'mautic_sysinfo_index',);
            }

            if (0 === strpos($pathinfo, '/s/d')) {
                if (0 === strpos($pathinfo, '/s/dashboard')) {
                    // mautic_dashboard_index
                    if ('/s/dashboard' === $pathinfo) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_dashboard_index', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::indexAction',  '_route' => 'mautic_dashboard_index',);
                    }

                    // mautic_dashboard_action
                    if (preg_match('#^/s/dashboard/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_dashboard_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_dashboard_action')), array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::executeAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/dwc')) {
                    // mautic_dynamicContent_index
                    if (preg_match('#^/s/dwc(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_dynamicContent_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_dynamicContent_index')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::indexAction',  'page' => 0,));
                    }

                    // mautic_dynamicContent_action
                    if (preg_match('#^/s/dwc/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_dynamicContent_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_dynamicContent_action')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/emails')) {
                // mautic_email_index
                if (preg_match('#^/s/emails(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_email_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_index')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::indexAction',  'page' => 0,));
                }

                // mautic_email_action
                if (preg_match('#^/s/emails/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_email_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_action')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::executeAction',  'objectId' => 0,));
                }

                // mautic_email_contacts
                if (0 === strpos($pathinfo, '/s/emails/contacts') && preg_match('#^/s/emails/contacts(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_email_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_contacts')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::contactsAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/forms')) {
                // mautic_formaction_action
                if (0 === strpos($pathinfo, '/s/forms/action') && preg_match('#^/s/forms/action/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_formaction_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_formaction_action')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\ActionController::executeAction',  'objectId' => 0,));
                }

                // mautic_formfield_action
                if (0 === strpos($pathinfo, '/s/forms/field') && preg_match('#^/s/forms/field/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_formfield_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_formfield_action')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\FieldController::executeAction',  'objectId' => 0,));
                }

                // mautic_form_index
                if (preg_match('#^/s/forms(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_form_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_index')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\FormController::indexAction',  'page' => 0,));
                }

                if (0 === strpos($pathinfo, '/s/forms/results')) {
                    // mautic_form_results
                    if (preg_match('#^/s/forms/results(?:/(?P<objectId>[a-zA-Z0-9_-]+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_form_results', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_results')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::indexAction',  'page' => 0,  'objectId' => 0,));
                    }

                    // mautic_form_file_download
                    if (0 === strpos($pathinfo, '/s/forms/results/file') && preg_match('#^/s/forms/results/file/(?P<submissionId>[^/]++)/(?P<field>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_form_file_download', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_file_download')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::downloadFileAction',));
                    }

                    // mautic_form_export
                    if (preg_match('#^/s/forms/results/(?P<objectId>[a-zA-Z0-9_-]+)/export(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_form_export', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_export')), array (  'format' => 'csv',  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::exportAction',  'objectId' => 0,));
                    }

                    // mautic_form_results_action
                    if (preg_match('#^/s/forms/results/(?P<formId>[^/]++)/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_form_results_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_results_action')), array (  'objectId' => 0,  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::executeAction',));
                    }

                }

                // mautic_form_action
                if (preg_match('#^/s/forms/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_form_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_action')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\FormController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/plugin')) {
                // mautic_plugin_timeline_index
                if (preg_match('#^/s/plugin/(?P<integration>.+)/timeline(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_plugin_timeline_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_timeline_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::pluginIndexAction',  'page' => 0,));
                }

                // mautic_plugin_timeline_view
                if (preg_match('#^/s/plugin/(?P<integration>.+)/timeline/view/(?P<leadId>\\d+)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_plugin_timeline_view', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_timeline_view')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::pluginViewAction',  'page' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/segments')) {
                // mautic_segment_index
                if (preg_match('#^/s/segments(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_segment_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_segment_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::indexAction',  'page' => 0,));
                }

                // mautic_segment_action
                if (preg_match('#^/s/segments/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_segment_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_segment_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/contacts')) {
                if (0 === strpos($pathinfo, '/s/contacts/fields')) {
                    // mautic_contactfield_index
                    if (preg_match('#^/s/contacts/fields(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_contactfield_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactfield_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\FieldController::indexAction',  'page' => 0,));
                    }

                    // mautic_contactfield_action
                    if (preg_match('#^/s/contacts/fields/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_contactfield_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactfield_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\FieldController::executeAction',  'objectId' => 0,));
                    }

                }

                // mautic_contact_index
                if (preg_match('#^/s/contacts(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_contact_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\LeadController::indexAction',  'page' => 0,));
                }

                if (0 === strpos($pathinfo, '/s/contacts/notes')) {
                    // mautic_contactnote_index
                    if (preg_match('#^/s/contacts/notes(?:/(?P<leadId>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_contactnote_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactnote_index')), array (  'leadId' => 0,  '_controller' => 'Mautic\\LeadBundle\\Controller\\NoteController::indexAction',  'page' => 0,));
                    }

                    // mautic_contactnote_action
                    if (preg_match('#^/s/contacts/notes/(?P<leadId>\\d+)/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_contactnote_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactnote_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\NoteController::executeNoteAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/contacts/timeline')) {
                    // mautic_contacttimeline_action
                    if (preg_match('#^/s/contacts/timeline/(?P<leadId>\\d+)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_contacttimeline_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contacttimeline_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::indexAction',  'page' => 0,));
                    }

                    // mautic_contact_timeline_export_action
                    if (0 === strpos($pathinfo, '/s/contacts/timeline/batchExport') && preg_match('#^/s/contacts/timeline/batchExport/(?P<leadId>\\d+)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_contact_timeline_export_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_timeline_export_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::batchExportAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/s/contacts/auditlog')) {
                    // mautic_contact_auditlog_action
                    if (preg_match('#^/s/contacts/auditlog/(?P<leadId>\\d+)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_contact_auditlog_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_auditlog_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\AuditlogController::indexAction',  'page' => 0,));
                    }

                    // mautic_contact_auditlog_export_action
                    if (0 === strpos($pathinfo, '/s/contacts/auditlog/batchExport') && preg_match('#^/s/contacts/auditlog/batchExport/(?P<leadId>\\d+)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_contact_auditlog_export_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_auditlog_export_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\AuditlogController::batchExportAction',));
                    }

                }

            }

            // mautic_contact_import_index
            if (preg_match('#^/s/(?P<object>[^/]++)/import(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_contact_import_index', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_import_index')), array (  'object' => 'contacts',  '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::indexAction',  'page' => 0,));
            }

            // mautic_contact_import_action
            if (preg_match('#^/s/(?P<object>[^/]++)/import/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_contact_import_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_import_action')), array (  'object' => 'contacts',  '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::executeAction',  'objectId' => 0,));
            }

            // mautic_import_index
            if (preg_match('#^/s/(?P<object>[^/]++)/import(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_import_index', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_import_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::indexAction',  'page' => 0,));
            }

            // mautic_import_action
            if (preg_match('#^/s/(?P<object>[^/]++)/import/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_import_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_import_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::executeAction',  'objectId' => 0,));
            }

            if (0 === strpos($pathinfo, '/s/co')) {
                // mautic_contact_action
                if (0 === strpos($pathinfo, '/s/contacts') && preg_match('#^/s/contacts/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_contact_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\LeadController::executeAction',  'objectId' => 0,));
                }

                if (0 === strpos($pathinfo, '/s/companies')) {
                    // mautic_company_index
                    if (preg_match('#^/s/companies(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_company_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_company_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\CompanyController::indexAction',  'page' => 0,));
                    }

                    // mautic_company_action
                    if (preg_match('#^/s/companies/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_company_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_company_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\CompanyController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            // mautic_segment_contacts
            if (0 === strpos($pathinfo, '/s/segment/view') && preg_match('#^/s/segment/view/(?P<objectId>[a-zA-Z0-9_-]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_segment_contacts', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_segment_contacts')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::contactsAction',  'page' => 0,  'objectId' => 0,));
            }

            if (0 === strpos($pathinfo, '/s/notifications')) {
                // mautic_notification_index
                if (preg_match('#^/s/notifications(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_notification_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_notification_index')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::indexAction',  'page' => 0,));
                }

                // mautic_notification_action
                if (preg_match('#^/s/notifications/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_notification_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_notification_action')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::executeAction',  'objectId' => 0,));
                }

                // mautic_notification_contacts
                if (0 === strpos($pathinfo, '/s/notifications/view') && preg_match('#^/s/notifications/view/(?P<objectId>[a-zA-Z0-9_-]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_notification_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_notification_contacts')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::contactsAction',  'page' => 0,  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/mobile_notifications')) {
                // mautic_mobile_notification_index
                if (preg_match('#^/s/mobile_notifications(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_mobile_notification_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_mobile_notification_index')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::indexAction',  'page' => 0,));
                }

                // mautic_mobile_notification_action
                if (preg_match('#^/s/mobile_notifications/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_mobile_notification_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_mobile_notification_action')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::executeAction',  'objectId' => 0,));
                }

                // mautic_mobile_notification_contacts
                if (0 === strpos($pathinfo, '/s/mobile_notifications/view') && preg_match('#^/s/mobile_notifications/view/(?P<objectId>[a-zA-Z0-9_-]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_mobile_notification_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_mobile_notification_contacts')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::contactsAction',  'page' => 0,  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/p')) {
                if (0 === strpos($pathinfo, '/s/pages')) {
                    // mautic_page_index
                    if (preg_match('#^/s/pages(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_page_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_index')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::indexAction',  'page' => 0,));
                    }

                    // mautic_page_action
                    if (preg_match('#^/s/pages/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_page_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_action')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::executeAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/plugins')) {
                    if (0 === strpos($pathinfo, '/s/plugins/integrations/auth')) {
                        // mautic_integration_auth_callback_secure
                        if (0 === strpos($pathinfo, '/s/plugins/integrations/authcallback') && preg_match('#^/s/plugins/integrations/authcallback/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_integration_auth_callback_secure', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_callback_secure')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction',));
                        }

                        // mautic_integration_auth_postauth_secure
                        if (0 === strpos($pathinfo, '/s/plugins/integrations/authstatus') && preg_match('#^/s/plugins/integrations/authstatus/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_integration_auth_postauth_secure', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_postauth_secure')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction',));
                        }

                    }

                    // mautic_plugin_index
                    if ('/s/plugins' === $pathinfo) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_plugin_index', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::indexAction',  '_route' => 'mautic_plugin_index',);
                    }

                    // mautic_plugin_config
                    if (0 === strpos($pathinfo, '/s/plugins/config') && preg_match('#^/s/plugins/config/(?P<name>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_plugin_config', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_config')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::configAction',  'page' => 0,));
                    }

                    // mautic_plugin_info
                    if (0 === strpos($pathinfo, '/s/plugins/info') && preg_match('#^/s/plugins/info/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_plugin_info', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_info')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::infoAction',));
                    }

                    // mautic_plugin_reload
                    if ('/s/plugins/reload' === $pathinfo) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_plugin_reload', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::reloadAction',  '_route' => 'mautic_plugin_reload',);
                    }

                }

                if (0 === strpos($pathinfo, '/s/points')) {
                    if (0 === strpos($pathinfo, '/s/points/triggers')) {
                        // mautic_pointtriggerevent_action
                        if (0 === strpos($pathinfo, '/s/points/triggers/events') && preg_match('#^/s/points/triggers/events/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_pointtriggerevent_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_pointtriggerevent_action')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerEventController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_pointtrigger_index
                        if (preg_match('#^/s/points/triggers(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_pointtrigger_index', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_pointtrigger_index')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::indexAction',  'page' => 0,));
                        }

                        // mautic_pointtrigger_action
                        if (preg_match('#^/s/points/triggers/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($rawPathinfo, 'mautic_pointtrigger_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_pointtrigger_action')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::executeAction',  'objectId' => 0,));
                        }

                    }

                    // mautic_point_index
                    if (preg_match('#^/s/points(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_point_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_point_index')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\PointController::indexAction',  'page' => 0,));
                    }

                    // mautic_point_action
                    if (preg_match('#^/s/points/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_point_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_point_action')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\PointController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/reports')) {
                // mautic_report_index
                if (preg_match('#^/s/reports(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_report_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_index')), array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::indexAction',  'page' => 0,));
                }

                if (0 === strpos($pathinfo, '/s/reports/view')) {
                    // mautic_report_export
                    if (preg_match('#^/s/reports/view/(?P<objectId>[a-zA-Z0-9_-]+)/export(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_report_export', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_export')), array (  'format' => 'csv',  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::exportAction',  'objectId' => 0,));
                    }

                    // mautic_report_view
                    if (preg_match('#^/s/reports/view(?:/(?P<objectId>[a-zA-Z0-9_-]+)(?:/(?P<reportPage>\\d+))?)?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_report_view', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_view')), array (  'reportPage' => 1,  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::viewAction',  'objectId' => 0,));
                    }

                }

                // mautic_report_schedule_preview
                if (0 === strpos($pathinfo, '/s/reports/schedule/preview') && preg_match('#^/s/reports/schedule/preview(?:/(?P<isScheduled>[^/]++)(?:/(?P<scheduleUnit>[^/]++)(?:/(?P<scheduleDay>[^/]++)(?:/(?P<scheduleMonthFrequency>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_report_schedule_preview', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_schedule_preview')), array (  'isScheduled' => 0,  'scheduleUnit' => '',  'scheduleDay' => '',  'scheduleMonthFrequency' => '',  '_controller' => 'Mautic\\ReportBundle\\Controller\\ScheduleController::indexAction',));
                }

                // mautic_report_action
                if (preg_match('#^/s/reports/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_report_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_action')), array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/s')) {
                if (0 === strpos($pathinfo, '/s/sms')) {
                    // mautic_sms_index
                    if (preg_match('#^/s/sms(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_sms_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sms_index')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::indexAction',  'page' => 0,));
                    }

                    // mautic_sms_action
                    if (preg_match('#^/s/sms/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_sms_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sms_action')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::executeAction',  'objectId' => 0,));
                    }

                    // mautic_sms_contacts
                    if (0 === strpos($pathinfo, '/s/sms/view') && preg_match('#^/s/sms/view/(?P<objectId>[a-zA-Z0-9_-]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_sms_contacts', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sms_contacts')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::contactsAction',  'page' => 0,  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/stages')) {
                    // mautic_stage_index
                    if (preg_match('#^/s/stages(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_stage_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_stage_index')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\StageController::indexAction',  'page' => 0,));
                    }

                    // mautic_stage_action
                    if (preg_match('#^/s/stages/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_stage_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_stage_action')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\StageController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/log')) {
                if (0 === strpos($pathinfo, '/s/login')) {
                    // login
                    if ('/s/login' === $pathinfo) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'login', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                    }

                    // mautic_user_logincheck
                    if ('/s/login_check' === $pathinfo) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_user_logincheck', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'mautic_user_logincheck',);
                    }

                }

                // mautic_user_logout
                if ('/s/logout' === $pathinfo) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_user_logout', key($requiredSchemes));
                    }

                    return array('_route' => 'mautic_user_logout');
                }

            }

            if (0 === strpos($pathinfo, '/s/s')) {
                if (0 === strpos($pathinfo, '/s/sso_login')) {
                    // mautic_sso_login
                    if (preg_match('#^/s/sso_login/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_sso_login', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sso_login')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::ssoLoginAction',));
                    }

                    // mautic_sso_login_check
                    if (0 === strpos($pathinfo, '/s/sso_login_check') && preg_match('#^/s/sso_login_check/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'mautic_sso_login_check', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sso_login_check')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::ssoLoginCheckAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/s/saml/login')) {
                    // lightsaml_sp.login
                    if ('/s/saml/login' === $pathinfo) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'lightsaml_sp.login', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'LightSaml\\SpBundle\\Controller\\DefaultController::loginAction',  '_route' => 'lightsaml_sp.login',);
                    }

                    // lightsaml_sp.login_check
                    if ('/s/saml/login_check' === $pathinfo) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($rawPathinfo, 'lightsaml_sp.login_check', key($requiredSchemes));
                        }

                        return array('_route' => 'lightsaml_sp.login_check');
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/users')) {
                // mautic_user_index
                if (preg_match('#^/s/users(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_user_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_user_index')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\UserController::indexAction',  'page' => 0,));
                }

                // mautic_user_action
                if (preg_match('#^/s/users/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_user_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_user_action')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\UserController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/roles')) {
                // mautic_role_index
                if (preg_match('#^/s/roles(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_role_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_role_index')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\RoleController::indexAction',  'page' => 0,));
                }

                // mautic_role_action
                if (preg_match('#^/s/roles/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_role_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_role_action')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\RoleController::executeAction',  'objectId' => 0,));
                }

            }

            // mautic_user_account
            if ('/s/account' === $pathinfo) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_user_account', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\ProfileController::indexAction',  '_route' => 'mautic_user_account',);
            }

            if (0 === strpos($pathinfo, '/s/webhooks')) {
                // mautic_webhook_index
                if (preg_match('#^/s/webhooks(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_webhook_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_webhook_index')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::indexAction',  'page' => 0,));
                }

                // mautic_webhook_action
                if (preg_match('#^/s/webhooks/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_webhook_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_webhook_action')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::executeAction',  'objectId' => 0,));
                }

            }

            // mautic_plugin_fullcontact_action
            if (0 === strpos($pathinfo, '/s/fullcontact') && preg_match('#^/s/fullcontact/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_plugin_fullcontact_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_fullcontact_action')), array (  '_controller' => 'MauticPlugin\\MauticFullContactBundle\\Controller\\FullContactController::executeAction',  'objectId' => 0,));
            }

            // mautic_plugin_clearbit_action
            if (0 === strpos($pathinfo, '/s/clearbit') && preg_match('#^/s/clearbit/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, 'mautic_plugin_clearbit_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_clearbit_action')), array (  '_controller' => 'MauticPlugin\\MauticClearbitBundle\\Controller\\ClearbitController::executeAction',  'objectId' => 0,));
            }

            if (0 === strpos($pathinfo, '/s/focus')) {
                // mautic_focus_index
                if (preg_match('#^/s/focus(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_focus_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_focus_index')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\FocusController::indexAction',  'page' => 0,));
                }

                // mautic_focus_action
                if (preg_match('#^/s/focus/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_focus_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_focus_action')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\FocusController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/monitoring')) {
                // mautic_social_index
                if (preg_match('#^/s/monitoring(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_social_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_index')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::indexAction',  'page' => 0,));
                }

                // mautic_social_action
                if (preg_match('#^/s/monitoring/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_social_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_action')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::executeAction',  'objectId' => 0,));
                }

                // mautic_social_contacts
                if (0 === strpos($pathinfo, '/s/monitoring/view') && preg_match('#^/s/monitoring/view/(?P<objectId>[a-zA-Z0-9_-]+)/contacts(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_social_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_contacts')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::contactsAction',  'page' => 0,  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/tweets')) {
                // mautic_tweet_index
                if (preg_match('#^/s/tweets(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_tweet_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_tweet_index')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\TweetController::indexAction',  'page' => 0,));
                }

                // mautic_tweet_action
                if (preg_match('#^/s/tweets/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_-]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($rawPathinfo, 'mautic_tweet_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_tweet_action')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\TweetController::executeAction',  'objectId' => 0,));
                }

            }

            // _uploader_upload_asset
            if ('/s/_uploader/asset/upload' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not__uploader_upload_asset;
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($rawPathinfo, '_uploader_upload_asset', key($requiredSchemes));
                }

                return array (  '_controller' => 'oneup_uploader.controller.mautic:upload',  '_format' => 'json',  '_route' => '_uploader_upload_asset',);
            }
            not__uploader_upload_asset:

        }

        // mautic_page_public
        if (preg_match('#^/(?P<slug>(?!(_(profiler|wdt)|css|images|js|favicon.ico|apps/bundles/|plugins/)).+)$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($rawPathinfo, 'mautic_page_public', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_public')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
