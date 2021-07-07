<?= $this->extend('layouts/admin') ?>

<?= $this->section('pagestyles') ?>
<!-- INICIO: Page CSS-->
<!-- uPlot -->
<link rel="stylesheet" href="<?= base_url('adminLTE') ?>/plugins/uplot/uPlot.min.css">
<!-- FIN: Page CSS-->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- INICIO: Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ChartJS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ChartJS</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- AREA CHART -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Area Chart</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- LINE CHART -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Line Chart</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- FIN: Contenido-->
<?= $this->endSection() ?>

<?= $this->section('pagescript') ?>
<!-- INICIO: Page JS-->
<!-- uPlot -->
<script src="<?= base_url('adminLTE') ?>/plugins/uplot/uPlot.iife.min.js"></script>
<script>
    $(function() {
        /* uPlot
         * -------
         * Here we will create a few charts using uPlot
         */

        function getSize(elementId) {
            return {
                width: document.getElementById(elementId).offsetWidth,
                height: document.getElementById(elementId).offsetHeight,
            }
        }

        let data = [
            [0, 1, 2, 3, 4, 5, 6],
            [28, 48, 40, 19, 86, 27, 90],
            [65, 59, 80, 81, 56, 55, 40]
        ];

        //--------------
        //- AREA CHART -
        //--------------

        const optsAreaChart = {
            ...getSize('areaChart'),
            scales: {
                x: {
                    time: false,
                },
                y: {
                    range: [0, 100],
                },
            },
            series: [{},
                {
                    fill: 'rgba(60,141,188,0.7)',
                    stroke: 'rgba(60,141,188,1)',
                },
                {
                    stroke: '#c1c7d1',
                    fill: 'rgba(210, 214, 222, .7)',
                },
            ],
        };

        let areaChart = new uPlot(optsAreaChart, data, document.getElementById('areaChart'));

        const optsLineChart = {
            ...getSize('lineChart'),
            scales: {
                x: {
                    time: false,
                },
                y: {
                    range: [0, 100],
                },
            },
            series: [{},
                {
                    fill: 'transparent',
                    width: 5,
                    stroke: 'rgba(60,141,188,1)',
                },
                {
                    stroke: '#c1c7d1',
                    width: 5,
                    fill: 'transparent',
                },
            ],
        };

        let lineChart = new uPlot(optsLineChart, data, document.getElementById('lineChart'));

        window.addEventListener("resize", e => {
            areaChart.setSize(getSize('areaChart'));
            lineChart.setSize(getSize('lineChart'));
        });
    })
</script>
<!-- FIN: Page JS-->
<?= $this->endSection() ?>