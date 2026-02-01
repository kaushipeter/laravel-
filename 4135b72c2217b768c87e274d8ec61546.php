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
    <div class="py-16 bg-soft-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl md:text-6xl font-serif font-bold mb-10 text-charcoal-900 border-b border-gold-200 pb-4">Shopping Cart</h1>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('cart') && count(session('cart')) > 0): ?>
                <div class="bg-white shadow-xl overflow-hidden sm:rounded-none border border-gray-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gold-500 text-white">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">Product</th>
                                <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">Price</th>
                                <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">Quantity</th>
                                <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">Subtotal</th>
                                <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php $total = 0 ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $total += $details['price'] * $details['quantity'] ?>
                                <tr data-id="<?php echo e($id); ?>" class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-16 w-16 shadow-md border border-gray-100">
                                                <img class="h-16 w-16 object-cover" src="<?php echo e(Str::startsWith($details['image'], 'products/') ? asset('storage/' . $details['image']) : asset('images/' . $details['image'])); ?>" alt="<?php echo e($details['name']); ?>">
                                            </div>
                                            <div class="ml-6">
                                                <div class="text-lg font-serif font-medium text-charcoal-900"><?php echo e($details['name']); ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-gray-700">LKR <?php echo e(number_format($details['price'], 2)); ?></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="number" value="<?php echo e($details['quantity']); ?>" class="w-16 border-gray-300 focus:border-gold-500 focus:ring-gold-500 rounded-none text-center update-cart" min="1">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-gold-600">LKR <?php echo e(number_format($details['price'] * $details['quantity'], 2)); ?></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                         <form action="<?php echo e(route('remove.from.cart')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <input type="hidden" name="id" value="<?php echo e($id); ?>">
                                            <button type="submit" class="text-gray-400 hover:text-red-600 transition duration-300 p-2 rounded-full hover:bg-red-50" title="Remove Item">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </tbody>
                    </table>
                    
                    <div class="p-8 bg-gray-50 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center gap-6">
                        <div class="text-2xl font-serif text-charcoal-900">Total: <span class="font-bold text-gold-600">LKR <?php echo e(number_format($total, 2)); ?></span></div>
                        <div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                                <form action="<?php echo e(route('checkout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="bg-gold-500 text-white px-10 py-4 hover:bg-charcoal-900 hover:text-white font-bold uppercase tracking-widest transition duration-300 shadow-lg">
                                        Proceed to Checkout
                                    </button>
                                </form>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" class="bg-gray-800 text-white px-10 py-4 hover:bg-gold-500 hover:text-white font-bold uppercase tracking-widest transition duration-300 shadow-lg inline-block">
                                    Login to Checkout
                                </a>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="text-center py-24 bg-white shadow-lg border border-gray-100">
                    <svg class="w-16 h-16 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    <p class="text-charcoal-900 text-xl font-serif mb-6">Your shopping cart is currently empty.</p>
                    <a href="<?php echo e(route('shop')); ?>" class="inline-block bg-gold-500 text-white px-8 py-3 uppercase tracking-widest font-bold hover:bg-charcoal-900 transition duration-300 shadow-md">Continue Shopping</a>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>

    <!-- Script to update cart via AJAX or simple reload logic (optional but better UX) -->
    <script>
        // Simple script to handle 'update-cart' logic could be added here
        // For simplicity, assumed button or 'change' event submits or we rely on page refreshes for quantity?
        // Current 'update-cart' input doesn't trigger anything. I'll add simple JS.
        document.querySelectorAll('.update-cart').forEach(input => {
            input.addEventListener('change', function() {
                const id = this.closest('tr').getAttribute('data-id');
                const quantity = this.value;
                
                fetch('<?php echo e(route('update.cart')); ?>', {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    },
                    body: JSON.stringify({ id: id, quantity: quantity })
                }).then(response => window.location.reload());
            });
        });
    </script>
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
<?php /**PATH /Users/kaushipeter/Desktop/Laravel assignment/aura_by_kiyara/resources/views/cart.blade.php ENDPATH**/ ?>