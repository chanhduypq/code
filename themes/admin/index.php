<?php echo theme_view('partials/_header'); ?>

<div class="body">
	<div class="container-fluid">
	        <?php echo Template::message(); ?>
	
	        <?php echo isset($content) ? $content : Template::content(); ?>
	</div>
</div>

<?php echo theme_view('partials/_footer'); ?>
