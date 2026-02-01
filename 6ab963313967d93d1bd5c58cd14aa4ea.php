<?php if (isset($component)) { $__componentOriginalfcad64dfa01b029ba835611407e96dec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfcad64dfa01b029ba835611407e96dec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'layouts.customer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('customer-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <h2 class="text-2xl font-bold mb-6">All Orders (<?php echo e($totalOrders); ?>)</h2>

            <div class="space-y-6">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border border-gray-200">
                     <!-- Header -->
                    <div class="flex justify-between items-center mb-4 border-b pb-2">
                        <div>
                             <span class="text-lg font-bold">Order #<?php echo e($order->id); ?></span>
                             <span class="ml-4 px-2 py-0.5 text-sm rounded bg-gray-100 text-gray-800">
                                <?php echo e(ucfirst($order->status)); ?>

                             </span>
                        </div>
                        <div class="text-gray-500 text-sm">
                            Order Date: <?php echo e($order->ordered_date->format('d M Y, h:i A')); ?>

                        </div>
                    </div>
                    
                    <!-- Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600 font-semibold">Customer Details:</p>
                            <p>Name: <?php echo e($order->user->name); ?></p>
                            <p>Email: <?php echo e($order->user->email); ?></p>
                            <!-- Note: User object has Phone and Address. But we allow editing below if pending -->
                            <p>Phone: <?php echo e($order->user->phone); ?></p>
                            <p>Delivery Address: <?php echo e($order->user->address); ?></p>
                        </div>
                        <div class="text-right">
                             <p class="text-lg font-bold mt-4">Total: LKR <?php echo e(number_format($order->total_amount, 2)); ?></p>
                        </div>
                    </div>

                    <!-- Edit Form (Only if Pending) -->
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($order->status == 'pending'): ?>
                    <div class="mt-6 border-t pt-4">
                        <h4 class="font-medium mb-3 text-yellow-700">Update Delivery Details</h4>
                        <form action="<?php echo e(route('orders.update', $order->id)); ?>" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                             <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                <input type="text" name="phone" value="<?php echo e($order->user->phone); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="delivery_address" class="block text-sm font-medium text-gray-700">Delivery Address</label>
                                <input type="text" name="delivery_address" value="<?php echo e($order->user->address); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div class="md:col-span-2 text-right flex justify-between items-center">
                                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Update Details</button>
                            </div>
                        </form>
                         <div class="mt-4 flex justify-end">
                            <form action="<?php echo e(route('orders.destroy', $order->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Delete Order</button>
                            </form>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="mt-6 border-t pt-4">
                        <p class="text-sm text-gray-500 italic">The shop will be placing your order, can't delete the order now.</p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfcad64dfa01b029ba835611407e96dec)): ?>
<?php $attributes = $__attributesOriginalfcad64dfa01b029ba835611407e96dec; ?>
<?php unset($__attributesOriginalfcad64dfa01b029ba835611407e96dec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfcad64dfa01b029ba835611407e96dec)): ?>
<?php $component = $__componentOriginalfcad64dfa01b029ba835611407e96dec; ?>
<?php unset($__componentOriginalfcad64dfa01b029ba835611407e96dec); ?>
<?php endif; ?>
<?php /**PATH /Users/kaushipeter/Desktop/Laravel assignment/aura_by_kiyara/resources/views/customer/orders.blade.php ENDPATH**/ ?>