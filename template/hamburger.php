<!-- ハンバーガーメニュー部分 -->
<div class="nav">

<!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
<input id="drawer_input" class="drawer_hidden" type="checkbox">

<!-- ハンバーガーアイコン -->
<label for="drawer_input" class="drawer_open"><span></span></label>

<!-- メニュー -->
<nav class="nav_content">
  <h2 class="ex-bold text-center mt-5 mb-5">MENU</h2>
  <ul class="nav_list">
    <li class="nav_item"><a href="<?php echo home_url(); ?>">HOME</a></li>
    <li class="nav_item"><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
    <li class="nav_item"><a href="<?php echo home_url(); ?>/service">SERVICE</a></li>
    <li class="nav_item"><a href="<?php echo home_url(); ?>/blog">BLOG/COLUMN</a></li>
    <li class="nav_item"><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
    <li class="nav_item"><a href="<?php echo home_url(); ?>https://twitter.com/Orfool">Twitter</a></li>
    <li class="nav_item"><a href="<?php echo home_url(); ?>https://www.facebook.com/profile.php?id=100063121844470">Facebook</a></li>
    <li class="nav_item"><a href="<?php echo home_url(); ?>">Instagram</a></li>
  </ul>
</nav>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // ナビゲーションメニュー内の全リンクを取得
  var links = document.querySelectorAll('.nav_item a');
  // 各リンクに対してクリックイベントリスナーを設定
  links.forEach(function(link) {
    link.addEventListener('click', function() {
        // チェックボックスのチェックを外す
        document.getElementById('drawer_input').checked = false;
    });
  });
});
</script>
