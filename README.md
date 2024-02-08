# Dining Hall Menu Shortcode 🍕

## Overview 📚

This project provides a dynamic way to display the weekly dining hall menu directly on the Fresno State Student Housing website, using a combination of PHP, HTML, CSS, WordPress, and the Pods Framework plugin. By integrating the menu into the site, we aim to enhance the user experience for residents, encouraging them to stay on the website rather than navigating away to external links. This README serves as a guide for future developers who will work on or maintain this project.

## Features 🌟

- **Dynamic Display**: Automatically updates to show the current day's menu, including Breakfast, Lunch, Dinner, and Dessert.
- **Real-Time Updates**: Administrators can easily update the weekly menu through a backend interface, ensuring the information stays current.
- **Mobile Friendly**: Designed to be clutter-free and compatible with mobile devices, improving accessibility for all users.
- **User Engagement**: By providing real-time daily menu updates directly on the site, the project has successfully increased user engagement and reduced the bounce rate.

## Tools & Technologies 🛠️

- **PHP**: For server-side scripting and creating dynamic content.
- **HTML & CSS**: For structuring and styling the webpage.
- **WordPress**: As the content management system.
- **Pods Framework Plugin**: For creating and managing custom setting pages within WordPress.
- **Shortcode Plugin**: Utilized to embed PHP functions within HTML or Elementor, enabling the dynamic display of content.

## Project Structure 📁

The project is structured as follows:

- **`functions.php`**: Contains the WordPress action hooks and shortcode initializations.
- **`custom-shortcodes.php`**: Includes the implementation of shortcodes for displaying menu content based on the current day.

## Getting Started 🚀

To get started with this project, you'll need a basic understanding of PHP, HTML, CSS, and WordPress. Familiarity with the Pods Framework and Shortcode Plugin is also beneficial but not required.

Here's how to set up the project:

1. Clone the repository to your local machine or WordPress installation.
2. Ensure the Pods Framework plugin is installed and activated on your WordPress site.
3. Include the provided functions.php and Shortcode.php files in your theme's directory, or incorporate their contents into your theme's existing files.
4. Use the provided shortcodes in your page or post editor to display the dining hall menu.

## Usage 📝

Shortcodes are used to display the menu content dynamically. Here are the available shortcodes:

- `[breakfast_menu_title]`: Displays the title for the breakfast menu.
- `[breakfast_menu_contents]`: Displays the breakfast menu items.
- `[lunch_menu_title]`: Displays the title for the lunch menu.
- `[lunch_menu_contents]`: Displays the lunch menu items.
- `[dinner_menu_title]`: Displays the title for the dinner menu.
- `[dinner_menu_contents]`: Displays the dinner menu items.
- `[dessert_menu_title]`: Displays the title for the dessert menu.
- `[dessert_menu_contents]`: Displays the dessert menu items.

Simply place these shortcodes where you want the menu titles and contents to appear on your website.

## Learning Outcomes 📈

- Acquired proficiency in PHP to create dynamic web components.
- Integrated and manipulated WordPress plugins to serve unique purposes.
- Addressed challenges of integrating dynamic content and maintaining a mobile-friendly layout.
- Designed a user-friendly backend interface for easy updates.

## License 📜

This project is licensed under the MIT License - see the LICENSE.md file for details.
