<?php
/**
 * Template Name: Full-Width Page
 * Template Post Type: page
 *
 * @package Theme_Name
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main full-width">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'page');

            // If comments are open or there's at least one comment, load the comment template.
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        endwhile;
        ?>
    </main>
</div>

<?php
get_footer();
