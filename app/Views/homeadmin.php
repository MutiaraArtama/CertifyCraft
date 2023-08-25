<?= $this->extend('baseAdmin2') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php if (!empty(session()->getFlashdata('success'))): ?>
      <div class="alert alert-success" role="alert">
        <?php echo session()->getFlashdata('success'); ?>
      </div>
    <?php endif; ?>

    <section class="section dashboard">
      <div class="row">

        <!-- columns -->
        <div class="col-lg-12">
          <div class="row">
        
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Total Data UMKM <span>|Seluruh </span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah; ?></h6>
                    </div>
                  </div>
              </div>
            </div>
          </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Total Data UMKM <span>| Double </span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah_double; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total Data UMKM <span>| Real </span> </h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                    <h6><?= $jumlah_data; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


 <!-- columns -->
<div class="col-lg-12">
          <div class="row">
        
          <div class="col-xxl-3 col-md-6">
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Akun NIB Belum Dibuat</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah_belum; ?></h6>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Akun Halal Belum Dibuat</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah_belum2; ?></h6>
                    </div>
                  </div>
              </div>
            </div>
          </div>

            <div class="col-xxl-3 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Akun NIB Selesai</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah_selesai; ?></h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Akun Halal Selesai</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah_selesai2; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-3 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Akun NIB Bermasalah</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                    <h6><?= $jumlah_tidaklanjut; ?></h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Akun Halal Bermasalah</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                    <h6><?= $jumlah_tidaklanjut2; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-3 col-md-10">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reports <span>/Jenis Kelamin</span></h5>
                  <div>
                    <canvas id= "thread_jnsklmn" width= "80px" height= "75px"></canvas>
                  </div> 
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('chartjs/Chart.bundle.min.js') ?>"></script>
<script>
  var thread_jnsklmn = document.getElementById('thread_jnsklmn');
  var data_thread_jnsklmn = [];
  var label_thread_jnsklmn = [];

  <?php foreach ($thread_per_jnsklmn as $value): ?>
    data_thread_jnsklmn.push(<?= $value['jumlah'] ?>);
    label_thread_jnsklmn.push('<?= $value['kelamin'] ?>');
  <?php endforeach ?>

  var data_thread_per_jnsklmn = {
    datasets: [{
      data: data_thread_jnsklmn,
      backgroundColor: [
        'rgba(54,162,235,0.8)',
        'rgba(255,99,132,0.8)',
      ],
    }],
    labels: label_thread_jnsklmn,
  }

  var chart_thread_jnsklmn = new Chart(thread_jnsklmn, {
    type: 'doughnut',
    data: data_thread_per_jnsklmn
  });

</script>
<?= $this->endSection() ?>
