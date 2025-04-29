<?php


////////////////////////////Texte
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title');
$hero_description = get_theme_mod('hero_description', 'Default Title');
?>
<div class="hero__animation">
<div class="hero__animation">
            <h1 class="hero__titre">
                <?php  bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
            <?php echo $hero_description ?>
            </p>
        </div>
        <div class="hero__animation">
            <h1 class="hero__titre">
                Lorem ipsum dolor
            </h1>
            <p class="hero__description">
            consectetur adipisicing elit. Dicta velit asperiores 
            </p>
            </div>
            <p class="hero__courriel">
                <a href="#"><?php echo $hero_courriel ?> </a>
            </p>
            <p class="hero__adresse">
               Adresse: <?php echo $hero_adresse ?>
            </p> 
            <p class="auteur">Auteur :<?php echo $hero_auteur ?></p>