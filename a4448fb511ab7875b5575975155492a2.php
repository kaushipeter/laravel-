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
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 prose">
            <h1 class="text-center uppercase tracking-widest text-5xl md:text-6xl font-serif font-bold text-gray-900 mb-8 border-b border-gold-200 pb-6">About Aura by Kiyara</h1>
            
            <div class="mb-12">
                <h2>Our Story</h2>
                <p>Founded with a passion for exquisite scents, Aura by Kiyara brings you a curated collection of perfumes that define elegance and sophistication. Our journey began with a simple mission: to provide high-quality, long-lasting fragrances that leave a lasting impression.</p>
            </div>

            <div class="mb-12">
                <h2>Our Mission</h2>
                <p>To empower individuals to express their unique identity through the art of fragrance. We believe that a scent is more than just a perfume; it's an aura that surrounds you.</p>
            </div>

            <div class="mb-12">
                <h2>Why Choose Us?</h2>
                <ul>
                    <li>Hand-crafted exclusive scents</li>
                    <li>Premium quality ingredients</li>
                    <li>Cruelty-free and ethical sourcing</li>
                    <li>Exceptional customer service</li>
                </ul>
            </div>

            <div class="border-t pt-8">
                <h3 class="text-lg font-bold uppercase mb-4">Policies</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="font-bold">Refund and Return Policy</h4>
                        <p class="text-sm text-gray-600">We offer a 7-day return policy for unopened items. Detailed terms...</p>
                    </div>
                    <div>
                        <h4 class="font-bold">Shipping Policy</h4>
                        <p class="text-sm text-gray-600">We ship island-wide within 3-5 business days.</p>
                    </div>
                    <div>
                        <h4 class="font-bold">Privacy Policy</h4>
                        <p class="text-sm text-gray-600">Your privacy is important to us. detailed terms...</p>
                    </div>
                     <div>
                        <h4 class="font-bold">Terms and Conditions</h4>
                        <p class="text-sm text-gray-600">By using our site, you agree to our terms...</p>
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
<?php /**PATH /Users/kaushipeter/Desktop/Laravel assignment/aura_by_kiyara/resources/views/about.blade.php ENDPATH**/ ?>