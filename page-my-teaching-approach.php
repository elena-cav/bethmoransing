<div class="flex-wrapper">

    <?php
    get_header();
    pageBanner(array(
        'photo' => 'http://bethmoran.localhost/wp-content/uploads/2021/10/colorful-organic-shapes-seamless-pattern-scaled.jpg'
    ));
    ?>

    <div class="container teaching-approach">
        <?php
        the_content()
        ?>
    </div>
    <?php
    get_footer()
    ?>
</div>