<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>
  <!-- 商品一覧 -->
  <section class="product">
    <!-- 商品を並べる親（grid） -->

    <ul class="product_list">
      <!-- ループで商品があるだけ表示するPHP -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="product_item">
            <!-- もしもサムネイルがある場合 -->
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', array('class' => 'product_img')); ?>
              </a>
            <?php endif; ?>
            <p class="product_title"><?php the_title(); ?></p>
            <!-- 価格などのカスタムフィールドがある場合はここで出力 -->
            <p class="product_price">¥99,999 +tax</p>
            <a class="product_link_detail" href="<?php the_permalink(); ?>">View Detail</a>
          </li>
        <?php endwhile;
      endif; ?>
    </ul>

    <!-- 

          <li class="product_item">
            <img class="product_img" src="img/item2.jpg" alt="椅子" />
            <p class="product_title">プロダクトタイトルプロダクトタイトル</p>
            <p class="product_price">¥99,999 +tax</p>
            <a class="product_link" href="detail.html">View Detail</a>
          </li>

      <li class="product_item">
        <img class="product_img" src="<?php echo esc_url(get_template_directory_uri() . '/img/item2.jpg'); ?>" alt="椅子" />
        <p class="product_title">プロダクトタイトルプロダクトタイトル</p>
        <p class="product_price">¥99,999 +tax</p>
      </li>
      <li class="product_item">
        <img class="product_img" src="<?php echo esc_url(get_template_directory_uri() . '/img/item3.jpg'); ?>" alt="ソファ" />
        <p class="product_title">プロダクトタイトルプロダクトタイトル</p>
        <p class="product_price">¥99,999 +tax</p>
      </li>
      <li class="product_item">
        <img class="product_img" src="<?php echo esc_url(get_template_directory_uri() . '/img/item11.jpg'); ?>" alt="ダイニングテーブルと椅子" />
        <p class="product_title">プロダクトタイトルプロダクトタイトル</p>
        <p class="product_price">¥99,999 +tax</p>
      </li>
      <li class="product_item">
        <img class="product_img" src="<?php echo esc_url(get_template_directory_uri() . '/img/item5.jpg'); ?>" alt="フロアランプ" />
        <p class="product_title">プロダクトタイトルプロダクトタイトル</p>
        <p class="product_price">¥99,999 +tax</p>
      </li>
      <li class="product_item">
        <img class="product_img" src="<?php echo esc_url(get_template_directory_uri() . '/img/item13.jpg'); ?>" alt="レザーソファ" />
        <p class="product_title">プロダクトタイトルプロダクトタイトル</p>
        <p class="product_price">¥99,999 +tax</p>
      </li>
      <li class="product_item">
        <img class="product_img" src="<?php echo esc_url(get_template_directory_uri() . '/img/item4.jpg'); ?>" alt="ベッドと観葉植物" />
        <p class="product_title">プロダクトタイトルプロダクトタイトル</p>
        <p class="product_price">¥99,999 +tax</p>
      </li>
      <li class="product_item">
        <img class="product_img" src="<?php echo esc_url(get_template_directory_uri() . '/img/item6.jpg'); ?>" alt="デスクと椅子" />
        <p class="product_title">プロダクトタイトルプロダクトタイトル</p>
        <p class="product_price">¥99,999 +tax</p>
      </li>
      <li class="product_item">
        <img class="product_img" src="<?php echo esc_url(get_template_directory_uri() . '/img/item9.jpg'); ?>" alt="黄色い壁の部屋" />
        <p class="product_title">プロダクトタイトルプロダクトタイトル</p>
        <p class="product_price">¥99,999 +tax</p>
      </li> -->

    <div id="product_link">
      <!-- 戻るボタン -->
      <a class="product_back" href="#">戻る</a>
      <!-- もっと見るリンク -->
      <a class="product_more" href="#">View More</a>
    </div>

  </section>
</main>

<!-- フッター -->
<?php get_footer(); ?>