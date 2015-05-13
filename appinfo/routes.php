<?php
/**
 * ownCloud - picocmsapp
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Jan Müller <jan.mueller@novapo.net>
 * @copyright Jan Müller 2015
 */

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\PicoCmsApp\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
 $this->create('picocmsapp', 'website.php')
 	->actionInclude('picocmsapp/website.php');

return [
    'routes' => [
	   ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
	   ['name' => 'page#do_echo', 'url' => '/echo', 'verb' => 'POST'],
     ['name' => 'project#create', 'url' => '/projects', 'verb' => 'POST'],
     ['name' => 'project#index', 'url' => '/projects', 'verb' => 'GET'],
     ['name' => 'project#update', 'url' => '/projects/{id}', 'verb' => 'PUT'],
     ['name' => 'project#destroy', 'url' => '/projects/{id}', 'verb' => 'DELETE'],
    ]
];
