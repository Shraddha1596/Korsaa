<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php //printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?>
		<?php printf('Psykolog Finn Korsaa - Vimmelskaftet 41 A, 3. sal - 1161 København K - Telefon 31 31 30 10 - Email: Finn@korsaa.dk');?>
		
	</a>
</div><!-- .site-info -->
