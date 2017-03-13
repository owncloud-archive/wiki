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

 use OCP\IRequest;
 use OCP\AppFramework\Http\TemplateResponse;
 use OCP\AppFramework\Http\DataResponse;
 use OCP\AppFramework\Controller;

 class ProjectController extends Controller {
   private $user;

   private $userStorage;

   private $picoProjectRoot;


   public function __construct($AppName, IRequest $request, $user, $userStorage){
     parent::__construct($AppName, $request);
     $this->user = $user;
     $this->userStorage = $userStorage;
     $picoDir = "Pico Projects";
     if (!$this->userStorage->nodeExists($picoDir)) {
       $this->userStorage->newFolder($picoDir);
     }
     if (!$this->userStorage->get($picoDir)->getType()===\OCP\Files\FileInfo::TYPE_FOLDER) {
       $this->userStorage->newFolder($picoDir);
     }
     $this->picoProjectRoot = $this->userStorage->get($picoDir);
   }

   public function index() {
     $folder = $this->picoProjectRoot->getDirectoryListing();
     # return array of all projects
     return array_map(function($node){
       return $node->getName();
     }, $folder);
   }

   public function create() {
     # create project

     # move pico template to user file root and name it like project
     #return project name
     return "Hallo";
   }

   public function update() {

   }

   public function destroy() {

     # destroy project with given name

   }


 }
