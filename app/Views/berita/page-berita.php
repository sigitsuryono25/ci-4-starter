  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Data Berita</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Berita</a></li>
                          <li class="breadcrumb-item active">Data Berita</li>
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
                  <h3 class="card-title">Data Berita</h3>

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
                  <div class="table-responsive">
                      <table class="table table-bordered table-sm">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Judul Berita</th>
                                  <th>Cover</th>
                                  <th>Isi Berita</th>
                                  <th>Tindakan</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($berita as $key => $b) : ?>
                                  <tr>
                                      <td><?= $key + 1 ?></td>
                                      <td><?= $b->judul_berita ?></td>
                                      <td>
                                          <img src="<?= base_url($b->cover_berita) ?>" alt=""  width="200">
                                      </td>
                                      <td><?= $b->isi ?></td>
                                      <td>
                                          <a href="#" class="btn btn-sm btn-warning btn-block">Edit</a>
                                          <a href="#" class="btn btn-sm btn-danger btn-block">Hapus</a>
                                      </td>
                                  </tr>
                              <?php endforeach ?>
                          </tbody>
                      </table>
                  </div>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->

      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->