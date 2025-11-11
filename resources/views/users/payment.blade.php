<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- ringkasan-pemesanan.blade.php --}}

<div style="width: 500px; margin: auto; padding: 20px;">

    <h3>Ringkasan Pemesanan</h3>

    <div style="border: 1px solid #000; padding: 10px; width: 300px; margin-bottom: 20px;">
        <b>Penginapan deby</b><br>
        Lokasi: Jl dirgantara No.24<br>
        Check-in: 12 November 2025<br>
        Total : Rp. 700.000
    </div>

    <h4>Metode Pembayaran</h4>
    <form action="/Users/status" method="POST">
        @csrf
        <div>
            <input type="radio" id="tf_bank" name="metode" value="bank">
            <label for="tf_bank">Transfer Bank</label>
            
            <input type="radio" id="kredit" name="metode" value="kredit" style="margin-left: 20px;">
            <label for="kredit">Kartu Kredit / Debit</label>
        </div>
        <div style="margin-top: 5px;">
            <input type="radio" id="ewallet" name="metode" value="ewallet">
            <label for="ewallet">E-wallet (Ovo,Gopay,Dana)</label>
        </div>
        
        <table style="margin-top: 20px; border-spacing: 0 10px;">
            <tr>
                <td style="padding-right: 15px;"><label for="nama_rekening">Nama Pemilik Rekening :</label></td>
                <td><input type="text" id="nama_rekening" name="nama_rekening"></td>
            </tr>
            <tr>
                <td style="padding-right: 15px;"><label for="nomor_rekening">Nomor Rekening :</label></td>
                <td><input type="text" id="nomor_rekening" name="nomor_rekening"></td>
            </tr>
            <tr>
                <td style="padding-right: 15px;"><label>Upload Bukti Transfer :</label></td>
                <td><button type="button">upload</button></td>
            </tr>
        </table>

        <div style="margin-top: 20px;">
            <button type="submit">Konfirmasi Pembayaran</button>
        </div>
    </form>
        <div style="margin-top: 20px;">
            <a href="/Users/cancel">Batal Pembayaran</a>
        </div>
    
    <div style="margin-top: 10px;">
        <a href="/Users/pemesanan">Kembali ke Pemesanan</a>
    </div>

</div>
</body>
</html>