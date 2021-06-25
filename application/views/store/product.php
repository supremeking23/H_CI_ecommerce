<!doctype html>
<html lang="en">
<? $this->load->view("store/partials/head")?>
    <body>
    <? $this->load->view("store/partials/nav")?>

        <div class="container mt-5">
            <h3 class="product-title">Apple Macbook Retina Display 12"</h3>
            <div class="row">
                <div class="col col-6 pe-0">
                    <span class="me-2">Brand: Apple</span>|
                    <span class="mx-2">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star-half-full text-warning"></i>
                    </span>|
                    <span class="mx-2">(100 reviews)</span>| 
                    <span class="mx-2">SKU: CD987654318</span>
                </div>
            </div>
            
            <h2 class="border-bottom mt-3 mb-5"></h2>
            
            <div class="row">
                <div class="col col-4 d-flex flex-row">
                    <div class="col col-3 d-flex flex-column ms-2">
                        <img class="product-thumbnail border my-2" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/14a-300x300.jpg" alt="">
                        <img class="product-thumbnail border my-2" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/14b-150x150.jpg" alt="">
                        <img class="product-thumbnail border my-2" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/14c-150x150.jpg" alt="">
                        <img class="product-thumbnail border my-2" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/14d-150x150.jpg" alt="">
                    </div>
                    <div class="col col-8"><img src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/14a-300x300.jpg" alt="Photo of Apple Macbook Retina"></div>
                </div>
                <div class="col col-8">
                    <h3>₱50,000 <span class="fs-6 text-decoration-line-through text-secondary">₱80,000</span></h3>
                    <p>Sold by: <span><a href="/">Harold's Store</a></span> | Status: In stock</p>
                    <h2 class="border-bottom"></h2>
                    <ul class="text-secondary product-specs">
                        <li>Unrestrained and portable active stereo speaker</li>
                        <li>Free from the confines of wires and chords</li>
                        <li>20 hours of portable capabilities</li>
                        <li>Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                        <li>3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                    </ul>
                    <h2 class="border-bottom mb-3"></h2>
                    <div class="row">
                        <div class="col col-2">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number border rounded-0 border-end-0" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                            <path d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z"/>
                                        </svg>
                                    </button>
                                </span>
                                <input type="text" name="quant[1]" class="form-control input-number text-center border-start-0 border-end-0 border" value="1" min="1" max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number border rounded-0 border-start-0" data-type="plus" data-field="quant[1]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                    <h2 class="border-bottom mt-3"></h2>
                </div>
            </div>
        </div>

        <div class="container mt-5 px-4 pb-5" id="icon-grid">
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
        <script src="/assets/js/quantity-input.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>