<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hpy
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="cta-block">
				<h1>Welcome to happy Kite</h1>
				<p>We're an agency, a good agency - soon to be an even better agency once we've hired our new web developer!</p>
				<button type="button" class="btn btn-primary">Work with us</button>
			</div>
		</div>
	</div>
</div>
<div class="cta-list-bg">
	<div class="container">
		<div class="cta-list">
			<div class="row">
				<div class="col-sm-12">
					<h2>How can we help?</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 cta-list-service">
					<img src="/wp-content/themes/happykite/assets/img/ico-design.png" alt="">
					<h4>Design ux</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#">Learn More</a>
				</div>
				<div class="col-sm-3 cta-list-service">
					<img src="/wp-content/themes/happykite/assets/img/ico-dev.png" alt="">
					<h4>wordpress developmnet</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#">Learn More</a>
				</div>
				<div class="col-sm-3 cta-list-service">
					<img src="/wp-content/themes/happykite/assets/img/ico-marketing.png" alt="">
					<h4>digital marketing</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#">Learn More</a>
				</div>
				<div class="col-sm-3 cta-list-service">
					<img src="/wp-content/themes/happykite/assets/img/ico-support.png" alt="">
					<h4>support &amp; maintenance</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container portfolio">
	<div class="row">
		<div class="col-sm-12">
			<h2>Some of our work...</h2>
		</div>
		<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<div class="col-sm-4">
				<div class="portfolio-box">
					<!-- <img src="/wp-content/themes/happykite/assets/img/asset-1.jpg" alt=""> -->
					<?php the_post_thumbnail(); ?>
					<div class="portfolio-content">
						<h4><?php the_title(); ?></h4>
						 <?php the_content(); ?>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
						<a href="<?php the_permalink() ?>">Learn More</a>
					</div>
				</div>
			</div>
		<?php
			endwhile;
			wp_reset_postdata();
		?>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="info-company">
				<h2>who are we anyway</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."Contenido aquí, contenido aquí".</p>
				<p class="blur-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."Contenido aquí, contenido aquí".</p>
			</div>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>
