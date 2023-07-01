<?php $__env->startSection('content'); ?>
<style>
span {
    color: white;
}

.question-number {
    color: #e14eca;
}

.question-option-container {
    display: flex;
    align-items: center;
    gap: 10px;
}

.empty-input {
    width: 300px;
    height: 40px;
    padding: 5px;
    border: 1px solid #ccc;
    transition: background-color 0.3s;
}

.empty-input:focus {
    background-color: rgb(30, 30, 44);
}

.option-container {
    width: 200px;
}

.option-item {
    padding: 5px;
    background-color: rgb(30, 30, 44);
    border: 1px solid #ccc;
    margin-bottom: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.option-item:hover {
    background-color: #e0e0e0;
}

.option-item {
    display: inline-block;
    width: 100px;
    margin-right: 10px;
    /* Adjust the margin as per your preference */
}
</style>

<div class="content">

    <div>
        <p id="countdown">Time Remaining: <?php echo e($exam->deuration); ?> minutes</p>
        <form action="<?php echo e(route('questions.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $questionData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($question['id']); ?></p>
    <div class="question-container">
        <p class="question-number">Question <?php echo e($index + 1); ?></p>
        <p class="question-text"><?php echo $question['questionText']; ?></p>
    </div>
    <input type="hidden" name="questionData" value="<?php echo e(json_encode($questionData)); ?>">

    <?php if($question['questionType'] == 1): ?>
    <ul>
        <?php $__currentLoopData = $question['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="form-check form-check-radio">
            <label class="form-check-label"><span><?php echo e($option->option_text); ?></span>
                <input class="form-check-input" type="radio" name="answers[<?php echo e($index + 1); ?>]"
                    value="<?php echo e($option->id); ?>" id="option<?php echo e($option->id); ?>" required>
                <span class="form-check-sign"></span>
            </label>
<input type="hidden" name="question_ids[<?php echo e($index + 1); ?>]" value="<?php echo e($option->question_id); ?>">
            <input type="hidden" name="options_ids[<?php echo e($index + 1); ?>][]" value="<?php echo e($option->id); ?>">
            <input type="hidden" name="examid" value="<?php echo e($exam->id); ?>">
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
                    name="answers[<?php echo e($index + 1); ?>][]" value="<?php echo e($option->id); ?>">
                <span class="form-check-sign">
                    <span class="check"></span>
                </span>
            </label>
            <input type="hidden" name="question_ids[<?php echo e($index + 1); ?>]" value="<?php echo e($option->question_id); ?>">
            <input type="hidden" name="options_ids[<?php echo e($index + 1); ?>][]" value="<?php echo e($option->id); ?>">

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php elseif($question['questionType'] == 3): ?>
    <ul>
        <?php $__currentLoopData = $question['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <input type="radio" name="answers[<?php echo e($index + 1); ?>]" id="option<?php echo e($option->id); ?>"
                value="<?php echo e($option->id); ?>">.
            <label for="option<?php echo e($option->id); ?>">
                <img src="../../<?php echo e($option->option_text); ?>" alt="<?php echo e($option->option_text); ?>" width="100"
                    height="100">
            </label>
            <input type="hidden" name="question_ids[<?php echo e($index + 1); ?>]" value="<?php echo e($option->question_id); ?>">
            <input type="hidden" name="options_ids[<?php echo e($index + 1); ?>][]" value="<?php echo e($option->id); ?>">

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php elseif($question['questionType'] == 4): ?>
    <?php $__currentLoopData = $question['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="question-option-container">
            <input type="text" class="empty-input" id="<?php echo e($option->id); ?>" name="answers[<?php echo e($index + 1); ?>][<?php echo e($option->id); ?>]" >
            <div class="option-container">
                <ul>
                    <div class="option-item" data-option-id="<?php echo e($option->id); ?>" value="<?php echo e($option->id); ?>">
                        <?php echo e($option->is_correct); ?>

                    </div>
                </ul>
            </div>
            <input type="hidden" name="options_ids[<?php echo e($index + 1); ?>][<?php echo e($loop->index + 1); ?>]" value="<?php echo e($option->id); ?>">
            <input type="hidden" name="question_ids[<?php echo e($index + 1); ?>]" value="<?php echo e($option->question_id); ?>">
            <p><?php echo e($option->option_text); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var optionItems = document.querySelectorAll('.option-item');
    var emptyInputs = document.querySelectorAll('.empty-input');

    optionItems.forEach(function(optionItem) {
        optionItem.addEventListener('click', function() {
            var selectedOption = this.textContent.trim();
            var emptyInput = getFirstEmptyInput();

            if (emptyInput) {
                emptyInput.value = selectedOption;
                optionItem.style.display = 'none';
            }
        });
    });

    emptyInputs.forEach(function(emptyInput) {
        emptyInput.addEventListener('click', function() {
            var selectedOption = this.value;
            this.value = '';

            // Find the corresponding option box and display it
            optionItems.forEach(function(optionItem) {
                if (optionItem.textContent.trim() === selectedOption) {
                    optionItem.style.display = 'block';
                }
            });
        });
    });

    function getFirstEmptyInput() {
        for (var i = 0; i < emptyInputs.length; i++) {
            if (emptyInputs[i].value === '') {
                return emptyInputs[i];
            }
        }
        return null;
    }
});
</script>


<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the duration in minutes
    var durationString = "<?php echo e($exam->deuration); ?>";
    var duration = parseInt(durationString);
    // Calculate the end time by adding the duration to the current time
    var endTime = new Date();
    endTime.setMinutes(endTime.getMinutes() + duration);

    // Update the countdown every second
    var countdownElement = document.getElementById("countdown");
    var countdownInterval = setInterval(updateCountdown, 1000);

    function updateCountdown() {
        var currentTime = new Date();

        // Calculate the remaining time
        var remainingTime = Math.floor((endTime - currentTime) / 1000);

        // Check if the time is up
        if (remainingTime <= 0) {
            clearInterval(countdownInterval); // Stop the countdown
            countdownElement.innerHTML = "Time's up! Redirecting...";

            // Redirect the user to the desired URL when the time is up
            setTimeout(function() {
                window.location.href = "<?php echo e(route('studentexam')); ?>";
            }, 3000); // Redirect after 3 seconds (adjust as needed)
        } else {
            // Format the remaining time as minutes and seconds
            var minutes = Math.floor(remainingTime / 60);
            var seconds = remainingTime % 60;

            // Display the remaining time
            countdownElement.innerHTML = "Time Remaining: " + minutes + "m " + seconds + "s";
        }
    }
});


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboredinstructor.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Downloads\quizzeon\quizzeon\quizzeon\resources\views/studentdashboard/question.blade.php ENDPATH**/ ?>