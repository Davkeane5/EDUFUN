<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Science - EduFun</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }
      
      header {
        background-color: #fff;
        padding: 20px 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }
      
      .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 20px;
      }
      
      h1 {
        font-size: 2.5em;
        margin-bottom: 10px;
        color: #333;
      }
      
      h2 {
        font-size: 1.8em;
        margin-bottom: 10px;
        color: #333;
      }
      
      .article-card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        overflow: hidden;
      }
      
      .article-card img {
        width: 100%;
        height: auto;
      }
      
      .article-card .content {
        padding: 20px;
      }
      
      .article-card h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
        color: #333;
      }
      
      .article-card p {
        line-height: 1.6;
        color: #666;
      }
      
      .article-card .read-more {
        display: block;
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s ease;
      }
      
      .article-card .read-more:hover {
        background-color: #0056;
      }
    </style>
</head>
<body>
    
    <header class="bg-gray-100 py-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="/" class="font-bold text-xl">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="EduFun Logo" class="h-8">
            </a>
            <nav>
                <ul class="nav-links">
                    <a href="/" class="hover:underline">Home</a>
                    <a href="<?php echo e(route('categories')); ?>">Category</a>
                    <a href="<?php echo e(route('writer')); ?>">Writer</a>
                    <a href="<?php echo e(route('aboutus')); ?>">About Us</a>
                    <a href="/popular" class="hover:underline">Popular</a>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-4">Data Science</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="<?php echo e(asset('images/machine-learning.jpg')); ?>" alt="Machine Learning" class="rounded-lg mb-4">
                <h2 class="text-xl font-bold mb-2">Machine Learning</h2>
                <p class="text-gray-700 mb-4">
                    Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI),...
                </p>
                <a href="#" class="bg-blue-500 hover:bg -blue-700 text-white font-bold py-2 px-4 rounded">
                    Read More
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="<?php echo e(asset('images/data-science.jpg')); ?>" alt="Data Science" class="rounded-lg mb-4">
                <h2 class="text-xl font-bold mb-2">Data Science</h2>
                <p class="text-gray-700 mb-4">
                    Data science adalah suatu bidang ilmu yang mempelajari tentang cara mengumpulkan, mengolah, dan...
                </p>
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Read More
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-gray-100 py-4 mt-10">
        <div class="container mx-auto flex items-center justify-between">
            <p class="text-gray-700">Copyright 2023 EduFun. All rights reserved.</p>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:underline">Facebook</a></li>
                <li><a href="#" class="hover:underline">Twitter</a></li>
                <li><a href="#" class="hover:underline">Instagram</a></li>
            </ul>
        </div>
    </footer>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\David Keane\EduFuntest2\resources\views/layouts/app.blade.php ENDPATH**/ ?>