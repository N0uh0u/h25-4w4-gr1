<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head() ?>
</head>
<body>
    <header class="header">
        <div class="entete">
            <figure class="entete__logo">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
            </figure>
            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
                <?php get_search_form() ?>

            </div> <!-- fin entete__navigation  -->
        </div>
    </header>
    
    <div class="vague__top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(59, 194, 235)" fill-opacity="1" d="M0,192L26.7,176C53.3,160,107,128,160,128C213.3,128,267,160,320,160C373.3,160,427,128,480,117.3C533.3,107,587,117,640,154.7C693.3,192,747,256,800,277.3C853.3,299,907,277,960,272C1013.3,267,1067,277,1120,240C1173.3,203,1227,117,1280,85.3C1333.3,53,1387,75,1413,85.3L1440,96L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
    </svg>
    </div>