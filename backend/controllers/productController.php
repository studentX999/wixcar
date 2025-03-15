<?php
require_once 'models/Brand.php';
require_once 'models/Car.php';

class ProductController {
    public $brands = [];
    public $cars = [];

    public function __construct() {
        // Dữ liệu giả lập (thay bằng database sau)
        $this->brands = [
            new Brand(1, "Aston Martin", "../frontend/assets/images/aston_martin_logo.png"),
            new Brand(2, "Vinfast", "../frontend/assets/images/vinfast_logo.png"),
            new Brand(3, "Pagani", "../frontend/assets/images/pagani_logo.png")
        ];

        $this->cars = [
            new Car(1, 1, "Aston Martin DB11", "../frontend/assets/images/aston_martin_db11.jpg", 250000),
            new Car(2, 1, "Aston Martin Valkyrie", "../frontend/assets/images/aston_martin_valkyrie.jpg", 3200000),
            new Car(3, 1, "Aston Martin DB10", "../frontend/assets/images/aston_martin_db10.jpg", 500000),
            new Car(3, 2, "Vinfast VF3", "../frontend/assets/images/vinfast_vf3.jpg", 20000),
            new Car(4, 2, "Vinfast Lux SA2.0", "../frontend/assets/images/vinfast_lux_sa2.jpg", 60000),
            new Car(5, 3, "Pagani Huayra", "../frontend/assets/images/pagani_huayra.jpg", 2800000)
        ];
    }

    public function index() {
        $brands = $this->brands;
        require_once '../frontend/views/products.php';
    }

    public function showBrandCars($brandId) {
        $filteredCars = array_filter($this->cars, function($car) use ($brandId) {
            return $car->getBrandId() === $brandId;
        });
        require_once '../frontend/views/brand_cars.php';
    }
}
?>