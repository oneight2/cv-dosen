<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
					<?= $this->session->flashdata('message'); ?>
					<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahDosenModal">Tambah Dosen</a>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">NIDN</th>
								<th scope="col">Nama</th>
								<th scope="col">Program Studi</th>
								<th scope="col">Jabatan Fungsional</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"></th>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<a href="" class="badge badge-warning">access</a>
									<a href="" class="badge badge-success">edit</a>
									<a href="" class="badge badge-danger">delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade" id="tambahDosenModal" tabindex="-1" role="dialog" aria-labelledby="tambahDosenModal" aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="newRoleModalLabel">Tambah Data Dosen</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form action="<?= base_url('dosen'); ?>" method="post">
			<div class="modal-body">
				<div class="form-group">
					<label for="nidn">NIDN</label>
					<input type="text" class="form-control" id="nidn" name="nidn" >
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label for="prodi">Program Studi</label>
					<input type="text" class="form-control" id="prodi" name="prodi">
				</div>
				<div class="form-group">
					<label for="jabatan">Jabatan Fungsional</label>
					<input type="text" class="form-control" id="jabatan" name="jabatan" >
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah</button>
			</div>
		</form>
	</div>
</div>
</div>