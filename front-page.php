<?php
/**
 * The main front page file
 * 
 * This file contains the front page of the Lee Porter Fitness Theme.
 * It is use to display various descriptions and links
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */
?>
<?php 
    $background_image = getAcfData('background_image');

    if ($background_image == '') {
        $background_image = get_template_directory_uri() . '/dist/images/Photo-1.jpg';
    }
?>
<?php get_header(); ?>

<div class="container-fluid justify-content-center align-items-center bg-dark front-page px-0">
    <div class="container d-flex justify-content-center align-items-left flex-column">
        <div class="row">
            <div class="col-4 border-bottom text-white px-md-0">
                <h1 class="display-1 d-none d-md-none d-xl-block">WHAT'S STOPPING YOU?</h1>
                <h1 class="display-2 d-none d-md-none d-xl-none d-lg-block">WHAT'S STOPPING YOU?</h1>
                <h1 class="display-4 d-none d-lg-none d-sm-block">WHAT'S STOPPING YOU?</h1>
                <h1 class="display-5 d-block d-md-none">WHAT'S STOPPING YOU?</h1>
            </div>
        </div>
        <div class="row pt-5 ">
            <div class="col text-white px-md-0">
                <h4 class="display-6">Lee Porter - Personal Trainer</h4>
            </div>
        </div>
        <div class="row">
            <div class="col pt-3 px-md-0">
                <a href="/the-process" class="btn btn-custom-primary me-5 mb-3 mb-sm-0">The Process</a>
                <a href="/contact-me" class="btn btn-custom-primary-outline me-5 mb-3 mb-sm-0">Contact Me</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
    .front-page {
        min-height: 100vh;
        width: 100%;

        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("<?php echo $background_image; ?>");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .front-page .container {
        height: 100vh;
        width: 100%;
    }
</style>