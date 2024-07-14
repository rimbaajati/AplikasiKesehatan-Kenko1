<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Berat Badan Ideal</title>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    .body{
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .box{
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        justify-content: center;
        align-items: center;
        margin:0 auto;
    }
    .judul h4{
        text-align: center;
    }
    .label{
        display: inline-block;
    }
    .input-data input{
       
    }
    .button{
        border: none; /* Remove borders */
        color: white; /* Add a text color */
        padding: 14px 28px; /* Add some padding */
        cursor: pointer; /* Add a pointer cursor on mouse-over */
        margin:0 auto;
    }
    .btn-hitung{
        background-color: #04AA6D; /* Green */
        background-color: #46a049;
    }
</style>
<body>
    <div class="header" id="header">
    <?php require "partials/header.php"?>
    </div>
    <div class="box" data-aos="fade-up">
        <div class="judul">
            <h4>Kalkulator Berat<br>Badan Ideal</h4>
        </div>
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
                <label for="gender">Jenis Kelamin</label>
            </div>
            <div class="input-data">
                <select id="gender" name="gender">
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
            </div>
            <div class="button">
                <button class="btn-hitung" onclick="hitungBeratIdeal()">Hitung</button>
            </div>
            <div class="hasil" id="hasil"></div>
        </div>
    </div>
    <script>
        function hitungBeratIdeal() {
            var tinggi = parseFloat(document.getElementById('tinggibadan').value);
            var berat = parseFloat(document.getElementById('beratbadan').value);
            var satuanTinggi = document.getElementById('satuan_tinggi').value;
            var satuanBerat = document.getElementById('satuan_berat').value;
            var gender = document.getElementById('gender').value;

            // Konversi tinggi ke cm jika dalam inch
            if (satuanTinggi === 'inch') {
                tinggi *= 2.54; 
            }

            // Konversi berat ke kg jika dalam lbs
            if (satuanBerat === 'lbs') {
                berat *= 0.453592; // 
            }

            // Hitung berat badan ideal berdasarkan jenis kelamin
            var beratIdeal;
            if (gender === 'male') {
                beratIdeal = 50 + 0.91 * (tinggi - 152.4); 
            } else if (gender === 'female') {
                beratIdeal = 45.5 + 0.91 * (tinggi - 152.4); 
            }

            var hasil = document.getElementById('hasil');
            hasil.innerHTML = `<p>Berat Badan Ideal Anda adalah: ${beratIdeal.toFixed(2)} kg</p>`;
        }
    </script>
</body>
</html>
