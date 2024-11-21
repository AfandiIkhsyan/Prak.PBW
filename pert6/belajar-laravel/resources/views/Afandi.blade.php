<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: fadeIn 2s ease-in-out;
        }

        a {
            font-size: 1.2rem;
            text-decoration: none;
            color: #f0f0f0;
            background-color: #ff6347;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: 10px;
        }

        a:hover {
            background-color: #ff4500;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media(max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            a {
                font-size: 1rem;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Buku Tamu</h1>
        <a href="{{ route('bukutamu.create') }}">Isi Buku Tamu</a>
        <a href="{{ route('bukutamu.show') }}">Lihat Komentar</a>
    </div>
</body>
</html>
