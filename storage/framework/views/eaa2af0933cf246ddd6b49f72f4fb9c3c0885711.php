<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="section">
        <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="<?php echo e($exam->image); ?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?php echo e($exam->exam_name); ?></h4>
                <p class="card-text">Date: <?php echo e($exam->date); ?></p>
                <p class="card-text">Time: <?php echo e($exam->time); ?> clock</p>
                <?php
                $currentDateTime = date('Y-m-d H:i:s');
                $examDateTime = date('Y-m-d H:i:s', strtotime($exam->date . ' ' . $exam->time));
                $timeDifference = strtotime($currentDateTime) - strtotime($examDateTime);
                $minutesDifference = round($timeDifference / 60); // Convert time difference to minutes
                ?>
                <p><?php echo e($currentDateTime); ?></p>
                <?php if($currentDateTime >= $examDateTime): ?>
                
                    <?php if($minutesDifference <= 5): ?>
                        <a href="<?php echo e(route('question', $exam->id )); ?>" type="button" rel="tooltip"
                            class="btn btn-success btn-sm btn-icon">
                            <i class="tim-icons icon-settings"></i>
                        </a>
                    <?php else: ?>
                        <p>Sorry, you are past the allowed time to enter the exam.</p>
                    <?php endif; ?>
                <?php else: ?>
                <p>The exam has not started yet.</p>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('studentdashboard.layoutstudent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Downloads\quizzeon\quizzeon\quizzeon\resources\views/studentdashboard/exam.blade.php ENDPATH**/ ?>