<?php $__env->startSection('content'); ?>

<body class="index-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip"
                    title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                    <span><img src="/My project (3).png" alt="" width="70px"></span> QuizZeon
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a>
                                BLK•
                            </a>
                        </div>
                        <div class="col-6 collapse-close text-right">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#pablo">
                            <i class="tim-icons icon-world"></i> Discover
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#pablo">
                            <i class="tim-icons icon-world"></i> Discover
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#pablo">
                            <i class="tim-icons icon-single-02"></i> Discover
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="fa fa-cogs d-lg-none d-xl-none"></i> Getting started
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="https://demos.creative-tim.com/blk-design-system/docs/1.0/getting-started/overview.html"
                                class="dropdown-item">
                                <i class="tim-icons icon-paper"></i> Documentation
                            </a>
                            <a href="<?php echo e(route('signup.index')); ?>" class="dropdown-item">
                                <i class="tim-icons icon-bullet-list-67"></i>Register Page
                            </a>
                            <a href="examples/landing-page.html" class="dropdown-item">
                                <i class="tim-icons icon-image-02"></i>Landing Page
                            </a>
                            <a href="examples/profile-page.html" class="dropdown-item">
                                <i class="tim-icons icon-single-02"></i>Profile Page
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-default d-none d-lg-block" href="<?php echo e(route('signup.index')); ?>"
                            onclick="scrollToDownload()">sign up
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-default d-none d-lg-block" href="<?php echo e(route('indexinstructor')); ?>"
                            onclick="scrollToDownload()">instructor
                        </a>
                    </li>
                    <li>
                        <div class="col-md-4">
                            <button class="nav-link btn btn-default d-none d-lg-block" data-toggle="modal"
                                data-target="#myModal2">
                                Sign in
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header header-filter">
            <div class="squares square1"></div>
            <div class="squares square2"></div>
            <div class="squares square3"></div>
            <div class="squares square4"></div>
            <div class="squares square5"></div>
            <div class="squares square6"></div>
            <div class="squares square7"></div>
            <div class="container">
                <div class="content-center brand">
                    <h1 style="font-size: 80px;">QUIZZEON</h1>
                    <h4>Quizzeon Online platform for customizable, secure, and automated exams and quizzes. Join our
                        community today!</h4>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="title" style="text-align: center; ">Exam Maker Features</h2>
            <h4 class="description" style="text-align: center;">

            </h4>
            <div
                style="display: flex; width: 100%;justify-content: center;align-items: center;margin: auto;flex-wrap: wrap;">
                <div class='col-3 card bor ' style="margin:5px;">
                    <div class="card-body">
                        <h5 class="card-title"><img src="source.gif" alt="" width="50px"></h5>
                        <h4 class="card-title" style="color: #C24AC8;">Easy Sharing</h4>
                        <p class="card-text">You can create an exam and share it easily with your students on their
                            respective email ids so they can take the exam from wherever they are.</p>
                    </div>
                </div>
                <div class='col-3 card' style="margin: 5px;">
                    <div class="card-body">
                        <h5 class="card-title"><img src="source.gif" alt="" width="50px"></h5>
                        <h4 class="card-title" style="color: #C24AC8;">Keep your exam private</h4>
                        <p class="card-text">To ensure that unauthorized user do not take your exam, you can create a
                            password-protected exam and it with only select learners..</p>

                    </div>
                </div>
                <div class='col-3 card' style="margin: 5px;">
                    <div class="card-body">
                        <h5 class="card-title"><img src="source.gif" alt="" width="50px"></h5>
                        <h4 class="card-title" style="color: #C24AC8;">Limit exam availability</h4>
                        <p class="card-text">You can make your exam available only during certain dates or hours, so
                            that learners cannot take the exam after it expires.</p>

                    </div>
                </div>
                <div class='col-3 card' style="margin: 5px;">
                    <div class="card-body">
                        <h5 class="card-title"><img src="source.gif" alt="" width="50px"></h5>
                        <h4 class="card-title" style="color: #C24AC8;">Randomize questions</h4>
                        <p class="card-text"> randomizing the order of questions is another effective way to discourage
                            learners from copying each other's answers.</p>

                    </div>
                </div>
                <div class='col-3 card' style="margin: 5px;">
                    <div class="card-body">
                        <h5 class="card-title"><img src="source.gif" alt="" width="50px"></h5>
                        <h4 class="card-title" style="color: #C24AC8;">Shuffle answer options</h4>
                        <p class="card-text">You can shuffle the answer options, so that learners cannot copy the
                            correct answers by peeking into another's screen.</p>

                    </div>
                </div>
                <div class='col-3 card' style="margin: 5px;">
                    <div class="card-body">
                        <h5 class="card-title"><img src="source.gif" alt="" width="50px"></h5>
                        <h4 class="card-title" style="color: #C24AC8;">Add time limit</h4>
                        <p class="card-text">Set a time limit to your exam and for each quitons to reduce the chances of
                            learners using external methods to find answers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div class="section section-javascript" id="javascriptComponents">
        <img src="Homeassets/img/path5.png" class="path">
        <img src="Homeassets/img/path5.png" class="path path1">

        <!-- start card -->
        <h2 class="title" style="text-align: center; ">Why Quizzeon Exam Maker?</h2>
        <h4 class="description" style="text-align: center;">
            You can trust on Quizzeon to create your exam Like a million of teacher and student trust on it
        </h4>

        <div
            style="display: flex; justify-content: center ;align-items: center; flex-wrap: wrap;width: 80%; margin: auto;">
            <div class="card border-success mb-3" style="max-width: 20rem; margin: 10px;">
                <div class="card-header bg-transparent border-success"><img src="ai.svg" alt="" width="50px"></div>
                <div class="card-body text-success">
                    <h5 class="card-title">100+ Quiz Templates</h5>
                    <p class="card-text">Create online exams in minutes using our question library with 100,000+ ready
                        questions.</p>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
            </div>
            <div class="card border-success mb-3" style="max-width: 20rem; margin: 10px;">
                <div class="card-header bg-transparent border-success"><img src="convert.png" alt="" width="50px"></div>
                <div class="card-body text-success">
                    <h5 class="card-title">10+ Question Types</h5>
                    <p class="card-text">Make your tests and exams fun and engaging with a variety of question types,
                        including video questions.

                    </p>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
            </div>
            <div class="card border-success mb-3" style="max-width: 20rem;margin: 10px;">
                <div class="card-header bg-transparent border-success"><img src="convert.png" alt="" width="50px"></div>
                <div class="card-body text-success">
                    <h5 class="card-title">Automated Grading</h5>
                    <p class="card-text">Save hours of your time by pre-scoring your exams and produce exam results with
                        zero manual efforts.</p>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
            </div>
            <div class="card border-success mb-3" style="max-width: 20rem;margin: 10px; height: 218px;">
                <div class="card-header bg-transparent border-success"><img src="convert.png" alt="" width="50px"></div>
                <div class="card-body text-success">
                    <h5 class="card-title">Instant Feedback</h5>
                    <p class="card-text">Turn mistakes into lessons by showing instant feedback for incorrect answers
                    </p>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
            </div>
            <div class="card border-success mb-3" style="max-width: 20rem; margin: 10px;">
                <div class="card-header bg-transparent border-success"><img src="convert.png" alt="" width="50px"></div>
                <div class="card-body text-success">
                    <h5 class="card-title">AI-Powered Reports</h5>
                    <p class="card-text">Identify knowledge gaps with the help of smart reports and improve learner
                        performance.</p>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
            </div>
            <div class="card border-success mb-3" style="max-width: 20rem; margin: 10px;">
                <div class="card-header bg-transparent border-success"><img src="convert.png" alt="" width="50px"></div>
                <div class="card-body text-success">
                    <h5 class="card-title">Mobile Responsive</h5>
                    <p class="card-text">Exams perfectly fit the screen size of smart devices. That means you can assess
                        students anytime, anywhere</p>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
            </div>

        </div>
        <!-- end card -->

    </div>
    <div class="section">
        <div class="container">
            <div class="title">
                <h3>About</h3>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0 ">
                    <h1 class="text-white font-weight-light">About Quizzeon</h1>
                    <p class="text-white mt-4">Welcome to Quizzeon, your online destination for fun and educational
                        quizzes and exams! Our mission is to provide a user-friendly platform for people of all ages to
                        test their knowledge, compete with others, and improve their skills. Join us for a fun and
                        engaging learning experience!</p>
                    <a href="./docs/1.0/components/alerts.html" class="btn btn-warning mt-4">Start Your Quiz</a>
                </div>
                <div class="col-lg-6">
                    <div id="carouselExampleControls" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="source.gif" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="convert.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="convert (1).png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <i class="tim-icons icon-minimal-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <i class="tim-icons icon-minimal-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <h2 class="title" style="text-align: center; ">Who Can Use Quizzeon Exam Maker?</h2>
    <h4 class="description" style="text-align: center;">
        Use Quizzeon exam creator to create quizzes to suit your needs

    </h4>
    <div style="width: 90%; margin: auto;">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="corp-tran.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title" style="color: #C24AC8;">Employers & Recruiters</h4>
                    <p class="card-text">Create pre-hiring assessments for hiring & onboarding new employees. Use the
                        record-video question type to let the candidates introduce themselves with a real-time video
                        recording.</p>s
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="emp-recru.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title" style="color: #C24AC8;">Corporate Trainers</h4>
                    <p class="card-text">Create post-training assessments to assess the level of knowledge retention.
                        Get access to actionable reports & AI-enabled statistics to identify training loop-holes. Use
                        the consolidated reports to assess the overall impact of your training sessions.</p>

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="teacher.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title" style="color: #C24AC8;">Teachers
                    </h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>

                </div>
            </div>
        </div>
    </div>
    <h2 class="title" style="text-align: center; ">The Simplest Way to Create Online Exams</h2>
    <h4 class="description" style="text-align: center;">
        1,000,000+ ready-to-use questions
    </h4>
    <div style="display: flex; width: 90%;margin: auto; flex-wrap: wrap;">
        <div class="video" style="width:60;">
            <div class="play-btn">
                <ion-icon name="play"></ion-icon>
            </div>
        </div>
        <div style="width: 30%; margin:auto;">
            <p>Easily create exams online using the world’s leading exam software from ProProfs. You can create an
                online exam or a test from scratch or use our library containing customizable templates and 1,000,000+
                ready-to-use questions. This exam builder software offers 15 different question types to create an exam
                on any subject. Add images and videos to your exams with this exam maker software to make online exam
                more exciting and fun.</p>
            <li style="color: rgb(0,242,195);">100k+ customizable exams</li>
            <li style="color: rgb(0,242,195);">15+ question types</li>
            <li style="color: rgb(0,242,195);">Question banks</li>

        </div>

    </div>

    <h2 class="title" style="text-align: center; ">Perfect For</h2>
    <h4 class="description" style="text-align: center;">
        Online exam software designed for multiple use case
    </h4>

    <div style="display: flex; justify-content: center ;align-items: center; flex-wrap: wrap;width: 80%; margin: auto;">
        <div class="card border-success mb-3" style="max-width: 20rem; margin: 10px;">
            <div class="card-header bg-transparent border-success"><img src="prefer1.svg" alt="" width="50px"></div>
            <div class="card-body text-success">
                <h5 class="card-title">Student Assessment</h5>
                <p class="card-text">Evaluate students’ knowledge about a certain topic by creating topic-based online
                    exams. Assign online exams in an online classroom for self-assessment.</p>
            </div>
            <div class="card-footer bg-transparent border-success">Footer</div>
        </div>
        <div class="card border-success mb-3" style="max-width: 20rem; margin: 10px;">
            <div class="card-header bg-transparent border-success"><img src="candid.svg" alt="" width="50px"></div>
            <div class="card-body text-success">
                <h5 class="card-title">Hiring Candidates</h5>
                <p class="card-text">Hire anytime, anywhere with online skill assessments. Create a new one or choose a
                    ready-to-use assessment from the assessment library.

                </p>
            </div>
            <div class="card-footer bg-transparent border-success">Footer</div>
        </div>
        <div class="card border-success mb-3" style="max-width: 20rem;margin: 10px;height: 260px;">
            <div class="card-header bg-transparent border-success"><img src="emp-tran.svg" alt="" width="50px"></div>
            <div class="card-body text-success">
                <h5 class="card-title">Employee Training</h5>
                <p class="card-text">Train your workforce with delightful online exams. Conduct training sessions
                    followed by engaging exams that can be taken anytime, anywhere.</p>
            </div>
            <div class="card-footer bg-transparent border-success">Footer</div>
        </div>
    </div>
    <h2 class="title" style="text-align: center; ">Benefits for Teachers & Businesses</h2>


    <div style="display: flex; justify-content: center ;align-items: center; flex-wrap: wrap;width: 80%; margin: auto;">
        <div class="card border-success mb-3" style="max-width: 30rem; margin: 10px;">
            <div class="card-header bg-transparent border-success"><img src="business.svg" alt="" width="50px"></div>
            <div class="card-body text-success">
                <h5 class="card-title">For Businesses</h5>
                <p class="card-text">Companies can create employee training tests, compliance tests, employee skill
                    assessments, and more. For example, trainers can use online exams as part of training to ensure that
                    employees understand the materials being taught</p>
                <li>Screen candidates </li>
                <li>Onboard employees</li>
                <li>Assess retention</li>
            </div>
            <div class="card-footer bg-transparent border-success">Footer</div>
        </div>
        <div class="card border-success mb-3" style="max-width: 30rem; margin: 10px;">
            <div class="card-header bg-transparent border-success"><img src="for-teacher.svg" alt="" width="50px"></div>
            <div class="card-body text-success">
                <h5 class="card-title">For Teachers</h5>
                <p class="card-text">Online Exam Maker for teachers can help them in creating online exams and save tons
                    of effort. The exams are automatically graded with the results instantly available to students, so
                    that teachers don’t have to spend hours in grading.</p>

                <li>Assess knowledge retention </li>
                <li>Create online classrooms </li>
                <li>Identify knowledge gaps </li>

            </div>
            <div class="card-footer bg-transparent border-success">Footer</div>
        </div>
    </div>

    <div class="section section-nucleo-icons">
        <img src="Homeassets/img/path3.png" class="path">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <h2 class="title">Quizzeon</h2>
                    <h4 class="description">
                        Using Quizzeon is simple and straightforward. To get started, sign up for a free account and log
                        in. From the dashboard, you can create a new quiz or exam by clicking on the "Create New Quiz"
                        button. Give your quiz a title and description, and start adding questions. You can choose from
                        a variety of question types, such as multiple choice, true/false, short answer, and essay. You
                        can also add images, videos, and audio files to your questions to make them more engaging and
                        interactive..
                    </h4>
                    <div class="btn-wrapper">
                        <a href="./docs/1.0/foundation/icons.html" class="btn btn-primary btn-round"
                            target="_blank">View Demo Quiz</a>
                    </div>
                </div>
            </div>
            <div class="blur-hover">
                <a href="./docs/1.0/foundation/icons.html">
                    <div class="icons-container blur-item on-screen mt-5">
                        <!-- Center -->
                        <i class="icon tim-icons icon-coins"></i>
                        <!-- Right 1 -->
                        <i class="icon icon-sm tim-icons icon-spaceship"></i>
                        <i class="icon icon-sm tim-icons icon-money-coins"></i>
                        <i class="icon icon-sm tim-icons icon-link-72"></i>
                        <!-- Right 2 -->
                        <i class="icon tim-icons icon-send"></i>
                        <i class="icon tim-icons icon-mobile"></i>
                        <i class="icon tim-icons icon-wifi"></i>
                        <!-- Left 1 -->
                        <i class="icon icon-sm tim-icons icon-key-25"></i>
                        <i class="icon icon-sm tim-icons icon-atom"></i>
                        <i class="icon icon-sm tim-icons icon-satisfied"></i>
                        <!-- Left 2 -->
                        <i class="icon tim-icons icon-gift-2"></i>
                        <i class="icon tim-icons icon-tap-02"></i>
                        <i class="icon tim-icons icon-wallet-43"></i>
                    </div>
                    <span class="blur-hidden h5 text-primary">create your own quiz with all tool you need it</span>
                </a>
            </div>
        </div>
    </div>
    </div>

    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <h4 class="title title-up">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                        into your mouth.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Nice Button</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini modal-primary modal-mini" id="myModal1" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="tim-icons icon-simple-remove text-white"></i>
                    </button>
                    <div class="modal-profile">
                        <i class="tim-icons icon-single-02"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Always have an access to your profile</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-neutral">Back</button>
                    <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Modal -->
    <div class="modal fade modal-black" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="tim-icons icon-simple-remove text-white"></i>
                    </button>
                    <div class="text-muted text-center ml-auto mr-auto">
                        <h3 class="mb-0">Sign in with</h3>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="btn-wrapper text-center">
                        <a href="#" class="btn btn-neutral btn-icon">
                            <img src="Homeassets/img/github.svg">
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon">
                            <img src="Homeassets/img/google.svg">
                        </a>
                    </div>
                    <div class="text-center text-muted mb-4 mt-3">
                        <small>Or sign in with credentials</small>
                    </div>
                    <form role="form" action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="tim-icons icon-email-85"></i>
                                    </span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="tim-icons icon-key-25"></i>
                                    </span>
                                </div>
                                <input class="form-control" placeholder="Password" type="password" name="password">
                            </div>
                        </div>
                        <div class="form-check mt-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" checked>
                                <span class="form-check-sign"></span>
                                Remember me!
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">Sign in</button>
                            <button type="button" class="btn btn-primary my-4"><a href="examples/register-page.html"
                                    onclick="scrollToDownload()">
                                    <span style="color: white;">sign up</span> </a></button>

                        </div>
                        <div class="text-center">

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="title">BLK•</h1>
                </div>
                <div class="col-md-3">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./examples/landing-page.html" class="nav-link">
                                Landing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./examples/register-page.html" class="nav-link">
                                Register
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./examples/profile-page.html" class="nav-link">
                                Profile
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="https://creative-tim.com/contact-us" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://creative-tim.com/about-us" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://creative-tim.com/blog" class="nav-link">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://opensource.org/licenses/MIT" class="nav-link">
                                License
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="title">Follow us:</h3>
                    <div class="btn-wrapper profile">
                        <a target="_blank" href="https://twitter.com/creativetim"
                            class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip"
                            data-original-title="Follow us">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/creativetim"
                            class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip"
                            data-original-title="Like us">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a target="_blank" href="https://dribbble.com/creativetim"
                            class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip"
                            data-original-title="Follow us">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('homepage.homelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\MasteProject\quizzeon\resources\views/homepage/index.blade.php ENDPATH**/ ?>