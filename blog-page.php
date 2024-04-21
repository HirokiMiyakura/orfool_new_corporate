<?php
// Template Name: blog-page.php
get_header(); ?>
<main>
  <section>
    <div data-aos="fade-right" data-aos-duration="1500" class="container">
      <h2 class="main_message mt-5">BLOG / COLUMN</h2>
      <p class="sub_message mb-5">ウェブマーケティングに関するさまざまな情報をお届けします。</p>
    </div>
  </section>
  <div data-aos="fade-up" data-aos-duration="1500" class="bg-main bg-blog"></div>
  <section>
    <div data-aos="fade-up" data-aos-duration="1500" class="container">
      <h2 class="title text-center position-relative"><span class="asta position-absolute">*</span>ARTICLES</h2>
      <?php
        $paged = get_query_var('paged')? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'paged' => $paged,
        );
        $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a class="post" href="<?php the_permalink(); ?>">
          <div class="row mb-5">
            <div class="col-12 col-sm-4 pe-sm-4 eyecatch">
              <?php echo the_post_thumbnail(); ?>
            </div>
            <div class="col-12 col-sm-8">
              <p><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
              <h3 class="blog-title"><?php the_title(); ?></h3>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
      <?php else: ?>
        <p>表示する記事がありません。</p>
      <?php endif; ?>
      <?php
        if(function_exists('wp_pagenavi')):
          wp_pagenavi(array('query'=>$the_query));
        endif;
      ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
