<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/etudiant')) {
            // etudiant_homepage
            if ('/etudiant' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EtudiantBundle\\Controller\\DefaultController::indexAction',  '_route' => 'etudiant_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_etudiant_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'etudiant_homepage'));
                }

                return $ret;
            }
            not_etudiant_homepage:

            // etudiant_inscrit
            if ('/etudiant/inscrit' === $pathinfo) {
                return array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::etudiantinscritAction',  '_route' => 'etudiant_inscrit',);
            }

            // etudiant_created
            if ('/etudiant/created' === $pathinfo) {
                return array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::accoutcreatedAction',  '_route' => 'etudiant_created',);
            }

            if (0 === strpos($pathinfo, '/etudiant/a')) {
                // etudiant_approve
                if ('/etudiant/approve' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::accoutaprovingAction',  '_route' => 'etudiant_approve',);
                }

                // etudiant_approving
                if (0 === strpos($pathinfo, '/etudiant/aproved') && preg_match('#^/etudiant/aproved/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudiant_approving']), array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::approveEtudiantAction',));
                }

                // etudiant_affectto
                if (0 === strpos($pathinfo, '/etudiant/affectto') && preg_match('#^/etudiant/affectto/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudiant_affectto']), array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::affecttoclassAction',));
                }

                // etudiant_addmanually
                if ('/etudiant/addStudentManually' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::AddStudentManuallyAction',  '_route' => 'etudiant_addmanually',);
                }

                // etudaint_addsubject
                if ('/etudiant/addsubject' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::AddSubjectAction',  '_route' => 'etudaint_addsubject',);
                }

                // etudiant_accountSetting
                if (0 === strpos($pathinfo, '/etudiant/accountSetting') && preg_match('#^/etudiant/accountSetting/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudiant_accountSetting']), array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::AccountsettingsAction',));
                }

                // etudaint_subjectreview
                if ('/etudiant/allsubjects' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::getSubjectsAction',  '_route' => 'etudaint_subjectreview',);
                }

            }

            elseif (0 === strpos($pathinfo, '/etudiant/delete')) {
                // etudiant_delete
                if (preg_match('#^/etudiant/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudiant_delete']), array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::deleteapproveAction',));
                }

                // etudaint_deletcomment
                if (0 === strpos($pathinfo, '/etudiant/deletecomment') && preg_match('#^/etudiant/deletecomment/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_deletcomment']), array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::deleteCommentAction',));
                }

            }

            // etudiant_accountdisable
            if (0 === strpos($pathinfo, '/etudiant/disableaccount') && preg_match('#^/etudiant/disableaccount/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudiant_accountdisable']), array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::disableAccountAction',));
            }

            // etudiant_list
            if ('/etudiant/listeStudents' === $pathinfo) {
                return array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::allstudentsAction',  '_route' => 'etudiant_list',);
            }

            // etudiant_submitreclamation
            if ('/etudiant/reclamation' === $pathinfo) {
                return array (  '_controller' => 'EtudiantBundle\\Controller\\ReclamationController::submitReclamationAction',  '_route' => 'etudiant_submitreclamation',);
            }

            if (0 === strpos($pathinfo, '/etudiant/reach')) {
                // ajax_search
                if ('/etudiant/reach' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\EtudiantController::searchBacktAction',  '_route' => 'ajax_search',);
                }

                // ajax_search_with_title
                if ('/etudiant/reachwithtitle' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::searchBacktAction',  '_route' => 'ajax_search_with_title',);
                }

            }

            // etudaint_subjectapprove
            if (0 === strpos($pathinfo, '/etudiant/subjectaprove') && preg_match('#^/etudiant/subjectaprove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_subjectapprove']), array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::approveSubjectAction',));
            }

            if (0 === strpos($pathinfo, '/etudiant/forum')) {
                // etudaint_forumlist
                if ('/etudiant/forum' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::getForumListAction',  '_route' => 'etudaint_forumlist',);
                }

                // etudaint_subjectview
                if (0 === strpos($pathinfo, '/etudiant/forum/subject') && preg_match('#^/etudiant/forum/subject/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_subjectview']), array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::getForumSubjectAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/etudiant/mysubjects')) {
                // etudaint_getmyforum
                if ('/etudiant/mysubjects' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::getmyForumSubAction',  '_route' => 'etudaint_getmyforum',);
                }

                // etudaint_deletesubject
                if (0 === strpos($pathinfo, '/etudiant/mysubjects/delete') && preg_match('#^/etudiant/mysubjects/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_deletesubject']), array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::deleteSubjectAction',));
                }

                // etudaint_modifysubject
                if (0 === strpos($pathinfo, '/etudiant/mysubjects/modify') && preg_match('#^/etudiant/mysubjects/modify/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_modifysubject']), array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::modifySubjectAction',));
                }

                // etudaint_solved
                if (0 === strpos($pathinfo, '/etudiant/mysubjects/solved') && preg_match('#^/etudiant/mysubjects/solved/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_solved']), array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::solvedAction',));
                }

            }

            // etudaint_votesyes
            if (0 === strpos($pathinfo, '/etudiant/vote/yes') && preg_match('#^/etudiant/vote/yes/(?P<id_voter>[^/]++)/(?P<id_subject>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_votesyes']), array (  '_controller' => 'EtudiantBundle\\Controller\\VotesController::votelike',));
            }

            // etudaint_votesno
            if (0 === strpos($pathinfo, '/etudiant/vote/no') && preg_match('#^/etudiant/vote/no/(?P<id_voter>[^/]++)/(?P<id_subject>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_votesno']), array (  '_controller' => 'EtudiantBundle\\Controller\\VotesController::dislike',));
            }

            if (0 === strpos($pathinfo, '/etudiant/back')) {
                if (0 === strpos($pathinfo, '/etudiant/back/delete')) {
                    // etudaint_deletesubjectback
                    if (preg_match('#^/etudiant/back/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_deletesubjectback']), array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::deleteSubjecBacktAction',));
                    }

                    // etudaint_deletereclamation
                    if (0 === strpos($pathinfo, '/etudiant/back/deletereclamation') && preg_match('#^/etudiant/back/deletereclamation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'etudaint_deletereclamation']), array (  '_controller' => 'EtudiantBundle\\Controller\\ReclamationController::deleteReclamationAction',));
                    }

                }

                // etudaint_allforumback
                if ('/etudiant/back/forumlist' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\ForumController::getAllforumsBackAction',  '_route' => 'etudaint_allforumback',);
                }

                // etudaint_allreclamation
                if ('/etudiant/back/allreclamations' === $pathinfo) {
                    return array (  '_controller' => 'EtudiantBundle\\Controller\\ReclamationController::getallreclamationsAction',  '_route' => 'etudaint_allreclamation',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/parent')) {
            // inscription_parent
            if ('/parent/inscri' === $pathinfo) {
                return array (  '_controller' => 'ParentBundle\\Controller\\ParentController::AjoutParentAction',  '_route' => 'inscription_parent',);
            }

            if (0 === strpos($pathinfo, '/parent/a')) {
                // afficher_parent
                if ('/parent/afficher' === $pathinfo) {
                    return array (  '_controller' => 'ParentBundle\\Controller\\ParentController::AfficherParentAction',  '_route' => 'afficher_parent',);
                }

                // afficher_reclamation
                if ('/parent/affichreclamation' === $pathinfo) {
                    return array (  '_controller' => 'ParentBundle\\Controller\\ReclamationController::AfficherReclamationAction',  '_route' => 'afficher_reclamation',);
                }

                // ajouter_reclamation
                if ('/parent/ajoutreclamation' === $pathinfo) {
                    return array (  '_controller' => 'ParentBundle\\Controller\\ReclamationController::AjoutReclamationAction',  '_route' => 'ajouter_reclamation',);
                }

                // ajout_front
                if ('/parent/ajoutfront' === $pathinfo) {
                    return array (  '_controller' => 'ParentBundle\\Controller\\ParentController::AjoutFrontAction',  '_route' => 'ajout_front',);
                }

                // accepter_parent
                if (0 === strpos($pathinfo, '/parent/accepter') && preg_match('#^/parent/accepter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'accepter_parent']), array (  '_controller' => 'ParentBundle\\Controller\\ParentController::AccepterParentAction',));
                }

            }

            // modifier_parent
            if (0 === strpos($pathinfo, '/parent/modifier') && preg_match('#^/parent/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifier_parent']), array (  '_controller' => 'ParentBundle\\Controller\\ParentController::ModifierParentAction',));
            }

            if (0 === strpos($pathinfo, '/parent/s')) {
                // supprimer_parent
                if (0 === strpos($pathinfo, '/parent/supprimer') && preg_match('#^/parent/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_parent']), array (  '_controller' => 'ParentBundle\\Controller\\ParentController::SupprimerParentAction',));
                }

                // supprimer_reclamation
                if (0 === strpos($pathinfo, '/parent/supprecla') && preg_match('#^/parent/supprecla/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_reclamation']), array (  '_controller' => 'ParentBundle\\Controller\\ReclamationController::SupprimerReclamationAction',));
                }

                // search_parent
                if ('/parent/search' === $pathinfo) {
                    return array (  '_controller' => 'ParentBundle\\Controller\\ParentController::searchParentAction',  '_route' => 'search_parent',);
                }

            }

            // detail_parent
            if (0 === strpos($pathinfo, '/parent/detail') && preg_match('#^/parent/detail/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'detail_parent']), array (  '_controller' => 'ParentBundle\\Controller\\ParentController::DetailParentAction',));
            }

            // refuser_parent
            if (0 === strpos($pathinfo, '/parent/refuser') && preg_match('#^/parent/refuser/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'refuser_parent']), array (  '_controller' => 'ParentBundle\\Controller\\ParentController::RefuserParentAction',));
            }

            // PDF
            if (0 === strpos($pathinfo, '/parent/PDF') && preg_match('#^/parent/PDF/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'PDF']), array (  '_controller' => 'ParentBundle\\Controller\\ParentController::DisplayPDFAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
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

        elseif (0 === strpos($pathinfo, '/sonia')) {
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

                elseif (0 === strpos($pathinfo, '/sonia/ajax')) {
                    // ajax
                    if ('/sonia/ajax' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\EventController::searchAction',  '_route' => 'ajax',);
                    }

                    // ajaxFront
                    if ('/sonia/ajaxFront' === $pathinfo) {
                        return array (  '_controller' => 'SoniaBundle\\Controller\\EventController::searchFrontAction',  '_route' => 'ajaxFront',);
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

            // Rating
            if (0 === strpos($pathinfo, '/sonia/Rating') && preg_match('#^/sonia/Rating/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Rating']), array (  '_controller' => 'SoniaBundle\\Controller\\ClubController::RatingAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // admin_AddAccount
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AdminBundle\\Controller\\AccountController::AddAccountAction',  '_route' => 'admin_AddAccount',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_AddAccount;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_AddAccount'));
                }

                return $ret;
            }
            not_admin_AddAccount:

            if (0 === strpos($pathinfo, '/admin/Update')) {
                // admin_UpdateAccount
                if (0 === strpos($pathinfo, '/admin/UpdateAccount') && preg_match('#^/admin/UpdateAccount/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_UpdateAccount']), array (  '_controller' => 'AdminBundle\\Controller\\AccountController::UpdateAccountAction',));
                }

                // admin_UpdateClasse
                if (0 === strpos($pathinfo, '/admin/UpdateClasse') && preg_match('#^/admin/UpdateClasse/(?P<classId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_UpdateClasse']), array (  '_controller' => 'AdminBundle\\Controller\\ClasseController::UpdateClasseAction',));
                }

                // admin_UpdateSubject
                if (0 === strpos($pathinfo, '/admin/UpdateSubject') && preg_match('#^/admin/UpdateSubject/(?P<subjectId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_UpdateSubject']), array (  '_controller' => 'AdminBundle\\Controller\\SubjectController::UpdateSubjectAction',));
                }

            }

            // admin_UserDetails
            if (0 === strpos($pathinfo, '/admin/UserDetails') && preg_match('#^/admin/UserDetails/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_UserDetails']), array (  '_controller' => 'AdminBundle\\Controller\\AccountController::UserDetailsAction',));
            }

            if (0 === strpos($pathinfo, '/admin/D')) {
                if (0 === strpos($pathinfo, '/admin/Delete')) {
                    // admin_DeleteAccount
                    if (0 === strpos($pathinfo, '/admin/DeleteAccount') && preg_match('#^/admin/DeleteAccount/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_DeleteAccount']), array (  '_controller' => 'AdminBundle\\Controller\\AccountController::DeleteAccountAction',));
                    }

                    // admin_DeleteClasse
                    if (0 === strpos($pathinfo, '/admin/DeleteClasse') && preg_match('#^/admin/DeleteClasse/(?P<classId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_DeleteClasse']), array (  '_controller' => 'AdminBundle\\Controller\\ClasseController::DeleteClasseAction',));
                    }

                    // admin_DeleteSubject
                    if (0 === strpos($pathinfo, '/admin/DeleteSubject') && preg_match('#^/admin/DeleteSubject/(?P<subjectId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_DeleteSubject']), array (  '_controller' => 'AdminBundle\\Controller\\SubjectController::DeleteSubjectAction',));
                    }

                    // admin_DeleteSchedule
                    if (0 === strpos($pathinfo, '/admin/DeleteSchedule') && preg_match('#^/admin/DeleteSchedule/(?P<scheduleId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_DeleteSchedule']), array (  '_controller' => 'AdminBundle\\Controller\\ScheduleController::DeleteScheduleAction',));
                    }

                }

                // admin_DetailSchedule
                if (0 === strpos($pathinfo, '/admin/DetailSchedule') && preg_match('#^/admin/DetailSchedule/(?P<classeId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_DetailSchedule']), array (  '_controller' => 'AdminBundle\\Controller\\ScheduleController::DetailScheduleAction',));
                }

                // admin_DisplayPDF
                if (0 === strpos($pathinfo, '/admin/DisplayPDF') && preg_match('#^/admin/DisplayPDF/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_DisplayPDF']), array (  '_controller' => 'AdminBundle\\Controller\\AccountController::DisplayPDFAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/A')) {
                // admin_AccountSettings
                if ('/admin/AccountSettings' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AccountController::AccountSettingsAction',  '_route' => 'admin_AccountSettings',);
                }

                // admin_AllAccounts
                if ('/admin/AllAccounts' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AccountController::AllAccountsAction',  '_route' => 'admin_AllAccounts',);
                }

                if (0 === strpos($pathinfo, '/admin/Add')) {
                    // admin_AddClasse
                    if ('/admin/AddClasse' === $pathinfo) {
                        return array (  '_controller' => 'AdminBundle\\Controller\\ClasseController::AddClasseAction',  '_route' => 'admin_AddClasse',);
                    }

                    // admin_AddSubject
                    if ('/admin/AddSubject' === $pathinfo) {
                        return array (  '_controller' => 'AdminBundle\\Controller\\SubjectController::AddSubjectAction',  '_route' => 'admin_AddSubject',);
                    }

                    // admin_AddSchedule
                    if ('/admin/AddSchedule' === $pathinfo) {
                        return array (  '_controller' => 'AdminBundle\\Controller\\ScheduleController::AddScheduleAction',  '_route' => 'admin_AddSchedule',);
                    }

                    // admin_AddReclamation
                    if ('/admin/AddReclamation' === $pathinfo) {
                        return array (  '_controller' => 'AdminBundle\\Controller\\ReclamationController::AddReclamationAction',  '_route' => 'admin_AddReclamation',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/S')) {
                // admin_SearchAjax
                if ('/admin/SearchAjax' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AccountController::searchAction',  '_route' => 'admin_SearchAjax',);
                }

                // admin_SortAdmin
                if ('/admin/SortAdmin' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AccountController::SortAdminAction',  '_route' => 'admin_SortAdmin',);
                }

                // admin_ScheduleFront
                if ('/admin/ScheduleFront' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\ScheduleController::ScheduleFrontAction',  '_route' => 'admin_ScheduleFront',);
                }

            }

            // admin_searchSubject
            if ('/admin/searchSubject' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\SubjectController::searchSubjectAction',  '_route' => 'admin_searchSubject',);
            }

            // chart
            if ('/admin/chart' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle:Charts:index',  '_route' => 'chart',);
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

        if (0 === strpos($pathinfo, '/register')) {
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
