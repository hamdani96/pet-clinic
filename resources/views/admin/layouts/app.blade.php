<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets_admin/img/favicon.png" rel="icon">
  <link href="assets_admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets_admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets_admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets_admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets_admin/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.layouts.navbar')

  <!-- ======= Sidebar ======= -->
  @include('admin.layouts.sidebar')

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets_admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_admin/vendor/chart.js/chart.umd.js"></script>
  <script src="assets_admin/vendor/echarts/echarts.min.js"></script>
  <script src="assets_admin/vendor/quill/quill.min.js"></script>
  <script src="assets_admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets_admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets_admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets_admin/js/main.js"></script>

</body>

</html>