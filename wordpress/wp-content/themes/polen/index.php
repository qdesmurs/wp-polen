<?php /* Template name: polen */ ?>
<?php get_header() ?>
<main>
    <img class="topimg" src="<?php echo get_stylesheet_directory_uri( ); ?>/images/lnv.png" alt="logotop">


    <section>
    <?php

        $args = array('category' => '3');
        $posts = get_posts($args);
        $cats = get_category(3);
        ?>
        <h4><?php echo $cats->name; ?></h4>
        <?php
        foreach ($posts as $post) {
            setup_postdata($post);
            ?>
            <article class='<?php echo $cats->slug; ?>'>
                <?php the_post_thumbnail( 'full' ) ?>
                <h5 class="text"><?php the_content() ?></h5>
            </article>
            <?php
        }

    ?>
    </section>
    <section>
    <?php

        $args = array('category' => '4');
        $posts = get_posts($args);
        $cats = get_category(4);
        ?>
        <h4><?php echo $cats->name; ?></h4>
        <?php
        foreach ($posts as $post) {
            setup_postdata($post);
            ?>
            <article class='<?php echo $cats->slug; ?>'>
                <?php the_post_thumbnail( 'full' ) ?>
                <h5 class="text"><?php the_content() ?></h5>
            </article>
            <?php
        }

    ?>
    </section>
    <section>
    <?php

        $args = array('category' => '5');
        $posts = get_posts($args);
        $cats = get_category(5);
        ?>
        <h4><?php echo $cats->name; ?></h4>
        <?php
        foreach ($posts as $post) {
            setup_postdata($post);
            ?>
            <article class='<?php echo $cats->slug; ?>'>
                <?php the_post_thumbnail( 'full' ) ?>
                <h5 class="text"><?php the_content() ?></h5>
            </article>
            <?php
        }

    ?>
    </section>
</main>
<?php get_footer() ?>
