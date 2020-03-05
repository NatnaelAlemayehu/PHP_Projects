<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>

    <div class="main-wrapper">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light nav-background">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <form class="search-form">
            <div class="form-row no-gutters">
                <div class="form-group col-md-3">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-3 search-button">

                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    </div>

    <p class="text-center featured-title">Featured Properties</p>
    <div class="row d-flex justify-content-center card1-par-css">
        <div class="card col-md-3 card1-css" style="width: 18rem;">
            <img class="card-img-top" src="../assets/images/house1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card col-md-3 card1-css" style="width: 18rem;">
            <img class="card-img-top" src="../assets/images/house2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card col-md-3 card1-css" style="width: 18rem;">
            <img class="card-img-top" src="../assets/images/house3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


    <div class="container-wrapper1">
        <p class="text-center featured-title">What we do</p>
        <div class="container1">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4">
                        <i class="flaticon-rent flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary hover-text-primary py-3 m-0">Selling Service</h5>
                        <p>With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4">
                        <i class="flaticon-rent flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary hover-text-primary py-3 m-0">Selling Service</h5>
                        <p>With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4">
                        <i class="flaticon-rent flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary hover-text-primary py-3 m-0">Selling Service</h5>
                        <p>With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4">
                        <i class="flaticon-rent flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary hover-text-primary py-3 m-0">Selling Service</h5>
                        <p>With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-wrapper2">
        <p class="text-center featured-title">How it works</p>
        <div class="container2">
            <div class="row how-it-works">
                <div class="col-lg-4 col-md-6">
                    <div class="pl-3 pr-3 mb-4 bg-white shadow-one rounded">
                        <i class="falticon-home flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary py-2 mt-3 mb-2">Search Your Home</h5>
                        <p>
                            Select your home or appartment and let’s contact with us.
                            Ask what answer you need. You can also contact with the agent
                            if you have any question.
                            Select your home or appartment and let’s contact with us.
                            Ask what answer you need. You can also contact with the agent
                            if you have any question.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pl-3 pr-3 mb-4 bg-white shadow-one rounded">
                        <i class="falticon-home flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary py-2 mt-3 mb-2">Search Your Home</h5>
                        <p>
                            Select your home or appartment and let’s contact with us.
                            Ask what answer you need. You can also contact with the agent
                            if you have any question.
                            Select your home or appartment and let’s contact with us.
                            Ask what answer you need. You can also contact with the agent
                            if you have any question.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pl-3 pr-3 mb-4 bg-white shadow-one rounded">
                        <i class="falticon-home flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary py-2 mt-3 mb-2">Search Your Home</h5>
                        <p>
                            Select your home or appartment and let’s contact with us.
                            Ask what answer you need. You can also contact with the agent
                            if you have any question.
                            Select your home or appartment and let’s contact with us.
                            Ask what answer you need. You can also contact with the agent
                            if you have any question.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="#"
                            target="_blank">Inthao</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>