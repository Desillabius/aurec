<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110577987-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-110577987-1');
	</script> -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo home_url(); ?>/wp-content/themes/aurec/img/favicon/apple-touch-icon.png?v=XBzAMKAvNe">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo home_url(); ?>/wp-content/themes/aurec/img/favicon/favicon-32x32.png?v=XBzAMKAvNe">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo home_url(); ?>/wp-content/themes/aurec/img/favicon/favicon-16x16.png?v=XBzAMKAvNe">
	<link rel="manifest" href="<?php echo home_url(); ?>/wp-content/themes/aurec/img/favicon/manifest.json?v=XBzAMKAvNe">
	<link rel="mask-icon" href="<?php echo home_url(); ?>/wp-content/themes/aurec/img/favicon/safari-pinned-tab.svg?v=XBzAMKAvNe" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo home_url(); ?>/wp-content/themes/aurec/img/favicon/favicon.ico?v=XBzAMKAvNe">
	<meta name="msapplication-config" content="<?php echo home_url(); ?>/wp-content/themes/aurec/img/favicon/browserconfig.xml?v=XBzAMKAvNe">
	<meta name="theme-color" content="#ffffff">
</head>

<body <?php body_class(); ?>>
<div class="cookie-disclaimer hide-now" id="cookie-disclaimer">
	<div class="wrapper--cookie">
		<p class="cookie-disclaimer__copy" lang="it-IT">
			Utilizziamo i cookies anche di terze (impostati da un sito web diverso da quello visitato) per offrirti una migliore esperienza di navigazione sul nostro sito. Chiudendo questo banner o continuando la navigazione sul sito, accetti l'utilizzo di cookies. <br>
			Per maggiori informazioni, per modificare le tue preferenze o negare il consenso a tutti o ad alcuni cookie visita la  <a title="Cookie policy" class="underline-link" href="<?php echo home_url(); ?>/cookie-policy">Cookie policy</a>.
		</p>
		<p class="cookie-disclaimer__copy" lang="en-US">
			Utilizziamo i cookies anche di terze (impostati da un sito web diverso da quello visitato) per offrirti una migliore esperienza di navigazione sul nostro sito. Chiudendo questo banner o continuando la navigazione sul sito, accetti l'utilizzo di cookies. <br>
			Per maggiori informazioni, per modificare le tue preferenze o negare il consenso a tutti o ad alcuni cookie visita la  <a title="Cookie policy" class="underline-link" href="<?php echo home_url(); ?>/cookie-policy">Cookie policy</a>.
			</p>
		</p>
		<a class="cta" id="js-accept-cookie" href=""><span>OK</span></a>
	</div>
</div>
<header id="header" class="header animate-item" data-animation="come-in-top-menu">
	<div class="change-lang">
		<a href="<?php echo home_url(); ?>/homepage" title="IT" hreflang="it-IT" >IT</a>
		<div class="lang-divider"></div>
		<a href="<?php echo home_url(); ?>/en" title="EN" hreflang="en-US" >EN</a>
	</div>
	<div id="navbar-toggle" class="navbar-toggle">
        <div class='bar1'></div>
        <div class='bar2'></div>
        <div class='bar3'></div>
    </div>
	<!-- <?php wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'nav-wrapper__main' ) ); ?> -->
	<nav id="main-menu" class="nav-wrapper__main" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
        <ul>
        	<li itemprop="name">
                <a lang="it-IT" class="" href="<?php echo home_url(); ?>/" itemprop="url">Home</a>
                <a lang="en-US" class="" href="<?php echo home_url(); ?>/en" itemprop="url">Home</a>
            </li>
            <li itemprop="name">
                <a lang="it-IT" class="" href="<?php echo home_url(); ?>/chi-siamo" itemprop="url">Chi siamo</a>
                <a lang="en-US" class="" href="<?php echo home_url(); ?>/en/who-we-are" itemprop="url">Who we are</a>
            </li>
            <li itemprop="name">
                <a lang="it-IT" class="js-anchor" data-anchor="#footer" href="">Contatti</a>
                <a lang="en-US" class="js-anchor" data-anchor="#footer" href="">Contact us</a>
            </li>
        </ul>
    </nav>
</header>