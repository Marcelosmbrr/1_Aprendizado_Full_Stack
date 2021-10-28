<!-- layouts é o nome da pasta, e app o nome do arquivo dela -->
 

<!-- Conteúdo extendido para o arquivo "app" da pasta layouts -->
<?php $__env->startSection("content"); ?>
    <h1>Conteúdo criado em contato.blade.php e exportado para app.blade.php </h1>
    <h1><?php echo e($desc); ?></h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lcmar\Desktop\Computação_Estudo\2_Aprendizado_Full_Stack\3_Back-End\2_PHP\10_Template\1_Template_Blade\views/contato.blade.php ENDPATH**/ ?>