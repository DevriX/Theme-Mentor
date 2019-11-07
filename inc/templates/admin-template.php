/**
 * Admin template
 */

<p><?php esc_html__e( ' Pick a theme from your theme folder', 'dx_theme_mentor' ); ?></p>

<div id="theme_mentor_admin_wrapper">
	<form id="dx_theme_mentor_form" action="" method="POST">
		<p>
			<label for="dx_theme"><?php esc_html__e( 'Themes: ', 'dx_theme_mentor' ); ?></label>
			<select id="dx_theme" name="dx_theme">
				<?php foreach ( $themes as $theme => $details ) { ?>
					<option value="<?php echo esc_attr( $theme ); ?>" <?php selected( esc_attr( $details['Stylesheet'] ), esc_attr( $selected ) ); ?>><?php echo esc_html( $details->get( 'Name' ) ); ?></option>
				<?php } ?>
			</select>
		</p>
		<p>
			Extra options (if any, like complex enabled) 
		</p>
		<input type="submit" value="<?php esc_attr__e( 'Do the Twist!', 'dx_theme_mentor' ); ?>" />
	</form> <!-- end of #dx_theme_mentor -->
</div>
