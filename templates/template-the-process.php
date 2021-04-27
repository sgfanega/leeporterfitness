<?php
/**
 * Template Name: The Process
 * 
 * This file contains the The Process page of Lee Porter Fitness Theme
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */
?>
<?php 
    $description = getAcfData('description');
    $name = getAcfData('name');
    $certification = getAcfData('certification');
    $three_monthly_price = getAcfData('3-month_monthly_price');
    $three_full_price = getAcfData('3-month_full_price');
    $six_monthly_price = getAcfData('6-month_monthly_price');
    $six_full_price = getAcfData('6-month_full_price');
    $background_image = getAcfData('background_image');
    $profile_picture = getAcfData('profile_picture');

    if ($background_image == '') {
        $background_image = get_template_directory_uri() . '/dist/images/Photo-2.jpg';
    }

    if ($profile_image == '') {
        $profile_image = get_template_directory_uri() . '/dist/images/Profile-Picture.jpg';
    }

    /**
     * WP Query Reviews
     * @var Array
     */
    $reviews = new WP_Query(
        [
            'post_type' => 'reviews',
            'posts_per_page' => -1,
        ]
    );

?>
<?php get_header(); ?>

<div class="container-fluid bg-secondary-color the-process py-5 px-0">
    <div class="container py-5">
        <div class="row py-0 py-xl-5">
            <div class="col-12">
                <h1 class="display-1 text-white"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 col-xl-8 pt-2">
                <div class="card bg-secondary-color-90 rounded shadow">
                    <div class="card-body">
                        <p class="fs-6 text-white"><?php echo $description; ?></p>
                    </div>
                </div>  
            </div>
            <div class="col-12 col-xl-4 pt-5 pt-xl-0">
                <h6 class="display-6 text-center text-white">Meet Your Trainer</h6>
                <div class="card rounded bg-secondary-color-90 shadow">
                    <div class="card-body">
                        <img class="rounded img-fluid" src="<?php echo $profile_image; ?>" alt="">
                        <p class="fs-3 text-white my-0"><?php echo $name; ?></p>
                        <p class="fs-5 text-primary bold-primary"><?php echo $certification; ?></p>
                        <a class="btn btn-custom-primary" href="/about-me">Learn More!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between py-5">
            <div class="col-12">
                <h6 class="display-6 text-white">Pricing</h6>
            </div>
            <div class="col-12 col-lg-4  pt-2 mb-5 mb-lg-0">
                <div class="card rounded bg-secondary-color-90 text-white shadow">
                    <div class="card-body">
                        <p class="fs-5">1-On-1 Training</p>
                        <p class="fs-6 text-muted">In-Person Training</p>
                        <p class="fs-6">60 minute in-person training where we meet at an agreed upon location. Each session includes a warm up, workout, and stretching routine.</p>
                        <p class="fs-6 bold-primary">*Contact me to see pricing</p>
                        <a class="btn btn-custom-primary" href="/contact-me">Contact Me</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4  pt-2 mb-5 mb-lg-0">
                <div class="card rounded bg-secondary-color-90 text-white shadow">
                    <div class="card-body">
                        <p class="fs-5">3-Month Training</p>
                        <p class="fs-6 text-muted">Online Training</p>
                        <p class="fs-6">Individualized programming based off goals discussed with the trainer. Clients perform their own workouts and will be provided with video guides to help with form. Weekly check-ins with trainer to make sure workouts are going well and progress is being made.</p>
                        <p class="fs-6 bold-primary">Monthly: <span class="text-white">$<?php echo $three_monthly_price; ?> USD</span></p>
                        <p class="fs-6 bold-primary">Full: <span class="text-white">$<?php echo $three_full_price; ?> USD</span></p>
                        <a class="btn btn-custom-primary" href="/contact-me">Contact Me</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4  pt-2 mb-5 mb-lg-0">
                <div class="card rounded bg-secondary-color-90 text-white shadow">
                    <div class="card-body">
                        <p class="fs-5">6-Month Training</p>
                        <p class="fs-6 text-muted">Online Training</p>
                        <p class="fs-6">Individualized programming based off goals discussed with the trainer. Clients perform their own workouts and will be provided with video guides to help with form. Weekly check-ins with trainer to make sure workouts are going well and progress is being made.</p>
                        <p class="fs-6 bold-primary">Monthly: <span class="text-white">$<?php echo $six_monthly_price; ?> USD</span></p>
                        <p class="fs-6 bold-primary">Full: <span class="text-white">$<?php echo $six_full_price; ?> USD</span></p>
                        <a class="btn btn-custom-primary" href="/contact-me">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-evenly">
        <div class="col-12">
            <h6 class="display-6 text-white">Top Reviews</h6>
        </div>
        <?php if ($reviews->have_posts()): ?>
        <?php $index = 0; ?>
            <?php while ($reviews->have_posts()) : $reviews->the_post(); ?>
                <?php if (get_field('top_review_indicator')): ?>
                    <div class="col-12 col-xl-4"> 
                        <div class="card rounded bg-secondary-color-90 text-white shadow">
                            <div class="card-body">
                                <div class="card-text"><i>"<?php echo get_field('review_description'); ?></i>"</div>
                                <div class="card-title"><?php echo "- " . get_field('name'); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php $index++;?>
                <?php endif;?>

                <?php 
                    if ($index == 3){
                        break;
                    }
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
    .the-process {
        min-height: 100vh;
        width: 100%;

        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("<?php echo $background_image; ?>");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>