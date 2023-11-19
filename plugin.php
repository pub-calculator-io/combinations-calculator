<?php
/*
Plugin Name: CI Combinations calculator
Plugin URI: https://www.calculator.io/combinations-calculator/
Description: Combinations Calculator calculates the number of ways of selecting r outcomes from n possibilities when the order of the items chosen in the subset does not matter.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_combinations_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Combinations Calculator by Calculator.iO";

function display_ci_combinations_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Combinations Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_combinations_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_combinations_calculator', 'display_ci_combinations_calculator' );