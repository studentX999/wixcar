<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/products.css">
    <title>Wixcar - Products</title>

    <link rel="stylesheet" href="../frontend/public/css/main.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=main">
                <img src="../frontend/assets/images/webicon.png" alt="Wixcar Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-light" href="?page=products">Products</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="?page=main">About</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="?page=main">Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="?page=main">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top:100px">
        <h1 class="text-center mb-4">Choose Your Brand</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($brands as $brand): ?>
                <div class="col">
                    <a href="?page=brand_cars&brand_id=<?php echo $brand->getId(); ?>" style="text-decoration: none;">
                        <div class="card h-100 text-center">
                            <img src="<?php echo $brand->getLogo(); ?>" class="card-img-top" alt="<?php echo $brand->getName(); ?>" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $brand->getName(); ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer (đồng bộ với main.php) -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">© Copyright © Wixcar 2025. All rights reserved.</p>
            <div class="mt-2">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Font Awesome for social icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>