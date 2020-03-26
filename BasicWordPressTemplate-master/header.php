<html lang="en">
<head><title>EST SB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php  echo get_template_directory_uri().'/css/style.css'?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--
      <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/Qalab/css/bootstrap.min.css">
      <script src="http://localhost/wordpress/wp-content/themes/Qalab/js/jquery.min.js"></script>
      <script src="http://localhost/wordpress/wp-content/themes/Qalab/js/bootstrap.min.js"></script>
    -->

    <style>
        body, h1, h2, h3, h4, h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>
<body class="light-grey">


<div class="content" style="max-width:1400px">


    <header class="container center padding-32">
        <h1><a href="<?php bloginfo('url'); ?>"><b><?php bloginfo('name'); ?></b></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <div class="container">

        <div class="w3-bar w3-border w3-card-4 w3-light-grey">
            <a href="<?php bloginfo('url'); ?>" class="w3-bar-item w3-button">Home</a>
            <a href="<?php bloginfo('url'); ?>" class="w3-bar-item w3-button">presantation</a>
            <a href="<?php bloginfo('url'); ?>" class="w3-bar-item w3-button">formation</a>
            <a href="<?php bloginfo('url'); ?>" class="w3-bar-item w3-button">Recherge</a>
            <a href="<?php bloginfo('url'); ?>" class="w3-bar-item w3-button">activite</a>
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {

                echo '<a class="w3-bar-item w3-button" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
            }
            ?>
        </div>


    </div>
    <div class="row">