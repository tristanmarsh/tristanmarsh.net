<?php get_header('header'); ?>

<div class="container">
	
	<div class="row">
		
		<div class="main-content col-sm-9 col-md-9 col-lg-10">

			<h2>Error 404</h2>

			<p class="lead">The page could not be found</p>
			
			<p>Super sorry about that, send me a message if it's super serious!</p>

			<button type="button" class="btn button button-rounded button-jumbo button-action" data-toggle="modal" data-target="#contactModal">say hi</button>

		</div>

		<aside class="sidebar col-sm-3 col-md-3 col-lg-2">
			
			<?php get_template_part('sidebar.php'); ?>

		</aside>

	</div>

</div>

<?php get_footer(); ?>