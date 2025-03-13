<footer>
    <?php $footer_mission = get_theme_mod('footer_mission', 'default title')?>
    <?php $footer_adresse = get_theme_mod('footer_adresse', 'default title')?>
    <?php $footer_telephone = get_theme_mod('footer_telephone', 'default title')?>
    <div class="piedpage global">
        <section class="piedpage__s1"> 
            <div class="piedpage__s1__liens">
                <h3>liens</h3>         
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "containter_class" => "piedpage__s1__externe"
                )); ?>
                </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                <h3>Location</h3>
                <p><?php echo $footer_adresse?></p>
                <p><?php echo $footer_telephone?></p>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h3>Objectif du site</h3>
                <?php echo $footer_mission?>
            </div>
        </section>
        <section class="piedpage__s2">
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
            </div>
        </section>
        <section class="piedpage__s3">
        <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
            </div>
            </div>
        </section>
    </div>
</footer>
<?php wp_footer() ?>