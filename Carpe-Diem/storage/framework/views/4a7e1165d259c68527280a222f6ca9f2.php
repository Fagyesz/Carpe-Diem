<?php $__env->startSection('content'); ?>
<div class="flex min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('images/single_listing_bg.jpg')">

<div class="w-full max-w-md lg:w-4/12 px-4 mx-auto pt-6">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16 opacity-90">
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full flex justify-center">
            <div class="flex justify-center">
                <img alt="" src="<?php echo e($user->avatar ? asset('storage/' . $user->avatar) : asset('/images/avatar_placeholder.png')); ?>" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
              </div>
        </div>
        <div class="w-full text-center mt-20">
          <div class="flex justify-center py-2 lg:pt-4 pt-8">
            <div class="mr-4 p-3">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                <?php echo e($listedEvents); ?>

              </span>
              <span class="text-sm text-blueGray-400">Your Events</span>
            </div>
            <div class="mr-4 p-3">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                 <?php echo e($soldTickets); ?>

              </span>
              <span class="text-sm text-blueGray-400">Sold</span>
            </div>
            <div class="lg:mr-4 p-3">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                <?php echo e($boughtTickets); ?>

              </span>
              <span class="text-sm text-blueGray-400">Bought</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-6">
        <h3 class="text-xl font-semibold leading-normal text-blueGray-700 mb-2">
          <?php echo e($user->name); ?>

        </h3>
        <p>
            (<?php echo e($user->username); ?>)
        </p>
        <div class="text-sm leading-normal mt-0 mb-8">
          <?php echo e($user->gender); ?>

          <?php if($user->gender == null): ?>
          *gender not given
          <?php endif; ?>
        </div>
        
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
          <i class="fa-solid fa-envelope mr-2 text-lg text-blueGray-400"></i>
          <?php echo e($user->email); ?>

          <?php if($user->email_verified_at == null): ?>
            <h6>*not verified</h6>
          <?php endif; ?>
        </div>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
          <i class="fa-solid fa-cake-candles text-lg text-blueGray-400"></i>
          <?php echo e($user->birthdate); ?>

          <?php if($user->birthdate == null): ?>
            *not given
          <?php endif; ?>
        </div>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
          <i class="fa-solid fa-phone text-lg text-blueGray-400"></i>
          <?php echo e($user->phone); ?>

          <?php if($user->phone == null): ?>
            *not given
          <?php endif; ?>
        </div>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
          <i class="fa-solid fa-location-dot text-lg text-blueGray-400"></i>
          <?php if($user->country == null && $user->address != null): ?>
             <?php echo e($user->address); ?>

          <?php endif; ?>
          <?php if($user->country != null && $user->address == null): ?>
          <?php echo e($user->country); ?>

          <?php endif; ?>
          <?php if($user->country != null && $user->address != null): ?>
          <?php echo e($user->country); ?>, <?php echo e($user->address); ?>

          <?php endif; ?>
          <?php if($user->country == null && $user->address == null): ?>
            *not given
          <?php endif; ?>
        </div>
      </div>
      <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
        <div class="flex flex-wrap justify-center"> 
          <div class="w-full lg:w-9/12 px-4">
            <div class="flex justify-center"><i class="fa-solid fa-book text-lg text-blueGray-400"></i></div>
            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
              <?php echo e($user->bio); ?>

              <?php if($user->bio == null): ?>
              *not given
              <?php endif; ?>
            </p>
          </div>
        </div>
        <div><a href="/profile/edit"><i class="fa-solid fa-pen-to-square text-3xl max-w-xs transition duration-300 ease-in-out hover:scale-125"></i>
            </a>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampplatest\htdocs\Carpe-Diem\Carpe-Diem\resources\views/auth/profile.blade.php ENDPATH**/ ?>