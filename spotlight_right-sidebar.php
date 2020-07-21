<?php if (is_front_page()){ ?>
<section class="spotlight right-sidebar cf">
	<h1><span class="screen-reader-text">Check out the latest news and articles.</span></h1>

	<div class="row toppadding">

	<?php $args = array(
           'post__not_in' => get_option( 'sticky_posts' ),
           'posts_per_page' => 3,
        );
		query_posts($args); ?>
	<ul class="spotlightList cf">
	<?php while (have_posts()) : the_post(); ?>
		<li class="span-33 cf">
			<div class="spotlightImage box">
				<?php if ( has_post_thumbnail() ) { ?>
					  <?php the_post_thumbnail('thumbnail'); ?>
				<?php }
					else{ ?>
						<img alt=" " src="<?php echo get_template_directory_uri(); ?>/images/default_blog_img.svg">
					<?php }
				?>
			</div>
			<div class="spotlightText">
				<h2 class="home link "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="spotlightDate"><?php the_date(); ?></div>
			    <?php the_excerpt(); ?>
			</div>
		</li>
        <?php endwhile; ?>
		<?php wp_reset_query(); ?>

	</ul>

	</div>
	<div class="sidebarWrapper">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
		<div class="sidebarfold">
			<svg width="38px" height="33px" viewBox="0 0 38 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			    <!-- Generator: Sketch 3.7.2 (28276) - http://www.bohemiancoding.com/sketch -->
			    <title>sidebar_fold</title>
			    <desc>Created with Sketch.</desc>
			    <defs></defs>
			    <g id="Home-page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			        <g id="Sub-Page" transform="translate(-970.000000, -233.000000)" fill="#91222F">
			            <g id="sidebar" transform="translate(970.000000, 232.000000)">
			                <polygon id="sidebar_fold" points="31.4492188 0.9375 0.130661505 33.2574997 37.1620868 33.2574997"></polygon>
			            </g>
			        </g>
			    </g>
			</svg>
		</div>
		<?php } ?>
		<?php get_sidebar(); ?></div>

</section>

<?php } else { ?>
<section class="spotlight_list">
	<h1><span class="screen-reader-text">Check out the latest news and articles.</span></h1>

	<div class="row toppadding archives-flex-container">

		<ul class="spotlightList archives-posts-ul">
		<?php while (have_posts()) : the_post(); ?>
			<li class="row archives-post-li">
				<div class="spotlightImage box">
					<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail('thumbnail'); ?>
					<?php }
						else{ ?>
							<img alt=" " src="<?php echo get_template_directory_uri(); ?>/images/default_blog_img.svg">
						<?php }
					?>
				</div>
				<div class="blog_details span-66">
					<h2 class="home link "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="date"><span class="screen-reader-text">Posted on </span><?php the_date(); ?> </div>
					<?php the_excerpt(); ?>
				</div>
			</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>

			<div class="postsNavigation">
				<?php the_posts_navigation(); ?>
			</div>
		</ul>

		<div class="archives-sidebar-not-front">
			<?php get_sidebar(); ?>
		</div>
	</div>

</section>

<style>
	.archives-flex-container {
		display: flex;
	}

	.archives-sidebar-not-front {
		color: #000;
		flex-grow: 1;
		margin-top: 15px;
	}

	.archives-posts-ul {
		flex-grow: 4;
	}

	.archives-flex-container .widget-area {
		width: 100%;
	}

	.span-66 {
		width: 80% !important;
		display: block;
	}

	.archives-post-li {
		display: flex;
		flex-wrap: wrap;
	}

	.widget-area .widget ul li a {
		overflow: visible;
		color: #0479a8;
	}

	.widget-area h1 {
		color: #c5050c;
	}

	.spotlight_list .blog_details {
		margin-left: 1em !important;
	}

	@media screen and (max-width: 768px) {
		/* override widget-area's display: none property on small screens*/
		.widget-area {
			display: block !important;
		}
		/* sidebar stacks below on small screens*/
		.archives-flex-container {
			flex-wrap: wrap;
		}
	}

</style>

<?php } ?>