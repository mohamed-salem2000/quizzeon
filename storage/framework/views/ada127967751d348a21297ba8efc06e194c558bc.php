<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./Homeassets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./Homeassets/img/favicon.png">
    <title>
        Blk• Design System by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="./Homeassets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./Homeassets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./Homeassets/demo/demo.css" rel="stylesheet" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style type="text/css">
    .video {
        width: 800px;
        height: 450px;
        background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(b719-removebg-preview.png);
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
    }

    .play-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgb(0, 242, 195);
        color: #fff;
        font-size: 50px;
        width: 100px;
        height: 100px;
        z-index: 2;
        border-radius: 100%;
        position: relative;
    }

    .play-btn:before {
        content: '';
        position: absolute;
        border: 15px solid #fff;
        border-radius: 50%;
        top: -20px;
        left: -20px;
        right: -20px;
        bottom: -20px;
        animation: bloom1 1.5s linear infinite;
        opacity: 0;
        z-index: 1;
    }

    .play-btn:after {
        content: '';
        position: absolute;
        border: 15px solid #fff;
        border-radius: 50%;
        top: -20px;
        left: -20px;
        right: -20px;
        bottom: -20px;
        animation: bloom2 1.5s linear infinite;
        opacity: 0;
        animation-delay: .4s;
        z-index: 1;
    }

    @keyframes bloom1 {
        0% {
            transform: scale(.5);
        }

        50% {
            opacity: 1;
        }

        100% {
            transform: scale(1.5);
        }
    }

    @keyframes bloom2 {
        0% {
            transform: scale(.5);
        }

        50% {
            opacity: 1;
        }

        100% {
            transform: scale(1.5);
        }
    }
    </style>
</head>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="./Homeassets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./Homeassets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./Homeassets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./Homeassets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./Homeassets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./Homeassets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!-- Chart JS -->
    <script src="./Homeassets/js/plugins/chartjs.min.js"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./Homeassets/js/plugins/moment.min.js"></script>
    <script src="./Homeassets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="./Homeassets/demo/demo.js"></script>
    <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
    <script src="./Homeassets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        blackKit.initDatePicker();
        blackKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
    </script>
</body>

</html><?php /**PATH C:\Users\Orange\Downloads\quizzeon\quizzeon\quizzeon\resources\views/homepage/homelayout.blade.php ENDPATH**/ ?>