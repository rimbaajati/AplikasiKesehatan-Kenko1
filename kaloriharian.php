<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Kalori Harian</title>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
        }

        .box {
            background-color: white;
            align-items: center;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin:0 auto;
            margin-top: 70px;
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
        .btn-hitung{
        background-color: #c2fbd7;
        border: none;
        color: green;
        box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
        padding: 3px 10px;
        padding-bottom: 7px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin: 0 auto;
        margin-top: 10px;
        border-radius: 100px;
        cursor: pointer;
        display: inline-block;
        transition: all 250ms;
        border: 0;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }
    .btn-hitung:hover{
        box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
        transform: scale(1.05) rotate(-1deg);
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
                <button class="btn-hitung" onclick="hitungKalori()">Hitung</button>
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
            hasil.innerHTML = `<img src="picture/food.png" alt="Food Image" style="width:70px; height:auto;"><p>Kebutuhan Kalori Harian Anda adalah: ${kalori.toFixed(2)} kkal</p>`;
        }

        function hitungKaloriDariFormulaSederhana(berat, tinggi, usia) {
            // Contoh formula sederhana, bisa diganti dengan formula yang lebih kompleks
            var kalori = 10 * berat + 6.25 * tinggi - 5 * usia + 5;
            return kalori;
        }
    </script>
</body>
</html>
