<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php
        if(isset($inline_page_title)) $page_title = $inline_page_title;
        if(isset($inline_page_description)) $page_description = $inline_page_description;
        if(isset($inline_canonical)) $canonical = $inline_canonical;
        if(isset($inline_keywords)) $keywords = $inline_keywords;
        if(isset($inline_ogimage)) $ogimage = $inline_ogimage;
        if(isset($inline_ogtitle)) $ogtitle = $inline_ogtitle;
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $page_title ?></title>
        <?php if($page_description!=""){ ?><meta name="description" content="<?php echo $page_description ?>" />
        <?php } ?>
        <?php if($keywords!=""){ ?><meta name="keywords" content="<?php echo $keywords ?>">
        <?php } ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FAVICON & APPLE TOUCH ICONS -->
        <link rel="shortcut icon" href="/img/favicons/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $site_url ?>/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $site_url ?>/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $site_url ?>/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $site_url ?>/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $site_url ?>/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $site_url ?>/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $site_url ?>/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $site_url ?>/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $site_url ?>/img/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php echo $site_url ?>/img/favicons/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo $site_url ?>/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php echo $site_url ?>/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo $site_url ?>/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo $site_url ?>/img/favicons/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="<?php echo $site_url ?>/img/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="<?php echo $site_url ?>/img/favicons/browserconfig.xml">
        <meta name="application-name" content="Boilerplate">

        <!-- FACEBOOK OPEN GRAPH -->
        <meta property="og:title" content="<?php echo $ogtitle ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $canonical ?>" />
        <meta property="og:image" content="<?php echo $ogimage ?>" />
        <meta property="og:site_name" content="Sharks Never Sleep" />

        <!-- CANONICAL -->
        <?php if($canonical!="") {?><link rel="canonical" href="<?php echo $canonical ?>"/>
        <?php } ?>

        <link rel="stylesheet" href="<?php echo $site_url ?>/css/master.css">