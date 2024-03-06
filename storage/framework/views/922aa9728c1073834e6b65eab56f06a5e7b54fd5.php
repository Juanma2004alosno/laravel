
<script src="https://cdn.tailwindcss.com"></script>
<?php $__env->startSection('title', 'peliculas'); ?>
<?php $__env->startSection('content'); ?>

<h1 class="titulo-peliculas">Peliculas mas recientes</h1>
<div class="div-peliculas">
    <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-pelicula">
        <img src="<?php echo e(asset('img/'.$pelicula->imagen)); ?>" alt="">
        <div class="cuerpo-card">
            <a href=""><?php echo e($pelicula->titulo); ?></a>
            <p>Director: <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($user->id == $pelicula->user_id): ?>
                <?php echo e($user->nombre_usuario); ?>

                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
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
<div class="paginacion"><?php echo e($peliculas->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaPeliculas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoLaravel\resources\views/inicio.blade.php ENDPATH**/ ?>