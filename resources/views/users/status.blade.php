<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- status-pemesanan.blade.php --}}

<div style="width: 700px; margin: auto; padding: 20px;">

    <h3>Status Pemesanan</h3>

    <div style="background-color: #eeeeee; padding: 10px; border: 1px solid #ccc; margin-bottom: 10px;">
        Status pemesanan berhasil dimuat.
    </div>
    <div style="background-color: #fdd; color: #a00; padding: 10px; border: 1px solid #f99; margin-bottom: 20px;">
        Gagal memuat data pemesanan.
    </div>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="padding: 5px; text-align: center;">Nama Penginapan</th>
                <th style="padding: 5px; text-align: center;">Tanggal Check-in</th>
                <th style="padding: 5px; text-align: center;">Tanggal Check-out</th>
                <th style="padding: 5px; text-align: center;">Status</th>
                <th style="padding: 5px; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <center>
                
                <tr>
                    <td style="padding: 5px;">Penginapan Sentosa</td>
                    <td style="padding: 5px;">12 November 2025</td>
                    <td style="padding: 5px;">14 November 2025</td>
                    <td style="padding: 5px;">
                        <span style="border: 1px solid #000; padding: 2px 5px;">Pembayaran</span>
                    </td>
                    <td colspan="4" style="padding: 5px; text-align: right;">
                        <a style="border:#000 solid 1px; padding: 5px;" href="/Users/detailPesanan">Detail</a>
                    </td>
                    </tr>
                </center>
        </tbody>
    </table>
</div>
</body>
</html>