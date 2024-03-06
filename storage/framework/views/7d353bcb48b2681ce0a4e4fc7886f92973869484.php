
<?php $__env->startSection('title', 'login'); ?>
<?php $__env->startSection('content'); ?>

<div class="hero"> 
    <form action="<?php echo e(route('login')); ?>" method="post" class="formulario">
        <?php echo csrf_field(); ?>
        <h2>Login</h2>
        <label for="nombre_suario">Nombre de usuario: </label>
        <input type="text" name="nombre_usuario" id="nombre_usuario">
        <label for="contraseña">Contraseña: </label>
        <input type="password" name="contraseña" id="contraseña">
 
   
        <input type="submit" value="Loguearse" class="btn-login">
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoLaravel\ProyectoLaravel\resources\views/login.blade.php ENDPATH**/ ?>