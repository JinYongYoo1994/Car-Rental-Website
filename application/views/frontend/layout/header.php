<header id="header-area" class="fixed-top">
        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-2">
                        <a href="index2.html" class="logo">
                            <img src="assets/img/logo1.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-10 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="/">Rent</a></li>
                                <li><a href="/">Sell</a></li>
                                <li><a href="/">Buy</a></li>
                                <li><a href="/">Services</a></li>
                                <li><a href="/">About Us</a></li>
                                <?php if($page_name=="signin") { ?>
                                <li class="auth-btn"><a href="/signup">Sign Up</a></li>
                                <?php }else {?>
                                <li class="auth-btn"><a href="/signin">Sign In</a></li>
                                <?php }?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2">

                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>