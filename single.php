<?php get_header(); ?>
<main>
  <section>
    <div data-aos="fade-right" data-aos-duration="1500" class="container">
      <p class="color-main ps-1"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
      <h2 class="single-title lh-lg ex-bold mt-3"><?php the_title(); ?></h2>
    </div>
  </section>
  <div data-aos="fade-up" data-aos-duration="1500" class="single-bg">
    <?php echo the_post_thumbnail(); ?>
  </div>
  <section>
    <div class="container">
      <article class="single-content">
        <?php the_content(); ?>
      </article>
    </div>
  </section>
</main>
<?php get_footer(); ?>