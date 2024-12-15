

<?php
$placeholder="Tulis ".ucwords($focus)." Dan Tekan Enter";
if(isset($place)){
    $placeholder = "Tulis $place Dan Tekan Enter";
}
?>

<div class="row mb-3">
    <div class="col-6 col-xs-6 col-md-10 mb-2">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group input-group-merge">
                    <input onkeyup="return cari(event, $(this).val())"  type="search" name="any" class="form-control" id="any<?=$pages?>" placeholder="<?=ucwords($placeholder)?> ..." aria-label="<?=$pages?>" aria-describedby="basic-icon-default-fullname2" />
                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-search"></i></span>
                </div>
            </div>
        </div>


    </div>
    <div class="col-6 col-xs-6 col-md-2">
        <button style="float: right;" type="button" class="btn btn-primary" onclick="refreshPage('<?=$pages?>')">
            <i class="tf-icons bx bx-rotate-left scaleX-n1-rtl bx-sm"></i>
        </button>
        <button style="float: right;margin-right:2px" type="button" class="btn btn-primary" onclick="showModal('modal<?=$pages?>','<?=$focus?>','<?=ucwords($pages)?>')">
            <i class="bx bx-plus bx-sm"></i>
        </button>

    </div>
</div>

<script>
	var delayTimer;
	function cariVal(e,val) {
		clearTimeout(delayTimer);
		delayTimer = setTimeout(function() {
			cari(e,val)
		}, 700); // Will do the ajax stuff after 1000 ms, or 1 s
	}

    function refreshPage(page){
		const any = attrId(`any${page}`).val()
		console.log(any)

		let newUrl=`/read/1`;
		if(any!==''){
			newUrl+=`?any=${any}`
		}
        ajaxView(newUrl,null,function(res){
            resultContent.html(res);
        });
    }
</script>
