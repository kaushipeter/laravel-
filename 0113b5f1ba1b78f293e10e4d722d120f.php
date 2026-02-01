<?php if (isset($component)) { $__componentOriginal58c831a7c3cbf004f2e66a23aed50e5b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58c831a7c3cbf004f2e66a23aed50e5b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'layouts.public','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('public-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <!-- Image -->
                <div class="bg-gray-50 overflow-hidden shadow-2xl p-4">
                    <img src="<?php echo e(asset('images/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-auto object-cover border border-gray-100">
                </div>

                <!-- Details -->
                <div class="flex flex-col justify-center">
                    <div class="mb-8">
                        <span class="text-gold-600 uppercase tracking-[0.3em] text-sm font-black">Exquisite Collection</span>
                        <h1 class="text-5xl md:text-6xl font-serif font-black text-charcoal-900 mt-4 mb-6 leading-tight"><?php echo e($product->name); ?></h1>
                        <p class="text-4xl font-black text-gold-600">LKR <?php echo e(number_format($product->price, 2)); ?></p>
                    </div>
                    
                    <div class="prose prose-xl text-gray-700 mb-10 border-t-2 border-b-2 border-gold-100 py-8 leading-relaxed italic">
                        <p><?php echo e($product->description); ?></p>
                    </div>
                    <div class="mt-8">
                        <a href="<?php echo e(route('add.to.cart', $product->id)); ?>" class="inline-block bg-gold-500 text-white px-10 py-3 text-sm uppercase tracking-widest font-bold hover:bg-charcoal-900 hover:text-white transition duration-300 shadow-lg text-center rounded-sm">
                            Add to Cart
                        </a>
                    </div>
                    
                    <div class="mt-8 flex items-center space-x-4 text-sm text-gray-500">
                        <div class="flex items-center"><svg class="w-5 h-5 mr-2 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Authentic</div>
                        <div class="flex items-center"><svg class="w-5 h-5 mr-2 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Long Lasting</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal58c831a7c3cbf004f2e66a23aed50e5b)): ?>
<?php $attributes = $__attributesOriginal58c831a7c3cbf004f2e66a23aed50e5b; ?>
<?php unset($__attributesOriginal58c831a7c3cbf004f2e66a23aed50e5b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal58c831a7c3cbf004f2e66a23aed50e5b)): ?>
<?php $component = $__componentOriginal58c831a7c3cbf004f2e66a23aed50e5b; ?>
<?php unset($__componentOriginal58c831a7c3cbf004f2e66a23aed50e5b); ?>
<?php endif; ?>
<?php /**PATH /Users/kaushipeter/Desktop/Laravel assignment/aura_by_kiyara/resources/views/shop/show.blade.php ENDPATH**/ ?>