<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Dashboard Kasir</title>
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

.transaction-form {
  max-width: 400px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
}

input[type="text"],
input[type="number"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

.btn {
  display: block;
  width: 100%;
  background-color: #333;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #555;
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
        <h2>Transaksi</h2>
        <form action="{{ url('entry') }}" method="post">
          @csrf
        <form class="transaction-form">
            <div class="form-group">
                <label for="id_penjualan">Id Penjualan</label>
                <input type="text" id="id_penjualan" name="id_penjualan" required>
            </div>
            <div class="form-group">
              <label for="id_kasir">Id Kasir</label>
              <input type="text" id="id_kasir" name="id_kasir" required>
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" required>
        </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="text" id="total" name="total" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </section>
</body>
</html>
