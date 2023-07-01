@extends('dashboredinstructor.instructorlayout')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Score</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                    <canvas id="SubmissionChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Exam</h5>
                    <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="MarksChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Completed Exam </h5>
                    <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                    <canvas id="ExamChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Mock data: total students and submitted students
  var totalStudents = 100;
  var submittedStudents = 78;
  var notSubmittedStudents = totalStudents - submittedStudents;

  // Create the data array for the chart
  var chartData = {
    labels: ["Submitted", "Not Submitted"],
    datasets: [{
      data: [submittedStudents, notSubmittedStudents],
      backgroundColor: [
        "rgba(75, 192, 192, 0.2)",
        "rgba(255, 99, 132, 0.2)"
      ],
      borderColor: [
        "rgba(75, 192, 192, 1)",
        "rgba(255, 99, 132, 1)"
      ],
      borderWidth: 1
    }]
  };

  // Get the chart canvas element
  var canvas = document.getElementById("SubmissionChart");
  var ctx = canvas.getContext("2d");

  // Create the chart using Chart.js
  var chart = new Chart(ctx, {
    type: "pie",
    data: chartData,
    options: {
      responsive: true
    }
  });
</script>
<script>
var canvas = document.getElementById("ExamChart");
var ctx = canvas.getContext("2d");

// Retrieve the exam count from your Laravel backend using a variable or by directly outputting it in your JavaScript code
var examCount = <?php echo 5; ?>; // Replace with the actual exam count value

var chart = new Chart(ctx, {
    type: "pie",
    data: {
        labels: ["Instructor 1"],
        datasets: [{
            data: [5],
            backgroundColor: ["rgba(75, 192, 192, 0.2)"],
            borderColor: ["rgba(75, 192, 192, 1)"],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        legend: {
            position: "bottom"
        }
    }
});
</script>
<script>
var marks = [85, 92, 78, 90, 88, 95, 82, 79, 87];
var studentNames = ["John", "Emily", "Michael", "Sophia", "David", "Emma", "Daniel", "Olivia", "Matthew"];
var averageMark = marks.reduce((acc, curr) => acc + curr, 0) / marks.length;
var highestMark = Math.max(...marks);
var highestMarkIndex = marks.indexOf(highestMark);
var lowestMark = Math.min(...marks);
var lowestMarkIndex = marks.indexOf(lowestMark);

var studentWithHighestMark = studentNames[highestMarkIndex];
var studentWithLowestMark = studentNames[lowestMarkIndex];

var chartData = {
    labels: ["Average Mark", "Highest Mark (" + studentWithHighestMark + ")", "Lowest Mark (" +
        studentWithLowestMark + ")"
    ],
    datasets: [{
        data: [averageMark, highestMark, lowestMark],
        backgroundColor: [
            "rgba(75, 192, 192, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)"
        ],
        borderColor: [
            "rgba(75, 192, 192, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)"
        ],
        borderWidth: 1
    }]
};

var canvas = document.getElementById("MarksChart");
var ctx = canvas.getContext("2d");

var chart = new Chart(ctx, {
    type: "bar",
    data: chartData,
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
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
@endsection