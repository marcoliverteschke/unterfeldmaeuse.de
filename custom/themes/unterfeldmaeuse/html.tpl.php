<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!doctype html>
<!--[if lt IE 7 ]> <html lang="<?php print $language->language; ?>" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php print $language->language; ?>" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php print $language->language; ?>" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php print $language->language; ?>" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php print $language->language; ?>" class="no-js"> <!--<![endif]-->
<head>
	<title><?php print $head_title; ?></title>
	<meta charset="UTF-8" />
	<meta name="description" content="Die Theatergruppe UNTERFELDMÄUSE aus Erkrath unterhält seit 1983 ihr Publikum mit Boulevardkomödien, Kriminalstücken und Thrillern, Eigenproduktionen und stimmungsvollen Märchenstücken. Hier finden Sie Informationen zum Verein, den Stücken, Kartenvorbestellung und mehr." />
	<meta name="keywords" content="Theatergruppe, Theatergruppe, Erkrath, Aufführungen, Neuigkeiten, Termine, Kartenvorverkauf" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="geo.region" content="DE-NW" />
	<meta name="geo.placename" content="Karlstraße 7, 40699 Erkrath, Deutschland" />
	<meta name="geo.position" content="51.22753;6.90955" />
	<meta name="ICBM" content="51.22753,6.90955" />
	
	<meta property="og:title" content="<?php print $head_title; ?>"/>
	<meta property="og:type" content="non_profit"/>
	<meta property="og:url" content="<?php print url(null, array('absolute' => TRUE)) ?>"/>
	<meta property="og:image" content="<?php print url('sites/all/themes/unterfeldmaeuse/images/logo.gif', array('absolute' => TRUE)) ?>"/>
	<meta property="og:site_name" content="<?php print variable_get('site_name', null) ?>"/>
	<meta property="og:description" content="Die Theatergruppe UNTERFELDMÄUSE aus Erkrath unterhält seit 1983 ihr Publikum mit Boulevardkomödien, Kriminalstücken und Thrillern, Eigenproduktionen und stimmungsvollen Märchenstücken. Hier finden Sie Informationen zum Verein, den Stücken, Kartenvorbestellung und mehr."/>
	
	<?php print $head; ?>


	<link rel="alternate" type="application/rss+xml" title="Unterfeldmäuse RSS" href="http://feeds.feedburner.com/unterfeldmaeuse" />
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<?php print $styles; ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
	<?php print $scripts; ?>
</body>
</html>