<?php
$project = "Project1";
$user = "Jan";
$pico_projects = "Pico Projects";

$owncloud_path = realpath(dirname("__FILE__")) . "/";
$project_path = $owncloud_path . "data/" . $user . "/files/" . $pico_projects . "/" . $project . "/";
$app_path = $owncloud_path . "apps/picocmsapp/";
$pico_path = $app_path ."lib/pico/";

//echo $owncloud_path;
//echo $project_path;
//echo $app_path;
//echo $pico_path;


define('ROOT_DIR', $project_path);
define('CONTENT_DIR', ROOT_DIR .'content/');
define('CONTENT_EXT', '.md');
define('PLUGINS_DIR', ROOT_DIR .'plugins/');
define('THEMES_DIR', ROOT_DIR .'themes/');

define('LIB_DIR', $pico_path . "lib/");
define('CACHE_DIR', LIB_DIR ."cache/");
require_once($pico_path .'vendor/autoload.php');
require_once(LIB_DIR .'pico.php');

$pico = new Pico();
