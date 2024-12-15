<?php $url=base_url().'assets/backoffice/bo' ?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="<?=$url?>/assets/" data-template="vertical-menu-template">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <!--    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">-->
    <!--    <meta http-equiv="Pragma" content="no-cache">-->
    <!--    <meta http-equiv="Expires" content="0">-->
    <meta name="description" content="" />
    <meta name="title" content="Backoffice Sistem RW" />
    <meta name="keywords" content="" />
    <meta property="og:url" content="<?=base_url()?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://s3-ap-southeast-1.amazonaws.com/static.olsera.com/storefront/default/images/partner/pos-landscape@2x.jpg" />

    <title>SISTEM RW</title>
    <link rel="icon" type="image/x-icon" href="<?=$url?>/assets/img/favicon/favicon.ico" />
    <!-- Font Face -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/fonts/flag-icons.css" />
    <link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?=$url?>/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=$url?>/assets/css/demo.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/css/myStyle.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/toastr/toastr.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/animate-css/animate.css">
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/quill/editor.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/css/pages/ui-carousel.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/backoffice/plugin/sweetalert2/sweetalert2-1.3.3.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/backoffice/plugin/sweetalert2/sweetalert2-0.4.5.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <script src="<?=$url?>/assets/vendor/js/helpers.js"></script>
    <script src="<?=$url?>/assets/vendor/js/template-customizer.js"></script>
    <script src="<?=$url?>/assets/js/config.js"></script>
    <script src="<?=$url?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=$url?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=$url?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?=$url?>/assets/vendor/libs/quill/katex.js"></script>
    <script src="<?=$url?>/assets/vendor/libs/quill/quill.js"></script>
    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
    <script src="<?=base_url()?>assets/backoffice/plugin/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets/backoffice/plugin/jquery-validation/additional-methods.min.js"></script>
    <script src="<?=base_url()?>assets/backoffice/plugin/sweetalert2/sweetalert2-1.3.3.min.js"></script>
    <script src="<?=$url?>/assets/js/site.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?=$url?>/assets/js/myJs.js"></script>
    <script src="<?=$url?>/assets/js/myAction.js"></script>
    <script src="<?=$url?>/assets/js/myString.js"></script>
    <script src="<?=$url?>/assets/vendor/libs/swiper/swiper.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
    <link rel="stylesheet" href="<?=$url?>/assets/vendor/libs/pickr/pickr-themes.css" />
    <style>
    .text-right {
        text-align: right;
    }

    .first-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99999;
        background: rgba(168, 168, 168, .5)
    }

    .first-loader img {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px
    }
    </style>
</head>
<script>
let noImage = "assets/backoffice/no_image.png";
let spin = "<?=base_url()?>assets/spin.svg";
let base_assets = "<?=base_url()?>";
let pathName = window.location.pathname.split("/");
let base_url = "<?=base_url().'backoffice/'?>";


console.log("pathName", pathName)
console.log("base_assets", base_assets)
const isLocal = base_assets.includes('localhost')
let controller = isLocal ? pathName[4] : pathName[2];
let method = isLocal ? pathName[5] : pathName[3];




$(document).ready(function() {


    if (isLogedIn()) {
        attrClass("filter-option-inner-inner").html("");
        let validMsg = $.validator.messages;
        validMsg.currency = 'Harus Berupa Angka';
        validMsg.email = 'Format Email Salah';
        validMsg.url = 'Format Url Salah';
        validMsg.required = ' Tidak Boleh Kosong';
        validMsg.remote = 'Telah Digunakan';
        validMsg.equalTo = 'Password Tidak Cocok';
        validMsg.minlength = 'Terlalu Pendek';
        validMsg.min = 'Minimal 50';
        validMsg.max = 'Maksimal 100';
        setButtonAction(false);
        // loadView(controller, handleIsEmpty(method) ? method : null, 'load')
    }
});
window.onpopstate = function(e) {
    if (e.state) {
        window.history.pushState({
            "html": e.state.html
        }, "", location.pathname);
        // loadView(controller, handleIsEmpty(method) ? method : null, 'load')
    }
};

function isLogedIn() {
    let sessId = "<?=$this->session->id?>";
    if (!handleIsEmpty(sessId)) window.location.href = base_url + "auth/logout";
    return true;
}
</script>

<body>
