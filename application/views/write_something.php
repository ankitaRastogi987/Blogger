<section class="nav-sec">
  <div class="d-flex justify-content-between">
   <div class="p-2 nav-icon-lg dark-black">
   <a class="nav-icon" href="<?= base_url('home');?>"><em class="fa fa-home"></em>
	<span>Home</span>
   </a>
   </div>
   <div class="p-2 nav-icon-lg clean-black">
   <a class="nav-icon" href="<?= base_url('explore');?>"><em class="fa fa-crosshairs"></em>
	<span>Explore</span>
   </a>
   </div>
   <div class="p-2 nav-icon-lg mint-green">
   <a class="nav-icon" href="<?= base_url('write');?>"><em class="fab fa-instagram"></em>
	<span>Upload</span>
   </a>
   </div>
   <div class="p-2 nav-icon-lg clean-black">
   <a class="nav-icon" href="<?= base_url('stories');?>"><em class="fa fa-align-left"></em>
	<span>Stories</span>
   </a>
   </div>
   <div class="p-2 nav-icon-lg dark-black">
   <a class="nav-icon" href="<?= base_url('profile');?>"><em class="fa fa-user"></em>
	<span>Profile</span>
   </a>
   </div>
  </div>
</section>	




	<section class="upload">
	  	<div class="container">
	 	 <div class="col-lg-12" style="background-color: white;">
			<div class="create-quiz-section" style="display: block;">
				<h2 style="padding-top: 32px;padding-bottom: 17px;">Create New Post</h2>
				<?php if($msg = $this->session->flashdata('msg_post')):?>
		            <div class="<?= $this->session->flashdata('flash_class');?>">
		             <?php echo $msg; ?>
		            </div>
		        <?php endif;?>
		        <?php if($msg = $this->session->flashdata('error_post')):?>
		            <div class="<?= $this->session->flashdata('flash_class');?>">
		             <?php echo $msg; ?>
		            </div>
		        <?php endif;?>
		        <?php if(isset($upload_error)):?>
		        	<div class="alert-danger">
		        		<?php echo$upload_error; ?>
		        	</div>
		        <?php endif;?>
				<form action="<?= base_url('upload_post');?>" class="forms-sample quiz_form" name="quiz_form" method="POST" enctype="multipart/form-data">
					<div class="form-group">

						<label for="exampleTextarea1" class="card-title">Post Title<span title="mendetory field" style="color: red;">*</span></label>
						<input value="<?= set_value('title');?>" name="title" type="text" class=" col-lg-6 form-control" id="exampleTextarea1" rows="4" placeholder="Write here..." required=""><br><br>
						<span style="color: red;"><?= form_error('title');?></span>
						<label for="exampleTextarea1" class="card-title">Post Description<span title="mendetory field" style="color: red;">*</span></label>
						<textarea value="<?= set_value('detail');?>" name="detail" type="text" class=" col-lg-6 form-control detail" id="exampleTextarea1" rows="4" placeholder="Write here..." required=""></textarea>
						<span style="color: red;"><?= form_error('detail');?></span>
						<br>
						<br>
						
					</div>
					<div class="row">
						<div class="col-md-6">
	                     	<label for="exampleTextarea1" class="card-title">Post belong to which Category<span title="mendetory field" style="color: red;">*</span></label>
	                     	<select value="<?= set_value('category[]');?>" class="form-control" name="category[]" id="exampleTextarea1" rows="4" required="" multiple>				
								<option value="Technology">Technology</option>
								<option value="Food">Food</option>
								<option value="Social">Social</option>
								<option value="Business">Business</option>
								<option value="Entertainment">Entertainment</option>
								<option value="Art">Art</option>
								<option value="Music">Music</option>
								<option value="Travell">Travell</option>
							</select>
							<span style="color: red;"><?= form_error('category');?></span>
						 </div>	  
						 <div class="col-md-6">
						 	<label for="exampleTextarea1" class="card-title">Post image<span title="mendetory field" style="color: red;">*</span></label>
							<input value="<?= set_value('post_img');?>" name="post_img" type="file" class=" col-lg-6 form-control" id="exampleTextarea1" rows="4" placeholder="Select here..." required="">
							<span style="color: red;"><?= form_error('post_img');?></span>
							<br><br>
						 </div>              	  
                    </div>
                   <input type="submit" value="Post" id="save_post" class="btn btn-success" style="color: white;margin-bottom: 10px;">
                   <a id="cancle_btn" name="add_question" class="btn btn-success" style="color: white;margin-bottom: 10px;">Cancle</a>
			    </form>
			</div> 
		 </div>
	 	</div><!--/ container -->
	 </section><!--/ newsfeed -->
     