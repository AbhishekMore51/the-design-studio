<?php include("header.php"); ?>
<!--offcanvasCart ======================-->
<div class="offcanvas offcanvas-end" id="offcanvasCart" tabindex="-1">
    <div class="offcanvas-header">

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-3 py-40 py-xxl-100 px-lg-5">
        <div class="cart-items">
            <span class="cart-items-heading">Your Cart (2)</span>
            <a href="#" class="cart-items-heading text-decoration-none">Remove All (X)</a>
        </div>
        <div class="cart-items pt-40 pt-xxl-60">
            <div class="cart-items-inner d-flex align-items-center gap-3">
                <img src="assets/images/shop-image-sm-1.png" alt="img">
                <div class="d-flex flex-column gap-3">
                    <h6 class="cart-items-heading">Pendant Lamp</h6>
                    <span class="d-flex gap-3 align-items-center">
                        <span>Qty</span>
                        <span class="cart-items-heading">1</span>
                    </span>
                </div>
            </div>
            <div class="d-flex flex-column gap-3 align-items-end">
                <a class="text-decoration-none" href="#">(X)</a>
                <h6 class="cart-items-heading">$499.99</h6>
            </div>
        </div>
        <div class="cart-items pt-4">
            <div class="cart-items-inner d-flex align-items-center gap-3">
                <img src="assets/images/shop-image-sm-2.png" alt="img">
                <div class="d-flex flex-column gap-3">
                    <h6 class="cart-items-heading">Scandal Wall Sconce</h6>
                    <span class="d-flex gap-3 align-items-center">
                        <span>Qty</span>
                        <span class="cart-items-heading">1</span>
                    </span>
                </div>
            </div>
            <div class="d-flex flex-column gap-3 align-items-end">
                <a class="text-decoration-none" href="#">(X)</a>
                <h6 class="cart-items-heading">$134.99</h6>
            </div>
        </div>

        <div class="offcanvas-cart-btn cart-items justify-content-between">
            <div>
                <h6 class="cart-items-heading mb-4 mb-xxl-30">Subtotal:</h6>
                <a href="#" class="btn btn-md btn-primary ">View Cart</a>
            </div>

            <div>
                <h6 class="cart-items-heading mb-4 mb-xxl-30 text-end">$634.99</h6>
                <a href="#" class="btn btn-md btn-secondary ">Checkout</a>
            </div>
        </div>

    </div>
</div>
<!--offcanvasCart ======================-->



<!--Full-Screen-Modal (Search-Modal) ======================-->
<div class="modal fade" id="FullScreenModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L53 53" stroke="#D2E0D9" stroke-width="3" />
                        <line x1="1.93543" y1="53.4393" x2="52.9354" y2="2.43934" stroke="#D2E0D9" stroke-width="3" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h2 class="display-2 fw-extra-bold mb-30">Search</h2>
                    <form action="#" class="modal-search-form">
                        <div class="position-relative">
                            <input type="text" class="form-control" id="formInput" placeholder="Type & Hit Enter">
                            <button class="search-icon" type="submit">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_865_1148)">
                                        <path d="M43.4629 40.8718L32.5198 29.9286C35.5019 26.2814 36.9681 21.6275 36.6151 16.9295C36.2622 12.2315 34.117 7.84895 30.6233 4.68826C27.1297 1.52758 22.5548 -0.169388 17.8451 -0.05163C13.1354 0.0661284 8.65104 1.9896 5.31971 5.32093C1.98838 8.65227 0.0649077 13.1366 -0.0528507 17.8463C-0.170609 22.5561 1.52636 27.1309 4.68704 30.6246C7.84773 34.1182 12.2303 36.2634 16.9283 36.6164C21.6263 36.9693 26.2802 35.5031 29.9274 32.521L40.8706 43.4642C41.2164 43.7981 41.6795 43.9829 42.1602 43.9787C42.6409 43.9745 43.1007 43.7817 43.4406 43.4418C43.7805 43.1019 43.9733 42.6421 43.9775 42.1614C43.9817 41.6807 43.7969 41.2176 43.4629 40.8718ZM18.3334 33.0013C15.4326 33.0013 12.597 32.1411 10.1851 30.5295C7.77314 28.9179 5.89327 26.6273 4.78319 23.9473C3.6731 21.2674 3.38265 18.3184 3.94857 15.4733C4.51449 12.6283 5.91135 10.0149 7.96252 7.96374C10.0137 5.91257 12.627 4.51571 15.4721 3.94979C18.3172 3.38388 21.2661 3.67432 23.9461 4.78441C26.6261 5.8945 28.9167 7.77436 30.5283 10.1863C32.1399 12.5982 33.0001 15.4339 33.0001 18.3346C32.9957 22.2231 31.4491 25.9511 28.6995 28.7007C25.9499 31.4503 22.2219 32.9969 18.3334 33.0013Z" fill="#D2E0D9" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_865_1148">
                                            <rect width="44" height="44" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Full-Screen-Modal (Search-Modal) ======================-->



<!--Section ======================-->
<section class="full-width-section pt-60">
    <div class="section-title-wrapper position-relative">
        <div class="scroll-move">
            <span class="scrolling-text display-1 fw-extra-bold stroke-title text-stroke stroke-opacity-20 stroke-width-1 stroke-primary lh-1">Contact</span>
        </div>

        <div class="container">
            <div class="section-title section-separator">
                <h2 class="fw-extra-bold heading-title separator lh-1">Let's Design Together</h2>
                <div>
                    <p class="fs-4 fw-semibold mb-0 subtitle subtitle-width">Reach out to bring your dream spaces to life.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- section-title-wrapper -->
</section>
<!--Section ======================-->


<!--Section contact-map-section ======================-->
<section class="contact-section contact-map-section position-relative mt-n4 mt-md-n60">
    <div class="container">
        <div class="swiper contact-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="contact-details">
                        <h2 class="stroke-heading">
                            <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">01</text></svg>
                        </h2>
                        <h4 class="service-title">Address USA:</h4>
                        <p class="mb-0 fw-semibold">Architronix Inc.</p>
                        <p class="mb-20 contact-home">208 English Road, High Point, NC 27262, USA</p>
                        <p class="mb-0">Phone: 336 885 6670</p>
                        <p class="mb-0">Email: hello@architronix.com</p>
                        <div class="mt-30">
                            <a href="#" id="btnUSA" data-title="Architronix USA" class="link-hover-animation-1 d-inline-flex align-items-center gap-10 text-decoration-none separator btn-map-direction"> View on Map
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide -->
                <div class="swiper-slide">
                    <div class="contact-details">
                        <h2 class="stroke-heading">
                            <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">02</text></svg>
                        </h2>
                        <h4 class="service-title">Address Spain</h4>
                        <p class="mb-0 fw-semibold">Architronix</p>
                        <p class="mb-20 contact-home">Avda. Valencia, 3, 46891, Palomar (Valencia), SPAIN</p>
                        <p class="mb-0">Phone: +34 96 239 84 86</p>
                        <p class="mb-0">Email: hello@architronix.com</p>
                        <div class="mt-30">
                            <a href="#" id="btnSpain" data-title="Architronix Spain" class="link-hover-animation-1 d-inline-flex align-items-center gap-10 text-decoration-none separator btn-map-direction"> View on Map
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide -->
                <div class="swiper-slide">
                    <div class="contact-details">
                        <h2 class="stroke-heading">
                            <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">03</text></svg>
                        </h2>
                        <h4 class="service-title">Address London:</h4>
                        <p class="mb-0 fw-semibold">Architronix LTD</p>
                        <p class="mb-20 contact-home">Avda. Valencia, 3, 46891, London, England</p>
                        <p class="mb-0">Phone: +34 96 239 84 86</p>
                        <p class="mb-0">Email: hello@architronix.com</p>
                        <div class="mt-30">
                            <a href="#" id="btnLondon" data-title="Architronix London" class="link-hover-animation-1 d-inline-flex align-items-center gap-10 text-decoration-none separator btn-map-direction"> View on Map
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide -->
            </div>
            <!-- swiper-wrapper -->
        </div>
        <!-- swiper -->

        <!-- <div class="pt-5 pt-lg-90">
            <div id="map"></div>
        </div> -->
    </div>
    <!-- container -->
</section>
<!--Section contact-map-section ======================-->



<!--Section contact-form-section ======================-->
<section class="contact-section contact-form-section position-relative">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5">
                <div class="section-title">
                    <h2 class="fw-extra-bold display-3 lh-1">Have a Project in your mind?</h2>
                </div>
            </div>
            <!-- col-5 -->
            <div class="col-lg-6">
                <form id="contactForm" class="contact-form row gy-3 gx-20">
                    <div class="col-12">
                        <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Your Name*" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="InputNumber" name="InputNumber" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email*" required>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" id="InputMessage" name="InputMessage" rows="5" placeholder="Type your message"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="text-lg-end">
                            <button type="submit" class="btn btn-outline-primary  gap-10">Send message
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="response py-3"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Section contact-form-section ======================-->


<!--Feedback Section ======================-->
<section id="feedback" class="feedback-section feedback-1 text-secondary">
    <div class="container">
        <div class="feedback-wrapper position-relative">
            <div class="feedback-content d-flex flex-column gap-4 flex-lg-row align-items-lg-end justify-content-lg-around">
                <h2 class="fw-extra-bold feedback-title">Request a Call</h2>
                <div class="architronix-button">
                    <a href="#" class="btn btn-secondary gap-10" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        Call Request
                        <svg class="arrow" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--Feedback Section ======================-->



<!--Request Modal ======================-->
<div id="feedbackModal" class="modal fade formDownload-modal" data-bs-backdrop="static" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="callRequestForm" class="contact-form row g-30">
                    <div class="col-md-6">
                        <label for="InputName-2" class="form-label fw-semibold">Name</label>
                        <input type="text" class="form-control" name="InputName" id="InputName-2" placeholder="Name *" required>
                    </div>
                    <div class="col-md-6">
                        <label for="InputSurname" class="form-label fw-semibold">Surname</label>
                        <input type="text" class="form-control" id="InputSurname" name="InputSurname" placeholder="Surname *" required>
                    </div>
                    <div class="col-md-6">
                        <label for="InputCountry" class="form-label fw-semibold">Country</label>
                        <input type="text" class="form-control" id="InputCountry" name="InputCountry" placeholder="Country">
                    </div>
                    <div class="col-md-6">
                        <label for="InputNumber-2" class="form-label fw-semibold">Phone Number</label>
                        <input type="text" class="form-control" name="InputNumber" id="InputNumber-2" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6">
                        <label for="InputEmail-2" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" name="InputEmail" id="InputEmail-2" placeholder="Email *" required>
                    </div>
                    <div class="col-md-6">
                        <label for="InputTime" class="form-label fw-semibold">Preferred time</label>
                        <input type="time" class="form-control" id="InputTime" name="InputTime">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agree" value="yes" id="formCheck" required>
                            <label class="form-check-label fw-medium" for="formCheck">
                                By using this form you agree with the storage and handling of your data policies of Architronix.
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="architronix-button mt-3">
                            <button type="submit" class="btn btn-primary btn-md">Send Call Request</button>
                        </div>
                    </div>
                    <div class="response py-3"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Request Modal ======================-->

<!-- Scripts -->
<script>
    var architronixLocations = [{
            'markerPoint': [39.80442819377875, -101.75829822449703],
            'title': 'Architronix USA',
            'subtitle': 'Architronix Inc.',
            'address': '208 English Road, High Point, NC 27262, USA'
        },
        {
            'markerPoint': [40.36932496262613, -3.656264074036898],
            'title': 'Architronix Spain',
            'subtitle': 'Architronix',
            'address': 'Avda. Valencia, 3, 46891, Palomar (Valencia), SPAIN'
        },
        {
            'markerPoint': [51.5073337282129, -0.1491657174319576],
            'title': 'Architronix London',
            'subtitle': 'Architronix Inc.',
            'address': 'Avda. Valencia, 3, 46891, London, England'
        },

    ];
</script>
<script src="assets/js/leaflet.js"></script>

<?php include("footer.php"); ?>