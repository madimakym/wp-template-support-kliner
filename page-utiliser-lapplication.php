<?php get_header(); ?>

<?php

    // clients
    $commander_une_prestation_clients = new WP_Query(array(
        'category_name'			=> 'commander-une-prestation-clients',
    ));

    $gestion_de_profil_clients = new WP_Query(array(
        'category_name'			=> 'gestion-de-profil-clients',
    ));

    $promotions_clients = new WP_Query(array(
        'category_name'			=> 'promotions-clients',
    ));

    $gerer_une_prestation_commandee_clients = new WP_Query(array(
        'category_name'			=> 'gerer-une-prestation-commandee-clients',
    ));


    $execution_des_prestations_clients = new WP_Query(array(
        'category_name'			=> 'execution-des-prestations-clients',
    ));

    $apres_une_prestation_clients = new WP_Query(array(
        'category_name'			=> 'apres-une-prestation-clients',
    ));

    // aides menageres
    $commander_une_prestation_aides = new WP_Query(array(
        'category_name'			=> 'commander-une-prestation-aides',
    ));

    $gestion_de_profil_aides = new WP_Query(array(
        'category_name'			=> 'gestion-de-profil-aides',
    ));

    $promotions_aides = new WP_Query(array(
        'category_name'			=> 'promotions-aides',
    ));

    $gerer_une_prestation_commandee_aides = new WP_Query(array(
        'category_name'			=> 'gerer-une-prestation-commandee-aides',
    ));

    $execution_des_prestations_aides = new WP_Query(array(
        'category_name'			=> 'execution-des-prestations-aides',
    ));

    $apres_une_prestation_aides = new WP_Query(array(
        'category_name'			=> 'apres-une-prestation-aides',
    ));
    
?>


<?php $picture = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

<div class="rubrique">
    <div class="section-1 d-none d-lg-block" style="background-image: url(<?php echo $picture['0'];?>);">
        <div class="container">
            <div class="blc">
                <h1>Assistance Utiliser l'application</h1>
            </div>
        </div>  
    </div>

    <!-- section 1 mobile -->
    <div class="section-1-mobile d-block d-lg-none">
        <div class="section-1" style="background-image: url(<?php echo $picture['0'];?>);"></div>
        <div class="container">
            <div class="blc">
                <h1>Assistance <br>Utiliser l'application</h1>
            </div>
        </div>  
    </div>

    <div class="section-2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 menu-sidebar d-none d-lg-block">
                    <?php if( is_page('Utiliser l\'application (Aides ménagères)')): ?>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/services-tarifs">SERVICES & TARIFS</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/comptes-moyens-de-paiements">COMPTES & MOYENS DE PAIEMENT</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/utiliser-lapplication" class="active">UTILISER L'APPLICATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/disponibilite">DISPONIBILITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/qualite">QUALITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/protection">PROTECTION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/reclamation">RÉCLAMATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/nous-contacter">NOUS CONTACTER</a></li>
                        </ul>
                    <?php else: ?>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/services-tarifs">SERVICES & TARIFS</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/comptes-moyens-de-paiements">COMPTES & MOYENS DE PAIEMENT</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/utiliser-lapplication" class="active">UTILISER L'APPLICATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/disponibilite">DISPONIBILITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/qualite">QUALITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/protection">PROTECTION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/reclamation">RÉCLAMATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/nous-contacter">NOUS CONTACTER</a></li>
                        </ul>
                    <?php endif; ?>
                </div>


                <div class="col-lg-9">
                    <div class="file-ariane d-none d-lg-block">
                        <?php if( is_page('Utiliser l\'application (Aides ménagères)')): ?>
                            <ul>
                                <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Aide pour les clients<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Utiliser l’application </a></li>
                            </ul> 
                        <?php else: ?>
                            <ul>
                                <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Aide pour les clients<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Utiliser l’application </a></li>
                            </ul> 
                        <?php endif; ?>
                    </div>
                
                    <!-- file ariane mobile -->
                    <div class="file-ariane-mobile d-block d-md-none">
                        <?php if( is_page('Utiliser l\'application (Aides ménagères)')): ?>
                           <a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons8-left.png" class="img-fluid"/>Aide pour les clients</a>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons8-left.png" class="img-fluid"/>Aide pour les clients</a>
                        <?php endif; ?>
                    </div>
                   
                    <div class="accordeon">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Commander une prestation
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <?php if( is_page('Utiliser l\'application (Aides ménagères)')): ?>
                                        <?php while ($commander_une_prestation_aides -> have_posts()) : $commander_une_prestation_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($commander_une_prestation_clients -> have_posts()) : $commander_une_prestation_clients -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                

                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                    Promotions
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <?php if(is_page('Utiliser l\'application (Aides ménagères)')): ?>
                                        <?php while ($promotions_aides -> have_posts()) : $promotions_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($promotions_clients -> have_posts()) : $promotions_clients -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                                        Gérer une prestation commandée
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <?php if(is_page('Utiliser l\'application (Aides ménagères)')): ?>
                                        <?php while ($gerer_une_prestation_commandee_aides -> have_posts()) : $gerer_une_prestation_commandee_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($gerer_une_prestation_commandee_clients -> have_posts()) : $gerer_une_prestation_commandee_clients -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
                                    Exécution des prestations
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <?php if(is_page('Utiliser l\'application (Aides ménagères)')): ?>
                                        <?php while ($execution_des_prestations_aides -> have_posts()) : $execution_des_prestations_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($execution_des_prestations_clients -> have_posts()) : $execution_des_prestations_clients -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default in" style="border-bottom: 1px solid #00000012;">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
                                    Après une prestation
                                    <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <?php if(is_page('Utiliser l\'application (Aides ménagères)')): ?>
                                        <?php while ($apres_une_prestation_aides -> have_posts()) : $apres_une_prestation_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($apres_une_prestation_clients -> have_posts()) : $apres_une_prestation_clients -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div><!-- panel-group -->
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