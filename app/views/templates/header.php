<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Mobil | Premium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-brown: #5D4037;   /* Coklat Tua */
            --soft-brown: #D7CCC8;      /* Coklat Muda */
            --bg-gray: #F5F5F5;         /* Abu-abu Terang */
            --text-dark: #3E2723;
        }

        body { 
            background-color: var(--bg-gray); 
            color: var(--text-dark);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar { 
            background-color: var(--primary-brown) !important; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .card { 
            border: none; 
            border-radius: 15px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .btn-coklat {
            background-color: var(--primary-brown);
            color: white;
            border: none;
        }

        .btn-coklat:hover {
            background-color: #4E342E;
            color: white;
        }

        .table-responsive {
            background: white;
            padding: 15px;
            border-radius: 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= BASEURL; ?>/dashboard">RENTALKU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/dashboard">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/mobil">Mobil</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/transaksi">Transaksi</a></li>
        <li class="nav-item"><a class="btn btn-sm btn-outline-light ms-lg-3" href="<?= BASEURL; ?>/auth/logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">