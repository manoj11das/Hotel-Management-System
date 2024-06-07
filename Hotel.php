<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    <link rel="shortcut icon" href="Hotellogo2.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS Folder/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../logo/Hotellogo2.jpg" type="image/x-icon">
    <style>
        .gallery-img {
            width: 90%;
            height: auto;
            max-height: 400px;
            margin-bottom: 10px;
            /* Adjust the margin-bottom as needed */
        }

        body {
            padding: 25px;
            background-color: white;
            color: black;
        }

        .dark-mode {
            background-color: rgb(142, 135, 135);
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="#">
                <img src="../logo/Hotellogo2.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                <strong>Hotel Management System</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=" "><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About"><strong>About</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#OURROOM"><strong>Rooms</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Gallery"><strong>Gallery</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#OurService"><strong>Services</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#FAQ"><strong>Faq</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../HTML file folders/SignUp.php"><button
                                class="btn btn-primary"><strong>Sign Up</strong></button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <button class="btn btn-primary" id="darkModeBtn">
                                <strong>Toggle</strong>
                            </button>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>


        <!-- Hotel Image -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../header Img/Hotel img6.jpg" class="d-block w-100" alt="Hotel Image" style="max-height: 700px; max-width: 100
                    0%;">
                </div>
                <div class="carousel-item">
                    <img src="../header Img/Hotel img7.jpg" class="d-block w-100" alt="Second Image" style="max-height: 700px; max-width: 100
                    0%;">
                </div>
                <div class="carousel-item">
                    <img src="../header Img/Hotel img8.jpg" class="d-block w-100" alt="Second Image" style="max-height: 700px; max-width: 100
                    0%;">
                </div>
                <div class="carousel-item">
                    <img src="../header Img/Hotel img9.jpg" class="d-block w-100" alt="Second Image" style="max-height: 700px; max-width: 100
                    0%;">
                </div>

                <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- About Section -->
        <div id="About" class="container">
            <div class="tab-content" id="aboutTabContent">
                <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="../About us/Hotel img7.jpg" alt="About Image" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusamus consequatur
                                eos! Maxime
                                accusantium quidem harum optio in a quod sunt, porro consequuntur quo iusto consectetur!
                                Pariatur ab
                                culpa officiis necessitatibus maxime voluptates odio obcaecati? Sed cum voluptates
                                laudantium labore
                                facere quisquam officia odit sunt, perferendis, repudiandae aliquam sequi libero Lorem
                                ipsum dolor sit,
                                amet consectetur adipisicing elit. .</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusamus consequatur
                                eos! Maxime
                                accusantium quidem harum optio in a quod sunt, porro consequuntur quo iusto consectetur!
                                Pariatur ab
                                culpa officiis necessitatibus maxime voluptates odio obcaecati? Sed cum voluptates
                                laudantium labore
                                facere quisquam officia odit sunt, perferendis, repudiandae aliquam sequi libero Lorem
                                ipsum dolor sit,
                                amet consectetur adipisicing elit. Consectetur quod sunt, veniam ab omnis illo maiores
                                nostrum facilis
                                commodi ea praesentium error facere repellendus, doloribus voluptatem similique? Quia,
                                illo
                                adipisci!.</p>
                        </div>
                    </div>
                </div>
                <!-- Add more tab panes for other sections -->
            </div>
        </div>


        <!-- Room Section -->
        <div id="OURROOM" class="text-center mt-5">
            <h2>OUR ROOM</h2>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card mb-3">
                        <img src="../ROOM Img/room img7.jpg" class="card-img-top" alt="Room 1">
                        <div class="card-body">
                            <h5 class="card-title">Daily Rooms</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat
                                libero amet tempore.</p>
                            <a href="../Daily Room/DailyRooms.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3">
                        <img src="../ROOM Img/room img6.jpg" class="card-img-top" alt="Room 1">
                        <div class="card-body">
                            <h5 class="card-title">Exclusive Rooms</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaeratlibero amet tempore .</p>
                            <a href="../Exclusive Room/Exclusive.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3">
                        <img src="../ROOM Img/room img5.jpg" class="card-img-top" alt="Room 1">
                        <div class="card-body">
                            <h5 class="card-title">Average Rooms</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat
                                libero
                                amet tempore .</p>
                                <a href="../Average Room/Average.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Add more room cards -->
            </div>
        </div>

        <!-- Services Section -->
        <div id="OurService" class="text-center mt-5">
            <h2>OUR SERVICES</h2>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <a href="../Our Services/Swimmig/index.php" class="btn btn-primary" target="_blank">
                        <i class="fa-solid fa-person-swimming fa-5x"></i>
                        <div>Swimming Pool</div>
                    </a>
                </div>                
                
                <div class="col-md-2">
                    <a href="../Our Services/Resturant/index.php" class="btn btn-primary">
                        <i class="fa-solid fa-utensils fa-5x"></i>
                        <div> Restaurant</div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../Our Services/Fitness/index.php" class="btn btn-primary">
                        <i class="fa-solid fa-dumbbell fa-5x"></i>
                      <div>  Fitness</div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../Our Services/Beauty Spa/index.php" class="btn btn-primary">
                        <i class="fa-solid fa-spa fa-5x"></i>
                       <div> Beauty Spa</div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../Our Services/Resort/index.php" class="btn btn-primary">
                        <i class="fa-solid fa-umbrella-beach fa-5x"></i>
                        <div>Resort Beach</div>
                    </a>
                </div>
                <!-- Add more service items with similar format -->
            </div>
        </div>
        

        <!-- Gallery Section -->
        <h2 class="text-center mt-5">OUR GALLERY</h2>
        <div id="Gallery" class="row justify-content-center">
            <div class="col-md-3">
                <div class="h-100 d-flex align-items-center">
                    <img src="../Gallery/gallery img5.jpg" class="img-fluid mb-3 gallery-img" alt="Gallery Image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 d-flex align-items-center">
                    <img src="../Gallery/gallery img4.jpg" class="img-fluid mb-3 gallery-img" alt="Gallery Image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 d-flex align-items-center">
                    <img src="../Gallery/gallery img3.jpg" class="img-fluid mb-3 gallery-img" alt="Gallery Image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 d-flex align-items-center">
                    <img src="../Gallery/gallery img2.jpg" class="img-fluid mb-3 gallery-img" alt="Gallery Image">
                </div>
            </div>
            <!-- Add more gallery images -->
        </div>

        <!-- FAQ Section -->
        <div id="FAQ" class="container">
            <div class="row align-items-center">
                <!-- Image column -->
                <div class="col-md-6">
                    <img src="../FAQ/FAQs.gif" alt="Animated FAQ Image" class="img-fluid mb-4">
                </div>
                <!-- FAQs column -->
                <div class="col-md-6">
                    <div class="text-center">

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <select class="form-control mb-3">
                                    <option value="">How to claim Coupons Codes?</option>
                                    <option value="">To claim coupon codes, simply...</option>
                                </select>
                                <select class="form-control mb-3">
                                    <option value="">How To Cancel?</option>
                                    <option value="">To cancel your booking, please...</option>
                                </select>
                                <select class="form-control mb-3">
                                    <option value="">How to make a reservation?</option>
                                    <option value="">To make a reservation, you can...</option>
                                </select>
                                <select class="form-control mb-3">
                                    <option value="">What are the check-in and check-out times?</option>
                                    <option value="">Our check-in time is at [insert time], and check-out time is at
                                        [insert time].</option>
                                </select>
                                <select class="form-control mb-3">
                                    <option value="">Do you offer room service?</option>
                                    <option value="">Yes, we offer room service. You can request...</option>
                                </select>
                                <select class="form-control mb-3">
                                    <option value="">Is there parking available?</option>
                                    <option value="">Yes, we provide parking facilities...</option>
                                </select>
                                <!-- Add descriptions for more FAQ dropdowns -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


          <!-- Booking Section -->
          <div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-header font-weight-bold">
                Booking
            </div>
            <div class="card-body">
                <form id="bookingForm">
                    <div class="form-group">
                        <label for="checkin">Check in*</label>
                        <input type="date" class="form-control" id="checkin" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Checkout*</label>
                        <input type="date" class="form-control" id="checkout" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="adults">Adults*</label>
                            <select class="form-control" id="adults" required>
                                <option>0 Adults</option>
                                <option>1 Adult</option>
                                <option>2 Adults</option>
                                <option>3 Adults</option>
                                <option>4 Adults</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="childs">Children*</label>
                            <select class="form-control" id="childs" required>
                                <option>0 Child</option>
                                <option>1 Child</option>
                                <option>2 Child</option>
                                <option>3 Child</option>
                                <option>4 Child</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rooms">Room Type*</label>
                        <select class="form-control" id="rooms" required>
                            <option value="daily">Daily Rooms</option>
                            <option value="deluxe">Deluxe Rooms</option>
                            <option value="average">Average Rooms</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numRooms">Number of Rooms*</label>
                        <select class="form-control" id="numRooms" required>
                            <option>1 Room</option>
                            <option>2 Rooms</option>
                            <option>3 Rooms</option>
                            <option>4 Rooms</option>
                        </select>
                    </div>
                    <div id="roomDetails" class="form-group">
                        <!-- Room details will be displayed here -->
                    </div>
                    <button type="submit" class="btn btn-primary">Check Availability</button>
                </form>
            </div>
        </div>
    </div>
</div>



        <!-- Footer -->
        <footer class="bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Contact Info</h3>
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-phone"></i> +123-456-7890</li>
                            <!-- Add more contact info -->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Quick Links</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Room</a></li>
                            <li><a href="#">Gallery</a></li>
                            <!-- Add more quick links -->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Extra Links</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Trainer</a></li>
                            <li><a href="#">Equipment</a></li>
                            <!-- Add more extra links -->
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <h3>Social Media</h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa-brands fa-square-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="fa-brands fa-square-threads"></i> Thread</a></li>
                            <li><a href="#"><i class="fa-brands fa-square-twitter"></i>Twiter</a></li>


                            <!-- Add more social media links -->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fringilla ligula eget fermentum
                            ullamcorper.</p>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Font Awesome JS -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- <script src="Hotel.js"></script> -->

        // JavaScript
        <script>
            function toggleDarkMode() {
                var bodyElement = document.body;
                bodyElement.classList.toggle("dark-mode");
            }

            // Attach the function to your button
            var darkModeButton = document.getElementById("darkModeBtn");
            darkModeButton.addEventListener("click", toggleDarkMode);

        </script>
      <script src="book.js"></script>
</body>

</html>