<!-- Begin Page Content -->
<div class="container-fluid">
	
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
			<h6 class="m-0 font-weight-bold text-primary">Tambah Informasi</h6>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse" id="collapseCardExample" style="">
			<div class="card-body">
				<?= form_open_multipart('admin/informasi'); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="informasi">Informasi</label>
								<input type="text" class="form-control editor" id="informasi" name="informasi" >
							</div>
							<div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary mt-5">Tambah</button>
					<?php var_dump($_POST) ?>
					<?php var_dump($_FILES) ?>
				</form>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
					<?= $this->session->flashdata('message'); ?>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Informasi</th>
								<th scope="col">Gambar</th>
								<th scope="col">Tanggal Post</th>
								<th scope="col">Aksi</th>
							</tr>

						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($informasi as $row) : ?>
							<tr>
								<th scope="row"><?= $i; ?></th>
								<td><?= $row['nidn']; ?></td>
								<td><?= $row['informasi']; ?></td>
								<td><?= $row['gambar']; ?></td>
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
