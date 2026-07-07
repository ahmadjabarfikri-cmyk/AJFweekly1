<?php

require 'fungsi.php';

$id = $_GET['id'];

$query = "SELECT * FROM mahasiswa WHERE id = $id";
$mhs = tampildata($query)[0];

if (isset($_POST['submit']))
{
    if(editdata($_POST) > 0)
    {
        echo "<script>
        alert('data berhasil diubah!!');
        window.location.href='mahasiswa.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('data gagal diubah!!');
        window.location.href='mahasiswa.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>

    <h2>Edit Data Mahasiswa</h2>

    <form action="" method="post">

        <!-- Mengirim id ke fungsi edit -->
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

        <table cellpadding="5">

            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>" required>
                </td>
            </tr>

            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="nim" id="nim" value="<?= $mhs['nim']; ?>" required>
                </td>
            </tr>

            <tr>
                <td><label for="prodi">Prodi</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="prodi" id="prodi" value="<?= $mhs['prodi']; ?>" required>
                </td>
            </tr>

            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td>
                    <input type="email" name="email" id="email" value="<?= $mhs['email']; ?>" required>
                </td>
            </tr>

            <tr>
                <td><label for="no_hp">No HP</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="no_hp" id="no_hp" value="<?= $mhs['no_hp']; ?>" required>
                </td>
            </tr>

            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="foto" id="foto" value="<?= $mhs['foto']; ?>" placeholder="contoh: foto.jpg">
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Simpan</button>
                </td>
            </tr>

        </table>
    </form>

</body>
</html>