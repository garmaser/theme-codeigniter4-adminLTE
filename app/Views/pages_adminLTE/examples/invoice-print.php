<?= $this->extend('layouts/admin') ?>

<?= $this->section('pagestyles') ?>
<!-- INICIO: Page CSS-->
<!-- FIN: Page CSS-->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- INICIO: Contenido-->
<!-- FIN: Contenido-->
<?= $this->endSection() ?>

<?= $this->section('pagescript') ?>
<!-- INICIO: Page JS-->
<!-- Page specific script -->
<script>
    window.addEventListener("load", window.print());
</script>
<!-- FIN: Page JS-->
<?= $this->endSection() ?>