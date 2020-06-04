<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package philips
 */
?>

<?php $philips_url = esc_url('https://themepoints.com'); ?>
	
<div class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="copyright text-center">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'philips' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'philips' ), 'WordPress' ); ?></a>
					<?php printf( esc_html__( '%1$s by %2$s.', 'philips' ), 'Philips', '<a href="'.$philips_url.'" rel="designer">Themepoints</a>' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>	


<?php wp_footer(); ?>

</body>
</html>
