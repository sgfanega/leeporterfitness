<?php
/**
 * Template Name: Contact Me
 * 
 * This file contains the Contact Me page of Lee Porter Fitness Theme
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */
?>
<?php 
    $introduction = getAcfData('introduction');
    $location = getAcfData('location');
    $google_map_iframe = getAcfData('google_map_iframe');
    $background_image = getAcfData('background_image');

    if ($background_image == '') {
        $background_image = get_template_directory_uri() . '/dist/images/Photo-4.jpg';
    }
?>
<?php get_header(); ?>

<div class="container-fluid bg-secondary-color contact-me py-5 px-0">
    <div class="container py-5">
        <div class="row py-0 py-xl-5">
            <div class="col-12">
                <h1 class="display-1 text-white"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 pb-5">
                <div class="card bg-secondary-color-90 text-white shadow">
                    <div class="card-body">
                        <h6 class="display-6">Where am I located?</h6>
                        <p class="fs-6"><?php echo $introduction; ?></p>
                        <p class="fs-6"><?php echo $location; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <?php get_template_part('templates/global/section', 'contact-form'); ?>
            </div>
            <div class="col-12 col-xl-6 pt-5 pt-xl-0">
                <?php echo $google_map_iframe; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
    .contact-me {
        min-height: 100vh;
        width: 100%;

        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("<?php echo $background_image; ?>");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .contact-me iframe {
        height: 100%;
        width: 100%;
    }
</style>