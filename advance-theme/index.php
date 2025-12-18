<?php
/**
 * The main template file
 *
 * @package Advance_Theme
 */

get_header();
?>

<main class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
        else :
            echo '<p>コンテンツが見つかりませんでした。</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
