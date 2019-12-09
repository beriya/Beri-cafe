<?php
get_header(); ?>

	<div id="primary-404" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'This page could not be found!', 'coffee house' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php esc_html_e( 'sorry!!!.The page you are looking for is not available.', 'coffee house' );?></p>
					
				<div class="error-homepage">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php esc_html_e('Back To Home','coffee house'); ?>
					</a>
				</div>

				</div>
			</section>

		</main>
	</div>

<?php get_footer();