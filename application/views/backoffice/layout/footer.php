<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/hammer/hammer.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/js/menu.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/select2/select2.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/tagify/tagify.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/toastr/toastr.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/js/main.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/js/forms-editors.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/js/ui-modals.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/js/ui-toasts.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/js/ui-carousel.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/js/forms-tagify.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/js/dashboards-analytics.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<!-- Vendors JS -->
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/moment/moment.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/pickr/pickr.js"></script>
<script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
<!--<script src="--><?//=base_url().'assets/bo'?><!--/assets/js/form-pickers.js"></script>-->

<script>
    AOS.init();

$(document).ready(function() {
    $('.selectpicker').selectpicker().change(function() {
        $(this).valid()
    });

    $(".tag").on('change', function() {
        $(this).valid()
    })

});
</script>


</body>

</html>
