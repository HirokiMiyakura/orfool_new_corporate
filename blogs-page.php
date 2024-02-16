<?php
/**
 * Template Name: 新着記事
**/

get_header(); ?>
<main>
<?php
  $args = array(
    // 'posts_per_page' => 5
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ):
  setup_postdata( $post );
?>
<li>
  <a href="<?php the_permalink(); ?>"><span><?php the_time('Y年m月d日'); ?></span>　<?php the_title(); ?></a>
</li>
<?php
  endforeach;
  wp_reset_postdata();
?>
</main>
<?php get_footer(); ?>