<?php
/**
 * Template Name: About Me
 * 
 * This file contains the About Me page of Lee Porter Fitness Theme
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */
?>
<?php
    $name = getAcfData('name');
    $degree = getAcfData('degree');
    $certification_one = getAcfData('certification_one');
    $certification_two = getAcfData('certification_two');
    $introduction_one = getAcfData('introduction_one');
    $introduction_two = getAcfData('introduction_two');
    $introduction_three = getAcfData('introduction_three');
    $additional_trivia = getAcfData('additional_trivia');
    $mission_statement = getAcfData('mission_statement');
    $background_image = getAcfData('background_image');
    $profile_picture = getAcfData('profile_picture');

    if ($background_image == '') {
        $background_image = get_template_directory_uri() . '/dist/images/Photo-3.jpg';
    }

    if ($profile_image == '') {
        $profile_image = get_template_directory_uri() . '/dist/images/Profile-Picture.jpg';
    }
?>
<?php get_header(); ?>

<div class="container-fluid bg-secondary-color about-me py-5 px-0">
    <div class="container py-5">
        <div class="row py-0 py-xl-5">
            <div class="col-12">
                <h1 class="display-1 text-white"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row text-white py-5">
            <div class="col-12 col-xl-4">
                <div class="card bg-secondary-color-90 rounded shadow">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="<?php echo $profile_picture; ?>" alt="Profile Picture">
                        <p class="fs-1 mb-0"><?php echo $name; ?></p>
                        <p class="fs-3 mb-0"><?php echo $degree; ?></p>
                        <p class="fs-5 bold-primary mb-0"><?php echo $certification_one; ?></p>
                        <p class="fs-5 bold-primary mb-0"><?php echo $certification_two; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-7">
                <div class="card bg-secondary-color-90 rounded shadow">
                    <div class="card-body text-white">
                        <p class="fs-5"><?php echo $introduction_one; ?></p>
                        <p class="fs-6"><?php echo $introduction_two; ?></p>
                        <p class="fs-6"><?php echo $introduction_three; ?></p>
                    </div>
                </div>
                <div class="card bg-secondary-color-90 rounded shadow mt-5">
                    <div class="card-body text-white">
                        <p class="fs-5">Additional Trivia:</p>
                        <p class="fs-6"><?php echo $additional_trivia; ?></p>
                    </div>
                </div>
                <div class="card bg-secondary-color-90 rounded shadow mt-5">
                    <div class="card-body text-white">
                        <p class="fs-5">Mission Statement:</p>
                        <p class="fs-6"><?php echo $mission_statement; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
    .about-me {
        min-height: 100vh;
        width: 100%;

        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("<?php echo $background_image; ?>");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>