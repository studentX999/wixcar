<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>

    <!-- Import Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

    <!-- Import Roboto Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="../public/css/main.css">

    <title>Wixcar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand mx-auto mx-sm-0" href="main.html">
                <img src="../assets/images/icon.png" alt="Logo" style="width: 100px; height: auto;">
            </a>

            <!-- Toggler button cho mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items -->
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="text-light nav-link" href="main.html">Products</a></li>
                    <li class="nav-item"><a class="text-light nav-link" href="main.html">About</a></li>
                    <li class="nav-item"><a class="text-light nav-link" href="main.html">Contact</a></li>
                    <li class="nav-item"><a class="text-light nav-link" href="main.html">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container" style="margin-top:100px">
        <div class = "row">
            <img src="../assets/images/shop_img.png" class="img-responsive col-sm-12 col-lg-8" alt="Responsive image"/>
            <div class ="col-sm-12 col-lg-4">
                <h1>From Arston Martin to Zenos</h1>
                <p>Chúng tôi bán xe nắm giữ 100% thị phần. Trong vòng bán kính 100km nếu bạn thấy 1 chiếc xe nào đẹp mà không phải xe của chúng tôi bán, chúng tôi sẽ thưởng bạn 30 tỷ.
                </p>
            </div>
        </div>

        <div class = "bg-secondary mt-4 col-12 rounded text-light h-10 p-3 text-center">
            "Still Less, Move More."
        </div> 

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="../assets/images/news1.png" class="card-img-top card-img-fixed" alt="News 1">
                    <div class="card-body">
                        <h5 class="card-title">Xe Vinfast mới nhất nhìn như xe LEGO?</h5>
                        <p class="card-text">Một số bộ phận người đánh giá rằng Vinfast VF3 nhìn giống xe đồ chơi.</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="button">Xem chi tiết</button>
                    </div>
                </div>
            </div>
        
            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="../assets/images/news2.jpg" class="card-img-top card-img-fixed" alt="News 2">
                    <div class="card-body">
                        <h5 class="card-title">Tàu ngầm, tại sao không?</h5>
                        <p class="card-text">Với sức hút của thiết kế tàu ngầm kilo, người tiêu dùng đổ xô đi đặt hàng dù không có tiền.</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="button">Xem chi tiết</button>
                    </div>
                </div>
            </div>
        
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="../assets/images/news3.jpg" class="card-img-top card-img-fixed" alt="News 3">
                    <div class="card-body">
                        <h5 class="card-title">Pagani đọc ngược lại là Inagap</h5>
                        <p class="card-text">Cảm thấy không biết làm gì nên người viết news định đọc ngược cái tên Pagani và phát hiện ra Inagap</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="button">Xem chi tiết</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <footer class="text-center text-lg-start bg-dark text-white col-12 p-3 mt-3">
    <div class="text-center p-4">Copyright © Wixcar 2025</div>
    </footer>
        
     
</body>
</html>