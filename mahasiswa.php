<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data mahasiswa</title>
</head>
<body>
    <h1 align="center">
        WEB TI AJF - 2026
    </h1>
        <table border="1" align="center" cellspacing="0" cellpadding="10px">
            < <tr>
                <td>
                    <a href="index.php">home</a>
                </td>
                <td>
                    <a href="profile.php">profile</a>
                </td>
                <td>
                    <a href="contact.php">contact</a>
                </td>
                <td>
                    <a href="mahasiswa.php">data mahasiswa</a>
                </td>
            </tr>
        </table>
        <br><br>
        <h2>data mahasiswa</h2>
        <table border="1" cellpadding="5px">
            <tr>
                <th> no </th>
                <th> nama </th>
                <th> nim </th>
                <th> prodi </th>
                <th> email </th>
                <th> No Whatsapp </th>
                <th> foto </th>
            </tr>
            <tr>
                <td> 1 </td>
                <td> jabarfikri </td>
                <td> 13242520040 </td>
                <td> Teknologi Informasi Digital </td>
                <td> jabarfikri@unimus.ac.id </td>
                <td>  082148805569 </td>
                <td> <img src="img/images.jpg" width= 80px </td>
                <td> 
                    <a href="Editdata.php"><button>Edit</button></a>
                    <a href="hapusdata.php"><button>hapus</button></a>
</tr>
        <table border="1" cellpadding="5px">
            <tr>
                <td rowspan="2">baris 1, kolom 1</td>
                <td colspan="2">baris 1, kolom 2 dan 3</td>
            <tr>
            <tr>
                <td>baris 2, kolom 1</td>
                <td>baris 2, kolom 2</td>
             <td>baris 2, kolom 3</td>
            <tr>

<tr>
    <td>1,1</td>
    <td>1,2</td>
    <td>1,3</td>
    <td>1,4</td>
</tr>
<tr>
    <td>2,1</td>
    <td rowspan="2" colspan="2">2,3</td>
    <!-- <td rowspan="2">2,3</td> -->
    <td>2,4</td>
</tr>
<tr>
    <td>3,1</td>
    <td>3,4</td>
    <!-- <td>3,3</td>
    <td>3,4</td> -->
</tr>
<tr>
    <td>4,1</td>
    <td>4,2</td>
    <td>4,3</td>
    <td>4,4</td>
</tr>

        </table>
</body>
</php>