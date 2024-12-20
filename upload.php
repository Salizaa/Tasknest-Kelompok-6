<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasknest</title>
    <link rel="icon" href="images/book.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navbar Start -->
          <nav class="navbar navbar-expand-lg navbar-dark  rounded-bottom-4" style=" background-color: white;">
            <div class="container">
              <a class="navbar-brand ms-0" href="index.html"><img data-aos="zoom-in" width="70px" src="images/book.png" class="img-fluid" alt=""></a>
              <h3 data-aos="zoom-in" style="color: rgb(3, 41, 3);">Tasknest</h3>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" data-aos="zoom-in" aria-current="page" style="color: rgb(3, 41, 3);" href="index.php"><strong>Home</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-aos="zoom-in" aria-current="page" style="color: rgb(3, 41, 3);" href="tugas.php"><strong>Tugas</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-aos="zoom-in" aria-current="page" style="color: rgb(3, 41, 3);" href="upload.php"><strong>Upload Tugas</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-aos="zoom-in" aria-current="page" style="color: rgb(3, 41, 3);" href="logout.php"><strong>Logout</strong></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<!-- Navabar end -->

<!-- Home Start -->
 <section class="home" id="home">
  <div class="container">
    <div class="row d-flex justify-content-center" data-aos="fade-up"
    data-aos-duration="3000">
      <div class="col-lg-5 col-md-6 col-10 text-center text-md-start mt-5" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0%, 0px);">
        <h1 class="pt-5">
            <strong>Buat Tugas Kamu Lebih Mudah Dengan Menggunakan Tasknest</strong>
        </h1>
        <p>
          Kami Menyediakan Paltform Pengecekan dan
          <br>
           Upload Tugas<strong> Berbasis Website</strong>
        </p>
        <div class="col-12">
          <button type="submit" class="btn" style="background-color: #2f77ff;"><a style="color: black; text-decoration: none;" href="index.php">Kunjungi Sekarang</a></button>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-12 text-center text-md-end">
        <img class="w-100"  src="images/book.png" alt="">
      </div>
    </div>
  </div>
 </section>
<!-- Home End -->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2f77ff" fill-opacity="1" d="M0,96L34.3,128C68.6,160,137,224,206,229.3C274.3,235,343,181,411,160C480,139,549,149,617,138.7C685.7,128,754,96,823,117.3C891.4,139,960,213,1029,240C1097.1,267,1166,245,1234,202.7C1302.9,160,1371,96,1406,64L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
<!-- Problem -->
<section class="problem mt-0" id="home" style="background-color: #2f77ff;">
  <div class="container">
    <div class="row d-flex justify-content-center" data-aos="fade-up"data-aos-duration="3000">
        <div class="col-12">
        <div class="container">
        <h1 class="text-center">FORM UPLOAD TUGAS BARU</h1>
        <form id="dataForm" onsubmit="return confirm('Apakah anda yakin ingin mengupload ?')" class="d-inline">
            
            <input type="hidden" id="id" name="id">
            <label for="title"  class="label-form">Title:</label>
            <input type="title" class="form-control" id="title" name="title" required>

            <label for="notes" class="label-form">Notes:</label>
            <input type="text" class="form-control" id="notes" name="notes" required>

            <label for="category" class="label-form">Categori:</label>
            <select name="category"  class="form-control"id="category">
                <option value="" hidden>Choose</option>
                <option value="work">Work</option>
                <option value="education">Education</option>
                <option value="personal">Personal</option>
            </select>

            <label for="deadline" class="label-form">Deadline</label>
            <input type="date" class="form-control" name="deadline" id="deadline">

            
            <label for="user_id" class="label-form">Masukan Nama Kamu:</label>
            <select name="user_id"  class="form-control"id="user_id" name="user_id">
                <option value="" hidden>Choose</option>
                <option value="1">Desinta Putri</option>
                <option value="2">Jasmine Aulia</option>
                <option value="3">haris eka</option>
                <option value="4">Saliza Dewangga</option>
            </select>

            <button type="submit" id="submitButton" class="btn btn-secondary mt-3 align-items-center">Submit</button>
        </form>
    </div>
      </div>
    </div>
  </div>
</section>

<!-- Problem End -->
<div class="wave-2">
    <svg viewBox="0 0 1366 231" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0 205.59L33.1822 179.025C64.5209 153.615 130.885 102.795 195.406 98.175C259.927 93.555 324.448 136.29 390.812 132.825C455.333 128.205 519.854 77.385 586.219 77.385C650.74 77.385 715.26 128.205 779.781 136.29C846.146 145.53 910.667 110.88 975.188 98.175C1041.55 85.47 1106.07 93.555 1170.59 120.12C1235.11 145.53 1301.48 188.265 1332.82 209.055L1366 231V0H1332.82C1301.48 0 1235.11 0 1170.59 0C1106.07 0 1041.55 0 975.188 0C910.667 0 846.146 0 779.781 0C715.26 0 650.74 0 586.219 0C519.854 0 455.333 0 390.812 0C324.448 0 259.927 0 195.406 0C130.885 0 64.5209 0 33.1822 0H0V205.59Z" fill="#2f77ff"></path>
    </svg>
 </div>
 <div class="col text-center">
          <div class="col">
            <p class="mt-2 mb-5">Copyright <a href="" style="text-decoration: none;"><strong>Tasknest.co.id</strong></a>  © 2024 <strong>Tasknest </strong>- All Rights Reserved.</p>
          </div>
        </div>
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  <script src="script.js"></script>
</body>
</html>