<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- form-pemesanan.blade.php --}}

<div style="width: 600px; margin: auto; padding: 20px;">

    <h3>Form Pemesanan Penginapan</h3>

    <table style="margin-bottom: 20px;">
        <tr>
            <td style="vertical-align: top;">
                <div style="width: 100px; height: 80px; border: 1px solid #000; background: #eee; text-align: center; line-height: 80px;">X</div>
            </td>
            <td style="vertical-align: top; padding-left: 15px;">
                <b>Penginapan Deby</b>
                <p>Lokasi : Jl Dirgantara No.24</p>
                <p>Harga : Rp. 350.000/Malam</p>
            </td>
        </tr>
    </table>

    <form action="/Users/pesanan" method="POST">
        @csrf
        <table style="width: 100%; border-spacing: 10px;">
            <tr>
                <td colspan="2">
                    <label for="nama">Nama Lengkap</label><br>
                    <input type="text" id="nama" name="nama" style="width: 95%;">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" style="width: 95%;">
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="telepon">No.Telepon</label><br>
                    <input type="text" id="telepon" name="telepon" style="width: 80%;"> <span>&#128197;</span>
                </td>
                <td style="width: 50%;">
                    <label for="check_out">Check-out</label><br>
                    <input type="text" id="check_out" name="check_out" style="width: 80%;"> <span>&#128197;</span>
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="tamu">Jumlah tamu</label><br>
                    <input type="text" id="tamu" name="tamu" style="width: 90%;">
                </td>
                <td style="width: 50%;">
                    <b>Total sewa</b><br>
                    Rp. 700.000 (2 malam)
                </td>
            </tr>
        </table>

        <div style="margin-top: 20px;">
            <button type="submit">Lanjut ke pembayaran</button>
        </div>
    </form>
    
    <div style="margin-top: 10px;">
        <a href="/Users/detail">Kembali ke detail penginapan</a>
    </div>
</div>
</body>
</html>