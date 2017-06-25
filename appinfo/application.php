<?php
namespace OCA\wiki\AppInfo;

use \OCP\AppFramework\App;
use OCP\AppFramework\Controller;
use OCA\wiki\Controller\ProjectController;

class Application extends App
{

    public function __construct(array $urlParams = array())
    {
        parent::__construct('wiki', $urlParams);

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
