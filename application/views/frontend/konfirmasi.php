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
    <title>Mendapatkan tiket</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
    <?php $this->load->view('frontend/include/base_css'); ?>
</head>
<body>
    <!-- navbar -->
    <?php $this->load->view('frontend/include/base_nav'); ?>
    <section class="service-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <!-- Default Card Example -->
                    <div class="card wobble animated">
                        <div class="card-header">
                            Konfirmasi pembayaran
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url() ?>tiket/insertkonfirmasi" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Pemesanan</label>
                                    <input type="text" class="form-control" name="kd_order" value="<?= $id ?>" placeholder="Ticket Code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bank Anda</label>
                                    <select class="form-control" name="bank_km">
                                        <option value="" selected disabled="">Pilih Bank</option>
                                        <option value="Bank BCA">Bank BRI</option>
                                        <option value="Bank Mandiri">Bank BCA</option>
                                        <option value="Bank Bri">Bank BNI</option>
                                        <option value="Bank BNI">Bank DKI</option>
                                        <option value="RoyalCrown Bank">Bank BSI</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor rekening</label>
                                    <input type="number" class="form-control" name="nomrek" placeholder="Account number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama pengirim</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Name of the sender">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah pembayaran</label>
                                    <input type="number" class="form-control" name="total" value="<?= $total ?>" placeholder="Total price" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga setelah diskon</label>
                                    <input type="number" class="form-control" name="discounted_total" value="23" placeholder="Discounted price" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Unggah Foto Transaksi</label>
                                    <input type="file" class="form-control" name="userfile" required="">
                                </div>
                                <button type="submit" class="btn btn-success pull-right">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End banner Area -->
    <!-- start footer Area -->
    <?php $this->load->view('frontend/include/base_footer'); ?>
    <!-- js -->
    <?php $this->load->view('frontend/include/base_js'); ?>
</body>
</html>
