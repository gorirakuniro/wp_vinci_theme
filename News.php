<?php
/*
Template Name: News
*/
?>


<?php get_header(); ?>


<div class="news">
    <div class="news__title">News</div>

    <div class="news__wrapper">

        <!-- カスタム投稿タイプを表示する -->
        <?php
        $args = array(
            'post_type' => 'news',
            'posts_per_page' => -1
        );

        $my_query = new WP_Query($args);
        ?>

        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="news__lists">
                <div class="news__list">
                    <div class="news__list--date"><?php the_time(get_option('date_format')); ?></div>
                    <div class="news__list--title"><?php the_title(); ?></div>
                    <div class="news__list--tag">
                        <div class="news__list--tag--item">
                            <?php
                            if ($terms = get_the_terms($post->ID, 'news-cat')) {
                                foreach ($terms as $term) {
                                    echo esc_html($term->slug);
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="news__list--image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                    <p class="news__list--text"><?php echo get_the_excerpt(); ?></p>
                    <!-- <div class="news__list--member">
                        <div class="news__list--member-icon">
                            <img src="news/001-vinciHP/0.png" alt="" />
                        </div>
                        <div class="news__list--member-name">古賀旭</div>
                    </div> -->
                </div>
            </div>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    </div>
</div>


<?php get_footer(); ?>