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
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo home_url(); ?>/img/favicon/apple-touch-icon.png?v=XBzAMKAvNe">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo home_url(); ?>/img/favicon/favicon-32x32.png?v=XBzAMKAvNe">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo home_url(); ?>/img/favicon/favicon-16x16.png?v=XBzAMKAvNe">
	<link rel="manifest" href="<?php echo home_url(); ?>/img/favicon/manifest.json?v=XBzAMKAvNe">
	<link rel="mask-icon" href="<?php echo home_url(); ?>/img/favicon/safari-pinned-tab.svg?v=XBzAMKAvNe" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo home_url(); ?>/img/favicon/favicon.ico?v=XBzAMKAvNe">
	<meta name="msapplication-config" content="<?php echo home_url(); ?>/img/favicon/browserconfig.xml?v=XBzAMKAvNe">
	<meta name="theme-color" content="#ffffff">
</head>

<body <?php body_class(); ?>>
<header id="header" class="header">
	<div class="change-lang">
		<a href="/" title="">IT</a>
		<div class="lang-divider"></div>
		<a href="/en" title="">EN</a>
	</div>
	<div id="navbar-toggle" class="navbar-toggle">
        <div class='bar1'></div>
        <div class='bar2'></div>
        <div class='bar3'></div>
    </div>
	<nav id="main-menu" class="nav-wrapper__main" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
        <ul>
        	<li itemprop="name">
                <a class="" href="/" itemprop="url">Home</a>
            </li>
            <li itemprop="name">
                <a class="" href="chi-siamo" itemprop="url">Chi siamo</a>
            </li>
            <li itemprop="name">
                <a class="js-anchor" data-anchor="#footer" href="">Contattaci</a>
            </li>
        </ul>
    </nav>
</header>