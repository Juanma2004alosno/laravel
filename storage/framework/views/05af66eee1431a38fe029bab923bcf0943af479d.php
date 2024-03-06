<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href="<?php echo e(asset('icons/boxicons-2.1.1/css/boxicons.min.css')); ?>" rel='stylesheet'>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <header>
    <div class="banner-left">
            <a href="<?php echo e(route('inicio')); ?>" class="caja">Pagina de inicio</a>
            <a href="<?php echo e(route('genero','Terror')); ?>" class="caja">Terror</a>
            <a href="<?php echo e(route('genero','Drama')); ?>" class="caja">Drama</a>
            <a href="<?php echo e(route('genero','Comedia')); ?>" class="caja">Comedia</a>
            <a href="<?php echo e(route('crear_pelicula')); ?>" class="caja">Crear Película</a>
        </div>
           <?php if(isset($_SESSION['usuario'])): ?>
           <div class="banner-right">
            <a href="<?php echo e(route('login')); ?>" class="caja IS"><?php echo e($_SESSION['usuario']); ?></a>
            <a href="<?php echo e(route('cs')); ?>" class="caja IS CC">Cerrar Sesion</a>
                      
        </div>
        <?php else: ?>
        <div class="banner-right">
            <a href="<?php echo e(route('login')); ?>" class="caja CC">Inicia sesion</a>          
        </div>
            <?php endif; ?>
    </header>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>

</html><?php /**PATH C:\xampp\htdocs\ProyectoLaravel\resources\views/layouts/plantilla.blade.php ENDPATH**/ ?>