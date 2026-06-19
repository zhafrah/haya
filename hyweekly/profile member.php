<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Member RIIZE</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f6f9;
            margin:0;
        }

        nav{
            background:#1e3c72;
            padding:15px;
            text-align:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin:0 20px;
            font-weight:bold;
        }

        nav a:hover{
            color:gold;
        }

        h1{
            text-align:center;
            color:#1e3c72;
            margin-top:30px;
        }

        .container{
            width:90%;
            margin:auto;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
            gap:20px;
            padding:20px;
        }

        .card{
            width:280px;
            background:white;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            width:100%;
            height:300px;
            object-fit:cover;
        }

        .card-body{
            padding:15px;
        }

        .card-body h2{
            color:#1e3c72;
            margin:0;
        }

        .card-body p{
            margin:8px 0;
        }
    </style>
</head>
<body>

<nav>
    <a href="index.php">Home</a>
    <a href="mahasiswa.php">Data Mahasiswa</a>
    <a href="profile member.php">Profil Member</a>
</nav>

<h1>Profil Member RIIZE</h1>

<div class="container">

    <div class="card">
        <img src="assets/images/taro.jpg">
        <div class="card-body">
            <h2>SHOTARO</h2>
            <p><b>Nama Asli:</b> Osaki Shotaro</p>
            <p><b>Lahir:</b> 25 November 2000</p>
            <p><b>Posisi:</b> Dancer, Rapper</p>
            <p><b>MBTI:</b> ESFP</p>
            <p><b>Negara:</b> Jepang</p>
        </div>
    </div>

    <div class="card">
        <img src="assets/images/eunseok.jpg">
        <div class="card-body">
            <h2>EUNSEOK</h2>
            <p><b>Nama Asli:</b> Song Eunseok</p>
            <p><b>Lahir:</b> 19 Maret 2001</p>
            <p><b>Posisi:</b> Vocalist, Visual</p>
            <p><b>MBTI:</b> ISFP</p>
            <p><b>Negara:</b> Korea Selatan</p>
        </div>
    </div>

    <div class="card">
        <img src="assets/images/sungchan.jpg">
        <div class="card-body">
            <h2>SUNGCHAN</h2>
            <p><b>Nama Asli:</b> Jung Sungchan</p>
            <p><b>Lahir:</b> 13 September 2001</p>
            <p><b>Posisi:</b> Rapper, Visual</p>
            <p><b>MBTI:</b> ESTP</p>
            <p><b>Negara:</b> Korea Selatan</p>
        </div>
    </div>

    <div class="card">
        <img src="assets/images/wonbin.jpg">
        <div class="card-body">
            <h2>WONBIN</h2>
            <p><b>Nama Asli:</b> Park Wonbin</p>
            <p><b>Lahir:</b> 2 Maret 2002</p>
            <p><b>Posisi:</b> Center, Vocalist, Dancer, Visual</p>
            <p><b>MBTI:</b> ISTJ</p>
            <p><b>Negara:</b> Korea Selatan</p>
        </div>
    </div>

    <div class="card">
        <img src="assets/images/sohee.jpg">
        <div class="card-body">
            <h2>SOHEE</h2>
            <p><b>Nama Asli:</b> Lee Sohee</p>
            <p><b>Lahir:</b> 21 November 2003</p>
            <p><b>Posisi:</b> Main Vocalist</p>
            <p><b>MBTI:</b> ISFP</p>
            <p><b>Negara:</b> Korea Selatan</p>
        </div>
    </div>

    <div class="card">
        <img src="assets/images/anton.jpg">
        <div class="card-body">
            <h2>ANTON</h2>
            <p><b>Nama Asli:</b> Lee Anton</p>
            <p><b>Lahir:</b> 21 Maret 2004</p>
            <p><b>Posisi:</b> Vocalist, Maknae</p>
            <p><b>MBTI:</b> INTP</p>
            <p><b>Negara:</b> Amerika Serikat</p>
        </div>
    </div>

</div>

</body>
</php>
```
