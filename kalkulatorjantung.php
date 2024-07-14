<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengukur Risiko Penyakit Jantung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pengukur Risiko Penyakit Jantung</h2>
        <form id="heartRiskForm">
            <div class="form-group">
                <label for="age">Usia</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select id="gender" name="gender" required>
                    <option value="">Pilih...</option>
                    <option value="male">Pria</option>
                    <option value="female">Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label for="familyHistory">Riwayat Keluarga</label>
                <select id="familyHistory" name="familyHistory" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="smoking">Kebiasaan Merokok</label>
                <select id="smoking" name="smoking" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bloodPressure">Tekanan Darah Tinggi</label>
                <select id="bloodPressure" name="bloodPressure" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cholesterol">Kolesterol Tinggi</label>
                <select id="cholesterol" name="cholesterol" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="diabetes">Diabetes</label>
                <select id="diabetes" name="diabetes" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="obesity">Obesitas atau Kegemukan</label>
                <select id="obesity" name="obesity" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="physicalActivity">Aktivitas Fisik</label>
                <select id="physicalActivity" name="physicalActivity" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="diet">Diet Tidak Sehat</label>
                <select id="diet" name="diet" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="stress">Stres</label>
                <select id="stress" name="stress" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alcohol">Konsumsi Alkohol Berlebihan</label>
                <select id="alcohol" name="alcohol" required>
                    <option value="">Pilih...</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <button type="submit">Hitung Risiko</button>
        </form>
        <div id="result"></div>
    </div>
    <script>
        document.getElementById('heartRiskForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let score = 0;
            const form = event.target;
            const factors = ['familyHistory', 'smoking', 'bloodPressure', 'cholesterol', 'diabetes', 'obesity', 'physicalActivity', 'diet', 'stress', 'alcohol'];
            
            factors.forEach(factor => {
                if (form[factor].value === 'yes') {
                    score += 1;
                }
            });

            const age = parseInt(form.age.value);
            const gender = form.gender.value;

            if (age > 45 && gender === 'male') score += 1;
            if (age > 55 && gender === 'female') score += 1;

            let risk = 'Rendah';
            if (score >= 3 && score <= 5) risk = 'Sedang';
            else if (score > 5) risk = 'Tinggi';

            document.getElementById('result').innerHTML = `<h3>Risiko Penyakit Jantung Anda: ${risk}</h3>`;
        });
    </script>
</body>
</html>
