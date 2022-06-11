<html>
    <head></head>
    <body>
        <?php echo $__env->make('includes.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH D:\Xampp\htdocs\demo\a-project-1\resources\views/layouts/main.blade.php ENDPATH**/ ?>