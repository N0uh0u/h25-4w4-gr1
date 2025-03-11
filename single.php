<?php get_header(); ?>
<body>
    <h1>Single</h1>
    <!-- <section class="formulaire">
        <div class="formulaire__contenu">
            <form>
                <div class="formulaire__champ">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
                </div>
                <div class="formulaire__champ">
                    <label for="email">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre Prénom" required>
                </div>
               
                <div class="formulaire__champ">
                    <label for="courriel">Courriel</label>
                    <input type="email" id="courriel" name="adresse" placeholder="Entrez votre adresse" required>
                </div>
 
                <div class="formulaire__champ">
                    <label for="telephone">Téléphone</label>
                    <input type="text" id="telephone" name="telephone" placeholder="Entrez votre Téléphone" required>
                </div>
 
                <div class="formulaire__champ">
                    <label for="s'inscrire">_</label>
                    <input type="text" id="s'inscrire" name="s'inscrire" placeholder="S'inscrire" required>
                </div>
               
               
                -->
            </form>
        </div>
    </section>
    <main>
        <section class="galerie">
            <figure class="galerie__fig">
                <img src="" alt="">
            </figure>
        </section>

        <section class="promotion">

    <div class="carte carte--grande">
        <figure class="carte__image">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    </article>
<?php endwhile; endif; ?>
        </figure>
        <div class="carte__contenu">
          <h2 class="carte__titre">Destination de rêve</h2>
          <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
          <button class="carte__bouton carte__bouton--actif">Réserver</button>
        </div>
      </div>
    </section>
        <?php get_footer(); ?>
        </body>
</html>
        