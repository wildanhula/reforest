<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reforest</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-white-100">

  <!-- Wrapper -->
  <div class="flex flex-col min-h-screen">

 <!-- Header -->
 <header class="w-full bg-[#D2E2E2] shadow-md border-b border-gray-300">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <img src="img/Logo.png" alt="Logo" class="w-12 h-12">

      <div class="flex items-center gap-4">
        <nav class="flex gap-6">
          <a href="{{ route('dashboard') }}" class="text-[#004C6D] font-medium hover:underline">Home</a>
          <a href="" class="text-[#004C6D] font-medium hover:underline">Lokasi</a>                <a href="{{ route('pohon.index') }}" class="text-[#004C6D] font-medium hover:underline">Pohonku</a>
                <a href="{{ route('artikel.index') }}" class="text-[#004C6D] font-medium hover:underline">Artikel</a>
                <a href="{{ route('faq.index') }}" class="text-[#004C6D] font-medium hover:underline">FAQs</a>
        </nav>
        <div class="flex items-center space-x-4">
          <img src="img/IMG_1696.JPG" alt="Profile Picture" class="w-10 h-10 rounded-full">
          <div class="text-gray-700">
            <span>Rofi Pratama</span>
          </div>
          <a href="{{ route('logout') }}" class="bg-[#004C6D] text-white py-1 px-4 border rounded-full hover:border-[#004C6D] hover:bg-white hover:text-[#004C6D]">Logout</a>
        </div>
      </div>
    </div>
  </header>

    <!-- Main Content -->
    <main class="container mx-auto my-12 px-6 flex-1">
      <!-- Card Section -->
      <div class="grid gap-8">
        <!-- Pohon Pinus Sumatera -->
        <div class="flex bg-white rounded-xl shadow overflow-hidden">
          <img src="img/image1.png" alt="Pohon Pinus Sumatera" class="w-1/3 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-[#1E4D4D]">Pohon Pinus Sumatera</h3>
            <p class="text-gray-600 mt-2">
              Pohon Pinus Sumatera (Pinus merkusii) adalah salah satu spesies pohon konifer yang tumbuh di wilayah tropis, khususnya di Sumatera, Indonesia. Pohon ini dikenal sebagai satu-satunya spesies pinus yang tumbuh alami di kawasan tropis dunia.
            </p>
          </div>
        </div>

        <!-- Pohon Eboni -->
        <div class="flex bg-white rounded-xl shadow overflow-hidden">
          <img src="img/image2.png" alt="Pohon Eboni" class="w-1/3 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-[#1E4D4D]">Pohon Eboni</h3>
            <p class="text-gray-600 mt-2">
              Pohon Eboni (Diospyros celebica) adalah salah satu jenis pohon endemik yang tumbuh di Sulawesi, Indonesia. Pohon ini dikenal dengan kayunya yang keras, padat, dan memiliki warna hitam pekat yang sering diselingi garis-garis cokelat atau kuning.
            </p>
          </div>
        </div>

        <!-- Pohon Jati -->
        <div class="flex bg-white rounded-xl shadow overflow-hidden">
          <img src="img/image3.png" alt="Pohon Jati" class="w-1/3 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-[#1E4D4D]">Pohon Jati</h3>
            <p class="text-gray-600 mt-2">
              Pohon Jati (Tectona grandis) adalah salah satu spesies pohon yang dikenal karena kualitas kayunya yang sangat baik dan tahan lama. Jati sering digunakan untuk konstruksi dan furnitur.
            </p>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 py-6">
      <div class="container mx-auto text-center text-sm text-gray-600">
        <div class="flex justify-center space-x-4">
          <a href="#" class="hover:underline">Syarat dan Ketentuan</a>
          <a href="#" class="hover:underline">FAQ</a>
          <a href="#" class="hover:underline">Kontak</a>
          <a href="#" class="hover:underline">Offline</a>
        </div>
        <p class="mt-4">Copyright © 2024 Reforest. All rights reserved.</p>
      </div>
    </footer>
    
  </div>
  
</body>
</html>
