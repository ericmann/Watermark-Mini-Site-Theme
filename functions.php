<?php
function greeting_override() {
	return "Leave a new note ...";
}
add_filter( 'p2_get_user_prompt', 'greeting_override' );
?>