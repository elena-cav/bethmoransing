<div class="flex-wrapper">

    <?php
    get_header();

    ?>
    <div class="front-page-container">

        <div class="parallax">

            <div class="parallax-content">
                <button><a href="<?php
                                    echo site_url('/book-now')
                                    ?>">Book a singing lesson</a></button>
            </div>

        </div>


        <div class="front-page-content">
            <p><?php
                $homePage = get_post(13);

                ?></p>
            <h2>Hi, I'm Beth</h2>
            <p><?php
                echo $homePage->post_content;
                ?></p>
            </h1>
            <div class="cards-container">
                <div class="card yellow">
                    <i class="fa fa-music"></i>
                    <p>Something about music</p>
                </div>
                <div class="card green">
                    <i class="fa fa-play-circle"></i>
                    <p>Watch me perform</p>
                </div>
                <div class="card yellow">
                    <i class="fa fa-leanpub"></i>
                    <p>Learn about how I like to teach</p>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>
</div>