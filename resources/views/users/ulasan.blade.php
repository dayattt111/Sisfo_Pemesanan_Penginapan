<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- ulasan-penginapan.blade.php --}}

<div style="width: 500px; margin: auto; padding: 20px;">

    <h3>Ulasan penginapan</h3>

    <h4>Info Penginapan</h4>
    <div style="border: 1px solid #000; padding: 10px; width: 300px; margin-bottom: 20px;">
        <b>Nama :</b> Penginapan deby<br>
        <b>Alamat :</b> Jl Dirgantara No.24<br>
        <b>Check-in :</b> 12 November 2025<br>
        <b>Total :</b> Rp.700.000
    </div>

    <form action="" method="POST">
        @csrf
        <div>
            <b>Beri Penilaian :</b> &#9733;&#9733;&#9733;&#9733;&#9734;
        </div>
        
        <div style="margin-top: 15px;">
            <label for="ulasan"><b>Tulis Ulasan Anda</b></label><br>
            <textarea id="ulasan" name="ulasan" rows="5" cols="50" style="border: 1px solid #000;"></textarea>
        </div>

        <div style="margin-top: 15px;">
            <label>Upload Foto (opsional):</label>
            <button type="button">upload</button>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit">Kirim Ulasan</button>
        </div>
    </form>
    
    <div style="margin-top: 10px;">
        <a href="/Users/dashboard">Kembali ke Daftar Penginapan</a>
    </div>
</div>
</body>
</html>