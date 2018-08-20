<div class="container">
    <div class="col-md-6 col-md-offset-3" style="background-color:orange;"><h2 class="text-center">CREATE POST</h1></div>
        <div class="col-md-6 col-md-offset-3" style="background-color:orange;">
            <?php
               echo form_open('createPost','post','class="form-horizontal"');
               
                ?>
                    <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">Post Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="title" name="title" <?php set_value('title');?>  placeholder="Post Title">
                        <label for="title" class="error-title" class="col-md-3 control-label"><?php echo form_error('title');?></label>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">Post Body</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="body" name="body" <?php set_value('body');?>   placeholder="Post Body">
                        <label for="title" class="error-body" class="col-md-3 control-label"><?php echo form_error('body');?></label>
                    </div>
                    </div>
                    <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Create</button>
                    </div>
                    </div>
                    </br>
                <?php
                echo form_close();
                
            ?>
            
        </div>
    </div>
</div>
</br>
