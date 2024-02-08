<?php
// custom-shortcodes.php

// Package name = "Shortcodes"
// This file contains custom shortcodes

// resources:
//      https://developer.wordpress.org/plugins/shortcodes/shortcodes-with-parameters/
//      https://pagely.com/blog/creating-custom-shortcodes/

/**
 * The [breakfast_menu_title] shortcode.
 *
 * Generates the menu title based on the current day.
 *
 * @return string   Breakfast Menu title shortcode output.
 */
function Shortcodes_generateBreakfastMenuTitle()
{
    // Get the current day and time
    $current_day = strtolower(date('l')); // Convert the day to lowercase


    // Generate the menu title
    $breakfast_menu_title = ucfirst($current_day) . "'s Breakfast Menu";

    return $breakfast_menu_title;
}

/**
 * The [lunch_menu_title] shortcode.
 *
 * Generates the menu title based on the current day.
 *
 * @return string   Lunch Menu title shortcode output.
 */
function Shortcodes_generateLunchMenuTitle()
{
    // Get the current day and time
    $current_day = strtolower(date('l')); // Convert the day to lowercase

    // Generate the menu title
    $lunch_menu_title = ucfirst($current_day) . "'s Lunch Menu";

    return $lunch_menu_title;
}

/**
 * The [dinner_menu_title] shortcode.
 *
 * Generates the menu title based on the current day.
 *
 * @return string   Dinner Menu title shortcode output.
 */
function Shortcodes_generateDinnerMenuTitle()
{
    // Get the current day and time
    $current_day = strtolower(date('l')); // Convert the day to lowercase

    // Generate the menu title
    $dinner_menu_title = ucfirst($current_day) . "'s Dinner Menu";

    return $dinner_menu_title;
}

/**
 * The [dessert_menu_title] shortcode.
 *
 * Generates the menu title based on the current day.
 *
 * @return string   dessert Menu title shortcode output.
 */
function Shortcodes_generateDessertMenuTitle()
{
    // Get the current day and time
    $current_day = strtolower(date('l')); // Convert the day to lowercase

    // Generate the menu title
    $dessert_menu_title = ucfirst($current_day) . "'s Dessert Menu";

    return $dessert_menu_title;
}

function Shortcodes_BreakfastMenuContents($atts = [])
{
    // Get the current day and time
    $current_day = strtolower(date('l')); // Convert the day to lowercase

    $MenuPod = pods('dining_hall_menu');
    $BreakfastMenuContent = [
        'breakfast_entree' => $MenuPod->field($current_day . 's_breakfast_entree', true),
        'breakfast_side_1' => $MenuPod->field($current_day . 's_breakfast_side_1', true),
        'breakfast_side_2' => $MenuPod->field($current_day . 's_breakfast_side_2', true),
        'breakfast_protein' => $MenuPod->field($current_day . 's_breakfast_protein', true)
    ];

    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array) $atts, CASE_LOWER);

    if ($BreakfastMenuContent['breakfast_entree'] == "Chef's Choice") {
        ob_start(); // Start output buffering
?>
        <div class="ChefChoice">
            <h2>Chef's Choice Day</h2>
        </div>
    <?php
        return ob_get_clean(); // Return the contents of the buffer
    } elseif ($BreakfastMenuContent['breakfast_entree'] == "Closed" || $BreakfastMenuContent['breakfast_entree'] == "CLOSED") {
        ob_start(); // Start output buffering
    ?>
        <div class="Closed">
            <h2>Closed For Breakfast</h2>
        </div>
    <?php
        return ob_get_clean(); // Return the contents of the buffer
    } else {
        ob_start(); // Start output buffering
    ?>
        <div class="MenuContent">
            <div class="menu_label">
                <h3>Breakfast Entree</h3>
            </div>
            <div class="menu_content">
                <p>
                    <?php echo $BreakfastMenuContent['breakfast_entree']; ?>
                </p>
            </div>
            <div class="menu_label">
                <h3>Breakfast Side 1</h3>
            </div>
            <div class="menu_content">
                <p>
                    <?php echo $BreakfastMenuContent['breakfast_side_1']; ?>
                </p>
            </div>
            <div class="menu_label">
                <h3>Breakfast Side 2</h3>
            </div>
            <div class="menu_content">
                <p>
                    <?php echo $BreakfastMenuContent['breakfast_side_2']; ?>
                </p>
            </div>
            <div class="menu_label">
                <h3>Breakfast Protein</h3>
            </div>
            <div class="menu_content">
                <p>
                    <?php echo $BreakfastMenuContent['breakfast_protein']; ?>
                </p>
            </div>
        </div>
    <?php
        return ob_get_clean(); // Return the buffered output as a string
    }
}

function Shortcodes_LunchMenuContents($atts = [])
{
    // Get the current day and time
    $current_day = strtolower(date('l')); // Convert the day to lowercase

    $MenuPod = pods('dining_hall_menu');
    $LunchMenuContent = [
        'lunch_entree' => $MenuPod->field($current_day . 's_lunch_entree', true),
        'lunch_entree_2' => $MenuPod->field($current_day . 's_lunch_entree_2', true),
        'lunch_vegan_entree' => $MenuPod->field($current_day . 's_lunch_vegan_entree', true),
        'lunch_vegetable' => $MenuPod->field($current_day . 's_lunch_vegetable', true),
        'lunch_side' => $MenuPod->field($current_day . 's_lunch_side', true),
        'lunch_feature_station' => $MenuPod->field($current_day . 's_lunch_feature_station', true),
        'lunch_soup_option_1' => $MenuPod->field($current_day . 's_lunch_soup_station_soup_option_1', true),
        'lunch_soup_option_2' => $MenuPod->field($current_day . 's_lunch_soup_station_soup_option_2', true),
		'lunch_soup_station' => $MenuPod->field($current_day . 's_lunch_soup_station',true)
    ];

    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array) $atts, CASE_LOWER);

    if ($LunchMenuContent['lunch_entree'] == "Chef's Choice") {
        ob_start(); // Start output buffering
    ?>
        <div class="ChefChoice">
            <h2>Chef's Choice Day</h2>
        </div>
    <?php
        return ob_get_clean(); // Return the contents of the buffer
    } elseif ($LunchMenuContent['lunch_entree'] == "Closed" || $LunchMenuContent['lunch_entree'] == "CLOSED") {
        ob_start(); // Start output buffering
    ?>
        <div class="Closed">
            <h2>Closed For Lunch</h2>
        </div>
    <?php
        return ob_get_clean(); // Return the contents of the buffer
    } else {
        ob_start(); // Start output buffering
    ?>
        <div class="MenuContent">
            <div class="menu_label">
                <h3>Lunch Entree</h3>
            </div>
            <div class="menu_content">
                <p>
                    <?php echo $LunchMenuContent['lunch_entree']; ?>
                </p>
            </div>
			<?php if ($LunchMenuContent['lunch_entree_2'] !== "None") : ?>
            <div class="menu_label">
                <h3>Lunch Entree 2</h3>
            </div>
            <div class="menu_content">
                <p>
                    <?php echo $LunchMenuContent['lunch_entree_2']; ?>
                </p>
            </div>
			<?php endif; ?>
            <div class="menu_label">
                <h3>Lunch Vegan Entree</h3>
            </div>
            <div class="menu_content">
                <p>
                    <?php echo $LunchMenuContent['lunch_vegan_entree']; ?>
                </p>
            </div>
            <div class="menu_label">
                <h3>Lunch Vegetable</h3>
            </div>
            <div class="menu_content">
                <p>
                    <?php echo $LunchMenuContent['lunch_vegetable']; ?>
                </p>
            </div>
            <div class="menu_label">
                <h3>Lunch Side</h3>
            </div>
            <div class="menu_content">
                <p>
                    <?php echo $LunchMenuContent['lunch_side']; ?>
                </p>
            </div>
            <?php if ($LunchMenuContent['lunch_feature_station'] !== "None") : ?>
                <div class="menu_label">
                    <h3>Lunch Feature Station</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $LunchMenuContent['lunch_feature_station']; ?>
                    </p>
                </div>
            <?php endif; ?>
            <?php if ($LunchMenuContent['lunch_soup_option_1'] !== "None") : ?>
                <div class="menu_label">
                    <h3>Lunch Soup Option 1</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $LunchMenuContent['lunch_soup_option_1']; ?>
                    </p>
                </div>
            <?php endif; ?>
            <?php if ($LunchMenuContent['lunch_soup_option_2'] !== "None") : ?>
                <div class="menu_label">
                    <h3>Lunch Soup Option 2</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $LunchMenuContent['lunch_soup_option_2']; ?>
                    </p>
                </div>
            <?php endif; ?>
			<?php if ($LunchMenuContent['lunch_soup_station'] !== "None") : ?>
                <div class="menu_label">
                    <h3>Lunch Soup Station</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $LunchMenuContent['lunch_soup_station']; ?>
                    </p>
                </div>
            <?php endif; ?>
        <?php
        return ob_get_clean(); // Return the buffered output as a string
    }
}

function Shortcodes_DinnerMenuContents($atts = [])
{
    // Get the current day and time
    $current_day = strtolower(date('l')); // Convert the day to lowercase

    $MenuPod = pods('dining_hall_menu');
    $DinnerMenuContent = [
        'dinner_entree_1' => $MenuPod->field($current_day . 's_dinner_entree_1', true),
        'dinner_entree_2' => $MenuPod->field($current_day . 's_dinner_entree_2', true),
        'dinner_vegan_entree' => $MenuPod->field($current_day . 's_dinner_vegan_entree', true),
        'dinner_vegetable' => $MenuPod->field($current_day . 's_dinner_vegetable', true),
        'dinner_side' => $MenuPod->field($current_day . 's_dinner_side', true),
        'dinner_action_station' => $MenuPod->field($current_day . 's_dinner_action_station', true),
        'dinner_bread' => $MenuPod->field($current_day . 's_dinner_bread', true)
    ];

    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array) $atts, CASE_LOWER);

    if ($DinnerMenuContent['dinner_entree_1'] == "Chef's Choice") {
        ob_start(); // Start output buffering
        ?>
            <div class="ChefChoice">
                <h2>Chef's Choice Day</h2>
            </div>
        <?php
        return ob_get_clean(); // Return the contents of the buffer
    } elseif ($DinnerMenuContent['dinner_entree_1'] == "Closed" || $DinnerMenuContent['dinner_entree_1'] == "CLOSED") {
        ob_start(); // Start output buffering
        ?>
            <div class="Closed">
                <h2>Closed For Dinner</h2>
            </div>
        <?php
        return ob_get_clean(); // Return the contents of the buffer
    } else {
        ob_start(); // Start output buffering
        ?>
            <div class="MenuContent">
                <div class="menu_label">
                    <h3>Dinner Entree 1</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $DinnerMenuContent['dinner_entree_1']; ?>
                    </p>
                </div>
                <div class="menu_label">
                    <h3>Dinner Entree 2</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $DinnerMenuContent['dinner_entree_2']; ?>
                    </p>
                </div>
                <div class="menu_label">
                    <h3>Dinner Vegan Entree</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $DinnerMenuContent['dinner_vegan_entree']; ?>
                    </p>
                </div>
                <div class="menu_label">
                    <h3>Dinner Vegetable</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $DinnerMenuContent['dinner_vegetable']; ?>
                    </p>
                </div>
                <div class="menu_label">
                    <h3>Dinner Side</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $DinnerMenuContent['dinner_side']; ?>
                    </p>
                </div>

                <?php if ($DinnerMenuContent['dinner_action_station'] !== "None") : ?>
                    <div class="menu_label">
                        <h3>Dinner Action Station</h3>
                    </div>
                    <div class="menu_content">
                        <p>
                            <?php echo $DinnerMenuContent['dinner_action_station']; ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if ($DinnerMenuContent['dinner_bread'] !== "None") : ?>
                    <div class="menu_label">
                        <h3>Dinner Bread</h3>
                    </div>
                    <div class="menu_content">
                        <p>
                            <?php echo $DinnerMenuContent['dinner_bread']; ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        <?php
        return ob_get_clean(); // Return the buffered output as a string
    }
}

function Shortcodes_DessertMenuContents($atts = [])
{
    // Get the current day and time
    $current_day = strtolower(date('l')); // Convert the day to lowercase

    $MenuPod = pods('dining_hall_menu');
    $DessertMenuContent = [
        'specialty_dessert' => $MenuPod->field($current_day . 's_dessert_specialty_dessert', true),
		'assorted_dessert' => $MenuPod->field($current_day . 's_dessert_assorted_dessert', true)
    ];

    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array) $atts, CASE_LOWER);
    if ($DessertMenuContent['specialty_dessert'] == "Chef's Choice" || $DessertMenuContent['assorted_dessert'] == "Chef's Choice") {
        ob_start(); // Start output buffering
        ?>
            <div class="ChefChoice">
                <h2>Chef's Choice Day</h2>
            </div>
        <?php
        return ob_get_clean(); // Return the contents of the buffer
    } elseif ($DessertMenuContent['specialty_dessert'] == "None" && $DessertMenuContent['assorted_dessert'] == "None") {
        ob_start(); // Start output buffering
        ?>
            <div class="NoDesssert">
                <h2>No Dessert Options Available</h2>
            </div>
        <?php
        return ob_get_clean(); // Return the contents of the buffer
    } elseif ($DessertMenuContent['specialty_dessert'] != "None" && $DessertMenuContent['assorted_dessert'] == "None") {
        ob_start(); // Start output buffering
        ?>
            <div class="MenuContent">
                <div class="menu_label">
                    <h3>Specialty Dessert</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $DessertMenuContent['specialty_dessert']; ?>
                    </p>
                </div>
            </div>
    <?php
        return ob_get_clean(); // Return the buffered output as a string
    } else {
		ob_start(); // Start output buffering
        ?>
            <div class="MenuContent">
                <div class="menu_label">
                    <h3>Assorted Dessert</h3>
                </div>
                <div class="menu_content">
                    <p>
                        <?php echo $DessertMenuContent['Assorted_dessert']; ?>
                    </p>
                </div>
            </div>
    <?php
        return ob_get_clean(); // Return the buffered output as a string
	}
}
