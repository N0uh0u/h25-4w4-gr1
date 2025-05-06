<div class="vague">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="rgb(56, 92, 136)" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,128C384,117,480,75,576,80C672,85,768,139,864,176C960,213,1056,235,1152,213.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>
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