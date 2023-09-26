<?php
$class = $_POST['class'];
include '_db_con.php';
session_start();

if ('_db_con.php' == true) {
    # code...
    $stmt = $conn->prepare("insert into registration_user(class) values(?)");
    $stmt->bind_param("s", $class);
    $execval = $stmt->execute();
    // echo $execval;
    // echo "Registration successfully...";
    $stmt->close();
    $conn->close();
    header("location: page1.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Stress Survey</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/logo/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/logo/favicon/safari-pinned-tab.svg" color="#9a14e7">
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="theme-color" content="#ffffff">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@400;700&display=swap" rel="stylesheet">    
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body id="home">
    <!-- OBJECTIVE -->
    <section class="question section-padding pb-0" id="Objective" style="display: flex;">
        <div class="container">
            <div class="question-card col-lg-12 col-12" style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                <h2 class="mb-4 h2-titel">
                    <span>Online Stress Survey<br>
                        <h5>Answer the following questions</h5>
                    </span>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4>What is your Name ?(if you want)</h4>
                    <div class="col-sm-10">
                    
                        <input type="text" class="form-control" aria-label="Small" placeholder="<?php echo $_SESSION['name'] ?>"
                            aria-describedby="inputGroup-sizing-sm" disabled>
                    </div>
                </div>

                <div class="col-lg-12 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4>In which class do you study in ?</h4>
                    <div class="question-card col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="class" id="gridRadios1"
                                value="option1">
                            <label class="form-check-label" for="gridRadios1">
                                8
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="class" id="gridRadios2"
                                value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                9
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="class" id="gridRadios3"
                                value="option3">
                            <label class="form-check-label" for="gridRadios3">
                                10
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="class" id="gridRadios4"
                                value="option4">
                            <label class="form-check-label" for="gridRadios4">
                                11
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="class" id="gridRadios5"
                                value="option5">
                            <label class="form-check-label" for="gridRadios5">
                                12
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="class" id="gridRadios6"
                                value="option6">
                            <label class="form-check-label" for="gridRadios6">
                                College Student
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="class" id="gridRadios7"
                                value="option7">
                            <label class="form-check-label" for="gridRadios7">
                                Other
                            </label>
                        </div>
                    </div>
                </div>

                              
                <div class="col-sm-10 d-grid mb-3 gap-2 d-flex justify-content-end">
                    <a class="page-link" href="page1.php">Next</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Back on top -->
    <!-- <button type="button" class="btn btn-danger" id="btn-back-to-top">
        <i class="fa fa-arrow-up"></i>
    </button> -->

    <!-- Footer -->
    <!-- <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                    <h4 class="text-white" data-aos="fade-up" data-aos-delay="100">Common Research and Technology
                        Development Hub
                        <strong style="color:red">(CRTDH)</strong> on Affordable Healthcare
                    </h4>
                </div>
                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Contact Info</h4>
                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        +91 - 882 005 1894
                    </p>
                    <p>
                        <a href="#">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                            suman@mech.iitkgp.ac.in
                        </a>
                        </br>
                        <a href="#">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                            sohom.banner@gmail.com
                        </a>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4">Our Offce</h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i>
                        Second Floor (204), Bioscience Building, Diamond Jubilee Complex, IIT Kharagpur, West
                        Midnapur- 721302
                    </p>
                </div>
                <div class="col-lg-6 col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="copyright-text">&copy;
                        <script> document.write(new Date().getFullYear())</script> CRTDH
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> -->

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from www.crtdh.iitkgp.ac.in/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 08:17:13 GMT -->

</html>