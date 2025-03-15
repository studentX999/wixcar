<?php
class CheckoutController {
    public function index() {
        // Lấy dữ liệu giỏ hàng từ session
        $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Dữ liệu truyền vào view
        $data = [
            'title' => 'Wixcar - Checkout',
            'cartItems' => $cartItems,
            'total' => $total
        ];

        // Gọi view
        require_once '../frontend/views/checkout.php';
    }

    // Xử lý form thanh toán
    public function processCheckout() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $cardNumber = $_POST['cardNumber'];
            $expiry = $_POST['expiry'];
            $cvv = $_POST['cvv'];

            // Logic lưu đơn hàng (ví dụ: lưu vào database)
            // Ở đây chỉ là giả lập, bạn cần tích hợp với database thực tế
            $order = [
                'customer' => [
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'email' => $email,
                    'address' => "$address, $city, $state, $zip"
                ],
                'cartItems' => $_SESSION['cart'],
                'total' => 0 // Tính lại tổng từ cartItems
            ];

            // Xóa giỏ hàng sau khi thanh toán thành công
            unset($_SESSION['cart']);

            // Chuyển hướng đến trang xác nhận
            header('Location: ?page=order-confirmation');
        }
    }
}
?>