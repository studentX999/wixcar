<?php
class Brand {
    private $id;
    private $name;
    private $logo;

    public function __construct($id, $name, $logo) {
        $this->id = $id;
        $this->name = $name;
        $this->logo = $logo;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLogo() {
        return $this->logo;
    }
}
?>