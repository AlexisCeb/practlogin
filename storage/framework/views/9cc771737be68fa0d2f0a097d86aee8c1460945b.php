<?php $__env->startSection('contenido'); ?>
    <div class="contenido" align="center">
        <div style="padding-top: 5%"></div>
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Login</div>
            <div class="card-body">
                <h5 class="card-title">INGRESE SUS DATOS</h5>
                <p class="card-text">
                <form action="<?php echo e(route('validar')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Direcci&oacute;n de E-mail</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Tus datos est&aacute;n seguros.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contrase&ntilde;a</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena">
                    </div>
                    <button type="submit" class="btn btn-warning" style="background-color: orange">Submit</button>
                </form>
                </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sisifo\resources\views/login.blade.php ENDPATH**/ ?>