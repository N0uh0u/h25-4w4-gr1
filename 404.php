<?php get_header();

$description_404 = get_theme_mod('404_description', 'Default Title')
?>
<section class="erreur">
    <div class="erreur-titre">
        <h1>Erreur 404 :(</h1>
    </div>
    <div class="erreur-desc">
        <p> <?php echo $description_404 ?> </p>
    </div>
    <div class="erreur-boutton">
        <a href="">retour a la page d'acceuil</a>
    </div>
    <div class="erreur-icones">
        <?php get_template_part("gabarit/icones")?>
    </div>
</section>
<?php get_footer();?>