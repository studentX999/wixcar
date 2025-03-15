<?php
require_once 'controllers/ProductController.php';
require_once 'controllers/MainController.php';
require_once 'controllers/AboutController.php';
require_once 'controllers/CartController.php';
require_once 'controllers/CheckoutController.php';

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
        case 'about':
            $controller = new AboutController();
            $controller->index();
            break;
        case 'cart':
            $controller = new CartController();
            $controller->index();
            break;
        case 'checkout':
            $controller = new CheckoutController();
            $controller->index();
            break;
        case 'process-checkout':
            $controller = new CheckoutController();
            $controller->processCheckout();
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