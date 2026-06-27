<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'ajfweekly');

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title><link rel="stylesheet" href="aset/style.css">
</head>

<body>

    <h1 align="center">
        WEB TI AJF - 2026
    </h1>

    <table border="1" align="center" cellspacing="0" cellpadding="10">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <br><br>

    <h2>Data Mahasiswa</h2>

    <table border="1" cellpadding="5">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>No Whatsapp</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php while ($mhs = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td><?= $mhs['id']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['prodi']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['no_hp']; ?></td>
                <td>
                    <img src="aset/image/gyj.jpg" alt="foto gyj" width="80px"></td>
                </td>
                <td>
                    <a href="Editdata.php?id=<?= $mhs['id']; ?>">
                        <button>Edit</button>
                    </a>

                    <a href="hapusdata.php?id=<?= $mhs['id']; ?>">
                        <button>Hapus</button>
                    </a>
                </td>
            </tr>

        <?php } ?>

    </table>

    <br><br>

    <table border="1" cellpadding="5">

        <tr>
            <td rowspan="2">Baris 1, Kolom 1</td>
            <td colspan="2">Baris 1, Kolom 2 dan 3</td>
        </tr>

        <tr>
            <td>Baris 2, Kolom 2</td>
            <td>Baris 2, Kolom 3</td>
        </tr>

        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>

        <tr>
            <td>2,1</td>
            <td rowspan="2" colspan="2">2,2 dan 3,2</td>
            <td>2,4</td>
        </tr>

        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>

        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>

    </table>

</body>

</html>