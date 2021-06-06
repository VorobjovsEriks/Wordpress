<?php
function my_theme_enqueue_styles()
{

	$parent_style = 'twentytwentyone';

	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');

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
add_action("after_switch_theme", "table_create");

function get_table_data()
{
	$area = $_POST['area'] ?: '';
	$roomCount = $_POST['roomCount'] ?: '';
	$windows = $_POST['windows'] ?: '';
	$status = $_POST['status'] ?: '';

	$query = "SELECT * FROM wp_mediapark";

	if ($windows || $status) {
		$query .= " WHERE";

		if ($windows) {
			$query .= " window_side = " . "'" . $windows . "'";
		}
		if ($status && $windows) {
			$query .= " AND status = " . "'" . $status . "'";

		} else if ($status) {
			$query .= " status = " . "'" . $status . "'";
		}
	}

	if ($area || $roomCount) {
		$query .= " ORDER BY";

		if ($area) {
			$query .= " house_area " . $area;
		}
		if ($roomCount && $area) {
			$query .= ", room_count " . $roomCount;
		} else if ($roomCount) {
			$query .= " room_count " . $roomCount;
		}
	}

	global $wpdb;
	$response = $wpdb->get_results($query);
	echo json_encode($response);
	exit;

}

function table_create()
{
	global $wpdb;
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	$table_name = "wp_mediapark";
	$sql = "CREATE TABLE $table_name (
     id int(10) NOT NULL AUTO_INCREMENT,
     discount int(2),
	 house_nr int(10) DEFAULT 0,
	 house_area decimal(5,2) NOT NULL,
	 room_count int(32) DEFAULT 1,
	 window_side varchar(32),
	 status text NOT NULL,
	 PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	dbDelta( $sql );

	insert_data();
}

function insert_data()
{
	global $wpdb;

	$wpdb->query("INSERT INTO wp_mediapark
            VALUES (1,5,1,50.17,2,'Rytai','Statoma'),
                                  (2,null,1,35.00,1,'Rytai','Statoma'),
                                  (3,15,2,50.17,2,'Rytai','Pastatyta'),
                                  (4,10,2,60.00,3,'Pietūs','Pastatyta'),
                                  (5,5,1,50.17,2,'Rytai','Statoma'),
                                  (6,20,1,50.17,2,'Pietūs','Pastatyta'),
                                  (7,null,1,50.17,2,'Rytai','Statoma'),
                                  (8,null,1,50.17,2,'Rytai','Statoma'),
                                  (9,5,1,50.17,2,'Pietūs','Pastatyta'),
                                  (10,null,1,35.00,1,'Rytai','Pastatyta'),
                                  (11,5,2,60.00,3,'Pietūs','Pastatyta'),
                                  (12,5,1,35.00,1,'Rytai','Statoma'),
                                  (13,10,2,60.00,3,'Rytai','Statoma'),
                                  (14,5,1,50.17,2,'Rytai','Pastatyta'),
                                  (15,null,1,50.17,2,'Pietūs','Statoma'),
                                  (16,25,1,60.00,3,'Pietūs','Statoma'),
                                  (17,55,3,35.00,1,'Pietūs','Pastatyta'),
                                  (18,35,3,50.17,2,'Pietūs','Statoma'),
                                  (19,null,1,60.00,3,'Pietūs','Pastatyta'),
                                  (20,5,1,35.00,1,'Rytai','Statoma')");
}

