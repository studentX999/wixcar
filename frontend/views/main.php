<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Import Roboto Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../frontend/public/css/main.css">

    <title>Wixcar</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
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
                        <a class="nav-link text-white" href="?page=products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?page=about">About</a>
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

    <!-- Hero Section -->
    <header class="hero-section text-white text-center" style="background: url('../frontend/assets/images/shop_img.png') no-repeat center center/cover; height: 400px; position: relative;">
        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
        <div class="hero-content" style="position: relative; z-index: 1; padding-top: 100px;">
            <h1 class="display-4 fw-bold">Welcome to Wixcar</h1>
            <p class="lead">Discover the finest cars from Aston Martin to Zenos!</p>
            <a href="?page=products" class="btn btn-primary btn-lg mt-3">Explore Cars</a>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="../frontend/assets/images/shop_img.png" class="img-fluid rounded shadow" alt="Car Showcase">
            </div>
            <div class="col-md-6">
                <h2 class="text-secondary">Our Promise</h2>
                <p class="lead">We hold 100% of the market share. If you find a beautiful car within 100km that isn’t sold by us, we’ll reward you with 30 billion VND!</p>
                <a href="?page=about" class="btn btn-outline-secondary">Learn More</a>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4 text-secondary">Latest News</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../frontend/assets/images/news1.png" class="card-img-top news-img" alt="News 1">
                    <div class="card-body">
                        <h5 class="card-title">Vinfast VF3 Looks Like LEGO?</h5>
                        <p class="card-text">Some reviewers say the new Vinfast VF3 resembles a toy car.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../frontend/assets/images/news2.jpg" class="card-img-top news-img" alt="News 2">
                    <div class="card-body">
                        <h5 class="card-title">Submarine Cars – Why Not?</h5>
                        <p class="card-text">The submarine Kilo design is attracting buyers, even without funds.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../frontend/assets/images/news3.jpg" class="card-img-top news-img" alt="News 3">
                    <div class="card-body">
                        <h5 class="card-title">Pagani Reads as Inagap!</h5>
                        <p class="card-text">A writer reversed "Pagani" and discovered "Inagap" by accident.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Font Awesome for social icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>