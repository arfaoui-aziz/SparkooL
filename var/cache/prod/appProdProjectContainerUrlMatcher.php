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
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/sonia')) {
            // sonia_homepage
            if ('/sonia' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'SoniaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sonia_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_sonia_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sonia_homepage'));
                }

                return $ret;
            }
            not_sonia_homepage:

            if (0 === strpos($pathinfo, '/sonia/a')) {
                if (0 === strpos($pathinfo, '/sonia/afficherEvent')) {
                    // afficherEvent
                    if ('/sonia/afficherEvent' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\EventController::AfficherEventAction',  '_route' => 'afficherEvent',);
                    }

                    // afficherEventFront
                    if ('/sonia/afficherEventFront' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\EventController::AfficherEventFrontAction',  '_route' => 'afficherEventFront',);
                    }

                    // afficherEventDetail
                    if (0 === strpos($pathinfo, '/sonia/afficherEventDetail') && preg_match('#^/sonia/afficherEventDetail/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'afficherEventDetail']), array (  '_controller' => 'SoniaBundle\\Controller\\EventController::DetailEventAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/sonia/afficherClub')) {
                    // afficherClub
                    if ('/sonia/afficherClub' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\ClubController::AfficherClubAction',  '_route' => 'afficherClub',);
                    }

                    // afficherClubFront
                    if ('/sonia/afficherClubFront' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\ClubController::AfficherClubFrontAction',  '_route' => 'afficherClubFront',);
                    }

                    // afficherClubDetail
                    if (0 === strpos($pathinfo, '/sonia/afficherClubDetail') && preg_match('#^/sonia/afficherClubDetail/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'afficherClubDetail']), array (  '_controller' => 'SoniaBundle\\Controller\\ClubController::AfficherClubDetailAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/sonia/ajouter')) {
                    // ajouterEvent
                    if ('/sonia/ajouterEvent' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\EventController::AjouterEventAction',  '_route' => 'ajouterEvent',);
                    }

                    // ajouterActivite
                    if ('/sonia/ajouterActivite' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\EventController::AjouterActiviteAction',  '_route' => 'ajouterActivite',);
                    }

                    // ajouterTrip
                    if ('/sonia/ajouterTrip' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\EventController::AjouterFieldTripAction',  '_route' => 'ajouterTrip',);
                    }

                    // ajouterCompetiton
                    if ('/sonia/ajouterCompetiton' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\EventController::AjouterCompetitionAction',  '_route' => 'ajouterCompetiton',);
                    }

                    // ajouterClub
                    if ('/sonia/ajouterClub' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\ClubController::AjouterClubAction',  '_route' => 'ajouterClub',);
                    }

                }

            }

            // modifierEvent
            if (0 === strpos($pathinfo, '/sonia/modifierEvent') && preg_match('#^/sonia/modifierEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifierEvent']), array (  '_controller' => 'SoniaBundle\\Controller\\EventController::UpdateEventAction',));
            }

            // modifierClub
            if (0 === strpos($pathinfo, '/sonia/modifierClub') && preg_match('#^/sonia/modifierClub/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifierClub']), array (  '_controller' => 'SoniaBundle\\Controller\\ClubController::UpdateClubAction',));
            }

            // supprimerEvent
            if (0 === strpos($pathinfo, '/sonia/supprimerEvent') && preg_match('#^/sonia/supprimerEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimerEvent']), array (  '_controller' => 'SoniaBundle\\Controller\\EventController::DeleteEventAction',));
            }

            // supprimerClub
            if (0 === strpos($pathinfo, '/sonia/supprimerClub') && preg_match('#^/sonia/supprimerClub/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimerClub']), array (  '_controller' => 'SoniaBundle\\Controller\\ClubController::DeleteClubAction',));
            }

            // ParticiperEvent
            if (0 === strpos($pathinfo, '/sonia/ParticiperEvent') && preg_match('#^/sonia/ParticiperEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ParticiperEvent']), array (  '_controller' => 'SoniaBundle\\Controller\\EventController::ParticipateAction',));
            }

            // CancelparticipEvent
            if (0 === strpos($pathinfo, '/sonia/CancelparticipEvent') && preg_match('#^/sonia/CancelparticipEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'CancelparticipEvent']), array (  '_controller' => 'SoniaBundle\\Controller\\EventController::CancelParticipEventAction',));
            }

            // participateClub
            if (0 === strpos($pathinfo, '/sonia/participateClub') && preg_match('#^/sonia/participateClub/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'participateClub']), array (  '_controller' => 'SoniaBundle\\Controller\\ClubController::ParticipateClubAction',));
            }

        }

        // fos_user_security_login
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_fos_user_security_login;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_security_login'));
            }

            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_login;
            }

            return $ret;
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if ('/login_check' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_fos_user_security_check;
            }

            return $ret;
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        // back
        if ('/back' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back',);
        }

        // front
        if ('/front' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::frontAction',  '_route' => 'front',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
