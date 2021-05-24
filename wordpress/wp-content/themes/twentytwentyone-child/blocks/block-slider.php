<?php
require_once(dirname(__FILE__).'/../api/unsplash.php');

wp_enqueue_script('media-query', get_stylesheet_directory_uri() . '/resources/js/mediaQuery.js', null);
wp_enqueue_script('slider', get_stylesheet_directory_uri() . '/resources/js/slider.js', null);

add_action('display_slider', function ($data = null)
{
	$data = json_decode($data);
	$cards = [];
	foreach ($data as $d) {
		$image = $d->urls->full;
		$description = $d->description ?: $d->alt_description;
		$description = mb_strimwidth($description, 0, 75, "...");
		$cards[] = ['img' => $image, 'desc' => $description];
	}
	$args['title'] = 'Lorem ipsum dolor sit amet conset';
	$args['data'] = $cards;


	get_template_part('views/slider-view', '', $args);
});
$response = getUnsplash(5);
if($response) {
	do_action('display_slider', $response);
}

