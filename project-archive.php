<?php include("header.php") ?>



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
            <span class="scrolling-text display-1 fw-extra-bold stroke-title text-stroke stroke-opacity-20 stroke-width-1 stroke-primary lh-1">Archive</span>
        </div>

        <div class="container">
            <div class="section-title section-separator">
                <h2 class="fw-extra-bold heading-title separator lh-1">A Journey Through Our Past Projects</h2>
                <div class="d-flex flex-column flex-lg-row gap-4 align-items-lg-end justify-content-lg-between">
                    <p class="fs-4 fw-semibold mb-0 subtitle subtitle-width">Exploring the Tapestry of Our Design Legacy</p>
                </div>
            </div>
        </div>
    </div>
    <!-- section-title-wrapper -->
</section>
<!--Section ======================-->



<!--Project-Overview Section ======================-->
<section class="project-overview-section pb-lg-3">
    <div class="full-width-section position-relative overflow-hidden">
        <div class="container">

            <div class="project-overview-1 project-overview-padding">
                <div class="row align-items-center gx-0">
                    <div class="col-lg-6">
                        <div class="project-overview-image float-right">
                            <img src="assets/images/project-overview-img-1.jpg" class="wow slideInLeft" alt="img">
                        </div>
                    </div>
                    <!-- col-9 -->
                    <div class="col-lg-6">
                        <div class="project-overview-details bg-primary text-secondary wow slideInLeft">
                            <div>
                                <h5 class="display-5 fw-extra-bold mb-0">Pixel House</h5>
                                <p class="project-overview-description mb-0">A while ago, in the year 2017, we promised new clients of ours that we know how to do a “gradient wall”. One that starts sealed but fades and disappears into nothing… into air.</p>
                                <ul class="project-overview-list list-unstyled mb-0 d-flex flex-column gap-10">
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Location:</span>Sao Paulo, Brazil
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Year:</span>2021
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Category:</span>Private House
                                    </li>
                                </ul>
                                <div class="mt-4 mt-lg-30 mt-xxl-40">
                                    <a href="project-single.html" class="btn btn-link link-hover-animation-1 d-inline-flex gap-10 align-items-center">View Project<span>
                                            <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-3 -->
                </div>
                <!-- row -->
            </div>
            <!-- project-overview-1 -->

            <div class="project-overview-2 project-overview-padding">
                <div class="row flex-row-reverse align-items-center gx-0">
                    <div class="col-lg-6">
                        <div class="project-overview-image">
                            <img src="assets/images/project-overview-img-2.jpg" class="wow slideInRight" alt="img">
                        </div>
                    </div>
                    <!-- col-9 -->
                    <div class="col-lg-6">
                        <div class="project-overview-details bg-primary text-secondary position-relative wow slideInRight">
                            <div>
                                <h5 class="display-5 fw-extra-bold mb-0">La Fuente Condo</h5>
                                <p class="project-overview-description mb-0">A while ago, in the year 2017, we promised new clients of ours that we know how to do a “gradient wall”. One that starts sealed but fades and disappears into nothing… into air.</p>
                                <ul class="project-overview-list list-unstyled mb-0 d-flex flex-column gap-10">
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Location:</span>Sao Paulo, Brazil
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Year:</span>2021
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Category:</span>Private House
                                    </li>
                                </ul>
                                <div class="mt-4 mt-lg-30 mt-xxl-40">
                                    <a href="project-single.html" class="btn btn-link link-hover-animation-1 d-inline-flex gap-10 align-items-center">View Project<span>
                                            <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-3 -->
                </div>
                <!-- row -->
            </div>
            <!-- project-overview-2 -->

            <div class="project-overview-1 project-overview-padding">
                <div class="row align-items-center gx-0">
                    <div class="col-lg-6">
                        <div class="project-overview-image float-right">
                            <img src="assets/images/project-overview-img-3.jpg" class="wow slideInLeft" alt="img">
                        </div>
                    </div>
                    <!-- col-9 -->
                    <div class="col-lg-6">
                        <div class="project-overview-details bg-primary text-secondary position-relative wow slideInLeft">
                            <div>
                                <h5 class="display-5 fw-extra-bold mb-0">Bovio House</h5>
                                <p class="project-overview-description mb-0">A while ago, in the year 2017, we promised new clients of ours that we know how to do a “gradient wall”. One that starts sealed but fades and disappears into nothing… into air.</p>
                                <ul class="project-overview-list list-unstyled mb-0 d-flex flex-column gap-10">
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Location:</span>Sao Paulo, Brazil
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Year:</span>2021
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Category:</span>Private House
                                    </li>
                                </ul>
                                <div class="mt-4 mt-lg-30 mt-xxl-40">
                                    <a href="project-single.html" class="btn btn-link link-hover-animation-1 d-inline-flex gap-10 align-items-center">View Project<span>
                                            <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-3 -->
                </div>
                <!-- row -->
            </div>
            <!-- project-overview-1 -->

            <div class="project-overview-2">
                <div class="row flex-row-reverse align-items-center gx-0">
                    <div class="col-lg-6">
                        <div class="project-overview-image">
                            <img src="assets/images/project-overview-img-4.jpg" class="wow slideInRight" alt="img">
                        </div>
                    </div>
                    <!-- col-9 -->
                    <div class="col-lg-6">
                        <div class="project-overview-details bg-primary text-secondary wow slideInRight">
                            <div>
                                <h5 class="display-5 fw-extra-bold mb-0">MFA Lakeside Brielle</h5>
                                <p class="project-overview-description mb-0">A while ago, in the year 2017, we promised new clients of ours that we know how to do a “gradient wall”. One that starts sealed but fades and disappears into nothing… into air.</p>
                                <ul class="project-overview-list list-unstyled mb-0 d-flex flex-column gap-10">
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Location:</span>Sao Paulo, Brazil
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Year:</span>2021
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="fw-extra-bold">Category:</span>Private House
                                    </li>
                                </ul>
                                <div class="mt-4 mt-lg-30 mt-xxl-40">
                                    <a href="project-single.html" class="btn btn-link link-hover-animation-1 d-inline-flex gap-10 align-items-center">View Project<span>
                                            <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-3 -->
                </div>
                <!-- row -->
            </div>
            <!-- project-overview-2 -->
        </div>
        <!-- full-width-section -->
    </div>
</section>
<!--Project-Overview Section ======================-->



<nav class="mt-5 mt-md-70 mt-lg-90" aria-label="Page navigation">
    <ul class="pagination justify-content-center align-items-end position-relative">
        <li class="page-item me-md-10">
            <a class="btn prev-btn prev-btn-sm me-10" href="#">
                <svg class="arrow-reverse" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                </svg>
            </a>
        </li>
        <li class="page-item"><a class="page-link active fw-semibold next-btn next-btn-sm" href="#">01</a></li>
        <li class="page-item"><a class="page-link fw-semibold next-btn next-btn-sm" href="#">02</a></li>
        <li class="page-item me-2 me-md-3"><a class="page-link fw-semibold next-btn next-btn-sm" href="#">03</a></li>
        <li class="page-item mx-md-1">
            <svg width="29" height="5" viewBox="0 0 29 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="#253B2F" />
                <circle cx="14.5" cy="2.5" r="2.5" fill="#253B2F" />
                <circle cx="26.5" cy="2.5" r="2.5" fill="#253B2F" />
            </svg>
        </li>
        <li class="page-item mx-2 mx-md-3"><a class="page-link fw-semibold next-btn next-btn-sm" href="#">37</a></li>
        <li class="page-item">
            <a class="btn btn-primary btn-lg d-inline-flex gap-10" href="#">Next
                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                </svg>
            </a>
        </li>
    </ul>
</nav>



<!--Feedback Section ======================-->
<section class="feedback-section feedback-1 text-secondary">
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



<?php include("footer.php") ?>