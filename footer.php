<div class="footer__bg-wave"></div>
<footer class="footer">
	<div class="footer__container">
		<div class="footer__info wow slideInDown">
			<div class="footer__info-box wow slideInLeft">
				<h1 class="footer__logo">
					<img class="footer__logo-image" src="<?php echo get_template_directory_uri() ?>/img/pc/top/logo-footer.png" alt="">
				</h1>
				<div class="footer__access">
					<div class="footer__address">
						〒166-0001　東京都杉並区阿佐谷北7-3-1
					</div>
				</div>
				<div class="c-tel-number f-parts">
					03-1234-5678
				</div><!-- /.c-tel-number -->
				<div class="footer__business-time">(年中無休 AM9:00〜PM22:00)</div>
				<div class="footer__button">
					<div class="footer__web-reserve">
						<a href="<?php echo esc_url(home_url('/')); ?>reservation" class="c-btn to-web-reserve main">
							<div class="footer__btn-wrapper">
								<figure class="footer__btn-icon reserve">
									<svg xmlns="http://www.w3.org/2000/svg" width="25.05" height="14.67" viewBox="0 0 48.858 28.613">
										<g id="icon-pc" transform="translate(0 -190.769)">
											<path id="mobile-alt" d="M11.716,0H2.068A2.068,2.068,0,0,0,0,2.068V19.986a2.068,2.068,0,0,0,2.068,2.068h9.649a2.068,2.068,0,0,0,2.068-2.068V2.068A2.068,2.068,0,0,0,11.716,0ZM6.892,20.675A1.378,1.378,0,1,1,8.27,19.3,1.377,1.377,0,0,1,6.892,20.675Zm4.824-4.652a.518.518,0,0,1-.517.517H2.584a.518.518,0,0,1-.517-.517V2.584a.518.518,0,0,1,.517-.517H11.2a.518.518,0,0,1,.517.517Z" transform="translate(35.074 197.328)" fill="#fff" />
											<path id="desktop" d="M29.507,0H2.682A2.683,2.683,0,0,0,0,2.682V20.565a2.683,2.683,0,0,0,2.682,2.682h10.73l-.894,2.682H8.494a1.341,1.341,0,1,0,0,2.682h15.2a1.341,1.341,0,1,0,0-2.682H19.671l-.894-2.682h10.73a2.683,2.683,0,0,0,2.682-2.682V2.682A2.683,2.683,0,0,0,29.507,0Zm-.894,19.671H3.577V3.577H28.613Z" transform="translate(0 190.769)" fill="#fff" />
										</g>
									</svg>
								</figure>
								<span class="footer__btn-name">WEB予約</span>
							</div><!-- /.footer__btn-wrapper -->
						</a>
					</div>
					<div class="footer__contact">
						<a href="<?php echo esc_url(home_url('/')); ?>contact" class="c-btn to-contact white">
							<div class="footer__btn-wrapper">
								<figure class="footer__btn-icon contact">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 22.799 18">
										<g id="icon-contact" transform="translate(1.4 1)">
											<path id="パス_43721" data-name="パス 43721" d="M5,6H21a2.006,2.006,0,0,1,2,2V20a2.006,2.006,0,0,1-2,2H5a2.006,2.006,0,0,1-2-2V8A2.006,2.006,0,0,1,5,6Z" transform="translate(-3 -6)" fill="none" stroke="#1391e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
											<path id="パス_43722" data-name="パス 43722" d="M23,9,13,16.476,3,9" transform="translate(-3 -6.864)" fill="none" stroke="#1391e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
										</g>
									</svg>
								</figure>
								<span class="footer__btn-name">お問い合わせ</span>
							</div>
						</a>
					</div>
				</div><!-- /.footer__button -->
				<figure class="footer__medical-time">
					<img src="<?php echo get_template_directory_uri() ?>/img/pc/footer/medicalTimeSheet.png" alt="">
				</figure><!-- /.footer__medical-time -->
			</div><!-- /.footer__info-box -->
			<div class="footer__map wow slideInRight">
				<div class="footer__iframe-wrap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6479.560920514215!2d139.64036408363938!3d35.70701974933483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1682904106022!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div><!-- /.footer__iframe-wrap -->
			</div><!-- /.footer__map -->
		</div><!-- /.footer__info -->
		<div class="footer__link-wrapper">
			<div class="footer__nav-section">
				<h3 class="footer__link-title wow slideInDown">TOP</h3>
				<div class="footer__link-item">
					<ul class="footer__link-list">
						<!-- <li class="footer__link"></li> -->
					</ul><!-- /.footer__link-list -->
				</div><!-- /.footer__link-item -->
			</div><!-- /.footer__nav-section -->

			<div class="footer__nav-section">
				<h3 class="footer__link-title wow slideInDown" data-wow-delay=".1s">当院について</h3>
				<div class="footer__link-item">
					<?php
					wp_nav_menu(
						array(
							'depth' => 1,
							'theme_location' => 'footer-1', // グローバルメニューをここに表示すると指定
							'container' => '',
							'menu_class' => 'footer__link-list wow slideInDown',
							'add_li_class' => 'footer__link',
						)
					);
					?>
				</div><!-- /.footer__link-item -->
			</div><!-- /.footer__nav-section -->

			<div class="footer__nav-section">
				<h3 class="footer__link-title wow slideInDown" data-wow-delay=".2s">スタッフ紹介</h3>
				<div class="footer__link-item">
					<?php
					wp_nav_menu(
						array(
							'depth' => 1,
							'theme_location' => 'footer-2', // グローバルメニューをここに表示すると指定
							'container' => '',
							'menu_class' => 'footer__link-list wow slideInDown',
							'add_li_class' => 'footer__link',
						)
					);
					?>
				</div><!-- /.footer__link-item -->
			</div><!-- /.footer__nav-section -->

			<div class="footer__nav-section">
				<h3 class="footer__link-title wow slideInDown" data-wow-delay=".3s">診療内容</h3>
				<div class="footer__link-item">
					<?php
					wp_nav_menu(
						array(
							'depth' => 1,
							'theme_location' => 'footer-3', // グローバルメニューをここに表示すると指定
							'container' => '',
							'menu_class' => 'footer__link-list wow slideInDown',
							'add_li_class' => 'footer__link',
						)
					);

					wp_nav_menu(
						array(
							'depth' => 1,
							'theme_location' => 'footer-4', // グローバルメニューをここに表示すると指定
							'container' => '',
							'menu_class' => 'footer__link-list wow slideInDown',
							'add_li_class' => 'footer__link',
						)
					);
					?>
				</div><!-- /.footer__link-item -->
			</div><!-- /.footer__nav-section -->

			<div class="footer__nav-section">
				<h3 class="footer__link-title wow slideInDown" data-wow-delay=".4s">お問い合わせ</h3>
				<div class="footer__link-item">
					<?php
					wp_nav_menu(
						array(
							'depth' => 1,
							'theme_location' => 'footer-5', // グローバルメニューをここに表示すると指定
							'container' => '',
							'menu_class' => 'footer__link-list wow slideInDown',
							'add_li_class' => 'footer__link',
						)
					);
					?>
				</div><!-- /.footer__link-item -->
			</div><!-- /.footer__nav-section -->
		</div><!-- /.footer__link-list -->

		<a href="#" class="footer__totopLink"></a>
	</div><!-- /.footer__container -->
	<div class="footer__copyright">&copy;2020-2021 みなみ歯科クリニック</div><!-- /.footer__copyright -->
</footer><!-- /.footer -->
</div><!-- /.wrapper -->
<!-- スクリプトファイル -->
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- swiper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
<!-- <script src="./js/script.js"></script> -->

<?php wp_footer(); ?>
</body>

</html>