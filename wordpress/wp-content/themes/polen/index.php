<?php /* Template name: polen */ ?>
<?php get_header() ?>
<main>
    <img class="topimg" src="<?php echo get_stylesheet_directory_uri( ); ?>/images/lnv.png" alt="logotop">


    <section>
    <?php


        $args = array('category' => '3',
                      'orderby'  => 'date',
                      'order'    => 'ASC',
                      'posts_per_page' => 12,);
        $posts = get_posts($args);
        $cats = get_the_category();
        ?>
        <h4><?php echo $cats[0]->name; ?></h4>
        <?php
        foreach ($posts as $post) {
            setup_postdata($post);
            ?>
            <article class='<?php echo $cats[0]->slug; ?>'>
                <?php the_post_thumbnail( 'full' ) ?>
                <h5 class="text"><?php the_content() ?></h5>
            </article>
            <?php
        }

    ?>
    </section>
</main>
<?php get_footer() ?>
