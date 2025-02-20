<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css"> -->
    <?php wp_head(); ?>
</head>
<header>
        <div class="entete ">
            <figure class="entete__logo">
                <img src="https://s2.svgbox.net/octicons.svg?ic=logo-github-bold&color=000" width="50" height="50">
            </figure>
            <label for="chk__burger" class="burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
            </label>
            <input type="checkbox" id="chk__burger" class="chk__burger">
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
                <div class="entete__recherche">
                    <form class="recherche">
                        <input type="text" class="recherche__input">
                        <img class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="19" height="19">
                    </form>
                </div>
            </div>
        </div>
    </header>