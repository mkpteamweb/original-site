<?php
/**
* Functions: Utility
*
* @package    WordPress
* @subpackage MKP
* @since 1.0
*/

/**
* Get Page by Template
*
* Returns an object of the first page with the given
* template.
*/
function mkp_page_by_template($template) {
	$pages = get_posts(array(
		"post_type" => "page",
		"meta_key" => "_wp_page_template",
		"posts_per_page"=>1,
		"meta_value" => $template
	));
	if ($pages) {
		foreach($pages as $page){
			$object = $page;
		}
		if ($object) return $object;
	} else {
		return false;
	}
}
