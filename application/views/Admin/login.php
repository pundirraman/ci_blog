<?php include('header.php'); ?>

<div class="container" style="margin-top: 20px;">
	<h1>Admin Form</h1>
	<h3><?php if ($login_error = $this->session->flashdata('Login_failed')): ?>
	<div class="row">
		<div class="col-lg-6">
			<div class="alert alert-dismissible alert-danger"><?= $login_error; ?></div>
		</div>
	</div>
		<?php endif; ?>
	</h3>
	<?php echo form_open('admin/login'); ?>
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
		<?php echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit','value'=>'Submit']); ?>
		<?php echo form_reset(['class'=>'btn btn-secondary', 'type'=>'reset','value'=>'Reset']); ?>
		<?php echo anchor('Admin/register','Sign up ?', 'class="link-class"'); ?>
		<br>
		&copy; 2018 Copyright: pundirraman@gmail.com
</div>

<?php include('footer.php'); ?>