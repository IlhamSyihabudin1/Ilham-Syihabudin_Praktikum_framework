<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            background: #8C1007;
            color: white;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: white;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin: 8px 0;
        }

        a button {
            background-color: #FFE100;
            border: none;
            color: black;
            padding: 12px 20px;
            margin: 10px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        a button:hover {
            background-color: #d8bf00ff;
            transform: scale(1.05);
        }

        a:nth-child(2) button {
            background-color: #2196F3;
        }

        a:nth-child(2) button:hover {
            background-color: #0b7dda;
        }
    </style>
</head>
<body>
    <h1>About Me</h1>
    <p><strong>Tinggi Badan:</strong> {{ $tb }}</p>
    <p><strong>Berat Badan:</strong> {{ $bb }}</p>
    <p><strong>Makanan Favorite:</strong> {{ $mf }}</p>
    <p><strong>UDAH SEGITU SAJA CUKUP KALO KEBANYAKAN NANTI JADI POTOFOLIO :V</strong></p>

    <br><br>

    <a href="{{ url('/') }}">
        <button>Halaman Home</button>
    </a>

    <a href="{{ url('/about') }}">
        <button>Halaman About</button>
    </a>
    
</body>
</html>
