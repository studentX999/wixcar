<?php
require_once 'controllers/ProductController.php';
require_once 'controllers/MainController.php';

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'products':
            $controller = new ProductController();
            $controller->index();
            break;
        case 'brand_cars':
            $controller = new ProductController(); // Sử dụng ProductController vì showBrandCars() nằm trong này
            $brandId = isset($_GET['brand_id']) ? (int)$_GET['brand_id'] : 0;
            $controller->showBrandCars($brandId);
            break;
        case 'main':
            $controller = new MainController();
            $controller->index();
            break;
        default:
            $controller = new MainController();
            $controller->index();
            break;
    }
} else {
    $controller = new MainController();
    $controller->index();
}
?>