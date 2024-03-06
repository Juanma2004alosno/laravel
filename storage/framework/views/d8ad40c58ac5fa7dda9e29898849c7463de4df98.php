

<?php $__env->startSection('title', 'Crear Película'); ?>

<?php $__env->startSection('content'); ?>
<h1>Crear Película</h1>
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<form action="<?php echo e(route('guardar_pelicula')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo">
    <select name="genero" id="genero">
        <?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($genero); ?>"><?php echo e($genero); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <select name="user_id" id="user_id">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($user->id); ?>"><?php echo e($user->nombre_usuario); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" id="descripcion">
    <label for="imagen">Url imagen:</label>
    <input type="text" name="imagen" id="imagen">

    <button type="submit">Crear Película</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoLaravel\resources\views/crear_pelicula.blade.php ENDPATH**/ ?>