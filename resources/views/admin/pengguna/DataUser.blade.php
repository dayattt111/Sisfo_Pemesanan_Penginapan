<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Pengguna</title>
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
                    <a href="#" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Kelola Pembayaran
                    </a>
                    <a href="#" class="block px-4 py-2 rounded-md text-sm font-medium bg-gray-700 text-white">
                        Kelola Pengguna
                    </a>
                    <a href="#" class="block px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                        Laporan Transaksi
                    </a>
                </nav>
            </aside>

            <main class="flex-1 p-6 overflow-auto">
                
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Kelola Pengguna</h2>

                <div class="mb-4">
                    <button class="bg-green-500 text-white px-4 py-2 rounded-md shadow hover:bg-green-600 transition-colors duration-200">
                        + Tambah Pengguna
                    </button>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Debora
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    Debora@gmail.com
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="bg-blue-500 text-white px-4 py-1 rounded-md shadow hover:bg-blue-600 transition-colors duration-200">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    2
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Budi Santoso
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    budi.s@example.com
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