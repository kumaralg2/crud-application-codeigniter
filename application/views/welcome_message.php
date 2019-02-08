<?php include_once('header.php');?>
  
<div class="container">
<h3>View All Posts</h3>
<?php echo anchor('welcome/create', 'Add Post', ['class'=>'btn btn-primary']);?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Creation Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($posts)):?>
      <?php foreach($posts as $post):?>
        <tr class="table-active">
            <td scope="row"><?php echo $post->title; ?></td>
            <td scope="row"><?php echo $post->description; ?></td>
            <td scope="row"><?php echo $post->date_created; ?></td>
            <td scope="row">
            <?php echo anchor('welcome/view', 'View', ['class'=>'label label-primary']);?>
            <?php echo anchor('welcome/update', 'Update', ['class'=>'label label-success']);?>
            <?php echo anchor('welcome/delete', 'Delete', ['class'=>'label label-delete']);?>
            </td>
        </tr>
    <?php endforeach;?>
  <?php else: ?>
      <tr>
      <td> No records found</td>
      </tr>
  <?php endif;?>
  </tbody>
</table> 
</div>
</body>
</html>