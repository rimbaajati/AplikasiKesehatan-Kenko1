<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Kalori Harian</title>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    </head>
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
            width: 300px;
            margin:0 auto;
            margin-top: 200px;
        }

        .judul h4 {
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
<div class="header" id="header">
    <?php require "partials/header.php"?>
    </div>
    <div class="box" data-aos="fade-up">
        <div class="judul">
            <h4>Kalkulator Kalori Harian</h4>
        </div>
        <div class="item-menu">
            <div class="label">
                <label for="beratbadan">Berat Badan (kg)</label>
            </div>
            <div class="input-data">
                <input type="text" id="beratbadan" name="berat">
            </div>
            <div class="label">
                <label for="tinggibadan">Tinggi Badan (cm)</label>
            </div>
            <div class="input-data">
                <input type="text" id="tinggibadan" name="tinggi">
            </div>
            <div class="label">
                <label for="usia">Usia (tahun)</label>
            </div>
            <div class="input-data">
                <input type="text" id="usia" name="usia">
            </div>
            <div class="btn-container">
                <button class="btn" onclick="hitungKalori()">Hitung</button>
            </div>
            <div class="hasil" id="hasil"></div>
        </div>
    </div>
    <script>
        function hitungKalori() {
            var berat = parseFloat(document.getElementById('beratbadan').value);
            var tinggi = parseFloat(document.getElementById('tinggibadan').value);
            var usia = parseInt(document.getElementById('usia').value);

            if (isNaN(berat) || isNaN(tinggi) || isNaN(usia)) {
                alert('Masukkan nilai yang valid untuk berat badan, tinggi badan, dan usia.');
                return;
            }

            // Hitung kebutuhan kalori harian (contoh sederhana)
            // Formula yang digunakan bisa disesuaikan dengan kebutuhan lebih lanjut
            var kalori = hitungKaloriDariFormulaSederhana(berat, tinggi, usia);

            var hasil = document.getElementById('hasil');
            hasil.innerHTML = `<p>Kebutuhan Kalori Harian Anda adalah: ${kalori.toFixed(2)} kkal</p>`;
        }

        function hitungKaloriDariFormulaSederhana(berat, tinggi, usia) {
            // Contoh formula sederhana, bisa diganti dengan formula yang lebih kompleks
            var kalori = 10 * berat + 6.25 * tinggi - 5 * usia + 5;
            return kalori;
        }
    </script>
</body>
</html>
