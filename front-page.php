<div class="flex-wrapper">

    <?php
    get_header();

    ?>
    <div class="front-page-container">

        <div class="parallax">

            <div class="parallax-content">
                <button><a class=buttonlink href="<?php
                                                    echo site_url('/book-now')
                                                    ?>">Book a class</a></button>
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
                    <img src="http://bethmoran.localhost/wp-content/uploads/2021/10/8541685_couch_sofa_furniture_icon.svg
" alt="">
                    <p>Find out about Couch Opera</p>
                </div>
                <div class="card green">
                    <img src="http://bethmoran.localhost/wp-content/uploads/2021/10/7549098_user_interface_info_information_detail_icon.svg" alt="">
                    <p>Learn about how I like to teach</p>
                </div>
                <div class="card yellow">
                    <i class="fa fa-calendar"></i>
                    <p>Book an online class</p>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>
</div>