<?php 
/**
 * The section template for displaying the header/navbar
 * 
 * Contains the navbar
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */
?>

<header class="header">
<nav class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container">
        <a class="navbar-brand pe-lg-5" href="/">
            <img class="img-fluid navbar-logo" src="<?php echo get_template_directory_uri() . '/dist/images/navbar-logo.png'?>" alt="">
        </a>
        <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item pe-lg-5">
                    <a class="nav-link " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item pe-lg-5">
                    <a class="nav-link" href="/the-process">The Process</a>
                </li>
                <li class="nav-item pe-lg-5">
                    <a class="nav-link" href="/about-me">About Me</a>
                </li>
                <li class="nav-item pe-lg-5">
                    <a class="nav-link" href="/contact-me">Contact Me</a>
                </li>
                <li class="nav-item pe-lg-5">
                    <a class="nav-link" href="/reviews">Reviews</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto text-white">
                <a class="a-primary-color" href="https://www.instagram.com/leeporterfitness/" target="_blank">
                    <i class="bi-instagram"></i>
                </a>
            </ul>
        </div>
    </div>
</nav>
</header>
