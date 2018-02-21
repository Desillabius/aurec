<?php get_header(); ?>
<section>
	<div class="wrapper title__wrapper">
		<div class="animate-item animate-item--delay1" data-animation="zoom-in">
			<!-- <svg class="logo-top-page" data-src="<?php echo get_template_directory_uri(); ?>/img/loghi/Aurec-logo.svg" alt="AU.REC - Metalli Preziosi" /> -->
			<img class="logo-top-page" src="<?php echo get_template_directory_uri(); ?>/img/loghi/Aurec-logo-dorato.jpg" alt="AU.REC - Metalli Preziosi" />
		</div>
		<p class="gold-subtitle animate-item animate-item--delay3" data-animation="zoom-in">AU.REC si occupa del recupero e della raffinazione di metalli preziosi. Un progetto nato in collaborazione con <span style="white-space: nowrap;">BM Valenza</span> per assicurare il corretto smaltimento e la reimmissione sul mercato di oro, argento, platino e palladio provenienti da scarti di lavorazione e giacenze protesiche inutilizzabili.</p>
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
				<p>L'UNIONE <br>È LA <br>NOSTRA <br>FORZA</p>
			</div>
		</div>
		<div class="text__wrapper grey-bg-4">
			<div class="text__inner text__inner--big">
				<svg data-src="<?php echo get_template_directory_uri(); ?>/img/icons/unione-forza.svg" alt="L'unione è la nostra forza"/>
				<p>Attraverso un team di esperti e tecnici specializzati, ci impegniamo a garantire la massima valorizzazione dei metalli nobili in base agli indici giornalieri di mercato.</p>
			</div>
		</div>
	</div>
	<div id="box-2" class="box__wrapper animate-item" data-animation="zoom-in-txt">
		<div class="text__wrapper">
			<div class="text__inner text__inner--big">
				<svg data-src="<?php echo get_template_directory_uri(); ?>/img/icons/valore-italia.svg" alt="Più valore all’Italia">
				<p>AU.REC è un progetto 100% made in Italy. Le lavorazioni dei materiali, già presenti sotto forma di scarti, vengono effettuate direttamente sul territorio in modo da ridurre l’impatto ambientale, economico e sociale. </p>
			</div>
		</div>
		<div class="img__wrapper">
			<div class="box__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/chi-siamo/background-2.jpg" alt="" 
			data--200-top="transform: translateY(60px);"
			data-center="transform: translateY(0px);"
			data-200-bottom="transform: translateY(-60px);"
			data-anchor-target="#box-2"></div>
			<div class="text__inner--huge">
				<p>PIÙ <br>VALORE <br>ALL’ITALIA</p>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>