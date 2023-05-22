<?php $__env->startSection('content'); ?>

<div class="flex-1 flex-col min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('images/contact_page.jpg')">

<div class="pt-24">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'p-10 max-w-lg mx-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-10 max-w-lg mx-auto']); ?>
    <div class="mx-6">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Contact page
            </h2>
            <p class="mb-4">Here you can reach us!</p>
        </header>
        <form method="POST" action="/contact/send">
            <div>
                <?php echo csrf_field(); ?>
                <div class="mb-6">
                    <label for="message" class="inline-block text-lg mb-2 font-bold">
                        Your message:
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="message" rows="10"
                    placeholder="Here you can share us your thoughts, ideas, or problems with the site... "></textarea>
                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-6 flex justify-center">
                    <button class="bg-laravel text-black rounded py-2 px-4 hover:bg-black text-white ">
                        Send message
                    </button>

                </div>
            </div>
        </form>
    </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>

</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampplatest\htdocs\Carpe-Diem\Carpe-Diem\resources\views/emails/contactPage.blade.php ENDPATH**/ ?>