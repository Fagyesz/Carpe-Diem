<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['event']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['event']); ?>
<?php foreach (array_filter((['event']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex pt-2 pl-2">
        <div class="flex-col">
            <a href="/events/<?php echo e($event->id); ?>">
                <img class="max-w-none object-contain hidden w-60 h-40 mr-2 md:block max-w-xs transition duration-300 ease-in-out hover:scale-110"
            src="<?php echo e($event->event_image ? asset('storage/' . $event->event_image) : asset('/images/no_image.jpg')); ?>"
            alt=""/>
            </a>
            <div class="flex flex-row pt-2 pl-2">
                <div class="text-xl font-bold"><?php echo e($event->ticket_price); ?> € </div>
                <?php if($event->tickets_available > 0): ?>
                    <div class="text-xl font-bold text-center text-green-600 pl-8">Available</div>
                <?php else: ?>
                    <div class="text-xl font-bold text-center text-red-600 pl-8">Unavailable</div>
                <?php endif; ?> 
            </div>
        </div>
        <div class="flex flex-col ">
            <h3 class="text-2xl font-bold">
                <a href="/events/<?php echo e($event->id); ?>"><?php echo e($event->title); ?></a>
            </h3>
            <div class="text-xl mb-4"><i class="fa-regular fa-calendar-days fa-xs"></i> <?php echo e(date('Y.m.d.', strtotime($event->start_time))); ?> </div>
            <div class="text-m "><i class='fa-solid fa-location-dot'></i> <?php echo e($event->location); ?> </div>
                    

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\xampplatest\htdocs\Carpe-Diem\Carpe-Diem\resources\views/components/event-card.blade.php ENDPATH**/ ?>