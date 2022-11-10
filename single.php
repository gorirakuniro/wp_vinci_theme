<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <div class="workitem">
            <div class="workitem__left">
                <ul class="workitems__list">
                    <li class="workitems__img">
                        <iframe src="<?php echo catch_post_movie(); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </li>

                    <!-- 画像 -->
                    <?php getImage(); ?>
                </ul>
            </div>

            <div class="workitem__right">
                <div class="up_btn"><i class="fas fa-angle-up"></i></div>

                <!-- タイトル -->
                <div class="workitem__title"><?php the_title(); ?></div>

                <!-- サブメニュー -->
                <div class="workitem__sub">
                    <?php if ($terms = get_the_terms($post->ID, 'client')) {
                        foreach ($terms as $term) {
                            echo esc_html($term->name);
                        }
                    }
                    ?>
                </div>

                <!-- コンテンツ名 -->
                <div class="workitem__tab">
                    <?php if (has_category()) : ?>
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                echo '<div class="workitem__tab--item"><a href=' . get_category_link($category->term_id) . '>' . esc_html($category->slug) . '</a></div>';
                            }
                        }
                        ?>
                    <?php endif; ?>
                </div>


                <!-- プロジェクト内容 -->
                <p class="workitem__text">
                    <?php echo get_the_excerpt(); ?>
                </p>

                <!-- プロジェクトメンバー -->
                <div class="workitem__member">
                    <div class="workitem__member--title">Project member</div>
                    <ul class="workitem__member--list">
                        <!-- この下にペーストしてください -->
                        <?php
                        $tags = get_tags();
                        foreach ($tags as $tag) {
                            echo '<li class="workitem__member--list--item"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>