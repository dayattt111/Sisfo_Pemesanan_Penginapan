<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ulasan Penginapan</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        /* Container utama di tengah */
        .container {
            max-width: 550px;
            margin: 40px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
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

        /* Kotak Info Penginapan */
        .info-box {
            border: 1px solid #e0e0e0;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 25px;
            line-height: 1.6;
            color: #555;
        }
        .info-box b {
            color: #333;
            font-weight: 600;
        }

        /* Penilaian Bintang */
        .rating-stars {
            font-size: 1.5rem;
            color: #ffc107; /* Warna emas/kuning untuk bintang */
        }

        /* Textarea */
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
            resize: vertical; /* Hanya bisa resize vertikal */
            margin-top: 5px;
        }

        /* Tombol */
        .btn {
            display: inline-block;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: background-color 0.2s;
            font-size: 16px;
        }
        
        /* Tombol Submit */
        .btn-primary {
            background-color: #28a745; /* Hijau */
            color: white;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #1e7e34;
        }

        /* Tombol Upload */
        .btn-secondary {
            background-color: #eee;
            color: #333;
            border: 1px solid #ccc;
            font-size: 14px;
            padding: 8px 15px;
        }
        .btn-secondary:hover {
            background-color: #ddd;
        }

        /* Link Kembali */
        .link-kembali {
            display: block;
            text-align: center;
            margin-top: 20px;
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

        <h3>Ulasan Penginapan</h3>

        <h4>Info Pemesanan</h4>
        <div class="info-box" style="width: auto;">
            <b>Nama :</b> Penginapan deby<br>
            <b>Alamat :</b> Jl Dirgantara No.24<br>
            <b>Check-in :</b> 12 November 2025<br>
            <b>Total :</b> Rp.700.000
        </div>

        <form action="/Users/dashboard" method="POST">
            @csrf
            <div>
                <label><b>Beri Penilaian :</b></label>
                <span class="rating-stars">&#9733;&#9733;&#9733;&#9733;</span><span class="rating-stars" style="color: #ccc;">&#9734;</span> 
            </div>
            
            <div style="margin-top: 15px;">
                <label for="ulasan"><b>Tulis Ulasan Anda</b></label><br>
                <textarea id="ulasan" name="ulasan" rows="5" placeholder="Bagaimana pengalaman Anda menginap di sini?"></textarea>
            </div>

            <div style="margin-top: 15px;">
                <label>Upload Foto (opsional):</label>
                <button type="button" class="btn btn-secondary">Upload Foto</button>
            </div>

            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
            </div>
        </form>
        
        <div>
            <a href="/Users/dashboard" class="link-kembali">Kembali ke Daftar Penginapan</a>
        </div>
    </div>
</body>
</html>