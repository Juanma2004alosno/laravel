
<script src="https://cdn.tailwindcss.com"></script>
<?php $__env->startSection('title', 'juegos'); ?>
<?php $__env->startSection('content'); ?>

<h1 class="titulo-juegos">Juegos más recientes</h1>
<div class="div-juegos">
            <?php $__currentLoopData = $juegos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-juego">
                <img src="<?php echo e(asset('img/'.$juego->imagen)); ?>" alt="">
                <div class="cuerpo-card">
                    <a href=""><?php echo e($juego->nombre_juego); ?></a>
                    <p>Vendedor: <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($user->id == $juego->user_id): ?>
                            <?php echo e($user->nombre_usuario); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
                    <?php echo e(substr($juego->descripcion, 0, 20)); ?>

                    <p>Precio: <?php echo e($juego->precio); ?> €</p>
                    <a href="#" class="boton-comprar">comprar</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
</div>
<div class="paginacion"><?php echo e($juegos->links()); ?></div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaJuegos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoLaravel\ProyectoLaravel\resources\views/inicio.blade.php ENDPATH**/ ?>