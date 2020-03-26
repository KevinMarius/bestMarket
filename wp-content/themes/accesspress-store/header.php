<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AccessPress Store
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/jquery.ticker.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/custom.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/customizer.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/navigation.js</script>
    <script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/theme-customizer.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<?php
    $header_layout = esc_attr( get_theme_mod( 'accesspress_header_layout_type', 'headertwo' ) );
    if( $header_layout == 'headerone' ){
        get_template_part('header/header', 'one');
    }else{
        get_template_part('header/header', 'two');
    }
?>
<div id="content" class="site-content">