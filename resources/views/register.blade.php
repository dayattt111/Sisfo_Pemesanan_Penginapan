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
    
    <h3>Daftar akun baru</h3>

    <form action="Admin/dashboard" method="POST">
    {{-- <form action="Users/dashboard" method="POST"> --}}
        @csrf
        <table style="margin-left: auto; margin-right: auto; border-spacing: 0 10px;">
            <tr>
                <td style="text-align: left; padding-right: 15px;">
                    <label for="nama_lengkap">Nama lengkap</label>
                </td>
                <td>
                    <input type="text" id="nama_lengkap" name="nama_lengkap">
                </td>
            </tr>
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
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" id="email" name="email">
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
            <button type="submit">Daftar</button>
        </div>
    </form>

    <div style="margin-top: 20px;">
        <a href="/">Sudah punya akun? Login disini</a>
    </div>

</div>    
</body>
</html>