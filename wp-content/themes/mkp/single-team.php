<?php
/**
 * Single Team
 *
 * @package MKP
 * @since 0.1.0
 */

echo '<p>You cannot view an individual Team member: Team members do not have their own Pages (clicking a Team member in the grid opens a modal with a video).</p>';
echo '<p>Visit the Team page to see the grid. (This is whichever page you have assigned the Team Layout template to.)</p>';
echo '<p><a href="'.get_bloginfo('url').'/wp-admin/post.php?post='.$post->ID.'&action=edit">Return to editing this Team member</a>.</p>';

exit;

?>