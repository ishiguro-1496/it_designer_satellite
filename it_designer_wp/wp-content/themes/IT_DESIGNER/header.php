<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>ミッフィー好きのデザイナー転職</title>
    <meta name="keywords" content="デザイナー 転職 未経験 サイト 自己pr 求人 ポートフォリオ web 参考 サービス 年収"/>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/static/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/static/css/reset.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo get_template_directory_uri(); ?>/static/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/static/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/static/slick/slick-theme.css"/>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/static/slick/slick.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script>
      (function(d) {
        var config = {
          kitId: 'zwq3nuq',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <header>
      <div class="header_wrap">
        <div class="common_wrap">
          <div class="common_inner">
            <!-- ナビゲーション -->
            <?php if ( has_nav_menu( 'header-nav' ) ) : ?> 
            <?php  
              wp_nav_menu( array(
                'theme_location' => 'header-nav',
                'container' => '',
                'container_id' => '',
                'container_class' => '',
                'menu_id' => '',
                'menu_class' => 'pc_menu',
                'before' => '',
                'link_before' => '',
                'link_after' => '',
                'after' => '',

              ) ); 
            ?>
          <?php endif; ?>

          <div class="sp_menu">
            <!--ハンバーガーボタン-->
              <div class="el_humburger">
                <div class="el_humburger_wrapper">
                    <span class="el_humburger_bar top"></span>
                    <span class="el_humburger_bar middle"></span>
                    <span class="el_humburger_bar bottom"></span>
                </div>
              </div>
              <!-- ハンバーガーナビゲーション -->
              <div class="navi">
                <div class="navi_inner">
                <?php if ( has_nav_menu( 'header-sp-nav' ) ) : ?> 
                <?php  
                  wp_nav_menu( array(
                    'theme_location' => 'header-sp-nav',
                    'container' => '',
                    'container_id' => '',
                    'container_class' => '',
                    'menu_id' => '',
                    'menu_class' => 'sp_menu',
                    'before' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'after' => '',

                  ) ); 
                ?>
                <?php endif; ?>
                </div><!-- navi_inner -->
              </div><!-- navi -->
            </div><!---/sp_menu--->
          </div><!-- common_inner -->
        </div><!-- common_wrap -->
      </div><!-- header_wrap -->
    </header>
    <main>
      <section class="site_header">
        <div class="site_name_block">
          <div class="site_name_inner">
            <h1 class="site_name">
              <img src="<?php echo get_template_directory_uri() ?>/static/images/logo.svg" alt="デザイナー転職">
              デザイナー転職
            </h1>
          </div>
          <h2 class="site_sub_text">
            デザイナーへの転職情報を掲載
          </h2>
        </div>
      </section>
      <section class="main_content">