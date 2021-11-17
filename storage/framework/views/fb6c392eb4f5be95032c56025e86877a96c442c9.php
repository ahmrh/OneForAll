

<?php $__env->startSection('content'); ?>

    <div>
            <div class="mb-5 col-7">
                <h4><?php echo e($materi['judul']); ?></h4>
                <p><?php echo e($materi['deskripsi']); ?></p>
            </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\XAMPP\htdocs\OneForAll\resources\views/materi.blade.php ENDPATH**/ ?>