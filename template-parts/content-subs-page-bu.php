<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Rocked
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<br/>
					<strong>Για να δείτε το κάλεσμα και να εγγραφείτε στον κατάλογο, πατήστε <a href="https://ellak.gr/2015/12/katalogos-nomikon-pou-parechoun-ipiresies-schetikes-me-anichtes-technologies/">εδώ</a></strong>
					<div class="tbl-cont">
				<?php

				function parse_links($str)
				{
					$str = str_replace('https://www.', 'https://', $str);
					$str = str_replace('http://www.', 'http://', $str);
				    $str = str_replace('www.', 'http://', $str);
				    $str = preg_replace('|http://([a-zA-Z0-9-./]+)|', '<a href="http://$1">$1</a>', $str);
					$str = preg_replace('|https://([a-zA-Z0-9-./]+)|', '<a href="https://$1">$1</a>', $str);
				    $str = preg_replace('/(([a-z0-9+_-]+)(.[a-z0-9+_-]+)*@([a-z0-9-]+.)+[a-z]{2,6})/', '<a href="mailto:$1">$1</a>', $str);
				    return $str;
				}

					//print_r(Ninja_Forms()->form( 52 )->fields);
					$args = array(
					  'form_id'   => 52
					);
					// This will return an array of sub objects.
					$subs = Ninja_Forms()->subs()->get( $args );
					$names = Ninja_Forms()->subs()->get( $args );
					function cmp($a, $b)
						{
						    return strcmp($a->get_field( 226 ), $b->get_field( 226 ));
						}
						usort($names, "cmp");
					//ksort($names, SORT_STRING);
					usort($subs, "cmp");
					//natcasesort($names->get_field( 226 ));
					// This is a basic example of how to interact with the returned objects.
					// See other documentation for all the methods and properties of the submission object.
					$n = 1;
					foreach ( $names as $name ) {
					  $form_ids = $name->form_id;
					  $user_ids = $name->user_id;
					  // Returns an array of [field_id] => [user_value] pairs
					  $all_fieldss = $name->get_all_fields();
							if($name->get_field( 225 ) && $name->get_field( 226 )) {
								$fullname = $name->get_field( 226 )." ".$name->get_field( 225 );
								echo "<a href='#".$name->get_field( 227 )."'>".$n.". ".$fullname."</a><br/>";
							}
							$n++;
					}
					echo "</div>";
					echo "<br/>";


					foreach ( $subs as $sub ) {
					  $form_id = $sub->form_id;
					  $user_id = $sub->user_id;
					  // Returns an array of [field_id] => [user_value] pairs
					  $all_fields = $sub->get_all_fields();
					  // / Echoes out the submitted value for a field
					 if($sub->get_field( 225 )) {
					  echo "<a id='".$sub->get_field( 227 )."'></a><b>Όνομα:</b> ".$sub->get_field( 225 )."<br/>";
					 }
					 if($sub->get_field( 226 )) {
						echo "<b>Επίθετο:</b> ".$sub->get_field( 226 )."<br/>";
					 }
					 if($sub->get_field( 227 )) {
						echo "<b>Email:</b> ".$sub->get_field( 227 )."<br/>";
					 }
					 if($sub->get_field( 235 )) {
						echo "<b>Διεύθυνση:</b> ".$sub->get_field( 235 )."<br/>";
					 }
					 if($sub->get_field( 228 )) {
						echo "<b>Τηλέφωνο:</b> ".$sub->get_field( 228 )."<br/>";
					 }
					 if($sub->get_field( 229 )) {
						echo "<b>Νομικό Πρόσωπο:</b> ".$sub->get_field( 229 )."<br/>";
					 }
					 if($sub->get_field( 240 )) {
						echo "<b>Μέσα Κοινωνικής Δικτύωσης:</b> ".parse_links($sub->get_field( 240 ))."<br/>";
					 }
					 if($sub->get_field( 237 )) {
						echo "<b>Ιστοσελίδα:</b> ".parse_links($sub->get_field( 237 ))."<br/>";
					 }
					 if(strlen($sub->get_field( 232 )) > 2) {
						echo "<div class=\"more\"><b>Βιογραφικό Σημείωμα:</b> ".$sub->get_field( 232 )."</div><br/>";
					 }
					 if(strlen($sub->get_field( 233 )) > 2) {
						echo "<div class=\"more\"><b>Περιγραφή προσφερόμενων υπηρεσιών:</b> ".htmlspecialchars_decode(parse_links($sub->get_field( 233 )))."</div><br/>";
					 }
					 if($sub->get_field( 259 )) {
						//str_replace(" ", "Άλλες δράσεις (Αν το επιλέξετε συμπληρώστε και το παρακάτω πεδίο)");
						$dr = implode(". ",$sub->get_field( 259 ));
						$dr_ = str_replace("(Αν το επιλέξετε συμπληρώστε και το παρακάτω πεδίο)", "", $dr);
						if (strlen($dr_)) {
							echo "<div class=\"more\"><b>Εθελοντικές δράσεις:</b> ".htmlspecialchars_decode($dr_)."</div><br/>";
						}
					 }
					 if(strlen($sub->get_field( 293 )) > 2) {
							echo "<div class=\"more\"><b>Άλλες εθελοντικές δράσεις:</b> ".htmlspecialchars_decode($sub->get_field( 293 ))."</div><br/>";
					 }
					 echo "<hr><br/>";
				}
				?>
			</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rocked' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'rocked' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
