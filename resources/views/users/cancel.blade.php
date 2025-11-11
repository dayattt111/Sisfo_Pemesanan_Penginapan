<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="width: 600px; margin: auto; padding: 20px;">

    <h3>Membatalkan Pemesanan</h3>

    <table border="1" style="width: 100%; border-collapse: collapse; margin-bottom: 15px;">
        <thead>
            <tr>
                <th style="padding: 5px; text-align: left;">Nama Penginapan</th>
                <th style="padding: 5px; text-align: left;">Tanggal Check-in</th>
                <th style="padding: 5px; text-align: left;">Status</th>
                <th style="padding: 5px; text-align: left;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 5px;">Penginapan deby</td>
                <td style="padding: 5px;">12 Nov 2025</td>
                <td style="padding: 5px;">Dipesan</td>
                <td style="padding: 5px;">
                    <button type="button">Batalkan</button>
                </td>
            </tr>
        </tbody>
    </table>

    <div style="border: 1px solid #999; padding: 20px; width: 300px; text-align: center; margin: 20px auto; background: #f9f9f9;">
        <p>Apakah Anda yakin ingin membatalkan pemesanan ini?</p>
        {{-- <button type="button">Ya</button>
        <button type="button">Tidak</button> --}}
        <a href="/Users/status">Ya</a>
        <a href="/Users/status">Tidak</a>
    </div>

    <div style="border: 1px solid #999; padding: 10px; background: #eee;">
        Pemesanan berhasil dibatalkan.
    </div>

</div>
</body>
</html>