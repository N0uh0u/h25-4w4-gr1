<?php
/*
Template Name: Template Événement
*/
?>
<?php get_header(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content() ?>
    <p>Le conferencier: <?php the_field('conferencier_evenement')?> </p>
    <p>La description: <?php the_field('description_evenement')?> </p>
    <p>Le lieu: <?php the_field('lieu_evenement')?> </p>
    <p>date et heure: <?php the_field('conferencier_evenement')?> </p>
<?php get_footer(); ?>