
<div class="bg-sky-400 sm:flex-1">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
        <div class="flex sm:flex-1 sm:flex-row items-center justify-between h-full">
            <div class="flex sm:flex-1 items-center">

                <a href="/" class="flex-shrink-0">
                    <img class="h-12 w-10" src="<?php echo e(asset('images\cd-logo-white2.png')); ?>" alt="Logo">
                </a>

                <div class="flex sm:flex-1 items-center">
                    <div class="ml-10 items-baseline space-x-4 ">

                        <a href="/" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Main</a>
                        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/<?php echo e(strtolower($link)); ?>" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><?php echo e($link); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <a href="/events/new_event" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Post event</a>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('partials.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="flex items-center">
                <?php if(auth()->guard()->check()): ?>
                    <div class="ml-4">
                        <div class="flex items-center">
                            <span class="text-white text-sm font-medium mr-2"><?php echo e(auth()->user()->name); ?></span>
                            <form action="<?php echo e(route('logout')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <div>
                        <a href="<?php echo e(route('login')); ?>" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                        <a href="<?php echo e(route('register')); ?>" class="inline-block text-white uppercase hover:bg-amber-300 hover:text-white py-2 px-4 rounded-xl mt-2">Register</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampplatest\htdocs\Carpe-Diem\Carpe-Diem\resources\views/components/navbar.blade.php ENDPATH**/ ?>