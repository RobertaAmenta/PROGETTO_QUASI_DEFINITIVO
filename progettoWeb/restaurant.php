<?php
session_start();
require 'functions.php';
require 'connection.php';
require 'header.php';

?>

<!--IMMAGINE INTESTAZIONE-->
<div class="contornoFotoRestaurant">
    <img class="fotoRestaurant shadow" src="img/foto53.jpg">
</div>

<!--BEGIN CONTAINER PAGE-->
<div class="container menuIntero">
    <!--BEGIN ROW-->
    <div class="row">
        <!--BEGIN MENU SCROLLSPY-->
        <div class="container-menu col-6">
            <nav id="navbar-menu" class="navbar border border-secondary rounded-3 px-3 mb-3 bg-white shadow">
                <div>
                    <i class="fas fa-utensils fa-2xl iconaMenu"></i>
                    <h1 class="titoloMenu">MENU'</h1>
                </div>
            </nav>
            <!--BREAKFAST LIST-->
            <div data-bs-spy="scroll" data-bs-target="#navbar-menu" data-bs-root-margin="0px 0px -40%"
                 data-bs-smooth-scroll="true"
                 class="scrollspy-example bg-white shadow border border-secondary p-3 rounded-3" tabindex="0">
                <h2><u>Breakfast</u></h2>
                <h4 class="card-text distanzaTitoliMenu"><small>Pancake - 15$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i> FLOUR / EGGS / MAPLE SYRUP / POWDERED
                            SUGAR</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Bakeries - 8$ ea</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>CROISSANTS / MUFFINS / DANISHES /
                            BREAKFAST BREADS</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Soft Scramble - 24$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>EAST COAST BLUE CRAB / UPLAND CRESS /
                            FURIKAKE</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Porridge - 14$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>CAROLINA GOLD RICE / ROYAL TRUMPETS /
                            PUFFED RICE / SOFT EGG</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Open faced omelette - 22$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>VEGAN CHORIZO / ARUGALA / RICOTTA
                            SALATA</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Quiche - 19$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>GARDEN VEGETABLES / FONTINA CHEESE /
                            HERB SALAD</i></small></p>
                <!--LUNCH LIST-->
                <br><br>
                <h2><u>Lunch</u></h2>
                <h4 class="card-text distanzaTitoliMenu"><small>Caesar salad - 19$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>ROMAINE HEARTS / PARMESAN / ANCHOVIES
                            / TORN BREAD CROUTONS</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Chips & dips - 19$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>POTATO CHIPS / BREAD STICKS / SPINACH
                            DIP / BEET TAHINI DIP/ ROBIOLA </i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Mac & cheese - 28$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>AGED CHEDDAR CHEESE / BREADCRUMB
                            PERSILLADE</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Grilled chicken breast - 34$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>BRUSSEL SPROUTS, ROOT VEGETABLE
                            TARTIN</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Slow cocked king salmon - 34$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>WILD RICE PILAF / EDAMAME BEANS / MISO
                            DRESSING</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Bucatini cacio pepe - 30$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>CHARRED GREENS / PECORINO & BLACK
                            PEPPER CREMA</i></small></p>
                <!--DINNER LIST-->
                <br><br>
                <h2><u>Dinner</u></h2>
                <h4 class="card-text distanzaTitoliMenu"><small>Grilled burger - 28$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>DOUBLE PATTY / CARMELIZED ONION /
                            BACON LARDONS / CHEDDAR CHEESE</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>NY croque madame - 24$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>FRIED EGG, PASTRAMI, GRUYÈRE, MORNAY
                            SAUCE, PICKLES</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Octopus carpaccio - 22$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>NORI / WHITE BEANS / CALVESTRANO
                            OLIVES / CARROT TOP SALSA VERDE</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Prime beef ribeye - 38$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>MASHED POTATO / RED WINE
                            JUS</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Club Sandwich - 24$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>SHAVED CHICKEN BREAST / LETTUCE /
                            TOMATO / BASIL PESTO / BREAD</i></small></p>
                <h4 class="card-text distanzaTitoliMenu"><small>Hour braised shortrib - 38$</small></h4>
                <p class="card-text sottotitoloMenu"><small class="text-muted"><i>BROCCOLINI / CELERIAC PUREE / GUAJILLO
                            FURIKAKE</i></small></p>
            </div>
        </div>
        <!--END MENU SCROLLSPY-->

        <!--BEGIN INFO RESTAURANT-->
        <div class="col-6 shadow cardInfoRist">
            <div>
                <i class="fas fa-utensils fa-2xl iconaMenu text-white"></i>
                <h1 class="titoloMenu mt-2 text-light">INFO</h1>
                <hr class="mb-4 mt-1">
                <div>
                    <h5>The restaurant offers sustainably sourced heritage steaks and local market ﬁsh amidst a
                        high-energy soundscape. The refined design highlights Mozambique wood walls, antique bronze
                        mirrored ceilings, and a custom signature wall.</h5>
                    <h6 class="mt-3"><i>Join us on Monday-Friday 5-7PM and indulge in ½ priced appetizers + a
                            complimentary cocktail with a purchase of a full-priced cocktail.</i></h6>
                    <hr>
                    <h4>HOURS</h4>
                    <h5>
                        - Breakfast: 7am-10am<br>
                        - Lunch: 12pm-3pm<br>
                        - Dinner: 5pm-11pm</h5>
                </div>
                <hr class="mb-2">
                <h5>For reservation <a class="contact" href="#footbar">contact us</a></h5>
            </div>
        </div>
        <!--END INFO RESTAURANT-->
    </div>
    <!--END ROW-->

    <!--BEGIN CAROUSEL SET PHOTO RESTAURANT-->
    <div class="cardRestaurant row">
        <div class="text-center mt-5 mb-1">
            <h1>PREVIEW</h1>
            <hr>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators sposta2">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active cardMenu">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card sposta">
                                <img src="img/cibo1a.jpg" class="card-img h-100" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card sposta">
                                <img src="img/cibo2a.jpg" class="card-img h-100" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card sposta">
                                <img src="img/cibo5.jpg" class="card-img h-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item cardMenu">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card sposta">
                                <img src="img/cibo6a.jpg" class="card-img h-100" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card sposta">
                                <img src="img/cibo7a.jpg" class="card-img h-100" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card sposta">
                                <img src="img/cibo8c.jpg" class="card-img h-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item cardMenu">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card sposta">
                                <img src="img/cibo9b.jpg" class="card-img h-100" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card sposta">
                                <img src="img/cibo10b.jpg" class="card-img h-100" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card sposta">
                                <img src="img/cibo11b.jpg" class="card-img h-100" alt="...">
                            </div>
                        </div>
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
            <?php
            require 'footbar.php';
            ?>
        </div>
    </div>
    <!--END CAROUSEL SET PHOTO RESTAURANT-->
    <?php
    require 'footer.php';
    ?>