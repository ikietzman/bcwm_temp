<?php
/*
 Template Name: Our Investment Philosophy
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">
						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div class="page-header" style="background-image:url('<?php the_field('header_image'); ?>')">
								<?php
									if ( function_exists('yoast_breadcrumb') ) {
										yoast_breadcrumb('
										<p id="breadcrumbs">','</p>
										');
									}
								?>

								<h1 class="page-title"><?php the_title(); ?></h1>
							</div>

							<div class="page-content">
								<div class="page-content-inner">
									<div class="philosophy-left">
									<?php

										// check if the repeater field has rows of data
										if( have_rows('content_sections') ):

										 	// loop through the rows of data
										    while ( have_rows('content_sections') ) : the_row();

										        // display a sub field value
														echo '<a name="' . get_sub_field('anchor_name') . '" ></a>';
														echo '<h2>' . get_sub_field('title') . '</h2>';
														echo get_sub_field('content');


										    endwhile;

										else :

										    // no rows found

										endif;

										?>
								</div>
									<div class="philosophy-right">
									<?php

										// check if the repeater field has rows of data
										if( have_rows('icons') ):

										 	// loop through the rows of data
										    while ( have_rows('icons') ) : the_row();

										        // display a sub field value
														echo '<img class="philosophy-icon" src="' . get_sub_field('image') . '" />';


										    endwhile;

										else :

										    // no rows found

										endif;

										?>
								</div>
								</div>
							</div>



							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
