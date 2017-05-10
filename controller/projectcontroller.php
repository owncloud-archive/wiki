<?php
/**
 * ownCloud - wiki
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Jan Müller <jan.mueller@novapo.net>
 * @copyright Jan Müller 2015
 */

 namespace OCA\wiki\Controller;

 use OC\Files\Filesystem;
 use OCP\Files\External\Service\IUserStoragesService;
 use OCP\IRequest;
 use OCP\AppFramework\Http\TemplateResponse;
 use OCP\AppFramework\Http\DataResponse;
 use OCP\AppFramework\Controller;
 use \OCP\Files\Node;
 use \OCP\IL10N;

 class ProjectController extends Controller {

   private $userID;

   private $rootStorage;

   private $picoProjectRoot;

   private $appStorage;

   #creates Pico Projects Folder

   public function __construct($AppName, IRequest $request, $user, $rootStorage ){

     parent::__construct($AppName, $request);

     $this->user = $user;
     $this->rootStorage = $rootStorage;
     $picoDir = "Pico Projects";
     \OC_Util::setupFS($this->user->getUID());

     if (!$this->rootStorage->nodeExists($picoDir)) {
       $this->rootStorage->newFolder($picoDir);
     }
     if (!$this->rootStorage->get($picoDir)->getType()===\OCP\Files\FileInfo::TYPE_FOLDER) {
       $this->rootStorage->newFolder($picoDir);
     }

       //$this->rootStorage->copy($this->appName.'/themes/',
           \OC::$server->getLogger()->info($this->rootStorage->getUserFolder($this->user->getUID())->getRelativePath($picoDir));
        \OC::$server->getLogger()->info("picodir is" $picoDir);
       //die ($this->rootStorage->getUserFolder($this->user->getUID())->getRelativePath($picoDir));
   }

   public function index() {


     }


     # create project HERE IS A LOT of WORK!

     public function create ($name) {




       #return $projectname;
         return "You just created a new Pico Project! Your Project Name is ". $name;
     }
     ## move pico template to user file root and name it like






    /*$pathPicothemes = "../themes";
     $pathrootStorage
     public function copy($ pathPicothemes, $pathUserStorage);
*/




   }
/*
    #check for updated theme 
   public function update() {

   }

   public function destroy() {

     # destroy project with given name

   }


 }
*/