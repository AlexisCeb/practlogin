<?php $__env->startSection('contenido'); ?>
    <div class="contenido" align="center">
        <div style="padding-top: 11%"></div>
        <div class="card mb-3 access <?php echo e($style); ?>" align="center">
            <?php echo e($msg); ?>

            <p align="center"><a href="<?php echo e(route('inicio')); ?>"><button type="button" class="btn btn-warning fs-5">VOLVER A HOME</button></a></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sisifo\resources\views/validar.blade.php ENDPATH**/ ?>