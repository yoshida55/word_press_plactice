<?php get_header(); ?>


<!-- メイン -->
<main>
  <!-- @01 商品詳細 ここから -->
  <section class="product_detail">


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2 class="product_name"><?php the_title(); ?></h2>

        <!-- 画像と説明文【flex 横2列: 画像 + テキスト側】 -->
        <div class="product_inner">
          <!-- └ 画像（左） -->
          <div class="product_detail_img">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium', array('class' => 'product_img')); ?>
            <?php endif; ?>
          </div>
          <!-- └ テキスト側（右） -->
          <div class="product_detail_info">
            <h2 class="product_detail_title">プロダクトタイトルプロダクトタイトル</h2>
            <p class="product_detail_price">¥99,999 <br />+tax</p>
            <p class="product_detail_description">説明説明説明説明説明説明</p>
            <button class="product_detail_button">カートに入れる</button>
          </div>
        </div>

    <?php endwhile; endif; ?>
  </section>
  <!-- @01 商品詳細 ここまで -->
</main>

<?php get_footer(); ?>