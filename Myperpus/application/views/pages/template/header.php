<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/main.css'); ?>">
    <title>Perpustakaan - <?php echo $name_page; ?></title>
  </head>
  <body>
<div class="navbar-wrapper">
	  <nav class="navbar navbar-static-top navbar-custom">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand custom-font" href="#"><span class="glyphicon glyphicon-list"></span> Coba Cobaaan</a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	      	<?php foreach($navigasi as $nav) : ?>
	      		<li id="<?php echo $nav->id_css; ?>" class="<?php echo $nav->class; ?>"><a href="#" id="<?php echo $nav->id_css; ?>"><span class="<?php echo $nav->icon; ?>"></span> <?php echo $nav->action_name; ?></a></li>
	      	<?php endforeach; ?>
	      	<?php foreach($nav_parent as $np) : ?>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="<?php echo $np->icon; ?>"></span> <?php echo $np->action_name; ?><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#"><span class="glyphicon glyphicon-open-file"></span> Laporan Peminjaman</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-save-file"></span> Laporan Pengembalian</a></li>
		          </ul>
		        </li>
	    	<?php endforeach; ?>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Profile<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
</div>