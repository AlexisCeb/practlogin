<?php $__env->startSection('contenido'); ?>
<div class="container-fluid contenido">
    <div class="container text-white" style="padding-top: 13%">
        <p class="fs-2 text-center" style="font-family: 'Calibri Light'">Por el momento solo hay login...
            <br>
            <a href="<?php echo e(route('login')); ?>"><button type="button" class="btn btn-warning fs-3 ">LOGIN</button></a>
        </p>
    </div>
</div>
    ##parent-placeholder-280f9f8162149af84376caba431de875c1489874##
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sisifo\resources\views/inicio.blade.php ENDPATH**/ ?>