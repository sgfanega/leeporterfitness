<?php
/**
 * The Header.
 * 
 * This is the template that displays all of the <head> section and everything up until main. 
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Fanega Web Development
 * @subpackage Lee Porter Fitness
 * @since Lee Porter Fitness 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<!-- Start of Main Div -->
<div class="container-fluid px-0">
    <?php get_template_part('templates/global/section', 'header'); ?>

