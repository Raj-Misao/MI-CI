<div class="container">
<?php
    foreach($Post as $eachPost):
?>
<h2><?php echo $eachPost['title'];?></h2>
<p><?php echo $eachPost['body'];?></p>
<p><strong>Created At</strong><span class="small"><?php echo $eachPost['created_at'];?></span></p>
<p><strong>Updated At</strong><span class="small"><?php echo $eachPost['updated_at'];?></span></p> 
    <p><a href="<?php echo site_url('post/edit/'.$eachPost['id']);?>" class="btn btn-primary">Edit</a>|
        <a href="<?php echo site_url('post/delete/'.$eachPost['id']);?>" class="btn btn-danger">Delete</a>
    </p>
     <?php endforeach;?>
</div>
   
</br>
