<?php
wp_enqueue_script('table', get_stylesheet_directory_uri() . '/resources/js/table.js', null);

wp_localize_script( 'table', 'ajax_object',
	array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );


add_filter('get_filters', function()
{
	return [
		'area' => [
			'title' => 'Plotas',
			'options' => [
				'ASC',
				'DESC'
			]
		],
		'roomCount' => [
			'title' => 'Kambarių skaičius',
			'options' => [
				'ASC',
				'DESC'
			]

		],
		'windowSide' => [

			'title' => 'Langų orientacija',
			'options' => [
				'Šiaurė',
				'Rytai',
				'Pietūs',
				'Vakarai'
			]
		],
		'status' => [
			'title' => 'Baigtumas',
			'options' => [
				'Pastatyta',
				'Statoma'
			]
		]
	];
});

add_action('display_table', function ()
{
	$args = [
		'maxRowsDesktop' => block_field('max-rows-desktop', false),
		'maxRowsMobile' => block_field('max-rows-mobile', false),
		'filters' => apply_filters('get_filters', '')
	];

	get_template_part('views/table-view', '', $args);
});

do_action('display_table');
