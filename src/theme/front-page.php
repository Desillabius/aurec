<?php get_header(); ?>
<section>
	<div class="hero__wrapper animate-item" data-animation="zoom-in">
		<div class="hero__image lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/hero/test.jpg" alt="Au.Rec - Metalli Preziosi" 
			data-start="transform: translateY(0px);"
			data-500-start="transform: translateY(150px);"
			data-anchor-target=".hero__wrapper"></div>
	</div>
</section>
<section class="grey-bg">
	<div class="wrapper title__wrapper">
		<h2>Recupera, ricicla, trasforma</h2>
		<p class="gold-subtitle">AU.REC, in collaborazione con BM Valenza, si occupa del recupero e della raffinazione di metalli preziosi. <br>
		Un progetto nato per mettere in contatto i professionisti del settore dentistico e odontotecnico con i banchi di fusione della città di Valenza, garantendo sempre una valutazione precisa e trasparente.</p>
		<div class="anchors__wrapper">
			<div class="anchor" data-anchor="#anchor-1">
				<svg data-src="<?php echo get_template_directory_uri(); ?>/img/icons/consulenza.svg" alt="Consulenza tecnica">
				<h5>Consulenza tecnica</h5>
			</div>
			<div class="anchor" data-anchor="#anchor-2">
				<svg data-src="<?php echo get_template_directory_uri(); ?>/img/icons/consulenza.svg" alt="Valutazione materiali e screening">
				<h5>Valutazione materiali e screening</h5>
			</div>
			<div class="anchor" data-anchor="#anchor-3">
				<svg data-src="<?php echo get_template_directory_uri(); ?>/img/icons/consulenza.svg" alt="Recupero leghe e consulenza fiscale">
				<h5>Recupero leghe e consulenza fiscale</h5>
			</div>
			<div class="anchor" data-anchor="#anchor-4">
				<svg data-src="<?php echo get_template_directory_uri(); ?>/img/icons/consulenza.svg" alt="Consulenza su investimenti in metallo e diamanti">
				<h5>Consulenza su investimenti in metallo e diamanti</h5>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="wrapper cta__wrapper">
		<div class="cta__left">
			<h2 class="text-grey">Trova la soluzione su misura per le tue esigenze.</h2>
			<p>Con un’intera gamma di servizi, AU.REC ha sempre una risposta su misura per per le tue esigenze.</p>
		</div>
		<div class="cta__right">
			<a class="cta" href="" title="Prenota una consulenza">Prenota subito una consulenza gratuita e senza impegno</a>
		</div>
	</div>
</section>
<main>
	<div id="anchor-1" class="box__wrapper">
		<div class="img__wrapper animate-item" data-animation="zoom-in">
			<div class="box__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/servizi/placeholder.jpg" alt="Consulenza tecnica" 
			data--200-top="transform: translateY(60px);"
			data-center="transform: translateY(0px);"
			data-200-bottom="transform: translateY(-60px);"
			data-anchor-target="#anchor-1"></div>
		</div>
		<div class="text__wrapper">
			<div class="text__inner">
				<h3 class="gold-title">Consulenza tecnica</h3>
				<p>AU.REC offre diverse opzioni di valutazione in base al tempo disponibile  e alla quantità di materiali da analizzare. <br>
				Basta un semplice appuntamento e un esperto valuterà il materiale direttamente presso lo studio o il laboratorio.</p>
			</div>
		</div>
	</div>
	<div id="anchor-2" class="box__wrapper">
		<div class="text__wrapper">
			<div class="text__inner">
				<h3 class="gold-title">Valutazione materiali e screening spettrometrico</h3>
				<p>Gli esperti AU.REC forniscono una valutazione accurata e puntuale del calcolo delle millesimazioni e della caratura dei metalli nobili come argento, oro, platino e palladio contenuti in scarti di lavorazione odontotecnica, protesi dentarie dismesse e materiali di oreficeria.</p>
			</div>
		</div>
		<div class="img__wrapper animate-item" data-animation="zoom-in">
			<div class="box__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/servizi/placeholder.jpg" alt="Consulenza tecnica" 
			data--200-top="transform: translateY(60px);"
			data-center="transform: translateY(0px);"
			data-200-bottom="transform: translateY(-60px);"
			data-anchor-target="#anchor-2"></div>
		</div>
	</div>
	<div id="anchor-3" class="box__wrapper">
		<div class="img__wrapper animate-item" data-animation="zoom-in">
			<div class="box__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/servizi/placeholder.jpg" alt="Consulenza tecnica" 
			data--200-top="transform: translateY(60px);"
			data-center="transform: translateY(0px);"
			data-200-bottom="transform: translateY(-60px);"
			data-anchor-target="#anchor-3"></div>
		</div>
		<div class="text__wrapper">
			<div class="text__inner">
				<h3 class="gold-title">Recupero leghe e consulenza fiscale</h3>
				<p>Il consulente AU.REC offre una valutazione e una quantificazione accurata dei metalli riciclabili tramite fusione e individua un piano di recupero personalizzato.</p>
			</div>
		</div>
	</div>
	<div id="anchor-4" class="box__wrapper">
		<div class="text__wrapper">
			<div class="text__inner">
				<h3 class="gold-title">Consulenza su investimenti in metallo e diamanti</h3>
				<p>La gamma dei servizi AU.REC si adatta alle esigenze specifiche di ogni cliente offrendo diverse opzioni di valutazione e investimento dei materiali.</p>
			</div>
		</div>
		<div class="img__wrapper animate-item" data-animation="zoom-in">
			<div class="box__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/servizi/placeholder.jpg" alt="Consulenza tecnica" 
			data--200-top="transform: translateY(60px);"
			data-center="transform: translateY(0px);"
			data-200-bottom="transform: translateY(-60px);"
			data-anchor-target="#anchor-4"></div>
		</div>
	</div>
</main>
<section class="grey-bg">
	<div class="wrapper title__wrapper">
		<h3 class="gold-title">Quotazioni</h3>
		<p class="gold-subtitle">Scopri le quotazioni dei metalli preziosi in tempo reale.</p>
	</div>
</section>
<section>
	<div class="wrapper">
		<div id="trading-view-ita"></div>
	</div>
</section>
<?php get_footer(); ?>