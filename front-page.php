<?php get_header(); ?>
<h2>front-page</h2>

<main class="top_main">
    <div class="main__text">
        <h1 class="main__title">
            <span>Creating new things with<br />
                ideas and designs</span>
        </h1>
        <p class="main__sub">
            <span> 「アイデア」と「デザイン」で新しいものを生み出す </span>
        </p>
    </div>
    <div class="main__image">
        <?php if (get_header_image()) : ?>
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/cacthcopy.jpg" alt="" />
        <?php endif; ?>
    </div>
</main>

<div class="top_news scrollanime downup">
    <div class="topnews__title">News</div>
    <?php
    global $page_news_id;
    ?>
    <a class="topnews__view" href="<?php the_permalink($page_news_id); ?>">
        <div class="topnews__more">View more</div>
        <div class="left"></div>
    </a>
    <div class="topnews__news">
        <ul class="topnews__list">

            <li class="topnews__item">
                <div class="topnews__date"><?php the_time('Y.m.d'); ?></div>
                <div class="topnews__text">新しいやつ</div>
            </li>

            <li class="topnews__item">
                <div class="topnews__date">2021.8.3</div>
                <div class="topnews__text">カフェのロゴデザインを制作します</div>
            </li>

            <li class="topnews__item">
                <div class="topnews__date">2021.6.29</div>
                <div class="topnews__text">大麻啓発映像の撮影が終了いたしました!</div>
            </li>

            <li class="topnews__item">
                <div class="topnews__date">2021.5.30</div>
                <div class="topnews__text">大麻啓発映像を制作します</div>
            </li>

            <li class="topnews__item">
                <div class="topnews__date">2021.5.23</div>
                <div class="topnews__text">オンライン学文祭が開催されました</div>
            </li>

            <li class="topnews__item">
                <div class="topnews__date">2021.5.5</div>
                <div class="topnews__text">vinciの公式ホームページが出来ました</div>
            </li>
        </ul>
    </div>
</div>

<div class="top_work scrollanime downup">
    <div class="topwork__title">Work</div>
    <?php
    global $page_work_id;
    ?>
    <a class="topwork__view" href="<?php the_permalink($page_work_id); ?>">
        <div class="topwork__more">View more</div>
        <div class="left"></div>
    </a>
    <div class="topwork__list">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="topwork__item">
                    <img class="topwork__item--img" src="<?php the_post_thumbnail_url(); ?>" alt="" />
                    <div class="topwork__item--text"><?php the_title(); ?></div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>

<div class="top_about scrollanime downup">
    <div class="topabout__left">
        <div class="topabout__title">About</div>
        <div class="topabout__sub">vinciとは？</div>
    </div>
    <div class="topabout__right">
        <div class="topabout__text">
            Vinciとは、2019年に創設された九州産業大学を中心としたメディア系愛好会です。<br />
            現在、九州産業大学の中央会館を拠点に活動をしています。<br />
            <br />
            学園祭や日々の活動で作品やポロジェクトをチームで作成することです。 企業やサークルなどのさまざまなパートナーとともにアイディアで課題にチャレンジしていくこと。 そして、世の中に新しいものを生み出すこと
        </div>
    </div>
    <?php
    global $page_about_id;
    ?>
    <a class="topabout__view" href="<?php the_permalink($page_about_id); ?>">
        <div class="topabout__more">View more</div>
        <div class="left"></div>
    </a>
</div>

<?php get_footer(); ?>