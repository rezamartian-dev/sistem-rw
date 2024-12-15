<div class="modal fade" id="modal_<?=$pages?>_detail" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row mb-3">
					<div class="col-md-12">
						<div class="table-responsive text-nowrap">
							<table class="table border-top table-hover">
								<thead>
								<tr>
									<th>Aksi</th>
									<th>Created By</th>
									<th>Modified By</th>
									<th>Created At</th>
									<th>Modified At</th>
								</tr>
								</thead>
								<tbody  class="table-border-bottom-0" id="result_<?=$pages?>_detail"></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	function detailHistory(url,id,menu=''){
		ajaxData(base_url+url+'/getDetail', { id,menu }, function (res) {
			attrId(`modal_<?=$pages?>_detail`).modal("show");
			attrId(`result_<?=$pages?>_detail`).html(res);
		},false);
	}
</script>
