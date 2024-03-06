
<script src="https://cdn.tailwindcss.com"></script>
<?php $__env->startSection('title', 'plataformas'); ?>
<?php $__env->startSection('content'); ?>

<h1 class="titulo-juegos">Juegos  <?php echo e($nombre_plataforma); ?></h1>
<div class="div-juegos">
            <?php $__currentLoopData = $plataforma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-juego">
                <img src="<?php echo e(asset('img/'.$juego->imagen)); ?>" alt="">
                <div class="cuerpo-card">
                    <h4><?php echo e($juego->nombre_juego); ?></h4>
                    <p>Vendedor: </p>
                    <?php echo e(substr($juego->descripcion, 0, 20)); ?>

                    <p>Precio: <?php echo e($juego->precio); ?> €</p>
                    <a href="#" class="boton-comprar">comprar</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="paginacion"><?php echo e($plataforma->links()); ?></div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaJuegos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoLaravel\resources\views/plataforma.blade.php ENDPATH**/ ?>