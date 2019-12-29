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
                <h1>Protection</h1>
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
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/protection" class="active">PROTECTION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/reclamation">RÉCLAMATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/nous-contacter">NOUS CONTACTER</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                   <div class="file-ariane">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a> </li>
                            <li><a href="#">Aide pour les clients <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#">Protection </a></li>
                        </ul> 
                   </div>

                   <div class="accordeon">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Assurance
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                     <?php the_field('assurance'); ?>
                                </div>
                            </div>
                        </div>
                
                        <div class="panel panel-default in" style="border-bottom: 1px solid #00000012;">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Assistance
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <?php the_field('assistance'); ?>
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