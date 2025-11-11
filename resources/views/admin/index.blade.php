<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sistem Informasi Pemesanan Penginapan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen">
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-6 border-b border-gray-700">
                <h1 class="text-2xl font-semibold">Hi Admin</h1>
            </div>
            <nav class="flex-1 p-6 space-y-2">
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-200 bg-gray-700">Dashboard</a>
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-200">Kelola Penginapan</a>
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-200">Kelola Pembayaran</a>
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-200">Kelola Pengguna</a>
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-200">Laporan Transaksi</a>
            </nav>
            <div class="p-6 border-t border-gray-700">
                <button class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition-colors duration-200">Logout</button>
            </div>
        </aside>

        <main class="flex-1 flex flex-col overflow-hidden">
            <header class="flex items-center justify-between bg-white p-4 border-b border-gray-200 shadow-sm">
                <div class="text-xl font-semibold text-gray-800">Sistem Informasi Pemesanan Penginapan</div>
                <div class="flex items-center space-x-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">Admin</button>
                </div>
            </header>

            <div class="flex-1 overflow-auto p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">Selamat Datang, Admin!</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-center h-32">
                        <span class="text-xl text-gray-600">Total Penginapan</span>
                        </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-center h-32">
                        <span class="text-xl text-gray-600">Total Pengguna</span>
                        </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-center h-32">
                        <span class="text-xl text-gray-600">Total Transaksi</span>
                        </div>
                </div>

                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Transaksi Terbaru:</h2>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Transaksi</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penginapan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pengguna</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">TRX001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Penginapan Sentosa</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">John Doe</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2023-10-26</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 500.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pending</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6 flex justify-end space-x-3">
                        <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-200">Tambah</button>
                        <button class="bg-gray-400 text-white px-4 py-2 rounded-md hover:bg-gray-500 transition-colors duration-200">Cetak</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>