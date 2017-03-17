<?php
$project = "Project1";
$user = "admin";
$pico_projects = "Pico Projects";

$owncloud_path = realpath(dirname("__FILE__")) . "/";
$project_path = $owncloud_path . "data/" . $user . "/files/" . $pico_projects . "/" . $project . "/";
$app_path = $owncloud_path . "apps/wiki/";
$pico_path = $app_path ."lib/pico/";

echo "owncloudpath : $owncloud_path \r\n";
echo "projectpath:  $project_path \r\n";
echo "app path :  $app_path \r\n";
echo "pico path : $pico_path \r\n";


define('ROOT_DIR', $project_path);
define('CONTENT_DIR', ROOT_DIR .'/content/');
define('CONTENT_EXT', '.md');
define('PLUGINS_DIR', ROOT_DIR .'/plugins/');
define('THEMES_DIR', ROOT_DIR .'/themes/');

define('LIB_DIR', $pico_path . "lib/");
define('CACHE_DIR', LIB_DIR ."cache/");
require_once($pico_path .'vendor/autoload.php');
require_once(LIB_DIR .'pico.php');

$pico = new Pico();

/*
$rootDir = /Users/jonathankawohl/github/ocdev/owncloud/data/admin/files/Pico Projects/Project1;
    $configDir = /Users/jonathankawohl/github/ocdev/owncloud/data/admin/files/Pico Projects/Project1/config
    $pluginsDir = /Users/jonathankawohl/github/ocdev/owncloud/data/admin/files/Pico Projects/Project1/plugins 
    $themesDir = /Users/jonathankawohl/github/ocdev/owncloud/data/admin/files/Pico Projects/Project1/themes 
*/
    