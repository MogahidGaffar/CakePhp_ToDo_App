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
                            $this->Flash->error("Failed to save data");

                        }
        }

        $this->set(compact('student'));        
        $this->set("title","Add student");

        
    }


    
    public function editStudent($id=null){
        $student = $this->Students->get($id);
        if($this->request->is(["post","put"])){

                $studentData = $this->request->getData();
                $fileObject = $this->request->getData("profile_image");
                $filename=$fileObject->getClientFilename();

                        if(!empty($filename)){
                     //upload new img
                    $destination=WWW_ROOT . "img" . DS . $fileObject->getClientFilename(); 
                     $fileObject->moveTo($destination);
                     $studentData["profile_image"]=$fileObject->getClientFilename();
                         }
                        else {
                     //keep old image
                     $studentData["profile_image"]=$student->profile_image;

                        }
                    $student=$this->Students->patchEntity($student,$studentData);
                        if($this->Students->save($student)){
                                $this->Flash->success("Data updated succesfully!");
                                return $this->redirect( ["action"=>"studentsList"]);
                        }
                        else {
                            $this->Flash->error("Failed to update data");
                        }
        }
        $this->set(compact('student'));
        $this->set("title","Edit student");

        
    }

    
    public function deleteStudent($id=null){
        $this->request->allowMethod(["post","delete"]);
        $student = $this->Students->get($id);

        if($this->Students->delete($student)){
                $this->Flash->success("Data Deleted succesfully!");
                return $this->redirect( ["action"=>"studentsList"]);
        }
        else {
            $this->Flash->error("Failed to Delete data");
        }
        $this->set("title","Delete student");

        
    }

}




















?>