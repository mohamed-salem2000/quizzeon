<?php $__env->startSection('content'); ?>
<div class="content">
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h4 class="card-title"><?php echo e($subject->subject_name); ?></h4>
            <p class="card-text">
            <?php echo e($subject->description); ?></p>
            <p class="card-text">
            <?php echo e($user->first_name); ?><span> <?php echo e($user->last_name); ?></span> </p>
            <p class="card-text">
            section: <?php echo e($subject->section); ?></p>
            <a href="<?php echo e(route('studentexam')); ?>" class="card-link">Enter</a>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('studentdashboard.layoutstudent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Downloads\quizzeon\quizzeon\quizzeon\resources\views/studentdashboard/subject.blade.php ENDPATH**/ ?>