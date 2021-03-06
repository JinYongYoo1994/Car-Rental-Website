<!--== Preloader Area Start ==-->
<div class="preloader">
    <div class="preloader-spinner">
        <div class="loader-content">
            <img src="assets/img/preloader.gif" alt="JSOFT">
        </div>
    </div>
</div>
<!--== Preloader Area End ==-->

<!--== Header Area Start ==-->
<?php include 'layout/header.php'; ?>
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Register</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Login Page Content Start ==-->
<section id="lgoin-page-wrap" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8 m-auto">
                <div class="login-page-content">
                    <div class="login-form">
                        <h3>Sign Up</h3>
                        <?php if ($this->session->flashdata()) { ?>
                            <div class="alert alert-danger">
                                <?php $this->session->flashdata('errors'); ?>
                            </div>
                        <?php } ?>
                        <form action="/post_register">
                            <div class="name">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="First Name" name="firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Last Name" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="username">
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <div class="username">
                                <input type="text" placeholder="Username" name="username">
                            </div>
                            <div class="password">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="log-btn">
                                <button type="submit"><i class="fa fa-check-square"></i> Sign Up</button>
                            </div>
                        </form>
                    </div>

                    <!-- <div class="login-other">
                        <span class="or">or</span>
                        <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Signup With Facebook</a>
                        <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Signup With Google</a>
                    </div> -->
                    <div class="create-ac">
                        <p>Have an account? <a href="/signin">Sign In</a></p>
                    </div>
                    <div class="login-menu">
                        <a href="/">About</a>
                        <span>|</span>
                        <a href="/">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Login Page Content End ==-->

<!--== Footer Area Start ==-->
<?php include 'layout/footer.php'; ?>
<!--== Footer Area End ==-->

<!--== Scroll Top Area Start ==-->
<div class="scroll-top">
    <img src="assets/img/scroll-top.png" alt="JSOFT">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="assets/js/jquery-migrate.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== Gijgo Min Js ===-->
<script src="assets/js/plugins/gijgo.js"></script>
<!--=== Vegas Min Js ===-->
<script src="assets/js/plugins/vegas.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="assets/js/plugins/isotope.min.js"></script>
<!--=== Owl Caousel Min Js ===-->
<script src="assets/js/plugins/owl.carousel.min.js"></script>
<!--=== Waypoint Min Js ===-->
<script src="assets/js/plugins/waypoints.min.js"></script>
<!--=== CounTotop Min Js ===-->
<script src="assets/js/plugins/counterup.min.js"></script>
<!--=== YtPlayer Min Js ===-->
<script src="assets/js/plugins/mb.YTPlayer.js"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="assets/js/plugins/magnific-popup.min.js"></script>
<!--=== Slicknav Min Js ===-->
<script src="assets/js/plugins/slicknav.min.js"></script>

<!--=== Mian Js ===-->
<script src="assets/js/main.js"></script>