<!-- Slider Area -->
<section class="slider">
	<div class="hero-slider">
		<!-- Start Single Slider -->
		<?php
		$args = array(
			'post_type'      => 'medislider',
			'posts_per_page' => -1,
		);
		$loop = new WP_Query($args);
		while ($loop->have_posts()) {
			$loop->the_post();
		?>
			<div class="single-slider" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="text">
								<h1><?php the_title(); ?></h1>
								<p><?php the_content(); ?></p>
								<?php
								$appointment_button_text = get_post_meta(get_the_ID(), '_appointment_button_text', true);
								$appointment_button_url = get_post_meta(get_the_ID(), '_appointment_button_url', true);								
								$more_button_text = get_post_meta(get_the_ID(), '_more_button_text', true);
								$more_button_url = get_post_meta(get_the_ID(), '_more_button_url', true);								
								?>
								<div class="button">
									<a href="<?php echo esc_url($appointment_button_url); ?>" class="btn"><?php echo esc_html($appointment_button_text); ?></a>
									<a href="<?php echo esc_url($more_button_url); ?>" class="btn primary"><?php echo esc_html($more_button_text); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
		?>

		<!-- End Single Slider -->
	</div>
</section>
<!--/ End Slider Area -->
