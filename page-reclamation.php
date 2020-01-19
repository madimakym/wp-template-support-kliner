<?php get_header(); ?>

<?php
    // clients
    $reclamation_clients = new WP_Query(array(
        'category_name'			=> 'reclamation-clients',
    ));

    // aides menageres
    $reclamation_aides = new WP_Query(array(
        'category_name'			=> 'reclamation-aides',
    ));
?>


<?php $picture = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

<div class="rubrique">
    <div class="section-1 d-none d-lg-block" style="background-image: url(<?php echo $picture['0'];?>);">
        <div class="container">
            <div class="blc">
                <h1>Assistance Reclamation</h1>
            </div>
        </div>  
    </div>

    <!-- section 1 mobile -->
    <div class="section-1-mobile d-block d-lg-none">
        <div class="section-1" style="background-image: url(<?php echo $picture['0'];?>);"></div>
        <div class="container">
            <div class="blc">
                <h1>Assistance <br>Reclamation</h1>
            </div>
        </div>  
    </div>

    <div class="section-2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 menu-sidebar d-none d-lg-block">
                    <?php if( is_page('Reclamation (Aides ménagères)')): ?>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/services-tarifs">SERVICES & TARIFS</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/comptes-moyens-de-paiements">COMPTES & MOYENS DE PAIEMENT</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/utiliser-lapplication">UTILISER L'APPLICATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/disponibilite">DISPONIBILITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/qualite">QUALITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/protection">PROTECTION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/reclamation" class="active">RÉCLAMATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/nous-contacter">NOUS CONTACTER</a></li>
                        </ul>
                    <?php else: ?>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/services-tarifs">SERVICES & TARIFS</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/comptes-moyens-de-paiements">COMPTES & MOYENS DE PAIEMENT</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/utiliser-lapplication">UTILISER L'APPLICATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/disponibilite">DISPONIBILITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/qualite">QUALITÉ</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/protection">PROTECTION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/reclamation" class="active">RÉCLAMATION</a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients/nous-contacter">NOUS CONTACTER</a></li>
                        </ul>
                    <?php endif; ?>
                </div>


                <div class="col-lg-9">
                    <div class="file-ariane d-none d-lg-block">
                        <?php if( is_page('Reclamation (Aides ménagères)')): ?>
                            <ul>
                                <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Aide pour les clients<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Reclamation </a></li>
                            </ul> 
                        <?php else: ?>
                            <ul>
                                <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Aide pour les clients<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                                <li><a href="#">Reclamation </a></li>
                            </ul> 
                        <?php endif; ?>
                    </div>
                
                    <!-- file ariane mobile -->
                    <div class="file-ariane-mobile d-block d-md-none">
                        <?php if( is_page('Reclamation (Aides ménagères)')): ?>
                           <a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons8-left.png" class="img-fluid"/>Aide pour les clients</a>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons8-left.png" class="img-fluid"/>Aide pour les clients</a>
                        <?php endif; ?>
                    </div>
                    
                    <div class="panel-body">
                        <?php if( is_page('Reclamation (Aides ménagères)')): ?>
                            <?php while ($reclamation_aides -> have_posts()) : $reclamation_aides -> the_post(); ?>
                                <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                <?php endwhile; ?>
                            <?php else: ?>
                            <?php while ($reclamation_clients -> have_posts()) : $reclamation_clients -> the_post(); ?>
                                <p><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></p>
                                <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
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