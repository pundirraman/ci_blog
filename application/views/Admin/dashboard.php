<?php include('header.php'); ?>
<div class="container" style="margin-top: 30px;">
	<div><a href="<?= base_url('Admin/addArticles');?>" class="btn btn-primary">Add Articles</a></div>
	<h2>Welcome to admin dashboard...</h2>
	<?php 
		//echo "<pre>"; 
		//print_r($articles);
	?>
	<div class="table">
		<table>
			<thead>
				<tr><th>ID</th><th>Article Title</th><th>Edit</th><th>Delete</th></tr>
			</thead>
			<tbody>
				<?php if (count($articles)): ?>
					<?php foreach ($articles as $art): ?>
						
				<tr>
					<td><?php echo $art->id; ?></td>
					<td><?php echo $art->article_title; ?></td>
					<td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
					<td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
				</tr>

			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="4">No data available...</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>
<?php include('footer.php'); ?>