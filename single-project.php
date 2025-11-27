<?php get_header(); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

            <?php while ( have_posts() ) : the_post(); ?>

                <!-- Title -->
                <h1 class="mb-3"><?php the_title(); ?></h1>

                <!-- Featured Image -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="mb-4">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                    </div>
                <?php endif; ?>

                <!-- Content -->
                <div class="mb-4">
                    <?php the_content(); ?>
                </div>

                <!-- Category -->
                <p><strong>Category:</strong>
                    <?php echo get_the_term_list(get_the_ID(), 'category', '', ', '); ?>
                </p>

                <!-- Tags -->
                <p><strong>Tags:</strong>
                    <?php echo get_the_term_list(get_the_ID(), 'post_tag', '', ', '); ?>
                </p>

                <hr>

                <!-- Navigation -->
                <div class="d-flex justify-content-between">
                    <div><?php previous_post_link('%link', '← Previous'); ?></div>
                    <div><?php next_post_link('%link', 'Next →'); ?></div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
