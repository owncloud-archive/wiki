<?php
namespace OCA\WikiApp\AppInfo;

use \OCP\AppFramework\App;
use OCP\AppFramework\Controller;
use OCA\WikiApp\Controller\ProjectController;

class Application extends App
{

    public function __construct(array $urlParams = array())
    {
        parent::__construct('WikiApp', $urlParams);

        $container = $this->getContainer();

        $container->registerService('ProjectController', function($c) {
          return new ProjectController(
              $c->query('AppName'),
              $c->query('Request'),
              $c->query('User'),
              $c->query('UserStorage')
            );
        });

        $container->registerService('UserStorage', function($c) {
            return $c->query('ServerContainer')->getUserFolder();
        });

        $container->registerService('User', function ($c) {
          return $c->query('ServerContainer')->getUserSession()->getUser();
        });

    }
}
