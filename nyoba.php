<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Berat Badan Ideal</title>
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

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
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
    <div class="container">
        <div class="judul">
            <h4>Kalkulator Berat Badan Ideal</h4>
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
            <div class="btn-container">
                <button class="btn" onclick="hitungBeratIdeal()">Hitung</button>
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
                tinggi *= 2.54; // 1 inch = 2.54 cm
            }

            // Konversi berat ke kg jika dalam lbs
            if (satuanBerat === 'lbs') {
                berat *= 0.453592; // 1 lbs = 0.453592 kg
            }

            // Hitung berat badan ideal berdasarkan jenis kelamin
            var beratIdeal;
            if (gender === 'male') {
                beratIdeal = 50 + 0.91 * (tinggi - 152.4); // Untuk laki-laki
            } else if (gender === 'female') {
                beratIdeal = 45.5 + 0.91 * (tinggi - 152.4); // Untuk perempuan
            }

            var hasil = document.getElementById('hasil');
            hasil.innerHTML = `<p>Berat Badan Ideal Anda adalah: ${beratIdeal.toFixed(2)} kg</p>`;
        }
    </script>
</body>
</html>
