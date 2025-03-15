<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../frontend/public/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2Lw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo $data['title']; ?></title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark-custom fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="?page=main">
                <img src="../frontend/assets/images/webicon.png" alt="Wixcar Logo" style="height: 40px;">
            </a>
            <!-- Button toggle cho mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu chính -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-black" href="?page=products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="?page=about">About</a>
                    </li>
                </ul>
                <!-- Icon Cart -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?page=cart">
                            <i class="fas fa-shopping-cart" style="font-size: 1.5rem;"><img src="../frontend/assets/images/cart_icon.png"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cart Section -->
    <div class="container" style="margin-top:100px">
        <h1 class="text-center mb-4">Shopping Cart</h1>

        <!-- Cart Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($data['cartItems'])): ?>
                    <tr>
                        <td colspan="6" class="text-center">Your cart is empty.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($data['cartItems'] as $index => $item): ?>
                        <?php
                        $itemTotal = $item['price'] * $item['quantity'];
                        ?>
                        <tr data-index="<?php echo $index; ?>">
                            <td><?php echo $item['name']; ?></td>
                            <td><img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" style="width: 100px; height: auto;"></td>
                            <td>$<?php echo number_format($item['price'], 2); ?></td>
                            <td>
                                <input type="number" class="form-control quantity-input" value="<?php echo $item['quantity']; ?>" min="1" style="width: 80px;" data-price="<?php echo $item['price']; ?>">
                            </td>
                            <td class="item-total">$<?php echo number_format($itemTotal, 2); ?></td>
                            <td><button class="btn btn-danger btn-sm remove-item">Remove</button></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-end"><strong>Grand Total:</strong></td>
                    <td class="grand-total"><strong>$<?php echo number_format($data['total'], 2); ?></strong></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>

        <!-- Actions -->
        <div class="text-end mb-5">
            <a href="?page=products" class="btn btn-secondary me-2">Continue Shopping</a>
            <a href="?page=checkout" class="btn btn-primary">Proceed to Checkout</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">© Copyright © Wixcar 2025. All rights reserved.</p>
            <div class="mt-2">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"><img src="../frontend/assets/images/facebook_icon.png"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"><img src="../frontend/assets/images/X_icon.png"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"><img src="../frontend/assets/images/instagram_icon.png"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Hàm tính lại Grand Total
        function updateGrandTotal() {
            var grandTotal = 0;
            $('.item-total').each(function() {
                grandTotal += parseFloat($(this).text().replace('$', '').replace(',', ''));
            });
            $('.grand-total strong').text('$' + grandTotal.toFixed(2));
        }

        // Cập nhật Item Total và Grand Total khi thay đổi số lượng
        $('.quantity-input').on('change', function() {
            var $row = $(this).closest('tr');
            var price = parseFloat($(this).data('price'));
            var quantity = parseInt($(this).val());
            var itemTotal = price * quantity;
            $row.find('.item-total').text('$' + itemTotal.toFixed(2));

            updateGrandTotal();
        });

        // Xóa sản phẩm và cập nhật Grand Total
        $('.remove-item').on('click', function() {
            $(this).closest('tr').remove();
            updateGrandTotal();
        });

        $(document).ready(function() {
            updateGrandTotal();
        });
    </script>
</body>
</html>