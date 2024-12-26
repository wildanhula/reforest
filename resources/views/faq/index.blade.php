<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions</title>
    @vite('resources/css/app.css')

    <script>
      document.addEventListener('DOMContentLoaded', () => {
          const cards = document.querySelectorAll('.faq-card');
          cards.forEach(card => {
              card.addEventListener('click', () => {
                  const content = card.querySelector('.faq-content');
                  const isHidden = content.classList.contains('hidden');
                  content.classList.toggle('hidden', !isHidden);
                  const button = card.querySelector('button');
                  button.textContent = isHidden ? '-' : '+';
              });
          });
      });
  </script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
  <!-- Header -->
  <header class="w-full bg-[#D2E2E2] shadow-md border-b border-gray-300">
      <div class="container mx-auto flex justify-between items-center px-6 py-4">
          <img src="img/Logo.png" alt="Logo" class="w-12 h-12">

          <div class="flex items-center gap-4">
              <nav class="flex gap-6">
                  <a href="{{ route('dashboard') }}" class="text-[#004C6D] font-medium hover:underline">Home</a>
                  <a href="{{ ('location.Lokasi') }}" class="text-[#004C6D] font-medium hover:underline">Lokasi</a>
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

  <!-- FAQ Section -->
  <div class="w-full bg-gray-100 py-16 flex-grow">
      <div class="text-center text-teal-800 text-4xl font-bold">Frequently Asked Questions</div>

      <div class="w-3/5 mx-auto mt-12 space-y-6">
          <!-- Question 1 -->
          <div class="p-6 bg-white border border-gray-300 rounded-md shadow-md faq-card cursor-pointer">
              <div class="flex justify-between items-center">
                  <div class="text-lg font-bold text-teal-900">Apa yang perlu disiapkan untuk mendaftar?</div>
                  <button class="text-gray-500 focus:outline-none">+</button>
              </div>
              <div class="mt-4 p-4 bg-[#D2E2E2] text-[#004C6D] hidden faq-content rounded-md">Cukup data diri dan email yaa</div>
          </div>

          <!-- Question 2 -->
          <div class="p-6 bg-white border border-gray-300 rounded-md shadow-md faq-card cursor-pointer">
              <div class="flex justify-between items-center">
                  <div class="text-lg font-bold text-teal-900">Apa yang bisa kita lakukan jika telah mendaftar?</div>
                  <button class="text-gray-500 focus:outline-none">+</button>
              </div>
              <div class="mt-4 p-4 bg-[#D2E2E2] text-[#004C6D] hidden faq-content rounded-md">Yang pertama bisa membaca artikel dan tracking pohon</div>
          </div>
      </div>
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
