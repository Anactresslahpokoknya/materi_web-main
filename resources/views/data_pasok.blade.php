<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasok - Kasir</title>
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
  
  table {
      width: 100%;
      border-collapse: collapse;
  }
  
  table th, table td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
  }
  
  table th {
      background-color: #f2f2f2;
  }
  
  table tr:nth-child(even) {
      background-color: #f9f9f9;
  }
  
  table tr:hover {
      background-color: #f2f2f2;
  }
  </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Data Pasok - Kasir</h1>
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
        <h2>Data Pasok</h2>
        <table>
            <thead>
                <tr>
                    <th>Id Pasok</th>
                    <th>Id Distributor</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data_pasok as $item)
                <tr>
                    <td>{{ $item->id_pasok }}</td>
                    <td>{{ $item->id_distributor }}</td>
                    <td>{{ $item->tanggal }}</td>
                </tr>
                <!-- tambahkan baris lain sesuai kebutuhan -->
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>
