<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <title>株式会社Orfool | ホーム</title> -->
<title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/ress.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/main.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/hamburger.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/wp_navi.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/plugin.css" rel="stylesheet" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php wp_head(); ?>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C355GLS21T"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C355GLS21T');
</script>
<body>
<!-- <header data-aos="fade-down" data-aos-duration="1500"> -->
<header>
  <div class="container d-flex justify-content-between align-items-center position-relative pt-5 pb-5">
    <div class="logo">
      <h1 class="ex-bold"><a href="<?php echo home_url(); ?>">ORFOOL</a></h1>
    </div>
    <div class="menu d-none d-sm-block">
      <ul class="header-menu list-unstyled d-flex gap-4">
        <li><a class="fw-bold" href="<?php echo home_url(); ?>">HOME</a></li>
        <li><a class="fw-bold" href="<?php echo home_url(); ?>/about">ABOUT</a></li>
        <li><a class="fw-bold" href="<?php echo home_url(); ?>/service">SERVICE</a></li>
        <li><a class="fw-bold" href="<?php echo home_url(); ?>/blog">BLOG/COLUMN</a></li>
        <li><a class="fw-bold" href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
      </ul>
    </div>
    <div class="sns d-none d-sm-block">
      <ul class="list-unstyled d-flex gap-3">
        <li><a target="_blank" href="https://twitter.com/Orfool"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="twitterアイコン"></a></li>
        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100063121844470"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="facebookアイコン"></a></li>
        <!-- <li><a target="_blank" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="instagramアイコン"></a></li> -->
      </ul>
    </div>
    <div class="d-block d-sm-none">
      <?php echo get_template_part('template/hamburger'); ?>
    </div>
  </div>
</header>