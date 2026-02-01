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
            
            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Total Orders -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 text-xl font-semibold">Total Orders</div>
                    <div class="text-3xl font-bold text-blue-600 mt-2"><?php echo e($totalOrders); ?></div>
                </div>
                 <!-- Total Spent -->
                 <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 text-xl font-semibold">Total Spent</div>
                    <div class="text-3xl font-bold text-green-600 mt-2">LKR <?php echo e(number_format($totalSpent, 2)); ?></div>
                </div>
            </div>

            <!-- Recent Orders Table -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Recent Orders</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ordered Date</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $recentOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">#<?php echo e($order->id); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap">LKR <?php echo e(number_format($order->total_amount, 2)); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                            <?php echo e($order->status === 'completed' ? 'bg-green-100 text-green-800' : ''); ?>

                                            <?php echo e($order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : ''); ?>

                                            <?php echo e($order->status === 'cancelled' ? 'bg-red-100 text-red-800' : ''); ?>">
                                            <?php echo e(ucfirst($order->status)); ?>

                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($order->ordered_date->format('d M Y, h:i A')); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
<?php /**PATH /Users/kaushipeter/Desktop/Laravel assignment/aura_by_kiyara/resources/views/customer/dashboard.blade.php ENDPATH**/ ?>