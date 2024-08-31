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
    <title><?php echo $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
    <?php $this->load->view('frontend/include/base_css'); ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('frontend/include/base_nav'); ?>
    <section class="service-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Default Card Example -->
                    <div class="card mb-5">
                        <div class="card-header">
                            <i class="fas fa-search"></i> Cari Tiket
                        </div>
                        <div class="card-body">
                            <div class="alert alert-warning" role="alert">
                                <p><b>PENTING!!</b></p>
                                <P>Sebelum Membeli Tiket, Silakan lihat>> <b><i data-toggle="modal" data-target="#exampleModal">Bagaimana cara memesan?</i></b></P>
                            </div>
                            <form action="<?php echo base_url() ?>tiket/cekjadwal" method="get">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pilih Tanggal</label>
                                    <input placeholder="Enter date" type="text" class="form-control datepicker" name="tanggal" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Asal</label>
                                    <select name="asal" class="form-control js-example-basic-single" required>
                                        <option value="" selected disabled="">Pilih Asal</option>
                                        <?php foreach ($asal as $row ) { ?>
                                        <option value="<?php echo $row['kd_tujuan'] ?>"><?php echo strtoupper($row['kota_tujuan']) ?> - <br><?php echo $row['terminal_tujuan']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tujuan</label>
                                    <select name="tujuan" class="form-control js-example-basic-single" required>
                                        <option value="" selected disabled="">Pilih Tujuan</option>
                                        <?php foreach ($tujuan as $row ) { ?>
                                        <option value="<?php echo $row['kota_tujuan'] ?>"><?php echo strtoupper($row['kota_tujuan']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="diskon">Diskon</label>
                                    <select name="diskon" class="form-control js-example-basic-single" required>
                                        <option value="" selected disabled="">Pilih Diskon</option>
                                        <option value="member">Member Diskon: 5%</option>
                                        <option value="non_member">Non-Member: Tidak Mendapat diskon</option>
                                    </select>
                                </div>
                                <a href="<?php echo base_url() ?>tiket" class="btn btn-danger pull-left">Kembali </a>
                                <button type="submit" class="btn btn-primary pull-right">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-10">
                        <div class="card-header">
                            <i class="fas fa-info"></i> Informasi Terminal
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;">City</th>
                                        <th>Terminal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list as $value) { ?>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle"><?php echo strtoupper($value['kota_tujuan']) ?></td>
                                        <td style="vertical-align:middle;"><?php echo $value['terminal_tujuan'] ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
    <script type="text/javascript">
        $(function () {
            var date = new Date();
            date.setDate(date.getDate());

            $(".datepicker").datepicker({
                startDate: date,
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });
    </script>
</body>

</html>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bagaimana cara memesan tiket?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <ol class="ordered-list" align="justify"><span class="center_content2">
                            <li>Pilih tanggal dan pilih terminal/kota asal dan tujuan Anda untuk mencari jadwal yang tersedia.</li>
                            <li>Cari tiket lalu klik tombol <b>Pilih </b> pada tiket yang ingin dipesan.</li>
                            <li>Sistem akan mengarahkan Anda ke halaman pemilihan kursi di mana Anda harus <b>memilih kursi mana saja</b> [Maks. 4 kursi sekaligus]</li>
                            <li>Setelah memilih kursi, klik tombol <b>Selanjutnya </b>untuk melanjutkan.</li>
                            <li>Isi detail tiket Anda dengan memberikan detail pelanggan seperti Nama Penumpang, Usia, dan <b>Identitas Pelanggan</b> lainnya yang diperlukan. Dengannya, pilih salah satu bank yang tersedia [sebagai Metode Pembayaran] untuk memesan tiket.</li>
                            <li>Setelah mengirimkan formulir, pemesanan dilakukan <b>[sementara]</b>. Sistem akan memberi Anda <b>Kode QR</b> dan Anda harus melakukan pembayaran.</li>
                            <li>Semua instruksi pembayaran disediakan di halaman tiket.</li>
                            <li>Setelah itu, klik tombol <b>Konfirmasi Pembayaran</b> untuk mengirimkan detail pembayaran Anda dengan lampiran <b>gambar bukti</b>.</li>
                            <li>Terakhir, permintaan pembayaran Anda akan dikirim untuk <b>verifikasi</b>.</li>
                            <li>Anda juga akan menerima <b>E-Ticket</b> satu kali setelah pembayaran diverifikasi.</li>
                            <li>Jika sudah melakukan pembayaran, bawalah bukti pembayaran pada saat keberangkatan dan tukarkan satu jam sebelum keberangkatan.</li>
                        </span></ol>
                    <w:worddocument></w:worddocument>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
