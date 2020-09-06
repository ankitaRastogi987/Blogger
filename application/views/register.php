<section class="login">
  <div class="container">
   <div class="banner-content">
   
	  <h1><i class="fa fa-smile"></i> Blogger</h1>
	  <form method="post" class="form-signin" action="register_process">
	   <h3 class="form-signin-heading">Please register</h3>
			<?php if($msg = $this->session->flashdata('msg_print')):?>
	            <div class="<?= $this->session->flashdata('flash_class');?>">
	             <?php echo $msg; ?>
	            </div>
	        <?php endif;?>
	        <?php if($msg = $this->session->flashdata('error_print')):?>
	            <div class="<?= $this->session->flashdata('flash_class');?>">
	             <?php echo $msg; ?>
	            </div>
	        <?php endif;?>
	   <div class="form-group">
	    <input  value="<?= set_value('username');?>" name="username" type="text" class="form-control" placeholder="Username">
	    <span style="color: red;"><?= form_error('username');?></span>
	   </div>
	   <div class="form-group">
	    <input value="<?= set_value('email');?>" name="email" type="text" class="form-control" placeholder="Email">
	    <span style="color: red;"><?= form_error('email');?></span>
	   </div>
	   <div class="form-group">
	    <input value="<?= set_value('phone');?>" name="phone" type="text" class="form-control" placeholder="Phone number">
	    <span style="color: red;"><?= form_error('phone');?></span>
	   </div>
	   <div class="form-group">
	    <input value="<?= set_value('password');?>" type="password" class="form-control" name="password" placeholder="Password">
	    <span style="color: red;"><?= form_error('password');?></span>
	   </div>
	   <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">Sign Up</button>
	   <br/>
	   <a class="btn btn-dark " href="<?= base_url('login');?>" role="button">Already have an account? Click Here.</a>
	   <a class="btn btn-dark " href="<?= base_url('forget_password');?>" role="button">Forgot your password?</a>
	  </form>
	
   </div><!--/. banner-content -->
  </div><!-- /.container -->
</section>