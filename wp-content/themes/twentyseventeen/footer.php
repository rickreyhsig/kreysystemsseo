<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<p>KreySystems SEO LLC </p>
<a href='https://www.facebook.com/kreysystemsseo/' style="">
<i class="fa fa-facebook" aria-hidden="true"></i></a> 

<a href ='https://www.yelp.com/biz/kreysystems-seo-silver-spring' style="margin-left:40px;"> 
<i class="fa fa-yelp" aria-hidden="true"></i> </a>

<a href ='https://linkedin.com/company/kreysystemsseo' style="margin-left:40px;">
<i class="fa fa-linkedin" aria-hidden="true"></i> </a>

<a href ='https://plus.google.com/u/1/116028481102208174484' style="margin-left:40px;">
<i class="fa fa-google-plus" aria-hidden="true"></i> </a>

<a href ='https://twitter.com/kreysystemsseo' style="margin-left:40px;">
<i class="fa fa-twitter" aria-hidden="true"></i> </a>

<a href ='https://www.pinterest.com/kreysystemsseo/' style="margin-left:40px;">
<i class="fa fa-pinterest" aria-hidden="true"></i> </a>

				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				
				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
