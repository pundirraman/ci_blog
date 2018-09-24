<!DOCTYPE html>
<html>
<head>
	<title>Article List from Users</title>	
	<?= link_tag("assets/css/bootstrap.min.css") ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>  
  <?php if ($this->session->userdata('user_id')) : ?>
  	<li><a href="<?= base_url('Admin/logout') ?>" class="btn btn-danger">Logout</a></li>
  <?php endif; ?>
</nav>