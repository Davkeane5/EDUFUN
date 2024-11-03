
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF Blog</title>
    
</head>
<body class="bg-white">
    <nav class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-8 w-auto" src="<?php echo e(asset('images/logo.png')); ?>" alt="IF Logo">
                    </div>
                </div>
                <div class="flex items-center">
                    <a href="#" class="px-3 py-2 text-gray-700">Home</a>
                    <div class="relative group">
                        <button class="px-3 py-2 text-gray-700 group-hover:text-blue-600">
                            Category
                            <svg class="ml-1 w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block w-48 bg-white shadow-lg py-1">
                            
                        </div>
                    </div>
                    <a href="#" class="px-3 py-2 text-gray-700">Writers</a>
                    <a href="#" class="px-3 py-2 text-gray-700">About Us</a>
                    <a href="#" class="px-3 py-2 text-gray-700">Popular</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="bg-navy-900 text-white py-4 mt-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>© EdaFun 2024 | Web Programming | Your Name | Your NIM</p>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\Users\David Keane\EduFuntest2\resources\views/app.blade.php ENDPATH**/ ?>