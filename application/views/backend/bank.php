<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?= $title ?></title>
	<!-- css -->
	<?php $this->load->view('backend/include/base_css'); ?>
</head>

<body id="page-top">
	<!-- navbar -->
	<?php $this->load->view('backend/include/base_nav'); ?>
	<!-- Begin Page Content -->
	<div class="container-fluid">
		<h1 class="h5 text-gray-800">Daftar Bank</h1>
		<!-- DataTales Example -->
		
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#ModalTujuan">
				Add Bank
				</button>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead class="thead-dark">
							<tr>
								<th>#</th>
								<th>Bank Code</th>
								<th>Nama</th>
								<th>Nomor rekening</th>
								<th>Atas nama</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ; foreach ($bank as $row ) { ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $row['kd_bank']; ?></td>
								<td><?= $row['nama_bank']; ?></td>
								<td><?= $row['nomrek_bank']; ?></td>
								<td><?= $row['nasabah_bank']; ?></td>
								<td align="center"><a href="<?= base_url('backend/bank/viewbank/'.$row['kd_bank']) ?>"
										class="btn btn btn-info">View</a></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /.container-fluid -->
	</div>
	<!-- End of Main Content -->
	<!-- Footer -->
	<?php $this->load->view('backend/include/base_footer'); ?>
	<!-- Modal -->
	<div class="modal fade" id="ModalTujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Bank</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url()?>backend/bank/tambahbank" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label class="">Nama Pelanggan</label>
							<input type="text" class="form-control" name="nasabah" required placeholder="Customer Name">
						</div>
						<div class="form-group">
							<label class="">Nama Bank</label>
							<input type="text" class="form-control" name="bank" required placeholder="Bank name">
						</div>
						<div class="form-group">
							<label class="">Nomor rekening</label>
							<input type="number" class="form-control" name="nomor" required placeholder="Account number">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Photo Logo Bank</label>
							<input type="file" class="form-control" name="userfile" required="">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							<button class="btn btn-success">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<?php $this->load->view('backend/include/base_js'); ?>
</body>

</html>
