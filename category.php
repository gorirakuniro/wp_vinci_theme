<?php get_header(); ?>


<ul>
    <?php
    // カテゴリーをリンクで繰り返し表示
    $categories = get_the_category();
    foreach ($categories as $cat) :
    ?>
        <li><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?>の一覧へ</a></li>
    <?php endforeach; ?>
</ul>


<?php get_footer(); ?>