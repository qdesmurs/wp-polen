<?php /* Template name: polen */ ?>
<?php get_header() ?>
<main>
    <img class="topimg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lnv.png" alt="logotop">

    <img class="imagecentre" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cropped-cropped-cropped-polen21.png" alt="logotop">

    <?php echo do_shortcode("[huge_it_slider id='2']"); ?>


    <img class="bandeau" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bandeau-blanc.png" alt="logotop">

    <?php wp_nav_menu(array( 'theme_location' => 'max_mega_menu_2' )); ?>

<div class="first">
    <?php
    $args = array('category' => '7',
                    'orderby'  => 'date',
                    'order'    => 'ASC',);
        $posts = get_posts($args);
        $cats = get_category(7);
        foreach ($posts as $post) {
            setup_postdata($post); ?>
            <article class='<?php echo $cats->slug; ?>'>
                <section class="sectionimg">
                    <?php the_post_thumbnail('full') ?>
                </section>
                <section class="sectiontxt">
                <h4><?php the_title() ?></h4>
                <h5 class="text"><?php the_content() ?></h5>
            </section>
            </article>
            <?php

        }

    ?>

</div>

    <div class="posts">
        <section class="miniposts">
        <?php

        $args = array('category' => '3',
                        'orderby'  => 'date',
                        'order'    => 'ASC',);
            $posts = get_posts($args);
            $cats = get_category(3);
            ?>
            <h4><?php echo $cats->name; ?></h4>
            <?php
            foreach ($posts as $post) {
                setup_postdata($post); ?>
                <article class='<?php echo $cats->slug; ?>'>
                    <?php the_post_thumbnail('full') ?>
                    <h5 class="text"><?php the_content() ?></h5>
                </article>
                <?php

            }

        ?>
        </section>
        <section class="miniposts">
        <?php

        $args = array('category' => '4',
                        'orderby'  => 'date',
                        'order'    => 'ASC',);
            $posts = get_posts($args);
            $cats = get_category(4);
            ?>
            <h4><?php echo $cats->name; ?></h4>
            <?php
            foreach ($posts as $post) {
                setup_postdata($post); ?>
                <article class='<?php echo $cats->slug; ?>'>
                    <?php the_post_thumbnail('full') ?>
                    <h5 class="text"><?php the_content() ?></h5>
                </article>
                <?php

            }

        ?>
        </section>
        <section class="miniposts">
        <?php

            $args = array('category' => '5',
                            'orderby'  => 'date',
                            'order'    => 'ASC',);
            $posts = get_posts($args);
            $cats = get_category(5);
            ?>
            <h4><?php echo $cats->name; ?></h4>
            <?php
            foreach ($posts as $post) {
                setup_postdata($post); ?>
                <article class='<?php echo $cats->slug; ?>'>
                    <?php the_post_thumbnail('full') ?>
                    <h5 class="text"><?php the_content() ?></h5>
                </article>
                <?php

            }

        ?>
        </section>
    </div>
</main>
<?php get_footer() ?>
