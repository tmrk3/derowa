<?php 
// Error appearing
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Path of application directory
$base_dir = __DIR__."/index.d";
$html_dir = __DIR__."/index.d/templates";

// Load autoloader
require_once $base_dir."/extra/php/ClassLoader.php";
ClassLoader::set_dirs(array(
    $base_dir."/library",
    $base_dir."/system/library"
));

// Load config file
require_once $base_dir."/config.php";

// DEObject
DEObject::set_base_dir($base_dir);

$params = new DEParams("BLANK_IF_NULL");
// $params->extract_request_param($request_keys, array($_GET, $_POST));
$params->extract_request_param(array($_GET, $_POST));
$route_action  = $params->get("route_action");
$route_current = $params->get("route_current");
$route_next    = $params->get("route_next");
// print_r($params);

// DEPage
// TODO: Global variables should be set tacitly in super class 
// DEPage::set_request_param($params);
// DEPage::set_cookie($_COOKIE);
// DEPage::set_html_dir($html_dir);

// Router
// TODO: Router will be moved external module
if (!$route_current) {$route_current = "top";}
if (!$route_action) {$route_action = "default";}

# Create page
$DEPage = new DEPage;
$page = $DEPage->set_request_param($params)
               ->set_html_dir($html_dir)
               ->create_page($route_current);

$action = "action_".$route_action;
$result = $page->$action();
$result->send_result();

