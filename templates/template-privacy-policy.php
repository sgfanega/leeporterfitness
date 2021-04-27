<?php
/**
 * Template Name: Privacy Policy
 * 
 * This file contains the Privacy Policy page of Lee Porter Fitness Theme
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */
?>
<?php 
    $background_image = get_template_directory_uri() . '/dist/images/Photo-3.jpg';
?>
<?php get_header(); ?>
<div class="container-fluid d-flex justify-content-center align-items-center privacy-policy px-0">
    <div class="container">
        <div class="row text-white">
            <div class="col-12">
                <h1 class="display-1">We Don't Store Your Data.</h1>
                <h6 class="display-6">*If you use our contact form, your information is not 
                    stored in a database, instead the information is immediately turned into 
                    an email that is sent to our email. We don't have a database that stores 
                    information.
                </h6>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

<style>
    .privacy-policy {
        min-height: 100vh;
        width: 100%;

        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("<?php echo $background_image; ?>");
        background-size: cover;
        background-position: center;
    }
</style>
