<? php
// Shortcodes from custom-shortcodes.php
// function prefix: "Shortcode"
include_once('custom-shortcodes.php');

// Creates shortcode for displaying the current date's breakfast menu title.
add_action('init', 'breakfast_menu_title_shortcode_init');
function breakfast_menu_title_shortcode_init() {
    add_shortcode('breakfast_menu_title', 'Shortcodes_generateBreakfastMenuTitle');
}

// Creates shortcode for displaying the current date's breakfast menu.
add_action('init', 'breakfast_menu_contents_shortcode_init');
function breakfast_menu_contents_shortcode_init() {
    add_shortcode('breakfast_menu_contents', 'Shortcodes_BreakfastMenuContents');
}

// Creates shortcode for displaying the current date's lunch menu title.
add_action('init', 'lunch_menu_title_shortcode_init');
function lunch_menu_title_shortcode_init() {
    add_shortcode('lunch_menu_title', 'Shortcodes_generateLunchMenuTitle');
}

// Creates shortcode for displaying the current date's lunch menu.
add_action('init', 'lunch_menu_contents_shortcode_init');
function lunch_menu_contents_shortcode_init() {
    add_shortcode('lunch_menu_contents', 'Shortcodes_LunchMenuContents');
}

// Creates shortcode for displaying the current date's dinner menu title.
add_action('init', 'dinner_menu_title_shortcode_init');
function dinner_menu_title_shortcode_init() {
    add_shortcode('dinner_menu_title', 'Shortcodes_generateDinnerMenuTitle');
}

// Creates shortcode for displaying the current date's dinner menu.
add_action('init', 'dinner_menu_contents_shortcode_init');
function dinner_menu_contents_shortcode_init() {
    add_shortcode('dinner_menu_contents', 'Shortcodes_DinnerMenuContents');
}

// Creates shortcode for displaying the current date's dessert menu title.
add_action('init', 'dessert_menu_title_shortcode_init');
function dessert_menu_title_shortcode_init() {
    add_shortcode('dessert_menu_title', 'Shortcodes_generateDessertMenuTitle');
}

// Creates shortcode for displaying the current date's dessert menu.
add_action('init', 'dessert_menu_contents_shortcode_init');
function dessert_menu_contents_shortcode_init() {
    add_shortcode('dessert_menu_contents', 'Shortcodes_DessertMenuContents');
}

?>