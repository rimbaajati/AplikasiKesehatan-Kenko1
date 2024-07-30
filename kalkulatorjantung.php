<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Risiko Serangan Jantung</title>
    <?php require "partials/header.php"?>
    <style>
        body{
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
            padding-top: 150px;
            padding :150px;
            
        }
        .judul-intro{
            font-family: "Roboto", sans-serif;
            font-size: 30px;
        }
        .kotak-intro{
            margin: 0 auto;
            border: 5px solid #ddd;
            border-radius: 10px;
            padding : 30px;
            margin-bottom: 40px;
        }
        .kotak-intro img{
            width: 600px;
            margin-bottom: 40px;
            text-align: center;
        }
        .kotak-intro p{
            text-align: justify;
            color :black;
        }
        .kotak{
            width: 550px;
            margin: 0 auto;
            border: 2px solid black;
            padding: 30px;
        }
        .kotak p{
            color: black;
        }
        .masuk{
            margin-bottom: 50px;
        }
        .masuk p{
            margin-bottom: 2px;
        }
        .radio-gank{
            display: flex; 
        }
        .radio-gank label{
            margin-right: 100px;
        }
        .radio-gank input[type="radio"]{
            margin-right: 20px;
        }
        .judul{
            font-size: 30px;
            text-align: center;
            color:black;
            margin-bottom: 70px;
        }
        label{
            display:block;
            color:black;
        }
    </style>
</head>
<body>

    <div class="kotak-intro">
    <div class="judul-intro"><p>Serangan Jantung itu apa sih ?</p></div>
    <img src="picture/seranganjantung.jpg" alt="Serangan Jantung">
    <p>Serangan jantung, atau infark miokard, terjadi ketika aliran darah ke otot jantung tersumbat,<br>
    dan berbagai faktor risiko dapat meningkatkannya. Faktor risiko yang tidak dapat dikendalikan meliputi<br>
    usia, jenis kelamin, riwayat keluarga, dan ras atau etnis. Faktor yang dapat dikendalikan termasuk tekanan<br>
    darah tinggi, kolesterol tinggi, diabetes, merokok, obesitas, kurang aktivitas fisik, diet tidak sehat,<br>
    stres, dan konsumsi alkohol berlebih. Pencegahan serangan jantung dapat dilakukan dengan menjaga pola<br>
    makan sehat, berolahraga teratur, menghindari merokok, mengelola stres, serta mengontrol kondisi medis seperti<br>
    hipertensi dan diabetes. Mengenali dan mengelola faktor risiko ini sangat penting untuk mengurangi kemungkinan<br>
    terkena serangan jantung.</p>
    </div>

    <div class="kotak">
    <div class="judul">
        <p>Kalkulator Risiko Serangan Jantung</p>
    </div>
    <form>
        <div class="masuk"> <!-- Input Gender !----------------------------------------->
        <p>Jenis Kelamin</p>
        <div class="radio-gank">
        <input type="radio" id="pria" name="gender">
        <label for="pria">Pria</label>

        <input type="radio" id="wanita" name="gender">
        <label for="wanita">Wanita</label>
        </div>
        </div> <!-- End Input Gender ------------------------------------------------->

        <div class="masuk"> <!-- Input Umur !------------------------------------------>
        <p>Berapa Usia Anda?</p>
        <input type="number" min="0" id="usia">
        </div> <!-- End Input Umur ---------------------------------------------------->

        <div class="masuk"> <!-- Input Berat Badan & Tinggi!----------------------------------------->
        <p>Berapa Berat Badan & Tinggi Badan Anda?</p>
        <input type="number" min="1" placeholder="Berat (Kg)">
        <input type="number" min="1" placeholder="Tinggi (cm)">
        </div> <!-- End Input Berat Badan & Tinggi ---------------------------------------------------->

        <div class="masuk"> <!-- Input Merokok!----------------------------------------->
        <p>Apa Kamu Merokok?</p>
        <div class="radio-gank">
        <input type="radio" id="ya" name="merokok">
        <label for="ya">Iya dong</label>

        <input type="radio" id="tidak" name="merokok">
        <label for="tidak">Tidak</label>
        </div>
        </div> <!-- End Input Merokok ---------------------------------------------------------->

        <div class="masuk"> <!-- Input Diabetes!----------------------------------------->
        <p>Apakah kamu memiliki risiko Diabetes?</p>
        <div class="radio-gank">
        <input type="radio" id="ya" name="diabetes">
        <label for="ya">Iya i to</label>

        <input type="radio" id="tidak" name="diabetes">
        <label for="tidak">Alhamdulillah Tidak</label>
        </div>
        </div> <!-- End Input Diabetes!---------------------------------------->

        <div class="masuk"> <!-- Input Riwayat Penyakit Jantung!----------------------------------------->
        <p>Apakah kamu pernah terdiagnosa memiliki penyakit<br> seperti jantung koroner,
            stroke atau penyakit jantung dan pembuluh darah lainnya?</p>
        <div class="radio-gank">
        <input type="radio" id="ya" name="riwayat">
        <label for="ya">Iyaa</label>

        <input type="radio" id="tidak" name="riwayat">
        <label for="tidak">Alhamdulillah tidak</label>
        </div>
        </div> <!-- End Riwayat Jantung ------------------------------------------------------>

        <div class="masuk"> <!-- Input Tekanan Darah!----------------------------------------->
        <p>Berapa tekanan darah kamu?</p>
        <label for="systolic">Tekanan Darah Sistolik (mmHg)<span style="color: red;">*</span></label><br>
        <input type="number" id="systolic" name="systolic" min="1" placeholder="Sistolik (mmHg)" required>
        </div> <!--End Input Tekanan Darah --------------------------------------------------------------->

        <div class="button">
            <input type="submit" value="Hitung!!!">
        </div>
        </div>
</body>
</html>