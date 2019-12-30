<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(''); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,800" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <?php wp_head(); ?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $('.collapse').on('shown.bs.collapse', function(){
                $(this).parent().find(".icon-bottom").removeClass("icon-bottom").addClass("icon-top");
                }).on('hidden.bs.collapse', function(){
                $(this).parent().find(".icon-top").removeClass("icon-top").addClass("icon-bottom");
                });
        });
    </script>
  </head>

  <body>
  <header id="header" class="header">
    <div class="container-middle">
            <nav class="nav nav--header">
                <ul class="menu">
                    <li><a href="https://www.kliner.com/menage-a-domicile">Ménage à domicile</a></li>
                    <li><a href="https://www.kliner.com/menage-airbnb">Ménage airbnb</a></li>
                    <li><a href="https://www.kliner.com/nettoyage-de-bureau">Nettoyage de bureaux</a></li>
                </ul>
                <a href="https://www.kliner.com">
                    <h1><img src="https://www.kliner.com/wp-content/themes/kliner/assets/img/logo-white.png" width="80"
                            alt="kliner"></h1>
                </a>
                <ul class="menu menu--right">
                    <li><a href="https://www.kliner.com/devenir-partenaire">DEVENIR AIDE MÉNAGÈRE</a></li>
                    <li><a href="https://v2.kliner.com/espaceclient/login" class="esp" target="_blank">ESPACE PRIVÉ</a>
                    </li>
                </ul>
            </nav>
            <nav class="nav nav--mobile nav--mobile-left">
                <ul class="menu">
                    <li><a href="https://www.kliner.com/menage-a-domicile">Ménage à domicile</a></li>
                    <li><a href="https://www.kliner.com/menage-airbnb">Ménage airbnb</a></li>
                    <li><a href="https://www.kliner.com/nettoyage-de-bureau">Nettoyage de bureaux</a></li>
                    <li><a href="https://www.kliner.com/femme-de-menage">Nos valeurs</a></li>
                    <li><a href="https://www.kliner.com/a-propos-de-nous">Notre histoire</a></li>
                    <li><a href="https://www.kliner.com/application-du-menage">L’application du ménage</a></li>
                    <li><a href="https://www.kliner.com/devenir-partenaire" class="button-rounded">Devenir Aide
                            ménagère</a></li>
                </ul>
            </nav>
            <nav class="nav nav--mobile nav--mobile-right">
                <ul class="menu">
                    <li><a href="https://v2.kliner.com/espaceclient/login">Mon compte</a></li>
                    <li><a href="http://http://kliner.app.link"
                            onclick="ga('send', 'RDV', 'clic', 'Prendre rendez-vous' );">Télécharger l'appli |
                            Client</a></li>
                    <li><a href="https://www.kliner.com/devenir-partenaire" class="button-rounded">Devenir aide
                            ménagere</a></li>
                </ul>
            </nav>
            <a href="https://www.kliner.com">
                <h1 class="logo-mobile"><img
                        src="https://www.kliner.com/wp-content/themes/kliner/assets/img/logo-white.png" width="80"
                        alt="kliner"></h1>
            </a>
            <a href="#" data-activates="nav-mobile" class="button-collapse header-button-collapse button-collapse-left">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </a>
            <a href="#" data-activates="nav-mobile"
                class="button-collapse header-button-collapse button-collapse-right">
                <i class="fas fa-shopping-bag"></i>
                <i class="fas fa-times"></i>
            </a>
        </div>
</header>