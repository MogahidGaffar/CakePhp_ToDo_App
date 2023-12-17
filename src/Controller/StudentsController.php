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
        $student = $this->Students->newEmptyEntity();

                if($this->request->is("post")){
                $fileObject = $this->request->getData("profile_image");
                $destination=WWW_ROOT . "img" . DS . $fileObject->getClientFilename(); 
                $fileObject->moveTo($destination);
                $studentData = $this->request->getData();
                $studentData["profile_image"]=$fileObject->getClientFilename();
                $student=$this->Students->patchEntity($student,$studentData);
                        if($this->Students->save($student)){
                                $this->Flash->success("Data saved succesfully!");
                                return $this->redirect( ["action"=>"studentsList"]);
                        }
                        else {
                            $this->Flash->errpr("Failed to save data");

                        }
        }

        $this->set(compact('student'));        
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