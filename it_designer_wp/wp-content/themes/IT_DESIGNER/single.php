<?php get_header(); ?>
  <div class="main_content_wrap">
    <div class="main_content_inner">
      <div class="main_content_left">
      <?php
      while ( have_posts() ) :  
        the_post();
        get_template_part( 'content' );
      endwhile; 
      ?>

      <div class="prev_next_btn">
        <div class="next_btn">
        <?php next_post_link( '%link', '◀︎　PREV', FALSE );  wp_reset_query();?>
        </div>

        <div class="prev_btn">
        <?php if (get_previous_post()):?>
        <?php previous_post_link( '%link', 'NEXT　▶︎', FALSE ); ?>
        <?php endif; ?>
        </div>
      </div><!-- prev_next_btn -->

      </div><!---/main_content_left--->
      <div class="main_content_right">
        <?php get_sidebar('search'); ?>

        <?php get_sidebar('category'); ?>

        <?php get_sidebar('archive'); ?>
      </div><!-- main_content_right -->
    </div><!-- main_content_inner -->
  </div><!-- main_content_wrap -->
  <?php get_template_part('recommend_article'); ?>
  <?php get_template_part('related_article'); ?>
<?php get_footer(); ?>


  <script type="text/javascript">


          //変数定義
          var navigationOpenFlag = false;
          var navButtonFlag = true;
          var focusFlag = false;

          //ハンバーガーメニュー
          $(function(){
              $(document).on('click','.el_humburger',function(){
                  if(navButtonFlag){
                      spNavInOut.switch();
                      //一時的にボタンを押せなくする
                      setTimeout(function(){
                          navButtonFlag = true;
                      },200);
                      navButtonFlag = false;
                  }
              });

          });

          //ナビ開く処理
          function spNavIn(){
              $('body').removeClass('js_humburgerClose');
              $('body').addClass('js_humburgerOpen');
              setTimeout(function(){
                  focusFlag = true;
              },200);
              setTimeout(function(){
                  navigationOpenFlag = true;
              },200);
          }

          //ナビ閉じる処理
          function spNavOut(){
              $('body').removeClass('js_humburgerOpen');
              $('body').addClass('js_humburgerClose');
              setTimeout(function(){
                  $(".uq_spNavi").removeClass("js_appear");
                  focusFlag = false;
              },200);
              navigationOpenFlag = false;
          }

          //ナビ開閉コントロール
          var spNavInOut = {
              switch:function(){
                  if($('body.spNavFreez').length){
                      return false;
                  }
                  if($('body').hasClass('js_humburgerOpen')){
                      spNavOut();
                  } else {
                      spNavIn();
                  }
              }
          };


          $(function () {
            function resizeImage() {
                var column_img_W = $(".column_img").width();
                var column_img_H = column_img_W * 2 / 3;
                $(".column_img").css({ "height": column_img_H });

                var slide_img_W = $(".slide_img").width();
                var slide_img_H = slide_img_W * 2 / 3;
                $(".slide_img").css({ "height": slide_img_H });

                var category_detail_img_W = $(".category_detail_img").width();
                var category_detail_img_H = category_detail_img_W * 2 / 3;
                $(".category_detail_img").css({ "height": category_detail_img_H });

                var related_article_img_W = $(".related_article_img").width();
                var related_article_img_H = related_article_img_W * 2 / 3;
                $(".related_article_img").css({ "height": related_article_img_H });

                var column_main_img_W = $(".column_main_img").width();
                var column_main_img_H = column_main_img_W * 2 / 3;
                $(".column_main_img").css({ "height": column_main_img_H });

                var column_detail_img_W = $(".column_detail_img").width();
                var column_detail_img_H = column_detail_img_W * 2 / 3;
                $(".column_detail_img").css({ "height": column_detail_img_H });
            }
            $(window).resize(function(){
                resizeImage();
            });
            resizeImage();
        });


          $(".slide_wrap").slick({
              autoplay:true,
              autoplaySpeed:5000,
              fade:true,
              speed:5000,
              arrows:false,
              dots:true
           });




  </script>

</html>
