<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scout_unite_template
 */

get_header(); ?>
<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<article>
<?php if (have_posts()) : while (have_posts()):the_post(); ?>
	<div class="bg-ls-bleu-clair bg-topping-federation topping-white bg-topping-opacity-10">
		<div class="container">
			<h1 class="display-3 pt-5 pb-5">
				<?php the_title(); ?>
			</h1>
		</div>
	</div>
        <div class="container mb-5">
            
			<div class="row mt-5">
				<div class="col-md-9">
					<div class="topping-federation topping-top topping-right topping-large mb-5 bg-topping-opacity-50">
						<div class="above-topping">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
 
			</div>
            
            <div class="row mt-2 mb-5">
                <div class="col-md-12">
                </div>
            </div>
            
        </div>
	<?php endwhile; else :?>
	<p>Aucun page trouvée !</p>
	<?php endif; ?>
	
</article>

<?php get_footer(); ?>
