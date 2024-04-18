<?php
// Template Name: contact-page.php
get_header(); ?>
<main>
  <section>
    <div data-aos="fade-right" data-aos-duration="1500" class="container">
      <h2 class="main_message mt-5">CONTACT US</h2>
      <p class="sub_message mb-5">ウェブマーケティングに関するみなさまの疑問にお答えいたします。</p>
    </div>
  </section>
  <div data-aos="fade-left" data-aos-duration="1500" class="bg-main bg-contact"></div>
  <section>
    <div data-aos="fade-up" data-aos-duration="1500" class="container w-100 w-sm-50">
      <h2 class="title text-center position-relative"><span class="asta position-absolute">*</span>FORM</h2>
      <?php echo do_shortcode('[contact-form-7 id="8ff87d6" title="コンタクトフォーム"]'); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
