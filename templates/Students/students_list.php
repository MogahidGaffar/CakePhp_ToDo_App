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
            <form  method="post" id="frm-delete-student-<?=$student->id ?>" action="<?= $this->Url->build('/delete-student/'.$student->id,["fullBase"=>true]) ?>">
           <input type="hidden" name="id" value="<?=$student->id ?>"> </input>
            <a href="<?= $this->Url->build('/edit-student/'.$student->id,["fullBase"=>true]) ?>" class="btn btn-warning">Edit</a>
            <a href="javascript:void(0)" onclick="if(confirm('Are you sure you want to delete ?')){$('#frm-delete-student-<?=$student->id ?>').submit()}" class="btn btn-danger">Delete</a>
        </form>
      </tr>
   <?php }} ?>
    </tbody>
  </table>



  </div>
  </div>
</div>
