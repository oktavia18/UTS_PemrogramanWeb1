<?php
// Check if the 'page' parameter is set in the URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Default to 'home'

// Define an associative array to map pages to their corresponding files
$pages = [
    'home' => 'includes/home.php',
    'about' => 'includes/about.php',
    'contact' => 'includes/contact.php',
    'tabel' => 'includes/datatables.php',
    'form' => 'includes/form.php',
];

// Include the corresponding file if it exists, otherwise include the 404 page
if (array_key_exists($page, $pages)) {
    include $pages[$page];
} else {
    include 'includes/404.php';
}