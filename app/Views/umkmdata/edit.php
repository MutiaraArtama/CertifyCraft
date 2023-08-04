<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Edit Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-8">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Data Akun <?= $Admin['nama'] ?> </h5>

              <!-- Multi Columns Form -->
                        
              <form method="post" action="<?= base_url(); ?>/Admin/update/<?= $Admin['id'] ?>"
                            enctype="multipart/form-data">

                            <?= csrf_field(); ?>
                    <div class="row">
                        <div class="form-group col-6">
                            <div class="mb-3">
                                <label for="akunnib" class="form-label"> Akun NIB? </label>
                                <select class="form-control" id="akunnib" name="akunnib"
                                    value="<?= $Admin['akunnib'] ?>" style="height: 55px; vertical-align: top; font-size: 17px ;">
                                    <option value="Pilih">--Pilih--</option>
                                    <option value="Belum">Belum</option>
                                    <option value="Sudah">Sudah</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Double">Double</option>
                                    <option value="Tidak Bisa Dilanjut">Tidak Bisa Dilanjut</option>
                                </select>
                            </div>
                            </div>

                        <div class="form-group col-6">
                            <div class="mb-3">
                                <label for="akunhalal" class="form-label">Akun untuk Seritifikat Halal? </label>
                                <select class="form-control" id="akunhalal" name="akunhalal"
                                    value="<?= $Admin['akunhalal'] ?>" style="height: 55px; vertical-align: top; font-size: 17px ;">
                                    <option value="Pilih">--Pilih--</option>
                                    <option value="Belum">Belum</option>
                                    <option value="Sudah">Sudah</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Double">Double</option>
                                    <option value="Tidak Bisa Dilanjut">Tidak Bisa Dilanjut</option>
                                </select>
                            </div>
                            </div>
                    </div>

                            <div class="mb-3">
                                <label for="kendala" class="form-label">Kendala</label>
                                <input type="text" class="form-control" id="kendala" name="kendala"
                                    value="<?= $Admin['kendala'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
        </div>
      </div>
    </section>

  </main>
<?= $this->endSection() ?>

