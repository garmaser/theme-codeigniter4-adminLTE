<?= $this->extend('layouts/admin') ?>

<?= $this->section('pagestyles') ?>
<!-- INICIO: Page CSS-->
<!-- summernote -->
<link rel="stylesheet" href="<?= base_url('adminLTE') ?>/plugins/summernote/summernote-bs4.min.css">
<!-- CodeMirror -->
<link rel="stylesheet" href="<?= base_url('adminLTE') ?>/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="<?= base_url('adminLTE') ?>/plugins/codemirror/theme/monokai.css">
<!-- SimpleMDE -->
<link rel="stylesheet" href="<?= base_url('adminLTE') ?>/plugins/simplemde/simplemde.min.css">
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
                    <h1>Text Editors</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Text Editors</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Summernote
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
                    </div>
                    <div class="card-footer">
                        Visit <a href="http://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            CodeMirror
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <textarea id="codeMirrorDemo" class="p-3">
<div class="info-box bg-gradient-info">
  <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Bookmarks</span>
    <span class="info-box-number">41,410</span>
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      70% Increase in 30 Days
    </span>
  </div>
</div>
              </textarea>
                    </div>
                    <div class="card-footer">
                        Visit <a href="http://codemirror.net/">CodeMirror</a> documentation for more examples and information about the plugin.
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- FIN: Contenido-->
<?= $this->endSection() ?>

<?= $this->section('pagescript') ?>
<!-- INICIO: Page JS-->
<!-- Summernote -->
<script src="<?= base_url('adminLTE') ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="<?= base_url('adminLTE') ?>/plugins/codemirror/codemirror.js"></script>
<script src="<?= base_url('adminLTE') ?>/plugins/codemirror/mode/css/css.js"></script>
<script src="<?= base_url('adminLTE') ?>/plugins/codemirror/mode/xml/xml.js"></script>
<script src="<?= base_url('adminLTE') ?>/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- FIN: Page JS-->
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
<?= $this->endSection() ?>