  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Form Tambah Berita</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Berita</a></li>
                          <li class="breadcrumb-item active">Form Tambah Berita</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

          <!-- Default box -->
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Form Tambah Berita</h3>

                  <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                          <i class="fas fa-times"></i>
                      </button>
                  </div>
              </div>
              <div class="card-body">
                  <form action="<?= site_url('tambah-berita') ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="">Judul Berita</label>
                          <input type="text" class="form-control" name="judul_berita" />
                      </div>
                      <div class="form-group">
                          <label for="">Cover Berita</label>
                          <input type="file" name="cover" accept=".jpg, .png" class="form-control-file">
                      </div>
                      <div class="form-group">
                          <label for="">Isi Berita</label>
                          <textarea name="isi_berita" class="summernote"></textarea>
                      </div>
                      <div class="form-group">
                          <input type="submit" value="Simpan" class="btn btn-sm btn-flat btn-primary">
                      </div>
                  </form>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->

      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->