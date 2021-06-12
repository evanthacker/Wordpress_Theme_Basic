<?php get_header(); ?>
    <div class="container">
        <div class="main">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                    <article class="post">
                                        <?php if(has_post_thumbnail()) : ?>
                                            <div class="post-thumbnail">
                                                <?php the_post_thumbnail(); ?>
                                        <?php endif; ?>
                                <?php the_content(); ?>
                            <br>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, No posts were found.'); ?>
            <?php endif; ?>
        </div>

<?php get_footer(); ?>