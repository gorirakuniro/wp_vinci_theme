<?php get_header(); ?>

<style>
    .error{
        width: 100%;
        height: 100%;
    }

    .error_notFound{
        font-size:12rem;
    }

    .error_notPage{
        font-size:2rem;
        margin: 0;
    }

</style>

<div class="error">
    <div class='error_notFound'>404</div>
    <p class="error_notPage">ページが見つかりませんでした。</p>
    <a href="<?php echo home_url(); ?>">トップページに戻る</a>
</div>

<?php get_footer(); ?>

