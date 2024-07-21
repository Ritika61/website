<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Pixels Photography'; ?></title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/skins/color-1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="shortcut icon" href="./images/icons8-portfolio-64.png" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/style-switcher.css" />
</head>
<body>
    <div class="main-container">
        <div class="aside">
            <div class="logo">
                <a href="index.php"><span>Pixel <br> </span>Photography</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="index.php" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>"><em class="fa fa-home"></em>Home</a></li>
                <li><a href="about.php" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>"><em class="user"></em>About</a></li>
                <li><a href="services.php" class="<?php echo ($currentPage == 'services') ? 'active' : ''; ?>"><em class="list"></em>Services</a></li>
                <li><a href="portfolio.php" class="<?php echo ($currentPage == 'portfolio') ? 'active' : ''; ?>"><em class="briefcase"></em>Gallery</a></li>
                <li><a href="contact.php" class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?>"><em class="comments"></em>Contact</a></li>
            </ul>
        </div>
        <div class="main-content">
