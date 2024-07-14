<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
</head>
<style>
    .biodata{
        margin-top: 100px;
    }
</style>
<body>
<?php require "partials/header.php"; ?>
<section class="biodata">
    <h1>Profil Pengguna</h1>
    <p>Nama : <span id="nama"></span></p>
    <p>Usia : <span id="usia"></span></p>
    <p>Gender : <span id="gender"></span></p>
</section>
    <p>Riwayat Kesehatan : <span id="riwayat-kesehatan"></span></p>

    <script>
        // Fetch user data from the database and populate the profile
        const user = {
            name: "John Doe",
            age: 30,
            gender: "Male",
            healthHistory: "No significant issues"
        };

        document.getElementById("name").innerText = user.name;
        document.getElementById("age").innerText = user.age;
        document.getElementById("gender").innerText = user.gender;
        document.getElementById("health-history").innerText = user.healthHistory;
    </script>
</body>
</html>
