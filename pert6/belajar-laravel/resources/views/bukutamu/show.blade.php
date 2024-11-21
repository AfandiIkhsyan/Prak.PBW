<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar Buku Tamu</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 700px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .comment {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: #fafafa;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .comment:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .comment strong {
            font-size: 1.2rem;
            color: #2c3e50;
        }

        .comment p {
            font-size: 1rem;
            margin: 10px 0;
            color: #555;
        }

        .comment small {
            color: #888;
            font-size: 0.9rem;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        a:hover {
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            .comment strong {
                font-size: 1.1rem;
            }

            .comment p {
                font-size: 0.95rem;
            }

            a {
                font-size: 0.9rem;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Komentar dari Para Tamu</h1>

        @if ($data->isEmpty())
            <p>Belum ada komentar.</p>
        @else
            @foreach ($data as $item)
                <div class="comment">
                    <strong>{{ $item->nama_pengunjung }}</strong> berkata:<br>
                    <p>{{ $item->komentar }}</p>
                    <small>Waktu: {{ $item->created_at }}</small>
                </div>
            @endforeach
        @endif

        <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
