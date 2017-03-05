<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldContent('style_sheets'); ?>
    <?php echo $__env->yieldContent('header_scripts'); ?>
    <?php echo $__env->make('/new/bootstrap_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
  </head>
  
  <body>
  
    
    <?php $__env->startSection('menubar'); ?>
      <?php echo $__env->make('/new/admin_menu_bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
    
    <?php echo $__env->yieldContent('content'); ?>
  </body>
</html>