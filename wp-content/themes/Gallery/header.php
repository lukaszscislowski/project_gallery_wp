<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>TITLE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="css/normalize.css" rel="stylesheet" media="all">
    <link href="css/styles.css" rel="stylesheet" media="all">
    <!--[if lt IE 9]><script src="js/html5shiv-printshiv.js" media="all"></script><![endif]-->
</head>

<body>
    <h1>HTML5</h1>

    <header role="banner">


        <nav role="navigation">
            <?php
            wp_nav_menu(array('theme_location' => 'header-menu'));
            ?>
        </nav>



    </header>