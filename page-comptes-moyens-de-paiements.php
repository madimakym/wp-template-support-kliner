<?php get_header(); ?>

<?php

    // clients
    $inscription_clients = new WP_Query(array(
        'category_name'			=> 'inscription-clients',
    ));

    $gestion_de_profil_clients = new WP_Query(array(
        'category_name'			=> 'gestion-de-profil-clients',
    ));

    $connexion_clients = new WP_Query(array(
        'category_name'			=> 'connexion-clients',
    ));

    $connexion_clients = new WP_Query(array(
        'category_name'			=> 'connexion-clients',
    ));

    $moyens_de_paiement_clients = new WP_Query(array(
        'category_name'			=> 'moyens-de-paiement-clients',
    ));

    $facturation_clients = new WP_Query(array(
        'category_name'			=> 'facturation-clients',
    ));

    // aides menageres
    $inscription_aides = new WP_Query(array(
        'category_name'			=> 'inscription-aides',
    ));

    $gestion_de_profil_aides = new WP_Query(array(
        'category_name'			=> 'gestion-de-profil-aides',
    ));

    $connexion_aides = new WP_Query(array(
        'category_name'			=> 'connexion-aides',
    ));

    $connexion_aides = new WP_Query(array(
        'category_name'			=> 'connexion-aides',
    ));

    $moyens_de_paiement_aides = new WP_Query(array(
        'category_name'			=> 'moyens-de-paiement-aides',
    ));

    $facturation_aides = new WP_Query(array(
        'category_name'			=> 'facturation-aides',
    ));
    
?>


<?php $picture = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

<div class="rubrique">
    <div class="section-1 d-none d-lg-block" style="background-image: url(<?php echo $picture['0'];?>);">
        <div class="container">
            <div class="blc">
                <h1>Assistance Comptes et moyens de paiements</h1>
            </div>
        </div>  
    </div>

    <!-- section 1 mobile -->
    <div class="section-1-mobile d-block d-lg-none">
        <div class="section-1" style="background-image: url(<?php echo $picture['0'];?>);"></div>
        <div class="container">
            <div class="blc">
                <h1>Assistance <br>Comptes et moyens de paiements </h1>
            </div>
        </div>  
    </div>

    <div class="section-2 ">
    <?php global $post; echo $post->ID;?>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 menu-sidebar d-none d-lg-block">
                    <?php if( is_page('Comptes et moyens de paiements (Aides ménagères)')): ?>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/services-tarifs">SERVICES & TARIFS</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/comptes-moyens-de-paiements" class="active">COMPTES & MOYENS DE PAIEMENT</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/utiliser-lapplication">UTILISER L'APPLICATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/disponibilite">DISPONIBILITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/qualite">QUALITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/protection">PROTECTION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/reclamation">RÉCLAMATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/nous-contacter">NOUS CONTACTER</a></li>
                        </ul>
                    <?php else: ?>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/services-tarifs">SERVICES & TARIFS</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/comptes-moyens-de-paiements" class="active">COMPTES & MOYENS DE PAIEMENT</a></li>
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
                        <?php if( is_page('Comptes et moyens de paiements (Aides ménagères)')): ?>
                            <ul>
                                <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Aide pour les clients<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Comptes et moyens de paiements </a></li>
                            </ul> 
                        <?php else: ?>
                            <ul>
                                <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Aide pour les clients<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Comptes et moyens de paiements </a></li>
                            </ul> 
                        <?php endif; ?>
                    </div>
                
                    <!-- file ariane mobile -->
                    <div class="file-ariane-mobile d-block d-md-none">
                        <?php if( is_page('Comptes et moyens de paiements (Aides ménagères)')): ?>
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
                                        Inscription
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <?php if( is_page('Comptes et moyens de paiements (Aides ménagères)')): ?>
                                        <?php while ($inscription_aides -> have_posts()) : $inscription_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($inscription_clients -> have_posts()) : $inscription_clients -> the_post(); ?>
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
                                        Gestion de profil
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <?php if(is_page('Comptes et moyens de paiements (Aides ménagères)')): ?>
                                        <?php while ($gestion_de_profil_aides -> have_posts()) : $gestion_de_profil_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($gestion_de_profil_clients -> have_posts()) : $gestion_de_profil_clients -> the_post(); ?>
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
                                        Connexion
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <?php if(is_page('Comptes et moyens de paiements (Aides ménagères)')): ?>
                                        <?php while ($connexion_aides -> have_posts()) : $connexion_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($connexion_clients -> have_posts()) : $connexion_clients -> the_post(); ?>
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
                                        Moyens de paiement
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <?php if(is_page('Comptes et moyens de paiements (Aides ménagères)')): ?>
                                        <?php while ($moyens_de_paiement_aides -> have_posts()) : $moyens_de_paiement_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($moyens_de_paiement_clients -> have_posts()) : $moyens_de_paiement_clients -> the_post(); ?>
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
                                    Facturation
                                    <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <?php if(is_page('Comptes et moyens de paiements (Aides ménagères)')): ?>
                                        <?php while ($facturation_aides -> have_posts()) : $facturation_aides -> the_post(); ?>
                                            <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php while ($facturation_clients -> have_posts()) : $facturation_clients -> the_post(); ?>
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