<footer>
  <section>
    <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4 mb-4 mb-sm-0">
        <h3 class="ex-bold">ORFOOL INC.</h3>
      </div>
      <div class="col-12 col-sm-4 mb-4 mb-sm-0">
        <ul class="footer-menu list-unstyled">
          <li class="mb-3"><a class="fw-bold" href="<?php echo home_url(); ?>">HOME</a></li>
          <li class="mb-3"><a class="fw-bold" href="<?php echo home_url(); ?>/about">ABOUT</a></li>
          <li class="mb-3"><a class="fw-bold" href="<?php echo home_url(); ?>/service">SERVICE</a></li>
          <li class="mb-3"><a class="fw-bold" href="<?php echo home_url(); ?>/blog">BLOG/COLUMN</a></li>
          <li><a class="fw-bold" href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
        </ul>
      </div>
      <div class="sns col-12 col-sm-4">
        <ul class="footer-menu list-unstyled">
          <!-- <li class="mb-3"><a class="fw-bold" href="<?php echo home_url(); ?>">HOME</a></li>
          <li class="mb-3"><a class="fw-bold" href="<?php echo home_url(); ?>/about">ABOUT</a></li> -->
          <li class="mb-3"><a target="_blank" href="https://twitter.com/Orfool"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="twitterアイコン"></a></li>
          <li class="mb-3"><a target="_blank" href="https://www.facebook.com/profile.php?id=100063121844470"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="facebookアイコン"></a></li>
        </ul>
      </div>
    </div>
  </div>
  </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script>
  var swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
      }
    }
  });
</script>
<script>
  AOS.init();
</script>
<?php wp_footer(); ?>
</body>
</html>