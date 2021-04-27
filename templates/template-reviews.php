<?php
/**
 * Template Name: Reviews
 * 
 * This file contains the Reviews page of Lee Porter Fitness Theme
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */
?>
<?php
    /**
     * WP Query Reviews
     * @var Array
     */
    $reviews = new WP_Query(
        [
            'post_type' => 'reviews',
            'posts_per_page' => -1,
            'orderby' => 'rand'
        ]
    );

    if ($background_image == '') {
        $background_image = get_template_directory_uri() . '/dist/images/Photo-2.jpg';
    }
?>
<?php get_header(); ?>

<div class="container-fluid bg-secondary-color reviews py-5 px-0">
    <div class="container py-5">
        <div class="row py-0 py-xl-5">
            <div class="col-12">
                <h1 class="display-1 text-white"><?php the_title(); ?></h1>
            </div>
        </div>

        <?php if ($reviews->have_posts()): ?>
        
        <div class="grid pt-0 pt-xl-5">
            <?php while ($reviews->have_posts()) : $reviews->the_post(); ?>
            
            <div class="grid-item">
                <div class="card rounded bg-secondary-color-90">
                    <div class="card-body text-white">
                        <p class="card-text font-italic"><?php echo get_field('review_description'); ?></p>
                        <p class="card-title fs-5"><?php echo "- " . get_field('name'); ?></p>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>

        </div>
        
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>

<style>
    .reviews {
        min-height: 100vh;
        width: 100%;

        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("<?php echo $background_image; ?>");
        background-size: cover;
        background-position: center;
    }
</style>