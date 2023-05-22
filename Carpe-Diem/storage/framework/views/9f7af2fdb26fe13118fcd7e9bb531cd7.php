<?php $__env->startSection('content'); ?>

<div class="bg-scroll justify-center bg-cover bg-center bg-no-repeat"
    style="background-image: <?php echo e(url('/images/single_listing_bg.jpg')); ?>">
    <div class="flex flex-1  mx-6 max-w-md w-full mt-2 place-content-center" style="margin: 0 auto;">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'p-5 flex-row shrink']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-5 flex-row shrink']); ?>
            <div class="mx-20 flex flex-col text-xs justify-center text-start">
                <img class="w-80 mr-6"
                    src="<?php echo e($event->event_image ? asset('storage/' . $event->event_image) : asset('/images/no_image.jpg')); ?>"
                    alt="" />

                <h3 class=" flex justify-center pb-8 text-2xl font-bold mb-2"><?php echo e($event->title); ?></h3>
                <div class="text-xl mb-4"> <i class='fa-solid fa-location-dot'></i> Location: <?php echo e($event->location); ?>

                </div>
                <div class="text-xl mb-4">
                    <h3><i class="fa-solid fa-person"></i>Organizer: <?php echo e($organizer[0]); ?> </h3>
                </div>
                <div class="text-xl mb-4"><i class="fa-solid fa-hourglass-start"></i> Starting time: <?php echo e(Carbon\Carbon::parse($event->start_time)->format('Y.m.d h:m')); ?> </div>
                <div class="text-xl mb-4"> <i class="fa-solid fa-flag-checkered"></i> Ending time: <?php echo e(Carbon\Carbon::parse($event->end_time)->format('Y.m.d h:m')); ?> </div>
                <div class="text-xl mb-4"> <i class="fa-solid fa-clock"></i> Duration: <?php echo e($totalDuration); ?> </div>

                <div class=" text-xl mb-4 flex pb-4 ">
                    <label for="quantity">Quantity:</label>
                    <select id="quantity" name="quantity" class=" mx-3 px-8" form="buy">
                        <?php for($i = 0; $i < $event->tickets_available; $i++): ?>
                            <option value="<?php echo e($i+1); ?>"><?php echo e($i+1); ?></option>
                            <?php endfor; ?>
                    </select>
                </div>

                <?php if($event->tickets_available != 0): ?>
                <div class="text-xl mb-4 font-bold text-green-600 text-center"> Available </div>
                <?php else: ?>
                <div class="text-xl mb-4 font-bold text-red-600 text-center"> Unavailable </div>
                <?php endif; ?>


                <div class="flex justify-center text-xl font-bold mb-4">Ticket price: <?php echo e($event->ticket_price); ?> €</div>
                <div class="flex justify-center text-lg space-y-6 pb-8">
                    <form method="POST" action="/events/<?php echo e($event->id); ?>/buy_ticket" id="buy">
                        <?php echo csrf_field(); ?>
                        <button>
                            <a target="buy" class=" block bg-black text-white py-3 px-2 rounded-xl hover:opacity-80">
                                <i class="fa fa-cart-plus" aria-hidden="true">
                                </i>
                                Buy ticket
                            </a>
                        </button>
                    </form>
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <h3 class="flex justify-center text-3xl font-bold mb-4">
                    Description
                </h3>
                <div class="text-xl mb-4">
                    <p><?php echo e($event->description); ?>

                    <p>
                </div>

            </div>
            <div>
                <style>
                    #social-links ul li {
                        display: inline-block;
                        padding-inline: 1rem;
                    }
                </style>
                <div class="flex justify-center pb-8 text-4xl font-bold pt-6">
                    <?php echo $shareButtons; ?>

                </div>

            </div>
            <?php if(auth()->user()->id == $event['organizer_id']): ?>
            <a class="flex justify-center" href="/events/<?php echo e($event->id); ?>/edit">
                <i class="fa-solid fa-pencil"></i>Edit
            </a>

            <form method="POST" action="/events/<?php echo e($event->id); ?>" class="flex justify-center">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i>Delete
                </button>
            </form>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampplatest\htdocs\Carpe-Diem\Carpe-Diem\resources\views/events/show.blade.php ENDPATH**/ ?>