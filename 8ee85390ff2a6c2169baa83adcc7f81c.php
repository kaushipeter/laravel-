<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body>
    <h2>New Message from <?php echo e($name); ?></h2>
    <p><strong>Email:</strong> <?php echo e($email); ?></p>
    <p><strong>Message:</strong></p>
    <p><?php echo e($content); ?></p>
</body>
</html>
<?php /**PATH /Users/kaushipeter/Desktop/Laravel assignment/aura_by_kiyara/resources/views/emails/contact.blade.php ENDPATH**/ ?>