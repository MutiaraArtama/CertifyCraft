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
        <div class="col-lg-10">

        <div class="card">
            <div class="card-body">
<br>
            <div class="row">
                        <div class="form-group col-8">
                            <div class="mb-3">
                            <h5 class="card-title">Edit Data Akun <?= $Admin['nama'] ?></h5>
                            </div>
                            </div>

                        <div class="form-group col-4">
                            <div class="mb-3">
                              <h5 class="card-title">Tanggal : <?= $Admin['tanggal'] ?></h5>
                            </div>
                            </div>
                    </div>
              

              <!-- Multi Columns Form -->
                        
              <form method="post" action="<?= base_url(); ?>/Admin/update/<?= $Admin['id'] ?>"
                            enctype="multipart/form-data">

                            <?= csrf_field(); ?>

                    <div class="row">
                        <div class="form-group col-4">
                            <div class="mb-3">
                            <label for="nik" class="form-label">NIK : <?= $Admin['nik'] ?> </label>
                            </div>
                            </div>
                        
                        <div class="form-group col-4">
                            <div class="mb-3">
                            <label for="nama" class="form-label">Nama : <?= $Admin['nama'] ?> </label>
                            </div>
                            </div>

                        <div class="form-group col-4">
                            <div class="mb-3">
                            <label for="kelamin" class="form-label">Jenis Kelamin : <?= $Admin['kelamin'] ?> </label>
                            </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-8">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat : <?= $Admin['alamat'] ?></label>
                            
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <div class="mb-3">
                                <label for="kodepos" class="form-label">Kodepos : <?= $Admin['kodepos'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">Desa/Kelurahan : <?= $Admin['kelurahan'] ?></label>
                            </div>
                            </div>
                        
                        <div class="form-group col-4">
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan : <?= $Admin['kecamatan'] ?></label>
                            </div>
                            </div>

                        <div class="form-group col-4">
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kabupaten/Kota : <?= $Admin['kota'] ?></label>
                            </div>
                            </div>
                    </div>

                    <div class="mb-3">
                            <label for="merek" class="form-label">Nama Usaha : <?= $Admin['merek'] ?></label>
                            </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <div class="mb-3">
                            <label for="produk1" class="form-label">Produk 1 : <?= $Admin['produk1'] ?></label>
                            </div>
                            </div>

                        <div class="form-group col-8">
                            <div class="mb-3">
                                <label for="jenisproduk1" class="form-label">Jenis Produk 1</label>
                                <input type="text" class="form-control" id="jenisproduk1" name="jenisproduk1"
                                    value="<?= $Admin['jenisproduk1'] ?>" style="height: 60px; vertical-align: top;">
                            </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <div class="mb-3">
                            <label for="produk2" class="form-label">Produk 2 : <?= $Admin['produk2'] ?></label>
                            </div>
                            </div>

                        <div class="form-group col-8">
                            <div class="mb-3">
                                <label for="jenisproduk2" class="form-label">Jenis Produk 2</label>
                                <input type="text" class="form-control" id="jenisproduk2" name="jenisproduk2"
                                    value="<?= $Admin['jenisproduk2'] ?>" style="height: 60px; vertical-align: top;">
                            </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <div class="mb-3">
                            <label for="produk3" class="form-label">Produk 3 : <?= $Admin['produk3'] ?></label>
                            </div>
                            </div>

                        <div class="form-group col-8">
                            <div class="mb-3">
                                <label for="jenisproduk3" class="form-label">Jenis Produk 3</label>
                                <input type="text" class="form-control" id="jenisproduk3" name="jenisproduk3"
                                    value="<?= $Admin['jenisproduk3'] ?>" style="height: 60px; vertical-align: top;">
                            </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <div class="mb-3">
                            <label for="produk4" class="form-label">Produk 4 : <?= $Admin['produk4'] ?></label>
                            </div>
                            </div>

                        <div class="form-group col-8">
                            <div class="mb-3">
                                <label for="jenisproduk4" class="form-label">Jenis Produk 4</label>
                                <input type="text" class="form-control" id="jenisproduk4" name="jenisproduk4"
                                    value="<?= $Admin['jenisproduk4'] ?>" style="height: 60px; vertical-align: top;">
                            </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <div class="mb-3">
                                <label for="akunnib" class="form-label"> Akun NIB? </label>
                                <select class="form-control" id="akunnib" name="akunnib"
                                    value="<?= $Admin['akunnib'] ?>" style="height: 55px; vertical-align: top; font-size: 17px ;">
                                    <option value="Pilih">--Pilih--</option>
                                    <option value="Belum" <?= $Admin['akunnib'] === 'Belum' ? 'selected' : ''; ?> >Belum</option>
                                    <option value="Sudah" <?= $Admin['akunnib'] === 'Sudah' ? 'selected' : ''; ?> >Sudah</option>
                                    <option value="Selesai"<?= $Admin['akunnib'] === 'Selesai' ? 'selected' : ''; ?> >Selesai</option>
                                    <option value="Double" <?= $Admin['akunnib'] === 'Double' ? 'selected' : ''; ?> >Double</option>
                                    <option value="Tidak Bisa Dilanjut" <?= $Admin['akunnib'] === 'Tidak Bisa Dilanjut' ? 'selected' : ''; ?> >Tidak Bisa Dilanjut</option>
                                </select>
                            </div>
                            </div>

                        <div class="form-group col-5">
                            <div class="mb-3">
                                <label for="akunhalal" class="form-label">Akun untuk Seritifikat Halal? </label>
                                <select class="form-control" id="akunhalal" name="akunhalal"
                                    value="<?= $Admin['akunhalal'] ?>" style="height: 55px; vertical-align: top; font-size: 17px ;">
                                    <option value="Pilih">--Pilih--</option>
                                    <option value="Belum" <?= $Admin['akunhalal'] === 'Belum' ? 'selected' : ''; ?> >Belum</option>
                                    <option value="Sudah" <?= $Admin['akunhalal'] === 'Sudah' ? 'selected' : ''; ?> >Sudah</option>
                                    <option value="Selesai"<?= $Admin['akunhalal'] === 'Selesai' ? 'selected' : ''; ?> >Selesai</option>
                                    <option value="Double" <?= $Admin['akunhalal'] === 'Double' ? 'selected' : ''; ?> >Double</option>
                                    <option value="Tidak Bisa Dilanjut" <?= $Admin['akunhalal'] === 'Tidak Bisa Dilanjut' ? 'selected' : ''; ?> >Tidak Bisa Dilanjut</option>
                                </select>
                            </div>
                            </div>

                            <div class="form-group col-3">
                            <div class="mb-3">
                                <label for="pengajuan" class="form-label">Jumlah Pengajuan ? </label>
                                <select class="form-control" id="pengajuan" name="pengajuan"
                                    value="<?= $Admin['pengajuan'] ?>" style="height: 55px; vertical-align: top; font-size: 17px ;">
                                    <option value="Pilih">--Pilih--</option>
                                    <option value="0" <?= $Admin['pengajuan'] === '0' ? 'selected' : ''; ?> >0</option>
                                    <option value="1" <?= $Admin['pengajuan'] === '1' ? 'selected' : ''; ?> >1</option>
                                    <option value="2" <?= $Admin['pengajuan'] === '2' ? 'selected' : ''; ?> >2</option>
                                    <option value="3" <?= $Admin['pengajuan'] === '3' ? 'selected' : ''; ?> >3</option>
                                    <option value="4" <?= $Admin['pengajuan'] === '4' ? 'selected' : ''; ?> >4</option>
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
                  <button type="submit" class="btn btn-primary">Save</button>
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

