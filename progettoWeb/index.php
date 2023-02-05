<?php
session_start();
require 'functions.php';
require 'connection.php';
require 'header.php';
?>

    <body class="text-center">

<!--In caso di login effettuato correttamente verrà visualizzato un messaggio di "success" recuperato dalla sessione-->
<?php
if (!empty($_SESSION['message'])) { ?>
    <div class="alert alert-success" id="mess"><?= $_SESSION['message'] ?></div>
    <?php
    $_SESSION['message'] = '';
}
?>

<!--BEGIN Carousel di bootstrap che contiene immagini-->
<div class="dimensioniSlide">
    <div id="carouselExampleCaptions" class="carousel slide shadow">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/cia00.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/cia01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/cia03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--END CAROUSEL-->

<!--BEGIN CONTAINER-->
<div class="container indexPage">
    <!--BEGIN TITLE/DESCRIPTION-->
    <div class="intro">
        <h1>THE SKYLINE HOTEL</h1>
        <hr>
        <h4><small>The Skyline Hotel in New York, invites the best of Manhattan inside of its doors,<br> sparking
                curiosity and creativity in each and every guest.
                Featuring bold design, legendary restaurants and bars,<br> and immersive experiences, The Skyline Hotel,
                enlivens the essence of the new Madison Square Park,<br>
                heightened by the genuine care of the Ladies and Gentlemen.</small></h4>
        <hr>
    </div>
    <!--END TITLE/DESCRIPTION-->

    <!--BEGIN CARD1 PHOTO+DESCRIPTION-->
    <div class="row featurette shadow">
        <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">ROOMS VIEW</h2>
            <p class="lead">Conceived as a pillar of the city’s renowned floral district, the hotel’s exceptionally
                detailed furniture and design draws inspiration from the beauty of nature. Suites are the epitome of
                luxury, their expansive living spaces filled with bespoke furnishings and artwork.</p>
        </div>
        <div class="col-md-5 contornoFotoHome">
            <img class="fotoHome shadow" src="img/cia04.jpg">
        </div>
    </div>
    <!--END CARD1-->

    <!--BEGIN CARD2 PHOTO+DESCRIPTION-->
    <div class="row featurette shadow">
        <div class="col-md-5 order-md-2 scrittaFoto2">
            <h2 class="featurette-heading fw-normal lh-1">COMMITMENT TO CLEANLINESS</h2>
            <p class="lead">Your well-being is our top priority.<br> Ensuring a safe, clean and inviting environment is
                the core of our commitment to providing the highest level of hospitality.</p>
        </div>
        <div class="col-md-5 order-md-1 contornoFotoHome">
            <img class="fotoHome2 shadow" src="img/cia05.jpg">
        </div>
    </div>
    <!--END CARD2-->

    <!--BEGIN CARD3 PHOTO+DESCRIPTION-->
    <div class="row featurette shadow last">
        <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">FITNESS CENTER</h2>
            <p class="lead">Keep track of your fitness journey at The Skyline Hotel. Located adjacent to the Spa, guests
                can maintain their workout regimen in our new state-of-the-art fitness center. We offer complimentary
                fruit infused water and cold towels for your convenience.</p>
        </div>
        <div class="col-md-5 contornoFotoHome">
            <img class="fotoHome shadow" src="img/cia06.jpg">
        </div>
    </div>
    <!--END CARD3-->

    <!--BEGIN MENU PREVIEW-->
    <div class="card miniMenu mb-3">
        <div class="row g-0">
            <div class="col-md-4 contornoFotoMiniMenu">
                <img src="img/ciaofood.jpg" class="img-fluid rounded-start fotoMiniMenu" alt="...">
            </div>
            <div class="col-md-5">
                <div class="card-body infoMiniMenu">
                    <h1 class="card-title">PREVIEW MENU'</h1>
                    <hr id="hrMenu">
                    <h4 class="card-text distanzaTitoliMenu"><small>Caesar salad - 19$</small></h4>
                    <p class="card-text sottotitoloMenu"><small class="text-muted"><i>ROMAINE HEARTS / PARMESAN /
                                ANCHOVIES / TORN BREAD CROUTONS </i></small></p>
                    <h4 class="card-text distanzaTitoliMenu"><small>Grilled burger - 28$</small></h4>
                    <p class="card-text sottotitoloMenu"><small class="text-muted"><i>DOUBLE PATTY / CARMELIZED ONION /
                                BACON / CHEDDAR CHEESE / BAGEL BUN</i></small></p>
                    <h4 class="card-text distanzaTitoliMenu"><small>Mac & cheese - 20$</small></h4>
                    <p class="card-text sottotitoloMenu"><small class="text-muted"><i>AGED CHEDDAR CHEESE / BREADCRUMB
                                PERSILLADE</i></small></p>
                    <h4 class="card-text distanzaTitoliMenu"><small>Grilled chicken breast - 30$ </small></h4>
                    <p class="card-text sottotitoloMenu"><small class="text-muted"><i>BRUSSEL SPROUTS, ROOT VEGETABLE
                                TARTIN</i></small></p>
                    <button type="button" class="btn btn-dark"><a
                                class="nav-link px-2 text-white <?= strpos($page, 'restaurant.php') !== false ? 'active' : '' ?>"
                                href="restaurant.php">Show more</a></button>
                </div>
            </div>
        </div>
    </div>
    <!--END MENU PREVIEW-->

    <!--BEGIN CARDS SERVICE-->
    <h1 id="titoloServizi">OUR SERVICES</h1>
    <div id="servizi" class="flex-container">
        <div class="card servizio shadow">
            <img src="img/foto7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><b>Taxi</b></h5>
                <p class="card-text">We hope you enjoy our direct and easy transfer service to your hotel, let us get
                    you to your destination without the hassle.</p>
            </div>
        </div>
        <div class="card servizio shadow">
            <img src="img/foto8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><b>Rooftop Pool</b></h5>
                <p class="card-text">Our rooftop pool is open year-round, in the summer it's refreshing. In the winter
                    is heated up to 95 degrees.</p>
            </div>
        </div>
        <div class="card servizio shadow">
            <img src="img/foto9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><b>Room Service</b></h5>
                <p class="card-text">Our staff are on hand to deliver dishes to your door from a menu featuring
                    everything from our local specialties.</p>
            </div>
        </div>
        <div class="card servizio shadow">
            <img src="img/foto10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><b>SPA</b></h5>
                <p class="card-text">Choose from our variety of wellness & relaxation treatments to soothe your mind &
                    body.</p>
            </div>
        </div>
    </div>
    <!--END CARDS SERVICE-->


    <!--BEGIN CAROUSEL REVIEW AUTOPLAY-->
    <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div id="recensione" class="shadow">
                    <p>The bathrooms were roomier than the room itself which I liked and the location can't be beat
                        directly across from Central park. The staff was friendly and the concierge very cordial and
                        informative. Room service was speedy. Housekeeping wonderful.</p>
                </div>
                <div class="freccia"></div>
                <div class="overview">
                    <div class="name"><b>Paula Wilson</b></div>
                    <div class="details">23 Sept 2022</div>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="recensione">
                    <p>I enjoyed mystique service. I had couple times that I never experienced mystique service and this
                        was nearly first time that I experienced properly.
                        The restaurant was closed, I think even restaurants cost extra from room charge, it is still
                        sales point of hotel.
                        It would be likely to be hard to recommend this hotel to others but recommend other same level
                        hotels near by.</p>
                </div>
                <div class="freccia"></div>
                <div class="overview">
                    <div class="name"><b>Matt Housley</b></div>
                    <div class="details">10 Oct 2022</div>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa-regular fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa-regular fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="recensione">
                    <p>If you're looking for an incredible view of the park you're probably going to get it. <br>Lounge
                        area is ok but definitely many better options. Room sizes are nice.<br>Make sure you demand a
                        higher floored room.</p>
                </div>
                <div class="freccia"></div>
                <div class="overview">
                    <div class="name"><b>Amanda Williams</b></div>
                    <div class="details">9 Dec 2022</div>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--END RECENSIONI-->

    <?php
    require 'footbar.php';
    ?>
</div>
<!--END CONTAINER-->
<?php
require 'footer.php';
?>