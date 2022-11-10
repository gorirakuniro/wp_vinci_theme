<?php

// グローバル変数


//News 固定ページ(news)スラッグのID取得
$page_data_news = get_page_by_path('news');
$page_news_id = $page_data_news->ID;

//Work 固定ページ(work)スラッグのID取得
$page_data_work = get_page_by_path('work');
$page_work_id = $page_data_work->ID;

//About 固定ページ(about)スラッグのID取得
$page_data_about = get_page_by_path('about');
$page_about_id = $page_data_about->ID;





//デフォルトスクリプト
function my_scripts()
{
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', "", '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_scripts');



//カスタムヘッダー
$custom_header_args = array(
    'default-image' => get_template_directory_uri() . '/images/cacthcopy.jpg',
    // ヘッダー画像の横幅
    'width' => 1920,
    // ヘッダー画像の縦幅
    'height' => 1080,
    // ヘッダー画像の横幅を自由に切り取れるかどうか(trueもしくはfalse)
    'flex-width' => true,
    // ヘッダー画像の縦幅を自由に切り取れるかどうか(trueもしくはfalse)
    'flex-height' => true,
    // ヘッダーテキストを表示するかどうかを指定する機能の使うかどうか(trueもしくはfalse)
    'header-text' => false,
    // ヘッダーテキストのデフォルトの色
    'default-text-color' => '000',
    // 動画ヘッダーに対応するかどうか(trueもしくはfalse)
    'video' => false,
    // adminへの画像ファイルのアップロードを許可するか(trueもしくはfalse)
    'uploads' => false,
    // ヘッダー画像をランダムにローテーションするかどうか(trueもしくはfalse)
    'random-default' => false,

);
function wphead_cb()
{
    echo '<style type="text/css">';
    echo '.p-header__ttl, .p-header__info { color: #' . get_header_textcolor() . ' }';
    echo '</style>';
}
add_theme_support('custom-header', $custom_header_args);


//抜粋する文字数を設定
function my_excerpt_length($length)
{
    return 800;
}
add_filter('excerpt_length', 'my_excerpt_length');

// 画像すべて取得
function getImage()
{
    global $more;
    $more = 1;
    $link = get_permalink();
    $content = get_the_content();

    $count = substr_count($content, '<img');

    $start = 0;
    for ($i = 1; $i <= $count; $i++) {

        $imgBeg = strpos($content, '<img', $start);
        $post = substr($content, $imgBeg);
        $imgLength = strpos($post, '>');
        $imgEnd = $imgBeg + $imgLength;
        $postOutput = substr($post, 0, $imgLength + 1);
        $postOutput = preg_replace('/width="([0-9]*)" height="([0-9]*)"/', '', $postOutput);;
        if (stristr($postOutput, '<img')) {
            echo $postOutput;
        }
        $start = $imgEnd + 1;
    }
    $more = 0;
}

// Youtube のリンク
function catch_post_movie()
{
    $youtubePost = esc_attr(get_the_content());
    preg_match('/www.youtube.[-_\/A-Za-z0-9]*/', $youtubePost, $matches);
    $youtubeURL = 'https://' . $matches[0] . '?rel=0';
    if (isset($matches[0])) {
        echo $youtubeURL;
    }
}

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');


/* ---------- 「カテゴリー」や「タグ」の表記を変更 ---------- */
function Change_menulabel()
{
    global $menu;
    global $submenu;
    $name = '投稿一覧';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = '一覧';
    $submenu['edit.php'][10][0] = '新規投稿';
    $submenu['edit.php'][15][0] = 'コンテンツ名';
    $submenu['edit.php'][16][0] = 'メンバー名';
}
function Change_objectlabel()
{
    global $wp_post_types;
    $name = '投稿一覧';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name . 'の新規追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
function Change_taxonomieslabel()
{
    global $wp_taxonomies;
    $labels = $wp_taxonomies['category']->labels;
    $labels->name =   'コンテンツ名';
    $labels->singular =   'コンテンツ名';
    $labels->search_items =   'コンテンツ名を検索';
    $labels->all_items =   'コンテンツ名一覧';
    $labels->parent_item = '親のコンテンツ名';
    $labels->parent_item_colon = '親のコンテンツ名：';
    $labels->edit_item =   'コンテンツ名の編集';
    $labels->view_item =   'コンテンツ名の表示';
    $labels->update_item =   'コンテンツ名の更新';
    $labels->add_new_item = '新規コンテンツ名の追加';
    $labels->new_item = '新規';
    $labels->not_found =   'コンテンツ名が見つかりませんでした';
    $labels->no_terms =   'コンテンツ名なし';
    $labels->menu_name =   'コンテンツ名';


    $labels = $wp_taxonomies['post_tag']->labels;
    $labels->name =  'メンバー名';
    $labels->singular_name =  'メンバー名';
    $labels->search_items =  'メンバー名を検索';
    $labels->popular_items = '人気のメンバー名';
    $labels->all_items = 'すべてのメンバー名';
    $labels->edit_item =  'メンバー名の編集';
    $labels->view_item =  'メンバー名の表示';
    $labels->update_item =  'メンバー名の更新';
    $labels->add_new_item = '新規メンバー名の追加';
    $labels->new_item_name = '新規メンバー';
    $labels->separate_items_with_commas =  'メンバー名が複数ある場合はコンマで区切ってください';
    $labels->add_or_remove_items =  'メンバー名の追加もしくは削除';
    $labels->choose_from_most_used = 'よく使われている' .  'メンバー名から選択';
    $labels->not_found =  'メンバー名が見つかりませんでした';
    $labels->no_terms =  'メンバー名なし';
    $labels->menu_name =  'メンバー名';
}
add_action('admin_menu', 'Change_menulabel');
add_action('init', 'Change_objectlabel');
add_action('init', 'Change_taxonomieslabel');



// クライアント名を表示
function my_taxonomy()
{
    register_taxonomy(
        'client',
        'post',
        array(
            'label' => 'クライアント名',
            'labels' => array(
                'name' => 'クライアント名',
                'singular_name' => 'クライアント名',
                'search_items' => 'クライアント名を検索',
                'popular_items' => 'よく使われているクライアント名',
                'all_items' => 'すべてのクライアント名',
                'edit_item' => 'クライアント名を編集',
                'update_item' => 'クライアント名を更新',
                'add_new_item' => 'クライアント名を追加',
                'new_item_name' => '新しいクライアント名',
                'separate_items_with_commas' => 'カンマで区切ってください',
                'add_or_remove_items' => 'クライアント名を追加または削除',
                'choose_from_most_used' => 'よく使われているクライアント名から選択',
                'not_found' => 'クライアント名が見つかりません',
                'menu_name' => 'クライアント名',
            ),
            'description' => '',
            'show_in_rest' => true,
            'has_archive' => true,
            'show_admin_column' => true,
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'capability_type' => 'page',
            'hierarchical' => false,
            'query_var' => true,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'client'),
            'capability_type' => 'post',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'post-formats', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats'),
        )

    );
}
add_action('init', 'my_taxonomy');

function customize_menus()
{
    global $menu;
    $menu[19] = $menu[10];  //メディアの移動
    unset($menu[10]);
}
add_action('admin_menu', 'customize_menus');



//更新通知を管理者権限のみに表示
function update_nag_admin_only()
{
    if (!current_user_can('administrator')) {
        remove_action('admin_notices', 'update_nag', 3);
    }
}
add_action('admin_init', 'update_nag_admin_only');


/* ---------- カスタム投稿タイプを追加 ---------- */
add_action('init', 'create_post_type');

function create_post_type()
{
    register_post_type(
        'news',
        array(
            'label' => 'ニュース',
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_position' => 5,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'revisions',
            ),
        )
    );

    register_taxonomy(
        'news-cat',
        'news',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
        )
    );
}
