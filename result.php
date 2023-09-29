<?php
include '_db_con.php';
include 'functions.php';
session_start();
$id = $_SESSION['id'];
$sql = "SELECT answer.student_id, answer.qusetion_no, answer.answer, answer.question_opt FROM `answer` WHERE student_id = '" . $id . "'";
$result = $conn->query($sql);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row['answer'];
  $data_opt[] = $row['question_opt'];
}
$sql_always = "SELECT answer.student_id, answer.qusetion_no, answer.answer, answer.question_opt FROM `answer` WHERE student_id = '" . $id . "' AND `question_opt` = 'always' ";
$sql_sometimes = "SELECT answer.student_id, answer.qusetion_no, answer.answer, answer.question_opt FROM `answer` WHERE student_id = '" . $id . "' AND `question_opt` = 'sometimes' ";
$sql_never = "SELECT answer.student_id, answer.qusetion_no, answer.answer, answer.question_opt FROM `answer` WHERE student_id = '" . $id . "' AND `question_opt` = 'never' ";
$always = $conn->query($sql_always)->num_rows;
$sometimes = $conn->query($sql_sometimes)->num_rows;
$never = $conn->query($sql_never)->num_rows;

$total = array_sum($data);

$stressLevel = 21;
$category = categorizeStressLevel($stressLevel);
$textColor = categorizeTextColor($stressLevel);
$content = getCategoryContent($stressLevel);
$imageURL = categorizeImage($stressLevel);

?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Online Stress Survey</title>
  <meta name="description" content="" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <!-- SCRIPTS -->
  <script src="assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="navbar-nav-left d-flex align-items-center" id="navbar-collapse">
            <!-- User -->
            <div class="avatar avatar-online">
              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </div>
          <div class="navbar-nav-right p-3 d-flex justify-content-between align-items-center">
            <div class="github-button">
              <strong>
                <?php echo ucwords($_SESSION['name']) ?>
              </strong>
            </div>
            <a class="page-link" href="logout.php">logout</a>
          </div>
        </nav>
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <!-- Order Statistics -->
              <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-center pb-0">
                    <div class="card-title mb-0">
                      <h5 class="m-0 me-2">Answer Summery</h5>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                      <div class="d-flex flex-column align-items-center gap-1">
                        <h2 class="mb-2">
                          <?php echo "<h2 style=\"color: $textColor;\"> $category</h2>";
                          echo "<span style=\"text-align: center;\"> $content </span>";
                          echo "<img style=\"text-align: center;\" src=\"$imageURL\" alt=\"$category\" width=\"300\" height=\"200\">";
                          ?>
                        </h2>
                        <br>
                      </div>
                      <div id="orderStatisticsChart"></div>
                    </div>
                    <ul class="p-0 m-0">
                      <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Always</h6>
                          </div>
                          <div class="user-progress">
                            <small class="fw-medium">
                              <?php echo $always ?>
                            </small>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Sometimes</h6>
                          </div>
                          <div class="user-progress">
                            <small class="fw-medium">
                              <?php echo $sometimes ?>
                            </small>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Never</h6>
                          </div>
                          <div class="user-progress">
                            <small class="fw-medium">
                              <?php echo $never ?>
                            </small>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--/ Order Statistics -->
            </div>
          </div>
          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , by IIT KGP <strong></strong>
              </div>
            </div>
          </footer>
          <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- SCRIPTS -->
  <script>
    let sometime = document
      .getElementsByClassName("user-progress")
      .item(1).innerText;
    let never = document
      .getElementsByClassName("user-progress")
      .item(2).innerText;

    function a() {
      let Always = document
        .getElementsByClassName("user-progress")
        .item(0).innerText;
      return Always;
    }
    console.log(a());
  </script>
</body>

</html>