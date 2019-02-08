<?php include_once('header.php');?>
<div class="container">
<?php echo form_open('Welcome/save',['class'=>'form-horizontal']);?>

  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <div class="col-md-5">
         <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control']) ?>
      </div>
      <div class="col-md-5">
         <?php echo form_error('title','<div class="text-danger">','</div>')?>
      </div>
    </div>
 
    
    <div class="form-group">
      <label for="exampleTextarea">Description</label>
      <div class="col-md-5">
         <?php echo form_textarea(['name'=>'description','placeholder'=>'Description','class'=>'form-control']) ?>
      </div>
      <div class="col-md-5">
      <?php echo form_error('description','<div class="text-danger">','</div>')?>
      </div>
    </div>
    <div class="form-group">
      <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-default']);?>
      <?php echo anchor('welcome','Back',['class'=>'btn btn-default']);?>

    </div>
  </fieldset>
<?php echo form_close();?>
</div>

</body>
</html>