<div id="column_editor">
  <!--カテゴリ取得-->
  <?php if(has_category() ): ?>
    <div class="column_detail_category">
      <span><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
    </div>
  <?php endif; ?>
  <!--投稿日を取得-->
  <div class="column_detail_day">
    <?php the_date( '', '' );  ?> <!-- 投稿日を表示。形式は管理画面で指定 -->
  </div>
  <!--タイトル-->
  <?php the_title( '<h1>', '</h1>' ); ?>


  <!--アイキャッチ取得-->
  <div class="column_main_img">
    <?php if( has_post_thumbnail() ): ?> <!-- サムネある時のみ -->
      <?php the_post_thumbnail('l_thumbnail'); ?>
    <?php endif; ?>
  </div>


  <!--本文取得-->
  <div class="article-content">
  <?php the_content(); ?>
  </div>
</div><!---/column_editor--->