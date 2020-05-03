<?php
if ( is_singular( 'post' ) ) { //個別投稿の場合
	$postid   = get_the_ID(); //投稿のIDを取得
	$cat = get_the_category();

	$catarray = [];
	foreach ( $cat as $date ) {
		$catarray[] = $date->cat_ID;
	}

	$args = [
		'posts_per_page' => 3,
		'category__in'   => $catarray,
		'orderby'        => 'asc',
		'exclude'        => $postid,
	];

	$myposts = get_posts( $args ); //$argsの条件を満たすデータを取得する

	echo '<section class="recommend_article">';
	echo '<div class="common_wrap">';
	echo '<div class="common_inner">';
	echo '<h2 class="content_title">RECOMMENDED ARTICLE</h2>';
	echo '<h3 class="content_sub_title">同じカテゴリーのデザイナー転職記事</h3>';
	if ( $myposts ) :
		echo '<div class="recommend_article_box_wrap">';
		foreach ( $myposts as $post ) : 
			setup_postdata( $post ); ?>
				<?php get_template_part( 'excerpt_sub' ); ?>
		<?php endforeach;
		wp_reset_postdata(); 
		echo '</div>';
	else :
		echo '記事はありません';
	endif;
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</section>';
} //is_singlar( 'post' ) 
?>
