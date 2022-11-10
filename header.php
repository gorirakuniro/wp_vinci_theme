<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>vinci <?php wp_title('', true, 'right'); ?></title>

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
		(function(d) {
			var config = {
					kitId: 'yzv3btf',
					scriptTimeout: 3000,
					async: true,
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, '') + ' wf-inactive';
				}, config.scriptTimeout),
				tk = d.createElement('script'),
				f = false,
				s = d.getElementsByTagName('script')[0],
				a;
			h.className += ' wf-loading';
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
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
	<?php
	global $page_news_id;
	global $page_work_id;
	global $page_about_id;
	?>

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
						<a href="<?php the_permalink($page_work_id); ?>">work</a>
					</li>
					<li class="globalMenuSp__list--item">
						<a href="<?php the_permalink($page_about_id); ?>">about</a>
					</li>
					<!-- <li class="globalMenuSp__list--item">
							<a href="./member.html">member</a>
						</li> -->
					<li class="globalMenuSp__list--item">
						<a href="<?php the_permalink($page_news_id); ?>">news</a>
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
						<a href="<?php the_permalink($page_work_id); ?>">work</a>
					</li>
					<li class="header__nav--item">
						<a href="<?php the_permalink($page_about_id); ?>">about</a>
					</li>
					<!-- <li class="header__nav--item">
							<a href="./member.html">member</a>
						</li> -->
					<li class="header__nav--item">
						<a href="<?php the_permalink($page_news_id); ?>">news</a>
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