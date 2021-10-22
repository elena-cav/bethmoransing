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
            <div class="introduction">
                <?php
                $homePage = get_post(13);
                $featured_img_url = get_the_post_thumbnail_url(13, 'full');
                ?>
                <div class="intro-wrapper">
                    <h1>Hi, I'm Beth</h1>
                    <p><?php
                        echo $homePage->post_content;
                        ?></p>
                </div>
                <div class="thumbnail">
                    <img src="<?php echo $featured_img_url ?>" alt="">
                </div>


            </div>
            <div class="cards-container">
                <div class="card yellow">
                    <img src="http://bethmoran.localhost/wp-content/uploads/2021/10/8541685_couch_sofa_furniture_icon.svg
" alt="">
                    <p>Find out about Couch Opera</p>
                    <button><a href="<?php
                                        echo site_url('/in-person-classes')
                                        ?>">Read more</a></button>
                </div>
                <div class="card green">
                    <img src="http://bethmoran.localhost/wp-content/uploads/2021/10/7549098_user_interface_info_information_detail_icon.svg" alt="">
                    <p>Learn about how I like to teach</p>
                    <button><a href="<?php
                                        echo site_url('/in-person-classes')
                                        ?>">Read more</a></button>
                </div>
                <div class="card yellow">
                    <i class="fa fa-calendar"></i>
                    <p>Book an online class</p>
                    <button><a href="<?php
                                        echo site_url('/in-person-classes')
                                        ?>">Read more</a></button>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>
</div>