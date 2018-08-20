
<div class="container">
<br>
    <div class="row" >
        <div class="col-md-6 col-md-offset-3" style="background-color:orange;"><h2 class="text-center">SIGN IN</h1></div>
        <div class="col-md-6 col-md-offset-3" style="background-color:orange;">
            <?php echo form_open('login','post','class="form-horizontal"');?>   
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    <span id="email_error" class="error-email"><?php echo form_error('email');?></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <span id="password_error" class="error-password"><?php echo form_error('password');?></span>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<br>

   