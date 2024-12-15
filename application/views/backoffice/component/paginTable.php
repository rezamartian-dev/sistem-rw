<input type="hidden" id="totalRows<?=$pages?>">
<input type="hidden" id="lastRows<?=$pages?>">
<input type="hidden" id="activeRows<?=$pages?>">
<div class="row">
    <div class="col-xl">
        <div class="float-start menu-link" id="notedPagination<?=$pages?>"></div>
        <div class="float-end">
            <button class="btn btn-primary" id="prevPage<?=$pages?>" onclick="handlePagin(1,'prev')"><i class="bx bx-left-arrow"></i></button>
            <button class="btn btn-pagin-number" id="currentPage<?=$pages?>">1</button>
            <button class="btn btn-primary" id="nextPage<?=$pages?>" onclick="handlePagin(1,'next')"><i class="bx bx-right-arrow"></i></button>
        </div>
    </div>
</div>

<script>
    var pages= "<?=$pages?>";
    var attrTotalRow=$(`#totalRows${pages}`);
    var attrLastRow=$(`#lastRows${pages}`);
    var attrActiveRow=$(`#activeRows${pages}`);
    var no=isNaN(parseInt(attrActiveRow.val(),10))?1:parseInt(attrActiveRow.val(),10);

    function handlePagin(page,action){
        if(action==='next'){
            if(parseInt(attrTotalRow.val(),10)>parseInt(attrLastRow.val(),10)){
                no=parseInt(attrActiveRow.val(),10)+page;
                attrActiveRow.val(no);
                loadData(no);
            }
        }
        else{
            if(no > 1){
                no=parseInt(no)-page;
                attrActiveRow.val(no);
                loadData(no);
            }
        }

    }

</script>