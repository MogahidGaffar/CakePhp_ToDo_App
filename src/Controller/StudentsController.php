<?php 
namespace App\Controller;
use App\controller\AppController;


class StudentsController extends AppController{


        public function initialize() : void{

                parent::initialize();
                 $this->loadModel("Students");
                $this->viewBuilder()->setLayout("Student");
        }

    public function studentsList(){
         $students = $this->Students->find()->toList();
         $this->set(compact('students'));
                $this->set("title","Students List");

    }

    public function addStudent(){
        $this->set("title","Add student");

        
    }


    
    public function editStudent($id=null){
        $this->set("title","Edit student");

        
    }

    
    public function deleteStudent($id=null){
        $this->set("title","Delete student");

        
    }

}




















?>