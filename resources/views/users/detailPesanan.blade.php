<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Penginapan</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f4f4; /* Latar belakang abu-abu muda */
            margin: 0;
            padding: 20px;
        }

        /* Container utama di tengah */
        .container {
            max-width: 650px; /* Sedikit lebih lebar untuk detail */
            margin: 40px auto; /* Otomatis di tengah */
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px; /* Sudut membulat */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); /* Bayangan halus */
        }

        h3 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
            color: #333;
        }
        
        h4 {
            margin-top: 20px;
            margin-bottom: 10px;
            color: #444;
        }

        /* Placeholder gambar */
        .image-placeholder {
            width: 100%; /* Responsif di dalam container */
            height: 300px;
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            font-size: 18px;
            margin-bottom: 25px;
        }

        p, ul {
            line-height: 1.6; /* Jarak antar baris */
            color: #555;
            margin-bottom: 15px;
        }

        ul {
            padding-left: 20px; /* Spasi untuk bullet list */
            margin-top: 10px;
        }

        li {
            margin-bottom: 5px;
        }

        .price {
            font-size: 1.25rem; /* 20px */
            font-weight: bold;
            color: #007bff; /* Warna biru */
            margin-top: 20px;
        }

        /* Tombol */
        .btn {
            display: block; /* Tombol jadi full-width */
            width: 100%;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: background-color 0.2s;
            font-size: 16px; /* Ukuran font tombol */
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }

        .link-kembali {
            display: block; /* Link menjadi block */
            text-align: center; /* Teks di tengah */
            margin-top: 15px;
            color: #555;
            text-decoration: none;
        }
        .link-kembali:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="container">
        <h3>Detail penginapan</h3>

        <div class="image-placeholder">
            [Gambar Penginapan]
        </div>

        <h4>penginapan deby</h4>
        <p>Lokasi : Jl Dirgantara No.24</p>
        <p>Penginapan deby menawarkan kamar bersih,nyaman,dan terjangkau dengan fasillitas Wifi gratis,AC,dan Sarapan.</p>

        <p><b>Fasilitas :</b></p>
        <ul>
            <li>Wifi gratis</li>
            <li>AC & TV</li>
            <li>Kamar mandi dalam</li>
            <li>Parkir luas</li>
        </ul>

        <p class="price">Harga : Rp. 350.000/Malam</p>
        <div>
            <a href="/Users/dashboard" class="link-kembali">Kembali ke Daftar penginapan</a>
        </div>
    </div>

</body>
</html>