<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex flex-col h-screen">
        
        <header class="bg-white shadow-md p-4 flex justify-between items-center z-10">
            <h1 class="text-xl font-bold text-gray-800">
                Sistem Informasi Pemesanan Penginapan
            </h1>
            <button class="text-gray-600 hover:text-gray-900 focus:outline-none">
                Admin &lt;
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
                
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Selamat Datang, Admin!</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-medium text-gray-600 mb-2">Total Pengguna</h3>
                        <p class="text-4xl font-bold text-gray-900">0</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-medium text-gray-600 mb-2">Total Penginapan</h3>
                        <p class="text-4xl font-bold text-gray-900">0</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-medium text-gray-600 mb-2">Transaksi Selesai</h3>
                        <p class="text-4xl font-bold text-gray-900">0</p>
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-gray-800 mb-4">Transaksi Terbaru:</h3>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Transaksi</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pengguna</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penginapan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">TR001</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Debora</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Penginapan deby</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Rp.350.000</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Selesai
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button class="bg-green-500 text-white px-4 py-2 rounded-md shadow hover:bg-green-600 transition-colors duration-200">
                        Tambah
                    </button>
                    <button class="bg-gray-600 text-white px-4 py-2 rounded-md shadow hover:bg-gray-700 transition-colors duration-200">
                        Cetak
                    </button>
                </div>

            </main>
        </div>
    </div>

</body>
</html>