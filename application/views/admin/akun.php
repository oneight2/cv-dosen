<!-- Begin Page Content -->
<div class="container-fluid">
	
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
			<h6 class="m-0 font-weight-bold text-primary">Tambah Akun</h6>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse show" id="collapseCardExample" style="">
			<div class="card-body">
				<form action="<?= base_url('admin/akun'); ?>" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nidn">NIDN</label>
								<input type="text" class="form-control" id="nidn" name="nidn" >
							</div>
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="role">Role</label>
								<select name="role" id="role" class="form-control">
									<option value="">Select Role</option>
									<?php foreach ($role as $row) : ?>
									<option value="<?= $row['id']; ?>"><?= $row['role']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</form>
				<?php var_dump($_POST) ?>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
					<?= $this->session->flashdata('message'); ?>
					<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahDosenModal">Tambah Akun</a>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">NIDN</th>
								<th scope="col">Nama</th>
								<th scope="col">Email</th>
								<th scope="col">Role</th>
								<th scope="col">Member Since</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($akun as $row) : ?>
							<tr>
								<th scope="row"><?= $i; ?></th>
								<td><?= $row['nidn']; ?></td>
								<td><?= $row['name']; ?></td>
								<td><?= $row['email']; ?></td>
								<td><?= $row['role']; ?></td>
								<td><?= date('d F Y', $row['date_created']); ?></td>
								<td>
									<a href="" class="badge badge-warning">Reset Password</a>
									<a href="" class="badge badge-success">Edit</a>
									<a href="" class="badge badge-danger">Delete</a>
								</td>
							</tr>
							<?php $i++; ?>
							<?php endforeach; ?>
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
		<form action="<?= base_url('admin/akun'); ?>" method="post">
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
					<label for="prodi">Email</label>
					<input type="email" class="form-control" id="prodi" name="email">
				</div>
				<select name="role" id="role" class="form-control">
					<option value="">Select Role</option>
					<?php foreach ($role as $row) : ?>
					<option value="<?= $row['id']; ?>"><?= $row['role']; ?></option>
					<?php endforeach; ?>
				</select>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah</button>
			</div>
		</form>
	</div>
</div>
</div>