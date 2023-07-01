<?php $__env->startSection('content'); ?>
<div class="content">

    <table class="table">
        <thead>
            <tr>
                <th class="text-center">StudentID</th>
                <th>student name</th>
                <th>exam name</th>
                <th>mark</th>
                <th class="text-right">subject</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($user->student_id); ?></td>
                <td><?php echo e($user->user_name); ?></td>
                <td><?php echo e($user->exam_name); ?></td>
                <td><?php echo e($mark); ?>/<?php echo e($correctAnswersCount); ?></td>
                <td class="text-right"><?php echo e($user->subject_name); ?></td>
                <td class="td-actions text-right">
                    <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon" data-bs-toggle="modal"
                        data-bs-target="#myModal" data-id="<?php echo e($user->student_id); ?>">
                        <i class="tim-icons icon-notes"></i>
                    </button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>


<div class="modal" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><b>Student Name:</b> <?php echo e($user->user_name); ?></h4>
                <h4 class="modal-title"><b>Exam Name:</b> <?php echo e($user->exam_name); ?></h4>
            </div>
            <div style="color:black;"></div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="modal-body-content">

                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('studentdashboard.layoutstudent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Downloads\quizzeon\quizzeon\quizzeon\resources\views/studentdashboard/mark.blade.php ENDPATH**/ ?>