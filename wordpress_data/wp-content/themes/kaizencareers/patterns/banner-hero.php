<?php
/**
 * Title: Hero
 * Slug: kaizencareers/banner-hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">


		<!-- wp:heading {"textAlign":"center","fontSize":"x-large","level":1} -->
		<h1 class="wp-block-heading has-text-align-center has-x-large-font-size">We Are Looking for You</h1>
		<!-- /wp:heading -->

	<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":{}}} -->
        <!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Yes, you. With over a thousand positions, we're so much more than just a car company. We have roles in Human Resources, Finance, Marketing, Sales, Operations, Information Technology, Customer Service, Research and Development, Legal, Administrative
 and more.</p>
        <!-- /wp:paragraph -->


     	<!-- /wp:spacer -->


	<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image alignwide size-full is-style-rounded">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/peoplebubbles.svg" alt="Diverse Roles" />
	</figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
