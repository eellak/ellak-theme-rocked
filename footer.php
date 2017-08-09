<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Rocked
 */
?>

			</div>
		</div>
	</div>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<?php echo __( '<a href="https://mathe.ellak.gr/" target="_blank">Υλοποίηση με χρήση του Ανοικτού Λογισμικού</a>', 'gpchild-ellak-opengov' )
			. ' <a href="https://wordpress.org/" target="_blank">Wordpress</a> | '
			. '<a href="https://ellak.gr/ori-chrisis" target="_blank">'
			. __( 'Όροι Χρήσης & Δήλωση Απορρήτου', 'gpchild-ellak-opengov' ) . '</a> | '
			. __( 'Άδεια χρήσης περιεχομένου:', 'gpchild-ellak' )
			. ' <a href="https://creativecommons.org/licenses/by-sa/4.0/deed.el">'
			. __( 'CC-BY-SA', 'gpchild-ellak' ) . '</a> | '
			. ' <a href="https://ellak.gr/stichia-epikinonias-chartis/">'
			. __( 'Επικοινωνία', 'gpchild-ellak' ) . '</a>'; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<a class="go-top">
	<i class="fa fa-angle-up"></i>
</a>

<?php wp_footer(); ?>

</body>
</html>
