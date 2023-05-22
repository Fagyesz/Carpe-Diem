<?php $__env->startSection('content'); ?>
<div class="flex flex-col min-h-screen bg-center bg-cover pb-6"
	style="background-image: url(../images/ticket_listing.webp)">

    <div class="lg:grid lg:grid-cols-3 gap-3 pl-32 space-y-3 md:space-y-0 mx-4 pt-6" >

        <?php if(count($tickets) == 0): ?>
            <p>
                No tickets found
            </p>
        <?php endif; ?>
        <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ticketBase','data' => ['ticket' => $ticket]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ticketBase'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ticket' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ticket)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="p-6 m-4 ">
        <?php echo e($tickets->links()); ?>

    </div>


</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampplatest\htdocs\Carpe-Diem\Carpe-Diem\resources\views/tickets/ticketListing.blade.php ENDPATH**/ ?>