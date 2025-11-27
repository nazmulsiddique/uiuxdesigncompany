<?php get_header(); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_title('<h1 class="mb-3">', '</h1>');
                    the_content();
                endwhile;
            endif;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
