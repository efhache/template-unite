<?php
get_header();
?>
<?php

$topping_class = 'topping-federation';
$bg_class = 'bg-ls-vert-base';

if (is_category()) {

    $term = get_queried_object();

    switch ($term->slug) {

        case 'baladins':
            $topping_class = 'topping-baladins';
            $bg_class = 'bg-ls-baladins';
            break;

        case 'louveteaux':
            $topping_class = 'topping-louveteaux';
            $bg_class = 'bg-ls-vert-base';
            break;

        case 'eclaireurs':
            $topping_class = 'topping-eclaireurs';
            $bg_class = 'bg-ls-bleu-fonce';
            break;

        case 'pionniers':
            $topping_class = 'topping-pionniers';
            $bg_class = 'bg-ls-rouge';
            break;
			
		case 'unite':
			$topping_class = 'topping-federation';
			$bg_class = 'bg-ls-gris';
			break;
    }
}
?>

<div class="<?php echo $bg_class; ?> bg-topping-opacity-10">

    <div class="container">

        <div class="row <?php echo $topping_class; ?> topping-white topping-bottom-overflow topping-right topping-large">

            <div class="col-11 offset-md-1 pb-5 mt-5">

                <h1 class="mb-4 mt-5">
                    <?php the_archive_title(); ?>
                </h1>

                <?php if (term_description()) : ?>
                    <div class="pb-5">
                        <?php echo term_description(); ?>
                    </div>
                <?php endif; ?>

            </div>

        </div>

    </div>

</div>


<article>

<div class="container mb-5">

    <div class="row mt-5">

        <div class="col-md-9">

            <div class="above-topping">

                <div class="row">

                    <?php if (have_posts()) : ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <div class="col-md-6">
								<div class="card mb-3 h-100">
									<div class="row g-0">
										<div class="col-md-4">
											<div class="sc_img_thumbnails">
												<?php the_post_thumbnail('scout-thumbnail'); ?>
											</div>
										</div>
										<div class="col-md-8">
											<div class="card-body">
												<p class="small text-muted">
													<?php echo get_the_date('j F Y'); ?>
												</p>
												<hr>
												<h5 class="card-title">
													<?php the_title(); ?>
												</h5>
												<p class="card-text">
													<?php the_excerpt(); ?>
												</p>
												<p class="text-end mt-3">
													<a href="<?php the_permalink();?>" class="fw-bold"> Lire l'article 
													<i class="bi bi-chevron-right"></i> 
													</a>
												</p>
											</div>
										</div>
									</div>
								</div>
                            </div>

                        <?php endwhile; ?>

                        <div class="col-12">
                            <?php the_posts_pagination(); ?>
                        </div>

                    <?php else : ?>

                        <div class="col-12">
                            <p>Aucun article trouvé.</p>
                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="above-topping">

                <?php get_sidebar(); ?>

            </div>

        </div>

    </div>

</div>

</article>

<?php
get_footer();
?>
