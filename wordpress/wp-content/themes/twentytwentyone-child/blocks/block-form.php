<?php
wp_enqueue_script('form', get_stylesheet_directory_uri() . '/resources/js/form.js', null);

add_action('display_form', function ()
{
	get_template_part('views/form-view');
});

do_action('display_form');
