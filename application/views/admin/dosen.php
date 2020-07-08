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
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">NIDN</th>
								<th scope="col">Nama</th>
								<th scope="col">Program Studi</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($dosen as $row) : ?>
							<tr>
								<th scope="row"><?= $i; ?></th>
								<td><?= $row['nidn']; ?></td>
								<td><?= $row['nama']; ?></td>
								<td><?= $row['program_studi']; ?></td>
								<td>
									<a href="" class="badge badge-warning">access</a>
									<a href="" class="badge badge-success">edit</a>
									<a href="" class="badge badge-danger">delete</a>
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
