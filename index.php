<?php
/*
Template Name: Index Page
*/
?>
<?php get_header(); ?>

<!-- ↓投稿ランダム表示用 QueryPost↓ -->
<?php query_posts('orderby=rand');?>

<!-- 投稿ループ Start. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- 投稿タイトル取得. -->
<?php the_title(); ?>
<!-- 投稿タイトル End. -->

<!-- 投稿アイキャッチ画像取得. -->
<?php if (has_post_thumbnail()) {
    echo the_post_thumbnail();
} ?>
<!-- 投稿アイキャッチ画像 End. -->

<!-- 投稿文章取得. -->
<?php the_content(); ?>
<!-- 投稿文章 End. -->

<!-- カテゴリ名取得. -->
<?php $category = get_the_category(); echo $category[0]->cat_name; ?>
<!-- カテゴリ名 End. -->

<?php endwhile; endif; ?>
<!-- 投稿ループ End.-->

<?php next_post_link('%link', 'Prev'); ?><!-- Single Page Previous Pagination -->
<?php previous_post_link('%link', 'Next'); ?><!-- Single Page Next Pagination -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
