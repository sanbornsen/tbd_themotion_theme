<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themotion
 */

?>

		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container container-footer">
			<div class="footer-inner">

			<?php
			get_template_part( 'template-parts/footer', 'content' );

				get_sidebar( 'footer' ); ?>
			</div>

      <?php
        $server_name = sprintf(
                        "%s://%s",
                        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
                        $_SERVER['SERVER_NAME']
                      );
      ?>

      <div class="site-info">
        © <?php echo date("Y");?> <a href="<?php echo $server_name;?>">The Bong Diary</a> |
        Powered by <a href="<?php echo $server_name;?>">The Bong Diary</a> |
        Made with &hearts; by <a href="https://www.facebook.com/ssudipta.ssen" target="_blank">Sanborn</a>
      </div>
		</div><!-- .container-footer -->
	</footer><!-- #colophon -->
</div><!-- #themotion-page -->

<?php wp_footer(); ?>

</body>
</html>
