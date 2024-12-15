<?php $data[$this->pages] = 'warga';
$data['focus'] = 'nama';
$this->load->view($this->generalHeader, $data) ?>
<div class="row wrapperPage">
	<div class="col-xl" id="result-content"></div>
</div>
<div class="modal fade" id="modal<?=$data[$this->pages] ?>" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog">
		<form class="modal-content form_input" id="form_input">
			<input type="hidden" name="<?= $this->id ?>" id="<?= $this->id ?>">
			<input type="hidden" name="<?= $this->param ?>" id="<?= $this->param ?>" value="add">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row mb-3">
					<div class="col-md-12 mb-3">
						<?php $label = 'nama'; ?>
						<label for="nameBackdrop" class="form-label"><?= getLabel($label) ?></label>
						<input type="text" name="<?= $label ?>" id="<?= $label ?>" class="form-control">
					</div>
					<div class="col-md-6 mb-3">
						<?php $label = 'no_hp'; ?>
						<label for="nameBackdrop" class="form-label"><?= getLabel($label) ?></label>
						<input type="text" name="<?= $label ?>" id="<?= $label ?>" class="form-control">
					</div>
					<div class="col-md-6 mb-3">
						<?php $label = 'jenis_kelamin'; ?>
						<label for="selectpickerIcons" class="form-label"><?= getLabel($label) ?></label>
						<select name="<?= $label ?>" id="<?= $label ?>" class="selectpicker w-100 show-tick"
								data-live-search="true" data-icon-base="bx" data-tick-icon="bx-check"
								data-style="btn-default">
							<option value="laki-laki">Laki-Laki</option>
							<option value="perempuan">Perempuan</option>
						</select>
					</div>
					<div class="col-md-6 mb-3">
						<?php $label = 'tempat_lahir'; ?>
						<label for="nameBackdrop" class="form-label"><?= getLabel($label) ?></label>
						<input type="text" name="<?= $label ?>" id="<?= $label ?>" class="form-control">
					</div>
					<div class='col-md-6 mb-3'>
						<?php $label = 'tanggal_lahir'; ?>
						<label for="nameBackdrop" class="form-label"><?= getLabel($label) ?></label>
						<input type="date" name="<?= $label ?>" id="<?= $label ?>" class="form-control">
					</div>
					<div class="col-md-6 mb-3">
						<?php $label = 'nik'; ?>
						<label for="nameBackdrop" class="form-label"><?= getLabel($label) ?></label>
						<input type="text" name="<?= $label ?>" id="<?= $label ?>" class="form-control">
					</div>
					<div class="col-md-6 mb-3">
						<?php $label = 'no_kk'; ?>
						<label for="nameBackdrop" class="form-label"><?= getLabel($label) ?></label>
						<input type="text" name="<?= $label ?>" id="<?= $label ?>" class="form-control">
					</div>
					<div class='col-md-6 mb-3'>
						<?php $label = 'golongan_darah'; ?>
						<label for="selectpickerIcons" class="form-label"><?= getLabel($label) ?></label>
						<select name="<?= $label ?>" id="<?= $label ?>" class="selectpicker w-100 show-tick" data-live-search="true" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default"></select>
					</div>
					<div class='col-md-6 mb-3'>
						<?php $label = 'pekerjaan'; ?>
						<label for="selectpickerIcons" class="form-label"><?= getLabel($label) ?></label>
						<select name="<?= $label ?>" id="<?= $label ?>" class="selectpicker w-100 show-tick" data-live-search="true" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default"></select>
					</div>
					<div class='col-md-6 mb-3'>
						<?php $label = 'agama'; ?>
						<label for="selectpickerIcons" class="form-label"><?= getLabel($label) ?></label>
						<select name="<?= $label ?>" id="<?= $label ?>" class="selectpicker w-100 show-tick" data-live-search="true" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default"></select>
					</div>
					<div class="col-md-6 mb-3">
						<?php $label = 'status_perkawinan'; ?>
						<label for="selectpickerIcons" class="form-label"><?= getLabel($label) ?></label>
						<select name="<?= $label ?>" id="<?= $label ?>" class="selectpicker w-100 show-tick"
								data-live-search="true" data-icon-base="bx" data-tick-icon="bx-check"
								data-style="btn-default">
							<option value="kawin">Kawin</option>
							<option value="belum kawin">Belum Kawin</option>
							<option value="cerai hidup">Cerai Hidup</option>
							<option value="cerai mati">Cerai Mati</option>
						</select>
					</div>
					<div class="col-md-6 mb-3">
						<?php $label = 'status_penduduk'; ?>
						<label for="selectpickerIcons" class="form-label"><?= getLabel($label) ?></label>
						<select name="<?= $label ?>" id="<?= $label ?>" class="selectpicker w-100 show-tick"
								data-live-search="true" data-icon-base="bx" data-tick-icon="bx-check"
								data-style="btn-default">
							<option value="tetap">tetap</option>
							<option value="kontrak">kontrak</option>
						</select>
					</div>
					<div class='col-md-6 mb-3'>
						<?php $label = 'status_keluarga'; ?>
						<label for="selectpickerIcons" class="form-label"><?= getLabel($label) ?></label>
						<select name="<?= $label ?>" id="<?= $label ?>" class="selectpicker w-100 show-tick" data-live-search="true" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default"></select>
					</div>
					<div class="col-md-12 mb-3">
						<?php $label = 'alamat'; ?>
						<label for="nameBackdrop" class="form-label"><?= getLabel($label) ?></label>
						<textarea name="<?= $label ?>" id="<?= $label ?>" class="form-control"></textarea>
					</div>
					<?php $label = $this->fileUpload; ?>
					<div class="col-md-12">
						<label for="nameBackdrop"
							   class="form-label">Foto</label>
						<label class="error-file-upload"></label>
					</div>
					<div class="col-9 col-xs-9 col-md-9 mb-3">
						<input type="hidden" name="<?= $label ?>ed[]" id="<?= $label ?>ed" value=""/>
						<input data-error="file-upload" class="form-control" type="file" name="<?= $label ?>[]"
							   id="<?= $label ?>" onchange="return ValidateFileUpload('<?= $label ?>')"
							   accept="image/png, image/jpeg">
					</div>
					<div class="col-3 col-xs-3 col-md-3 mb-3">
						<img style="max-height: 40px;border-radius: .375rem" src="<?= $this->noImage ?>" id="result_image"/>
					</div>

				</div>
			</div>
			<div class="modal-footer"><?php $this->load->view($this->buttonForm); ?></div>
		</form>
	</div>
</div>



<script>
	var urlLocal = `masterdata/warga/`; 
	var urlRead = strRead,
		urlSave = strSave,
		urlDelete = strDelete,
		urlEdit = strEdit;
	var pages = "<?=$data[$this->pages]?>";
	var nama = attrId(strNama);
	var modalForm = attrId(`${strModal}${pages}`);
	var formInput = attrId(strFormInput);
	var paramForm = attrId(strParam);
	var resultContent = attrId(strResultContent);
	var anyPage = attrId(`${strAny}${pages}`);
	var no = 1;

	$(document).ready(function () {
		var arrSelect = ['golongan_darah','agama','status_keluarga','pekerjaan'];
		arrSelect.forEach(function (row) {
			setSelect(base_url + `masterdata/${row}/${strGetAll}`, row);
		});
		loadData(1);
	});
	$(document).ready(function () {
		loadData(1);
	});
	function nextLoad(par) {
		let lastRow = toInt(attrId(`${strLastRows}${pages}`).val());
		let totalRow = toInt(attrId(`${strTotalRows}${pages}`).val());
		totalRow > lastRow && loadData(toInt(no) + par);
	}

	function prevLoad(par) {
		no > 1 && loadData(toInt(no) - par);
	}

	function loadData(page = 1, isCache = true) {
		no = page;
		var where = page;
		var any = anyPage.val() !== '' ? '?any=' + anyPage.val() : '';
		var totalRows = isNumber(attrId(`${strTotalRows}${pages}`).val());
		var url = base_url + urlLocal + urlRead;

		where += any;
		if (!isCache) {
			if (totalRows === 0) {
				localCache.remove(url + where);
			} else {
				for (var i = 0; i < totalRows; i++) {
					localCache.remove(url + `${i + 1}${any}`);
				}
			}
		}
		let newUrl = "/"+urlRead + where;

		ajaxView(newUrl, null, function (res) {
			resultContent.html(res);
		});
	}

	function cari(e, val) {
		if (e.keyCode === 13) {
			anyPage.val(val);
			timeOut(function () {
				loadData(1, false);
			})
		}
	}

	formInput.validate({
		rules: {
			nik: {
				required: true,
				remote: {
					url: `warga/check_column`,
					type: "post",
					data: {
						param: function () {
							return paramForm.val();
						}
					}
				}
			},
			"nama": {
				required: true
			},
			"no_kk": {
				required: true
			},
			"no_hp": {
				required: true
			},
			"alamat": {
				required: true
			}
		},
		errorPlacement: handleError(),
		submitHandler: function (form) {
			var formData = new FormData(formInput[0]);
			ajaxFile(base_url + urlLocal + urlSave, formData, function (res) {
				if (res.status) {
					validateSaveHmtl(nama.val(), anyPage.val(), paramForm.val(), function (page,
																						   searchName) {
						if (!searchName) anyPage.val("")
						loadData(`1`, false);
						delForm(formInput);
						paramForm.val(strAdd);
						modalForm.modal(strHide);
						notif(strSuccess);
					})
				} else {
					notif(strFailed);
				}
			})

		}
	});

	function hapus(id) {
		validateDeleteHtml(base_url + urlLocal + urlDelete, id, anyPage.val(), function (page, isCache) {
			loadData(1);
		})
	}

	function ubah(id) {
		ajaxData(base_url + urlLocal + urlEdit, {id: id}, (res) => {
			if (res.status) {
				var data = res.res_data;
				setFocus("nama");
				attrId("param").val("edit")
				attrId("id").val(data['id']);
				attrId("no_hp").val(data['no_hp']);
				attrId("alamat").val(data['alamat']);
				attrId("nama").val(data['nama']);
				attrId("nik").val(data['nik']);
				attrId("no_kk").val(data['no_kk']);
				attrId("tempat_lahir").val(data['tempat_lahir']);
				attrId("tanggal_lahir").val(data['tanggal_lahir']);


				setIdSelect("jenis_kelamin", data['jenis_kelamin']);
				setIdSelect("status_perkawinan", data['status_perkawinan']);
				setIdSelect("status_penduduk", data['status_penduduk']);

				setIdSelect("golongan_darah", data['id_golongan_darah']);
				setIdSelect("agama", data['id_agama']);
				setIdSelect("pekerjaan", data['id_pekerjaan']);
				setIdSelect("status_keluarga", data['id_status_keluarga']);

				setFileImage( data['foto'], 'warga');

			} else {
				notif(strFailed);
			}
		});
	}

	modalForm.on(strHideModal, function () {
		delForm(formInput);
		delImage();
		delValueSelect(strModel)
	});
</script>