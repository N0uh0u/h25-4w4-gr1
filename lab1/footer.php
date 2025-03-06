<footer>
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
                <p>3800 R. Sherbrooke E, Montréal, QC H1X 2A2</p>
                <p>(514) 254-7131</p>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h3>Objectif du site</h3>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat vero explicabo iure sit enim, ea ducimus nesciunt inventore impedit blanditiis unde omnis facere, deleniti eligendi fuga molestias dolor eveniet laborum!
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
            <div class="entete__nav">
                <nav class="entete__menu"></nav>
                <ul class="menu">
                    <li class="menu__li">
                        <a class="menu__a" href="#">Aventure</a>
                    </li>
                    <li class="menu__li">
                        <a class="menu__a" href="#">Sportive</a>
                    </li>
                    <li class="menu__li">
                        <a class="menu__a" href="#">culturel</a>
                    </li>
                    <li class="menu__li">
                        <a class="menu__a" href="#">Zen</a>
                    </li>
                    <li class="menu__li">
                        <a class="menu__a" href="#">Économie</a>
                    </li>
                    <li class="menu__li">
                        <a class="menu__a" href="#">Favorie</a>
                    </li>
                    <li class="menu__li">
                        <a class="menu__a" href="#">Pays</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</footer>
<?php wp_footer() ?>