<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/styleJuegos.css')); ?>">
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href="<?php echo e(asset('icons/boxicons-2.1.1/css/boxicons.min.css')); ?>" rel='stylesheet'>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <header>
    <div class="banner-left">
            <a href="<?php echo e(route('inicio')); ?>" class="caja">Página de inicio</a>
            
            <a href="<?php echo e(route('plataforma','Nintendo')); ?>" class="caja">Nintendo</a>
            <a href="<?php echo e(route('plataforma','XBOX')); ?>" class="caja">XBOX</a>
            <a href="<?php echo e(route('plataforma','Playstation')); ?>" class="caja">Playstation</a>
            <a href="<?php echo e(route('plataforma','pc')); ?>" class="caja">PC</a>
        </div>
        <?php if(isset($_SESSION['usuario'])): ?>
        <div class="banner-right">
            <a href="<?php echo e(route('login')); ?>" class="caja IS"><?php echo e($_SESSION['usuario']); ?></a>
            <a href="<?php echo e(route('cs')); ?>" class="caja IS">Cerrar Sesión</a>
            <a href="#" class="caja CC">Carro</a>            
        </div>
            <?php else: ?>
        <div class="banner-right">
            <a href="<?php echo e(route('login')); ?>" class="caja IS">Inicia sesión</a>
            <a href="#" class="caja CC">Crear cuenta</a>            
        </div>
            <?php endif; ?>
    </header>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer>
        <div class="footer-left">
            <a href="index.php" class="caja">Copyright</a>
            <a href="index.php" class="caja">Propietarios</a>
        </div>
        
        <div class="footer-right">
            <i class='caja bx bxl-facebook-square'></i>
            <i class='caja bx bxl-instagram'></i>
            <i class='caja bx bxl-linkedin-square'></i>
            <i class='caja bx bxl-twitter'></i>
        </div>

    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\ProyectoLaravel\resources\views/layouts/plantillaJuegos.blade.php ENDPATH**/ ?>