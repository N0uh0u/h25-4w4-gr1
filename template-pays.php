<?php
/*
Template Name: Template Événement
*/
?>
<?php get_header(); ?>
    <h2 class="titre__pays" ><?php the_title(); ?></h2>
   <p class="desc__pays"><?php the_content() ?></p>
<div>
    <?php 
    $pays =["France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"];
    if(!empty($pays)){
        echo '<ul class="categorie__ul__pays">';
        foreach($pays as $ps){
            echo '<li  data-id="' . $ps . '" class="categorie__ul__li">' . $ps. '</li>';
        }
    }
    ?>
    </div>
    <div class="vague__pays">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,128L120,117.3C240,107,480,85,720,90.7C960,96,1200,128,1320,144L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    </div>
<section class="destination">
    <h2 class="destination__titre"> <?php echo "nom du pays" ?> </h2>
    <div class="destination__list">
        <!-- add dataset data-method=categories -->
    </div>
<?php get_footer(); ?>