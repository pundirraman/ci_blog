<?php include('header.php'); ?>

<div class="container" style="margin-top: 20px;">
	<h1>Add Articles</h1>

	<?php echo form_open(''); ?>	
<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			<label for="ArticleTitle">Article Title:</label>
			<?php echo form_input(['class'=>'form-control', 'name'=>'txt_articletitle','placeholder'=>'Enter Article Title', 'value'=>set_value('txt_articletitle')]); ?>
		</div>
		<?php echo form_error('txt_articletitle'); ?>
	</div>
	<div class="col-lg-6" style="margin-top: 40px;">
		
	</div>
</div>

<div class="row">
			<div class="col-lg-6">
		<div class="form-group">
			<label for="ArticleText">Article Text:</label>
			<?php echo form_textarea(['class'=>'form-control', 'name'=>'txt_articletext','placeholder'=>'Enter Article Text','value'=>set_value('txt_articletext')]); ?>
		</div>
		<?php echo form_error('txt_articletext'); ?>
	</div>
	<div class="col-lg-6" style="margin-top: 40px;">
		
	</div>
</div>
		<?php echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit','value'=>'Submit']); ?>
		<?php echo form_reset(['class'=>'btn btn-secondary', 'type'=>'reset','value'=>'Reset']); ?>
		<br>
		&copy; 2018 Copyright: pundirraman@gmail.com
</div>

<?php include('footer.php'); ?>