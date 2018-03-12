<?php
/**
 * API Router
 *
 * @package MKP
 * @since 0.1.0
 */

$which_api = $post->post_name;
include_once(get_template_directory().'/single-api-'.$which_api.'.php');
exit;

?>