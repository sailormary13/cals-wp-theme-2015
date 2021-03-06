<?php
/**
 * @package UW Madison WP 2015
 */
?>
<?php $postedbylocation = get_theme_mod('uw-madison-wp-2015_postedby_id');
	  $hidefeaturedimage = get_field('hide_featured_image_in_article');
	  $metatitle = get_field('meta_title');
	  $subtitleplacement = get_theme_mod('uw-madison-wp-2015_post_subtitle_setting_id'); ?>



<ul>
    <?php
        $get_parent_cats = array(
            'parent' => '0' //get top level categories only
        );

        $all_categories = get_categories( $get_parent_cats );//get parent categories

        foreach( $all_categories as $single_category ){

			$slug = $single_category->slug;

			if($slug == "issue") {

            //for each category, get the ID
			$catID = $single_category->cat_ID;

			//$post_categories = wp_get_post_categories( $post_id );

            $get_children_cats = array(
                'child_of' => $catID, //get children of this parent using the catID variable from earlier
				'hide_empty'
			);

			$querystr = '&child_of='.$catID.'&hide_empty';

			$child_cats = get_categories( $get_children_cats );//get children of parent category

			foreach( $child_cats as $child_cat ){
				$currentcat = $child_cat->name;

				$post_categories = wp_get_post_categories( get_the_ID() );

				//echo $child_cat->name . ', ';

				foreach($post_categories as $c){
					$catname = get_cat_name( $c );
					if($catname == $currentcat) {
						//echo "found match";
						$issuecat = $catname;
					}

				}
			}

			}
        } //end of categories logic ?>






</ul>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="deptname"><span class="issue"><?php echo $issuecat; ?></span></div>
	<?php if($metatitle) { ?>
		<h3 class="metatitle"><?php echo $metatitle; ?></h3>
		<style>
			h3.metatitle {
				border-bottom: none;
				font-weight: 700;
				font-family: "Verlag-Black";
				color: rgba(0,0,0,0.5);
				font-size: 0.8rem;
				text-transform: uppercase;
				margin-bottom: .5rem;
			}

.entry-meta .metaline {
							display: inline-block;
							font-size: 0.9rem;
							letter-spacing: 0.3px;
							color: rgba(0,0,0,0.5);
							text-transform: unset;
							margin-right: 0.3rem;
						}

		</style>
	<?php } ?>

		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.


				$post_title_mod = get_theme_mod('uw-madison-wp-2015_post_featured_setting_id');
				if($post_title_mod == "title_above") { ?>
					<style>
						.featured_title_above {
							margin-bottom: 1rem;
						}

						.verlag-option h1.entry-title, .verlag-option h1.page-title {
							text-transform: unset;
						}

						.featured_title_above .entry-meta .posted-on, .featured_title .entry-meta .posted-on, .featured_title_above .entry-meta .byline, .featured_title .entry-meta .byline, .entry-meta .metaline {
							display: inline-block;
							font-size: 0.9rem;
							letter-spacing: 0.3px;
							color: rgba(0,0,0,0.5);
							text-transform: unset;
						}



					</style>

					<div class="featured_title_above">
					<?php if($subtitleplacement != "bottom") { ?>
				  		<?php if(get_field("sub_title")) { ?>
				  			<h2 class="entrySubTitle"><?php the_field("sub_title"); ?></h2>
				  		<?php } ?>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php } else { ?>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php if(get_field("sub_title")) { ?>
				  			<h2 class="entrySubTitle"><?php the_field("sub_title"); ?></h2>
				  	<?php } ?>

					<?php } ?>

					<div class="entry-meta">


						<?php
							if(get_field('written_by')) {

								//echo '<div class="byline" style="display: block; margin-top: 0.5rem;"> By ';
								//the_field('written_by');
								//echo '</div>';
							} else {
								//uw_madison_wp_2015_posted_on();
							} ?>


							<?php if($postedbylocation != "lower") {

									if(get_field('hide_posted_date') == false) {
										uw_madison_wp_2015_posted_on();
										echo " | ";
									}
									if(get_field('written_by')) {
										echo '<span style="color: rgba(0,0,0,0.5);"><div class="byline" style="display: inline-block; margin-top: 0.5rem;"> By ';
										the_field('written_by');
										echo '</div></span>';
									} ?>

									<?php

								// check if the repeater field has rows of data
								if( have_rows('meta_values') ):

									// loop through the rows of data
									while ( have_rows('meta_values') ) : the_row();
										echo "<span class='metaline'> | ";
										// display a sub field value
										the_sub_field('value');
										echo " </span>";


									endwhile;

								else :

									// no rows found

								endif;

								?>

							<?php } else { ?>

								<?php if(get_field('hide_posted_date') == false) { ?>
									<div class="posted-on"><?php the_date(); ?></div>
								<?php } ?>
								<?php if(get_field('written_by')) {
										echo '<span style="color: rgba(0,0,0,0.5);"> | <div class="byline" style="display: inline-block; margin-top: 0.5rem;"> By ';
										the_field('written_by');
										echo '</div></span>';
									} ?>

								<?php

								// check if the repeater field has rows of data
								if( have_rows('meta_values') ):

									// loop through the rows of data
									while ( have_rows('meta_values') ) : the_row();
										echo "<span class='metaline'> | ";
										// display a sub field value
										the_sub_field('value');
										echo " </span>";


									endwhile;

								else :

									// no rows found

								endif;

								?>


							<?php	}  ?>

					</div><!-- .entry-meta -->
				</div>
				<?php if(!$hidefeaturedimage) { ?>
					<?php the_post_thumbnail('large'); ?>
					<div class="featuredCaption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></div>
				<?php } ?>

				<?php } else { ?>

				<?php if(!$hidefeaturedimage) { ?>
					<?php the_post_thumbnail('large'); ?>
				<?php } ?>

			  	<div class="featured_title">
				  <?php if($subtitleplacement != "bottom") { ?>
				  		<?php if(get_field("sub_title")) { ?>
				  			<h2 class="entrySubTitle"><?php the_field("sub_title"); ?></h2>
				  		<?php } ?>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php } else { ?>
						<?php the_title( '<h1 class="entry-title" style="padding-bottom: 0px;">', '</h1>' ); ?>
						<?php if(get_field("sub_title")) { ?>
				  			<h2 class="entrySubTitle" style="margin-top: 0px; padding-bottom: 2rem;"><?php the_field("sub_title"); ?></h2>
				  	<?php } ?>

					<?php } ?>


					<div class="entry-meta">


						<?php
							if(get_field('written_by')) {

								//echo '<div class="byline" style="display: block; margin-top: 0.5rem;"> By ';
								//the_field('written_by');
								//echo '</div>';
							} else {
								//uw_madison_wp_2015_posted_on();
							} ?>


							<?php if($postedbylocation != "lower") {
								if(get_field('hide_posted_date') == false) {
									uw_madison_wp_2015_posted_on();
									echo " | ";
								}
								if(get_field('written_by')) {
									echo '<span style="color: rgba(255,255,255,0.6);"><div class="byline" style="display: inline-block; margin-top: 0.5rem;"> By ';
									the_field('written_by');
									echo '</div></span>'; ?>

									<?php

								// check if the repeater field has rows of data
								if( have_rows('meta_values') ):

									// loop through the rows of data
									while ( have_rows('meta_values') ) : the_row();
										echo "<span class='metaline'> | ";
										// display a sub field value
										the_sub_field('value');
										echo " </span>";


									endwhile;

								else :

									// no rows found

								endif;

								?>

								<?php } else {
									if(get_field('hide_posted_date') == false) {
										uw_madison_wp_2015_posted_on();
									}
								}
							} else { ?>
								<?php if(get_field('hide_posted_date') == false) { ?>
									<div class="posted-on"><?php the_date(); ?></div>
								<?php } ?>


							<?php	}  ?>

					</div><!-- .entry-meta -->
				</div>

			<?php } ?>
		<?php	} else { ?>


					<?php if($subtitleplacement != "bottom") { ?>
				  		<?php if(get_field("sub_title")) { ?>
				  			<h2 class="entrySubTitle"><?php the_field("sub_title"); ?></h2>
				  		<?php } ?>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php } else { ?>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php if(get_field("sub_title")) { ?>
				  			<h2 class="entrySubTitle"><?php the_field("sub_title"); ?></h2>
				  	<?php } ?>

					<?php } ?>

					<div class="entry-meta">


						<?php if($postedbylocation != "lower") {


if(get_field('hide_posted_date') == false) {
	uw_madison_wp_2015_posted_on();
	echo " | ";
}
								if(get_field('written_by')) {
									echo '<span style="color: rgba(0,0,0,0.5);"><div class="byline" style="display: inline-block; margin-top: 0.5rem;"> By ';
									the_field('written_by');
									echo '</div></span>';
								}



								// check if the repeater field has rows of data
								if( have_rows('meta_values') ):

									// loop through the rows of data
									while ( have_rows('meta_values') ) : the_row();
									echo "<span class='metaline'> | ";
										// display a sub field value
										the_sub_field('value');
										echo " </span>";

									endwhile;

								else :

									// no rows found

								endif;



						} else { ?>


							<?php if(get_field('hide_posted_date') == false) { ?>
									<div class="posted-on"><?php the_date(); ?> | </div>
								<?php } ?>
							<?php if(get_field('written_by')) {
									echo '<span style="color: rgba(0,0,0,0.5);"><div class="byline" style="display: inline-block; margin-top: 0.5rem;"> By ';
									the_field('written_by');
									echo '</div></span>';
								} ?>

								<?php

// check if the repeater field has rows of data
if( have_rows('meta_values') ):

	// loop through the rows of data
	while ( have_rows('meta_values') ) : the_row();
	echo "<span class='metaline'> | ";
		// display a sub field value
		the_sub_field('value');
		echo " </span>";


	endwhile;

else :

	// no rows found

endif;

?>


						<?php	}  ?>

						<style>
							.post h1.entry-title {
								text-transform: unset;
							}

							.post .entry-meta .byline, .post .entry-meta .posted-on  {
								display: inline-block;
								font-size: 0.9rem;
								font-weight: 600;
    							letter-spacing: 0.3px;
								color: rgba(0,0,0,0.5);
								text-transform: unset;

							}
						</style>


					</div><!-- .entry-meta -->

		<?php } ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php if($postedbylocation != "lower") {
			//uw_madison_wp_2015_posted_on();


			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'uw-madison-wp-2015' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'uw-madison-wp-2015' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'This article was posted in %1$s and tagged %2$s.', 'uw-madison-wp-2015' );
			} elseif ( '' != $categories_list ) {
				$utility_text = __( 'This article was posted in %1$s.', 'uw-madison-wp-2015' );
			} else {
				$utility_text = __( 'This article was posted by <a href="%6$s">%5$s</a>.', 'uw-madison-wp-2015' );
			}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);


		}  ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'uw-madison-wp-2015' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
