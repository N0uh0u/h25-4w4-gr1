<?php get_header();

$description_404 = get_theme_mod('404_description', 'Default Title')
?>
<section class="404">
    <h1>404</h1>
    <h2> <?php echo $description_404 ?> </h2>
    <h2>retour a la page d'Acceuil</h2>
    <?php get_template_part("gabarit/icones")?>
</section>
<?php get_footer();?>