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
                        <h4>Jumlah Penerima Bansos</h4>
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
        <div class="col-lg-9 col-md-9 col-9 col-sm-9">
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
                    <canvas id="myChart4" height="225"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Kondisi Ekonomi: Distribusi Skala Rumah</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart5" height="100"></canvas>
                </div>
            </div>
        </div>

    </div>

    <div class="section-body">
    </div>
</section>

<script>
 
const incomeData = <?php echo esc($data_income_json); ?>;
//const incomeLabels = <?php //echo esc($labels_income_json);?>//;
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
    const scaleData = <?= esc($data_scale_json) ?>;

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
  options: {
    responsive: true,
    legend: {
      position: 'bottom',
    },
  }
});

</script>


<?php echo $this->endSection(); ?>