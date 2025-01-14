<?php
/**
 * Title: Centered testimonial
 * Slug: kaizencareers/testimonial-centered
 * Keywords: quote, review, about
 * Categories: testimonials, text
 * Viewport width: 1300
 * Description: A centered testimonial section with a avatar, name, and job title.
 */
?>

<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Testimonial', 'Name of testimonial pattern', 'kaizencareers' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2"}},"textColor":"base","fontSize":"x-large","fontFamily":"heading"} -->
		<p class="has-text-align-center has-base-color has-text-color has-heading-font-family has-x-large-font-size" style="line-height:1.2">
			<em><?php echo esc_html_x( 'We&#39;re no strangers to love. You know the rules and so do I. A full commitment&#39;s what I&#39;m thinking of. Never gonna give you up. Never gonna let you down. Never gonna run around and desert you.', 'Testimonial Text or Review Text Got From the Person', 'kaizencareers' ); ?></em>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Testimonial source', 'Name of testimonial citation group', 'kaizencareers' ); ?>"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"align":"center","width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized has-custom-border">
				<img alt="" style="border-radius:100px;aspect-ratio:1;object-fit:cover;width:60px" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"0"}}}} -->
			<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:0"><?php echo esc_html_x( 'Rick', 'Name of Person Provided the Testimonial', 'kaizencareers' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"contrast-3","fontSize":"small"} -->
			<p class="has-text-align-center has-contrast-3-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html_x( 'Reputable Singer', 'Designation of Person Provided Testimonial', 'kaizencareers' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
