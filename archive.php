<?php
/*
    template name: Archive
*/

get_header();
?>

<div class="container">
    <div class="categories">
        <?php
            $archive_posts = new WP_Query(array('post_type'=>'post','posts_per_page' => -1));

            if ($archive_posts->have_posts() ) : while ( $archive_posts->have_posts() ) : $archive_posts->the_post();

                the_title();

            endwhile; endif; wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>
