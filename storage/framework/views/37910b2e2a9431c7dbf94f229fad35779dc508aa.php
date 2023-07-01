<?php $__env->startSection('content'); ?>
<style>
.remove-icon {
    cursor: pointer;
    color: red;
    margin-left: 5px;
}
</style>
<div class="content">
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
    <script>
        setTimeout(function() {
            document.getElementById('success-message').remove();
        }, 2000);
        </script>
    <?php endif; ?>
    <div class="card card-nav-tabs">
        <h4 class="card-header card-header-info">Add Subject</h4>
        <div class="card-body">
            <p class="card-text">Here you can add your Exam to add exam to this subject .</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Add
                Exam</button>
        </div>
    </div>
    <div class="section">
        <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="<?php echo e($exam->image); ?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?php echo e($exam->exam_name); ?></h4>
                <p class="card-text">Date: <?php echo e($exam->date); ?></p>
                <p class="card-text">Time: <?php echo e($exam->time); ?> clock</p>
                <button class="btn btn-primary btn-fab btn-icon btn-round" data-toggle="modal"
                    data-target=".bd-example-modal-lg">
                    <i class="tim-icons icon-paper" onclick="getexamId('<?php echo e($exam->id); ?>','<?php echo e($exam->exam_name); ?>')"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <i class="tim-icons icon-settings"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="card">
                <div class="card-body">
                    <h1>create a first step of exam</h1>
                    <form action="<?php echo e(route('exam.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-calendar-60"></i>
                                </div>
                            </div>
                            <input type="date" class="form-control" placeholder="exam date" name="date">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-time-alarm"></i>
                                </div>
                            </div>
                            <input type="time" class="form-control" placeholder="exam time" name="time">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-paper"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="exam name" name="name">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-link-72"></i>
                                </div>
                            </div>
                            <select class="form-control" id="exampleFormControlSelect1" name="selectedSubject">
                                <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->	subject_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="image" placeholder="Enter email" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Primary</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card">
                <div class="card-body">
                    <input type="text" class="form-control" id="examname" name="examname" disabled="">
                <form action="<?php echo e(route('addquestion')); ?>" method="POST" id="questionForm">
                  <?php echo csrf_field(); ?>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control" onchange="changeOptionType()" name="selectoption">
                                    <option selected value="1">single choice (radio button)</option>
                                    <option value="2">multiple choice</option>
                                    <option value="3">image choice</option>
                                    <option value="4">matching choice</option>
                                    <option value="5">fill the blank</option>
                                    <option value="6">upload file</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">exam description</label>
                                <input type="text" class="form-control" id="examId" name="examid" >
                            </div>

                        </div>
                        <div class="container mt-4 mb-4">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12 col-lg-8">
                                    <label>Describe the issue in detail</label>
                                    <div class="form-group">
                                        <textarea id="editor" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="editor" class="mt-3" contenteditable="true"></div>
                        <textarea id="editorOutput" name="content" class="d-none"></textarea>
                        <div id="addOption">
                            <input type="hidden" id="optionCount" name="optionCount" value="0">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="addOption()">Add option</button>
                        <button type="submit" class="btn btn-primary" id="submitBtn">submit questions</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function getexamId(examId,examname) {
    $('#examId').val(examId);
    $('#examname').val(examname);
    var formAction = "<?php echo e(route('exam.store', [':exam'])); ?>";
    formAction = formAction.replace(':exam', examId);
    $('#examFormdestroy').attr('action', formAction);
    $('#examIdIdInput').val(examId);
}
</script>
<script>
tinymce.init({
    selector: 'textarea#editor',
    skin: 'bootstrap', //The TinyMCE Bootstrap skin
    plugins: 'lists, link, image, media',
    […] //Omitted lines are identical to step 2                       
});
</script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: 'textarea#editor',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false,
    setup: (editor) => {
        // Apply the focus effect
        editor.on("init", () => {
            editor.getContainer().style.transition =
                "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
        });
        editor.on("focus", () => {
            (editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)"),
            (editor.getContainer().style.borderColor = "#80bdff");
        });
        editor.on("blur", () => {
            (editor.getContainer().style.boxShadow = ""),
            (editor.getContainer().style.borderColor = "");
        });
    },
});
</script>
<script>
tinymce.init({
    selector: 'textarea#editor',
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false,
});
</script>

<script>
    function addOption() {
    var optionContainer = document.createElement('div');
    optionContainer.classList.add('option-container');

    var inputField = document.createElement('input');
    inputField.setAttribute('type', 'text');
    inputField.setAttribute('class', 'form-control option-input');
    inputField.setAttribute('name', 'option[]');
    inputField.setAttribute('placeholder', 'Option');

    var checkbox = document.createElement('input');
    checkbox.setAttribute('type', 'checkbox');
    checkbox.setAttribute('class', 'option-checkbox');
    checkbox.setAttribute('name', 'correct[]');

    checkbox.onchange = function() {
        var checkboxes = document.getElementsByClassName('option-checkbox');
        var optionInputs = document.getElementsByClassName('option-input');
        var currentIndex = Array.from(checkboxes).indexOf(this);

        for (var i = 0; i < checkboxes.length; i++) {
            optionInputs[i].disabled = checkboxes[i].checked && i !== currentIndex;
            checkboxes[i].value = i === currentIndex && checkboxes[i].checked ? 1 : 0;
        }
    };

    var removeIcon = document.createElement('span');
    removeIcon.setAttribute('class', 'remove-icon');
    removeIcon.innerHTML = '&times;';
    removeIcon.onclick = function() {
        this.parentNode.remove();
    };

    optionContainer.appendChild(inputField);
    optionContainer.appendChild(checkbox);
    optionContainer.appendChild(removeIcon);

    var div = document.getElementById('addOption');
    div.appendChild(optionContainer);
    div.appendChild(document.createElement('br'));

    // Increment and update option count
    var optionCountInput = document.getElementById('optionCount');
    var optionCount = parseInt(optionCountInput.value) + 1;
    optionCountInput.value = optionCount;

    // Assign names to option inputs and checkboxes
    var optionInputs = document.getElementsByClassName('option-input');
    var checkboxes = document.getElementsByClassName('option-checkbox');
    for (var i = 0; i < optionInputs.length; i++) {
        optionInputs[i].setAttribute('name', 'option[' + i + ']');
        checkboxes[i].setAttribute('name', 'correct[' + i + ']');
    }
}

</script>

<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="javascript:void(0) class="nav-link">
                    Creative Tim
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    About Us
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    Blog
                </a>
            </li>
        </ul>
        <div class="copyright">
            ©
            <script>
            document.write(new Date().getFullYear())
            </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>
</div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-primary active" data-color="primary"></span>
                        <span class="badge filter badge-info" data-color="blue"></span>
                        <span class="badge filter badge-success" data-color="green"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line text-center color-change">
                <span class="color-label">LIGHT MODE</span>
                <span class="badge light-badge mr-2"></span>
                <span class="badge dark-badge ml-2"></span>
                <span class="color-label">DARK MODE</span>
            </li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank"
                    class="btn btn-primary btn-block btn-round">Download Now</a>
                <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html"
                    target="_blank" class="btn btn-default btn-block btn-round">
                    Documentation
                </a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot;
                    50</button>
                <br>
                <br>
                <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard"
                    data-icon="octicon-star" data-size="large" data-show-count="true"
                    aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboredinstructor.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Downloads\quizzeon\quizzeon\resources\views/dashboredinstructor/exam.blade.php ENDPATH**/ ?>