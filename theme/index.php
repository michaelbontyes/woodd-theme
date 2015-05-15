<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package woodd
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
		<div class="hero">
        	<div class="hero-inner">
            <a href="" class="hero-logo"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png
        " alt="Logo Image"></a>
        		<div class="hero-copy">
        			<h1>Short description of Product</h1>
        			<p>A few reasons why this product is worth using, who it's for and why they need it.</p>	
        		</div>
            <button>Learn More</button>
        	</div>
        </div>
		
		<div class="grid-items">
          <a href="javascript:void(0)" class="grid-item">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="">
            <h1>Grid Item</h1>
            <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
          </a>
          <a href="javascript:void(0)" class="grid-item grid-item-big grid-item-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2.png" alt="">
            <h1>Grid Item With an Image</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, illum.</p>
          </a>
          <a href="javascript:void(0)" class="grid-item grid-item-big">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3.png" alt="">
            <h1>Another Wide Item</h1>
            <p>Lorem ipsum consectetur dolor sit amet, consectetur adipisicing elit. Rem, illum.</p>
          </a>
          <a href="javascript:void(0)" class="grid-item">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2.png" alt="">
            <h1>Last Grid Item</h1>
            <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
          </a>
          <a href="javascript:void(0)" class="grid-item">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2.png" alt="">
            <h1>Last Grid Item</h1>
            <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
          </a>
          <a href="javascript:void(0)" class="grid-item">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3.png" alt="">
            <h1>A Grid Item</h1>
            <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
          </a>
          <a href="javascript:void(0)" class="grid-item">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="">
            <h1>Item</h1>
            <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
          </a>
        </div>

        parallax
        <div id="js-parallax-window" class="parallax-window">
          <div class="parallax-static-content">
            <b>Parallax Window</b>
          </div>
          <div id="js-parallax-background" class="parallax-background"></div>
        </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
