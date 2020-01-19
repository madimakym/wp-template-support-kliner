<?php get_header(); ?>

<?php
        global $post; $picture = wp_get_attachment_url( get_post_thumbnail_id(99) );
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
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/services-tarifs" class="active">SEVICES & TARIFS</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/comptes-moyens-de-paiements">COMPTES & MOYENS DE PAIEMENT</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/utiliser-lapplication">UTILISER L'APPLICATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/disponibilite">DISPONIBILITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/qualite">QUALITÉ</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/protection">PROTECTION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/reclamation">RÉCLAMATION</a></li>
                        <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/nous-contacter">NOUS CONTACTER</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="file-ariane d-none d-lg-block">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">Aide & Support <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a>Aide pour les clients <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a>Services & Tarifs <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                            <li><a><?php $sous_rubrique = get_the_category(); echo $sous_rubrique[2]->cat_name; ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-right.png" class="img-fluid"/></a></li>
                        </ul> 
                    </div>
                
                    <!-- file ariane mobile -->
                    <div class="file-ariane-mobile d-block d-md-none">
                       <a href="<?php echo esc_url(home_url( '/clients/services-tarifs/' ) ); ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons8-left.png" class="img-fluid"/><?php $sous_rubrique = get_the_category(); echo $sous_rubrique[0]->cat_name; ?></a>
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