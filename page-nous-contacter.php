<?php get_header(); ?>

<script>
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
      $(e.target)
        .prev()
        .find("i:last-child")
        .toggleClass("fa-minus fa-plus");
    });
</script>

<?php $picture = get_field('visuel'); ?>
<div class="rubrique">
    <div class="section-1" style="background-image: url(<?php echo $picture['url'];?>);">
        <div class="container">
            <div class="blc">
                <h1>Nous contacter</h1>
            </div>
        </div>  
    </div>
    <div class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 menu-sidebar">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/services-tarifs">SEVICES & TARIFS</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/comptes-moyens-de-paiements">COMPTES & MOYENS DE PAIEMENT</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/utiliser-lapplication">UTILISER L'APPLICATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/disponibilite">DISPONIBILITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/qualite">QUALITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/protection">PROTECTION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/reclamation">RÉCLAMATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/nous-contacter" class="active">NOUS CONTACTER</a></li>
                    </ul>
                </div>
                <div class="col-lg-9">
                   <div class="file-ariane">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#">Aide pour les clients <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#">Nous contacter </a></li>
                        </ul> 
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<?php get_footer(); ?>