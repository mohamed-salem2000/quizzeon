<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('profile.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">
                                    <label>your Id </label>
                                    <input type="text" class="form-control" disabled="" placeholder="Company"
                                        value="<?php echo e($user->id); ?>" name="id">
                                </div>
                            </div>
                            <div class="col-md-3 px-md-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Username"
                                        value="<?php echo e($user->user_name); ?>">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" disabled="" value="<?php echo e($user->email); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Company" name="first"
                                        value="<?php echo e($user->first_name); ?>">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" placeholder="Middle Name" name="middle"
                                        value="<?php echo e($user->middle_name); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="last name" name="last"
                                        value="<?php echo e($user->last_name); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-md-1">
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control" placeholder="Location" name="location"
                                        value="<?php echo e($user->location); ?>">
                                </div>
                            </div>
                            <div class="col-md-4 px-md-1">
                                <div class="form-group">
                                    <label>your Major</label>
                                    <input type="text" class="form-control" placeholder="Mjor" name="major">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">
                                    <label>phone number</label>
                                    <input type="text" class="form-control" placeholder="phone number" name="phone"
                                        value="<?php echo e($user->phone); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="image" placeholder="Enter email" name="image">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="javascript:void(0)" onclick="showLargeImage('<?php echo e($user->image); ?>')">
                            <img class="avatar" src="<?php echo e($user->image); ?>" alt="...">
                            <h5 class="title"><?php echo e($user->user_name); ?></h5>
                        </a>
                        <p class="description">
                            Instructor/<?php echo e($user->first_name); ?>

                        </p>
                    </div>
                    </p>
                    <div class="card-description">
                        Do not be scared of the truth because we need to restart the human foundation in truth And I
                        love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="largerImageContainer" class="larger-image">
    <img id="largerImage" src="" alt="Larger Image">
</div>

<script>
function showLargeImage(imageUrl) {
    var largerImage = document.getElementById("largerImage");
    largerImage.src = imageUrl;

    var largerImageContainer = document.getElementById("largerImageContainer");
    largerImageContainer.style.display = "block";
}

var largerImageContainer = document.getElementById("largerImageContainer");
largerImageContainer.addEventListener("click", function() {
    this.style.display = "none";
});
</script>
<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
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
<?php echo $__env->make('dashboredinstructor.instructorlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Downloads\quizzeon\quizzeon\resources\views/dashboredinstructor/profile.blade.php ENDPATH**/ ?>