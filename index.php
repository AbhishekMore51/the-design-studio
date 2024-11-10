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



<!--Hero Section ======================-->
<section class="hero-section hero-1 max-width">
    <div id="heroSlider" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="6000"> <!--    -->

        <div class="carousel-indicators">
            <div class="d-flex align-items-center gap-3 gap-lg-1 lh-1 active" data-bs-target="#heroSlider" data-bs-slide-to="0" aria-current="true">
                <span class="indecators-item display-4 fw-extra-bold mb-0">01</span>
                <span class="indecators-description fw-bold mb-0">Elegant Design Showcase</span>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-1 lh-1" data-bs-target="#heroSlider" data-bs-slide-to="1">
                <span class="indecators-item display-4 fw-extra-bold mb-0">02</span>
                <span class="indecators-description fw-bold mb-0">Sustainable Design Focus</span>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-1 lh-1" data-bs-target="#heroSlider" data-bs-slide-to="2">
                <span class="indecators-item display-4 fw-extra-bold mb-0">03</span>
                <span class="indecators-description fw-bold mb-0">Meet Our <br> Design Team</span>
            </div>
        </div>
        <!-- carousel-indicators -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <source media="(max-width:500px)" srcset="assets/images/hero-1-sm.jpg">
                    <source media="(max-width:768px)" srcset="assets/images/hero-1-md.jpg">
                    <img src="assets/images/hero-1.jpg" alt="hero-image">
                </picture>
                <div>
                    <div class="carousel-captions">
                        <div class="container">
                            <div class="content-text text-start">
                                <h1 class="stroke-heading display-2 fw-extra-bold d-flex flex-column">
                                    <span class="hero-heading animate-fill primary">Elegance</span>
                                    <svg stroke-width="2" class="text-line display-2 fw-extra-bold z-1"><text x="0%" dominant-baseline="middle" y="70%">Redefined</text></svg>
                                </h1>
                                <div class="architronix-button">
                                    <a href="project-archive.html" class="btn btn-outline-primary gap-10">Explore our Portfolio
                                        <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(max-width:500px)" srcset="assets/images/hero-2-sm.jpg">
                    <source media="(max-width:768px)" srcset="assets/images/hero-2-md.jpg">
                    <img src="assets/images/hero-2.jpg" alt="hero-image">
                </picture>
                <div class="carousel-captions">
                    <div class="container">
                        <div class="content-text text-start">
                            <h1 class="stroke-heading display-2 fw-extra-bold d-flex flex-column">
                                <span class="hero-heading animate-fill primary">Greener</span>
                                <svg stroke-width="2" class="text-line display-2 fw-extra-bold z-1"><text x="0%" dominant-baseline="middle" y="70%">Tomorrow</text></svg>
                            </h1>
                            <div class="architronix-button">
                                <a href="project-archive.html" class="btn btn-outline-primary  gap-10">Explore our Portfolio
                                    <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(max-width:500px)" srcset="assets/images/hero-3-sm.jpg">
                    <source media="(max-width:768px)" srcset="assets/images/hero-3-md.jpg">
                    <img src="assets/images/hero-3.jpg" alt="hero-image">
                </picture>
                <div class="carousel-captions">
                    <div class="container">
                        <div class="content-text text-start">
                            <h1 class="stroke-heading display-2 fw-extra-bold d-flex flex-column">
                                <span class="hero-heading animate-fill primary">Space</span>
                                <svg stroke-width="2" class="text-line display-2 fw-extra-bold z-1"><text x="0%" dominant-baseline="middle" y="70%">Evolution</text></svg>
                            </h1>
                            <div class="architronix-button">
                                <a href="project-archive.html" class="btn btn-outline-primary  gap-10">Explore our Portfolio
                                    <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-control-buttons d-flex flex-column gap-0 position-absolute bottom-0 end-0">
            <a class="next-btn" href="#" data-bs-target="#heroSlider" data-bs-slide="next">
                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                </svg>
            </a>
            <a class="prev-btn" href="#" data-bs-target="#heroSlider" data-bs-slide="prev">
                <svg class="arrow-reverse" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                </svg>
            </a>
        </div>
    </div>
</section>
<!--Hero Section ======================-->


<!--About Section ======================-->
<section class="about-section about-1 full-width-section">
    <div class="section-title-wrapper position-relative">

        <div class="scroll-move">
            <span class="scrolling-text display-1 fw-extra-bold stroke-title text-stroke stroke-opacity-20 stroke-width-1 stroke-primary lh-1">About Us</span>
        </div>

        <div class="container">
            <div class="section-title section-separator">
                <h2 class="fw-extra-bold heading-title separator lh-1">Foundations of Architronix</h2>
                <p class="fs-4 fw-semibold mb-0 subtitle subtitle-width">Crafting Architectural Designing and Masterpieces Interior Wonders</p>
            </div>
        </div>
    </div>
    <div class="about-bg bg-primary text-secondary position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image overflow-hidden">
                        <img src="assets/images/about-image.jpg" class="img-fluid wow slideInLeft" alt="about-image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-contents d-flex flex-column">
                        <div class="about-content-inner d-flex flex-column flex-lg-row">
                            <div class="list-item-number">
                                <h3 class="stroke-heading stroke-heading-2 mb-0">
                                    <svg stroke-width="1" class="text-line-2 fs-60 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%" class="yellow-stroke">01</text></svg>
                                </h3>
                            </div>

                            <div>
                                <h4 class="yellow">Innovation Beyond Boundaries</h4>
                                <p class="mb-0">We thrive on challenging the norms, infusing each project with fresh, innovative perspectives that defy convention.</p>
                            </div>
                        </div>
                        <div class="about-content-inner d-flex flex-column flex-lg-row">
                            <div class="list-item-number">
                                <h3 class="stroke-heading stroke-heading-2 mb-0">
                                    <svg stroke-width="1" class="text-line-2 fs-60 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%" class="yellow-stroke">02</text></svg>
                                </h3>
                            </div>
                            <div>
                                <h4 class="yellow">Visionaries at Work</h4>
                                <p class="mb-0">We're not just designers; we're dream weavers. Your visions become our blueprints for extraordinary spaces.</p>
                            </div>
                        </div>
                        <div class="about-content-inner d-flex flex-column flex-lg-row">
                            <div class="list-item-number">
                                <h3 class="stroke-heading stroke-heading-2 mb-0">
                                    <svg stroke-width="1" class="text-line-2 fs-60 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%" class="yellow-stroke">03</text></svg>
                                </h3>
                            </div>
                            <div>
                                <h4 class="yellow">Awards and Acclaim</h4>
                                <p class="mb-0">Join us on a journey marked by accolades and distinctions as we carve our path in the world of design.</p>
                            </div>
                        </div>
                        <div>
                            <a href="about-us.html" class="btn btn-link link-hover-animation-1 d-inline-flex gap-10 align-items-center">Learn more About Us <span>
                                    <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--About Section ======================-->


<!--Counter Section ======================-->
<div class="event-counter position-relative">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 gy-lg-0 gy-4 justify-content-between">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="separator d-flex align-items-center fw-extra-bold display-3">
                    <span class="odometer" data-count-to=22></span>
                </div>
                <p class="fs-5 fw-bold mb-0 mt-1 mt-lg-2 mt-xxl-3">Years of experience</p>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="separator d-flex align-items-center display-3 fw-extra-bold">
                    <span class="odometer" data-count-to=282></span><span class="odometer-icon">+</span>
                </div>
                <p class="fs-5 fw-bold mb-0 mt-1 mt-lg-2 mt-xxl-3">Projects Completed</p>

            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="separator d-flex align-items-center display-3 fw-extra-bold">
                    <span class="odometer" data-count-to=420></span><span class="odometer-icon">k</span>
                </div>
                <p class="fs-5 fw-bold mb-0 mt-1 mt-lg-2 mt-xxl-3">Square feet Covered</p>

            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="separator d-flex align-items-center display-3 fw-extra-bold">
                    <span class="odometer" data-count-to=93></span><span class="odometer-icon">%</span>
                </div>
                <p class="fs-5 fw-bold mb-0 mt-1 mt-lg-2 mt-xxl-3">Positive Feedbacks</p>
            </div>
        </div>
    </div>
</div>
<!--Counter Section ======================-->


<!--Gallery Section ======================-->
<section class="gallery-section max-width">
    <div class="full-width-section">
        <div class="section-title-wrapper position-relative">
            <div class="scroll-move">
                <span class="scrolling-text display-1 fw-extra-bold stroke-title text-stroke stroke-opacity-20 stroke-width-1 stroke-primary lh-1">Gallery</span>
            </div>
            <div class="container">
                <div class="section-title section-separator">
                    <h2 class="fw-extra-bold heading-title separator lh-1">Exploring Our Creations</h2>
                    <div class="d-flex flex-column flex-lg-row gap-4 align-items-lg-end justify-content-lg-between">
                        <p class="fs-4 fw-semibold mb-0 subtitle subtitle-width">Where Imagination Takes Flight, and Excellence Blossoms</p>
                        <div class="architronix-button">
                            <a href="project-archive.html" class="btn btn-outline-primary  gap-10">View All Projects
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-accordion d-flex">

        <div class="gallery-contents gallery-sm">

            <div class="gallery-wrapper position-relative overflow-hidden w-100 h-100">
                <div class="gallery-image-wrapper overlay">
                    <img src="assets/images/gallery-1.jpg" class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover" alt="gallery-image">
                    <div class="gallery-info-wrapper">
                        <div class="gallery-info">
                            <a href="project-single.html" class="text-decoration-none link-hover-animation-1 gallery-title separator">
                                <h4 class="mb-0 yellow">Cozy Living Room</h4>
                            </a>
                            <p class="gallery-description">Exploring Excellence in Every Meticulous Design Detail Exploring Excellence in Every Meticulous Design Detail</p>
                        </div>
                    </div>
                </div>
                <h3 class="gallery-item stroke-heading stroke-heading-2 mb-0">
                    <svg stroke-width="1" class="text-line-2 fs-60 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%" class="yellow-stroke">01</text></svg>
                </h3>
            </div>

        </div>

        <div class="gallery-contents gallery-expand">

            <div class="gallery-wrapper position-relative overflow-hidden w-100 h-100">
                <div class="gallery-image-wrapper overlay">
                    <img src="assets/images/gallery-2.jpg" class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover" alt="gallery-image">
                    <div class="gallery-info-wrapper">
                        <div class="gallery-info">
                            <a href="project-single.html" class="text-decoration-none link-hover-animation-1 gallery-title separator">
                                <h4 class="mb-0 yellow">Luxurious Living Room</h4>
                            </a>
                            <p class="gallery-description">Exploring Excellence in Every Meticulous Design Detail Exploring Excellence in Every Meticulous Design Detail</p>
                        </div>
                    </div>
                </div>
                <h3 class="gallery-item stroke-heading stroke-heading-2 mb-0">
                    <svg stroke-width="1" class="text-line-2 fs-60 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%" class="yellow-stroke">02</text></svg>
                </h3>
            </div>

        </div>

        <div class="gallery-contents gallery-sm">

            <div class="gallery-wrapper position-relative overflow-hidden w-100 h-100">
                <div class="gallery-image-wrapper overlay">
                    <img src="assets/images/gallery-3.jpg" class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover" alt="gallery-image">
                    <div class="gallery-info-wrapper">
                        <div class="gallery-info">
                            <a href="project-single.html" class="text-decoration-none link-hover-animation-1 gallery-title separator">
                                <h4 class="mb-0 yellow">Elegant Bedroom</h4>
                            </a>
                            <p class="gallery-description">Exploring Excellence in Every Meticulous Design Detail Exploring Excellence in Every Meticulous Design Detail</p>
                        </div>
                    </div>
                </div>
                <h3 class="gallery-item stroke-heading stroke-heading-2 mb-0">
                    <svg stroke-width="1" class="text-line-2 fs-60 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%" class="yellow-stroke">03</text></svg>
                </h3>
            </div>

        </div>

        <div class="gallery-contents gallery-sm d-none d-lg-block">

            <div class="gallery-wrapper position-relative overflow-hidden w-100 h-100">
                <div class="gallery-image-wrapper overlay">
                    <img src="assets/images/gallery-4.jpg" class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover" alt="gallery-image">
                    <div class="gallery-info-wrapper">
                        <div class="gallery-info">
                            <a href="project-single.html" class="text-decoration-none link-hover-animation-1 gallery-title separator">
                                <h4 class="mb-0 yellow">Rustic Comfort</h4>
                            </a>
                            <p class="gallery-description">Exploring Excellence in Every Meticulous Design Detail Exploring Excellence in Every Meticulous Design Detail</p>
                        </div>
                    </div>
                </div>
                <h3 class="gallery-item stroke-heading stroke-heading-2 mb-0">
                    <svg stroke-width="1" class="text-line-2 fs-60 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%" class="yellow-stroke">04</text></svg>
                </h3>
            </div>

        </div>

        <div class="gallery-contents gallery-sm d-none d-lg-block">

            <div class="gallery-wrapper position-relative overflow-hidden w-100 h-100">
                <div class="gallery-image-wrapper overlay">
                    <img src="assets/images/gallery-5.jpg" class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover" alt="gallery-image">
                    <div class="gallery-info-wrapper">
                        <div class="gallery-info">
                            <a href="project-single.html" class="text-decoration-none link-hover-animation-1 gallery-title separator">
                                <h4 class="mb-0 yellow">Urban Living Space</h4>
                            </a>
                            <p class="gallery-description">Exploring Excellence in Every Meticulous Design Detail Exploring Excellence in Every Meticulous Design Detail</p>
                        </div>
                    </div>
                </div>
                <h3 class="gallery-item stroke-heading stroke-heading-2 mb-0">
                    <svg stroke-width="1" class="text-line-2 fs-60 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%" class="yellow-stroke">05</text></svg>
                </h3>
            </div>

        </div>
    </div>
</section>
<!--Gallery Section ======================-->


<!--Service Section ======================-->
<section class="service-section">
    <div class="full-width-section">
        <div class="section-title-wrapper position-relative">
            <div class="scroll-move">
                <span class="scrolling-text display-1 fw-extra-bold stroke-title text-stroke stroke-opacity-20 stroke-width-1 stroke-primary lh-1">Services</span>
            </div>
            <div class="container">
                <div class="section-title section-separator">
                    <h2 class="fw-extra-bold heading-title separator lh-1">Explore Our Design Offerings</h2>
                    <div class="d-flex flex-column flex-lg-row gap-4 align-items-lg-end justify-content-lg-between">
                        <p class="fs-4 fw-semibold mb-0 subtitle subtitle-width">Exploring Excellence in Every Meticulous Design Detail</p>
                        <div class="architronix-button">
                            <a href="services.html" class="btn btn-outline-primary  gap-10">View All Services
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-custom-progress position-relative mt-n30">
            <div class="swiper service-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-details">
                            <h2 class="stroke-heading">
                                <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">01</text></svg>
                            </h2>
                            <h4 class="service-title">Residential Design</h4>
                            <p class="mb-0">Our residential design services cover everything from concept to completion</p>
                        </div>
                    </div>
                    <!-- swiper-slide-->
                    <div class="swiper-slide">
                        <div class="service-details">
                            <h2 class="stroke-heading">
                                <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">02</text></svg>
                            </h2>
                            <h4 class="service-title">Commercial Design</h4>
                            <p class="mb-0">Our expertise in commercial design focuses on optimizing functionality and aesthetics</p>
                        </div>
                    </div>
                    <!-- swiper-slide-->
                    <div class="swiper-slide">
                        <div class="service-details">
                            <h2 class="stroke-heading">
                                <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">03</text></svg>
                            </h2>
                            <h4 class="service-title">Space Planning</h4>
                            <p class="mb-0">We maximize the potential of your space, ensuring it's organized, and aesthetically pleasing.</p>
                        </div>
                    </div>
                    <!-- swiper-slide-->
                    <div class="swiper-slide">
                        <div class="service-details">
                            <h2 class="stroke-heading">
                                <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">04</text></svg>
                            </h2>
                            <h4 class="service-title">Color Consultation</h4>
                            <p class="mb-0">Colors play a significant role in design. We help you choose the perfect palette for your space.</p>
                        </div>
                    </div>
                    <!-- swiper-slide-->
                    <div class="swiper-slide">
                        <div class="service-details">
                            <h2 class="stroke-heading">
                                <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">05</text></svg>
                            </h2>
                            <h4 class="service-title">Project Management</h4>
                            <p class="mb-0">From initial concepts to final installation, we oversee every detail for a successful project.</p>
                        </div>
                    </div>
                    <!-- swiper-slide-->
                    <div class="swiper-slide">
                        <div class="service-details">
                            <h2 class="stroke-heading">
                                <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">06</text></svg>
                            </h2>
                            <h4 class="service-title">Custom Furnishings</h4>
                            <p class="mb-0">Elevate your space with unique, furnishings that are designed to suit your style and needs.</p>
                        </div>
                    </div>
                    <!-- swiper-slide-->
                    <div class="swiper-slide">
                        <div class="service-details">
                            <h2 class="stroke-heading">
                                <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">07</text></svg>
                            </h2>
                            <h4 class="service-title">Concept Development</h4>
                            <p class="mb-0">We work closely with you to develop a design concept that resonates with your vision.</p>
                        </div>
                    </div>
                    <!-- swiper-slide-->
                    <div class="swiper-slide">
                        <div class="service-details">
                            <h2 class="stroke-heading">
                                <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">08</text></svg>
                            </h2>
                            <h4 class="service-title">Revamps & Remodels</h4>
                            <p class="mb-0">We provide renovation and remodeling services that breathe new life into existing structures.</p>
                        </div>
                    </div>
                    <!-- swiper-slide-->
                </div>
                <!-- swiper-wrapper -->
            </div>
            <!-- swiper -->
            <div class="container">
                <div class="service-swiper-pagination-wrapper">
                    <div class="service-swiper-pagination"></div>
                    <div class="swiper-button-progress">
                        <div class="progress-button-prev">
                            <svg class="arrow-reverse" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                            </svg>
                        </div>
                        <div class="progress-button-next">
                            <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                            </svg>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- full-width-section -->

</section>
<!--Service Section ======================-->


<!--Video Section ======================-->
<section class="video-section full-width-section pb-0 pb-lg-100">
    <div class="section-title-wrapper position-relative">
        <div class="scroll-move">
            <span class="scrolling-text display-1 fw-extra-bold stroke-title text-stroke stroke-opacity-20 stroke-width-1 stroke-primary lh-1">Video</span>
        </div>

        <div class="container">
            <div class="section-title section-separator">
                <h2 class="fw-extra-bold heading-title separator lh-1">Visual Design Odyssey</h2>
                <div class="d-flex flex-column flex-lg-row gap-4 align-items-lg-end justify-content-lg-between">
                    <p class="fs-4 fw-semibold mb-0 subtitle subtitle-width">Praise, Appreciation, and Design Excellence</p>
                </div>
            </div>
        </div>
    </div>
    <div class="video-contents text-secondary">
        <div class="video-contents-inner">
            <div class="container">
                <div class="row gy-5 gy-lg-0">
                    <div class="col-lg-6 col-xxl-5">

                        <h4 class="mb-4">Step into the dynamic world of Visual Design Odyssey</h4>
                        <p>Watch our designs come to life through captivating videos that showcase our creativity, innovation, and the transformation of spaces from concept to reality.</p>
                        <ul class="video-contents-list list-unstyled d-flex flex-column gap-3 mb-0">
                            <li class="d-flex align-items-center">
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>Initial Vision
                            </li>
                            <li class="d-flex align-items-center">
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>Collaborative Design
                            </li>
                            <li class="d-flex align-items-center">
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>Flawless Execution
                            </li>
                        </ul>

                        <div class="architronix-button">
                            <a href="services.html" class="btn btn-outline-secondary  d-inline-flex gap-10 align-items-center">Process of Our Work<span>
                                    <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                    </svg></span>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-6 col-xxl-6">
                        <div class="video-image-wrapper position-relative overflow-hidden">
                            <div class="wow slideInLeft">
                                <div class="video-image">
                                    <img src="assets/images/video-image.jpg" class="img-fluid" alt="img">
                                </div>
                                <a href="https://www.youtube.com/watch?v=lfDZJqSrIuk" class="video-popup video-popup-link">
                                    <span class="video-icon">
                                        <svg width="30" height="36" viewBox="0 0 30 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.500004 1.54552L29 18L0.500002 34.4545L0.500004 1.54552Z" stroke="#253B2F" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!--Video Section ======================-->


<!--Project Section ======================-->
<section class="project-section project-1">
    <div class="full-width-section">
        <div class="section-title-wrapper position-relative">
            <div class="scroll-move">
                <span class="scrolling-text display-1 fw-extra-bold stroke-title text-stroke stroke-opacity-20 stroke-width-1 stroke-primary lh-1">Project</span>
            </div>

            <div class="container">
                <div class="section-title section-separator">
                    <h2 class="fw-extra-bold heading-title separator lh-1">Creative Showcase</h2>
                    <div class="d-flex flex-column flex-lg-row gap-4 align-items-lg-end justify-content-lg-between">
                        <p class="fs-4 fw-semibold mb-0 subtitle subtitle-width">Where Imagination Meets Reality in Every Frame</p>
                        <div class="architronix-button">
                            <a href="project-archive.html" class="btn btn-outline-primary  gap-10">All Projects
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="projectSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000"> <!--  -->
            <div class="carousel-inner text-secondary">
                <div class="carousel-item active">
                    <div class="project-contents position-relative">
                        <div class="project-image overlay">
                            <picture>
                                <source media="(max-width:470px)" srcset="assets/images/project-1-sm.jpg">
                                <img src="assets/images/project-1.jpg" class="w-100 h-100 object-fit-cover" alt="img">
                            </picture>
                        </div>
                        <ul class="project-details list-unstyled mb-0 d-flex align-items-center">
                            <li class="d-flex flex-column gap-2 gap-xxl-10">
                                <span class="fs-5 fw-bold">Clients:</span>
                                <span>Sogeprom</span>
                            </li>
                            <li class="d-flex flex-column gap-2 gap-xxl-10">
                                <span class="fs-5 fw-bold">Area:</span>
                                <span>14,891 m²</span>
                            </li>
                            <li class="d-none d-sm-block">
                                <span class="d-flex flex-column gap-2 gap-xxl-10 ">
                                    <span class="fs-5 fw-bold">Project year:</span>
                                    <span>2022</span>
                                </span>
                            </li>
                            <li class="d-flex flex-column gap-2 gap-xxl-10">
                                <span class="fs-5 fw-bold">Project type:</span>
                                <span>Interior design</span>
                            </li>
                            <li class="architronix-button d-none d-xl-block">
                                <a href="project-archive.html" class="btn btn-outline-secondary  gap-10">View Project</a>
                            </li>
                        </ul>
                        <div class="project-info bg-primary">
                            <h5 class="project-title fw-extra-bold">Le Foresterie</h5>
                            <p class="mb-0">At the heart of the e+ project, made of natural anodised aluminium, glazing, sandstone and granite, the lobby ... <a class="text-decoration-none fw-extra-bold" href="project-archive.html">see more</a></p>

                            <div class="architronix-button d-block d-xl-none mt-4">
                                <a href="project-archive.html" class="btn btn-outline-secondary  gap-10">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="project-contents position-relative">
                        <div class="project-image overlay">
                            <picture>
                                <source media="(max-width:470px)" srcset="assets/images/project-2-sm.jpg">
                                <img src="assets/images/project-2.jpg" class="w-100 h-100 object-fit-cover" alt="img">
                            </picture>
                        </div>
                        <ul class="project-details list-unstyled mb-0 d-flex align-items-center">
                            <li class="d-flex flex-column gap-2 gap-xxl-10">
                                <span class="fs-5 fw-bold">Clients:</span>
                                <span>Layero</span>
                            </li>
                            <li class="d-flex flex-column gap-2 gap-xxl-10">
                                <span class="fs-5 fw-bold">Area:</span>
                                <span>10,891 m²</span>
                            </li>
                            <li class="d-none d-sm-block">
                                <span class="d-flex flex-column gap-2 gap-xxl-10 ">
                                    <span class="fs-5 fw-bold">Project year:</span>
                                    <span>2021</span>
                                </span>
                            </li>
                            <li class="d-flex flex-column gap-2 gap-xxl-10">
                                <span class="fs-5 fw-bold">Project type:</span>
                                <span>Furnishings</span>
                            </li>
                            <li class="architronix-button d-none d-xl-block">
                                <a href="project-archive.html" class="btn btn-outline-secondary  gap-10">View Project</a>
                            </li>
                        </ul>
                        <div class="project-info bg-primary">
                            <h5 class="project-title fw-extra-bold">Oasis Urbaine</h5>
                            <p class="mb-0">At the heart of the e+ project, made of natural anodised aluminium, glazing, sandstone and granite, the lobby ... <a class="text-decoration-none fw-extra-bold" href="project-archive.html">see more</a></p>

                            <div class="architronix-button d-block d-xl-none mt-4">
                                <a href="project-archive.html" class="btn btn-outline-secondary  gap-10">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="project-contents position-relative">
                        <div class="project-image overlay">
                            <picture>
                                <source media="(max-width:470px)" srcset="assets/images/project-3-sm.jpg">
                                <img src="assets/images/project-3.jpg" class="w-100 h-100 object-fit-cover" alt="img">
                            </picture>
                        </div>
                        <ul class="project-details list-unstyled mb-0 d-flex align-items-center">
                            <li class="d-flex flex-column gap-2 gap-xxl-10">
                                <span class="fs-5 fw-bold">Clients:</span>
                                <span>Vaaz Interior</span>
                            </li>
                            <li class="d-flex flex-column gap-2 gap-xxl-10">
                                <span class="fs-5 fw-bold">Area:</span>
                                <span>18,890 m²</span>
                            </li>
                            <li class="d-none d-sm-block">
                                <span class="d-flex flex-column gap-2 gap-xxl-10 ">
                                    <span class="fs-5 fw-bold">Project year:</span>
                                    <span>2020</span>
                                </span>
                            </li>
                            <li class="d-flex flex-column gap-2 gap-xxl-10">
                                <span class="fs-5 fw-bold">Project type:</span>
                                <span>Interior design</span>
                            </li>
                            <li class="architronix-button d-none d-xl-block">
                                <a href="project-archive.html" class="btn btn-outline-secondary  gap-10">View Project</a>
                            </li>
                        </ul>
                        <div class="project-info bg-primary">
                            <h5 class="project-title fw-extra-bold">Vie En Couleur</h5>
                            <p class="mb-0">At the heart of the e+ project, made of natural anodised aluminium, glazing, sandstone and granite, the lobby ... <a class="text-decoration-none fw-extra-bold" href="project-archive.html">see more</a></p>

                            <div class="architronix-button d-block d-xl-none mt-4">
                                <a href="project-archive.html" class="btn btn-outline-secondary  gap-10">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-carousel-buttons d-flex gap-4">
                <a href="#" class="project-prev-btn btn prev-btn prev-btn-sm" data-bs-target="#projectSlider" data-bs-slide="prev">
                    <svg class="arrow-reverse" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"></path>
                    </svg>
                </a>
                <a href="#" class="project-next-btn btn btn-primary gap-10" data-bs-target="#projectSlider" data-bs-slide="next">
                    New Projects
                    <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<!--Project Section ======================-->

<!--Feedback Section ======================-->
<section id="feedback" class="feedback-section feedback-1 text-secondary">
    <div class="container">
        <div class="feedback-wrapper position-relative">
            <div class="feedback-content d-flex flex-column gap-4 flex-lg-row align-items-lg-end justify-content-lg-around">
                <h2 class="fw-extra-bold feedback-title">Drop Us a Line</h2>
                <div class="architronix-button">
                    <a href="contact-2.html" class="btn btn-secondary gap-10">
                        Lets Talk
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

<?php include("footer.php"); ?>