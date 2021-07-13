<?= $this->extend('layouts/admin') ?>

<?= $this->section('pagestyles') ?>
<!-- INICIO: Page CSS-->
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
                    <h1>Icons</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Icons</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Icons</h3>
                </div> <!-- /.card-body -->
                <div class="card-body">
                    <p>You can use any font library you like with AdminLTE 3.</p>
                    <strong>Recommendations</strong>
                    <div>
                        <a href="https://fontawesome.com/">Font Awesome</a><br>
                        <a href="https://useiconic.com/open/">Iconic Icons</a><br>
                        <a href="https://ionicons.com/">Ion Icons</a><br>
                    </div>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- FIN: Contenido-->
<?= $this->endSection() ?>

<?= $this->section('pagescript') ?>
<!-- INICIO: Page JS-->
<!-- FIN: Page JS-->
<?= $this->endSection() ?>