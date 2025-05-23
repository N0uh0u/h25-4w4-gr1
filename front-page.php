<?php get_header(); ?>
<?php 
///////////////////////////Style
for ($k=0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background_'. $k, '');
    }
$hero_couleur_texte = get_theme_mod('hero_couleur_texte', '#fff');
?>

<section class="hero">
    <div class="hero__carrousel  hero__carrousel--active "style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[1] ?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[2] ?>');"></div>
    <div class="hero__radio">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="0" checked = "checked" >
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="1" >
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="2" >
    </div>
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
 <?php categories_liste("destination");?>
<section class="destination">
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list">
        
        <!-- add dataset data-method=categories -->
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>