<?php get_header(); ?>
<h2>Home</h2>
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
	<a class="topnews__view" href="./news.html">
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
	<a class="topwork__view" href="./work.html">
		<div class="topwork__more">View more</div>
		<div class="left"></div>
	</a>
	<div class="topwork__list">
		<a href="./works/012-video-Lookbook/012-video-Lookbook.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/012-video-Lookbook/01.jpg" alt="" />
			<div class="topwork__item--text">LOOK BOOK</div>
		</a>

		<a href="./works/011-video-tiadance/011-video-tiadance.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/011-video-tiadance/01.jpg" alt="" />
			<div class="topwork__item--text">VIGOROUS　九産大チアリーダーPV</div>
		</a>

		<a href="./works/010-video-taima/010-video-taima.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/010-video-taima/01.JPG" alt="" />
			<div class="topwork__item--text">なぜ大麻に手を出すの？</div>
		</a>

		<a href="./works/001-video-covid19/001-video-covid19.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/001-video-covid19/0.jpg" alt="" />
			<div class="topwork__item--text">とり戻せなくなる前に。</div>
		</a>

		<a href="/works/009-video-gakubunopening/009-video-gakubunopening.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/009-video-gakubunopening/0.png" alt="" />
			<div class="topwork__item--text">学文祭オープニング動画</div>
		</a>

		<a href="/works/008-video-yakubutu/008-video-yakubutu.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/008-video-yakubutu/0.jpg" alt="" />
			<div class="topwork__item--text">薬物乱用防止啓発動画</div>
		</a>

		<a href="works/007-video-nanpukai/007-video-nanpukai.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/007-video-nanpukai/0.png" alt="" />
			<div class="topwork__item--text">楠風会応援メッセージ</div>
		</a>

		<a href="works/006-video-kouennkai/006-video-kouennkai.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/006-video-kouennkai/01.png" alt="" />
			<div class="topwork__item--text">後援会応援メッセージ</div>
		</a>

		<a href="works/005-video-kunpukai/005-video-kunpukai.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/005-video-kunpukai/0.png" alt="" />
			<div class="topwork__item--text">薫風会応援メッセージ</div>
		</a>

		<a href="works/004-video-suisougaku/004-video-suisougaku.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/004-video-suisougaku/0.jpg" alt="" />
			<div class="topwork__item--text">九産高校吹奏楽部動画</div>
		</a>

		<a href="works/003-logo-tshirt/003-logo-tshirt.html" class="topwork__item">
			<img class="topwork__item--img" src="<?php echo get_template_directory_uri(); ?>/works/003-logo-tshirt/04.jpg" alt="" />
			<div class="topwork__item--text">九産大応援Tシャツデザイン</div>
		</a>

		<a href="works/002-poster-kenketu/002-poster-kenketu.html" class="topwork__item">
			<img　class="topwork__item--img" 　src="<?php echo get_template_directory_uri(); ?>/works/002-poster-kenketu/0.png" 　alt="" />
			<div class="topwork__item--text">学内献血広報活動</div>
		</a>
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
	<a class="topabout__view" href="./about.html">
		<div class="topabout__more">View more</div>
		<div class="left"></div>
	</a>
</div>

<?php get_footer(); ?>