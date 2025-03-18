<?php get_header(); ?>
<?php 
///////////////////////////Style
$hero_background = get_theme_mod('hero_background', 'Default Title');
$hero_couleur_texte = get_theme_mod('hero_couleur_texte', '#fff');
?>
<section class="hero" style="background-image:url(<?php echo $hero_background ?>);">
    <div class="hero__contenu global" style="color:<?php echo $hero_couleur_texte?>">
            <?php get_template_part("gabarit/hero"); ?>
        <div class="hero__icone" >
            <?php get_template_part("gabarit/icones"); ?>
        </div>
    </div>
</section>
<section class="galerie">
    <?php get_template_part("gabarit/galerie"); ?>
</section>
<section class="populaire">
    <div class=" boiteflex global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part("gabarit/carte"); ?>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>