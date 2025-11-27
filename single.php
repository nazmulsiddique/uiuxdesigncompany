<?php get_header(); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>

            <h1><?php the_title(); ?></h1>
            <div class="text-muted mb-3">
                Posted on <?php echo get_the_date(); ?> | By <?php the_author(); ?>
            </div>

            <?php the_content(); ?>

            <hr>
            <div class="tags">
                <?php the_tags('Tags: ', ', '); ?>
            </div>

            <?php comments_template(); ?>

            <?php
                endwhile;
            endif;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
