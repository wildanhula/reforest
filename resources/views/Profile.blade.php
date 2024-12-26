<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="w-full bg-[#D2E2E2] shadow-md border-b border-gray-300">
        <div class="flex items-center gap-4">
            <nav class="flex gap-6">
                <a href="{{ route('dashboard') }}" class="text-[#004C6D] font-medium hover:underline">Home</a>
                <a href="#" class="text-[#004C6D] font-medium hover:underline">Lokasi</a>
                <a href="{{ route('pohon.index') }}" class="text-[#004C6D] font-medium hover:underline">Pohonku</a>
                <a href="{{ route('artikel.index') }}" class="text-[#004C6D] font-medium hover:underline">Artikel</a>
                <a href="{{ route('faq.index') }}" class="text-[#004C6D] font-medium hover:underline">FAQs</a>
              </nav>
          <div class="flex items-center space-x-4">
            <a href="{{ route(Profile) }}">
            <img src="img/IMG_1696.JPG" alt="Profile Picture" class="w-10 h-10 rounded-full">
            <div class="text-gray-700">
              <span>Rofi Pratama</span>
            </div></a>
            <a href="{{ route('logout') }}" class="bg-[#004C6D] text-white py-1 px-4 border rounded-full hover:border-[#004C6D] hover:bg-white hover:text-[#004C6D]">Logout</a>
          </div>
        </div>
    </header>

    <!-- Profile Section -->
    <div class="container mx-auto my-16 bg-white shadow-md border border-gray-300 rounded-md p-8">
        <h1 class="text-2xl font-bold text-teal-900 mb-6 text-center">Data Diri</h1>
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <!-- Profile Picture -->
            <div class="w-40 h-40">
                <img src="img/profile.jpg" alt="Profile Picture" class="w-full h-full rounded-md object-cover border border-gray-300">
            </div>

            <!-- Profile Form -->
            <form class="flex-1 space-y-4">
                <div>
                    <label for="name" class="block text-gray-700 font-medium">Nama</label>
                    <input type="text" id="name" placeholder="Masukkan nama Anda" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                </div>
                <div>
                    <label for="phone" class="block text-gray-700 font-medium">Nomor Telepon</label>
                    <input type="text" id="phone" placeholder="08123456789" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                </div>
                <div>
                    <label for="birthdate" class="block text-gray-700 font-medium">Tanggal Lahir</label>
                    <input type="date" id="birthdate" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" placeholder="email@example.com" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400">
                </div>
                <button type="submit" class="w-full bg-teal-500 text-white py-2 rounded-md hover:bg-teal-600">Update</button>
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
