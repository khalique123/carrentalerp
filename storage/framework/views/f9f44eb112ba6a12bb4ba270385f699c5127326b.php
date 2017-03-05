<?php $__env->startSection('title'); ?>
Car Rental ERP - Admin Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('/new/admin_menu_bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('/new/default_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>