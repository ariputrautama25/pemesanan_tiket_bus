<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/elements/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>PEMESANAN TIKET BUS</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS-->
    <?php $this->load->view('frontend/include/base_css'); ?>
</head>
<body>
    <!-- navbar -->
    <?php $this->load->view('frontend/include/base_nav'); ?>
    <section class="service-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <!-- Default Card Example -->
                    <div class="card mb-5">
                        <div class="card-header">
                            <i class="fas fa-list"></i> Daftar Keberangkatan
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Rute [Kode Jadwal]</th>
                                        <th>Terminal Tujuan</th>
                                        <th scope="col">Tanggal Waktu</th>
                                        <th scope="col">Tempat Duduk Tersedia</th>
                                        <th scope="col">Tempat Duduk Sisa</th>
                                        <th>Harga</th>
                                        <th>Harga Diskon</th>
                                        <th scope="col">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $discount_rate = 0.10; // 10% discount
                                    for ($i=0; $i < count($jadwal) ; $i++) { 
                                        $original_price = $jadwal[$i]['harga_jadwal'];
                                        $discounted_price = $original_price - ($original_price * $discount_rate);

                                        // Menyimpan jumlah tempat duduk tersedia dan sisa secara acak
                                        $total_seats = $jadwal[$i]['kapasitas_bus'];
                                        $occupied_seats = rand(0, $total_seats); // Menghasilkan jumlah acak dari kursi yang terisi
                                        $remaining_seats = $total_seats - $occupied_seats;
                                    ?>
                                    <tr>
                                        <td><?php echo strtoupper($asal['kota_tujuan'])." - ".strtoupper($jadwal[$i]['kota_tujuan'])." [".$jadwal[$i]['kd_jadwal']."]"; ?></td>
                                        <td><?php echo $jadwal[$i]['terminal_tujuan'] ?></td>
                                        <td><?php echo hari_indo(date('N',strtotime($tanggal))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$tanggal.''))).', '.date('H:i',strtotime($jadwal[$i]['jam_berangkat_jadwal'])); ?></td>
                                        <td><?php echo $total_seats; ?></td> <!-- Menampilkan jumlah tempat duduk tersedia -->
                                        <td><?php echo $remaining_seats; ?></td> <!-- Menampilkan sisa tempat duduk -->
                                        <td>Rp. <?php echo number_format((float)($original_price),0,",","."); ?></td>
                                        <td>Rp. <?php echo number_format((float)($discounted_price),0,",","."); ?></td>
                                        <td><a href="<?php echo base_url('tiket/beforebeli/').$jadwal[$i]['kd_jadwal'].'/'.$asal['kd_tujuan'].'/'.$tanggal ?>" class=" btn btn-outline-success">Pilih</a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>
                            <a href="<?php echo base_url('tiket') ?>" class="btn btn-danger pull-left">Kembali </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- login/daftar -->

    </section>
    <!-- End banner Area -->
    <!-- End Generic Start -->
    <!-- start footer Area -->
    <?php $this->load->view('frontend/include/base_footer'); ?>
    <!-- js -->
    <?php $this->load->view('frontend/include/base_js'); ?>
</body>
</html>
