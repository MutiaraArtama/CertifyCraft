<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Data UMKM Untuk Pembuatan NIB Dan Sertif Halal.</h2>
        <div class="d-flex flex-row-reverse bd-highlight">
            <table class="table table-striped table-hover mt-4">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kota</th>
                        <th>Nama Usaha</th>
                        <th>Status Akun NIB</th>
                        <th>Status Akun Halal</th>
                        <th>Kendala</th>
                        <th>Jumlah Pengajuan</th>
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
                                <?= $j['merek']; ?>
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script>
            function openPdfInNewTab() {
                var pdfUrl = '<?php echo site_url("/viewwpdf"); ?>';
                window.open(pdfUrl, '_blank');
            }
        </script>
</body>

</html>