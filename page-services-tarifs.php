<?php get_header(); ?>

<?php
    // $args = array(
    //     'post_type' => array('services-tarifs'), 
    //     'posts_per_page' => 1,
    //     'order' => 'DESC'
    // );
    // $menage_repassage = new WP_Query($args);

   

    $menage_repassage = new WP_Query(array(
        'post_type'			=> 'services-tarifs',
        'posts_per_page'	=> -1,
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	 	=> 'categorie',
                'value'	  	=> array('clients'),
                'compare' 	=> 'IN',
            ),

            array(
                'key'	 	=> 'etiquettes',
                'value'	  	=> array('menage_repassage_a_domicile'),
                'compare' 	=> 'IN',
            ),
        ),
    ));

?>


<?php $picture = get_field('visuel'); ?>

<div class="rubrique">
    <div class="section-1 d-none d-lg-block" style="background-image: url(<?php echo $picture['url'];?>);">
        <div class="container">
            <div class="blc">
                <h1>Assistance Services & Tarifs </h1>
            </div>
        </div>  
    </div>

    <!-- section 1 mobile -->
    <div class="section-1-mobile d-block d-lg-none">
        <div class="section-1" style="background-image: url(<?php echo $picture['url'];?>);"></div>
        <div class="container">
            <div class="blc">
                <h1>Assistance <br>Services & Tarifs </h1>
            </div>
        </div>  
    </div>

    <div class="section-2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 menu-sidebar d-none d-lg-block">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/services-tarifs" class="active">SERVICES & TARIFS</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/comptes-moyens-de-paiements">COMPTES & MOYENS DE PAIEMENT</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/utiliser-lapplication">UTILISER L'APPLICATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/disponibilite">DISPONIBILITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/qualite">QUALITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/protection">PROTECTION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/qualite">RÉCLAMATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/nous-contacter">NOUS CONTACTER</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="file-ariane d-none d-lg-block">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#">Aide pour les clients<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#">Services & Tarifs </a></li>
                        </ul> 
                    </div>
                
                    <!-- file ariane mobile -->
                    <div class="file-ariane-mobile d-none d-lg-none">
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
                                    <?php while ($menage_repassage -> have_posts()) : $menage_repassage -> the_post(); ?>
                                        <a href="<?php the_permalink() ?>"> <?php the_title(); ?></a>
                                    <?php endwhile; ?>
                                     <?php //the_field('menage_&_repassage_a_domicile'); ?>
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
                                    <?php the_field('service_bnb'); ?>
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
                                    <?php the_field('nettoyage_de_bureaux'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default in">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                        Guide des prix
                                        <div class="icon-bottom float-right"></div>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <?php the_field('guide_des_prix'); ?>
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
                                    <?php the_field('suivi_administratif'); ?>
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