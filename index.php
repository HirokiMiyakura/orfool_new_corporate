<?php get_header(); ?>
<main>
  <section>
    <div data-aos="fade-right" data-aos-duration="1500" class="container">
      <h2 class="main_message">Support<br>Your Challenge</h2>
      <p class="sub_message mb-5">あなたの<span class="color-main">挑戦</span>を応援します。</p>
    </div>
  </section>
  <div data-aos="fade-left" data-aos-duration="1500" class="bg-main bg1"></div>
  <section>
    <div class="container d-flex align-items-center">
      <div class="row">
        <div data-aos="fade-up" data-aos-duration="1500"  class="col-12 col-sm-7">
          <h2 class="title position-relative"><span class="asta position-absolute">*</span>ABOUT</h2>
          <h3 class="sub_title fw-bold mb-4">私たちの技術、あなたの未来</h3>
          <img class="d-block d-sm-none rounded mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/aboutus_sp.png" alt="">
          <p class="lh-lg fw-light mb-3 mb-sm-5">技術の進化は絶えません。<br>
  私たちは、最新のウェブマーケティング戦略とホームページ制作技術を駆使して、<br>あなたのビジネスを次のレベルへと押し上げます。<br>
  私たちの知識と経験が、あなたのビジョンを具現化します。</p>
          <p class="link fs-5"><a class="color-main" href="<?php echo home_url(); ?>/about">詳しくはこちら</a></p>
        </div>
        <div data-aos="fade-down" data-aos-duration="1500" class="col-12 col-sm-5 d-none d-sm-block ps-5">
          <img class="d-none d-sm-block rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/aboutus.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <div data-aos="fade-right" data-aos-duration="1500" class="bg-left bg2"></div>
  <section>
    <div class="container d-flex align-items-center">
      <div class="row">
        <div data-aos="fade-up" data-aos-duration="1500" class="col-12 col-sm-7">
          <h2 class="title position-relative"><span class="asta position-absolute">*</span>SERVICE</h2>
          <h3 class="sub_title fw-bold mb-4">変革を導くウェブマーケティング</h3>
          <img class="d-block d-sm-none rounded mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/service_sp.png" alt="">
          <p class="lh-lg fw-light mb-3 mb-sm-5">今日のデジタル時代において、革新的なウェブマーケティングは、企業が成長し続けるための鍵です。<br>
  私たちは、目標を達成するためのカスタマイズされた戦略を提供します。<br>
  SEO、SNSマーケティング、コンテンツマーケティング、PPC広告など、最新の技術と手法を駆使して目標達成へと導きます。</p>
          <p class="link fs-5"><a class="color-main" href="<?php echo home_url(); ?>/service">詳しくはこちら</a></p>
        </div>
        <div data-aos="fade-down" data-aos-duration="1500" class="col-12 col-sm-5 d-none d-sm-block ps-5">
          <img class="d-none d-sm-block rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/service.png" alt="">
        </div>
      </div>
    </div>
  </section>
    <div data-aos="fade-left" data-aos-duration="1500" class="bg-right bg5"></div>
  <section>
    <div data-aos="fade-up" data-aos-duration="1500" class="container">
      <h2 class="title text-center position-relative"><span class="asta position-absolute">*</span>WORKS</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/1.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/2.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/3.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/4.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/5.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/6.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/7.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/8.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/9.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/10.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/11.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/12.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/13.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/14.jpg" alt=""></div>
          ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div> -->
      </div>
    </div>
  </section>
  <!-- <div class="bg-left bg2"></div> -->
  <section>
    <div data-aos="fade-up" data-aos-duration="1500" class="container">
      <h2 class="title text-center position-relative"><span class="asta position-absolute">*</span>BLOG/COLUMNS</h2>
      <?php query_posts('posts_per_page=2'); ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
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
      <?php endif; ?>
      <p class="view-more text-center w-50"><a class="color-white" href="<?php echo home_url(); ?>/blog">さらに記事を読む</a></p>
    </div>
  </section>
  <div data-aos="fade-left" data-aos-duration="1500" class="bg-right bg4"></div>
  <section>
    <h2 class="title text-center position-relative"><span class="asta position-absolute">*</span>ACCESS</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7624232164685!2d139.6935985765716!3d35.65822457259459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca9ff584c57%3A0xf4cf3b320fde92ec!2z5pel5pys44CB44CSMTUwLTAwNDMg5p2x5Lqs6YO95riL6LC35Yy66YGT546E5Z2C77yS5LiB55uu77yR77yV4oiS77yRIOODjuOCoumBk-eOhOWdgg!5e0!3m2!1sja!2sus!4v1712032414671!5m2!1sja!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
</main>
<?php get_footer(); ?>
