<?php
session_start();

class CartController {
    public function index() {
        // Lấy giỏ hàng từ session
        $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $data = [
            'title' => 'Wixcar - Shopping Cart',
            'cartItems' => $cartItems,
            'total' => $total
        ];

        require_once '../frontend/views/cart.php';
    }

    // Thêm sản phẩm vào giỏ hàng (ví dụ)
    public function addToCart($productId, $quantity) {
        if (!isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] = ['quantity' => 0, 'price' => 0]; // Thay price từ database
        }
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
        header('Location: ?page=cart');
    }

    // Xóa sản phẩm
    public function removeFromCart($productId) {
        unset($_SESSION['cart'][$productId]);
        header('Location: ?page=cart');
    }
}
?>