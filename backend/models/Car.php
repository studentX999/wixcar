<?php
class Car {
    private $id;
    private $brandId;
    private $name;
    private $image;
    private $price;

    public function __construct($id, $brandId, $name, $image, $price) {
        $this->id = $id;
        $this->brandId = $brandId; // Gán giá trị cho thuộc tính
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getBrandId() {
        return $this->brandId; // Sử dụng thuộc tính của đối tượng
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }
}
?>