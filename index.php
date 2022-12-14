<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

		<!-- 重要 -->
		<meta name="application-name" content="メディア系愛好会vinci" />
		<meta name="description" content="「vinci」は九州産業大学の学生を中心に 活動しているメディア系愛好会です。その活動は、企業やサークルなどの様々なパ ートナーとともにアイディアで世の中に新しいものを生み出すことです。" />
		<meta name="keywords" content="vinci,Vinci,VINCI,九産大,デザイン,芸学,映像,芸術学部,写真,学生,メディア系愛好会,メディア系同好会, メディア系サークル,ビンチ,ヴィンチ,九州産業大学,サークル" />

		<!-- Twitter Card data -->
		<meta name="”twitter:card”" content="”summary“" />
		<meta name="”twitter:site”" content="”@Vinci_KSU“" />
		<meta name="”twitter:title”" content="vinci" />
		<meta name="”twitter:description”" content="”九州産業大学内外の広報活動・イベント企画運営などを行っています!現在は芸術学部を中心としたメンバーで活動しております!サークル・個人活動などさまざまな宣伝依頼お待ちしています!ご気軽にこちらにお願いします→【vincimember@gmail.com】“" />
		<meta name="twitter:creator" content="@Vinci_KSU" />
		<meta name=”twitter:image” content=”https://vinci-home.web.app/images/cacthcopy.jpg“>

		<!-- Open Graph data -->
		<meta property="og:title" content="“メディア系愛好会vinci”" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://vinci-home.web.app/index.html" />
		<meta property="og:image" content=“https://vinci-home.web.app/images/cacthcopy.jpg” />
		<meta property="og:description" content="「vinci」は九州産業大学の学生を中心に活動しているメディア系愛好会です。その活動は、企業やサークルなどの 様々なパートナーとともにアイディアで世の中に新しいものを生み出すことです。" />

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="ico" />

        <?php wp_head(); ?>

		<script>
			(function (d) {
				var config = {
						kitId: 'yzv3btf',
						scriptTimeout: 3000,
						async: true,
					},
					h = d.documentElement,
					t = setTimeout(function () {
						h.className = h.className.replace(/\bwf-loading\b/g, '') + ' wf-inactive';
					}, config.scriptTimeout),
					tk = d.createElement('script'),
					f = false,
					s = d.getElementsByTagName('script')[0],
					a;
				h.className += ' wf-loading';
				tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
				tk.async = true;
				tk.onload = tk.onreadystatechange = function () {
					a = this.readyState;
					if (f || (a && a != 'complete' && a != 'loaded')) return;
					f = true;
					clearTimeout(t);
					try {
						Typekit.load(config);
					} catch (e) {}
				};
				s.parentNode.insertBefore(tk, s);
			})(document);
		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

	</head>
	<body>
		<div class="container">
			<header class="header">
				<div class="header__logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/vinci.png" alt="" />
					</a>
					<h1 style="display: none">vinci</h1>
				</div>

				<div class="hamburger">
					<span></span>
					<span></span>
				</div>

				<nav class="globalMenuSp">
					<ul class="globalMenuSp__list">
						<li class="globalMenuSp__list--item">
							<a href="<?php echo get_template_directory_uri(); ?>/index.html">home</a>
						</li>
						<li class="globalMenuSp__list--item">
							<a href="<?php echo get_template_directory_uri(); ?>/work.html">work</a>
						</li>
						<li class="globalMenuSp__list--item">
							<a href="<?php echo get_template_directory_uri(); ?>/about.html">about</a>
						</li>
						<!-- <li class="globalMenuSp__list--item">
							<a href="./member.html">member</a>
						</li> -->
						<li class="globalMenuSp__list--item">
							<a href="<?php echo get_template_directory_uri(); ?>/news.html">news</a>
						</li>
						<li class="globalMenuSp__list--item">
							<a href="mailto:membervinci@gmail.com">contact</a>
						</li>
						<div class="globalMenuSp__list--sns">
							<div class="globalMenuSp__list--sns--item">
								<a href="https://www.instagram.com/ksumedia__vinci/">
									<i class="fab fa-instagram"></i>
								</a>
							</div>
							<div class="globalMenuSp__list--sns--item">
								<a href="https://twitter.com/vinci_ksu">
									<i class="fab fa-twitter"></i>
								</a>
							</div>
						</div>
					</ul>
				</nav>

				<div class="header__gnav">
					<ul class="header__nav">
						<li class="header__nav--item">
							<a href="<?php echo get_template_directory_uri(); ?>/work.html">work</a>
						</li>
						<li class="header__nav--item">
							<a href="<?php echo get_template_directory_uri(); ?>/about.html">about</a>
						</li>
						<!-- <li class="header__nav--item">
							<a href="./member.html">member</a>
						</li> -->
						<li class="header__nav--item">
							<a href="<?php echo get_template_directory_uri(); ?>/news.html">news</a>
						</li>
						<li class="header__nav--item">
							<a href="mailto:membervinci@gmail.com">contact</a>
						</li>
					</ul>
					<div class="header__sns">
						<a href="https://www.instagram.com/ksumedia__vinci/">
							<i class="fab fa-instagram"></i>
						</a>
					</div>
					<div class="header__sns">
						<a href="https://twitter.com/vinci_ksu">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
			</header>
			<main class="top_main">
				<div class="main__text">
					<h1 class="main__title">
						<span
							>Creating new things with<br />
							ideas and designs</span
						>
					</h1>
					<p class="main__sub">
						<span> 「アイデア」と「デザイン」で新しいものを生み出す </span>
					</p>
				</div>
				<div class="main__image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cacthcopy.jpg" alt="" />
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
						<img　class ="topwork__item--img" 　src="<?php echo get_template_directory_uri(); ?>/works/002-poster-kenketu/0.png" 　alt="" />
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

			<footer class="footer">
				<div class="footer__text">&copy; 2021 vinci.All rights reserved</div>
			</footer>
		</div>

		<!-- ローディング画面 -->
		<div id="loading">
			<svg id="svgstroke" viewBox="0 0 82.14 124.02">
				<path class="cls-1" d="M151.68,84.81s4.19,46.12,0,49.71c-4.4,3.76-14,.86-24.29-4.56" transform="translate(-95.66 -82.72)" />
				<path class="cls-2" d="M172.7,152.15c5.47,32.38,3.47,50.08-5.77,52.15s-13.72-4.85-16.18-14.13a1.85,1.85,0,0,0-.56-.95c-2.34-1.93-3.52,5.58-12.6,4.05-6.18-1-7.52-5-9.47-16.55a2.31,2.31,0,0,0-.34-.83c-2.37-3.78-7.2,2.37-11.22.4-3.17-1.55-4.11-4.62-4.35-8.32a4.31,4.31,0,0,0-3.56-4c-2.52-.44-5.71-.37-8.5-4.2-4-5.51-2.65-11,1.5-18.45" transform="translate(-95.66 -82.72)" />
				<path class="cls-2" d="M105,137.07c15,19.33,44.83,19,66.9,16.17" transform="translate(-95.66 -82.72)" />
				<circle class="cls-3" cx="113.73" cy="96.7" r="2.52" transform="translate(-102.17 102.45) rotate(-76.72)" />
				<path class="cls-4" d="M170.88,95.36a2.25,2.25,0,1,1,2.25,2.26A2.25,2.25,0,0,1,170.88,95.36Z" transform="translate(-95.66 -82.72)" />
				<path class="cls-1" d="M165.41,204.56" transform="translate(-95.66 -82.72)" />
			</svg>
			<div class="loader">Loading...</div>
		</div>

		<div id="stalker">
			<div class="stalker__pointer"></div>
		</div>

	</body>
</html>
