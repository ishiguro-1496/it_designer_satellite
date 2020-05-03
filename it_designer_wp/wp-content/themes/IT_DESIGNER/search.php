<?php get_header(); ?>
    <div class="main_content_wrap">
      <div class="main_content_inner">
        <div class="main_content_left">

        	<header class="page-header">
				<h1 class="page-title">「<?php the_search_query();  ?>」で検索した結果</h1>
			</header><!-- .page-header -->
			<div class="column_box_wrap">
			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) : 
					the_post();

					get_template_part( 'excerpt' );

				endwhile;

				the_posts_pagination( [
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
				] );
			else :?>
				<section class="no-results not-found">
					<div class="page-content">
						<p>お探しの記事は見つかりませんでした。</p>
						<?php get_search_form(); ?>
					</div>
				</section>
			<?php endif; ?>
			</div><!-- column_box_wrap -->
          
        </div><!---/main_content_left--->

        <div class="main_content_right">
          <?php get_sidebar('search'); ?>

          <?php get_sidebar('category'); ?>

          <?php get_sidebar('archive'); ?>
        </div><!-- main_content_right -->
        
      </div><!-- main_content_inner -->
    </div><!-- main_content_wrap -->
  <?php get_template_part('external_link'); ?>
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
