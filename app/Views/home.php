<?php echo $this->extend('layout/default'); ?>

<?php echo $this->section('judul'); ?>
<title>Dashboard</title>
<?php echo $this->endSection(); ?>

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
                        <h4>Keluarga Layak Bansos</h4>
                    </div>
                    <div class="card-body">
                        <?php echo $total_bansos['total_kk']; ?>
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
        <div class="col-lg-7 col-md-7 col-7 col-sm-7">
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
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-5 col-sm-5">
            <div class="card">
                <div class="card-header">
                    <h4>Presentase Penghasilan Keluarga</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <canvas id="PieChartPenghasilan" height="220">
                    </canvas>
                </div>
            </div>
        </div>
        

    </div>

    <div class="row">
        <div class="col-lg-9 col-md-9 col-9">
            <div class="card">
                <div class="card-header">
                    <h4>Kondisi Ekonomi Berdasarkan Kondisi Rumah</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart5" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-3 col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h4>Penduduk Berdasarkan Gender</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <canvas id="myChart4" height="350">
                    </canvas>
                </div>
            </div>
        </div>
    </div>

    

    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <div class="card">
                 <div class="card-header">
                    <h4>Jumlah RT tiap RW</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                            <table class="table table-striped table-md">
                                <thead style="position: sticky; top: 0; background: white; z-index: 1;">
                                <tr>
                                    <th>Nomor RW</th>
                                    <th>Jumlah RT</th>
                                    <th>Total KK</th>
                                </tr>
                                <?php $userRole = session()->get('role'); ?>
                                <?php $page = isset($_GET['page']) ? $_GET['page'] : 1; ?>
                                <?php $no = 1 + (10 * ($page - 1)); ?>
                                <?php foreach ($rekap_rw as $row) { ?>
                                        <tr>
                                            <td>RW <?php echo esc($row->rw); ?></td>
                                            <td><?php echo esc($row->total_rt); ?> RT</td>
                                            <td><?php echo esc($row->total_kk); ?> KK</td>
                                        </tr>
                                <?php } ?>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Jumlah KK tiap RT</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                            <table class="table table-striped table-md">
                                <thead style="position: sticky; top: 0; background: white; z-index: 1;">
                                    <tr>
                                        <th>Nomor RT</th>
                                        <th>Total KK</th>
                                        <th>Total Penduduk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $page = isset($_GET['page']) ? $_GET['page'] : 1; ?>
                                    <?php $no = 1 + (20 * ($page - 1)); ?>
                                    <?php foreach ($rekap_rt as $row) { ?>
                                        <tr>
                                            <td>RT <?php echo esc($row->rt); ?></td>
                                            <td><?php echo esc($row->total_kk); ?> KK</td>
                                            <td><?php echo esc($row->total_penduduk); ?> Jiwa</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 col-md-9 col-9">
            <div class="card">
                <div class="card-header">
                    <h4>Kondisi Ekonomi Berdasarkan Kondisi Rumah</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart5" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-3">
            <div class="card" >
                <div class="card-header">
                    <h4>RT dengan Jumlah Keluarga Terbanyak</h4>
                </div>
                <div class="card-body" >
                    <?php if (!empty($top_5_rts)) { ?>
                        <ul class="list-group list-group-flush">
                            <?php $rank = 1; ?>
                            <?php foreach ($top_5_rts as $rtData) { ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge badge-success mr-2">#<?php echo $rank++; ?></span>
                                        <strong>RT <?php echo esc($rtData->rt); ?></strong>
                                    </div>
                                    <span class="badge badge-primary badge-pill">
                                <?php echo esc($rtData->total_kk); ?> KK
                            </span>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <p class="text-muted">Data RT belum tersedia atau tidak ada Kartu Keluarga yang tercatat.</p>
                    <?php } ?>
                </div>
            </div>
        </div>
        
    </div>
</section>

<script>
 
    const incomeData = <?php echo esc($data_income_json); ?>;
    //const incomeLabels = <?php // echo esc($labels_income_json);?>//;
    // console.log(incomeLabels);
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

<script>

    // Ambil data JSON untuk Chart Skala Rumah
    const scaleData = <?php echo esc($data_scale_json); ?>;

    var ctx = document.getElementById("myChart5").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "Sangat Sederhana (<20m²)",
                "Sederhana (20m²-40m²)",
                "Menengah (41m²-80m²)",
                "Mewah (81m²-120m²)",
                "Sangat Mewah (>120m²)",
            ],
            datasets: [{
                label: "Jumlah Kartu Keluarga",
                data: scaleData,
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#7967ef",
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

<script>

    // Ambil data JSON untuk Chart Skala Rumah
    // const scaleData = <?php echo esc($data_scale_json); ?>;

    var ctx = document.getElementById("myChart9").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "Sangat Sederhana (<20m²)",
                "Sederhana (20m²-40m²)",
                "Menengah (41m²-80m²)",
                "Mewah (81m²-120m²)",
                "Sangat Mewah (>120m²)",
            ],
            datasets: [{
                label: "Jumlah Kartu Keluarga",
                data: scaleData,
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#7967ef",
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

<script>
    
    const genderData = <?php echo esc($data_gender_json); ?>;

    var ctx = document.getElementById("myChart4").getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        datasets: [{
        data: genderData,
        backgroundColor: [
            '#3381ff',
            '#ff33fc',
        ],
        label: 'Jenis Kelamin'
        }],
        labels: [
        'Laki-Laki',
        'Perempuan',
        ],
    },
    // plugins: [ChartDataLabels],
    options: {
        responsive: true,
        legend: {
        position: 'bottom',
        },
        plugins: {
                title: {
                    display: true,
                    text: 'Custom Chart Title'
                },
                datalabels: {
                    color: '#fff', // Warna teks (putih agar kontras)
                    font: {
                        weight: 'bold',
                        size: 14 // Ukuran font
                    },
                    formatter: (value, ctx) => {
                        // Menghitung total data
                        let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        
                        // Menghitung persentase
                        let percentage = (value * 100 / sum).toFixed(1) + "%";
                        return percentage;
                    }
                }
            }
        },
    });

</script>

<script>
    
    const penghasilanKK = <?php echo esc($data_income_json); ?>;

    var ctx = document.getElementById("PieChartPenghasilan").getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        datasets: [{
        data: penghasilanKK,
        backgroundColor: [
            '#ff7878ff',
            '#fff67eff',
            '#84fd74ff',
            '#7de7faff',
            '#5d7afcff',
            '#be72fdff',
            '#ff8efdff',
        ],
        label: 'Jenis Kelamin'
        }],
        labels: [
                "<500 ribu",
                "500 ribu - 1 juta",
                "1 - 3 juta",
                "3- 5 juta",
                "5 - 10 juta",
                "10 - 20 juta",
                "> 20 juta",
        ],
    },
    // plugins: [ChartDataLabels],
    options: {
        responsive: true,
        legend: {
        position: 'left',
        },
        plugins: {
                title: {
                    display: true,
                    text: 'Custom Chart Title'
                },
                datalabels: {
                    color: '#000000ff', // Warna teks (putih agar kontras)
                    font: {
                        weight: 'bold',
                        size: 14 // Ukuran font
                    },
                    formatter: (value, ctx) => {
                        // Menghitung total data
                        let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        
                        // Menghitung persentase
                        let percentage = (value * 100 / sum).toFixed(1) + "%";
                        return percentage;
                    }
                }
            }
        },
    });

</script>

<?php echo $this->endSection(); ?>