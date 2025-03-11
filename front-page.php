<?php get_header(); ?>
<h1>Front-page</h1>
<?php 
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
    $hero_background = get_theme_mod('hero_background', 'Default Title');
    $hero_couleur = get_theme_mod('hero_couleur', 'Default Title');
    ?>
    <section class="hero" style="background-image:url(<?php echo $hero_background ?>); color:<?php $hero_couleur?>">
        <div class="hero__contenu global" >
            <h1 class="hero__titre"><?php echo bloginfo('name')?></h1>
            <p class="hero__description">
                Un site qui vous permet de trouver votre destination de rêves
            </p>
            <p class="hero__courriel">
                <a href="#">info@cmaisonneuve.qc.ca</a>
            </p>
            <p class="hero__adresse">
                5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
            </p>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
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