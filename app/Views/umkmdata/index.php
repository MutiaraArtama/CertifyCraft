<?= $this->extend('base2') ?>
<?= $this->section('content') ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section">
        <div class="section-header" >
        <div class="form-group col-6">
                <div class="float-center ml-2">
                    <form action="" method="get">
                        <div class="float-left">
                            <input type="text" name="keyword" class="form-control" style="width:250pt; height:40px;"
                                placeholder="Search...">
                        </div>
                        <div class="float-left ml-2">
                            <button type="submit" class="btn btn-primary" style="width:50pt; height:40px;" name="tombolcari"><i
                                    class="fas fa-search" ></i></button>
                        </div>
                    </form>
                </div>
                </div>

                <div class="form-group col-6">
                <div class="float-right">
                    <a href="<?php echo site_url('viewpdf'); ?>" target="_blank" class="btn btn-primary" style="height:40px; font-size: 17px ;" >View
                        PDF</a>
                    <a href="<?= base_url(); ?>/export" class="btn btn-primary" style="height:40px; font-size: 17px ;" >
                        <i class="fas fa-file-download"></i> Export CSV</a>
                </div>
                </div>
        </div>

        <div class="section-body" >
            <div class="card">

            <div class="card-body">
                <div class="card-body table-responsive">
                    <?php if (!empty(session()->getFlashdata('success'))): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <table class="table table-md">
                        <tbody>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelurahan</th>
                                <th scope="col">Kecamatan</th>
                                <th scope="col">Kota</th>
                                <th scope="col">Kode Pos</th>
                                <th scope="col">Nama Usaha/Merek</th>
                                <th scope="col">Produk 1</th>
                                <th scope="col">Jenis Produk 1</th>
                                <th scope="col">Produk 2</th>
                                <th scope="col">Jenis Produk 2</th>
                                <th scope="col">Produk 3</th>
                                <th scope="col">Jenis Produk 3</th>
                                <th scope="col">Produk 4</th>
                                <th scope="col">Jenis Produk 4</th>
                                <th scope="col">Akun NIB</th>
                                <th scope="col">Akun Halal</th>
                                <th scope="col">Kendala</th>
                                <th scope="col">Jumlah Pengajuan</th>
                                <th scope="col">Action</th>
                            </tr>
                            <?php
                            $i = 1;
                            foreach ($umkmdata as $j):
                                ?>
                                <tr>
                                    <td>
                                        <?= $i++; ?>
                                    </td>
                                    <td>
                                    <?php echo date('d-m-Y', strtotime($j['tanggal']))?>
                                    </td>
                                    <td>
                                        <?= $j['nik']; ?>
                                    </td>
                                    <td>
                                        <?= $j['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kelamin']; ?>
                                    </td>
                                    <td>
                                        <?= $j['alamat']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kelurahan']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kecamatan']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kota']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kodepos']; ?>
                                    </td>
                                    <td>
                                        <?= $j['merek']; ?>
                                    </td>
                                    <td>
                                        <?= $j['produk1']; ?>
                                    </td>
                                    <td>
                                        <?= $j['jenisproduk1']; ?>
                                    </td>
                                    <td>
                                        <?= $j['produk2']; ?>
                                    </td>
                                    <td>
                                        <?= $j['jenisproduk2']; ?>
                                    </td>
                                    <td>
                                        <?= $j['produk3']; ?>
                                    </td>
                                    <td>
                                        <?= $j['jenisproduk3']; ?>
                                    </td>
                                    <td>
                                        <?= $j['produk4']; ?>
                                    </td>
                                    <td>
                                        <?= $j['jenisproduk4']; ?>
                                    </td>
                                    <td>
                                        <?= $j['akunnib']; ?>
                                    </td>
                                    <td>
                                        <?= $j['akunhalal']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kendala']; ?>
                                    </td>
                                    <td>
                                        <?= $j['pengajuan']; ?>
                                    </td>

                                    <td>
                                        <a href="/Admin/<?= $j['id'] ?>/edit" class="btn btn-warning btn-sm"><i
                                                class="fas fa-pencil-alt"></i> Edit</a>
                                        <p>
                                        <form action="/Admin/<?= $j['id'] ?>" method="post" class="d-inline"
                                            onsubmit="return confirm(`Are you sure?`)">
                                            <input type="hidden" name="_method" value="delete" />
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fas fa-trash"></i> Hapus </button>
                                        </form></p>
                                    </td>


                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        
        <div class="col-12">
            <?= $pager->links('umkmdata', 'custom_pagination') ?>
        </div>
        </div>
</div>
</div>
</div>
</section>
</div>
</main><!-- End #main -->
<?= $this->endSection() ?>