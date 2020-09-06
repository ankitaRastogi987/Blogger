<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blogger</title>
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />		
		<link rel="icon" href="<?= base_url('assets/img/logo.html');?>">
		<link rel="apple-touch-icon" href="<?= base_url('img/favicons/apple-touch-icon.html');?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('img/favicons/apple-touch-icon-72x72.html');?>">
		<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('img/favicons/apple-touch-icon-114x114.html');?>">
        <link type="text/css" href="<?= base_url('assets/css/demos/photo.css');?>" rel="stylesheet" />
		<script src="<?= base_url('assets/js/modernizr-custom.html');?>"></script>
  </head>
  <body> 
     <header class="tr-header">
      <nav class="navbar navbar-default">
       <div class="container-fluid">
	    <div class="navbar-header">
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		 </button>
		 <a class="navbar-brand" href="index.html"><i class="fab fa-instagram"></i> Blogger</a>
		</div><!-- /.navbar-header -->
		<div class="navbar-left">
		 <div class="collapse navbar-collapse" id="navbar-collapse">
		  <ul class="nav navbar-nav">
		  </ul>
		 </div>
		</div><!-- /.navbar-left -->
		<div class="navbar-right">                          
		 <ul class="nav navbar-nav">
		   <li>
		   	<div class="search-dashboard">
               <form action="post-search" method="POST">
                    <input placeholder="Search here" name="post_search" type="text">
                    <button type="submit"><i class="fa fa-search"></i></button>
               </form>
          	</div>							
		   </li>	  
		 <li class="dropdown mega-avatar">
		  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		   <span class="avatar w-32"><img src="<?= base_url('assets/img/users/2.jpg');?>" class="img-resonsive img-circle" width="40" height="40" alt="..."></span>
		   <!-- hidden-xs hides the username on small devices so only the image appears. -->
		   <span class="hidden-xs">
			<b><?= $this->session->userdata['username'];?></b>
		   </span>
		  </a>
		 </li><!-- /navbar-item -->	
		 <li>

		   	<div class="navbar-right">
               <a class="navbar-brand" href="<?= base_url('logout');?>"><i class="fab fa-instagram"></i> Logout</a> 
          	</div>							
		  </li>
		 </ul><!-- /.sign-in -->   
		</div><!-- /.nav-right -->
       </div><!-- /.container -->
      </nav><!-- /.navbar -->
     </header><!-- Page Header --> 