<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div class="site-branding">
	<h1 class="site-title">NTPROJECT</h1>
</div>
	<nav id="site-navigation" class="child-primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
		<div class="child-menu-button-container">
			<button id="child-primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'twentytwentyone' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
				<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'twentytwentyone' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
		<div class="primary-menu-container">
			<ul id="child-primary-menu-list" class="child-menu-wrapper">
				<li class="menu-item menu-item-type-custom menu-item-object-custom">
					<a href="#slider">Pradžia</a>
				</li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom">
					<a href="#table">Pasiūlymai</a>

				</li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom">
					<a href="#news">Naujienos</a>

				</li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom">
					<a href="#form">Kontaktai</a>

				</li>

			</ul>
		</div>
	</nav><!-- #site-navigation -->
