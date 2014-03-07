<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>CodeIgniter Admin Sample Project</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
    <nav role="navigation" class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if($this->uri->segment(2) == 'products'){echo 'class="active"';}?>>
		          <a href="<?php echo base_url(); ?>admin/products">Products</a>
		        </li>
		      <li <?php if($this->uri->segment(2) == 'manufacturers'){echo 'class="active"';}?>>
		          <a href="<?php echo base_url(); ?>admin/manufacturers">Manufacturers</a>
		        </li>
		       <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
		          <ul class="dropdown-menu">
		            <li>
		              <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
		            </li>
		          </ul>
		        </li>
          	</ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
