<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				
				<div class="row">
					<div class="small-12 medium-6 columns">
						<figure class="float-left">
							<a href="#">
								<img src="<?php echo get_assets_directory() . 'logo-tiny.png'; ?>" alt="">
							</a>
						</figure>
					</div>
				</div>
				
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
	document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.17.2'><\/script>".replace("HOST", location.hostname));
	//]]></script>

</body>
</html>
