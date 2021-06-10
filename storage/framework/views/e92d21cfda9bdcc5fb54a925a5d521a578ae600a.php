<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block" style="text-align: center;">
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>


<?php if($message = Session::get('error')): ?>
    <div class="alert alert-danger alert-block" style="text-align: center;">
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>


<?php if($message = Session::get('warning')): ?>
    <div class="alert alert-warning alert-block" style="text-align: center;">
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>


<?php if($message = Session::get('info')): ?>
    <div class="alert alert-info alert-block" style="text-align: center;">
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>


<?php if($errors->any()): ?>
    <div class="alert alert-danger" style="text-align: center;">
        Please check the form below for errors
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\SiteNotepad\resources\views/flashs.blade.php ENDPATH**/ ?>