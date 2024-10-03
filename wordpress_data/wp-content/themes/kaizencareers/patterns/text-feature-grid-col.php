<?php
/**
 * Title: Feature grid, 3 columns
 * Slug: kaizencareers/text-feature-grid-col
 * Categories: text, about
 * Viewport width: 1400
 * Description: A feature grid of 2 rows and 3 columns with headings and text.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center">
<?php echo esc_html_x( 'Our Mission Statement', 'Heading of the features', 'kaizencareers' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"1.25rem","selfStretch":"fixed"}}} -->
		<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Continuous improvement through strategic planning, effective leadership, increased efficiency, and customer-centric employees to encompass our namesake.', 'Sub-heading of the features', 'kaizencareers' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer">
	</div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-asterisk","fontSize":"medium","fontFamily":"body"} -->
			<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600">
				<?php echo esc_html_x( 'Customer Service', 'Sample feature heading', 'kaizencareers' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left"><?php echo esc_html_x( '
    Be easy to do business with. From beginning to end, ensure every customer experience is transparent and exceeds the customers’ expectations.
    Offer both our internal and external customers a lasting relationship built on trust, a passion for excellence, and a dedicated focus on continuous improvement.
    With our customer based mindset, we are confident in our ability to build a solid relationship with our customer through genuine interaction.
', 'Sample feature content', 'kaizencareers' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-asterisk","fontSize":"medium","fontFamily":"body"} -->
			<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'People', 'Sample feature heading', 'kaizencareers' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left"><?php echo esc_html_x( '
    We believe Kaizens’ success comes from our dedicated employees. Kaizen provides unparalleled training about the automotive industry, processes, business financials, and culture of the Kaizen Group, giving individuals the skills they need to secure a long and rewarding career in the automotive industry.
    Kaizen gives upward ability to grow within the company. From sales to a General Manager, the possibilities are endless.
', 'Sample feature content', 'kaizencareers' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
	<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer">
	</div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-asterisk","fontSize":"medium","fontFamily":"body"} -->
			<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600">
<?php echo esc_html_x( 'Community', 'Sample feature heading', 'kaizencareers' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left"><?php echo esc_html_x( '
    We believe it is our business to be a good neighbour. We participate in community programs/events, helping to improve the quality of life in the communities we reside in.
    We encourage our employees to develop relationships with the community where they work and live. This will create positive action and our employee’s ability to reach out and give back.', 'Sample feature content', 'kaizencareers' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->


		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-asterisk","fontSize":"medium","fontFamily":"body"} -->
			<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600">
<?php echo esc_html_x( 'Continuous Improvement', 'Sample heading', 'kaizencareers' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left"><?php echo esc_html_x( '
    “We are stronger together than we are apart” has driven significant decisions and enables us to execute effectively. This fundamental shift and alignment of our enterprises’ structure and operations integrates all facets of the business under one automotive group.
    Our focus for growth, diversification, operation efficiencies, and processes give us the advantage in leading the automotive industry.
    Hard work and loyalty are ingrained in our business, and are valued within our culture.', 'Sample content', 'kaizencareers' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
