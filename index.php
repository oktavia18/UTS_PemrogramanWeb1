<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Dinamis</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Website Dinamis</title>
    <link rel="stylesheet" href="path/to/your/styles.css"> <!-- Ganti dengan path CSS Anda -->
</head>
<body>
    <header>
        <h1 class="text-center p-3">Membuat website dinamis</h1>
        <!-- navbar -->
        <?php include "includes/navbar.php"; ?>
        <!-- ./navbar -->
    </header>

    <main>
        <section>
            <p class="text-center">By Oktavia Rizkha</p>
        </section>
    </main>

  <!-- Main Container -->
  <div class="container" id="pageContent">
    <!-- Added an ID for search targeting -->
    <?php
        // Check if a specific page is requested
        if (isset($_GET['page'])) {
          $page = $_GET['page'];
          
          // Switch case to include the corresponding page
          switch ($page) {
            case 'home':
              include "home.php";
              break;
            case 'about':
              include "about.php";
              break;
            case 'contact':
              include "contact.php";
              break;
            case 'form':
              include "form.php";
              break;
            case 'datatables':
              include "datatables.php";
              break;  
            case '404':
             include "404.php";
             break;  
            default:
              include "home.php"; // Default to home if no valid page is found
          }
        } else {
          // Default to home page if no page parameter is provided
          include "home.php";
        }
      ?>
  </div>

  <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Kontak Kami</h5>
          <p>Email: info@example.com</p>
          <p>Telepon: (123) 456-7890</p>
        </div>
        <div class="col-md-4">
          <h5>Ikuti Kami</h5>
          <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
        </div>
        <div class="col-md-4">
          <h5>Lokasi</h5>
          <p>Jl. Contoh No.123, Kota Contoh</p>
          <p>Indonesia</p>
        </div>
      </div>
      <div class="text-center mt-3">
        <small>&copy; 2024 Pemrograman Web 1. All rights reserved.</small>
      </div>
    </div>
  </footer>


  <!-- JavaScript -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/datatables/dataTables.js"></script>

  <!-- Initialize DataTable -->
  <script>
  // Initialize DataTables when the DOM content is fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector("#example")) {
      new DataTable("#example"); // Default zero configuration
    }
  });
  </script>
</body>

</html>