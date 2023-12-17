<?php if(!empty($title)){

$this->assign("title",$title);
}

?>
<div class="panel panel-primary">

    <div class="panel-heading">Students list
    <a href="<?= $this->Url->build("/add-student/",["fullBase"=>true]) ?>" 
    class="btn btn-success pull-right" style="margin-top:-7px">
    Add
       </a>
    </div>
    <div class="panel-body">

    <table class="table table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>phone_no</th>
        <th>Gender</th>
        <th>profile image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        if(count($students) > 0) {
            foreach($students as $index=>$student){
       ?>
      <tr>
        <td><?=  $index+=1;  ?></td>
        <td><?=  $student->name  ?></td>
        <td><?=  $student->email  ?></td>
        <td><?=  $student->phone_no  ?></td>
        <td><?=  $student->gender  ?></td>
        <td><?= !empty($student->profile_image) ? $this->Html->image($student->profile_image
        ,[
            "style"=>"width:70px;height:70px;paddin-right:60px;",
        ]) : "NA" ?></td>
        <td>
            <a href="<?= $this->Url->build('/edit-student/'.$student->id,["fullBase"=>true]) ?>" class="btn btn-warning">Edit</a>
            <a href="<?= $this->Url->build('/delete-student/'.$student->id,["fullBase"=>true]) ?>" class="btn btn-danger">Delete</a>
 
      </tr>
   <?php }} ?>
    </tbody>
  </table>



  </div>
  </div>
</div>
