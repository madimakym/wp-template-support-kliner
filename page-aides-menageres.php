<?php get_header(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

<div class="section-1 d-none d-md-block" style="background-image: url(<?php echo $image['0'];?>);"></div>


<!-- section 1 mobile -->
<div class="section-1-mobile d-block d-lg-none">
	<div class="section-1" style="background-image: url(<?php echo $image['0'];?>); height: 260px;"></div>
		<div class="container">
			<div class="blc">
				<h1>Bienvenue dans l'assitance Kliner</h1>
			</div>
		</div>
	</div>  
</div>


<div class="section-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 menu-sidebar d-none d-md-block">
				<ul>
					<li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">CLIENTS</a></li>
					<li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres" class="active">AIDES MÉNAGÈRES</a></li>
				</ul>
			</div>
		
			<!-- Menu sidebar mobile -->
			<div class="col-lg-3 menu-sidebar-mobile d-block d-lg-none">
				<ul>
					<li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/clients">CLIENTS</a></li>
					<li><a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres" class="active">AIDES MÉNAGÈRES</a></li>
				</ul>
			</div>

			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-3 col-6 blc">
						<a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/services-tarifs/">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icone-services-et-prix.png" class="img-fluid" />
							<p>Services & tarifs</p>
						</a>
					</div>

					<div class="col-lg-3 col-6 blc">
						<a href="<?php echo esc_url(home_url( '/' ) ); ?>/aides-menageres/comptes-moyens-de-paiements/">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icône-compte-paiement.png" class="img-fluid" />
							<p>Comptes & Moyens de paiements</p>
						</a>
					</div>

					<div class="col-lg-3 col-6 blc">
						<a href="<?php echo esc_url(home_url( '/' ) ); ?>/utiliser-lapplication">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icône-application.png" class="img-fluid" />
							<p>Utiliser l'application </p>
						</a>
					</div>

					<div class="col-lg-3 col-6 blc">
						<a href="<?php echo esc_url(home_url( '/' ) ); ?>/disponibilite">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icone-disponibilite.jpg" class="img-fluid" />
							<p>Disponibilité</p>
						</a>
					</div>
				</div>

				<br><br>
				<div class="row">
					<div class="col-lg-3 col-6 blc">
						<a href="<?php echo esc_url(home_url( '/' ) ); ?>/qualite">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icone-qualite.png" class="img-fluid" />
							<p>Qualité</p>
						</a>
					</div>

					<div class="col-lg-3 col-6 blc">
						<a href="<?php echo esc_url(home_url( '/' ) ); ?>/protection">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icone-protection.png" class="img-fluid" />
							<p>Protection</p>
						</a>
					</div>

					<div class="col-lg-3 col-6 blc">
						<a href="<?php echo esc_url(home_url( '/' ) ); ?>/reclamation">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icone-reclamation.png" class="img-fluid" />
							<p>Réclamation</p>
						</a>
					</div>

					<div class="col-lg-3 col-6 blc">
						<a href="<?php echo esc_url(home_url( '/' ) ); ?>/nous-contacter">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icone-contact.png" class="img-fluid" />
							<p>Nous contacter</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 blc">
				<p><?php the_field('texte_s3'); ?></p>
			</div>

			<div class="col-lg-6 blc">
				<?php $picture = get_field('visuel_s3'); ?>
				<img src="<?php echo $picture['url']; ?>">
			</div>
		</div>
	</div>
</div>

<div class="section-4">
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-6 blc-left">
					<?php $picture = get_field('visuel_bloc_gauche_s4'); ?>
					 <img src="<?php echo $picture['url']; ?>">
					<p><?php the_field('texte_bloc_gauche_s4'); ?></p>
				</div>

				<div class="col-lg-6 blc-right">
					<?php $picture = get_field('visuel_bloc_droit_s4'); ?>
					 <img src="<?php echo $picture['url']; ?>">
					<p><?php the_field('texte_bloc_droit_s4'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section-5 d-none d-md-block">
	<div class="container">
		<div class="blc">
			<?php $picture = get_field('visuel_s5'); ?>
				 <img src="<?php echo $picture['url']; ?>">
			<p><?php the_field('texte_s5'); ?></p>
		</div>
	</div>  
</div>

<!-- section-5-mobile -->
<div class="section-5-mobile d-block d-lg-none">
	<div class="visuel">
		<?php $picture = get_field('visuel_s5'); ?>
		<img src="<?php echo $picture['url']; ?>">
	</div>
	
	<div class="container">
		<div class="blc">
				<p><?php the_field('texte_s5'); ?></p>
		</div>
	</div>  
</div>


<div class="section-6">
	<div class="container">
		<div class="">
			<div class="row">
				<div class="col-lg-6 blc-left">
				 <p><?php the_field('texte_s6'); ?></p>
				</div>

				<div class="col-lg-6 blc-right">
					<?php $picture = get_field('visuel_s6'); ?>
					<img src="<?php echo $picture['url']; ?>">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section-7">
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-6 blc-left">
					<?php $picture = get_field('visuel_s7'); ?>
					<img src="<?php echo $picture['url']; ?>">
				</div>

				<div class="col-lg-6 blc-right">
					<p><?php the_field('texte_s7'); ?></p>
				</div>
			</div>
		</div>

		<div class="pre-footer">
			<p><?php the_field('texte_s8'); ?></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
