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
   <div class="p-2 nav-icon-lg mint-green">
   <a class="nav-icon" href="<?= base_url('profile');?>"><em class="fa fa-user"></em>
	<span>Profile</span>
   </a>
   </div>
  </div>
</section>	

	 <section class="profile">
	  <div class="container-fluid">
	   <div class="row">
	   
	   <div class="col-lg-3">
		 <div class="profilebox hidden-xs hidden-sm" 
		   style="background: linear-gradient( rgba(34,34,34,0.45), rgba(34,34,34,0.45)), url('assets/img/posts/4.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
		 <div class="profilebox hidden-xs hidden-sm" 
		   style="background: linear-gradient( rgba(34,34,34,0.45), rgba(34,34,34,0.45)), url('assets/img/posts/1.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
	   </div>
	   <div class="col-lg-6">
		 <div class="profilebox-large hidden-xs hidden-sm" 
		   style="background: linear-gradient( rgba(34,34,34,0.45), rgba(34,34,34,0.45)), url('assets/img/posts/9.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
	   </div>
	   <div class="col-lg-3">
		 <div class="profilebox hidden-xs hidden-sm" 
		   style="background: linear-gradient( rgba(34,34,34,0.45), rgba(34,34,34,0.45)), url('assets/img/posts/11.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
		 <div class="profilebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.6), rgba(34,34,34,0.6)), url('assets/img/posts/12.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
	   </div>
		
       </div><!--/ row-->	
	  </div><!--/ container -->
	 </section><!--/ profile -->
  
	 <!-- ==============================================
	 User Profile Section
	 =============================================== --> 
	 <section class="user-profile">
	  <div class="container-fluid">
	   <div class="row">
	   
	    <div class="col-lg-12">
		   <div class="post-content">
		    <div class="author-post text-center">
		     <img class="img-fluid img-circle" src="<?= $user_ki_detail->profile_picture;?>" alt="Image">
		    </div><!-- /author -->
		   </div><!-- /.post-content -->		
		</div><!-- /col-sm-12 -->
		
       </div><!--/ row-->	
	  </div><!--/ container -->
	 </section><!--/ profile -->
  
	 <!-- ==============================================
	 User Profile Section
	 =============================================== --> 
	 <section class="details">
	  <div class="container">
	   <div class="row">
	    <div class="col-lg-12">
		 
          <div class="details-box row">
           
		   <div class="col-lg-9">   		 
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
           
           <div class="content-box">
		     <h4><?= ucwords($user_ki_detail->username);?> <i class="fa fa-check" title="Change Username Here" class="kafe-btn kafe-btn-mint" data-toggle="modal" data-toggle="modal" data-target="#changeUsername" data-whatever="@getbootstrap"></i></h4>
		    <!-- <button >Edit Username<em class="fa fa-user"></em></button> -->
		    <!-- Button trigger modal -->
				<div class="modal fade" id="changeUsername" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Username</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="update_username" method="POST">
				          <div class="form-group">
				            <label for="message-text" class="col-form-label">Update Username</label>
				            <input type="text" name="update_username" class="form-control" required>
				          </div>
				        
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="kafe-btn kafe-btn-mint">Update</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
             <p><?= $bio->bio;?> <span class="hashtag">#Blogger</span></p>
			 <!-- <small><span>www.themashabrand.com</span></small> -->
           </div><!--/ media -->
		   </div> 
		   <div class="col-lg-3">
           <div class="follow-box">
		    <button class="kafe-btn kafe-btn-mint" data-toggle="modal" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><!-- <i class="fa fa-check"></i>  -->Edit Bio<em class="fa fa-user"></em></button>
		    <!-- Button trigger modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Bio</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="update_bio" method="POST">
				          <div class="form-group">
				            <label for="message-text" class="col-form-label">Update About You</label>
				            <textarea name="update_bio" class="form-control" rows="10" id="message-text" required></textarea>
				          </div>
				        
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="kafe-btn kafe-btn-mint">Update</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
           </div><!--/ dropdown -->
		   </div>
          </div><!--/ details-box -->
		  
		</div>
	   </div>
	  </div><!--/ container -->
	 </section><!--/ profile -->

	 <!-- ==============================================
	 Home Menu Section
	 =============================================== -->	
     <section class="home-menu">
      <div class="container">
       <div class="row">

        <div class="menu-category">
         <ul class="menu">
          <li class="current-menu-item"><a href="photo_profile.html">Posts <span style="padding: 8px;"><?= $count_post;?></span></a></li>
          <!-- <li><a href="photo_followers.html">Followers <span>1.3M</span></a></li>
          <li><a href="photo_followers.html">Following <span>1200</span></a></li> -->
         </ul>
		</div>
		
	   </div><!--/row -->
      </div><!--/container -->
     </section><!--/home-menu -->	

	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="newsfeed">

	  <div class="container">
	  I will show saved posts Here.
	   <div class="row">
	   
	    <div class="col-lg-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/14.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>14,100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
	   
	    <div class="col-lg-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/18.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>100,100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>			  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
	   
	    <div class="col-lg-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/15.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
		
	   </div><!--/ row -->
	   
	   <div class="row">
	   
	    <div class="col-lg-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/25.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>324</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
	   
	    <div class="col-lg-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/36.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>1023</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>			  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
	   
	    <div class="col-lg-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/26.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>40</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
		
	   </div><!--/ row -->
	   
	  </div><!--/ container -->
	 </section><!--/ newsfeed -->
  
	 <!-- ==============================================
	 Modal Section
	 =============================================== -->
     <div id="myModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-body">
		
         <div class="row">
		 
          <div class="col-md-8 modal-image">
           <img class="img-responsive" src="assets/img/posts/15.jpg" alt="Image"/>
          </div><!--/ col-md-8 -->
          <div class="col-md-4 modal-meta">
           <div class="modal-meta-top">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			 <span aria-hidden="true">×</span><span class="sr-only">Close</span>
			</button><!--/ button -->
            <div class="img-poster clearfix">
             <a href="#"><img class="img-responsive img-circle" src="assets/img/users/18.jpg" alt="Image"/></a>
             <strong><a href="#">Benjamin</a></strong>
             <span>12 minutes ago</span><br/>
		     <a href="#" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Following</a>
            </div><!--/ img-poster -->
			  
            <ul class="img-comment-list">
             <li>
              <div class="comment-img">
               <img src="assets/img/users/17.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Anthony McCartney</a></strong>
               <p>Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/15.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Vanessa Wells</a></strong>
               <p>Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span>on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/14.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Sean Coleman</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/13.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Anna Morgan</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Allison Fowler</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
            </ul><!--/ comment-list -->
			  
            <div class="modal-meta-bottom">
			 <ul>
			  <li><a class="modal-like" href="#"><i class="fa fa-heart"></i></a><span class="modal-one"> 786,286</span> | 
			      <a class="modal-comment" href="#"><i class="fa fa-comments"></i></a><span> 786,286</span> </li>
			  <li>
			   <span class="thumb-xs">
				<img class="img-responsive img-circle" src="assets/img/users/13.jpg" alt="...">
			   </span>
			   <div class="comment-body">
				 <input class="form-control input-sm" type="text" placeholder="Write your comment...">
			   </div><!--/ comment-body -->	
              </li>				
             </ul>				
            </div><!--/ modal-meta-bottom -->
			  
           </div><!--/ modal-meta-top -->
          </div><!--/ col-md-4 -->
		  
         </div><!--/ row -->
        </div><!--/ modal-body -->
		
       </div><!--/ modal-content -->
      </div><!--/ modal-dialog -->
     </div><!--/ modal -->	 
