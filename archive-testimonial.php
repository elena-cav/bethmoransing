<div class="flex-wrapper">
    <?php
    get_header();
    ?>
    <div class="container testimonials">

        <div class="banner">
            <h1>Testimonials</h1>
            <p>Read what my talented students are saying about working with me.</p>
        </div>


        <div class="testimonials-wrapper">
            <?php


            while (have_posts()) {
                the_post();

                if (has_post_thumbnail()) {

            ?>

                    <div class="testimonial-card">
                        <img src="<?php the_post_thumbnail_url('testimonialThumbnail') ?>" alt="">
                        <div class="info">
                            <div class="content"><?php
                                                    the_content()
                                                    ?></div>
                            <p class="name"><?php
                                            the_title();

                                            ?></p>
                            <p class="prof"><?php
                                            echo get_field('profession');
                                            ?></p>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
        </div>
        <div class="testimonial-quotes">
            <?php
            while (have_posts()) {
                the_post();
                if (!has_post_thumbnail()) {
            ?>
                    <div class="noimg-info">
                        <div class="content"><?php
                                                the_content()
                                                ?></div>
                        <p class=" name"><?php
                                            the_title();

                                            ?></p>
                        <p class="prof"><?php
                                        echo get_field('profession');
                                        ?></p>
                    </div>

            <?php
                }
                echo paginate_links();
            }
            ?>
        </div>
    </div>


    <?php

    get_footer()
    ?>
</div>