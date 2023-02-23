<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo THEME_URI;?>/favicon.ico" type="image/x-icon"
    <?php $fonts_google = 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap'; ?>
    <!-- connect to domain of font files -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- optionally increase loading priority -->
    <link rel="preload" as="style" href=<?php echo $fonts_google; ?>>
    <!-- async CSS -->
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"
          href="<?php echo $fonts_google; ?>">
    <!-- no-JS fallback -->
    <noscript>
        <link rel="stylesheet" href="<?php echo $fonts_google; ?>">
    </noscript>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="page-container">