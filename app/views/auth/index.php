<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Rental Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Abu-abu untuk background */
        body { 
            background-color: #f4f4f4; 
            height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Putih untuk kartu login */
        .card { 
            border: none; 
            border-radius: 15px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 400px;
        }

        /* Coklat untuk Header */
        .card-header { 
            background-color: #8B4513 !important; 
            color: white !important;
            text-align: center;
            padding: 25px;
            border: none;
        }

        /* Gaya Input */
        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #ddd;
        }

        /* Tombol Coklat */
        .btn-primary { 
            background-color: #8B4513 !important; 
            border: none !important;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-primary:hover { 
            background-color: #5D2E0A !important; 
            transform: translateY(-2px);
        }

        .text-brown { color: #8B4513; }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h3 class="mb-0">RENTAL MOBIL</h3>
        <small>Silakan Login untuk Mengelola Data</small>
    </div>
    <div class="card-body p-4 bg-white">
        <form action="<?= BASEURL; ?>/Auth/login" method="post">
            <div class="mb-3">
                <label class="form-label text-secondary">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username (admin)" required>
            </div>
            <div class="mb-4">
                <label class="form-label text-secondary">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password (admin)" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">MASUK KE SISTEM</button>
        </form>
    </div>
    <div class="card-footer bg-light text-center py-3">
        <small class="text-muted">© 2026 Project UAS Cindy</small>
    </div>
</div>

</body>
</html>