<section>

    <div class="justify-center bg-sky-400/95 w-full text-center text-white" style="margin: 0 auto;">
        
        
        
        
        <h1 class="text-6xl font-bold uppercase text-white italic">
            Carpe Diem
        </h1>
        
        <p class="text-2xl text-black-200 font-bold my-4">
            Find an event for your taste!
        </p>
        <div class="pb-2">
            
           <?php if(!auth()->user()): ?>
                <a
                    href="/register"
                    class="inline-block bg-yellow-500 hover:bg-cyan-600 text-white py-2 px-4 rounded-full uppercase mt-2 hover:text-black hover:border-black"
                    >Click here to Sign Up</a>
            <?php endif; ?>
                
            
        </div>
    </div>
    
    </section>
    
    <?php /**PATH C:\xampplatest\htdocs\Carpe-Diem\Carpe-Diem\resources\views/partials/hero.blade.php ENDPATH**/ ?>