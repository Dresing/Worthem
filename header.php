<?php use Worthem\App;


$menu = wp_nav_menu([
	'echo' => false
	]);

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="referrer" content="no-referrer">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="blankFill"></div>
<div id="app">
<scroller></scroller>
<header-menu 
	home_url="<?= get_home_url() ?>"
	icon_url="<?=App::get('logoUrl')?>">
	<?= $menu ?>
	<div class="seperator"></div>
	<span><?=esc_attr(App::get('name'))?></span>
	<span><?= App::get('address')?>, <?= App::get('postalCode')?> <?= App::get('city')?></span>
	<span><?= App::get('phone')?></span>
	</header-menu>
