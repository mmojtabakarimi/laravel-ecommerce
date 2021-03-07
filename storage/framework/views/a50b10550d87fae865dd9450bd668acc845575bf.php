<?php $__env->startComponent('mail::message'); ?>
# Order Received

Thank you for your order.

**Order ID:** <?php echo e($order->id); ?>


**Order Email:** <?php echo e($order->billing_email); ?>


**Order Name:** <?php echo e($order->billing_name); ?>


**Order Total:** $<?php echo e(round($order->billing_total / 100, 2)); ?>


**Items Ordered**

<?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
Name: <?php echo e($product->name); ?> <br>
Price: $<?php echo e(round($product->price / 100, 2)); ?> <br>
Quantity: <?php echo e($product->pivot->quantity); ?> <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

You can get further details about your order by logging into our website.

<?php $__env->startComponent('mail::button', ['url' => config('app.url'), 'color' => 'green']); ?>
Go to Website
<?php echo $__env->renderComponent(); ?>

Thank you again for choosing us.

Regards,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /mojtaba/laraval-project/laravel-ecommerce-example/resources/views/emails/orders/placed.blade.php ENDPATH**/ ?>