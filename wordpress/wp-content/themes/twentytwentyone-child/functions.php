<?php
function my_theme_enqueue_styles() {

	$parent_style = 'twentytwentyone';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	wp_enqueue_style('twentytwentyone-main',
		get_stylesheet_directory_uri() . '/style.css',
		array($parent_style),
		wp_get_theme()->get('Version')
	);

	wp_enqueue_script('header', get_stylesheet_directory_uri() . '/resources/js/header.js', null);
	wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/resources/fonts/fonts.css', null);
}

function enqueue_jquery()
{
	wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue_jquery');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('wp_ajax_nopriv_get_table_data', 'get_table_data');
add_action('wp_ajax_get_table_data', 'get_table_data');

function get_table_data()
{
	$area = $_POST['area'] ?? '';
	$roomCount = $_POST['roomCount'] ?? '';
	$windows = $_POST['windows'] ?? '';
	$status = $_POST['status'] ?? '';

	$query = "SELECT * FROM wp_mediapark";

	if($windows || $status) {
		$query .= " WHERE";

		if($windows) {
			$query .= " window_side = " . "'". $windows . "'";
		}
		if($status && $windows) {
			$query .= " AND status = " ."'". $status."'";

		} else if($status) {
			$query .= " status = " . "'".$status."'";
		}
	}

	if($area || $roomCount) {
		$query .= " ORDER BY";

		if($area) {
			$query .= " house_area " . $area;
		}
		if ($roomCount && $area) {
			$query .= ", room_count " . $roomCount;
		} else if($roomCount){
			$query .= " room_count " . $roomCount;
		}
	}

	global $wpdb;
	$response = $wpdb->get_results($query);
	echo json_encode($response);
	exit;

}
