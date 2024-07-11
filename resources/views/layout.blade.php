<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-blue-900 text-white py-4">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-bold">Lab1 - PH42465</h1>
    </div>
  </header>

  <!-- Menu -->
  <nav class="bg-blue-800 text-white py-2">
    <div class="container mx-auto px-4">
      <ul class="flex space-x-4">
        <li><a href="#" class="hover:text-gray-300">Trang Chủ</a></li>
        <li><a href="/category" class="hover:text-gray-300">Danh sách loại sách</a></li>
        <li><a href="#" class="hover:text-gray-300">Dịch Vụ</a></li>
        <li><a href="#" class="hover:text-gray-300">Liên Hệ</a></li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-8">
   @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-blue-900 text-white py-4">
    <div class="container mx-auto px-4">
      <p class="text-center">&copy; Lab1 - PH42465.</p>
    </div>
  </footer>

</body>

</html>
