<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

<?php if(!empty($title)){

$this->assign("title",$title);
}

?>
<div class="panel panel-primary">
    <div class="panel-heading">Add Student
    <a href="<?= $this->Url->build("/students",["fullBase"=>true]) ?>" 
    class="btn btn-success pull-right" style="margin-top:-7px">
    Students List
       </a>
    </div>
    <div class="panel-body">
<?=
$this->Form->create($student,[
    "class"=>"form-horizontal",
    "id"=>"frm-add-student",
    "type"=>"file"
]);
?>
    <div class="form-group">
    <label class="control-label col-sm-2" >Name :</label>
    <div class="col-sm-10">
      <input required type="text" value="<?= $student->name ?>" name="name" class="form-control"  placeholder="Enter name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Email:</label>
    <div class="col-sm-10">
      <input required type="email" value="<?= $student->email ?>" name="email" class="form-control"  placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">phone no:</label>
    <div class="col-sm-10">
      <input required type="number" value="<?= $student->phone_no ?>"  name="phone_no" class="form-control"  placeholder="Enter phone">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Gender:</label>
    <div class="col-sm-10">
    <select required name="Gender" class="form-control">
<option <?= $student->gender == "male" ? "selected" : "" ?> value="male" > Male</option>
<option <?= $student->gender == "Female" ? "selected" : "" ?> value="Female" > Female</option>
</select>
</div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">profile_image:</label>
    <div class="col-sm-10">
    <?= 
        $this->Html->image($student->profile_image,["style"=>"width:100px;height:100px"])
        ?>
      <input  type="file" name="profile_image" class="form-control" >
      
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>

  <?= $this->Form->end(); ?>

    </div>
  </div>
</div>
<?php 

$this->Html->scriptStart(["block"=>true]);
echo '$("#frm-add-student").validate()';
$this->Html->scriptEnd();

?>