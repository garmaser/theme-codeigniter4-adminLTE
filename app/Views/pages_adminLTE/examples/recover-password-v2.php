<?= $this->extend('layouts/loginv2') ?>

<?= $this->section('pagestyles') ?>
<!-- INICIO: Page CSS-->
<!-- FIN: Page CSS-->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- INICIO: Contenido-->
<div class="card-body">
  <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
  <form action="<?=site_url('examples/login_v2')?>" method="post">
    <div class="input-group mb-3">
      <input type="password" class="form-control" placeholder="Password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control" placeholder="Confirm Password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" class="btn btn-primary btn-block">Change password</button>
      </div>
      <!-- /.col -->
    </div>
  </form>

  <p class="mt-3 mb-1">
    <a href="<?=site_url('examples/login_v2')?>">Login</a>
  </p>
</div>
<!-- FIN: Contenido-->
<?= $this->endSection() ?>

<?= $this->section('pagescript') ?>
<!-- INICIO: Page JS-->
<!-- FIN: Page JS-->
<?= $this->endSection() ?>