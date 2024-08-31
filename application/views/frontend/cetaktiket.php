<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>E-Ticket(<?php echo $cetak[0]['kd_order'];?>)</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>
<style type="text/css">

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
        background-color: #fff;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body {
        margin: 0 15px 0 15px;
    }

    p.footer {
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }

    #container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }
    
    img{float:left;padding-right:10px;}
    </style>
</head>
<body onload="window.print()">
  <table width="100%">
    <tr>
        <td valign="top"><img src="<?php echo base_url($cetak[0]['qrcode_order']) ?>" alt="" width="200"/></td>
        <td align="right">
            <h1>E-TICKET</h1>
            <pre>
                <b><span style='font-size:15px'>Detail Tiket </span></b>
                </br>
                Kode Pemesanan : <?php echo $cetak[0]['kd_order'];?></br>
                Kode Jadwal : <?php echo $cetak[0]['kd_jadwal'];?></br>
                Tanggal: <?php echo $cetak[0]['tgl_beli_order'];?></br>
                Pelanggan: <?php echo $cetak[0]['nama_order'];?></br>
                Jadwal : <?php echo hari_indo(date('N',strtotime($cetak[0]['tgl_berangkat_order']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$cetak[0]['tgl_berangkat_order'].'')));?><br>
                Tanggal Waktu Keberangkatan : <?php echo date('H:i',strtotime($cetak[0]['jam_berangkat_jadwal'])).' To '.date('H:i',strtotime($cetak[0]['jam_tiba_jadwal'])) ?>
                Berangkat dari: <?php echo strtoupper($asal['kota_tujuan']);?></br>
                Tujuan ke : <?php echo strtoupper($cetak[0]['kota_tujuan']); ?>
            </pre>
        </td>
    </tr>
  </table>
  <br/>
  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>No Tiket </th>
        <th>Penumpang</th>
        <th>Usia </th>
        <th>Kursi</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cetak as $row) { ?>
        <tr>
           <td scope="row"><?php echo $row['kd_tiket']; ?></td>
           <td align="left"><?php echo $row['nama_kursi_order']; ?></td>
           <td align="center"><?php echo $row['umur_kursi_order']; ?> Years</td>
            <td align="center"><?php echo $row['no_kursi_order']; ?> </td>
           <td align="left"><?php echo 'Rp. '.number_format(($row['harga_jadwal'])); ?></td>
        <tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total</td>
            <td align="right" class="gray"><?php $total = count($cetak) * $cetak[0]['harga_jadwal']; echo '$'.number_format(($total));?></td>
        </tr>
    </tfoot>
  </table>
  <div id="container">
    <h1>Syarat dan ketentuan</h1>

    <div id="body">
        <ol type="1">
          <li>BTBS * HANYA agen tiket bus. Itu tidak mengoperasikan layanan bus itu sendiri. Untuk memberikan pilihan operator bus yang komprehensif, waktu keberangkatan dan harga bagi pelanggan, telah terikat dengan banyak operator bus.
          Saran BTBS kepada pelanggan adalah memilih operator bus yang mereka kenal dan yang layanannya nyaman bagi mereka.</li>
          <li>Waktu keberangkatan yang tertera di tiket hanyalah waktu tentatif. Namun bus tidak akan berangkat dari sumber sebelum waktu yang tertera di tiket. Penumpang harus menyediakan hal-hal berikut saat menaiki bus:
            (1) Salinan tiket (Cetak tiket atau cetak email tiket).
            (2) Bukti identitas yang sah Jika tidak melakukannya, mereka mungkin tidak diizinkan naik bus.</li>
           <li>Tanggung jawab BTBS meliputi:
           (1) Menerbitkan tiket yang berlaku (tiket untuk diterima oleh operator bus) untuk jaringan operator busnya
           (2) Memberikan pengembalian uang dan dukungan jika terjadi pembatalan
           (3) Memberikan dukungan dan informasi pelanggan jika terjadi keterlambatan/kerepotan
           Ganti bus: Jika operator bus mengganti jenis bus karena alasan tertentu, BTBS akan mengembalikan jumlah selisihnya kepada pelanggan setelah diintimidasi oleh pelanggan dalam waktu 24 jam perjalanan.</li>
        <li>Tanggung jawab BTBS TIDAK termasuk:
        (1) Bus operator bus tidak berangkat/sampai tepat waktu
        (2) Kursi operator bus dll tidak sesuai dengan pelanggan
        harapan
        (3) Bagasi Pelanggan hilang/dicuri/rusak
        (4) Operator bus mengubah titik keberangkatan dan/atau menggunakan penjemputan
        Jika seseorang membutuhkan pengembalian dana untuk dikreditkan kembali ke rekening bank mereka, silakan
        tulis detail kupon tunai Anda ke support@btbs.web</li>
        </ol>  
    </div>
</div>

</body>
</html>