<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonia_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficherEvent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::AfficherEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/afficherEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterEvent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::AjouterEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/ajouterEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterActivite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::AjouterActiviteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/ajouterActivite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterTrip' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::AjouterFieldTripAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/ajouterTrip',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterCompetiton' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::AjouterCompetitionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/ajouterCompetiton',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifierEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::UpdateEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/modifierEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimerEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::DeleteEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/supprimerEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/ajax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficherEventFront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::AfficherEventFrontAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/afficherEventFront',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficherEventDetail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::DetailEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/afficherEventDetail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ParticiperEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::ParticipateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/ParticiperEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'CancelparticipEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::CancelParticipEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/CancelparticipEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajaxFront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\EventController::searchFrontAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/ajaxFront',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficherClub' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\ClubController::AfficherClubAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/afficherClub',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterClub' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\ClubController::AjouterClubAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/ajouterClub',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifierClub' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\ClubController::UpdateClubAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/modifierClub',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimerClub' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\ClubController::DeleteClubAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/supprimerClub',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficherClubFront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\ClubController::AfficherClubFrontAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sonia/afficherClubFront',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficherClubDetail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\ClubController::AfficherClubDetailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/afficherClubDetail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'participateClub' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\ClubController::ParticipateClubAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/participateClub',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Rating' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoniaBundle\\Controller\\ClubController::RatingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sonia/Rating',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_AddAccount' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AccountController::AddAccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_UpdateAccount' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AccountController::UpdateAccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/UpdateAccount',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_DeleteAccount' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AccountController::DeleteAccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/DeleteAccount',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_AccountSettings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AccountController::AccountSettingsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/AccountSettings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_AllAccounts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AccountController::AllAccountsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/AllAccounts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_SearchAjax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AccountController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/SearchAjax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_SortAdmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AccountController::SortAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/SortAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_UserDetails' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AccountController::UserDetailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/UserDetails',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_DisplayPDF' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AccountController::DisplayPDFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/DisplayPDF',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_AddClasse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ClasseController::AddClasseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/AddClasse',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_DeleteClasse' => array (  0 =>   array (    0 => 'classId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ClasseController::DeleteClasseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/DeleteClasse',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_UpdateClasse' => array (  0 =>   array (    0 => 'classId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ClasseController::UpdateClasseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/UpdateClasse',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_AddSubject' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SubjectController::AddSubjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/AddSubject',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_UpdateSubject' => array (  0 =>   array (    0 => 'subjectId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SubjectController::UpdateSubjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'subjectId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/UpdateSubject',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_searchSubject' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SubjectController::searchSubjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/searchSubject',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_DeleteSubject' => array (  0 =>   array (    0 => 'subjectId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SubjectController::DeleteSubjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'subjectId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/DeleteSubject',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_AddSchedule' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ScheduleController::AddScheduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/AddSchedule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_DeleteSchedule' => array (  0 =>   array (    0 => 'scheduleId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ScheduleController::DeleteScheduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'scheduleId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/DeleteSchedule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_DetailSchedule' => array (  0 =>   array (    0 => 'classeId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ScheduleController::DetailScheduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classeId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/DetailSchedule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_AddReclamation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ReclamationController::AddReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/AddReclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_ScheduleFront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ScheduleController::ScheduleFrontAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ScheduleFront',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle:Charts:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/chart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::frontAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/front',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
