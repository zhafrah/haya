<?php

require 'fungsi.php';

$query = "SELECT * FROM mahasiswa"; ///perintah
$mahasiswas = tampildata($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data RIIZE</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f6f9;
            margin:0;
        }

        header{
            background:linear-gradient(135deg,#1e3c72,#2a5298);
            color:white;
            text-align:center;
            padding:30px;
        }

        header h1{
            margin:0;
        }

        header p{
            margin-top:10px;
        }

        .menu{
            display:flex;
            justify-content:center;
            background:white;
            box-shadow:0 2px 8px rgba(0,0,0,0.1);
        }

        .menu a{
            text-decoration:none;
            color:#333;
            padding:15px 25px;
            font-weight:bold;
            transition:0.3s;
        }

        .menu a:hover{
            background:#2a5298;
            color:white;
        }

        .container{
            width:90%;
            margin:30px auto;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:15px;
            box-shadow:0 3px 10px rgba(0,0,0,0.1);
            margin-bottom:25px;
        }

        h2{
            color:#2a5298;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:15px;
        }

        table th{
            background:#2a5298;
            color:white;
            padding:12px;
        }

        table td{
            padding:10px;
            text-align:center;
        }

        table tr:nth-child(even){
            background:#f8f9fa;
        }

        table tr:hover{
            background:#e8f0ff;
        }

        .btn{
            background:#28a745;
            color:white;
            border:none;
            padding:10px 15px;
            border-radius:6px;
            cursor:pointer;
        }

        .edit{
            background:#ffc107;
            border:none;
            padding:6px 12px;
            border-radius:5px;
            cursor:pointer;
        }

        .hapus{
            background:#dc3545;
            color:white;
            border:none;
            padding:6px 12px;
            border-radius:5px;
            cursor:pointer;
        }

        img{
            border-radius:10px;
        }

        footer{
            background:#2a5298;
            color:white;
            text-align:center;
            padding:15px;
            margin-top:30px;
        }
    </style>
</head>

<body>

<div class="menu">
    <a href="index.php">Home</a>
    <a href="profile member.php">Profil Member</a>
    <a href="mahasiswa.php">Data Mahasiswa</a>
</div>

<div class="container">

    <!-- DATA MYSQL -->
    <div class="card">
        <h2>Data Mahasiswa (MySQL)</h2>

        <a href="tambahdata.php">
            <button class="btn">+ Tambah Data</button>
        </a>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach($mahasiswas as $mhs){
            ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $mhs["nama"] ?></td>
                <td><?php echo $mhs["nim"] ?></td>
                <td align="center"><?php echo $mhs["jurusan"] ?></td>
                <td align="center"><?php echo $mhs["email"] ?></td>
                <td align="center"><?php echo $mhs["no_hp"] ?></td>
                <td><img src="assets/images/<?php echo $mhs['foto']; ?>" width="80"></td>
                <td>
                    <a href="editdata.php?id=<?= $mhs['id']; ?>">
                        <button class="edit">Edit</button>
                    </a>

                    <a href="deletedata.php?id=<?= $mhs['id']; ?>">
                        <button class="hapus">Hapus</button>
                    </a>
                </td>
            </tr>
            <?php } ?>

            
        </table>
    </div>

<footer>
    © 2026 RIIZE Fan Page | Dibuat oleh Zhafirah Haya
</footer>

</body>
</php>
