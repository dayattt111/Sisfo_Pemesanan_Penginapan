<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Pembayaran</title>
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
                    <a href="#" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Dashboard
                    </a>
                    <a href="#" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Kelola penginapan
                    </a>
                    <a href="#" class="block px-4 py-2 rounded-md text-sm font-medium bg-gray-700 text-white">
                        Kelola Pembayaran
                    </a>
                    <a href="#" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Kelola Pengguna
                    </a>
                    <a href="#" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Laporan Transaksi
                    </a>
                </nav>
            </aside>

            <main class="flex-1 p-6 overflow-auto">
                
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Kelola Pembayaran</h2>

                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded" role="alert">
                    <span class="block sm:inline">Pembayaran berhasil diverifikasi.</span>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Penginapan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Pengguna</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Penginapan deby
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    Debora
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    Debora@gmail.com
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    Rp.350.000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="bg-yellow-500 text-white px-4 py-1 rounded-md shadow hover:bg-yellow-600 transition-colors duration-200">
                                        Verifikasi
                                    </button>
                                </td>
                            </tr>

                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Hotel Sentosa
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    Budi
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    budi@example.com
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    Rp.700.000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <span class="text-green-600 font-semibold">Terverifikasi</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="mt-8 bg-white p-6 rounded-lg shadow-lg max-w-md">
                    <p class="text-lg font-semibold text-gray-800 mb-4">
                        Verifikasi pembayaran atas nama deby?
                    </p>
                    <div class="flex justify-end space-x-3">
                        <button class="px-4 py-2 rounded-md bg-gray-200 text-gray-800 hover:bg-gray-300 transition-colors">
                            Batal
                        </button>
                        <button class="px-4 py-2 rounded-md bg-green-500 text-white hover:bg-green-600 transition-colors">
                            Ya
                        </button>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>
</html>