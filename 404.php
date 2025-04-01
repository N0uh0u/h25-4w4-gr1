<?php get_header();

$erreur_background = get_theme_mod('404_background', '');
$titre_404 = get_theme_mod('404_titre', 'Default Title');
$description_404 = get_theme_mod('404_description', 'Default Title');
?>
<section class="erreur" style="background-image:url(<?php echo $erreur_background?>);">
    <div class="erreur-titre">
        <h1> <?php echo $titre_404 ?> </h1>
    </div>
    <div class="erreur-desc">
        <p> <?php echo $description_404 ?> </p>
    </div>
    <!-- <div class="erreur-boutton">
        <a href="">retour a la page d'acceuil</a>
    </div> -->
    <div class="erreur-icones">
        <?php get_template_part("gabarit/icones")?>
    </div>
</section>
<?php get_footer();?>