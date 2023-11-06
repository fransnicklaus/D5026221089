<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <div class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col-12 px-0">
                <img src="{{ asset('./image/pizza gede.jpeg')}}" class="img-fluid w-100">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-3">
                <img src="{{ asset('./image/pizza kecil 1.jpeg')}}" class="img-fluid rounded">
            </div>
            <div class="col-3">
                <img src="{{ asset('./image/pizza kecil 2.jpeg')}}" class="img-fluid rounded">
            </div>
            <div class="col-3">
                <img src="{{ asset('./image/pizza kecil 1.jpeg')}}" class="img-fluid rounded">
            </div>
            <div class="col-3">
                <img src="{{ asset('./image/pizza kecil 2.jpeg')}}" class="img-fluid rounded">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-8">
                <h1>Pepperoni Pizza</h1>
            </div>
            <div class="col-4">
                <i class="fa-solid fa-star" style="color: #ffea00;font-size:25px;"></i>
                <h6>4.5 <small>[50+]</small></h6>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h5>$10.00</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
            A traditional Noepolitan pizza topped with tomato sauce, fresh mozzarella cheese, basil leaves, and drizzled with olive oil. <a href="">Read More.</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <h2>Size</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="btn-group padding-right button-size">
            <button type="button" class="btn btn-outline-secondary">S</button>
        </div>
        <div class="btn-group padding-right button-size">
            <button type="button" class="btn btn-warning">M</button>
        </div>
        <div class="btn-group button-size">
            <button type="button" class="btn btn-outline-secondary">L</button>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <h2>Ingredient</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-2">
                <img src="{{ asset('./image/pngwing.com (2).png')}}" alt="" height="50px" width="50px" class="image">
            </div>
            <div class="col-2">
                <img src="{{ asset('./image/pngwing.com (3).png')}}" alt="" height="50px" width="50px" class="image">
            </div>
            <div class="col-2">
                <img src="{{ asset('./image/pngwing.com (4).png')}}" alt="" height="50px" width="50px" class="image">
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-4"></div>
                <div class="btn-group button-size">
                    <button type="button" class="btn btn-secondary"><img src="bag.png" alt="" height="10px" width="10px"></button>
                </div>
            </div>
        </div>
    </div> -->
    <div class="btn-group mt-4 image-padding">
        <button type="button" class="btn btn-secondary"><img src="{{ asset('./image/bag.png')}}" alt="" width="50px" height="50px"></button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-secondary btn-lg button-order" >Order Now</button>
    </div>
</body>
</html>
