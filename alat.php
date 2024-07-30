<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kenkō Sentaa (健康センター)</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <?php require('partials/header.php'); ?>
  <style>
body {
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-style: normal;
}
.menu-alat {
  padding: 20px;
  background-color: #f8f9fa; /* Warna latar belakang */
  margin-top: 50px;
}
.container {
  max-width:fit-content;
  margin: 0 auto;
}
.slide-menu{
  margin: 0 auto;
}

.judul {
  text-align: center;
  margin-bottom: 20px;
  margin-top: 100px;
}

.menu-items {
  gap :30px;
  max-width: 70px;
  display: flex;
  flex-wrap: nowrap; /* Menghentikan wrap dan mengizinkan scroll horizontal */
  gap: 30px; /* Jarak antara setiap menu item */
  max-width: 100%; /* Lebar maksimum dari container */
  padding: 20px 0; /* Padding di atas dan bawah */
  justify-content: start;
}

.menu-item { /*perbox menu*/
  background-color: #fff;
  border: 4px solid #ddd; 
  border-radius: 8px;
  padding-top: 20px;
  text-align: center;
  transition: transform 0.3s ease;
  width: 250px;
  margin:0 auto;
  margin-bottom: 20px; /* Jarak bawah antar item */
  padding: 10px;
  flex: 0 0 calc(25% - 30px);
}

.menu-item:hover {
  transform: translateY(-5px); /* Efek mengangkat saat dihover */
}

.menu-item img {
  width: auto;
  height: 150px;
  margin-bottom: 10px;
}

.menu-item h4 {
  font-size: 18px;
  margin-bottom: 10px;
}
.menu-item h4{
  font-weight: bold;
}
.menu-item p {
  font-size: 14px;
  line-height: 1.6;
  color: #555;
  text-decoration: none;
}
</style>
</head>
<body>
<section class="menu-alat">
<div class="container" data-aos="fade-up">
    <div class="judul" data-aos="fade-down">
        <h3>Kalkulator Gizi Online</h3>
    </div>
    <div class="slide-menu">
        <div class="menu-items">
            <div class="menu-item">
                <a href="beratbadanideal.php">
                    <img src="picture/bmi.png" alt="Indeks BMI">
                    <h4>Kalkulator BMI</h4>
                    <p>Menghitung Berat badan Ideal berdasarkan<br>usia, berat badan dan tinggi badan.</p>
                </a>
            </div>
            <div class="menu-item">
              <a href="kaloriharian.php">
                <img src="picture/calories.png" alt="Kalori harian">
                <h4>Kalkulator Kalori Harian</h4>
                <p>Menghitung jumlah kalori yang perlu dikonsumsi</p>
                </a>
            </div>
            <div class="menu-item">
              <a href="rekomendasidiet.php">
                <img src="picture/diet.png" alt="Rekomendasi Diet">
                <h4>Rekomendasi Diet</h4>
                <p>Memberi rekomendasi diet berdasarkan berat badan, tinggi badan, dan usia.</p>
                </a>
            </div>
            <div class="menu-item">
                <img src="picture/analisispenyakit.png" alt="Rekomendasi Diet">
                <h4>Analisi Gejala Penyakit</h4>
                <p>Menganalisis kemungkinan penyakit <br> melalui gejala yang dirasakan</p>
            </div>
        </div>
        <div class="menu-items">
            <div class="menu-item">
                <a href="kalkulatorjantung.php">
                    <img src="picture/jantung.png" alt="Resiko Serangan Jantung">
                    <h4>Kalkulator Resiko Serangan Jantung</h4>
                    <p>menghitung risiko<br>serangan jantung pada tubuh</p>
                </a>
            </div>
            <div class="menu-item">
                <img src="picture/usiahamil.png" alt="Usia Kehamilan">
                <h4>Cek Usia Kehamilan</h4>
                <p>Memperkirakan usia kehamilan<br>berdasarkan hari pertama haid terakhir</p>
            </div>
            <div class="menu-item">
                <img src="picture/rokok.png" alt="Kalkulasi Rokok">
                <h4>Kalkulator Rokok</h4>
                <p>Menghitung biaya atau pengeluaran yang terkait dengan kebiasaan merokok</p>
            </div>
        </div>
    </div>
</div>

</section>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>