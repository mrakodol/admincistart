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
			$attributes = array('class' => 'form-signup form-horizontal');   
			echo form_open('admin/create_member', $attributes);
			//form validation
			echo validation_errors();
			echo '<h2 class="form-signin-heading">Create an account</h2>';
			$this->form_builder->text('first_name','First name', set_value('first_name'),'form-control','First name');
			$this->form_builder->text('last_name','Last name', set_value('last_name'),'form-control','Last name');
			$this->form_builder->text('user_name','Username', set_value('user_name'),'form-control','Username');
			$this->form_builder->text('email_address','Email', set_value('email_address'),'form-control','Email');
			$this->form_builder->text('username','Username', '','form-control','Username');
			$this->form_builder->password('password','Password', '','form-control','Password');
			$this->form_builder->password('password2','Password confirm', '','form-control','Password confirm');
			
			echo form_submit('submit', 'Submit', 'class="btn btn-large btn-primary"');
			echo form_close();
			?>
			</div>
	</div>
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
    