<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-COMMERCE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<!-- TOP MENU -->
<div class="top_menu">
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a href="index.php" class="navbar-brand">E-COMMERCE</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="men.php" class="nav-link">Mens</a>
                </li>
                <li class="nav-item">
                    <a href="women.php" class="nav-link">Womens</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- TOP MENU -->

<!-- CART PAGE -->
<div class="px-4 px-lg-0">
<div class="container" id="s_cart">
    <div class="row">
    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
        <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="border-0 bg-light">
                <div class="p-2 px-3 text-uppercase">Product</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Price</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Quantity</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Remove</div>
                </th>
            </tr>
            </thead>
<!-- PRODUCT TEMPLATE -->
            <tbody>
            <tr>
                <th scope="row" class="border-0">
                <div class="p-2">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                    </div>
                </div>
                </th>
                <td class="border-0 align-middle"><strong>$79.00</strong></td>
                <td class="border-0 align-middle"><strong>3</strong></td>
                <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
            </tr>
            </tbody>
<!-- PRODUCT TEMPLATE -->
        </table>
        </div>
    </div>
    </div>


<!-- CHECKOUT -->
    <div class="row py-5 p-4 bg-white rounded shadow-sm order">
    <div class="col-lg-6">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
        <div class="p-4">
        <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
        <ul class="list-unstyled mb-4">
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$79.00</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
            <h5 class="font-weight-bold">$400.00</h5>
            </li>
        </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
        </div>
    </div>
    </div>
</div>
</body>
</html>