@extends('welcome');


@section('content')
     <!-- MAIN SECTION -->
     <div class="main">
        <div><img src="Assets/MainImg.jpg" alt=""></div>
      </div>
      <div class="package-cards">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-lg-3 mb-5">
                    <div class="box">
                        <img class="cardimg" src="Assets/Cards/card (1).jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box">
                        <img class="cardimg" src="Assets/Cards/card (2).jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box">
                        <img class="cardimg" src="Assets/Cards/card (3).jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box">
                        <img class="cardimg" src="Assets/Cards/card (4).jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- ================================ ITALY ============================= -->
      <!-- SEARCH -->
      <div class="container d-flex flex-column align-items-center mt-5 text-center" id="catalog">
        <h1 style="font-weight: 600; font-size: 65px;">Where To?</h1>
        <div>
          <input class="mt-3 p-3 ps-4" type="search" id="sh-input" placeholder="Places to go, Hotels, Restaurants">
          <button class="btn btn-primary" id="sh-btn">Search</button>
        </div>
        <div class="sort-main mt-3">
          <h6 style="color: #363535; font-weight: 400;">Pick a category to filter your recs</h6>
          <div class="sort-btns">
            <button class="active-btn" data-name="all">Show All</button>
            <button data-name="package">Traveler's Choice</button>
            <button data-name="places">Places To Go</button>
            <button data-name="restaurants">Things To Eat</button>
            <button data-name="hotels">Hotels</button>
            <button data-name="cars">Rental Cars</button>
          </div>
          <h3 class="mt-5">ITALY</h3>
        </div>
      </div>
      <!-- CARDS -->
       <div class="container mt-5">
        <!-- Places -->
        <div class="row sort-cards">
          <!-- (===============) -->
          <div class="col-lg-4 mb-5" data-name="package">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/package (3).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Italy Magic Holiday Travel and Tour Package</h5>
                <p class="card-text">
                  => <strong> 04 Days 05 Nights </strong> 
                </p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal1">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
          <div class="modal fade" id="cardModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Italy Magic Holiday Tour Package</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="Assets/Cards/Italy/package (3).jpg" class="card-img-top" alt="modal-img">
                  <ul class="mt-3">
                    <li><strong>Package Title: </strong>Venice Carnival 2025 Holiday Travel &amp; Tour Package</li>
                    <li><strong>Departure Countries: </strong>Pakistan</li>
                    <li><strong>Departure Cities: </strong> Karachi</li>
                    <li><strong>Destination Countries: </strong>Italy</li>
                    <li><strong>Destination Cities: </strong>Venice</li>
                    <li> <strong>Min Allowed: </strong> 2</li>
                    <li> <strong>Ticket: </strong> Not Included</li>
                    <li> <strong>Visa: </strong> Included</li>
                    <li> <strong>Insurance: </strong> Included</li>
                    <li><strong>Stay: </strong>04 Days 05 Nights</li>
                    <li><strong>Hotel Choice: </strong>3 Star</li>
                    <li><strong>Company: </strong> Premio Travel and Tours</li>
                    <li><strong>Rate mentioned: </strong> Per Head</li>
                    <li><strong>Valid Till: </strong> Until Further Notice</li>
                    <li><strong>Posted on: </strong> August 28, 2024</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->

          <div class="col-lg-4 mb-5" data-name="package">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/package (2).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Venice Carnival 2025 Holiday Travel Package , Italy</h5>
                <p class="card-text">
                  => <strong> 03 Days 02 Nights </strong> 
                </p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal2">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id="cardModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Italy Magic Holiday Tour Package</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/package (2).jpg" class="card-img-top" alt="modal-img">
                    <ul class="mt-3">
                      <li><strong>Package Title: </strong>Venice Carnival 2025 Holiday Travel & Tour Package</li>
                      <li><strong>Departure Countries: </strong>Pakistan</li>
                      <li><strong>Departure Cities: </strong> Karachi</li>
                      <li><strong>Destination Countries: </strong>Italy</li>
                      <li><strong>Destination Cities: </strong>Venice</li>
                      <li> <strong>Min Allowed: </strong> 2</li>
                      <li> <strong>Ticket: </strong> Not Included</li>
                      <li> <strong>Visa: </strong> Included</li>
                      <li> <strong>Insurance: </strong>Not Included</li>
                      <li><strong>Stay: </strong>03 Days 02 Nights</li>
                      <li><strong>Hotel Choice: </strong>3 Star</li>
                      <li><strong>Company: </strong> Premio Travel and Tours</li>
                      <li><strong>Rate mentioned: </strong> Per Head</li>
                      <li><strong>Valid Till: </strong> Until Further Notice</li>
                      <li><strong>Posted on: </strong> August 13, 2024</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
          <div class="col-lg-4 mb-5" data-name="package">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/package (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Italy Delight Holiday Travel and Tour Package</h5>
                <p class="card-text">
                  => <strong> 06 Days 5 Nights </strong>
                </p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal3">More Details</a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Italy Delight Holiday Travel and Tour Package</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/package (1).jpeg" class="card-img-top" alt="modal-img">
                    <ul class="mt-3">
                      <li><strong>Package Title: </strong>Italy Delight Holiday Travel and Tour Package</li>
                      <li><strong>Departure Countries: </strong>Pakistan</li>
                      <li><strong>Departure Cities: </strong> Karachi</li>
                      <li><strong>Destination Countries: </strong>Italy</li>
                      <li><strong>Destination Cities: </strong>Venice</li>
                      <li> <strong>Min Allowed: </strong> 2</li>
                      <li> <strong>Ticket: </strong> Not Included</li>
                      <li> <strong>Visa: </strong> Included</li>
                      <li> <strong>Insurance: </strong>Not Included</li>
                      <li><strong>Stay: </strong>06 Days 05 Nights</li>
                      <li><strong>Hotel Choice: </strong>3 Star</li>
                      <li><strong>Company: </strong> Premio Travel and Tours</li>
                      <li><strong>Rate mentioned: </strong> Per Head</li>
                      <li><strong>Valid Till: </strong> Until Further Notice</li>
                      <li><strong>Posted on: </strong> July 23, 2024</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
        </div>
        <!-- Places -->
        <div class="row sort-cards">
          <div class="col-lg-4 mb-5" data-name="places">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/pantheon (1).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pantheon, Italy</h5>
                <p class="card-text">
                  Ancient Ruins, Architectural Buildings 
                </p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal4">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pantheon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/pantheon (1).jpg" class="card-img-top mb-3" alt="modal-img">
                    <h5>About</h5>
                    <p>Dedicated to the seven planetary divinities and featuring an interior of gorgeous marble, 
                      the Pantheon is one of the most impressive monuments of Augustan Rome</p>
                    <strong><p>Piazza della Rotonda, 00186 Rome Italy</p></strong>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
          <div class="col-lg-4 mb-5" data-name="places">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/colosseum (1).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Colosseum, Italy</h5>
                <p class="card-text">
                  Ancient Ruins, Historic Sites 
                </p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal5">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Colosseum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/colosseum (1).jpg" class="card-img-top mb-3" alt="modal-img">
                    <h5>About</h5>
                    <p>The ancient Flavian Amphitheater was built by the Flavian emperors in 70 C.E. as a gift to 
                      the Roman people. As the largest Roman theater ever built, it was designed to house over 50,000 
                      people, and had played host to gladiator games, plays and even public executions. </p>
                    <strong><p>Piazza del Colosseo, 00184 Rome Italy</p></strong>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
          <div class="col-lg-4 mb-5" data-name="places">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/canal grande (1).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Canal Grande, Italy</h5>
                <p class="card-text">
                  Bodies of Water , Boat Activity
                </p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal6">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Canal Grande</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/canal grande (1).jpg" class="card-img-top mb-3" alt="modal-img">
                    <h5>About</h5>
                    <p>Venice's main water thoroughfare, lined with great Renaissance palaces, is a colorful and busy spectacle of gondolas and vaporetti. </p>
                    <strong><p>Neighborhood: San Polo</p></strong>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
        </div>
        <!-- =================== -->
        <!-- Hotels -->
        <!-- =================== -->
        <div class="row sort-cards">
          <div class="col-lg-4 mb-5" data-name="hotels">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/calimala (2).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Hotel Calimala, Italy</h5>
                <span><i class="fa-solid fa-globe"></i></span>
                <a class="card-text" href="https://www.hotelcalimala.com/">
                  Visit Hotel Website
                </a>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal7">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hotel Calimala</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/calimala (2).jpg" class="card-img-top mb-3" alt="modal-img">
                    <h5>#1 Best Value of 3,000 places to stay in Italy</h5>
                    <p>Boutique hotel in Florence's heart, nearby Ponte Vecchio, Duomo, and Uffizi. Chic, eclectic decor,
                      high ceilings, exposed brick, modern amenities. Small yet luxurious rooms, spacious corner options.
                      Rooftop restaurant with city views and excellent cuisine.
                      </p>
                    <strong><p>Via De' Lamberti 5, 50123, Florence Italy</p></strong>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
          <div class="col-lg-4 mb-5" data-name="hotels">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/residenza (2).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">La Residenza, Italy</h5>
                <span><i class="fa-solid fa-globe"></i></span>
                <a class="card-text" href="https://www.laresidenzacapri.com/">
                  Visit Hotel Website 
                </a>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal8">More Details</a>

                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">La Residenza</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/residenza (2).jpg" class="card-img-top mb-3" alt="modal-img">
                    <h5>#2 Best Value of 3,000 places to stay in Italy</h5>
                    <p>Hotel La Residenza is located just 220 yards from the Piazzetta, Capri's central square. It offers a large sun terrace with swimming pool and peaceful grounds with palm trees.Set in the heart of Capri, La Residenza is surrounded by the town's most popular shops, bars and restaurants. The port of Marina Grande is 5 minute drive away for ferries to Italy's mainland. All rooms are air conditioned and come in a range of styles. They feature a minibar and satellite TV and some have a balcony overlooking the Mediterranean Sea. Guests have free Wi-Fi in public areas and a buffet breakfast served each morning. The restaurant serves a varied menu of Italian and international cuisines.
                      </p>
                    <strong><p>Via F. Serena 22, 80073, Capri, Island of Capri Italy</p></strong>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
          <div class="col-lg-4 mb-5" data-name="hotels">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/boracay.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Carrua, Italy</h5>
                <span><i class="fa-solid fa-globe"></i></span>
                <a class="card-text" href="https://www.carrua.it/">
                  Visit Hotel Website
                </a>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal9">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Carrua</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/boracay.jpg" class="card-img-top mb-3" alt="modal-img">
                    <h5>One Of The Best Value of 3,000 places to stay in Italy</h5>
                    <p>
                      Wonderful family managed property, perfectly located to explore Marzamemi and surroundings, extremely clean, nicely decorated rooms, delicious breakfast, nice pool with sea view. Relaxing and quite place to stay.
                      </p>
                    <strong><p>Contrada Triona, 96018 Marzamemi, Sicily Italy</p></strong>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
        </div>
        <!-- =================== -->
        <!-- Restaurant -->
        <!-- =================== -->
        <div class="row sort-cards">
          <div class="col-lg-4 mb-5" data-name="restaurants">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/restaurant (1).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mille Fiori, Italy</h5>
                <p>Seafood, Mediterranean, Sicilian, Barbecue, Healthy, Dining bars</p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal10">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mille Fiori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/restaurant (1).jpg" class="card-img-top mb-3" alt="modal-img">
                    <strong><p>PRICE RANGE</p></strong><span>PKR 3,099.00 – PKR 12,397.00</span><hr>
                    <strong><p>CUISINES</p></strong><span>Italian, Seafood, Mediterranean, Ukrainian, Sicilian,
                       Southern-Italian
                      </span><hr>
                    <h5>About</h5>
                    <p>Tanti piatti unici, gustosi e saporiti, dalla carne al pesce, dalla pizza ai dolci più squisiti. 
                      Inoltre vi offriamo una cucina multietnica, che varia dalla tipica italiana alla cucina ucraina e 
                      tanto altro. I nostri vini ti faranno innamorare del nostro locale, cosa aspetti? Vieni a trovarci. 
                      Ti aspettiamo!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
          <div class="col-lg-4 mb-5" data-name="restaurants">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/restaurant (4).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Vicè.5, Italy</h5>
                <p>Mediterranean, Ukrainian,  Southern-Italian, Vegetarian Friendly</p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal11">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vicè.5</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/restaurant (4).jpg" class="card-img-top mb-3" alt="modal-img">
                    <strong><p>PRICE RANGE</p></strong><span>PKR 4,649.00 – PKR 12,397.00</span><hr>
                    <strong><p>CUISINES</p></strong><span>Italian, Seafood, Mediterranean, Barbecue, Healthy, Sicilian, Southern-Italian, Dining bars
                      </span><hr>
                    <h5>Features</h5>
                    <p>Takeout, Reservations, Outdoor Seating, Seating, Street Parking, Highchairs Available, Wheelchair Accessible, Serves Alcohol, Full Bar, Wine and Beer, Accepts Mastercard, Accepts Visa, Free Wifi, Accepts Credit Cards, Table Service, Dog Friendly, Family style
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
          <div class="col-lg-4 mb-5" data-name="restaurants">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/restaurant (3).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Docalquadrato, Italy</h5>
                <p>Italian, Mediterranean, Wine Bar, Sicilian, Southern-Italian</p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cardModal12">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- (===============) -->
            <!-- Modal -->
            <div class="modal fade" id ="cardModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Docalquadrato</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="Assets/Cards/Italy/restaurant (3).jpg" class="card-img-top mb-3" alt="modal-img">
                    <strong><p>PRICE RANGE</p></strong><span>PKR 1,550.00 – PKR 10,847.00
                    </span><hr>
                    <strong><p>CUISINES</p></strong><span>Italian, Mediterranean, Wine Bar, Sicilian, Southern-Italian
                      </span><hr>
                    <h5>About</h5>
                    <p>We offer you a journey through innovative dishes created by our chefs and wines from all over the world. Family, respect, sacrifice, seriousness, professionalism, quality, correctness, solidarity, equality These are the values ​​of the DOC family, do you share them? Come and visit us in Via Gesualdo Clementi 1, Catania
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- (===============) -->
        </div> 
        <!-- =================== -->
        <!-- Restaurant -->
        <!-- =================== -->
        <div class="row sort-cards">
          <div class="col-lg-4 mb-5" data-name="cars">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/car (1).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Noleggiare, Italy</h5>
                <p>Italy's No. 1 Car Rental Company With Reasonable Price!</p> 
                <div class="d-flex justify-content-between">
                  <a href="https://www.noleggiare.it/en/" class="btn btn-primary">Visit Website</a>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5" data-name="cars">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/car (2).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sicily By Car, Italy</h5>
                <p>Italy's 2nd Car Rental Company With Reasonable Price!</p>
                <div class="d-flex justify-content-between">
                  <a href="https://www.autoeurope.eu/" class="btn btn-primary">Visit Website</a>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5" data-name="cars">
            <div class="card" style="width: 23rem;">
              <img src="Assets/Cards/Italy/car (1).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Locauto, Italy</h5>
                <p>Italy's 3rd Car Rental Company With Reasonable Price!</p>
                <div class="d-flex justify-content-between">
                  <a href="https://www.locautorent.com/en/" class="btn btn-primary">Visit Website</a>

                </div>
              </div>
            </div>
          </div>
        </div> 
        </div>
       </div>
@endsection