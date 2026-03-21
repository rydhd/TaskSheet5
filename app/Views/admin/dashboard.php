<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Home</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Active Ict Projects </p>
                                        <h4 class="card-title">8 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fas fa-user-check"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Free Wifi Installed</p>
                                        <h4 class="card-title">9, 200+</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->include('admin_partials/stats') ?>
                <?= $this->include('admin_partials/stat_2') ?>


        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script>
        $(document).ready(function() {

            // 1. Sparkline Chart (Small right-side card)
            if ($("#lineChart").length) {
                $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
                    type: "line",
                    height: "70",
                    width: "100%",
                    lineWidth: "2",
                    lineColor: "#177dff",
                    fillColor: "rgba(23, 125, 255, 0.14)",
                });
            }

            // 2. The New Line Chart
            if ($('#mainLineChart').length) {
                var lineCtx = document.getElementById('mainLineChart').getContext('2d');
                var myLineChart = new Chart(lineCtx, {
                    type: 'line',
                    data: {
                        labels: [
                            "2024 Incidents",
                            "2025 Incidents",
                            "Cases Filed",
                            "Warrants Served",
                            "Convictions"
                        ],
                        datasets: [{
                            label: "Cybercrime Records",
                            borderColor: "#1d7af3", // Primary Blue Line
                            pointBorderColor: "#FFF",
                            pointBackgroundColor: "#1d7af3",
                            pointBorderWidth: 2,
                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 1,
                            pointRadius: 4,
                            backgroundColor: 'rgba(29, 122, 243, 0.1)', // Light blue fill under the line
                            fill: true,
                            borderWidth: 2,
                            // Your exact data points plotted on the line
                            data: [14529, 8987, 2933, 1068, 252]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: { display: false },
                        tooltips: {
                            bodySpacing: 4,
                            mode: "nearest",
                            intersect: 0,
                            position: "nearest",
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10,
                            callbacks: {
                                // Formats the hover tooltips with commas (e.g., 14,529)
                                label: function(tooltipItem, data) {
                                    return Number(tooltipItem.yLabel).toLocaleString() + " Records";
                                }
                            }
                        },
                        layout: {
                            padding: { left: 15, right: 15, top: 15, bottom: 15 }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    // Formats the Y-axis labels with commas
                                    callback: function(value) {
                                        return value.toLocaleString();
                                    }
                                }
                            }],
                            xAxes: [{
                                gridLines: { display: false }
                            }]
                        }
                    }
                });
            }
            // 3. The New Pie Chart: Cybercrime Breakdown by Type (2025)
            if ($('#pieChart').length) {
                var pieChartCtx = document.getElementById('pieChart').getContext('2d');
                var myPieChart = new Chart(pieChartCtx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            // Data derived from explicit numbers (Remainder of 8987 total used for Online Libel)
                            data: [4658, 1525, 1440, 810, 291, 183, 80],
                            backgroundColor :[
                                "#f3545d", // Red - Online Libel & Others
                                "#fdaf4b", // Orange - Online Selling Scams
                                "#1d7af3", // Primary Blue - Illegal Access
                                "#59d05d", // Green - Identity Theft
                                "#6861ce", // Purple - Investment Scams
                                "#48abf7", // Light Blue - Hijacked Profiles
                                "#e6e6e6"  // Grey - Vishing
                            ],
                            borderWidth: 0
                        }],
                        labels: [
                            'Online Libel & Others',
                            'Online Selling Scams',
                            'Illegal Access',
                            'Identity Theft',
                            'Investment Scams',
                            'Hijacked Profiles',
                            'Phishing'
                        ]
                    },
                    options : {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            position : 'bottom',
                            labels : {
                                fontColor: 'rgb(154, 154, 154)',
                                fontSize: 11,
                                usePointStyle : true,
                                padding: 20
                            }
                        },
                        pieceLabel: {
                            render: 'percentage',
                            fontColor: 'white',
                            fontSize: 14,
                        },
                        tooltips: {
                            bodySpacing: 4,
                            mode:"nearest",
                            intersect: 0,
                            position:"nearest",
                            xPadding:10,
                            yPadding:10,
                            caretPadding:10,
                            callbacks: {
                                // Adds "cases" and formats with commas on hover
                                label: function(tooltipItem, data) {
                                    var label = data.labels[tooltipItem.index] || '';
                                    var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                    return label + ': ' + value.toLocaleString() + ' cases';
                                }
                            }
                        },
                        layout: {
                            padding: { left: 20, right: 20, top: 20, bottom: 20 }
                        }
                    }
                });
            }
        });
    </script>
<?= $this->endSection() ?>