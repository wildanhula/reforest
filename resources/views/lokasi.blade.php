<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lokasi - Reforest</title>  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Navbar -->
    <header class="w-full bg-[#D2E2E2] shadow-md border-b border-gray-300">
      <div class="container mx-auto flex justify-between items-center px-6 py-4">
        <img src="img/Logo.png" alt="Logo" class="w-12 h-12">
  
        <div class="flex items-center gap-4">
            <nav class="flex gap-6">
                <a href="{{ route('dashboard') }}" class="text-[#004C6D] font-medium hover:underline">Home</a>
                <a href="{{ route('location.index') }}" class="text-[#004C6D] font-medium hover:underline">Lokasi</a>
                <a href="{{ route('pohon.index') }}" class="text-[#004C6D] font-medium hover:underline">Pohonku</a>
                <a href="{{ route('artikel.index') }}" class="text-[#004C6D] font-medium hover:underline">Artikel</a>
                <a href="{{ route('faq.index') }}" class="text-[#004C6D] font-medium hover:underline">FAQs</a>
              </nav>
          <div class="flex items-center space-x-4">
            <img src="img/IMG_1696.JPG" alt="Profile Picture" class="w-10 h-10 rounded-full">
            <div class="text-gray-700">
              <span>Rofi Pratama</span>
            </div></a>
            <a href="{{ route('logout') }}" class="bg-[#004C6D] text-white py-1 px-4 border rounded-full hover:border-[#004C6D] hover:bg-white hover:text-[#004C6D]">Logout</a>
          </div>
        </div>
      </div>
    </header>
  
    <!-- Main Content -->
    <div class="container mx-auto flex mt-8 flex-grow">
      <!-- Left Side - List of Trees -->
      <div class="w-1/2 p-4">
        <h1 class="text-2xl font-bold mb-6">Menampilkan semua lokasi</h1>
        <!-- Tree List -->
        <div class="mb-16">
          <h2 class="text-lg font-semibold">Pohon Pinus</h2>
          <p class="text-gray-600">Rofi Pratama, Pudjon Batu, 15 November 2024</p>
        </div>
      </div>
      <!-- Right Side - Map -->
      <div class="w-1/2 p-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d75201.09659762311!2d112.48497645359075!3d-7.866706895383886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1735130961087!5m2!1sen!2sid" width="800" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
    </div>
  
    <!-- Footer -->
    <footer class="w-full bg-[#D2E2E2] py-6 mt-auto">
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