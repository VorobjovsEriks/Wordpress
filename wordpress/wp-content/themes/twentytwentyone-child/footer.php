<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<div class="site-info__block">
			<div class="site-info__block--title">
				Apie statytoją
			</div>
			<div class="site-info__block--element">
				Lorem ipsum
			</div>
			<div class="site-info__block--element">
				Dolor sit amet
			</div>

		</div>
		<div class="site-info__block">
			<div class="site-info__block--title">
				Saugumas
			</div>
			<div class="site-info__block--element">
				Consectetur adipiscing
			</div>
			<div class="site-info__block--element">
				Sed do eiusmod
			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
