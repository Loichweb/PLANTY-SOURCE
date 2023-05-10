<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="wrapper" class="hfeed">

<header class="header" role="banner">

<div id="branding" class="site-logo">


<?php
// Vérifier si le thème prend en charge le logo personnalisé
if ( function_exists( 'the_custom_logo' ) ) {
	// Afficher le logo personnalisé
	the_custom_logo();
}
?>

</div>

<nav class="Flexdirection nav" role="navigation" >
 <div class="Navmenu"> 
 <?php wp_nav_menu( array( 'theme_location' => 'custom-menu' ) ); ?>
 </div>   
<div id="ordermenu"> 
		<a href="http://localhost:10009/commander/"> <button>Commander </button></a>
</div>
</nav>


</header>

<div id="container">
<main id="content" role="main">