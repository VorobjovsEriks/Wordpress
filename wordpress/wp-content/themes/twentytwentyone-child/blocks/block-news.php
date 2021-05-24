<?php
require_once(dirname(__FILE__).'/../api/unsplash.php');

add_action('display_news', function ($data = null)
{
	$data = json_decode($data);
	$cards = [];
	foreach ($data as $d) {
		$image = $d->urls->full;
		$description = $d->description ?: $d->alt_description;
		$description = mb_strimwidth($description, 0, 75, "...");
		$cards[] = ['img' => $image, 'desc' => $description];
	}
	$args['title'] = 'Naujienos';
	$args['data'] = $cards;

	get_template_part('views/news-view', '', $args);
});
$response = getUnsplash(6);
if($response) {
	do_action('display_news', $response);
}
