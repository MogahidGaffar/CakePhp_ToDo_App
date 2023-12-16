<?php 
namespace App\Controller;
use App\controller\AppController;


class StudentController extends AppController{


        public function initialize(){

                parent::initialize();
                $this->loadModel("Students");
        }



}




















?>