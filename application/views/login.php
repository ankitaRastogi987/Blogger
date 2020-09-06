
<section class="login">
  <div class="container">
   <div class="banner-content">
   
	  <h1><i class="fa fa-smile"></i> Blogger</h1>
	  	
	  <form method="post" class="form-signin" action="login_check">
	   <h3 class="form-signin-heading">Please sign in</h3>
	   <?php if($msg = $this->session->flashdata('login_error')):?>
            <div class="<?= $this->session->flashdata('flash_class');?>">
             <?php echo $msg; ?>
            </div>
        <?php endif;?>
	   <div class="form-group">
	    <input name="email" type="text" id="email" value="<?php echo set_value('email');if(isset($_COOKIE["username"])){ echo $_COOKIE["username"]; }?>" class="form-control" placeholder="Email"><span style="color: red;"><?= form_error('email');?></span>
	   </div>
	   <div class="form-group">
	    <input type="password" id="password" value="<?php echo set_value('password');if(isset($_COOKIE["password"])){ echo $_COOKIE["password"]; }?>" class="form-control" name="password" placeholder="Password"><span style="color: red;"><?= form_error('password');?></span>
	   </div>
	   <div class="form-group">
	   	<input type="checkbox" <?php if(isset($_COOKIE["username"])) echo "checked"; ?> name="rememberMe">
	   	<label>Remember Me</label>
	   </div>
	   <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm" style="margin-bottom: 13px;">Sign in</button>
	   <br/>
	   <a href="http://localhost/techdost/blog_CI/login" class="kafe-btn kafe-btn-mint btn-block" style="background-color: blue;">Login With FB </a><br>
	   <a class="btn btn-dark " href="<?= base_url('register');?>" role="button">Don't have an account yet? Register Here.</a>
	   <a class="btn btn-dark " href="<?= base_url('forget_password');?>" role="button">Forgot your password?</a>
	  </form>
	
   </div><!--/. banner-content -->
  </div><!-- /.container -->
 </section> 
