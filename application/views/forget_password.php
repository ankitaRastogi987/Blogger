<section class="login">
  <div class="container">
   <div class="banner-content">
   <?php
   	$status=$this->session->flashdata('status');
    if(isset($status)):?>
	  <h1><i class="fa fa-smile"></i> Blogger</h1>
	  <form method="post" class="form-signin" action="set_forget_password">
	   <h3 class="form-signin-heading">Forget Password??</h3>
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
	    <input  value="<?= set_value('otp');?>" name="otp" type="text" class="form-control" placeholder="Enter OTP">
	    <span style="color: red;"><?= form_error('otp');?></span>
	   </div>
	   <div class="form-group">
	    <input value="<?= set_value('new_password');?>" name="new_password" type="text" class="form-control" placeholder="Enter New Password">
	    <span style="color: red;"><?= form_error('new_password');?></span>
	   </div>
	   <div class="form-group">
	    <input value="<?= set_value('confirm_new_password');?>" name="confirm_new_password" type="text" class="form-control" placeholder="Confirm New Password">
	    <span style="color: red;"><?= form_error('confirm_new_password');?></span>
	   </div>
	   <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">Change Password</button>
	   <br/>
	   <a class="btn btn-dark " href="<?= base_url('login');?>" role="button">Already have an account? Click Here.</a>
	   <a class="btn btn-dark " href="" role="button">Forgot your password?</a>
	  </form>
	<?php else:?>
		  <h1><i class="fa fa-smile"></i> Blogger</h1>
	  <form method="post" class="form-signin" action="send_otp">
	   <h3 class="form-signin-heading">Forget Password??</h3><br>
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
	    <input  value="<?= set_value('email');?>" name="email" type="email" class="form-control" placeholder="Enter Register Email">
	    <span style="color: red;"><?= form_error('email');?></span>
	   </div>
	   <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">Send OTP</button>
	   <br/>
	   <a class="btn btn-dark " href="<?= base_url('login');?>" role="button">Already have an account? Click Here.</a>
	   <a class="btn btn-dark " href="" role="button">Forgot your password?</a>
	  </form>
	<?php endif;?>
   </div><!--/. banner-content -->
  </div><!-- /.container -->
</section>