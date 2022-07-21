<header class="header-area header-area-one">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="top-social">
                                <ul class="social-link">
                                    <li><span>Follow us:</span></li>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                   <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp" style="font-size:18px;"></i></a></li>

                                    <!-- <li><a href="#" id="whatsappIcon"><img src="../HTML/assets/images/whatsapp.png" style="width:16px; margin-bottom: 3px;" alt=""></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="top-content text-center">
                                <p>We Have Special Offers Every <a href="index.html">Find your offer</a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="top-right">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-navigation">
                <div class="container-fluid">
                    <div class="primary-menu">
                        <div class="row">
                            <div class="col-lg-2 col-5">
                                <div class="site-branding">
                                <?php
            $sql=mysqli_query($conn,"Select * from general_settings");
               while($arr=mysqli_fetch_array($sql)){
             ?>
                                    <a href="index.php" class="brand-logo" style="background-color:white"><img src="assets/images/bg/<?php echo $arr['select_logo'] ?>" alt="Brand Logo" width="100" height="50"></a>
               <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-2">
                                <div class="nav-menu">
                                    <div class="navbar-close"><i class="ti-close"></i></div>
                                    <nav class="main-menu">
                                        <ul>
                                            <li class="menu-item"><a href="index.php" class="active">Home</a>
                                            </li>
                                            <li class="menu-item"><a href="about.php">About us</a></li>
                                            <li class="menu-item "><a href="listing-list.php">Listings</a>
                                                
                                            </li>
                                            <li class="menu-item"><a href="pricing.php">Pricing</a>

                                            </li>
                                            <li class="menu-item"><a href="add-listing.php">Vendor Registration</a>
                                            </li>
                                            <li class="menu-item has-children"><a href="#">Article</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="blog.php">Our Blog</a></li>
                                                    <!-- <li class="menu-item"><a href="blog-details.php">Blog details</a></li> -->
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="contact.php">Contact</a></li>
                                            <li class="nav-btn"><a href="add-listing.php" class="main-btn icon-btn">Add Listing</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-4 col-5">
                                <div class="header-right-nav">
                                    <ul class="d-flex align-items-center">
                                        <li class="hero-nav-btn"><a href="add-listing.php" class="main-btn icon-btn">Add Listing</a></li>
                                        <li class="nav-toggle-btn">
                                            <div class="navbar-toggler">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>