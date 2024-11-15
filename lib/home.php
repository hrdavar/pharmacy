<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Example</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Navbar -->
  <nav class="bg-orange-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-white text-lg font-bold">My Website</h1>
      <ul class="flex space-x-4">
        <li><a href="#" class="text-white hover:text-gray-200">Home</a></li>
        <li><a href="#" class="text-white hover:text-gray-200">Medical</a></li>
        <li><a href="#" class="text-white hover:text-gray-200">Find Pharmacy</a></li>
        <li><a href="#" class="text-white hover:text-gray-200">Login</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-white py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4">Welcome to Tailwind CSS</h2>
      <p class="text-gray-600 mb-6">Build modern, responsive designs quickly and easily.</p>
      <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">Get Started</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 py-4">
    <div class="container mx-auto text-center text-white">
      <p>&copy; 2024 My Website. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>