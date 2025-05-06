<div class="vague">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="rgb(59, 194, 235)" fill-opacity="1" d="M0,192L26.7,176C53.3,160,107,128,160,128C213.3,128,267,160,320,160C373.3,160,427,128,480,117.3C533.3,107,587,117,640,154.7C693.3,192,747,256,800,277.3C853.3,299,907,277,960,272C1013.3,267,1067,277,1120,240C1173.3,203,1227,117,1280,85.3C1333.3,53,1387,75,1413,85.3L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
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