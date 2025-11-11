<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Data Penginapan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex flex-col h-screen">
        
        <header class="bg-white shadow-md p-4 flex justify-between items-center z-10">
            <h1 class="text-xl font-bold text-gray-800">
                Sistem Informasi Pemesanan Penginapan
            </h1>
            <button class="text-gray-600 hover:text-gray-900 focus:outline-none">
                Admin
            </button>
        </header>

        <div class="flex flex-1 overflow-hidden">
            <aside class="w-64 bg-gray-800 text-white p-6 shadow-lg">
                <nav class="space-y-2">
                    <a href="/Admin/dashboard" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Dashboard
                    </a>
                    <a href="/Admin/kelolaPenginapan" class="block px-4 py-2 rounded-md text-sm font-medium bg-gray-700">
                        Kelola penginapan
                    </a>
                    <a href="/Admin/kelolaPembayaran" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Kelola Pembayaran
                    </a>
                    <a href="/Admin/kelolaPengguna" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Kelola Pengguna
                    </a>
                    <a href="/Admin/laporan" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Laporan Transaksi
                    </a>
                    {{-- <button class="bg-red-500 text-white px-4 py-2 rounded-md shadow hover:bg-red-600 transition-colors duration-200">
                        Logout
                    </button> --}}
                </nav>
            </aside>

            <main class="flex-1 p-6 overflow-auto">
                
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-800">Kelola Data Penginapan</h2>
                </div>

                <div class="mb-4">
                    <button class="bg-green-500 text-white px-4 py-2 rounded-md shadow hover:bg-green-600 transition-colors duration-200">
                        + Tambah Penginapan
                    </button>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lokasi</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="w-24 h-16 bg-gray-200 flex items-center justify-center text-gray-500 rounded">
                                        X
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Penginapan deby
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    Jl Dirgantara No.24
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    Rp.350.000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="bg-blue-500 text-white px-4 py-1 rounded-md shadow hover:bg-blue-600 transition-colors duration-200">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>