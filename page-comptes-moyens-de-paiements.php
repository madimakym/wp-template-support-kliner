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
                <h1>Comptes et moyens de paiements</h1>
            </div>
        </div>  
    </div>
    <div class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 menu-sidebar">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/">SEVICES & TARIFS</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/comptes-moyens-de-paiements" class="active">COMPTES & MOYENS DE PAIEMENT</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/utiliser-lapplication">UTILISER L'APPLICATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/disponibilite">DISPONIBILITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/qualite">QUALITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/protection">PROTECTION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/reclamation">RÉCLAMATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/nous-contacter">NOUS CONTACTER</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                   <div class="file-ariane">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a> </li>
                            <li><a href="#">Aide pour les clients <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#">Comptes et moyens de paiements</a></li>
                        </ul> 
                   </div>

                   <div class="accordeon">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Inscription
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <?php the_field('inscription'); ?>
                                 </div>
                            </div>
                        </div>
                
                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Gestion de profil
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <?php the_field('gestion_de_profil'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                        Connexion
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <?php the_field('connexion'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                        Moyens de paiement
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <?php the_field('moyens_de_paiement'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                        Facturation
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <?php the_field('facturation'); ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- panel-group -->
                </div><!-- container -->
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