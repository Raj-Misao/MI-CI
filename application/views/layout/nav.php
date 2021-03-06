 <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url();?>">MKumar</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url().'/home';?>">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="<?php echo site_url().'/about';?>">About Us</a></li>
                        <li><a href="<?php echo site_url().'/contact';?>">Contact Us</a></li>
                        <?php if($this->session->userdata('username')):?>
                            <li><a href="<?php echo site_url().'/logout';?>">Logout</a></li>
                            <li><a href="<?php echo site_url().'/postIndex';?>">POST</a></li>
                            <li><a href="<?php echo site_url().'/createPost';?>">POST INSERT</a></li>
                            <li><a href="<?php echo site_url().'/excel_import';?>">Excel IMPORT</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo site_url().'/login';?>">Sign In</a></li>
                            <li><a href="<?php echo site_url().'/register';?>">Sign UP</a></li>
                        <?php endif; ?>
                     </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <?php if($this->session->flashdata('success')):?>
        <div class="container flash_massage">
            <div class="col-md-8 col-md-offset-2 alert alert-success">
                <h4 class="text-center"> <strong><?php echo $this->session->flashdata('success');?></strong></h4>
            </div>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error')):?>
        <div class="container flash_massage">
            <div class="col-md-8 col-md-offset-2 alert alert-denger">  
                <h4 class="text-center"> <strong><?php echo $this->session->flashdata('success');?></strong></h4>  
            </div>
        </div>
        <?php endif ?>
        <script type="text/javascript"> setTimeout(function(){ $('.flash_massage').slideUp(2000); }, 2000);</script>
    </div>
    