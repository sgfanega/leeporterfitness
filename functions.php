<?php 
/**
 * Functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */

/**
 * Register CSS 
 * 
 * @return void
 */
function registerFitnessStyles() 
{
    // Version of Fitness
    $fitness_version = wp_get_theme()->get('Version');

    // Enqueue local css
    wp_enqueue_style('fitness-style', get_template_directory_uri() . '/dist/main.css', [], $fitness_version, 'all');

}
add_action('wp_enqueue_scripts', 'registerFitnessStyles');

/**
 * Register JS
 * 
 * @return void
 */
function registerFitnessScripts()
{
    // Version of Fitness
    $fitness_version = wp_get_theme()->get('Version');

    // Enqueue interal jQuery of WordPress
    //wp_enqueue_script('jquery');

    // Enqueue local js
    wp_enqueue_script('fitness-scripts', get_template_directory_uri() . '/dist/main.js', ['jquery'], false , true);
}
add_action('wp_enqueue_scripts', 'registerFitnessScripts');

/**
 * Adds the Favicon to the head
 * 
 * @return void
 */
function addFitnessFavicon() 
{
    // Adds the favicon to the head
    echo "<link rel='shortcut icon' href='" . get_template_directory_uri() . "/favicon.ico' />" . "\n";
    echo "<link rel='apple-touch-icon' href='" . get_template_directory_uri() . "/dist/images/apple-touch-icon.png' />" . "\n";
}
add_action('wp_head', 'addFitnessFavicon');
add_action('admin_head', 'addFitnessFavicon');

/**
 * Gets the ACF Data
 * 
 * @param String $acf_name
 * @return String
 */
function getAcfData(String $acf_name) 
{
    $acf_data = !empty(get_field($acf_name)) ? get_field($acf_name) : '';

    return $acf_data;
}

/**
 * Remove Editor for Page and Posts
 * 
 * @return void
 */
function removePageAndPostEditor()
{
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'removePageAndPostEditor');

add_action('wp_ajax_enquiry', 'enquiryForm');
add_action('wp_ajax_nopriv_enquiry', 'enquiryForm');
/**
 * Handles the AJAX Contact Form
 * 
 * @return void
 */
function enquiryForm()
{
    if (!wp_verify_nonce($_POST['nonce'], 'ajax-nonce')) {
        wp_send_json_error('Nonce is incorrect', 401);
        die();
    }

    $form_data = [];

    wp_parse_str($_POST['enquiry'], $form_data); // JS Array -> PHP Array 

    // Admin Email
    $admin_email = get_option('admin_email');

    // Email Headers
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From:' . $admin_email;
    $headers[] = 'Reply-to:' . $form_data['email'];

    // Send Email
    $send_to = $admin_email;

    // Subject
    $subject = "Enquiry from " . $form_data['fname'] . ' ' . $form_data['lname'];

    // Message 
    $message = createMessage($form_data);

    try {
        if (wp_mail($send_to, $subject, $message, $headers)) {
            wp_send_json_success('Email has been sent');
        } else {
            wp_send_json_error('Email error');
        }
    } catch (Exeception $e) {
        wp_send_json_error($e->getMessage());
    }
}

/**
 * Create Message from AJAX Contact Form
 * 
 * @param Array $form_data
 * @return String
 */
function createMessage($form_data) 
{
    $message = '';
    $message .= 'You have a message from ' .  '<b>' . $form_data['fname'] . '</b> ' . '<b>' . $form_data['lname'] . '</b> ' . '<br/><br/>';
    $message .= 'Their message: <br/>';
    $message .= '<i>' . $form_data['enquiry'] . '</i> <br/> <br/>';
    $message .= 'Additional Information: <br/>';

    $message .= '<b>First Name: </b>' . $form_data['fname'] . '<br/>';
    $message .= '<b>Last Name: </b>' . $form_data['lname'] . '<br/>'; 
    $message .= '<b>Email: </b>' . $form_data['email'] . '<br/>'; 
    $message .= '<b>First Name: </b>' . $form_data['fname'] . '<br/>'; 
    
    if ($form_data['phone']) {
        $message .= '<b>Phone Number: </b>' . $form_data['phone'] . '<br/>';
    }

    $message .= '<b>Service Type: </b>' . $form_data['dropdown'] . '<br/><br/>'; 

    $message .= '<b><i>This message is auto-generated by Lee Porter Fitness WordPress Theme. </i><b>';

    return $message;
}

/**
 * Add a Custom Post Type: Review
 * 
 * @return void
 */
function addReviewPostType()
{
    register_post_type('reviews', [
        'labels' => [
            'name' => 'Reviews',
            'singular_name' => 'Review'
        ],
        'hierarchical' => false,
        'public' => false,
        'has_archive' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-text-page',
        'supports' => ['title', 'thumbnail'],
    ]);
}
add_action('init', 'addReviewPostType');