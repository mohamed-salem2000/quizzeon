<?php $__env->startSection('content'); ?>
<style>
span {
    color: white;
}

.question-number {
    color: #e14eca;
}
</style>

<div class="content">

    <div>
        <?php $__currentLoopData = $questionData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="question-container">
            <p class="question-number">Question <?php echo e($index + 1); ?></p>
            <p class="question-text"><?php echo $question['questionText']; ?></p>
        </div>
        <?php if($question['questionType'] == 1): ?>
        <ul>
            <?php $__currentLoopData = $question['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><span><?php echo e($option->option_text); ?></span>
                    <input class="form-check-input" type="radio" name="question<?php echo e($index + 1); ?>" id="exampleRadios1"
                        value="<?php echo e($option->id); ?>" id="option<?php echo e($option->id); ?>">
                    <span class="form-check-sign"></span>
                </label>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <hr>
        <?php elseif($question['questionType'] == 2): ?>
        <ul>
            <?php $__currentLoopData = $question['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-check">
                <label class="form-check-label"><span><?php echo e($option->option_text); ?></span>
                    <input class="form-check-input" type="checkbox" id="option<?php echo e($option->id); ?>"
                        name="question<?php echo e($index + 1); ?>[]" value="<?php echo e($option->id); ?>">
                    <span class="form-check-sign">
                        <span class="check"></span>
                    </span>
                </label>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php elseif($question['questionType'] == 3): ?>
        <ul>
            <?php $__currentLoopData = $question['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <input type="radio" name="question<?php echo e($index + 1); ?>[]" id="option<?php echo e($option->id); ?>"
                    value="<?php echo e($option->id); ?>">
                <label for="option<?php echo e($option->id); ?>">
                    <img src="../../<?php echo e($option->option_text); ?>" alt="<?php echo e($option->option_text); ?>" width="100"
                        height="100">
                </label>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboredinstructor.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Downloads\quizzeon\quizzeon\quizzeon\resources\views/dashboredinstructor/question.blade.php ENDPATH**/ ?>