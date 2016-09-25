<?php get_header(); ?>

<div class="l-container">
    <main role="main" class="l-col-8 l-pad-2" id="posts">
        <?php
        while (have_posts()) : the_post();
            get_template_part( 'partials/content', 'excerpt' );
        endwhile;
        ?>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
    </main>

    <aside role="complementary" class="widgets l-col-4 l-pad-2" >
        <?php get_sidebar(); ?>
    </aside>
</div>

<?php get_footer(); ?>
