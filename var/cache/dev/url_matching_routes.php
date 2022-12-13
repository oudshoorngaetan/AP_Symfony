<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/sejour/sejours' => [[['_route' => 'app_affichage_sejour', '_controller' => 'App\\Controller\\AffichageSejourController::index'], null, null, null, false, false, null]],
        '/sejour/sejoursDuJour' => [[['_route' => 'app_sejour_du_jour', '_controller' => 'App\\Controller\\AffichageSejourController::sejoursDuJour'], null, null, null, false, false, null]],
        '/sejour/menuSejour' => [[['_route' => 'app_menuSejour', '_controller' => 'App\\Controller\\AffichageSejourController::menuSejour'], null, null, null, false, false, null]],
        '/sejour/sejourAVenir' => [[['_route' => 'app_sejour_a_venir', '_controller' => 'App\\Controller\\AffichageSejourController::sejourAVenir'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/patients' => [[['_route' => 'patients', '_controller' => 'App\\Controller\\PatientController::getPatients'], null, null, null, false, false, null]],
        '/ajout_patient' => [[['_route' => 'ajout_patient', '_controller' => 'App\\Controller\\PatientController::ajoutPatient'], null, null, null, false, false, null]],
        '/principal' => [[['_route' => 'app_principal', '_controller' => 'App\\Controller\\PrincipalController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/createSejour' => [[['_route' => 'app_ajoutSejour', '_controller' => 'App\\Controller\\SejourController::createClub'], null, null, null, false, false, null]],
        '/sejour/sejourActuel' => [[['_route' => 'sejourActu', '_controller' => 'App\\Controller\\SejourController::SejourActuel'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/sejour/sejours(?'
                    .'|/([^/]++)(*:196)'
                    .'|Effectif/([^/]++)(*:221)'
                .')'
                .'|/patient/([^/]++)(*:247)'
                .'|/creer_sejour/([^/]++)(*:277)'
                .'|/modifSejour/([^/]++)(*:306)'
                .'|/unsejour/([^/]++)(*:332)'
                .'|/ajoutEtat(?'
                    .'|/([^/]++)(*:362)'
                    .'|Sortie/([^/]++)(*:385)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'app_sejour_date', '_controller' => 'App\\Controller\\AffichageSejourController::sejoursDate'], ['date'], null, null, false, true, null]],
        221 => [[['_route' => 'app_sejour_effectif', '_controller' => 'App\\Controller\\AffichageSejourController::sejoursEffectif'], ['date'], null, null, false, true, null]],
        247 => [[['_route' => 'patient', '_controller' => 'App\\Controller\\PatientController::getUnPatient'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'creer_sejour', '_controller' => 'App\\Controller\\PatientController::creerSejour'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'app_modifSejourId', '_controller' => 'App\\Controller\\SejourController::modifd'], ['id'], null, null, false, true, null]],
        332 => [[['_route' => 'unsejour', '_controller' => 'App\\Controller\\SejourController::sejourId'], ['id'], null, null, false, true, null]],
        362 => [[['_route' => 'etatsejour', '_controller' => 'App\\Controller\\SejourController::etatSejour'], ['id'], null, null, false, true, null]],
        385 => [
            [['_route' => 'ajoutEtatSortie', '_controller' => 'App\\Controller\\SejourController::etatSejourSortie'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
