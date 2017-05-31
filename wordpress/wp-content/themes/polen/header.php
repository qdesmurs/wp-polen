<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wp-polen</title>
    <link rel="stylesheet" href=<?php echo '"'.get_stylesheet_directory_uri( ).'/style.css"';  ?>>

<?php wp_head(); ?>
</head>
<body>
<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
<div class="container">
