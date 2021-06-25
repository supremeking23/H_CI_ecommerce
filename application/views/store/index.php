<!doctype html>
<html lang="en">
    <? $this->load->view("store/partials/head")?>
    <body>
    <? $this->load->view("store/partials/nav")?>

        <!-- ? Hero Carousel  -->
        <div class="container-fluid px-0">
            <div id="carouselExampleFade" class="carousel slide carousel-fade rounded-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="<?= base_url(); ?>assets/img/hero-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url(); ?>assets/img/hero-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url(); ?>assets/img/hero-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url(); ?>assets/img/hero-4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- ? Categories -->
        <div class="container">
            <h3 class="my-5 text-center">Top Categories Of The Month</h3>
            <div class="row row-cols-1 row-cols-md-5 g-4 text-center">
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-1.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mobiles</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-2.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Men's T-Shirts</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-3.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Women's Dresses</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-4.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Outdoor Lighting</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-5.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mobile Phone Cases</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-6.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Other Bike parts</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-7.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gaming Keyboards</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-8.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">In-Ear Headphones</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-9.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shoulder Bags</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./assets/img/category-10.png" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Monitors</h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ? Great Deals and Features -->
        <div class="container my-5">
            <h3 class="text-center mt-5">Great Outdoor Brands</h3>
            <div class="row text-center">
                <div class="col col-3 rounded-card">
                    <a href="/"><img class="mb-3" src="./assets/img/outdoor-1.png" alt="..."></a>
                    <p>Slumberjack ₱2,500</p>
                </div>
                <div class="col col-3 rounded-card">
                    <a href="/"><img class="mb-3" src="./assets/img/outdoor-2.png" alt="..."></a>
                    <p>Body Glove gear ₱1,250</p>
                </div>
                <div class="col col-3 rounded-card">
                    <a href="/"><img class="mb-3" src="./assets/img/outdoor-3.png" alt="..."></a>
                    <p>PGA TOUR items ₱3,800</p>
                </div>
                <div class="col col-3 rounded-card">
                    <a href="/"><img class="mb-3" src="./assets/img/outdoor-4.png" alt="..."></a>
                    <p>Eddie Bauer ₱1000</p>
                </div>
            </div>
        </div>

        <h2 class="border-bottom my-5"></h2>

        <div class="container my-5">
            <div class="row d-flex flex-wrap">
                <div class="mx-2 banner-fruit shadow-sm">
                    <h3 class="mt-4 ms-4">Fresh Fruits</h3>
                    <button type="button" class="btn btn-outline-success mt-3 ms-4">Shop Now</button>
                </div>
                <div class="mx-2 banner-veggie text-end shadow-sm position-relative">
                    <button type="button" class="btn btn-outline-success me-4 mb-4 position-absolute top-50 end-0">Shop Now</button>
                    <h3 class="me-4 mb-4 position-absolute bottom-0 end-0">Fresh Vegetables</h3>
                </div>
            </div>
        </div>

        <!-- ! slick -->
        <div class="container mb-5">
            <div class="multiple-items row">
                <div class="product col-md-12" >
                    <a href="#">
                    <div class="product-img">
                        <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-300x300.jpg" class="" alt="" srcset="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-300x300.jpg 300w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-70x70.jpg 70w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-150x150.jpg 150w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-768x768.jpg 768w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-600x600.jpg 600w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a.jpg 1000w" >
                    </div>
                    <h4>₱6,000</h4>
                    <h6>Sound Intone 165 Earphone White Version</h6>
                    </a>
                    <select class="star">
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                </div>
    
                <div class="product col-md-12">
                    <a href="#">
                    <div class="product-img">
                    <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/3a-1-300x300.jpg" class="" alt="" srcset="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/3a-1-300x300.jpg 300w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/3a-1-150x150.jpg 150w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/3a-1-768x768.jpg 768w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/3a-1-1024x1024.jpg 1024w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/3a-1-70x70.jpg 70w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/3a-1-600x600.jpg 600w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/3a-1.jpg 1200w" >
                    </div>
                    <h4>₱42,000</h4>
                    <h6>LG Electrolux Inverter Washing Machine</h6>
                    </a>
                    <select class="star" disabled>
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" >3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                
                <div class="product col-md-12">
                    <a href="#">
                    <div class="product-img">
                    <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-1-300x300.jpg" class="" alt=""  >
                    </div>
                    <h4>₱36,000</h4>
                    <h6>Panasonic Inverter Refrigerator</h6>
                    </a>
                    <select class="star" disabled>
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                </div>
    
                
                <div class="product col-md-12">
                    <a href="#">
                    <div class="product-img">
                    <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/12a-300x300.jpg" class="" alt="" >
                    </div>
                    <h4>₱3,000</h4>
                    <h6>Beat Spill 2.0 Wireless Speaker</h6>
                    </a>
                    <select class="star" disabled>
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                </div>
    
                
                <div class="product col-md-12">
                    <a href="#">
                    <div class="product-img">
                    <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/14a-300x300.jpg" class="" alt="" >
                    </div>
                    <h4>₱50,000</h4>
                    <h6>Apple Macbook Retina Display 12</h6>
                    </a>
                    <select class="star" disabled>
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" >3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                
                <div class="product col-md-12">
                    <a href="#">
                    <div class="product-img">
                    <img class="img-fluid" src=https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/20a-300x300.jpg" class="" alt="">
                    </div>
                    <h4>₱8,000</h4>
                    <h6>LG White Front Load Steam Washer</h6>
                    </a>
                    <select class="star" disabled>
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
    
                
                <div class="product col-md-12">
                    <a href="#">
                    <div class="product-img">
                    <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/22a-300x300.jpg" class="" alt="" >
                    </div>
                    <h4>₱14,000</h4>
                    <h6>Amcrest Security Camera in White Color</h6>
                    </a>
                    <select class="star" disabled>
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
    
                
                <div class="product col-md-12">
                    <a href="#">
                    <div class="product-img">
                    <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/24a-300x300.jpg" class="" alt="">
                    </div>
                    <h4>₱20,000</h4>
                    <h6>DJI Phantom 4 Quadcopter Camera, White</h6>
                    </a>
                    <select class="star" disabled>
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="container px-4 pb-5" id="icon-grid">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5 text-center text-primary border-bottom">
                <div class="col d-flex align-items-center">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                    <h4 class="fw-bold mt-3 text-dark">Free Delivery</h4>
                    <p class="text-secondary">For All Orders over ₱299</p>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                        <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg>
                    <h4 class="fw-bold mt-3 text-dark">Big Discounts</h4>
                    <p class="text-secondary">On selected Brands and Vouchers</p>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-lightning" viewBox="0 0 16 16">
                        <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z"/>
                    </svg>
                    <h4 class="fw-bold mt-3 text-dark">Lightning Fast App</h4>
                    <p class="text-secondary">For your better experience</p>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    </svg>
                    <h4 class="fw-bold mt-3 text-dark">Lots of Choices</h4>
                    <p class="text-secondary">We Provide a variety Choices for you</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ? Footer -->
        <div class="container-fluid bg-light text-dark" id="footer">
            <div class="container pt-2">
                <h3 class="my-5 text-primary">V88 Marketplace</h3>
                <div class="row pb-5">
                    <div class="col">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="/">Policy</a></li>
                            <li><a href="/">Terms & Conditions</a></li>
                            <li><a href="/">Shipping</a></li>
                            <li><a href="/">Return</a></li>
                            <li><a href="/">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="/">About Us</a></li>
                            <li><a href="/">Affiliate</a></li>
                            <li><a href="/">Career</a></li>
                            <li><a href="/">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Business</h5>
                        <ul>
                            <li><a href="/">Our Press</a></li>
                            <li><a href="/">Checkout</a></li>
                            <li><a href="/">My Account</a></li>
                            <li><a href="/">Shop</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Newsletter</h5>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            <button type="button" class="btn btn-primary mt-3">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>