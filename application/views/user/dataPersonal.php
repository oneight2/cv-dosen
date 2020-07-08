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
			<form action="<?= base_url('user/dataPersonal'); ?>" method="post">
			<div class="form-group row">
				<label for="lahir" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lahir" name="tanggal_lahir" value="<?= $personal['tanggal_lahir']; ?>" >
					<?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
					<select name="jenis_kelamin" id="jenkel" class="form-control">
									<option value=""class="disable">Pilih Jenis Kelamin</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="agama" class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="agama" name="agama" value="<?= $personal['agama']; ?>">
					<?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?= $personal['tinggi_badan']; ?>">
					<?= form_error('tinggi_badan', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?= $personal['berat_badan']; ?>">
					<?= form_error('berat_badan', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control editor" id="deskripsi" name="alamat" value="<?= $personal['alamat']; ?>">
					<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="nomor" class="col-sm-2 col-form-label">No Handphone</label>
				<div class="col-sm-10">
					<input type="text" class="form-control editor" id="nomor" name="nomor_telp" value="<?= $personal['nomor_telp']; ?>">
					<?= form_error('nomor', '<small class="text-danger pl-3">', '</small>'); ?>
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