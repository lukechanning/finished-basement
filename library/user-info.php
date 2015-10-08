<?php
add_action( 'show_user_profile', 'custom_user_info' );
add_action( 'edit_user_profile', 'custom_user_info' );

function custom_user_info( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">
        <!-- Cell -->
		<tr>
			<th><label for="cell">Cell</label></th>

			<td>
				<input type="text" name="cell" id="cell" value="<?php echo esc_attr( get_the_author_meta( 'cell', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your cell number.</span>
			</td>
		</tr>
	    <!-- Phone -->
		<tr>
			<th><label for="phone">Phone</label></th>

			<td>
				<input type="text" name="phone" id="phone" value="<?php echo esc_attr( get_the_author_meta( 'phone', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your phone number.</span>
			</td>
		</tr>
	    <!-- Email -->
		<tr>
			<th><label for="email">Email</label></th>

			<td>
				<input type="text" name="email" id="email" value="<?php echo esc_attr( get_the_author_meta( 'email', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your preferred contact email.</span>
			</td>
		</tr>
        <!-- Twitter -->
		<tr>
			<th><label for="twitter">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Twitter username.</span>
			</td>
		</tr>
		<!-- Facebook -->
		<tr>
			<th><label for="facebook">Facebook</label></th>

			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Facebook username.</span>
			</td>
		</tr>

	</table>
<?php }

add_action( 'personal_options_update', 'save_custom_user_info' );
add_action( 'edit_user_profile_update', 'save_custom_user_info' );

function save_custom_user_info( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'facebook' to the field ID. */
	update_usermeta( $user_id, 'cell', $_POST['cell'] );
	update_usermeta( $user_id, 'phone', $_POST['phone'] );
	update_usermeta( $user_id, 'email', $_POST['email'] );
	update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
	update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
}

?>