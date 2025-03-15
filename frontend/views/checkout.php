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

    <!-- Checkout Section -->
    <div class="container" style="margin-top:100px">
        <h1 class="text-center mb-4">Checkout</h1>

        <!-- Order Summary -->
        <section class="mb-5">
            <h2 class="text-center mb-3">Order Summary</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($data['cartItems'])): ?>
                        <tr>
                            <td colspan="4" class="text-center">Your cart is empty.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($data['cartItems'] as $item): ?>
                            <?php
                            $itemTotal = $item['price'] * $item['quantity'];
                            ?>
                            <tr>
                                <td><?php echo $item['name']; ?></td>
                                <td>$<?php echo number_format($item['price'], 2); ?></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td>$<?php echo number_format($itemTotal, 2); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Total:</strong></td>
                        <td><strong>$<?php echo number_format($data['total'], 2); ?></strong></td>
                    </tr>
                </tfoot>
            </table>
        </section>

        <!-- Checkout Form -->
        <section class="mb-5">
            <h2 class="text-center mb-3">Billing Information</h2>
            <form action="?page=process-checkout" method="POST" class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                        <div class="invalid-feedback">Please enter your first name.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                        <div class="invalid-feedback">Please enter your last name.</div>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">Please enter a valid email.</div>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                        <div class="invalid-feedback">Please enter your address.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                        <div class="invalid-feedback">Please enter your city.</div>
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" name="state" required>
                            <option value="">Choose...</option>
                            <option value="CA">California</option>
                            <option value="NY">New York</option>
                            <option value="TX">Texas</option>
                        </select>
                        <div class="invalid-feedback">Please select a state.</div>
                    </div>
                    <div class="col-md-2">
                        <label for="zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip" required>
                        <div class="invalid-feedback">Please enter your zip code.</div>
                    </div>
                    <div class="col-12">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                        <div class="invalid-feedback">Please enter your card number.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="expiry" class="form-label">Expiry Date</label>
                        <input type="month" class="form-control" id="expiry" name="expiry" required>
                        <div class="invalid-feedback">Please enter expiry date.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="cardNumber" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" required>
                        <div class="invalid-feedback">Please enter your CVV.</div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Place Order</button>
                </div>
            </form>
        </section>
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
        // Bootstrap validation
        (function() {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>