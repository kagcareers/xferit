<?php
/**
 * Title: Text with alternating images
 * Slug: kaizencareers/text-alternating-images
 * Categories: text, about
 * Viewport width: 1400
 * Description: A text section, then a two column section with text in one and image in another.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:heading {"level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading is-style-asterisk"><?php echo esc_html_x( 'Work Life Balance', 'Sample list heading', 'kaizencareers' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
				<ul class="is-style-checkmark-list" style="line-height:1.75">

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Regular Team Events for Staff and Their Families.', 'Sample list item', 'kaizencareers' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Smart, Driven, Amazing Coworkers.', 'Sample list item', 'kaizencareers' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Professional Development Opportunities', 'Sample list item', 'kaizencareers' ); ?></li>
					<!-- /wp:list-item -->

				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="wp-block-image size-large is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photos/a.jpg" alt="<?php esc_attr_e( 'Tourist taking photo of a building', 'kaizencareers' ); ?>" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="wp-block-image size-large is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photos/b.jpg" alt="<?php esc_attr_e( 'Windows of a building in Nuremberg, Germany', 'kaizencareers' ); ?>" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:heading {"level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading is-style-asterisk"><?php echo esc_html_x( 'Close to You', 'Sample heading', 'kaizencareers' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'Offices and Operations In', 'Sample heading', 'kaizencareers' ); ?></p>
				<!-- /wp:heading -->


				<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
				<ul class="is-style-checkmark-list" style="line-height:1.75">
					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Canada and the United States', 'Sample list item', 'kaizencareers' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( '20+ Cities', 'Sample list item', 'kaizencareers' ); ?></li>
					<!-- /wp:list-item -->

				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

				<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:heading {"level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading is-style-asterisk"><?php echo esc_html_x( 'Corporate Excellence', 'Sample list heading', 'kaizencareers' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
				<ul class="is-style-checkmark-list" style="line-height:1.75">

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Customer Satisfaction Focus', 'Sample list item', 'kaizencareers' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Leadership Development.', 'Sample list item', 'kaizencareers' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Recognition Programs.', 'Sample list item', 'kaizencareers' ); ?></li>
					<!-- /wp:list-item -->

				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="wp-block-image size-large is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photos/d.jpg" alt="<?php esc_attr_e( 'Tourist taking photo of a building', 'kaizencareers' ); ?>" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->



	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
