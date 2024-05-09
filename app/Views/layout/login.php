<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SISTEM MANAJEMEN SURAT KELURAHAN LUBUK BEGALUNG</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            margin: 0;
            background-image: url('uploads/kantor.jpg');
            background-size: cover; /* Untuk menyesuaikan ukuran gambar dengan layar */
            background-position: center; /* Posisi gambar di tengah */
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Lebar maksimum kontainer */
            text-align: center;
        }

        .logo img {
            max-width: 50px;
            height: auto;
        }

        input {
            width: calc(100% - 20px); /* Penyesuaian untuk padding */
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            width: calc(100% - 20px); /* Penyesuaian untuk padding */
            background-color: #218838;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #28a745;
        }

        @media screen and (max-width: 480px) { /* Pengaturan CSS untuk layar kecil (misal: ponsel) */
            .container {
                padding: 10px;
            }

            .logo img {
                max-width: 40px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="<?= base_url('/login/proseslogin') ?>">
            <div class="logo">
                <img src="<?= base_url('uploads/logo_padang.svg.png') ?>" alt="kelurahan lubuk begalung">
            </div>
            <div align="center">
                <h2>SISTEM MANAJEMEN SURAT</h2>
                <h5>KELURAHAN LUBUK BEGALUNG</h5>
            </div>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (session()->getFlashdata('pesan')): ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
