<?php get_header(); ?>
<section>
	<div class="wrapper title__wrapper">
		<div class="animate-item animate-item--delay1" data-animation="zoom-in">
			<!-- <svg class="logo-top-page" data-src="<?php echo get_template_directory_uri(); ?>/img/loghi/Aurec-logo.svg" alt="AU.REC - Metalli Preziosi" /> -->
			<img class="logo-top-page" src="<?php echo get_template_directory_uri(); ?>/img/loghi/Aurec-logo-dorato.jpg" alt="AU.REC - Precious metals" />
		</div>
		<p class="gold-subtitle animate-item animate-item--delay3" data-animation="zoom-in">AU.REC deals with the recovery and refining of precious metals. A project created in collaboration with <span style="white-space: nowrap;">BM Valenza</span> to ensure the correct disposal and re-entry into the market of gold, silver, platinum and palladium coming from processing waste and unusable prosthetic stocks.</p>
	</div>
</section>
<main>
	<div id="box-1" class="box__wrapper animate-item animate-item--delay5" data-animation="zoom-in-txt">
		<div class="img__wrapper">
			<div class="box__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/chi-siamo/background-1.jpg" alt="" 
			data--200-top="transform: translateY(60px);"
			data-center="transform: translateY(0px);"
			data-200-bottom="transform: translateY(-60px);"
			data-anchor-target="#box-1"></div>
			<div class="text__inner--huge">
				<p>OUR <br>UNION <br>IS OUR <br>STRENGTH</p>
			</div>
		</div>
		<div class="text__wrapper grey-bg-4">
			<div class="text__inner text__inner--big">
				<svg data-src="<?php echo get_template_directory_uri(); ?>/img/icons/unione-forza.svg" alt="Our union is our strength"/>
				<p>We are committed to ensuring the highest value of noble metals based on the daily market indexes through our team of experts and specialized technicians.</p>
			</div>
		</div>
	</div>
	<div id="box-2" class="box__wrapper animate-item" data-animation="zoom-in-txt">
		<div class="text__wrapper">
			<div class="text__inner text__inner--big">
				<svg data-src="<?php echo get_template_directory_uri(); ?>/img/icons/valore-italia.svg" alt="More value to Italy">
				<p>AU.REC is a 100% Made in Italy project. The processing of materials, already present in the form of waste, is carried out locally and on site in order to reduce the environmental, economic and social impact. </p>
			</div>
		</div>
		<div class="img__wrapper">
			<div class="box__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/chi-siamo/background-2.jpg" alt="" 
			data--200-top="transform: translateY(60px);"
			data-center="transform: translateY(0px);"
			data-200-bottom="transform: translateY(-60px);"
			data-anchor-target="#box-2"></div>
			<div class="text__inner--huge">
				<p>MORE <br>VALUE <br>TO ITALY</p>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>