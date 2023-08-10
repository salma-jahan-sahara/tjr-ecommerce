<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Shop-BD</title>
    <!-- Bootstrap CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- Header starts here -->
    <Header>
        <nav class="navbar navbar-expand-lg navbar-dark nav__bg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{asset('/assets/img/tjr-brand-logo.png')}}" class="brand__logo" alt="TJR Brand"></a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bars-staggered px-2"></i>Categories
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        @foreach($categories as $category)
                            <li><a class="dropdown-item" href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <form class="d-flex">
                <input class="form-control me-2 px-3" type="search" placeholder="Search" aria-label="Search" id="search">
                <button class="btn icon__search" type="submit" id="icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="navbar-nav">
                    <a class="nav-link" href="#"><i class="fa-solid fa-circle-half-stroke"></i></a>
                    <a class="nav-link" aria-current="page" href="#"><i class="fa-regular fa-user"></i></a>
                    <a class="nav-link" href="#"><i class="fa-regular fa-heart"></i></a>
                    <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
                    </nav>
        <nav class="navbar navbar-expand-lg navbar-dark nav__bg">
            <div class="container">
                <!-- Menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Brand</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($brands as $brand)
                                    <li><a class="dropdown-item" href="#">{{$brand->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($shops as $shop)
                                    <li><a class="dropdown-item" href="#">{{$shop->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger ms-3" href="#">Sale !!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </Header>
    <!-- Bootstrap Js Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>