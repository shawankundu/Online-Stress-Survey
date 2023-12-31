<?php
session_start();
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
            <div class="row">
                <div class="col-lg-12 col-12" style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                    <div class="question-card col-sm-10">
                        <h2 class="mb-4 h2-titel">
                            <span style="color: white;">Online Stress Survey<br>
                                <h5>Answer the following questions</h5>
                            </span>
                        </h2>
                    </div>
                </div>
                <form action="form_action.php" method="post" onsubmit="return validateForm()">
                    <input type="hidden" name="question_page" value="10">
                    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id'] ?>">
                    <input type="hidden" name="student_name" id="student_name" value="<?php echo $_SESSION['name'] ?>">

                    <div class="col-lg-12 col-12" data-aos="fade-down" data-aos-delay="200">
                        <h4>Do you feel under pressure from deadlines ?</h4>
                        <div class="question-card col-sm-10 position-relative" style="height: 145px;" role="group">
                            <div class="position-absolute">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q28" id="gridRadios90" value="1,always">
                                    <label class="form-check-label" for="gridRadios90">
                                        Always
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q28" id="gridRadios91" value="0,sometimes">
                                    <label class="form-check-label" for="gridRadios91">
                                        Sometimes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q28" id="gridRadios92" value="-1,never">
                                    <label class="form-check-label" for="gridRadios92">
                                        Never
                                    </label>
                                </div>
                            </div>
                            <div class="position-absolute gif border">
                                <img src="https://media.tenor.com/w5p8dTeVBHgAAAAC/solicy-deadline.gif" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-12" data-aos="fade-up" data-aos-delay="200">
                        <h4>Do you feel rested ?</h4>
                        <div class="question-card col-sm-10 position-relative" style="height: 145px;" role="group">
                            <div class="position-absolute">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q29" id="gridRadios8" value="-1,always">
                                    <label class="form-check-label" for="gridRadios8">
                                        Always
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q29" id="gridRadios9" value="0,sometimes">
                                    <label class="form-check-label" for="gridRadios9">
                                        Sometimes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q29" id="gridRadios10" value="1,never">
                                    <label class="form-check-label" for="gridRadios10">
                                        Never
                                    </label>
                                </div>
                            </div>
                            <div class="position-absolute gif border">
                                <img src="https://media.tenor.com/zeHCbNZKLZQAAAAC/rested-well-rested.gif" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 d-grid mb-3 gap-2 d-flex justify-content-between">
                        <a class="page-link" href="page9.html">Previous</a>
                        <button type="submit" class="page-link">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function validateForm() {
            var group1RadioButtons = document.getElementsByName('q28');
            var group2RadioButtons = document.getElementsByName('q29');

            // Check if at least one option is selected in Group 1
            var group1Selected = false;
            for (var i = 0; i < group1RadioButtons.length; i++) {
                if (group1RadioButtons[i].checked) {
                    group1Selected = true;
                    break;
                }
            }

            // Check if at least one option is selected in Group 2
            var group2Selected = false;
            for (var i = 0; i < group2RadioButtons.length; i++) {
                if (group2RadioButtons[i].checked) {
                    group2Selected = true;
                    break;
                }
            }

            // Display an alert if either group is not selected
            if (!group1Selected || !group2Selected) {
                alert("Please select an option from each quistion.");
                return false;
            }
        }
    </script>
</body>

</html>