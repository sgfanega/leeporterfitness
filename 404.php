<?php 
/**
 * The 404 page file
 * 
 * This file contains the 404 Not Found page of the Lee Porter Fitness Theme.
 * It is use to display a 404 Not Found Page
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

<div class="container-fluid d-flex justify-content-center align-items-center page-not-found bg-secondary px-0">
    <div class="container">
        <div class="row text-white">
            <div class="col-12">
                <h1 class="display-1">404 - Page not found</h1>
                <p class="fs-5">Head back to the <a class="a-primary-color" href="/">main page</a>.</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
    .page-not-found {
        min-height: 100vh;
        width: 100%;

        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("<?php echo $background_image; ?>");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>