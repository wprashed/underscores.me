// Create the custom full-width page template
$custom_page_template = "<?php\n/**\n * Template Name: Full-Width Page\n * Template Post Type: page\n *\n * @package $theme_name\n */\n\nget_header(); ?>\n<div id=\"primary\" class=\"content-area\">\n<main id=\"main\" class=\"site-main full-width\">\n<?php\nwhile ( have_posts() ) :\n    the_post();\n    get_template_part( 'template-parts/content', 'page' );\n    if ( comments_open() || get_comments_number() ) {\n        comments_template();\n    }\nendwhile;\n?>\n</main>\n</div>\n<?php get_footer(); ?>";
file_put_contents( $theme_path . '/page-fullwidth.php', $custom_page_template );
