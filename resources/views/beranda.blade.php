<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Dashboard Kasir</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <style>body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f7f7f7;
    }
    
    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }
    
    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
    }
    
    header .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    header nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    
    header nav ul li {
        display: inline;
    }
    
    header nav ul li a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
    }
    
    section {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    h1, h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Dashboard Kasir</h1>
            <nav>
                <ul>
                    <li><a href="{{ url('beranda') }}">Beranda</a></li>
                    <li><a href="{{ url('pasokk') }}">Data Pasok</a></li>
                    <li><a href="{{ url('bukuu') }}">Data Buku</a></li>
                    <li><a href="{{ url('tpenjualan') }}">Transaksi</a></li>
                    <li><a href="{{ url('laporann') }}">Laporan</a></li>
                    <li><a href="{{ url('login/kasir') }}">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="container">
        <h2>Selamat Datang di Dashboard Kasir</h2>
        <p>Dashboard ini memberikan akses cepat untuk mengelola transaksi dan melihat laporan penjualan.</p>
    </section>
</body>
</html>
