<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Diet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            
        }
        .box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 350px;
        }

        .judul {
            text-align: center;
            margin-bottom: 20px;
        }

        .item-menu {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .label {
            font-weight: bold;
        }

        .input-data {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .input-data input[type="text"],
        .input-data select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .hasil {
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php require "partials/header.php"?>
    <div class="box">
        <div class="judul">
            <h3>Rekomendasi Diet</h3>
            <p>Masukkan data Anda untuk mendapatkan rekomendasi diet.</p>
        </div>
        <form id="dietForm">
            <div class="item-menu">
                <div class="label">
                    <label for="tinggibadan">Tinggi Badan</label>
                </div>
                <div class="input-data">
                    <input type="text" id="tinggibadan" name="tinggi">
                    <select id="satuan_tinggi" name="satuan_tinggi">
                        <option value="cm">cm</option>
                        <option value="inch">inch</option>
                    </select>
                </div>
                <div class="label">
                    <label for="beratbadan">Berat Badan</label>
                </div>
                <div class="input-data">
                    <input type="text" id="beratbadan" name="berat">
                    <select id="satuan_berat" name="satuan_berat">
                        <option value="kg">kg</option>
                        <option value="lbs">lbs</option>
                    </select>
                </div>
                <div class="label">
                    <label for="usia">Usia</label>
                </div>
                <div class="input-data">
                    <input type="text" id="usia" name="usia">
                </div>
                <div class="label">
                    <label for="gender">Jenis Kelamin</label>
                </div>
                <div class="input-data">
                    <select id="gender" name="gender">
                        <option value="male">Laki-laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </div>
                <div class="btn-container">
                    <button type="button" class="btn" onclick="hitungRekomendasiDiet()">Hitung</button>
                </div>
                <div class="hasil" id="hasil"></div>
            </div>
        </form>
    </div>
    </div>
    <script>
        function hitungRekomendasiDiet() {
            var tinggi = parseFloat(document.getElementById('tinggibadan').value);
            var berat = parseFloat(document.getElementById('beratbadan').value);
            var usia = parseInt(document.getElementById('usia').value);
            var satuanTinggi = document.getElementById('satuan_tinggi').value;
            var satuanBerat = document.getElementById('satuan_berat').value;
            var gender = document.getElementById('gender').value;

            // Konversi tinggi ke cm jika dalam inch
            if (satuanTinggi === 'inch') {
                tinggi *= 2.54; // 1 inch = 2.54 cm
            }

            // Konversi berat ke kg jika dalam lbs
            if (satuanBerat === 'lbs') {
                berat *= 0.453592; // 1 lbs = 0.453592 kg
            }

            // Hitung BMR (Basal Metabolic Rate) berdasarkan jenis kelamin
            var bmr;
            if (gender === 'male') {
                bmr = 88.362 + (13.397 * berat) + (4.799 * tinggi) - (5.677 * usia);
            } else if (gender === 'female') {
                bmr = 447.593 + (9.247 * berat) + (3.098 * tinggi) - (4.330 * usia);
            }

            // Hitung rekomendasi kalori per hari (aktivitas ringan)
            var kaloriHarian = bmr * 1.375;

            // Tentukan kategori diet
            var kategori = "";
            if (kaloriHarian < 1800) {
                kategori = "Diet Rendah Kalori";
            } else if (kaloriHarian < 2200) {
                kategori = "Diet Kalori Sedang";
            } else {
                kategori = "Diet Kalori Tinggi";
            }

            var hasil = document.getElementById('hasil');
            hasil.innerHTML = '<p>Kebutuhan Kalori Harian Anda: ' + kaloriHarian.toFixed(2) + ' kalori<br>Kategori Diet: ' + kategori + '</p>';
        }
    </script>
</body>
</html>
