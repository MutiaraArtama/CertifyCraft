<link rel="stylesheet" href="<?= base_url('css/registrystyle.css') ?>">

<div class="container" style="margin-top: 130px; margin-bottom: 100px;">
	<div class="row">
		<div class="col">
			<div class="info">
				<center>
					<h2><i class="fas fa-user-edit"></i>Pendaftaran Pembuatan Sertif Halal & NIB</h2>
				</center>
				<hr style="border: 1px grey solid;">
			</div><br>

            <?php if (!empty(session()->getFlashdata('error'))): ?>
                            <div class="alert alert-danger" role="alert">
                                <h4>Periksa Entrian Form</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>

			<form action="<?= base_url('/user/save'); ?>" method="post" enctype="multipart/form-data">

				<div class="registry" style="color:white; font-size: 17px ;">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="<?= old('tanggal'); ?>" style="height: 50px;">
                            </div>

                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                        <input type="text" class="form-control" id="nik"
                            name="nik" value="<?= old('nik'); ?>" style="height: 55px; vertical-align: top;">
                    </div> 
                                    
                    <div class="row">
                        <div class="form-group col-8">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?= old('nama'); ?>" style="height: 55px; vertical-align: top;">
                            </div>
                            </div>

                        <div class="form-group col-4">
                            <div class="mb-3">
                                <label for="kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" id="kelamin" name="kelamin" value="<?= old('kelamin'); ?>"
                                style="height: 55px; vertical-align: top; font-size: 17px ;">
                                    <option value="Pria">Laki-laki</option>
                                    <option value="Wanita">Perempuan</option>
                                </select>
                            </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-9">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat"
                                    name="alamat" value="<?= old('alamat'); ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            </div>

                        <div class="form-group col-3">
                            <br>
                            <div class="mb-3">
                                <label for="kodepos" class="form-label">Kodepos</label>
                                <input type="text" class="form-control" id="kodepos"
                                    name="kodepos" value="<?= old('kodepos'); ?>" style="height: 55px; vertical-align: top;">
                            </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">Desa/Kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan"
                                    name="kelurahan" value="<?= old('kelurahan'); ?>" style="height: 55px; vertical-align: top;">
                            </div>
                            </div>
                        
                        <div class="form-group col-4">
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan"
                                    name="kecamatan" value="<?= old('kecamatan'); ?>" style="height: 55px; vertical-align: top;">
                            </div>
                            </div>

                        <div class="form-group col-4">
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kabupaten/Kota</label>
                                <input type="text" class="form-control" id="kota"
                                    name="kota" value="<?= old('kota'); ?>" style="height: 55px; vertical-align: top;">
                            </div>
                            </div>
                    </div>

                            <div class="mb-3">
                                <label for="merek" class="form-label">Nama Usaha/Merek</label>
                                <input type="text" class="form-control" id="merek"
                                    name="merek" value="<?= old('merek'); ?>" style="height: 55px; vertical-align: top;">
                            </div>

                            <div class="mb-3">
                                <label for="produk1" class="form-label">Produk 1</label>
                                <p> (Nama Produk Pertama yang akan didaftarkan dalam sertifikasi halal Contoh: Keripik Pisang Kenyeskenyes) </p>
                                <input type="text" class="form-control" id="produk1"
                                    name="produk1" value="<?= old('produk1'); ?>" style="height: 55px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk2" class="form-label">Produk 2</label>
                                <p> (Nama Produk Kedua yang akan didaftarkan dalam sertifikasi halal Contoh: Jamu Sehat wal afiat) </p>
                                <input type="text" class="form-control" id="produk2"
                                    name="produk2" value="<?= old('produk2'); ?>" style="height: 55px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk3" class="form-label">Produk 3</label>
                                <p> (Nama Produk Ketiga yang akan didaftarkan dalam sertifikasi halal Contoh: Kue Coklat sempurna) </p>
                                <input type="text" class="form-control" id="produk3"
                                    name="produk3" value="<?= old('produk3'); ?>" style="height: 55px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk4" class="form-label">Produk 4</label>
                                <p> (Nama Produk Keempat yang akan didaftarkan dalam sertifikasi halal Contoh: Ikan Bakar Seru) </p>
                                <input type="text" class="form-control" id="produk4"
                                    name="produk4" value="<?= old('produk4'); ?>" style="height: 55px; vertical-align: top;">
                            </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <div class="mb-3">
                                <label for="akunnib" class="form-label">Apakah sudah mempunyai akun NIB? </label>
                                <select class="form-control" id="akunnib" name="akunnib"
                                    value="<?= old('akunnib'); ?>" style="height: 55px; vertical-align: top; font-size: 17px ;">
                                    <option value="Belum">Belum</option>
                                    <option value="Sudah">Sudah</option>
                                </select>
                            </div>
                            </div>

                        <div class="form-group col-6">
                            <div class="mb-3">
                                <label for="akunhalal" class="form-label">Apakah sudah mempunyai akun untuk Seritifikat Halal? </label>
                                <select class="form-control" id="akunhalal" name="akunhalal"
                                    value="<?= old('akunhalal'); ?>" style="height: 55px; vertical-align: top; font-size: 17px ;">
                                    <option value="Belum">Belum</option>
                                    <option value="Sudah">Sudah</option>
                                </select>
                            </div>
                            </div>
                    </div>

					<div class="button-class">
						<button type="submit" name="save" class="button btn btn-primary">
							<i class="fas fa-check"></i>  Kirim  
						</button>

						<button type="reset" name="reset" class="button btn btn-danger">
							<i class="fas fa-times"></i>  Reset  
						</button>
					</div>

				</div><br>
			</form>

		</div>
	</div>
</div>
