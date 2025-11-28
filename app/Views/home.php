<?php echo $this->extend('layout/default'); ?>

<?php echo $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Penduduk</h4>
                    </div>
                    <div class="card-body">
                        <?php echo $jumlah_penduduk; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Kartu Keluarga</h4>
                    </div>
                    <div class="card-body">
                        <?php echo $jumlah_kk; ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Soon</h4>
                    </div>
                    <div class="card-body">
                        1,201
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah User</h4>
                    </div>
                    <div class="card-body">
                        <?php echo $jumlah_user; ?>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Penghasilan Per Kartu Keluarga</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary">Month</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="myChart2" height="100"></canvas>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-4 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Recent Activities</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                            <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png"
                                alt="avatar">
                            <div class="media-body">
                                <div class="float-right text-primary">Now</div>
                                <div class="media-title">Farhan A Mujib</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla
                                    vel metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png"
                                alt="avatar">
                            <div class="media-body">
                                <div class="float-right">12m</div>
                                <div class="media-title">Ujang Maman</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla
                                    vel metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png"
                                alt="avatar">
                            <div class="media-body">
                                <div class="float-right">17m</div>
                                <div class="media-title">Rizal Fakhri</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla
                                    vel metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png"
                                alt="avatar">
                            <div class="media-body">
                                <div class="float-right">21m</div>
                                <div class="media-title">Alfa Zulkarnain</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla
                                    vel metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center pt-1 pb-1">
                        <a href="#" class="btn btn-primary btn-lg btn-round">
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="section-body">
    </div>
</section>

<script>
// const incomeLabels = <?php echo esc($labels_income_json); ?>;
const incomeData = <?php echo esc($data_income_json); ?>;

var ctx = document.getElementById("myChart2").getContext("2d");
var myChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            "<500 ribu",
            "500 ribu - 1 juta",
            "1 - 3 juta",
            "3- 5 juta",
            "5 - 10 juta",
            "10 - 20 juta",
            "> 20 juta",
        ],
        datasets: [{
            label: "Jumlah Kartu Keluarga",
            data: incomeData,
            borderWidth: 2,
            backgroundColor: "#6777ef",
            borderColor: "#6777ef",
            borderWidth: 2.5,
            pointBackgroundColor: "#ffffff",
            pointRadius: 4,
        }, ],
    },
    options: {
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                gridLines: {
                    drawBorder: false,
                    color: "#f2f2f2",
                },
                ticks: {
                    beginAtZero: true,
                    stepSize: Math.ceil(Math.max(...incomeData) / 5) || 1,
                },
            }, ],
            xAxes: [{
                ticks: {
                    display: true,
                },
                gridLines: {
                    display: false,
                },
            }, ],
        },
    },
});
</script>


<?php echo $this->endSection(); ?>