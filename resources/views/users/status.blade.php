<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status Pemesanan</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        /* Container utama di tengah */
        .container {
            max-width: 800px; /* Sedikit lebih lebar untuk tabel */
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

        /* Styling Notifikasi */
        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Styling Tabel */
        .status-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 0.95rem;
        }
        .status-table thead th {
            background-color: #007bff; /* Header Biru */
            color: white;
            padding: 12px 8px;
            text-align: left;
            border-bottom: 2px solid #0056b3;
        }
        .status-table tbody td {
            padding: 10px 8px;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }
        .status-table tbody tr:last-child td {
            border-bottom: none;
        }
        .status-table tbody tr:hover {
            background-color: #f9f9f9;
        }

        /* Kolom Status */
        .status-tag {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.85rem;
            color: white;
            /* Contoh status: Pembayaran */
            background-color: #ffc107; /* Kuning */
            color: #343a40;
        }
        
        /* Tombol Aksi */
        .action-link {
            display: inline-block;
            padding: 6px 12px;
            background-color: #28a745; /* Hijau */
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.9rem;
            transition: background-color 0.2s;
            text-align: center;
        }
        .action-link:hover {
            background-color: #1e7e34;
        }

        .action-cell {
            text-align: center !important; /* Memaksa ke kanan untuk tombol */
        }
    </style>
</head>
<body>

    <div class="container">

        <h3>Status Pemesanan</h3>

        <div class="alert alert-success">
            Status pemesanan berhasil dimuat.
        </div>
        
        <div class="alert alert-danger" style="display: none;">
             Gagal memuat data pemesanan.
        </div>

        <table class="status-table">
            <thead>
                <tr>
                    <th>Nama Penginapan</th>
                    <th>Tanggal Check-in</th>
                    <th>Tanggal Check-out</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Penginapan Sentosa</td>
                    <td>12 November 2025</td>
                    <td>14 November 2025</td>
                    <td style="text-align: center;">
                        <span class="status-tag">Menunggu Pembayaran</span>
                    </td>
                    <td class="action-cell">
                        <a class="action-link" href="/Users/detailPesanan">Detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>