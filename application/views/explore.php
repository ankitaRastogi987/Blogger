<section class="nav-sec">
  <div class="d-flex justify-content-between">
   <div class="p-2 nav-icon-lg dark-black">
   <a class="nav-icon" href="<?= base_url('home');?>"><em class="fa fa-home"></em>
	<span>Home</span>
   </a>
   </div>
   <div class="p-2 nav-icon-lg mint-green">
   <a class="nav-icon" href="<?= base_url('explore');?>"><em class="fa fa-crosshairs"></em>
	<span>Explore</span>
   </a>
   </div>
   <div class="p-2 nav-icon-lg dark-black">
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
<section class="newsfeed">
  <div class="container"> 
   <div class="row top-row">

<?php foreach($post_tbl as $post_data): ?>
  <div class="col-lg-3 col-md-4 col-sm-4 col-6">
	 <div class="tr-section">
	  <div class="tr-post">
	   <div class="entry-header">
	    <div class="entry-thumbnail">
	     <a href="#"><img class="img-fluid" src="<?= $post_data->post_img;?>" alt="Image">
          <div class="explore-top">
            <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>  
       </a>
       
	    </div><!-- /entry-thumbnail -->
       </div><!-- /entry-header -->
	   <div class="post-content">
	    <div class="author-post text-center">
	     <a href="#"><img class="img-fluid rounded-circle" title='static picture' src="<?= base_url('profile_picture/ank.png');?>" alt="Image"></a>
	    </div><!-- /author -->
		<div class="card-content">
		 <span>Alex Grantte</span>
	     <!-- <span>@alex</span> -->
	     <h4><?= $post_data->title;?></h4>
       
        <p><?php 
            if(strlen($post_data->detail)<=50)
            {
              echo $post_data->detail;
            }
            else
            {
              echo substr($post_data->detail, 0, strpos($post_data->detail, ' ', 50));
            }
          ?>    
        </p> 
		</div>
		 <button type="button" class="kafe-btn kafe-btn-mint-small full-width" data-toggle="modal" data-target="#readPost<?php echo $post_data->post_id;?>"> Read More</button>
		 </a>		  
	   </div><!-- /.post-content -->									
	  </div><!-- /.tr-post -->	
     </div><!-- /.tr-post -->	
	</div><!-- /col-sm-3 -->
  <!-- Modal -->
<div class="modal fade" style="overflow: hidden;" id="readPost<?php echo $post_data->post_id;?>" tabindex="-1" role="dialog" aria-labelledby="readPostTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="readPostTitle">Read Post</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body row" style="margin-left: 10px;margin-right: 10px;">
          <div class="text-center">
            <h2><?php echo $post_data->title;?></h2>
          </div>
          <div class="entry-thumbnail col-md-6 col-sm-12">
            <img class="img-fluid img-thumbnail" src="<?= $post_data->post_img;?>" alt="Image">
          </div>
          <div class="entry-thumbnail col-md-6 col-sm-12 mt-5" style="margin-top: 10px;">
            <?php echo $post_data->detail;?>
          </div>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="kafe-btn kafe-btn-mint-small" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>   
    
   </div>
   </div>
</section>

