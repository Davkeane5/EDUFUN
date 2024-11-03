<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <a href="<?php echo e(url('/')); ?>">Kembali ke Homepage</a>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <!-- Navbar -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">EduFun</h1>
            <nav class="space-x-6">
                <a href="/" class="text-gray-700 hover:text-gray-900">Home</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Category</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Writers</a>
                <a href="/about" class="text-blue-600 hover:text-blue-800">About Us</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Popular</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="container mx-auto px-4 py-16 text-center">
        <h2 class="text-3xl font-bold mb-4">About EduFun</h2>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6">
            EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.
        </p>
        <p class="text-gray-700 max-w-2xl mx-auto">
            Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar.
        </p>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-4 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>© EduFun 2024 | Web Programming | Your Name | Your NIM</p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\David Keane\EduFuntest2\resources\views/aboutus.blade.php ENDPATH**/ ?>