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
					<table class="table table-hover" id="dataTable">
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
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
</div>
