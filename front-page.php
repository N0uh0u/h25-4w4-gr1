<?php get_header(); ?>
<h1>Front-page</h1>
<?php 
////////////////////////////Texte
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
    $hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
    $hero_courriel = get_theme_mod('hero_courriel', 'Default Title');
    $hero_description = get_theme_mod('hero_description', 'Default Title');
///////////////////////////Style
    $hero_background = get_theme_mod('hero_background', 'Default Title');
    $hero_couleur_texte = get_theme_mod('hero_couleur_texte', '#fff');
    $hero_couleur_icones = substr(get_theme_mod('hero_couleur_icones', '#fff'),1);
    ?>
    <section class="hero" style="background-image:url(<?php echo $hero_background ?>);">
        <div class="hero__contenu global" style="color:<?php echo $hero_couleur_texte?>">
            <h1 class="hero__titre"><?php echo bloginfo('name')?></h1>
            <p class="hero__description">
            <?php echo $hero_description ?>
            </p>
            <p class="hero__courriel">
                <a href="#"><?php echo $hero_courriel ?> </a>
            </p>
            <p class="hero__adresse">
               Adresse: <?php echo $hero_adresse ?>
            </p>
            <div class="hero__icone" >
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?php echo $hero_couleur_icones?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?php echo $hero_couleur_icones ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=<?php echo $hero_couleur_icones ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=<?php echo $hero_couleur_icones ?>" width="20" height="20">
            </div>
            <p class="auteur">Auteur :<?php echo $hero_auteur ?></p>
        </div>

    </section>
    
    <section class="galerie">
        <div class="galerie global">
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="" alt="" class="galerie__img">
            </figure>
        </div>
    </section>
    
    <section class="populaire">
        <div class=" boiteflex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part("gabarit/carte"); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <footer></footer>
    <?php get_footer(); ?>
</body>
</html>