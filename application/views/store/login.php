<!doctype html>
<html lang="en">
    <? $this->load->view("store/partials/head")?>
    <body>
    <? $this->load->view("store/partials/nav")?>

        <h2 class="account-title text-center">My Account</h2>
        <div class="container mb-5">
            <div class="row">
                <div class="col col-4">
                    <div class="w-100 border rounded-3 shadow-sm mt-3">
                        <h3 class="fs-2 mt-4 mb-2 text-center">Login</h3>
                        <p class="text-center text-secondary mb-5">Log In Your Account</p>
                        <div class="mb-3 mx-4">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email address">
                        </div>
                        <div class="mb-3 mx-4">
                            <input type="password" class="form-control" id="inputPassword" placeholder="password">
                        </div>
                        <div class="form-check ms-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-secondary" for="flexCheckDefault">
                                Remember me
                            </label>
                            <a href="#" class="float-end me-4">Forgot your password?</a>
                        </div>
                        <div class="d-grid gap-2 mx-4 mt-4 mb-5">
                            <button class="btn btn-primary shadow-sm" type="button">Log in</button>
                        </div>

                    </div>
                </div>
                <div class="col col-6 ms-auto me-4 mb-5">
                    <h2 class="mb-3">Sign up today and you will be able to:</h2>
                    <p class="mb-4 text-secondary lh-lg">V88 Marketplace Buyer Protection has you covered from click to delivery. Sign up or sign in and you will be able to:</p>
                    <h2 class="fs-5 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-credit-card-2-front me-3 text-primary" viewBox="0 0 16 16">
                            <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                            <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        SPEED YOUR WAY THROUGH CHECKOUT
                    </h2>
                    <h2 class="fs-5 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-card-checklist me-3 text-primary" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        TRACK YOUR ORDERS EASILY</h2>
                    <h2 class="fs-5 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-bag-check me-3 text-primary" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                        </svg>
                        KEEP A RECORD OF ALL YOUR PURCHASES
                    </h2>
                    <h2 class="border-bottom mt-5"></h2>
                    <div class="container bg-light mt-5 shadow-sm">
                        <div class="row">
                            <div class="col col-3">
                                <h3 class="fs-1 py-3 text-success d-inline-block mt-3">₱250</h3>
                            </div>
                            <div class="col col-9 mt-3 text-secondary">
                                <h4 class="fs-5 text-dark">A small gift for your first purchase</h4>
                                <p class="d-inline-block">V88 Marketplace give ₱250 for your first purchase. Welcome to V88 Marketplace!</p>
                            </div>
                        </div>
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