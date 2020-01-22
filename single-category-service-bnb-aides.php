<?php get_header(); ?>

<?php
        global $post;
        $picture = wp_get_attachment_url( get_post_thumbnail_id(120) );
?>

<div class="rubrique">
    <div class="section-1 d-none d-lg-block" style="background-image: url(<?php echo $picture;?>);">
        <div class="container">
            <div class="blc">
                <h1>Assistance Services & Tarifs </h1>
            </div>
        </div>  
    </div>

    <!-- section 1 mobile -->
    <div class="section-1-mobile d-block d-lg-none">
        <div class="section-1" style="background-image: url(<?php echo $picture;?>);"></div>
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

    
    <div class="section-2 ">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-3 menu-sidebar d-none d-lg-block">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/services-tarifs" class="<?php $category = get_the_category(); if($category[1]->slug == 'services-tarifs-clients'){echo 'active';}?>">SEVICES & TARIFS</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/comptes-moyens-de-paiements" class="<?php $category = get_the_category(); if($category[1]->slug == 'comptes-et-moyens-de-paiements-clients'){echo 'active';}?>">COMPTES & MOYENS DE PAIEMENT</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/utiliser-lapplication" class="<?php $category = get_the_category(); if($category[1]->slug == 'utiliser-lapplication-clients'){echo 'active';}?>">UTILISER L'APPLICATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/disponibilite" class="<?php $category = get_the_category(); if($category[1]->slug == 'disponibilite-clients'){echo 'active';}?>">DISPONIBILITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/qualite" class="<?php $category = get_the_category(); if($category[1]->slug == 'qualite-clients'){echo 'active';}?>">QUALITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/protection" class="<?php $category = get_the_category(); if($category[1]->slug == 'protection-clients'){echo 'active';}?>">PROTECTION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/reclamation" class="<?php $category = get_the_category(); if($category[1]->slug == 'reclamation-clients'){echo 'active';}?>">RÉCLAMATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/nous-contacter">NOUS CONTACTER</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="file-ariane d-none d-lg-block">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres">Aide pour les clients <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/services-tarifs"><?php $rubrique = get_the_category(); echo $rubrique[1]->cat_name; ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a href="#"><?php $sous_rubrique = get_the_category(); echo $sous_rubrique[2]->cat_name; ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                        </ul> 
                    </div>
                
                    <!-- file ariane mobile -->
                    <div class="file-ariane-mobile d-none d-lg-none">
                       <a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons8-left.png" class="img-fluid"/>Aide pour les clients</a>
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