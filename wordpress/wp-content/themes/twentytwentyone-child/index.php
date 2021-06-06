<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

add_action('load-form', function ()
{
	get_template_part('blocks/block-form');
});
add_action('load-news', function ()
{
	get_template_part('blocks/block-news');
});
add_action('load-slider', function ()
{
	get_template_part('blocks/block-slider');
});
add_action('load-table', function ()
{
	get_template_part('blocks/block-table');
});

do_action('load-slider');
do_action('load-table');
do_action('load-news');
do_action('load-form');

get_footer();
