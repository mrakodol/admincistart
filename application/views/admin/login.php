<!DOCTYPE html> 
<html lang="en-US">
  <head>
    <title>CodeIgniter Admin Sample Project</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  	<link href="<?php echo base_url(); ?>assets/css/redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
</head>
  <body>
   <div class="container-fluid">
		  <div class="row">
      <?php 
      $attributes = array('class' => 'form-signin');
      echo form_open('admin/login/validate_credentials', $attributes);
      echo '<h2 class="form-signin-heading">Login</h2>';
     $this->form_builder->text('user_name','Username', set_value('user_name'),'form-control','Username');
	 $this->form_builder->password('password','Password', set_value('password'),'form-control','Password');
      if(isset($message_error) && $message_error){
          echo '<div class="alert alert-danger">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
          echo '</div>';             
      }
      echo "<br />";
      echo anchor('admin/signup', 'Signup!');
      echo "<br />";
      echo "<br />";
      echo form_submit('submit', 'Login', 'class="btn btn-large btn-primary"');
      echo form_close();
      ?>      
   	 </div>
	</div>
	<!--container-->
		<!--[if !IE]>-->
		<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js"></script>
		<!--<![endif]-->
		<!--[if IE]>
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
		<![endif]-->
		<!--[if !IE]>-->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js'>" + "<" + "/script>");
		</script>
		<!--<![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.4.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/admin.min.js"></script>
			
  </body>
</html>    
    