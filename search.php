<?php
session_start();
error_reporting(0);
include('assets/config.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RIF - Rohilkhand Incubation Foundation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="RIF" name="keywords">
    <meta content="Rohilkhand Incubation Foundation" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><a href="https://goo.gl/maps/bQJ4NGAnkuDzsSr87" style="color:aliceblue;" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='aliceblue'" target="_blank"><i class="fa fa-map-marker-alt me-2"></i>RIF, MJPRU, Bareilly</a></small>

                    <small class="me-3 text-light"><a href="tel:+91 9412510763" style="color:aliceblue;" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='aliceblue'" target="_blank"><i class="fa fa-phone-alt me-2"></i>+91 9412510763</a></small>
                    <!-- <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 9412510763</small> -->
                    <small class="me-3 text-light"><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@rifmjpru.com" style="color:aliceblue;" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='aliceblue'" target="_blank"><i class="fa fa-envelope-open me-2"></i>info@rifmjpru.com</a></small>
                    <!-- <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@rifmjpru.com</small> -->
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://twitter.com/mjp_bareilly"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.facebook.com/mjpruofficial/"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.linkedin.com/school/mjpru-bareilly/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.instagram.com/mjpru.official"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" target="_blank" href="https://www.youtube.com/channel/UCzUtKWfqBhlNIQzc59jdFBQ"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="./" class="navbar-brand p-0">
                <h1 class="m-0">
                <img src="img/favicon.png" class="logoimg" alt="">
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="./" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu m-0">
                            <a href="./about" class="dropdown-item">About RIF</a>
                            <a href="./image-gallery" class="dropdown-item">Image Gallery</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">RIF Team</a>
                        <div class="dropdown-menu m-0">
                            <a href="./rifteam/boardofdirectors" class="dropdown-item">Board of Directors</a>
                            <a href="./rifteam/advisiorybord" class="dropdown-item">Advisiory Board Members</a>
                            <a href="./rifteam/team" class="dropdown-item">Team</a>
                            <a href="./profiles" class="dropdown-item">Incubatees Profiles</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="./price" class="dropdown-item">Membership Plans</a>
                            <a href="./service" class="dropdown-item">RIF Services</a>
                        </div>
                    </div>
                    <a href="./query" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-danger bg-header bg-header2" style="margin-bottom: 10px;">
            <div class="row">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">

                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Content -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <?php
                        if ($_POST['searchtitle'] != '') {
                            $st = $_SESSION['searchtitle'] = $_POST['searchtitle'];
                        }
                        $st;


                        if (isset($_GET['pageno'])) {
                            $pageno = $_GET['pageno'];
                        } else {
                            $pageno = 1;
                        }
                        $no_of_records_per_page = 8;
                        $offset = ($pageno - 1) * $no_of_records_per_page;


                        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                        $result = mysqli_query($con, $total_pages_sql);
                        $total_rows = mysqli_fetch_array($result)[0];
                        $total_pages = ceil($total_rows / $no_of_records_per_page);


                        $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.PostTitle like '%$st%' and tblposts.Is_Active=1 LIMIT $offset, $no_of_records_per_page");

                        $rowcount = mysqli_num_rows($query);
                        if ($rowcount == 0) {
                            echo "No record found";
                        } else {
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                                <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                    <div class="blog-item bg-light rounded overflow-hidden">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img class="img-fluid" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" style="width: 400px; height: 250px;" alt="">
                                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo htmlentities($row['category']); ?></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="d-flex mb-3">
                                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?= date('F jS, Y', strtotime($row['postingdate'])); ?></small>
                                            </div>
                                            <h4 class="mb-3 newstrim2"><?php echo htmlentities($row['posttitle']); ?></h4>
                                            <p class="newstrim"><?php echo htmlentities($row['postdetails']); ?></p>
                                            <a class="text-uppercase" href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>">Read More <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php } ?>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <form name="search" action="search.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control p-3" name="searchtitle" placeholder="Search for..." required>
                                <button class="btn btn-danger px-4"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <?php $query = mysqli_query($con, "select id,CategoryName from tblcategory");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>

                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="category.php?catid=<?php echo htmlentities($row['id']) ?>"><i class=" bi bi-arrow-right me-2"></i><?php echo htmlentities($row['CategoryName']); ?></a>

                            <?php } ?>
                        </div>
                    </div>
                    <!-- Category End -->
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp marginlow" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-danger p-4">
                        <a href="#" class="navbar-brand">
                            <h1 class="m-0">

                                <img src="./img/favicon.png" class="logoimg" alt="">
                            </h1>
                        </a>
                        <p class="mt-3 mb-4" style="text-align: justify;">RIF is focussed to provide faster growth to
                            new ventures, incubatees for
                            successful commercialisation of technology/product through a combination of Accelerator
                            Program, Alumni Connect, Corporate Market Access.</p>

                        <div class="input-group" style="justify-content: center; display: flex; align-items: center;">
                            <a href="./contact"> <button class="btn btn-dark">Get Started</button></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-danger me-2"></i>
                                <a href="https://goo.gl/maps/bQJ4NGAnkuDzsSr87" style="color:aliceblue;" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='aliceblue'" target="_blank">RIF, MJPRU, Bareilly</a>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-danger me-2"></i>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@rifmjpru.com" style="color:aliceblue;" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='aliceblue'" target="_blank">info@rifmjpru.com</a>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-danger me-2"></i>
                                <a href="tel:+91 9412510763" style="color:aliceblue;" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='aliceblue'" target="_blank">+91 9412510763</a>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-danger me-2"></i>
                                <a href="tel:+91 9412510763" style="color:aliceblue;" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='aliceblue'" target="_blank">+91 8979794345</a>

                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://twitter.com/mjp_bareilly"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.facebook.com/mjpruofficial/"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.linkedin.com/school/mjpru-bareilly/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.instagram.com/mjpru.official"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" target="_blank" href="https://www.youtube.com/channel/UCzUtKWfqBhlNIQzc59jdFBQ"><i class="fab fa-youtube fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="./"><i class="bi bi-arrow-right text-danger me-2"></i>Home</a>
                                <a class="text-light mb-2" href="./about"><i class="bi bi-arrow-right text-danger me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="./service"><i class="bi bi-arrow-right text-danger me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="./rifteam/team"><i class="bi bi-arrow-right text-danger me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="./image-gallery"><i class="bi bi-arrow-right text-danger me-2"></i>Image Gallery</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="./query"><i class="bi bi-arrow-right text-danger me-2"></i>Contact Us</a>
                                <a class="text-light mb-2" href="./price"><i class="bi bi-arrow-right text-danger me-2"></i>Membership Plan</a>
                                <a class="text-light mb-2" href="./profiles"><i class="bi bi-arrow-right text-danger me-2"></i>Incubatees Profiles</a>
                                <a class="text-light mb-2" href="./contact"><i class="bi bi-arrow-right text-danger me-2"></i>Application Form</a>
                                <a class="text-light mb-2" href="./membershipform"><i class="bi bi-arrow-right text-danger me-2"></i>Membership Form</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <a style="text-decoration: none; color: #fff;" href="./admin">
                        <p class="mb-0">RIF &copy; <span id="year"> </span> | All Rights Reserved.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" id="scroll" style="display: none;"><span></span></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



</body>

</html>