<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pemesanan</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f4f4; /* Latar belakang abu-abu muda */
            margin: 0;
            padding: 20px;
        }

        /* Container utama di tengah */
        .container {
            max-width: 650px;
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

        /* Kotak Info Penginapan di atas */
        .info-box {
            width: 100%;
            margin-bottom: 25px;
            background-color: #f9f9f9;
            border: 1px solid #e9e9e9;
            border-radius: 8px;
            padding: 20px;
            box-sizing: border-box; /* Agar padding tidak menambah width */
        }
        .info-box td {
            vertical-align: top;
        }
        .info-box .image-placeholder {
            width: 100px;
            height: 80px;
            border: 1px solid #ccc;
            background: #eee;
            text-align: center;
            line-height: 80px;
            border-radius: 5px;
            color: #888;
        }
        .info-box b {
            font-size: 1.1rem;
            color: #333;
        }
        .info-box p {
            margin: 5px 0 0 0;
            color: #555;
            font-size: 0.9rem;
        }

        /* Styling Form */
        form table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px; /* Memberi jarak antar baris <tr> */
        }
        form label {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            color: #444;
        }
        /* Memberi style pada semua input text & email */
        input[type="text"],
        input[type="email"] {
            width: 100%; /* Membuat input full width */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box; /* Penting agar padding tidak merusak width */
        }
        
        .total-sewa-cell {
            padding-top: 25px; /* Menyesuaikan agar sejajar dengan input */
            font-size: 1.1rem;
            line-height: 1.4;
        }

        /* Tombol */
        .btn {
            display: block;
            width: 100%;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: background-color 0.2s;
            font-size: 16px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }

        .link-kembali {
            display: block;
            text-align: center;
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

        <h3>Form Pemesanan Penginapan</h3>

        <table class="info-box">
            <tr>
                <td>
                    <div class="image-placeholder">X</div>
                </td>
                <td style="vertical-align: top; padding-left: 15px;">
                    <b>Penginapan Deby</b>
                    <p>Lokasi : Jl Dirgantara No.24</p>
                    <p>Harga : Rp. 350.000/Malam</p>
                </td>
            </tr>
        </table>

        <form action="/Users/Pembayaran" method="POST">
            @csrf
            <table>
                <tr>
                    <td colspan="2">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%; padding-right: 8px;">
                        <label for="telepon">No.Telepon</label>
                        <input type="text" id="telepon" name="telepon">
                    </td>
                    <td style="width: 50%; padding-left: 8px;">
                        <label for="check_out">Check-out</label>
                        <input type="text" id="check_out" name="check_out">
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%; padding-right: 8px;">
                        <label for="tamu">Jumlah tamu</label>
                        <input type="text" id="tamu" name="tamu">
                    </td>
                    <td class="total-sewa-cell" style="width: 50%; padding-left: 8px;">
                        <b>Total sewa</b><br>
                        Rp. 700.000 (2 malam)
                    </td>
                </tr>
            </table>

            <div style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Lanjut ke pembayaran</button>
            </div>
        </form>
        
        <div style="margin-top: 10px;">
            <a href="/Users/detail" class="link-kembali">Kembali ke detail penginapan</a>
        </div>
    </div>

</body>
</html>