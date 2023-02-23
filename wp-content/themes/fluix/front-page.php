<?php get_header(); ?>
    <main class="py-5">
        <div class="container">
            <h1 class="page-title text-center mb-5"><?php the_title();?></h1>
            <?php the_content();?>
        </div>
    </main>
<?php
get_footer();