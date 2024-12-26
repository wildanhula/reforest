<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="w-full bg-[#D2E2E2] shadow-md border-b border-gray-300">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">
            <img src="img/Logo.png" alt="Logo" class="w-12 h-12">
            <nav class="flex gap-6">
                <a href="#" class="text-[#004C6D] font-medium hover:underline">Home</a>
                <a href="#" class="text-[#004C6D] font-medium hover:underline">Lokasi</a>
                <a href="#" class="text-[#004C6D] font-medium hover:underline">Pohonku</a>
                <a href="#" class="text-[#004C6D] font-medium hover:underline">Artikel</a>
                <a href="#" class="text-[#004C6D] font-medium hover:underline">FAQs</a>
            </nav>
        </div>
    </header>

    <!-- Update Data Section -->
    <div class="container mx-auto my-16 bg-white shadow-md border border-gray-300 rounded-md p-8">
        <h1 class="text-2xl font-bold text-teal-900 mb-6 text-center">Update Data Diri</h1>
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <!-- Profile Picture -->
            <div class="w-40 h-40">
                <img src="img/profile.jpg" alt="Profile Picture" class="w-full h-full rounded-md object-cover border border-gray-300">
            </div>

            <!-- Profile Update Form -->
            <form class="flex-1 space-y-6">
                <div>
                    <label for="name" class="block text-gray-700 font-medium">Nama Pelanggan*</label>
                    <input type="text" id="name" placeholder="Nama" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                </div>
                <div>
                    <label for="phone" class="block text-gray-700 font-medium">No Telepon</label>
                    <input type="text" id="phone" placeholder="08123456789" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                </div>
                <div>
                    <label for="birthplace" class="block text-gray-700 font-medium">Tempat Lahir</label>
                    <div class="grid grid-cols-3 gap-4">
                        <input type="text" placeholder="Hari" class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                        <input type="text" placeholder="Tanggal" class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                        <input type="text" placeholder="Tahun" class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" placeholder="email@example.com" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                </div>
                <div>
                    <label for="ktp" class="block text-gray-700 font-medium">Foto</label>
                    <input type="file" id="ktp" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                </div>
                <button type="submit" class="w-full bg-teal-500 text-white py-2 rounded-md hover:bg-teal-600">Submit</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w-full bg-[#D2E2E2] py-6">
        <div class="container mx-auto text-center">
            <nav class="flex justify-center gap-6 mb-4">
                <a href="#" class="text-[#004C6D] text-sm hover:underline">Syarat dan Ketentuan</a>
                <a href="#" class="text-[#004C6D] text-sm hover:underline">FAQs</a>
                <a href="#" class="text-[#004C6D] text-sm hover:underline">Kontak</a>
                <a href="#" class="text-[#004C6D] text-sm hover:underline">Offline</a>
            </nav>
            <p class="text-gray-700 text-sm">Copyright © 2024 Reforest. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
