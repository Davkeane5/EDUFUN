<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Writers</title>
    <a href="<?php echo e(url('/')); ?>">Kembali ke Homepage</a>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-lg font-bold">EduFun</div>
            <div class="space-x-6">
                <a href="/" class="text-gray-700 hover:text-gray-900">Home</a>
                <a href="/categories" class="text-gray-700 hover:text-gray-900">Category</a>
                <a href="/writers" class="text-blue-600 font-semibold">Writers</a>
                <a href="/about-us" class="text-gray-700 hover:text-gray-900">About Us</a>
                <a href="/popular" class="text-gray-700 hover:text-gray-900">Popular</a>
            </div>
        </div>
    </nav>

    <!-- Writers Section -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-semibold mb-8 text-center">Our Writers:</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Writer 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="https://via.placeholder.com/150" alt="Raka Putra Wicaksono" class="mx-auto mb-4 rounded-full">
                <h3 class="text-xl font-semibold">Raka Putra Wicaksono</h3>
                <p class="text-gray-600">Spesialis Interactive Multimedia</p>
            </div>

            <!-- Writer 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="https://via.placeholder.com/150" alt="Bia Mecca Annisa" class="mx-auto mb-4 rounded-full">
                <h3 class="text-xl font-semibold">Bia Mecca Annisa</h3>
                <p class="text-gray-600">Spesialis Data Science</p>
            </div>

            <!-- Writer 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="https://via.placeholder.com/150" alt="Abi Firmansyah" class="mx-auto mb-4 rounded-full">
                <h3 class="text-xl font-semibold">Abi Firmansyah</h3>
                <p class="text-gray-600">Spesialis Network Security</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            © EduFun 2024 | Web Programming | Your Name | Your NIM
        </div>
    </footer>

</body>
</html>

<?php /**PATH C:\Users\David Keane\EduFuntest2\resources\views/writer.blade.php ENDPATH**/ ?>