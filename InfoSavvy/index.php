<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon (2).ico" type="image/x-icon">
    <!-- external dependencies -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom styles -->
    <link rel="stylesheet" href="./style/main.css">
    <title>InfoSavvy</title>
</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-sm">
                <a href="#" class="navbar-brand">
                    <img src="./img/logo.png" alt="logo" width="150" height="40"
                        class="d-inline-block align-text-top" />
                </a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto"></div>
                    <div class="navbar-nav">
                        <ul class="navbar-nav d-flex align-items-center justify-content-center">
                            <li class="nav-item">
                                <a href="index.html" class="nav-item current nav-link">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" aria-expanded="false">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" aria-expanded="false">
                                    Contact Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link btn login" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Login
                                    </but>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="container-sm">
            <div class="d-flex justify-content-between align-items-center  flex-column flex-md-row">
                <div class="text d-flex flex-column">
                    <h1>Read & <span>Share</span></h1>
                    <p>Discover stories, thinking & share yours</p>
                    <a href="#" class="align-self-start my-4 btn">Start Sharing</a>
                </div>

                <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_5u6A5U.json"
                    background="transparent" speed="1" style="width: 600px; height: 600px;" loop
                    autoplay></lottie-player>

            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container-sm">
            <div class="title my-4">
                <h3><span><i class="fa-solid fa-chart-simple"></i></i></span> Trending on InfoSavvy</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trending interest">
        <div class="container-sm">
            <div class="title my-4">
                <h3><span><i class="fa-solid fa-star"></i></span> Pick Your Interest</h3>
            </div>
            <ul class="d-flex px-0">
                <li class="badge p-3 mx-2">
                    <a href="#">
                        <p class="fs-6 m-0">Tech</p>
                    </a>
                </li>
                <li class="badge p-3 mx-2">
                    <a href="#">
                        <p class="fs-6 m-0">Sport</p>
                    </a>
                </li>
                <li class="badge p-3 mx-2">
                    <a href="#">
                        <p class="fs-6 m-0">Science</p>
                    </a>
                </li>
                <li class="badge p-3 mx-2">
                    <a href="#">
                        <p class="fs-6 m-0">Entertainment</p>
                    </a>
                </li>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="post col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <div class="img-container">
                                    <img src="./img/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <div class="info d-flex justify-content-between">
                                        <p>by Kaleb M</p>
                                        <p>May 12</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="login-form" action="../backend/login.php" method="POST">
                    <?php
                            @$msg = $_REQUEST['err'];
                        ?>
                        <p style="color: red">
                    <?php echo $msg; ?></p>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <input type="submit" class="btn btn-primary" name="login" value="Login" />
                        <p class="my-2">Don't you have an account? please <span id="signup">sign up here</span></p>
                    </form>
                    <form method="POST" action="../backend/signup.php" class="signup-form d-none">
                        <?php
                            @$msg = $_REQUEST['error'];
                        ?>
                        <p style="color: red">
                    <?php echo $msg; ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="col-md-6">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password"
                                    name="confirm_password" required>
                            </div>
                        </div>
                        <input type="submit" name="signup" class="my-2 btn btn-primary" value="Sing up" />
                        <p class="my-2">Already have an account? <span id="login">login here</span></p>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <footer class="d-flex align-items-center justify-content-center">
        <p>Copyright &copy; 2023</p>
    </footer>


    <!-- custom script -->
    <script src="./js/main.js"></script>
    <!--external scripts  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>