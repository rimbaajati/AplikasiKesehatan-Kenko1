<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Berat Badan Ideal</title>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<style>
    .body{
        justify-content: center;
        align-items: center;
        display: flex;
        font-family: "Roboto", sans-serif;
    }
    .box{
        padding: 20px;
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        width: 300px;
        justify-content: center;
        align-items: center;
        margin:0 auto;
        margin-top:70px;
    }
    .judul h4{
        font-family: "Roboto", sans-serif;
        font-weight: bold;
        font-style: normal;
        text-align: center;
    }
    .label{
        display: inline-block;

    }
    .input-data input{   
    }
    .button-hitung{
        align-items: center;
        text-align: center;
    }
    .btn-hitung{
        background-color: #c2fbd7;
        border: none;
        color: green;
        box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
        padding: 3px 10px;
        padding-bottom: 7px;
        text-align: center;
        align-items: center;
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
    .hasil{
        margin-top: 15px;
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
                <input type="number" id="tinggibadan" name="tinggi" min="10">
                <select id="satuan_tinggi" name="satuan_tinggi">
                    <option value="cm">cm</option>
                    <option value="inch">inch</option>
                </select>
            </div>
            <div class="label">
                <label for="beratbadan">Berat Badan</label>
            </div>
            <div class="input-data">
                <input type="number" id="beratbadan" name="berat" min="10">
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
            <div class="button-hitung">
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
