<?php
/*
Template Name: Template Événement
*/
?>
<?php get_header(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content() ?>
    <p>Nom pays: <?php the_field('nom_pays')?> </p>


    <section class="destination">
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <!-- <div class="destination__list"></div> -->
    </section>
<?php get_footer(); ?>