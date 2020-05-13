<div class="column_box">
	<!-- サムネ -->
	<div class="column_img">
		<?php the_post_thumbnail();  ?>
	</div>

	<div class="column_box_detail">
		<!-- 日付 -->
		<span class="column_box_day new">
			<?php the_time('Y/m/d'); ?>
		</span>
		<!-- タイトル -->
		<h2 class="cloumn_box_title"><?php the_title(); ?></h2>
		<!-- 抜粋テキスト -->
		<div class="column_box_text">
			<?php the_excerpt();  ?>
		</div><!-- exerpt-content -->
		<!-- カテゴリー -->
		<span class="column_box_category_link">
			<h3><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></h3>
		</span>

		<a href="<?php the_permalink(); ?>" class="more_link"></a>

	</div><!-- column_box_detail -->
</div><!-- column_box -->
