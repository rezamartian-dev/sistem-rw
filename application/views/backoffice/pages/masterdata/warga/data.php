<?php $no = $data[$this->no];
if ($row != null): ?>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive text-nowrap">
				<table class="table border-top table-hover">
					<thead>
					<tr>
						<th rowspan="2" width="1%" class="text-center"><?= $this->no ?></th>
						<th rowspan="2" width="1%" class="text-center">#</th>
						<th rowspan="2">Nama</th>
						<th rowspan="2" width="1%">NO HP</th>
						<th rowspan="2" width="1%">TTL</th>
						<th rowspan="2" width="1%">NIK</th>
						<th rowspan="2" width="1%">NO KK</th>
						<th rowspan="2" width="1%">JENIS KELAMIN</th>
						<th rowspan="2" width="1%">PEKERJAAN</th>
						<th rowspan="2" width="1%">GOLONGAN DARAH</th>
						<th rowspan="2" width="1%">AGAMA</th>
						<th rowspan="2" width="1%">ALAMAT</th>
						<th width="1%" colspan="3" class="text-center">STATUS</th>
					</tr>
					<tr>
						<th width="1%">PERKAWINAN</th>
						<th width="1%">KELUARGA</th>
						<th width="1%">PENDUDUK</th>
					</tr>
					</thead>
					<tbody class="table-border-bottom-0">
					<?php foreach ($row as $val):
						$no++;
						?>
						<tr>
							<td width="1%" class="text-center"><?= $no ?></td>
							<td width="1%" class="text-center">
								<div class="dropdown">
									<button type="button" class="btn btn-xs rounded-pill btn-icon btn-primary p-0 dropdown-toggle hide-arrow"  data-bs-toggle="dropdown"><i class="bx bx-chevron-down"></i></button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="javascript:void(0);" onclick="ubah('<?= $val[$this->id] ?>')"><i class="bx bx-edit-alt me-2"></i>Ubah</a>
										<a class="dropdown-item" href="javascript:void(0);" onclick="hapus('<?= $val[$this->id] ?>')"><i class="bx bx-trash me-2"></i>Hapus</a>
									</div>
								</div>
							</td>
							<td >
								<div onclick="showImage('<?=$this->url.$val['foto']?>|<?=$val['nama']?>')" class='d-flex align-items-center pointer'>
									<img src="<?=$this->url.$val['foto']?>" alt='Chrome'  class='avatar me-2 rounded-circle'>
									<span><?=$val['nama']?></span>
								</div>
							</td>
							<td ><?=$val['no_hp']?></td>

							<td ><?=$val['tempat_lahir']?>, <?=date('d F Y',strtotime($val['tanggal_lahir']))?></td>
							<td ><?=$val['nik']?></td>
							<td ><?=$val['no_kk']?></td>
							<td ><?=$val['jenis_kelamin']?></td>
							<td ><?=$val['pekerjaan']?></td>
							<td ><?=$val['golongan_darah']?></td>
							<td ><?=$val['agama']?></td>
							<td ><?=$val['alamat']?></td>
							<td ><?=$val['status_perkawinan']?></td>
							<td ><?=$val['status_keluarga']?></td>
							<td ><?=$val['status_penduduk']?></td>
						</tr>
						<?php $data[$this->no] = $no - 1; endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php $this->load->view($this->paginHtml, $data); else: ?>
	<div class="row">
		<div class="col-md-12">
			<p><i class="bx bx-info-circle"></i><?= $this->msgNoData ?></p>
		</div>
	</div>
<?php endif; ?>