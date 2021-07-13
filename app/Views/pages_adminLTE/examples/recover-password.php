<?= $this->extend('layouts/admin') ?>

<?= $this->section('pagestyles') ?>
<!-- INICIO: Page CSS-->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('adminLTE') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- FIN: Page CSS-->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- INICIO: Contenido-->
<!-- FIN: Contenido-->
<?= $this->endSection() ?>

<?= $this->section('pagescript') ?>
<!-- INICIO: Page JS-->
<!-- FIN: Page JS-->
<?= $this->endSection() ?>