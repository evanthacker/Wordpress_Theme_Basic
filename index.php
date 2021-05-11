<?php get_header(); ?>
    <div class="main">
        <div class="container">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                    <article class="post">
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                            <div class="meta">
                            Created By <?php the_author(); ?> on <?php the_date(); ?>
                            </div>
                        <?php the_content(); ?>
                        <br>
                        <a class="button" href="<?php the_permalink(); ?>">
                                Read More
                            </a>
                <?php endwhile; ?>
                    </article>
            <?php else : ?>
                <?php echo wpautop('Sorry, No posts were found.'); ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>