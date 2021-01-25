<?php
//
//  Application
//
define('APPLICATION_ROOT_CONTROLLER', "{$_SERVER['DOCUMENT_ROOT']}/controllers/");
define('APPLICATION_SOURCE', $_SERVER['DOCUMENT_ROOT'].'/source/');
define('APPLICATION_VIEWPAGE_PATH', $_SERVER['DOCUMENT_ROOT'].'/source/viewpage.php');

//
//  Route
//
define('ROUTE_DEFAULT_CONTROLLER', 'home');

//
//  API
//
define('API_ROOT', "{$_SERVER['DOCUMENT_ROOT']}/models/api/");

//
// Database
//
define('DB_ROOT', "{$_SERVER['DOCUMENT_ROOT']}/models/database/");

//
//  View
//
define('VIEW_ROOT', "{$_SERVER['DOCUMENT_ROOT']}/views/");
define('VIEW_TEMPLATE', "{$_SERVER['DOCUMENT_ROOT']}/views/template/");
define('VIEW_TEMPLATE_HEAD', "{$_SERVER['DOCUMENT_ROOT']}/views/template/head.php");
define('VIEW_TEMPLATE_FOOTER', "{$_SERVER['DOCUMENT_ROOT']}/views/template/footer.php");


include_once APPLICATION_SOURCE.'viewPage.php';
include_once APPLICATION_SOURCE.'error.php';
include_once APPLICATION_SOURCE.'route.php';
include_once APPLICATION_SOURCE.'api.php';
include_once APPLICATION_SOURCE.'encryption.php';
include_once APPLICATION_SOURCE.'session.php';

include_once DB_ROOT.'sqlModel.php';
include_once DB_ROOT.'config.php';

