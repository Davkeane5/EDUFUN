<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Hero Section -->
    <div class="relative h-96 rounded-lg overflow-hidden my-8">
        <img src="<?php echo e(asset('images/hero.jpg')); ?>" alt="Students studying" class="w-full h-full object-cover">
    </div>

    <!-- Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <div class="relative h-48">
                <img src="<?php echo e(asset('images/' . $article['image'])); ?>" alt="<?php echo e($article['title']); ?>" class="w-full h-full object-cover">
            </div>
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2"><?php echo e($article['title']); ?></h2>
                <div class="text-gray-500 text-sm mb-4">
                    <?php echo e($article['date']); ?> by <?php echo e($article['author']); ?>

                </div>
                <p class="text-gray-600 mb-4"><?php echo e($article['excerpt']); ?></p>
                <a href="#" class="inline-block bg-navy-900 text-white px-4 py-2 rounded hover:bg-navy-800">
                    read more...
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David Keane\EduFuntest2\resources\views/home.blade.php ENDPATH**/ ?>