<?php

use Livewire\Volt\Component;
use App\Models\Product;

?>

<div class="min-h-screen transition-colors duration-1000 pb-16
    <?php echo e($isWomen || $isMen ? 'bg-amber-50' : ''); ?>

    <?php echo e($isKids ? 'bg-gradient-to-br from-sky-50 via-rose-50 to-amber-50' : ''); ?>

    <?php echo e(!$isMen && !$isWomen && !$isKids ? 'bg-soft-white' : ''); ?>">

    
    
    <div class="text-center py-16 mb-8">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isMen): ?>
            <h1 class="text-5xl md:text-6xl font-serif font-bold text-charcoal-900 drop-shadow-md">Men's Collection</h1>
        <?php elseif($isWomen): ?>
            <h1 class="text-5xl md:text-6xl font-serif font-bold text-charcoal-900 drop-shadow-md">Women’s Elegance</h1>
        <?php elseif($isKids): ?>
             <div class="inline-block relative">
                <span class="text-5xl block mb-2 animate-bounce">🧸 🍭 🌈</span>
                <h2 class="text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 tracking-tight py-2">
                    Magic Aura Kids
                </h2>
            </div>
        <?php elseif($isGifts): ?>
            <h1 class="text-5xl md:text-6xl font-serif font-bold text-charcoal-900 mb-4">Perfect Gifts</h1>
            <p class="text-xl text-gold-600 font-bold tracking-widest uppercase">Curated with Love</p>
        <?php else: ?>
             <h1 class="text-5xl md:text-6xl font-serif font-bold text-charcoal-900 uppercase">Our Collection</h1>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="relative max-w-2xl mx-auto mb-24 group z-30">
            <div class="absolute inset-0 bg-gold-400 rounded-full blur-xl opacity-20 group-hover:opacity-40 transition duration-700"></div>
            <div class="relative flex items-center bg-white rounded-full shadow-2xl border border-gray-100 overflow-hidden transform group-hover:scale-[1.01] transition duration-500">
                <div class="pl-6 text-gold-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input 
                    wire:model.live.debounce.300ms="search"
                    type="text" 
                    placeholder="Search for your favorite scent..." 
                    class="w-full border-0 focus:ring-0 px-4 py-4 text-base font-serif text-charcoal-900 placeholder-gray-400 bg-transparent tracking-wide"
                >
                <div class="pr-2">
                    <button class="bg-charcoal-900 text-white px-6 py-2 rounded-full font-bold uppercase tracking-widest text-xs hover:bg-gold-500 transition duration-300 shadow-lg">
                        Search
                    </button>
                </div>
            </div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isGifts && !$search): ?>
            
            <div class="space-y-24">
                
                <section>
                    <div class="text-center mb-12">
                        <h2 class="text-5xl md:text-6xl font-serif font-bold text-charcoal-900 mb-2">Gifts He Will Love <span class="text-red-500 text-3xl">❤️</span></h2>
                        <div class="w-24 h-1 bg-gold-400 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $heWillLove; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group relative cursor-pointer">
                            <a href="<?php echo e(route('shop.show', $gift->id)); ?>" class="absolute inset-0 z-30"></a>
                            <div class="relative overflow-hidden rounded-xl shadow-lg aspect-[3/4]">
                                 <img src="<?php echo e(Str::startsWith($gift->image, 'products/') ? asset('storage/' . $gift->image) : asset('images/' . $gift->image)); ?>" alt="<?php echo e($gift->name); ?>" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                 <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                                      <a href="<?php echo e(route('shop.show', $gift->id)); ?>" class="pointer-events-auto relative z-40 bg-white text-charcoal-900 px-6 py-3 uppercase tracking-widest text-sm font-bold hover:bg-gold-500 hover:text-white transition rounded-full shadow-lg">
                                         View Details
                                     </a>
                                 </div>
                             </div>

                             <div class="text-center mt-4">
                                <h3 class="text-lg font-serif text-charcoal-900 group-hover:text-gold-600 transition">
                                    <?php echo e($gift->name); ?>

                                </h3>
                                <p class="text-gold-600 font-bold mt-1 text-base">
                                    LKR <?php echo e(number_format($gift->price, 2)); ?>

                                </p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </section>

                
                <section>
                    <div class="text-center mb-12">
                        <h2 class="text-5xl md:text-6xl font-serif font-bold text-charcoal-900 mb-2">Gifts She Will Love <span class="text-pink-500 text-3xl">❤️</span></h2>
                        <div class="w-24 h-1 bg-gold-400 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sheWillLove; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group relative cursor-pointer">
                            <a href="<?php echo e(route('shop.show', $gift->id)); ?>" class="absolute inset-0 z-30"></a>
                            
                            <div class="relative overflow-hidden aspect-[3/4] mb-4 shadow-lg rounded-lg">
                                <img src="<?php echo e(Str::startsWith($gift->image, 'products/') ? asset('storage/' . $gift->image) : asset('images/' . $gift->image)); ?>" alt="<?php echo e($gift->name); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                                     <a href="<?php echo e(route('shop.show', $gift->id)); ?>" class="pointer-events-auto relative z-40 bg-white text-charcoal-900 px-6 py-3 uppercase tracking-widest text-sm font-bold hover:bg-gold-500 hover:text-white transition rounded-full shadow-lg">
                                        View Details
                                    </a>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <h3 class="text-lg font-serif text-charcoal-900 group-hover:text-gold-600 transition">
                                    <?php echo e($gift->name); ?>

                                </h3>
                                <p class="text-gold-600 font-bold mt-1 text-base">
                                    LKR <?php echo e(number_format($gift->price, 2)); ?>

                                </p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </section>

                 
                 <section>
                    <div class="text-center mb-12">
                        <h2 class="text-5xl md:text-6xl font-serif font-bold text-charcoal-900 mb-2">Gifts For Your Cutie Pie 👶</h2>
                        <div class="w-24 h-1 bg-gold-400 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $kidsGifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group relative cursor-pointer">
                            <a href="<?php echo e(route('shop.show', $gift->id)); ?>" class="absolute inset-0 z-30"></a>
                            <div class="relative overflow-hidden rounded-xl shadow-lg aspect-[3/4]">
                                 <img src="<?php echo e(Str::startsWith($gift->image, 'products/') ? asset('storage/' . $gift->image) : asset('images/' . $gift->image)); ?>" alt="<?php echo e($gift->name); ?>" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                 <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                                      <a href="<?php echo e(route('shop.show', $gift->id)); ?>" class="pointer-events-auto relative z-40 bg-white text-charcoal-900 px-6 py-3 uppercase tracking-widest text-sm font-bold hover:bg-gold-500 hover:text-white transition rounded-full shadow-lg">
                                         View Details
                                     </a>
                                 </div>
                             </div>

                             <div class="text-center mt-4">
                                <h3 class="text-lg font-serif text-charcoal-900 group-hover:text-gold-600 transition">
                                    <?php echo e($gift->name); ?>

                                </h3>
                                <p class="text-gold-600 font-bold mt-1 text-base">
                                    LKR <?php echo e(number_format($gift->price, 2)); ?>

                                </p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </section>

                
                 <section>
                    <div class="text-center mb-12">
                        <h2 class="text-5xl md:text-6xl font-serif font-bold text-charcoal-900 mb-2">Gift Vouchers 🎁</h2>
                        <div class="w-24 h-1 bg-gold-400 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group relative cursor-pointer">
                            <a href="<?php echo e(route('shop.show', $gift->id)); ?>" class="absolute inset-0 z-30"></a>
                            <div class="relative overflow-hidden rounded-xl shadow-lg aspect-[4/3]">
                                 <img src="<?php echo e(Str::startsWith($gift->image, 'products/') ? asset('storage/' . $gift->image) : asset('images/' . $gift->image)); ?>" alt="<?php echo e($gift->name); ?>" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                 <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                                      <a href="<?php echo e(route('shop.show', $gift->id)); ?>" class="pointer-events-auto relative z-20 bg-white text-charcoal-900 px-6 py-3 uppercase tracking-widest text-sm font-bold hover:bg-gold-500 hover:text-white transition rounded-full shadow-lg">
                                         View Details
                                     </a>
                                 </div>
                             </div>

                             <div class="text-center mt-4">
                                <h3 class="text-lg font-serif text-charcoal-900 group-hover:text-gold-600 transition">
                                    <?php echo e($gift->name); ?>

                                </h3>
                                <p class="text-gold-600 font-bold mt-1 text-base">
                                    LKR <?php echo e(number_format($gift->price, 2)); ?>

                                </p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </section>
            </div>
        <?php else: ?>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="group relative cursor-pointer">
                    
                    <a href="<?php echo e(route('shop.show', $product->id)); ?>" class="absolute inset-0 z-10" aria-label="View <?php echo e($product->name); ?>"></a>
                    
                    <div class="relative overflow-hidden aspect-[3/4] mb-4 shadow-lg rounded-lg">
                        <img src="<?php echo e(Str::startsWith($product->image, 'products/') ? asset('storage/' . $product->image) : asset('images/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                        
                        
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                             <a href="<?php echo e(route('shop.show', $product->id)); ?>" class="pointer-events-auto relative z-20 bg-white text-charcoal-900 px-6 py-3 uppercase tracking-widest text-sm font-bold hover:bg-gold-500 hover:text-white transition rounded-full shadow-lg">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-serif transition-colors duration-300 text-charcoal-900 group-hover:text-gold-600">
                            <?php echo e($product->name); ?>

                        </h3>
                        <p class="font-bold mt-1 text-base text-gold-600">
                            LKR <?php echo e(number_format($product->price, 2)); ?>

                        </p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-full text-center py-32 bg-white/50 rounded-3xl backdrop-blur-sm border border-gray-100">
                    <div class="text-6xl mb-4 text-gray-300">🔍</div>
                    <p class="text-2xl font-serif text-gray-500">No treasures found for your search.</p>
                </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div><?php /**PATH /Users/kaushipeter/Desktop/Laravel assignment/aura_by_kiyara/resources/views/livewire/product-search.blade.php ENDPATH**/ ?>