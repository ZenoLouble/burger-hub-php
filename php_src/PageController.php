<?php
namespace App;

class PageController {

    public function render() {
        $page = $_GET['page'] ?? 'home';

        $allowedPages = ['home', 'menu', 'contacts', 'booking', 'booking_process'];
        
        if (!in_array($page, $allowedPages)) {
            $page = 'home';
        }

        include __DIR__ . '/../templates/header.php';
        include __DIR__ . "/../templates/{$page}.php";
        include __DIR__ . '/../templates/footer.php';
    }
}