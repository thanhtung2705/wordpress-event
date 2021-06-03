<?php 
		$Footer = get_field('footer', 'option');
		?>  
			<footer class="footer">
				<div class="footer__wrap">
					<div class="footer__top">
						<div class="container">
							<div class="footer__list-top">
								<?php 
									dynamic_sidebar('widget-area-2');
								?>
							</div>

							<div class="footer__list-bottom">
								<?php 
									dynamic_sidebar('widget-area-3');
								?>
							</div>
						</div>
					</div>
					<div class="footer__bottom">
						<div class="container">
							<?php 
								dynamic_sidebar('widget-area-4');
							?>
						</div>
					</div>
				</div>	
			</footer>
			</div>
			<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&#38;key=AIzaSyDXTzcKeymQWRfKZgZGf_N6WuCK1HTxduo&#38;libraries=places" type="text/javascript"></script>

	</body>
</html>
