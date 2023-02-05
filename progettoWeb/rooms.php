<?php
session_start();
require 'functions.php';
require 'connection.php';
require 'header.php';

?>

<!--BEGIN CONTAINER PAGE-->
<div class="container text-center roomsIntero">
    <!--BEGIN TITLE/DESCRIPTION-->
    <h1>MODERN - REFINED - ELEGANT</h1>
    <h4><i>WE'VE GOT ROOM FOR YOU</i></h4>
    <hr>
    <h4><small>Conceived as a pillar of the city’s renowned floral district, the hotel’s exceptionally detailed
            furniture and design draws inspiration from the beauty of nature. Suites are the epitome of luxury, their
            expansive living spaces filled with <br>bespoke furnishings and artwork, while Club Lounge guests enjoy the
            attention of a dedicated <br>concierge and curated culinary offerings throughout the day.</small></h4>
    <hr class="mb-3">

    <p><small class="text-muted mb-4"><i>ALL PAYMENTS MUST BE MADE AT THE FACILITY ON THE DAY OF CHECK-IN.</i></small>
    </p>
    <!--END TITLE/DESCRIPTION-->

    <!--BEGIN ROOM 1-->
    <div class="card rounded shadow-lg">
        <div class="card-header p-0">
            <div id="carouselExampleIndicators1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner m-0 p-0 rounded-top">
                    <div class="carousel-item active">
                        <img src="img/camera1/camera1aa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/camera1/camera1bb.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/camera1/camera1cc.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <h3 class="card-title mb-0">MADISON CLUB SUITE</h3>
                    <hr class="m-0">
                    <p class="text-muted"><small>1 king bed | 1 sofa bed | Sleeps 4 | Room Size 265 sq. ft.</small></p>
                    <h5 class="mb-2">250$/night</h5>
                </div>
                <div class="col-6">
                    <p class="card-text">Madison Club Suite offer a central Midtown Manhattan city view, a spacious
                        living room with sofa bed and a dining area. Let those <br>bright lights inspire you or draw the
                        shades and tune out.</p>
                </div>
                <div class="col-2">
                    <p>
                        <a class="btn btn-dark mt-1 w-100" data-bs-toggle="collapse" href="#collapseExample1"
                           role="button" aria-expanded="false" aria-controls="collapseExample">
                            More Info
                        </a>
                    </p>
                    <!--Se l'user non ha effettuato il login viene visualizzato il tasto di redirect alla pagina di login-->
                    <?php if (!isUserLoggedIn()) { ?>
                        <a type="button"
                           class=" bottoneBookingPrenota w-100 btn btn-outline-dark <?= strpos($page, 'login.php') !== false ? 'active' : '' ?>"
                           href="login.php">Login for booking</a>
                    <?php } ?>
                </div>
            </div>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-4">
                            <h5>CURATED CLUB SUITE</h5>
                            <p>
                                - Corner suite with panoramic views -<br>
                                - Spacious living room with sofa bed -<br>
                                - Dining area -<br>
                            </p>
                        </div>
                        <!---->
                        <div class="col-4">
                            <h5>LUXURIOUS AMENITIES</h5>
                            <p>- Armoire with curated honor bar -<br>
                                - LCD Smart TV with streaming capabilities -<br>
                                - Frette linens -</p>
                        </div>
                        <!----->
                        <div class="col-4">
                            <h5>MARBLE BATHROOMS</h5>
                            <p>- Diptyque bathroom amenities -<br>
                                - Soaking tub and separate shower -<br>
                                - Plush terry robes and slippers -</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END ROOM1-->


    <!--BEGIN ROOM2-->
    <div class="card rounded shadow-lg mt-5">
        <div class="card-header p-0">
            <div id="carouselExampleIndicators2" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner m-0 p-0 rounded-top">
                    <div class="carousel-item active">
                        <img src="img/camera2/camera2aaa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/camera2/camera2bb.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/camera2/camera2cc.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <h3 class="card-title mb-0">MANHATTAN ROOM</h3>
                    <hr class="m-0">
                    <p class="text-muted"><small>1 king bed | Sleeps 2 | Room Size 200 sq. ft.</small></p>
                    <h5 class="mb-2">150$/night</h5>
                </div>
                <div class="col-6">
                    <p class="card-text">Soak up New York City from our spacious Manhattan room,<br>filled with modern
                        design elements built to make your stay a memorable one and peaceful and luxurious retreats with
                        high ceilings.</p>
                </div>
                <div class="col-2">
                    <p>
                        <a class="btn btn-dark mt-1 w-100" data-bs-toggle="collapse" href="#collapseExample2"
                           role="button" aria-expanded="false" aria-controls="collapseExample">
                            More Info
                        </a>
                    </p>
                    <?php if (!isUserLoggedIn()) { ?>
                        <a type="button"
                           class=" bottoneBookingPrenota w-100 btn btn-outline-dark <?= strpos($page, 'login.php') !== false ? 'active' : '' ?>"
                           href="login.php">Login for booking</a>
                    <?php } ?>
                </div>
            </div>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-4">
                            <h5>MANHATTAN VIEWS</h5>
                            <p>
                                - Breathtaking southern sunset views -<br>
                                - Exceptionally detailed furniture -<br>
                                - Floating chandeliers -<br>
                            </p>
                        </div>
                        <!---->
                        <div class="col-4">
                            <h5>LUXURIOUS AMENITIES</h5>
                            <p>- Armoire with curated honor bar -<br>
                                - LCD Smart TV with streaming capabilities -<br>
                                - Frette linens -</p>
                        </div>
                        <!----->
                        <div class="col-4">
                            <h5>MARBLE BATHROOMS</h5>
                            <p>- Diptyque bathroom amenities -<br>
                                - Soaking tub and separate shower -<br>
                                - Plush terry robes and slippers -</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END ROOM2-->

    <!--BEGIN ROOM3-->
    <div class="card rounded shadow-lg mt-5">
        <div class="card-header p-0">
            <div id="carouselExampleIndicators3" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner m-0 p-0 rounded-top">
                    <div class="carousel-item active">
                        <img src="img/camera3/camera3a.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/camera3/camera3b.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/camera3/camera3c.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <h3 class="card-title mb-0">SKYLINE CLUB DOUBLE</h3>
                    <hr class="m-0">
                    <p class="text-muted"><small>2 queen bed | Sleeps 2 | Room Size 230 sq. ft.</small></p>
                    <h5 class="mb-2">180$/night</h5>
                </div>
                <div class="col-6">
                    <p class="card-text">Select two queen beds when travelling with the band. Friends and families with
                        little legends will appreciate the added space.</p>
                </div>
                <div class="col-2">
                    <p>
                        <a class="btn btn-dark mt-1 w-100" data-bs-toggle="collapse" href="#collapseExample3"
                           role="button" aria-expanded="false" aria-controls="collapseExample">
                            More Info
                        </a>
                    </p>
                    <?php if (!isUserLoggedIn()) { ?>
                        <a type="button"
                           class=" bottoneBookingPrenota w-100 btn btn-outline-dark <?= strpos($page, 'login.php') !== false ? 'active' : '' ?>"
                           href="login.php">Login for booking</a>
                    <?php } ?>
                </div>
            </div>
            <div class="collapse" id="collapseExample3">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-4">
                            <h5>CLUB LEVEL</h5>
                            <p>
                                - Spacious double room -<br>
                                - Exceptionally detailed furniture -<br>
                                - Heavily marbled nightstands -<br>
                            </p>
                        </div>
                        <!---->
                        <div class="col-4">
                            <h5>LUXURIOUS AMENITIES</h5>
                            <p>- Armoire with curated honor bar -<br>
                                - LCD Smart TV with streaming capabilities -<br>
                                - Frette linens -</p>
                        </div>
                        <!----->
                        <div class="col-4">
                            <h5>MARBLE BATHROOMS</h5>
                            <p>- Diptyque bathroom amenities -<br>
                                - Soaking tub and separate shower -<br>
                                - Plush terry robes and slippers -</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END ROOM3-->

    <!--BEGIN ROOM4-->
    <div class="card rounded shadow-lg mt-5">
        <div class="card-header p-0">
            <div id="carouselExampleIndicators4" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner m-0 p-0 rounded-top">
                    <div class="carousel-item active">
                        <img src="img/camera4/camera4a.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/camera4/camera4b.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/camera4/camera4c.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <h3 class="card-title mb-0">PLATINUM SUITE</h3>
                    <hr class="m-0">
                    <p class="text-muted"><small>1 king bed | Sleeps 2 | Room Size 400 sq. ft.</small></p>
                    <h5 class="mb-2">400$/night</h5>
                </div>
                <div class="col-6">
                    <p class="card-text">Platinum Suite with private terrace balcony. A-list features include a separate
                        living area and bedroom, and patio furniture for elevated lounging in the heart of Midtown
                        Manhattan.</p>
                </div>
                <div class="col-2">
                    <p>
                        <a class="btn btn-dark mt-1 w-100" data-bs-toggle="collapse" href="#collapseExample4"
                           role="button" aria-expanded="false" aria-controls="collapseExample">
                            More Info
                        </a>
                    </p>
                    <?php if (!isUserLoggedIn()) { ?>
                        <a type="button"
                           class=" bottoneBookingPrenota w-100 btn btn-outline-dark <?= strpos($page, 'login.php') !== false ? 'active' : '' ?>"
                           href="login.php">Login for booking</a>
                    <?php } ?>
                </div>
            </div>
            <div class="collapse" id="collapseExample4">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-4">
                            <h5>SUPERIOR</h5>
                            <p>
                                - Residential inspired one bedroom suite -<br>
                                - Panoramic Manhattan views -<br>
                                - Dining area -<br>
                            </p>
                        </div>
                        <!---->
                        <div class="col-4">
                            <h5>LUXURIOUS AMENITIES</h5>
                            <p>- Armoire with curated honor bar -<br>
                                - LCD Smart TV with streaming capabilities -<br>
                                - Frette linens -</p>
                        </div>
                        <!----->
                        <div class="col-4">
                            <h5>MARBLE BATHROOMS</h5>
                            <p>- Diptyque bathroom amenities -<br>
                                - Soaking tub and separate shower -<br>
                                - Plush terry robes and slippers -</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END ROOM4-->
    <?php
    require 'footbar.php';
    ?>
</div>

<?php
require 'footer.php';
?>

