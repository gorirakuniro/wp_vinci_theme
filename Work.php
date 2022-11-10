<?php
/*
Template Name: Work
*/
?>


<?php get_header(); ?>

<h2>Work</h2>

<div class="workslist">
	<div class="workslist__text">
		<div class="workslist__title">Work</div>
		<div class="workslist__items">
			<div class="workslist__items--item">Movie</div>
			<div class="workslist__items--item">Graphic Design</div>
			<div class="workslist__items--item">Web</div>
			<div class="workslist__items--item">Event</div>
		</div>
	</div>
	<div class="workslist___works">
		<ul class="workslist__lists">
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => -1, // 全て投稿表示
			);
			$the_query = new WP_Query($args);
			?>

			<?php if ($the_query->have_posts()) : ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<li class="workslist__lists--item">
						<a href="<?php the_permalink(); ?>">
							<div class="workslist__lists--item--img">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="" />
							</div>
						</a>
						<div class="workslist__lists--text">
							<div class="workslist__lists--date"><?php the_time('Y'); ?>｜<?php echo get_post_time('F'); ?></div>
							<div class="workslist__lists--title"><?php the_title(); ?></div>
							<div class="workslist__lists--mov">
								<?php if (has_category()) : ?>
									<?php
									$categories = get_the_category();
									if (!empty($categories)) {
										foreach ($categories as $category) {
											echo '<a href=' . get_category_link($category->term_id) . '>' . esc_html($category->name) . '</a> &nbsp;';
										}
									}
									?>
								<?php endif; ?>
							</div>
						</div>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>


		</ul>
	</div>
</div>


<?php get_footer(); ?>