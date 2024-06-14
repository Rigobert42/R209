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
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/competence' => [[['_route' => 'app_competence_index', '_controller' => 'App\\Controller\\CompetenceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competence/new' => [[['_route' => 'app_competence_new', '_controller' => 'App\\Controller\\CompetenceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/cv' => [[['_route' => 'app_cv', '_controller' => 'App\\Controller\\DashboardController::cv'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'app_formation_index', '_controller' => 'App\\Controller\\FormationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/formation/new' => [[['_route' => 'app_formation_new', '_controller' => 'App\\Controller\\FormationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/niveau' => [[['_route' => 'app_niveau_index', '_controller' => 'App\\Controller\\NiveauController::index'], null, ['GET' => 0], null, true, false, null]],
        '/niveau/new' => [[['_route' => 'app_niveau_new', '_controller' => 'App\\Controller\\NiveauController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/veille' => [[['_route' => 'app_veille_index', '_controller' => 'App\\Controller\\VeilleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veille/new' => [[['_route' => 'app_veille_new', '_controller' => 'App\\Controller\\VeilleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:226)'
                        .'|/edit(*:239)'
                        .'|(*:247)'
                    .')'
                    .'|ompetence/([^/]++)(?'
                        .'|(*:277)'
                        .'|/edit(*:290)'
                        .'|(*:298)'
                    .')'
                .')'
                .'|/formation/([^/]++)(?'
                    .'|(*:330)'
                    .'|/edit(*:343)'
                    .'|(*:351)'
                .')'
                .'|/niveau/([^/]++)(?'
                    .'|(*:379)'
                    .'|/edit(*:392)'
                    .'|(*:400)'
                .')'
                .'|/veille/([^/]++)(?'
                    .'|(*:428)'
                    .'|/edit(*:441)'
                    .'|(*:449)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        226 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        247 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        277 => [[['_route' => 'app_competence_show', '_controller' => 'App\\Controller\\CompetenceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        290 => [[['_route' => 'app_competence_edit', '_controller' => 'App\\Controller\\CompetenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        298 => [[['_route' => 'app_competence_delete', '_controller' => 'App\\Controller\\CompetenceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        330 => [[['_route' => 'app_formation_show', '_controller' => 'App\\Controller\\FormationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        343 => [[['_route' => 'app_formation_edit', '_controller' => 'App\\Controller\\FormationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        351 => [[['_route' => 'app_formation_delete', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_niveau_show', '_controller' => 'App\\Controller\\NiveauController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        392 => [[['_route' => 'app_niveau_edit', '_controller' => 'App\\Controller\\NiveauController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'app_niveau_delete', '_controller' => 'App\\Controller\\NiveauController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        428 => [[['_route' => 'app_veille_show', '_controller' => 'App\\Controller\\VeilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_veille_edit', '_controller' => 'App\\Controller\\VeilleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        449 => [
            [['_route' => 'app_veille_delete', '_controller' => 'App\\Controller\\VeilleController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
