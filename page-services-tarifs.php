<?php get_header(); ?>

<?php

    $menage_repassage_client = new WP_Query(array(
        'category_name'			=> 'menage-repassage-a-domicile-client',
    ));

    $menage_repassage_aides = new WP_Query(array(
        'category_name'			=> 'menage-repassage-a-domicile-aides',
    ));

    $service_bnb_client = new WP_Query(array(
        'category_name'			=> 'service-bnb-clients',
    ));

    $service_bnb_aides = new WP_Query(array(
        'category_name'			=> 'service-bnb-aides',
    ));

    $nettoyage_de_bureaux_client = new WP_Query(array(
        'category_name'			=> 'nettoyage-de-bureaux-clients',
    ));

    $nettoyage_de_bureaux_aides = new WP_Query(array(
        'category_name'			=> 'nettoyage-de-bureaux-aides',
    ));
    

    $guide_des_prix_client = new WP_Query(array(
        'category_name'			=> 'guide-des-prix-clients',
    ));

    $guide_des_prix_aides = new WP_Query(array(
        'category_name'			=> 'guide-des-prix-aides',
    ));

    $suivi_administratif_client = new WP_Query(array(
        'category_name'			=> 'suivi-administratif-clients',
    ));

    $suivi_administratif_aides = new WP_Query(array(
        'category_name'			=> 'suivi-administratif-aides',
    ));
?>


<?php $picture = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

<div class="rubrique">
    <div class="section-1 d-none d-lg-block" style="background-image: url(<?php echo $picture['0'];?>);">
        <div class="container">
            <div class="blc">
                <h1>Assistance Services & Tarifs </h1>
            </div>
        </div>  
    </div>

    <!-- section 1 mobile -->
    <div class="section-1-mobile d-block d-lg-none">
        <div class="section-1" style="background-image: url(<?php echo $picture['0'];?>);"></div>
        <div class="container">
            <div class="blc">
                <h1>Assistance <br>Services & Tarifs </h1>
            </div>
        </div>  
    </div>


    <div class="section-2 ">
    <?php //global $post; echo $post->ID;?>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 menu-sidebar d-none d-lg-block">
                    <?php if( is_page('Services & tarifs (Aides ménagères)')): ?>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/services-tarifs" class="active">SERVICES & TARIFS</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/comptes-moyens-de-paiements">COMPTES & MOYENS DE PAIEMENT</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/utiliser-lapplication">UTILISER L'APPLICATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/disponibilite">DISPONIBILITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/qualite">QUALITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/protection">PROTECTION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/reclamation">RÉCLAMATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/nous-contacter">NOUS CONTACTER</a></li>
                        </ul>
                    <?php else: ?>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/services-tarifs" class="active">SERVICES & TARIFS</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/comptes-moyens-de-paiements">COMPTES & MOYENS DE PAIEMENT</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/utiliser-lapplication">UTILISER L'APPLICATION</a></li>
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
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide pour les clients<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#">Services & Tarifs </a></li>
                        </ul> 
                    </div>
                
                    <!-- file ariane mobile -->
                    <div class="file-ariane-mobile d-block d-md-none">
                       <a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons8-left.png" class="img-fluid"/>Aide pour les clients</a>
                    </div>
                   
                    <div class="accordeon">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Ménage & Repassage à domicile
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <?php if( is_page('Services & tarifs (Aides ménagères)')): ?>
                                        <?php while ($menage_repassage_aides -> have_posts()) : $menage_repassage_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($menage_repassage_client -> have_posts()) : $menage_repassage_client -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                
                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Service BnB
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <?php if(is_page('Services & tarifs (Aides ménagères)')): ?>
                                        <?php while ($service_bnb_aides -> have_posts()) : $service_bnb_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($service_bnb_client -> have_posts()) : $service_bnb_client -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingTree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTree" aria-expanded="false" aria-controls="collapseTwo">
                                        Nettoyage de Bureaux
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTree">
                                <div class="panel-body">
                                    <?php if(is_page('Services & tarifs (Aides ménagères)')): ?>
                                        <?php while ($nettoyage_de_bureaux_aides -> have_posts()) : $nettoyage_de_bureaux_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($nettoyage_de_bureaux_client -> have_posts()) : $nettoyage_de_bureaux_client -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>                                    
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                        Guide de prix
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <?php if(is_page('Services & tarifs (Aides ménagères)')): ?>
                                        <?php while ($guide_des_prix_aides -> have_posts()) : $guide_des_prix_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($guide_des_prix_client -> have_posts()) : $guide_des_prix_client -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default in" style="border-bottom: 1px solid #00000012;">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                        Suivi administratif
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <?php if(is_page('Services & tarifs (Aides ménagères)')): ?>
                                        <?php while ($suivi_administratif_aides -> have_posts()) : $suivi_administratif_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($suivi_administratif_client -> have_posts()) : $suivi_administratif_client -> the_post(); ?>
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