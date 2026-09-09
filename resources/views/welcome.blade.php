<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimarket</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #198754;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            text-align: center;
            padding: 60px 20px;
        }

        h1 {
            color: #198754;
        }

        p {
            color: #555;
            font-size: 18px;
        }

        .button {
            display: inline-block;
            margin: 5px;
            padding: 12px 25px;
            background-color: #198754;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #146c43;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>MINIMARKET</h2>
    </div>

    <div class="container">

        <h1>Selamat Datang di Minimarket</h1>

        <p>
            Sistem Informasi Kasir Minimarket
        </p>

        <p>
            Kelola produk dan transaksi dengan lebih mudah.
        </p>

        <a href="/about" class="button">
            Tentang Pengembang
        </a>

        <a href="{{ route('dashboard') }}" class="button">
            Dashboard Admin
        </a>

    </div>

</body>

</html>