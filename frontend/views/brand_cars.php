<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/main.css">
    <title>Wixcar - Cars</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto mx-sm-0" href="?page=products">
                <img src="/assets/images/icon.png" alt="Logo" style="width: 100px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="text-light nav-link" href="?page=products">Products</a></li>
                    <li class="nav-item"><a class="text-light nav-link" href="main.html">About</a></li>
                    <li class="nav-item"><a class="text-light nav-link" href="main.html">Contact</a></li>
                    <li class="nav-item"><a class="text-light nav-link" href="main.html">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top:100px">
        <h1 class="text-center mb-4">Cars</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($filteredCars as $car): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo $car->getImage(); ?>" class="card-img-top" alt="<?php echo $car->getName(); ?>" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $car->getName(); ?></h5>
                            <p class="card-text">Price: $<?php echo number_format($car->getPrice(), 2); ?></p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="text-center text-lg-start bg-dark text-white col-12 p-3 mt-3">
        <div class="text-center p-4">Copyright © Wixcar 2025</div>
    </footer>
</body>
</html>