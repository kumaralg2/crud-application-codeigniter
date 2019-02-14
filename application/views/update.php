<?php include_once('header.php');?>
<div class="container">
<?php echo form_open("Welcome/change/{$post->id}",['class'=>'form-horizontal']);?>

  <fieldset>
  <Legend>Update Post</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <div class="col-md-5">
         <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control','value'=>set_value('title',$post->title)]);?>
      </div>
      <div class="col-md-5">
         <?php echo form_error('title','<div class="text-danger">','</div>')?>
      </div>
    </div>
 
    
    <div class="form-group">
      <label for="exampleTextarea">Description</label>
      <div class="col-md-5">
         <?php echo form_textarea(['name'=>'description','placeholder'=>'Description','class'=>'form-control','value'=>set_value('description',$post->description)]) ?>
      </div>
      <div class="col-md-5">
      <?php echo form_error('description','<div class="text-danger">','</div>')?>
      </div>
    </div>
    <div class="form-group">
      <?php echo form_submit(['name'=>'update','value'=>'Update','class'=>'btn btn-default']);?>
      <?php echo anchor('welcome','Back',['class'=>'btn btn-default']);?>

    </div>
  </fieldset>
<?php echo form_close();?>
</div>

</body>
</html>