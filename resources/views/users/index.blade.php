<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .tombol-link {
        display: inline-block; /* agar bisa mengatur padding, margin, dll. */
        padding: 5px 15px;
        background-color: #ffffff; /* warna latar */
        border: black 1px solid;
        color: rgb(0, 0, 0); /* warna teks */
        text-decoration: none; /* hilangkan garis bawah */
        border-radius: 5px; /* sudut membulat */
        text-align: center;
    }
    </style>
</head>
<body>
    {{-- dashboard.blade.php --}}

<div style="width: 500px; margin: auto; padding: 20px;">
    
    <h3 style="text-align: center;">Sistem Informasi Pemesanan Penginapan</h3>

    <div style="margin-top: 20px;">
        <form action="" method="GET">
            <label for="cari">Cari penginapan</label>
            <input type="text" id="cari" name="cari" style="width: 300px;">
            <button type="submit">Cari</button>
        </form>
    </div>

    <div style="margin-top: 20px;">
        <h4>Daftar Penginapan</h4>
        <table style="width: 100%;">
            <tr>
                <td>Penginapan Sentosa</td>
                <td style="text-align: right;">
                    <a href="detail" class="tombol-link">Detail</a>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 30px;">
        <h4>Status Pemesanan</h4>
        <div style="border: 1px solid #000; padding: 15px; text-align: center;">
            Belum ada pesanan
        </div>
    </div>
</div>
</body>
</html>