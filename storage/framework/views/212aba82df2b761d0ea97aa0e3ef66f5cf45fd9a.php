

<?php $__env->startSection('title', 'Detalles de Película'); ?>

<?php $__env->startSection('content'); ?>
    <div class="detalles-pelicula">
        <h1>Detalles de la Película: <?php echo e($pelicula->titulo); ?></h1>
        <div class="informacion-pelicula">
            <img src="<?php echo e(asset('img/' . $pelicula->imagen)); ?>" alt="Imagen de la película">
            <p><strong>Título:</strong> <?php echo e($pelicula->titulo); ?></p>
            <p><strong>Género:</strong> <?php echo e($pelicula->genero); ?></p>
            <p><strong>Descripción:</strong> <?php echo e($pelicula->descripcion); ?></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantillaLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoLaravel\resources\views/show.blade.php ENDPATH**/ ?>