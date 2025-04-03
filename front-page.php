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
<!-- <ul class="categorie__ul">
    <li data-category-id="12" class="categorie__ul__li">Europe</li>
    <li data-category-id="13" class="categorie__ul__li">Asie</li>
    <li data-category-id="14" class="categorie__ul__li">Afrique</li>
</ul> -->
<!-- section destinations REST-API -->
 <?php categories_liste("destination");?>
<section class="destination">
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
</section>
<?php get_footer(); ?>
</body>
</html>