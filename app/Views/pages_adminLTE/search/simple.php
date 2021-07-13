<?= $this->extend('layouts/admin') ?>

<?= $this->section('pagestyles') ?>
<!-- INICIO: Page CSS-->
<!-- FIN: Page CSS-->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- INICIO: Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Search</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="simple-results.html">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- FIN: Contenido-->
<?= $this->endSection() ?>

<?= $this->section('pagescript') ?>
<!-- INICIO: Page JS-->
<!-- FIN: Page JS-->
<?= $this->endSection() ?>