
<script src="https://cdn.tailwindcss.com"></script>
<?php $__env->startSection('title', 'generos'); ?>
<?php $__env->startSection('content'); ?>

<h1 class="titulo-peliculas">Peliculas <?php echo e($nombre_genero); ?></h1>
<div class="div-peliculas">
    <?php $__currentLoopData = $genero; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-pelicula">
        <img src="<?php echo e(asset('img/'.$pelicula->imagen)); ?>" alt="">
        <div class="cuerpo-card">
            <h4><?php echo e($pelicula->titulo); ?></h4>
            <a href="<?php echo e(route('show', ['cod_pelicula' => $pelicula->cod_pelicula])); ?>" class="boton-ver">Ver</a>
            <form action="<?php echo e(route('eliminar_pelicula', ['cod_pelicula' => $pelicula->cod_pelicula])); ?>" method="POST" class="boton-ver">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Eliminar</button>
            </form>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<div class="paginacion"><?php echo e($genero->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaPeliculas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoLaravel\resources\views/genero.blade.php ENDPATH**/ ?>