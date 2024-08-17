<?php
include 'includefront/header.php';
include '../Admin_Pandit/include/connection.php';
?>

	

        <!-- Page Header Section Start Here -->
        <section class="page-header bg_img padding-tb">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-header-content-area">
                    <h4 class="ph-title">Puja Products</h4>
                    <ul class="lab-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active">Products</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->

        <!-- shop page Section Start Here -->
        <div class="shop-page padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-12">
                            <article>
                                <div class="shop-title d-flex flex-wrap justify-content-between bg-ash">
                                    <p>Showing 01 - 12 of 139 Results</p>
                                    <div class="product-view-mode">
                                        <a class="active" data-target="grids"><i class="icofont-ghost"></i></a>
                                        <a data-target="lists"><i class="icofont-listing-box"></i></a>
                                    </div>
                                </div>

                                <div class="shop-product-wrap grids row justify-content-center">
                                   <?php include 'product_retrive.php';?>
                                </div>

                                <div class="paginations">
                                    <ul class="lab-ul d-flex flex-wrap justify-content-center">
                                        <li>
                                            <a href="#"><i class="icofont-rounded-double-left"></i></a>
                                        </li>
                                        <li class="d-none d-sm-block">
                                            <a href="#">1</a>
                                        </li>
                                        <li class="d-none d-sm-block">
                                            <a href="#">2</a>
                                        </li>
                                        <li class="d-none d-sm-block">
                                            <a class="dot">...</a>
                                        </li>
                                        <li class="d-none d-sm-block">
                                            <a href="#">5</a>
                                        </li>
                                        <li class="d-none d-sm-block">
                                            <a href="#"><i class="icofont-rounded-double-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-7 col-12">
                            <aside>
                                <div class="widget widget-search bg-ash px-3">
                                    <div class="widget-header">
                                        <h5>Search keywords</h5>
                                    </div>
                                    <form action="http://labartisan.net/" class="search-wrapper">
                                        <input type="text" name="s" placeholder="Your Search...">
                                        <button type="submit"><i class="icofont-search-2"></i></button>
                                    </form>
                                </div>

                                <div class="widget widget-category bg-ash px-3">
                                    <div class="widget-header">
                                        <h5>All Categories</h5>
                                    </div>
                                    <div class="widget-wrapper">
                                        <ul class="lab-ul shop-menu">
                                            <li>
                                                <a href="#0">sindur</a>
                                                <ul class="lab-ul shop-submenu">
                                                    <li><a href="#">Bhakhra</a></li>
                                                    <li><a href="#">Kumkum</a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li><a href="#0">Coconut</a>
                                                <ul class="lab-ul shop-submenu">
                                                    <li><a href="#">Gotta</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#0">Agarbatti</a>
                                                <ul class="lab-ul shop-submenu">
                                                    <li><a href="#">Sai agarbatti</a></li>
                                                    <li><a href="#">Patanjali agarbatti</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#0">Honey</a>
                                                <ul class="lab-ul shop-submenu">
                                                    <li><a href="#"> Patanjali honey</a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li><a href="#0">Kalash</a>
                                                <ul class="lab-ul shop-submenu">
                                                    <li><a href="#">Diya</a></li>
                                                    <li><a href="#">Dipak</a></li>
                                                </ul>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget widget-post bg-ash px-3">
                                    <div class="widget-header">
                                        <h5>Latests Products</h5>
                                    </div>
                                    <ul class="lab-ul widget-wrapper">
                                        <li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="blog-single.php"><img src="assets/images/product/01.jpg" alt="product"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="blog-single.php">
                                                    <h6>Sai Agarbatti</h6>
                                                </a>
                                                <div class="rating">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                                <h6>$59.9</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="blog-single.php"><img src="assets/images/product/02.jpg"
                                                        alt="product"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="blog-single.php">
                                                    <h6>Fresh Ghee</h6>
                                                </a>
                                                <div class="rating">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                                <h6>$59.9</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="blog-single.php"><img src="assets/images/product/03.jpg"
                                                        alt="product"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="blog-single.php">
                                                    <h6>White Stone</h6>
                                                </a>
                                                <div class="rating">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                                <h6>$59.9</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="blog-single.php"><img src="assets/images/product/04.jpg"
                                                        alt="product"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="blog-single.php">
                                                    <h6> Orange sindur</h6>
                                                </a>
                                                <div class="rating">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                                <h6>$59.9</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop page Section ENding Here -->


<?php
include 'includefront/footer.php';
?>
	