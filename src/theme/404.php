<?php get_header(); ?>
<!-- container -->
<div class="container">
	<div id="primary" class="not-found">
		<section class="error-404 not-found">
			<!-- <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'lk-wordpress-theme' ); ?></h1>
			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

				<?php get_search_form(); ?>
			</div> -->
			<div class="animate-item animate-item--delay1" data-animation="zoom-in">
				<img class="logo-top-page" src="<?php echo get_template_directory_uri(); ?>/img/loghi/Aurec-logo-dorato.jpg" alt="AU.REC - Metalli Preziosi" />
			</div>
			<p lang="it-IT" class="gold-subtitle animate-item animate-item--delay3" data-animation="zoom-in">La pagina che hai cercato è inesistente.</p>
			<p lang="en-US" class="gold-subtitle animate-item animate-item--delay3" data-animation="zoom-in">The page you were looking for doesn't exist.</p>
		</section>
	</div>
</div>
<!-- /container -->
<?php get_footer(); ?>
