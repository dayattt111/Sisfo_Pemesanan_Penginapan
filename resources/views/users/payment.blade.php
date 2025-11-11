<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ringkasan Pemesanan</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f4f4; /* Latar belakang abu-abu muda */
            margin: 0;
            padding: 20px;
        }

        /* Container utama di tengah */
        .container {
            max-width: 550px;
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
            margin-top: 25px;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
            color: #444;
        }

        /* Kotak Ringkasan Pesanan */
        .summary-box {
            border: 1px solid #e0e0e0;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box; /* Agar padding tidak menambah width */
            line-height: 1.5; /* Jarak antar baris */
            color: #555;
        }
        .summary-box b {
            color: #333;
            font-size: 1.1rem;
        }

        /* Opsi Metode Pembayaran */
        .payment-options div {
            margin-bottom: 8px;
        }
        .payment-options label {
            margin-left: 5px;
            color: #444;
        }

        /* Tabel Form */
        form table {
            margin-top: 20px;
            border-spacing: 0 15px; /* Jarak antar baris */
            width: 100%;
        }
        form td:first-child {
            padding-right: 15px;
            white-space: nowrap; /* Agar label tidak terpotong */
            color: #444;
            font-weight: 500;
        }

        /* Input Teks */
        input[type="text"] {
            width: 100%; /* Membuat input full width */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box; 
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
            font-size: 14px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            width: 100%; /* Tombol konfirmasi full-width */
            font-size: 16px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #eee;
            color: #333;
            border: 1px solid #ccc;
        }
        .btn-secondary:hover {
            background-color: #ddd;
        }
        
        /* Link */
        .link-kembali, .link-batal {
            display: block;
            text-align: center;
            text-decoration: none;
            margin-top: 15px;
        }
        .link-kembali {
            color: #555;
        }
        .link-batal {
            color: #dc3545; /* Merah untuk batal */
            font-weight: 500;
        }
        .link-kembali:hover, .link-batal:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="container">

        <h3>Ringkasan Pemesanan</h3>

        <div class="summary-box">
            <b>Penginapan deby</b><br>
            Lokasi: Jl dirgantara No.24<br>
            Check-in: 12 November 2025<br>
            Total : Rp. 700.000
        </div>

        <h4>Metode Pembayaran</h4>
        <form action="/Users/status" method="POST">
            @csrf
            <div class="payment-options">
                <div>
                    <input type="radio" id="tf_bank" name="metode" value="bank">
                    <label for="tf_bank">Transfer Bank</label>
                </div>
                <div>
                    <input type="radio" id="kredit" name="metode" value="kredit">
                    <label for="kredit">Kartu Kredit / Debit</label>
                </div>
                <div>
                    <input type="radio" id="ewallet" name="metode" value="ewallet">
                    <label for="ewallet">E-wallet (Ovo,Gopay,Dana)</label>
                </div>
            </div>
            
            <table>
                <tr>
                    <td><label for="nama_rekening">Nama Pemilik Rekening :</label></td>
                    <td><input type="text" id="nama_rekening" name="nama_rekening"></td>
                </tr>
                <tr>
                    <td><label for="nomor_rekening">Nomor Rekening :</label></td>
                    <td><input type="text" id="nomor_rekening" name="nomor_rekening"></td>
                </tr>
                <tr>
                    <td><label>Upload Bukti Transfer :</label></td>
                    <td><button type="button" class="btn btn-secondary">Upload File</button></td>
                </tr>
            </table>

            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
            </div>
        </form>
        
        <div>
            <a href="/Users/cancel" class="link-batal">Batal Pembayaran</a>
        </div>
        
        <div>
            <a href="/Users/pemesanan" class="link-kembali">Kembali ke Pemesanan</a>
        </div>

    </div>
</body>
</html>