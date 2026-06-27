<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJF TI 25 - 2026</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="AJF.php">Profil</a></li>
            <li><a href="contact.php">Kontak</a></li>
        </ul>
    </nav>

    <a href="https://www.instagram.com/jbrfkri?igsh=MTFkbTdnMTJ1eXRheQ==" target="_blank">
        Instagram Saya
    </a>
    <br>

    <a href="https://www.tiktok.com/@nescafeiceroat?_r=1&_t=ZS-95xcKyZWjFE" target="_blank">
        TikTok Saya
    </a>

    <hr>

    <form action="" method="post" enctype="multipart/form-data">

        <label>Nama:</label><br>
        <input type="text" name="nama" required>
        <br><br>

        <label>NIM:</label><br>
        <input type="number" name="nim" required>
        <br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <label>No HP:</label><br>
        <input type="tel" name="hp" required>
        <br><br>

        <label>Website Pribadi:</label><br>
        <input type="url" name="website">
        <br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir">
        <br><br>

        <label>Warna Favorit:</label><br>
        <input type="color" name="warna">
        <br><br>

        <label>Tingkat Kepuasan:</label><br>
        <input type="range" name="kepuasan" min="0" max="100">
        <br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan
        <br><br>

        <label>Hobi:</label><br>
        <input type="checkbox" name="hobi[]" value="Musik"> Musik
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
        <input type="checkbox" name="hobi[]" value="Game"> Game
        <br><br>

        <label>Upload Foto:</label><br>
        <input type="file" name="foto">
        <br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" rows="4" cols="40"></textarea>
        <br><br>

        <label>Jurusan:</label><br>
        <select name="jurusan" required>
            <option value="">-- Pilih Jurusan --</option>
            <option value="TI">Teknologi Informasi</option>
            <option value="SI">Sistem Informasi</option>
            <option value="DKV">Desain Komunikasi Visual</option>
        </select>

        <br><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

    </form>

</body>

</html>