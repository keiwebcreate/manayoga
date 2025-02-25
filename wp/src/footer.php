<footer class="l-footer">
	<?php if( !is_404() ): ?>
	<div class="l-footer__cta">
		<p>
			さあ、共に踏みだそう。
		</p>
		<a href="<?php echo esc_url(home_url('/recruitment')) ?>">
			ENTRY
		</a>
	</div>
	<?php endif; ?>
	<div class="l-footer__inner">
		<div class="l-footer__wrap">
			<div class="l-footer__sp-wrap">
				<h1 class="l-footer__logo">
					<a href="<?php  echo esc_url(home_url()); ?>">
						<!-- logo -->
						 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.webp" alt="マナヨガリクルート">
					</a>
				</h1>
				<div class="l-footer__link">
					<div class="sns-link">
						<a href="" title="Instagram">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/Instagram_Glyph_Gradient.webp" alt="">
						</a>
						<a href="" title="Youtube">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/youtube_social_icon_dark.webp" alt="">
						</a>
					</div>
					<a href="<?php echo esc_url(home_url('/recruitment')); ?>" class="cta">
						募集要項
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12" fill="none">
								<path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM17.5303 6.53033C17.8232 6.23744 17.8232 5.76256 17.5303 5.46967L12.7574 0.696699C12.4645 0.403806 11.9896 0.403806 11.6967 0.696699C11.4038 0.989593 11.4038 1.46447 11.6967 1.75736L15.9393 6L11.6967 10.2426C11.4038 10.5355 11.4038 11.0104 11.6967 11.3033C11.9896 11.5962 12.4645 11.5962 12.7574 11.3033L17.5303 6.53033ZM1 6.75H17V5.25H1V6.75Z" fill="#753B8A"/>
							</svg>
						</span>
					</a>
				</div>
			</div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'global',
					'menu_class' => 'l-footer__nav-items',
					'container' => 'nav',
					'container_class' => 'l-footer__nav',
				) );
			?>
		</div>

		<div class="l-footer__policy">
			<a href="">
				プライバシーポリシー
			</a>
			<a href="" target="_blank" rel="noopener">
				外部サイト
				<span>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
						<g clip-path="url(#clip0_2306_3550)">
							<path d="M10.0006 14.5002V6.4996H2V14.5002H10.0006ZM12.0006 16.5002H0V4.4996H12.0006V16.5002ZM16.0002 12.5006H13.9986V2.4998H3.9996V0.5H16.0002V12.5006Z" fill="#753B8A"/>
						</g>
						<defs>
							<clipPath id="clip0_2306_3550">
								<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
							</clipPath>
						</defs>
					</svg>
				</span>
			</a>
		</div>

		<div class="l-footer__copyright">
				&copy; 2024 Mana Yoga  Recruit
		</div>
	</div>
</footer>

	<!-- functions.php呼び出し -->
	<?php wp_footer(); ?>
</body>
</html>