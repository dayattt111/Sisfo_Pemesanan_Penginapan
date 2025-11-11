<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="text-align: center; width: 400px; margin: auto; border: 1px solid #000; padding: 20px;">
    
    <h3>Sistem Informasi Pemesanan Penginapan</h3>

    <form action="Admin/dashboard" method="POST">
    {{-- <form action="Users/dashboard" method="POST"> --}}
        @csrf
        <table style="margin-left: auto; margin-right: auto; border-spacing: 0 10px;">
            <tr>
                <td style="text-align: left; padding-right: 15px;">
                    <label for="username">Username</label>
                </td>
                <td>
                    <input type="text" id="username" name="username">
                </td>
            </tr>
            <tr>
                <td style="text-align: left; padding-right: 15px;">
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" id="password" name="password">
                </td>
            </tr>
        </table>

        <div style="margin-top: 10px;">
            <button type="submit">login</button>
        </div>
    </form>

    <div style="margin-top: 20px;">
        <a href="/Register">Belum memiliki akun? Daftar sekarang</a>
    </div>

</div>
</body>
</html>