<?php get_header(); ?>

<div class="top__container #js-hero">
	<div class="swiper-container top-swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide slide1"></div>
			<div class="swiper-slide slide2"></div>
			<div class="swiper-slide slide3"></div>
		</div>
		<!-- スクロールバー -->
		<!-- <div class="swiper-scrollbar"></div> -->
	</div><!-- /.swiper-container -->
	<!-- ページネーション -->
	<div class="swiper-pagination"></div>
	<!-- ページ移動 -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
	<!-- <div class="top__content"> -->
	<!-- <h2 class="top__title">街の皆さまの笑顔を守る<br>アットホームな歯医者さん</h2> -->
	<h2 class="top__title"></h2>
	<!-- </div> -->
</div><!-- /.top -->

<div class="top__news">
	<div class="top__news-contents">
		<div class="top__news-wrapper">
			<div class="top__news-title-wrapper">
				<h2 class="top__news-title-jp">お知らせ</h2>
				<h2 class="top__news-title-eg">NEWS</h2>
			</div><!-- /.top__news-title-wrapper -->
			<div class="top__news-past">
				<a href="<?php echo home_url('/news/'); ?>" class="top__past-link">過去のお知らせはこちら</a>
			</div><!-- /.top__news-past-link -->
		</div><!-- /.top__news-wrapper -->
		<div class="top__news-latest">

			<!-- 最新の投稿を取得 -->
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 1,
				'orderby' => 'date',
				'order' => 'DESC'
			);

			$latest = new WP_Query($args);
			?>

			<!-- 記事があれば表示 -->
			<?php if ($latest->have_posts()) : ?>
				<!-- 記事数分ループ  -->
				<?php while ($latest->have_posts()) : ?>
					<?php $latest->the_post(); ?>
					<a href="<?php the_permalink() ?>" class="top__news-link">
						<time class="top__news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
						<!-- タイトルを表示 -->
						<p class="top__news-article-title"><?php the_title(); ?></p>
					</a>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div><!-- /.top__news-latest -->
	</div><!-- /.top__news-contents -->

	<figure class="top__medical-time">
		<img src="<?php echo get_template_directory_uri() ?>/img/pc/top/medical-time-pc.png" alt="">
	</figure><!-- /.top__medical-time -->

</div><!-- /.top__news -->

<main>
	<div class="top__concept">
		<div class="top__concept-container container">
			<div class="top__concept-box wow slideInRight">
				<h2 class="top__concept-title c-title-eg wow slideInDown">CONCEPT</h2><!-- /.top__concept-title -->
				<div class="top__concept-lead-txt">健康的で素敵な笑顔あふれる<br>街づくりを目指して</div><!-- /.top__concept-lead-txt -->
				<p class="top__concept-txt">
					私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
					お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p><!-- /.top__concept-txt -->
				<div class="top__concept-button">
					<a href="<?php echo home_url('/about/'); ?>" class="c-btn to-about white">当院について</a>
				</div><!-- /.top__concept-button -->
			</div><!-- /.top__concept-box -->
			<div class="top__concept-image wow slideInLeft">
			</div><!-- /.top__concept-image -->
		</div><!-- /.top__concept-container -->
	</div><!-- /.top__concept -->

	<section class="top__recommend">
		<div class="top__recommend-container container">
			<h2 class="top__recommend-title c-title-jp wow slideInDown">
				当院の3つのおすすめ
			</h2><!-- /.top__recommend-title -->
			<dl class="top__recommend-list">
				<div class="top__recommend-item wow slideInLeft">
					<dt class="recommend-item-head">
					</dt>
					<dd class="recommend-item-text">歯の治療において、小さな違和感は大きなストレスにつながります。<br>私たちは常に快適な歯科医療技術の研究を行っております。</dd>
				</div>
				<div class="top__recommend-item wow slideInDown">
					<dt class="recommend-item-head">
					</dt>
					<dd class="recommend-item-text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</dd>
				</div>
				<div class="top__recommend-item wow slideInRight">
					<dt class="recommend-item-head">
					</dt>
					<dd class="recommend-item-text">朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
						<span class="c-text-accent">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
					</dd>
				</div>
			</dl><!-- /.top__recommend-list -->
		</div><!-- /.top__recommend-container -->
	</section><!-- /.top__recommend -->

	<div class="bg-deco-top"></div>
	<section class="top__guide">
		<div class="top__guide-container container">
			<h2 class="top__guide-title c-title-jp wow slideInDown">
				診療案内
			</h2><!-- /.top__guide-title -->
			<dl class="top__guide-card">
				<a href="<?php echo esc_url(home_url('/')); ?>medical#general" class="top__guide-card-item wow slideInLeft">
					<figure class="guide-card-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/pc/top/medical-card_2.png" loading="lazy" alt="一般診療">
					</figure>
					<div class="guide-card-text">
						<dt class="medical-cat">
							一般診療
						</dt>
						<dd class="medical-example">
							虫歯・入れ歯・小児歯科
						</dd>
					</div>
				</a><!-- /.top__guide-card-item -->

				<a href="<?php echo esc_url(home_url('/')); ?>medical#special" class="top__guide-card-item wow slideInRight">
					<figure class="guide-card-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/pc/top/medical-card_1.png" loading="lazy" alt="特別診療">
					</figure>
					<div class="guide-card-text">
						<dt class="medical-cat">
							特殊診療
						</dt>
						<dd class="medical-example">
							インプラント・ホワイトニング 予防歯科・口腔外科・審美歯科
						</dd>
					</div>
				</a><!-- /.top__guide-card-item -->
			</dl><!-- /.top__guide-card -->
			<div class="top__guide-text wow slideInDown">
				当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>
				痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br>
				<span class="c-text-accent">※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
			</div><!-- /.top__guide-text -->
		</div><!-- /.top__guide-container -->
	</section><!-- /.top__guide -->
	<div class="bg-deco-bottom"></div>


	<section class="top__blog">
		<div class="top__blog-container container">
			<h2 class="top__blog-title c-title-jp wow slideInDown">
				スタッフブログ
			</h2>
			<div class="top__blog-wrapper">
				<?php
				$recent_query = new WP_Query(
					array(
						'post_type' => 'blog',
						'posts_per_page' => 6,
						'orderby' => 'date',
						'order' => 'DESC',
					)
				);
				?>

				<?php if ($recent_query->have_posts()) : ?>
					<?php while ($recent_query->have_posts()) : ?>
						<?php $recent_query->the_post(); ?>
						<?php
						$days = 3;  									// NEWを付ける最新記事の期間(日数)
						$today = date_i18n('U'); 			// 現在の時間
						$entry = get_the_time('U');  	// 投稿日の時間
						$term = date('U', ($today - $entry)) / 86400;

						?>
						<a href="<?php the_permalink(); ?>" class="top__blog-body wow slideInDown js-wow <?php if ($days > $term) : ?>is-new<?php endif ?>">
							<figure class="top__blog-image">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail(); ?>
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri() ?>/img/pc/top/blog-card.png" alt="スタッフブログ" loading="lazy">
								<?php endif; ?>
							</figure>
							<div class="top__blog-text">
								<div class="top__blog-cat">
									<?php

									$terms = get_the_terms($recent_query->ID, 'blog-category');
									if ($terms) :
										foreach ($terms as $term) {
											echo $term->name;
										}
									endif;

									?>
								</div>
								<div class="top__blog-card-title">
									<?php the_title(); ?>
								</div>
								<div class="top__blog-date">
									<!-- 2020.02.14 -->
									<?php the_time('Y.m.d'); ?></p>
								</div>
							</div><!-- /.top__blog-text -->
						</a><!-- /.top__blog-body -->
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>

			</div><!-- /.top__blog-wrapper -->
			<div class="top__blog-button wow slideInDown">
				<a href="<?php echo esc_url(home_url('/')); ?>blog" class="c-btn to-archive white">スタッフブログ一覧はこちら</a>
			</div><!-- /.top__blog-button -->
		</div><!-- /.top__blog-container -->
	</section><!-- /.top__blog -->
</main><!-- /.main -->

<?php get_footer(); ?>