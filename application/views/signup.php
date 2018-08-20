
<div class="container">
<br>
    <div class="row" >
        <div class="col-md-6 col-md-offset-3" style="background-color:orange;"><h2 class="text-center">SIGN UP</h1></div>
        <div class="col-md-6 col-md-offset-3" style="background-color:orange;">
            <?php echo form_open('register','post','class="form-horizontal"');?>    
                <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span>
                </div>
                <div class="form-group">
                <label for="firstname" class="col-md-3 control-label"> Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="firstname" name="username" placeholder="Name">
                    <span id="username_error" class="error-username"><?php echo form_error('username');?></span>
                </div>
                </div>
                <div class="form-group">
               <label for="email" class="col-md-3 control-label">Email</label> 
                <div class="col-md-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                    <span id="email_error" class="error-email"><?php echo form_error('email');?></span>
                </div>
                </div>
                <div class="form-group">
                <label for="password" class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="passwd" name="password" placeholder="Password">
                    <span id="password_error" class="error-password"><?php echo form_error('password');?></span>
                </div>
                </div>
                
                <div class="form-group">
                <!-- Button -->
                <div class="col-md-offset-3 col-md-9">
                    <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                </div>
                </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<br>

   