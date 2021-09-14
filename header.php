<?php defined( 'ABSPATH' ) || exit; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title("|") ?></title>

    <!-- WP STUFF-->
    <?php wp_head(); ?>


</head>
<body>


<?php include get_theme_file_path( '/template-modules/header-module.php' ); ?>

<main>