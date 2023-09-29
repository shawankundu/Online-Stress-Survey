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
                    <input type="hidden" name="question_page" value="7">
                    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id'] ?>">
                    <input type="hidden" name="student_name" id="student_name" value="<?php echo $_SESSION['name'] ?>">

                    <div class="col-lg-12 col-12" data-aos="fade-up" data-aos-delay="200">
                        <h4>Do you enjoy your life ?</h4>
                        <div class="question-card col-sm-10 position-relative" style="height: 145px;" role="group">
                            <div class="position-absolute">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q19" id="gridRadios64" value="-1,always">
                                    <label class="form-check-label" for="gridRadios64">
                                        Always
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q19" id="gridRadios65" value="0,sometimes">
                                    <label class="form-check-label" for="gridRadios65">
                                        Sometimes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q19" id="gridRadios66" value="1,never">
                                    <label class="form-check-label" for="gridRadios66">
                                        Never
                                    </label>
                                </div>
                            </div>
                            <div class="position-absolute gif border">
                                <img src="https://media.tenor.com/2avy8KCjiD0AAAAC/your-happy-workplace-wendy-conrad.gif" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-12" data-aos="fade-up" data-aos-delay="200">
                        <h4>Are you afraid for your future ?</h4>
                        <div class="question-card col-sm-10 position-relative" style="height: 145px;" role="group">
                            <div class="position-absolute">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q20" id="gridRadios67" value="1,always">
                                    <label class="form-check-label" for="gridRadios67">
                                        Always
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q20" id="gridRadios68" value="0,sometimes">
                                    <label class="form-check-label" for="gridRadios68">
                                        Sometimes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q20" id="gridRadios69" value="-1,never">
                                    <label class="form-check-label" for="gridRadios69">
                                        Never
                                    </label>
                                </div>
                            </div>
                            <div class="position-absolute gif border">
                                <img src="https://media.tenor.com/c6OPsKeOqpwAAAAC/future-squidward.gif" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-12" data-aos="fade-up" data-aos-delay="200">
                        <h4>Do you do things that you don't want to but you have to</h4>
                        <div class="question-card col-sm-10 position-relative" style="height: 145px;" role="group">
                            <div class="position-absolute">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q21" id="gridRadios70" value="1,always">
                                    <label class="form-check-label" for="gridRadios70">
                                        Always
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q21" id="gridRadios71" value="0,sometimes">
                                    <label class="form-check-label" for="gridRadios71">
                                        Sometimes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q21" id="gridRadios72" value="-1,never">
                                    <label class="form-check-label" for="gridRadios72">
                                        Never
                                    </label>
                                </div>
                            </div>
                            <div class="position-absolute gif border">
                                <img src="https://media.tenor.com/SeTA68kSbugAAAAC/brooklyn-nine-nine-amy-santiago.gif" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 d-grid mb-3 gap-2 d-flex justify-content-between">
                        <a class="page-link" href="page6.php">Previous</a>
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
            var group1RadioButtons = document.getElementsByName('q19');
            var group2RadioButtons = document.getElementsByName('q20');
            var group3RadioButtons = document.getElementsByName('q21');

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

            // Check if at least one option is selected in Group 3
            var group3Selected = false;
            for (var i = 0; i < group3RadioButtons.length; i++) {
                if (group3RadioButtons[i].checked) {
                    group3Selected = true;
                    break;
                }
            }

            // Display an alert if either group is not selected
            if (!group1Selected || !group2Selected || !group3Selected) {
                alert("Please select an option from each quistion.");
                return false;
            }
        }
    </script>
</body>

</html>