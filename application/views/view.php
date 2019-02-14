<?php include_once('header.php');?>
  
<div class="container">
<h3>View Post</h3>
    <h4><?php echo $post->title;?></h4>
    <h4><?php echo $post->description;?></h4>
    <h4><?php echo $post->date_created;?></h4>
    <?php echo anchor('welcome','Back',['class'=>'btn btn-default']);?>

</div>
</body>
</html>