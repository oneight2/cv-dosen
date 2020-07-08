<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<?php var_dump($this->session->userdata('nidn')) ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-8">
					<?= $this->session->flashdata('message'); ?>
				</div>
			</div>
			<div class="row center">
				<div class="card mb-3 col-sm-8">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?= $user['name']; ?></h5>
								<p class="card-text mb-0">NIDN : <?= $user['nidn']; ?></p>
								<p class="card-text"><?= $user['email']; ?></p>
								<p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<form action="<?= base_url('user/dataInstansi'); ?>" method="post">
			<div class="form-group row">
				<label for="kampus" class="col-sm-2 col-form-label">Perguruan Tinggi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="kampus" name="perguruan_tinggi" value="<?= $dosen['perguruan_tinggi']; ?>" readonly>
					<?= form_error('perguruan_tinggi', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="prodi" name="program_studi" value="<?= $dosen['program_studi']; ?>">
					<?= form_error('program_studi', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="jabatan" class="col-sm-2 col-form-label">Jabatan Fungsional</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="jabatan" name="jabatan_fungsional" value="<?= $dosen['jabatan_fungsional']; ?>">
					<?= form_error('jabatan_fungsional', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="status" class="col-sm-2 col-form-label">Status Ikatan Kerja</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="status" name="ikatan_kerja" value="<?= $dosen['status_ikatan_kerja']; ?>">
					<?= form_error('ikatan_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="aktivitas" class="col-sm-2 col-form-label">Status Aktivitas</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="aktivitas" name="aktivitas" value="<?= $dosen['status_aktivitas']; ?>">
					<?= form_error('aktivitas', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="deksripsi" class="col-sm-2 col-form-label">Deskripsi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control editor" id="deskripsi" name="deksripsi" value="<?= $dosen['deskripsi']; ?>">
					<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<button type="submit" class="btn btn-primary right">Update Informasi</button>
			<?php var_dump($_POST); ?>
		</form>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
</div>