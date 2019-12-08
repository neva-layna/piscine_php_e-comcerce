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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<!-- TOP MENU -->
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

<!-- ITEMS -->
<div class="px-4 px-lg-0">
<div class="container" id="s_cart">
    <div class="p-5 bg-white rounded shadow mb-5">
        <!-- Rounded tabs -->
        <h1 class="display-3 text-center mb-1">Best Sellers</h1>
        <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav justify-content-center">
        <li class="nav-item flex-sm-fill">
            <a id="home-tab" data-toggle="tab" href="#men" role="tab" aria-controls="home" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">Men</a>
        </li>
        <li class="nav-item flex-sm-fill">
            <a id="profile-tab" data-toggle="tab" href="#women" role="tab" aria-controls="profile" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Women</a>
        </li>
        </ul>
        <div id="myTabContent" class="tab-content">
        <div id="men" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
        <div class="row">
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_pants1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Trousers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_pants2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Trousers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_pants3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Trousers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_pants4.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Trousers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_shirt.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Shirts</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_shirt2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Shirts</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_shirt3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Shirts</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_shirt4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men' Shirts</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_sneak1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Sneakers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_sneak2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Sneakers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_sneak3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Sneakers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/m_sneak4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Men's Sneakers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
        </div>
        </div>
        <div id="women" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
        <div class="row">
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_pants1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Trousers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_pants2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Trousers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_pants3.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Trousers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_pants4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Trousers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_shirt1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Shirts</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_shirt2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Shirts</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_shirt3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Shirts</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_shirt4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women' Shirts</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_sneak1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Sneakers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_sneak2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Sneakers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_sneak3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Sneakers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
            <div class="card text-center" style="width: 14rem;">
                <img class="card-img-top" src="img/w_sneak4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Women's Sneakers</h5>
                        <p class="card-text">$9.90</p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
            </div>
        </div>
        </div>
        </div>
        <!-- End rounded tabs -->
    </div>
</div>
</body>
</html>