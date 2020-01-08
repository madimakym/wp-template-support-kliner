<?php get_header(); ?>

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
        <div class="section-1" style="background-image: url(<?php echo $picture['url'];?>);"></div>
        <div class="container">
            <div class="blc">
                <h1>Assistance <br>Services & Tarifs </h1>
            </div>
        </div>  
    </div>

        <?php 
            $category = get_the_category();
            // echo $category[2]->slug; 
        ?>  
        <?php //$rubrique = get_the_category(); echo $rubrique[1]->cat_name; ?>

        
        <?php 
            $category = get_the_category(); 
            if($category[1]->slug == 'protection-clients'){echo 'active';}
            // echo $category[0]->slug;  echo '<br>';
            // echo $category[1]->slug;  echo '<br>';
            // echo $category[2]->slug; 
        ?>


    <?php 

        // $cat = get_the_category(); 
        // $parentCatName = get_cat_name($cat[0]->parent); 
        
        
        // if($parentCatName == 'Services & tarifs'){
        //     $class_active_services = 'active';
        // } 
        
        // elseif($parentCatName == 'Comptes et moyens de paiements'){
        //     $class_active_comptes = 'active';
        // }

        // elseif($parentCatName == 'Utiliser l’application'){
        //     $class_active_utiliser = 'active';
        // }

        // elseif($parentCatName == 'Qualité'){
        //     $class_active_qualite = 'active';
        // }

        // elseif($parentCatName == 'Disponibilité'){
        //     $class_active_disponibilite = 'active';
        // }

        // elseif($parentCatName == 'Protection'){
        //     $class_active_protection = 'active';
        // }

        // elseif($parentCatName == 'Réclamation'){
        //     $class_active_reclamation = 'active';
        // }
        // elseif($parentCatName == 'Nous contacter'){
        //     $class_active_nous_contacter = 'active';
        // }
        // else {
        //     $class_active_comptes = ' ';
        // }
       
        // $assurance_clients = new WP_Query(array(
        //     'category_name'			=> 'assurance-clients',
        // ));


        //Rubrique
        // if(in_category('services-tarifs-clients')){
        //     $rubrique = 'Service & Tarifs';
        // }

        // if(in_category('comptes-et-moyens-de-paiements-clients')){
        //     $rubrique = 'Comptes et moyens de paiements';
        // }

        // // Sous rubrique
        // if(in_category('menage-repassage-a-domicile-client')){
        //     $sousrubrique = 'Ménage & Repassage à domicile';
        // }
        
        // if(in_category('service-bnb-clients')){
        //     $sousrubrique = 'Service BnB';
        // }
    ?>
    
    <div class="section-2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 menu-sidebar d-none d-lg-block">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/services-tarifs" class="<?php $category = get_the_category(); if($category[1]->slug == 'services-tarifs-clients'){echo 'active';}?>">SEVICES & TARIFS</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/comptes-moyens-de-paiements" class="<?php $category = get_the_category(); if($category[1]->slug == 'comptes-et-moyens-de-paiements-clients'){echo 'active';}?>">COMPTES & MOYENS DE PAIEMENT</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/utiliser-lapplication" class="<?php $category = get_the_category(); if($category[1]->slug == 'utiliser-lapplication-clients'){echo 'active';}?>">UTILISER L'APPLICATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/disponibilite" class="<?php $category = get_the_category(); if($category[1]->slug == 'disponibilite-clients'){echo 'active';}?>">DISPONIBILITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/qualite" class="<?php $category = get_the_category(); if($category[1]->slug == 'qualite-clients'){echo 'active';}?>">QUALITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/protection" class="<?php $category = get_the_category(); if($category[1]->slug == 'protection-clients'){echo 'active';}?>">PROTECTION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/reclamation" class="<?php $category = get_the_category(); if($category[1]->slug == 'reclamation-clients'){echo 'active';}?>">RÉCLAMATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/nous-contacter">NOUS CONTACTER</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="file-ariane d-none d-lg-block">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#">Aide pour les clients <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#"><?php $rubrique = get_the_category(); echo $rubrique[1]->cat_name; ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#"><?php $sous_rubrique = get_the_category(); echo $sous_rubrique[2]->cat_name; ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                        </ul> 
                    </div>
                
                    <!-- file ariane mobile -->
                    <div class="file-ariane-mobile d-none d-lg-none">
                       <a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons8-left.png" class="img-fluid"/>Aide pour les clients</a>
                    </div>
                   
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div>
                                <h5><?php the_title(); ?></h5>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

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