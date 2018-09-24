<?php include('header.php'); ?>

<div class="container" style="margin-top: 20px;">
	<h1>User Registration Form</h1>
	<?php echo form_open('admin/sendemail'); ?>
	<form action="action_page.php">
<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			<label for="Username">Username:</label>
			<?php echo form_input(['class'=>'form-control', 'name'=>'txt_username','placeholder'=>'Enter Username', 'value'=>set_value('txt_username')]); ?>
		</div>
		<?php echo form_error('txt_username'); ?>
	</div>
	<div class="col-lg-6" style="margin-top: 40px;">
		
	</div>
</div>

<div class="row">
			<div class="col-lg-6">
		<div class="form-group">
			<label for="pwd">Password:</label>
			<?php echo form_password(['class'=>'form-control', 'name'=>'txt_password','placeholder'=>'Enter Password','value'=>set_value('txt_password')]); ?>
		</div>
		<?php echo form_error('txt_password'); ?>
	</div>
	<div class="col-lg-6" style="margin-top: 40px;">
		
	</div>
</div>

<div class="row">
			<div class="col-lg-6">
		<div class="form-group">
			<label for="firstname">First Name:</label>
			<?php echo form_input(['class'=>'form-control', 'name'=>'txt_firstname','placeholder'=>'Enter Firstname','value'=>set_value('txt_firstname')]); ?>
		</div>
		<?php echo form_error('txt_firstname'); ?>
	</div>
	<div class="col-lg-6" style="margin-top: 40px;">
		
	</div>
</div>

<div class="row">
			<div class="col-lg-6">
		<div class="form-group">
			<label for="lastname">Last Name:</label>
			<?php echo form_input(['class'=>'form-control', 'name'=>'txt_lastname','placeholder'=>'Enter Lastname','value'=>set_value('txt_lastname')]); ?>
		</div>
		<?php echo form_error('txt_lastname'); ?>
	</div>
	<div class="col-lg-6" style="margin-top: 40px;">
		
	</div>
</div>
<div class="row">
			<div class="col-lg-6">
		<div class="form-group">
			<label for="email">Email ID:</label>
			<?php echo form_input(['class'=>'form-control', 'name'=>'txt_email','placeholder'=>'Enter Email','value'=>set_value('txt_email')]); ?>
		</div>
		<?php echo form_error('txt_email'); ?>
	</div>
	<div class="col-lg-6" style="margin-top: 40px;">
		
	</div>
</div>
		<?php echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit','value'=>'Submit']); ?>
		<?php echo form_reset(['class'=>'btn btn-secondary', 'type'=>'reset','value'=>'Reset']); ?>
		<?php echo anchor('Admin/login','Login here ?', 'class="link-class"'); ?>
		<br>
		&copy; 2018 Copyright: pundirraman@gmail.com
</div>

<?php include('footer.php'); ?>