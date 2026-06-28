<?php

require 'fungsi.php';

if(isset($_POST['submit'])){

    $nama     = $_POST['nama'];
    $nim      = $_POST['nim'];
    $jurusan  = $_POST['jurusan'];
    $email    = $_POST['email'];
    $no_hp    = $_POST['no_hp'];

    // Upload Foto
    $foto = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    // Simpan foto ke folder assets/images
    move_uploaded_file($tmp, "assets/images/" . $foto);

    $query = "INSERT INTO mahasiswa
            (nama, nim, jurusan, email, no_hp, foto)
            VALUES
            ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

    mysqli_query($koneksi, $query);

    if(mysqli_affected_rows($koneksi) > 0){
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href='mahasiswa.php';
              </script>";
    }else{
        echo mysqli_error($koneksi);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>

    <style>
        body{
            font-family:Arial;
            background:#f4f4f4;
        }

        .container{
            width:450px;
            margin:40px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
        }

        table{
            width:100%;
        }

        td{
            padding:8px;
        }

        input{
            width:100%;
            padding:8px;
        }

        button{
            width:100%;
            padding:10px;
            background:#2a5298;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#1e3c72;
        }
    </style>

</head>
<body>

<div class="container">

<h2>Tambah Data Mahasiswa</h2>

<form action="" method="post" enctype="multipart/form-data">

<table>

<tr>
    <td>Nama</td>
    <td><input type="text" name="nama" required></td>
</tr>

<tr>
    <td>NIM</td>
    <td><input type="text" name="nim" required></td>
</tr>

<tr>
    <td>Jurusan</td>
    <td><input type="text" name="jurusan" required></td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="email" name="email" required></td>
</tr>

<tr>
    <td>No HP</td>
    <td><input type="text" name="no_hp" required></td>
</tr>

<tr>
    <td>Foto</td>
    <td><input type="file" name="foto" required></td>
</tr>

<tr>
    <td colspan="2">
        <button type="submit" name="submit">
            Tambah Data
        </button>
    </td>
</tr>

</table>

</form>

</div>

</body>
</html>