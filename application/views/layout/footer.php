 <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">@copyright <span class="sr-only">(current)</span></a></li>
            </ul>
            </nav>
        </div>
    </div>
    
</body>
<!-- Modal Sign Up -->
       <div role="dialog" tabindex="-1" id="signupform" class="modal fade ">
  <div class="panel modal-dialog panel-info modal-md">
    <div class="panel-heading">
      <div class="panel-title">Sign Up</div>
      <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupform').hide(); $('#loginbox').show()">Sign In</a></div>
    </div>
    <div class="panel-body" >
      <h3 class="text-danger validation-error " style="text-align:center"></h3>
      <form id="signupform" class="form-horizontal" action="<?= base_url('register') ?>" role="form" method="post">
        <div id="signupalert" style="display:none" class="alert alert-danger">
          <p>Error:</p>
          <span></span>
        </div>
        <div class="form-group">
          <label for="firstname" class="col-md-3 control-label">First Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
            <span id="firstname_error" class="error-text">Enter your firstname</span>
          </div>
        </div>
        <div class="form-group">
          <label for="lastname" class="col-md-3 control-label">Last Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
            <span id="lastname_error" class="error-text">Enter your lastname</span>
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-md-3 control-label">Email</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
            <span id="email_error" class="error-text">Enter your email address</span>
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-md-3 control-label">Password</label>
          <div class="col-md-9">
            <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Password">
            <span id="password_error" class="error-text">Enter your password</span>
          </div>
          <!-- <div id="pswd_info">
            <h4>Password must meet the following requirements:</h4>
            <ul>
                <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                <li id="number" class="invalid">At least <strong>one number</strong></li>
                <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
            </ul>
          </div> -->
        </div>
        <div class="form-group">
          <label for="password" class="col-md-3 control-label">Mobile</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
            <span id="mobile_error" class="error-text">Enter your mobile number</span>
          </div>
        </div>
        <div class="form-group">
          <!-- Button -->
          <div class="col-md-offset-3 col-md-9">
            <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
            <span style="margin-left:8px;">or</span>
          </div>
        </div>
        <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
          <div class="col-md-offset-3 col-md-9">
            <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</html>