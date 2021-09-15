<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<?= $this->session->flashdata('status'); ?>
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Data Siswa</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-body">
											<table id="example1" class="table text-center table-bordered table-striped">
												<thead>
													<tr>
														<th>Nama</th>
														<th>No Nis</th>
														<th>No Nisn</th>
														<th>Tempat Lahir</th>
													</tr>
												</thead>
												<tbody id="barisData">
													<!-- // -->
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		$.ajax({
			type: "GET",
			data: "",
			url: "<?= base_url('DashboardController/getData'); ?>",
			success: function(result) {
				let obresult = JSON.parse(result);
				$.each(obresult, function(key, val) {
					let barisBaru = $("<tr>");
					barisBaru.html(
						"<td>" + val.nama + "</td><td>" + val.nis + "</td><td>" + val.nisn + "</td><td>" + val.tempat_lahir + "</td>")
					let dataHendler = $("#barisData");
					dataHendler.append(barisBaru);
				})
			}
		})
	</script>
