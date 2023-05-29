<?php
session_start();
include('./assets/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RIF - Rohilkhand Incubation Foundation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="RIF, Rohilkhand Incubation Foundation" name="keywords">
    <meta content="RIF is focussed to provide faster growth to new ventures, incubatees for successful commercialisation of technology/product through a combination of Accelerator Program, Alumni Connect, Corporate Market Access." name="description">

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
    <link href="css/about.css" rel="stylesheet">

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
                    <a href="#" class="nav-item nav-link active">Home</a>
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
                <a href="contact" class="btn btn-danger py-2 px-4 ms-3">Apply Now</a>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.webp" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center display-2">
                        <div style="max-width: 900px; margin: auto;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Rohilkhand Incubation Foundation
                            </h1>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown display-color">A SECTION-8 COMPANY PROMOTED BY</h5>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown display-color">MAHATMA JYOTIBA PHULE ROHILKHAND UNIVERSITY</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.webp" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center display-2">
                        <div style="max-width: 900px; margin: auto;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Rohilkhand Incubation Foundation
                            </h1>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown display-color">A SECTION-8 COMPANY PROMOTED BY</h5>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown display-color">MAHATMA JYOTIBA PHULE ROHILKHAND UNIVERSITY</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.webp" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center display-2">
                        <div style="max-width: 900px; margin: auto;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Rohilkhand Incubation Foundation
                            </h1>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown display-color">A SECTION-8 COMPANY PROMOTED BY</h5>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown display-color">MAHATMA JYOTIBA PHULE ROHILKHAND UNIVERSITY</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.webp" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center display-2">
                        <div style="max-width: 900px; margin: auto;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Rohilkhand Incubation Foundation
                            </h1>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown display-color">A SECTION-8 COMPANY PROMOTED BY</h5>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown display-color">MAHATMA JYOTIBA PHULE ROHILKHAND UNIVERSITY</h5>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 marginlow wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendors/12a-80G-1.webp" style="height: 60px; width: 120px;" alt="">
                    <img src="img/vendors/Captur11e.webp" style="height: 60px; width: 120px;" alt="">
                    <img src="img/vendors/g20-logo.webp" style="height: 60px; width: 120px;" alt="">
                    <img src="img/vendors/ngo-darpan.webp" style="height: 60px; width: 120px;" alt="">
                    <img src="img/vendors/PngItem_2411963.webp" style="height: 60px; width: 120px;" alt="">
                    <img src="img/vendors/startinup.webp" style="height: 60px; width: 120px;" alt="">
                    <img src="img/vendors/startup.webp" style="height: 60px; width: 120px;" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <!-- About Start -->
    <div class="container-fluid py-1 marginlow wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 marginlow">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <!-- <h5 class="fw-bold text-danger text-uppercase">About Us</h5> -->
                        <h1 class="mb-0">We Incubate, Nourish & Grow Startups</h1>
                    </div>
                    <p class="mb-4" style="text-align: justify;">We craft to leverage the inherent skills, which enables
                        to unleash the full
                        potential of core competencies. Encouraging innovation in technology is a key point of ours. We
                        love to experiment, innovate & play with technology, ensuring it helps create a unique
                        differentiation from the crowd. We craft things with innovation for the next big Startups.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-danger me-3"></i>Mentorship</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-danger me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-danger me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-danger me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-danger d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-danger mb-0"><a href="tel:+91 9412510763" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='#8B1695'" target="_blank">+91 9412510763</a></h4>
                        </div>
                    </div>
                    <a href="contact" class="btn btn-danger py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Apply
                        Now</a>
                </div>
                <div class="col-lg-5 marginlow" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/art/about1.webp" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid py-3 marginlow wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-danger text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-danger rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>IMMERSIVE EXPERIENCE</h4>
                            <p class="mb-0">Giving you the experience advantage for your application</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-danger rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-robot text-white"></i>
                            </div>
                            <h4>COGNITIVE AUTOMATION</h4>
                            <p class="mb-0">AI Powered Automation solving grand business challenges</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/art/why-us.webp" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-danger rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>DIGITAL DESIGN THINKING</h4>
                            <p class="mb-0">Creating impactful designs for products and services</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-danger rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-database text-white"></i>
                            </div>
                            <h4>BIG DATA</h4>
                            <p class="mb-0">Tools, Techniques, Expertise to handle huge amount fo data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- news Start -->

    <div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">News and Events</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">

                <?php
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


                $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">

                            <img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h5 class="text-primary mb-1 newstrim2"><?php echo htmlentities($row['posttitle']); ?></h5>
                            </div>
                        </div>
                        <div class="pt-4 px-5 ">
                            <p class="newstrim"><?php echo strip_tags($row['postdetails']); ?></p>
                        </div>
                        <a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>" class="btn btn-danger btnnews">Read More
                            &rarr;</a>
                        <div class="card-footer text-muted">
                            Posted on <?= date('F jS, Y', strtotime($row['postingdate'])); ?>

                        </div>
                    </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-fluid marginlow wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 marginlow">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-danger text-uppercase">Our Services</h5>
                <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <img src="https://img.icons8.com/fluency/48/null/customer-support.png" />
                        </div>
                        <h4 class="mb-3">360° Support for Business</h4>
                        <p class="m-0">Introducing 360 Business Support. Problem Solving Made Easy. Home: Welcome. Home:
                            Bookings Widget
                        </p>
                        <!-- <a class="btn btn-lg btn-danger rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/null/external-branding-marketing-agency-flaticons-lineal-color-flat-icons.png" />
                        </div>
                        <h4 class="mb-3">Branding</h4>
                        <p class="m-0">Branding is the process of creating a distinct identity for a business
                        </p>
                        <!-- <a class="btn btn-lg btn-danger rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <img src="https://img.icons8.com/color/48/null/add-contact-to-company.png" />
                        </div>
                        <h4 class="mb-3">Business Support Service</h4>
                        <p class="m-0">The business support services refer to those business activities that act as
                            auxiliaries to trade
                        </p>
                        <!-- <a class="btn btn-lg btn-danger rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/40/null/external-web-development-ux-and-ui-icons-flaticons-lineal-color-flat-icons.png" />
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="m-0">Web development is the work involved in developing a website for the Internet
                        </p>
                        <!-- <a class="btn btn-lg btn-danger rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <img src="https://img.icons8.com/external-smashingstocks-flat-smashing-stocks/40/null/external-Android-notification-and-mailing-smashingstocks-flat-smashing-stocks.png" />
                        </div>
                        <h4 class="mb-3">Apps Development</h4>
                        <p class="m-0">Mobile application development is the process to making software for smartphones
                            and digital assistants
                        </p>
                        <!-- <a class="btn btn-lg btn-danger rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-danger rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For any Query</h3>
                        <p class="text-white mb-3" style="text-align: justify;">Please do not hesitate to contact me if
                            I can be of any further
                            assistance. Please let me know if I can provide further information on this matter.</p>
                        <h2 class="mb-0" style="color: #fff;"><a class="text-white" href="tel:+91 9412510763" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='#fff'" target="_blank">+91 9412510763</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Image Galery start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="padding-bottom: 0rem;">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-danger">Rohilkhand Incubation Foundation</h5>
                <h1 class="mb-0">Image Gallery</h1>
            </div>

            <ul class="gridg ulg">
                <li>
                    <figure class="grid__figure figg">
                        <img src="img/Image-gallery/001.webp" alt="">

                    </figure>
                </li>

                <li>
                    <figure class="grid__figure figg">
                        <img src="img/Image-gallery/002.webp" alt="">

                    </figure>
                </li>
                <li>
                    <figure class="grid__figure figg">
                        <img src="img/Image-gallery/003.webp" alt="">

                    </figure>
                </li>

                <li>
                    <figure class="grid__figure figg">
                        <img src="img/Image-gallery/004.webp" alt="">

                    </figure>
                </li>
                <li>
                    <figure class="grid__figure figg">
                        <img src="img/Image-gallery/005.webp" alt="">

                    </figure>
                </li>
                <li>
                    <figure class="grid__figure figg">
                        <img src="img/Image-gallery/006.webp" alt="">

                    </figure>
                </li>
                <li>
                    <figure class="grid__figure figg">
                        <img src="img/Image-gallery/007.webp" alt="">

                    </figure>
                </li>
                <li>
                    <figure class="grid__figure figg">
                        <img src="img/Image-gallery/008.webp" alt="">

                    </figure>
                </li>
                <li>
                    <figure class="grid__figure figg">
                        <img src="img/Image-gallery/009.webp" alt="">

                    </figure>
                </li>
            </ul>
        </div>
    </div>


    <!-- Query Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="padding-top: 1rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-danger text-uppercase">Need Support</h5>
                        <h1 class="mb-0">Please Feel Free to Contact Us!</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-danger me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-danger me-3"></i>24/7 telephone support
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-danger d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="mb-0" style="color: #fff;"><a href="tel:+91 9412510763" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='#fff'" target="_blank">+91 9412510763</a></h4>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">

                        <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.51405099208!2d79.45412877547005!3d28.373537875807163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a0078f24af66bf%3A0x13d3bd9b0afbb21e!2sRohilkhand%20Incubation%20Foundation%2C%20MJPRU!5e0!3m2!1sen!2sin!4v1681455341499!5m2!1sen!2sin" frameborder="0" style="min-height: 250px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-danger rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form action="https://fabform.io/f/mQrvuH4" method="POST">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" name="option" style="height: 55px;" required>
                                        <option selected>Select A Query</option>
                                        <option value="Mebership Related">Mebership Related</option>
                                        <option value="Form Related">Form Related</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Query End -->


    <!-- Vendor Start -->
    <div class="container-fluid marginlow wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendors/vendor-1.webp" alt="">
                    <img src="img/vendors/vendor-2.webp" alt="">
                    <img src="img/vendors/vendor-3.webp" alt="">
                    <img src="img/vendors/vendor-4.webp" alt="">
                    <img src="img/vendors/vendor-5.webp" alt="">
                    <img src="img/vendors/vendor-6.webp" alt="">
                    <img src="img/vendors/vendor-7.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


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
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-danger me-2"></i>Home</a>
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
                    <script>
                        document.getElementById("year").innerHTML = (new Date().getFullYear());
                    </script>
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


    <script src="js/main.js"></script>
</body>

</html>