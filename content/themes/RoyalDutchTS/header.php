<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/Library/css/main.css">
        <link rel="publisher" href="https://plus.google.com/+RoyaldutchtreeservicesCa"/>
        <link rel="author" href="https://plus.google.com/100776162143991239632"/>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class($class); ?> id="<?php echo get_option('current_page_template');?>">