<?php
$setting = $this->M_crud->read_data('setting', '*')[0];
?>

<!DOCTYPE html>
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?=base_url().'assets/backoffice/bo'?>/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?=$setting['name']?> - MASUK BACKOFFICE</title>

    <meta name="description" content="SISTEM RW" />
    <meta name="keywords" content="SISTEM RW">
    <!-- Canonical SEO -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=base_url().$setting['image']?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@400&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <!-- Page -->
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/css/pages/page-auth.css">
    <link rel="stylesheet" href="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/toastr/toastr.css" />

    <!-- Helpers -->
    <script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/js/helpers.js"></script>
    <script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/js/template-customizer.js"></script>
    <script src="<?=base_url().'assets/backoffice/bo'?>/assets/js/config.js"></script>
    <script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?=base_url()?>assets/backoffice/plugin/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets/backoffice/plugin/jquery-validation/additional-methods.min.js"></script>
    <script src="<?=base_url().'assets/backoffice/bo'?>/assets/vendor/libs/toastr/toastr.js"></script>
    <script src="<?=base_url().'assets/backoffice/bo'?>/assets/js/site.js"></script>
    <style>
    html,
    body,
    span,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    label,
    a,
    .sweet-confirm,
    .sweet-cancel {
        font-family: 'Signika Negative', sans-serif;
    }

    #toast-container>.toast {
        background-image: none !important;
    }

    #toast-container>.toast:before {
        position: relative;
        font-size: 24px;
        line-height: 18px;
        float: left;
        margin-left: -1em;
        color: #FFF;
        padding-right: 0.5em;
        margin-right: 0.5em;

    }

    #toast-container .toast-error {
        background-color: #ff3e1d !important;
    }


    #toast-container>.bx-check-circle,
    .toast {
        background-color: #696cff !important;
    }

    #toast-container>.bx-message-error,
    .toast {
        background-color: #ff3e1d !important;
    }

    #toast-container>.bx bx-info-circle,
    .toast {
        background-color: #ff3e1d !important;
    }

    .toast-message {
        font-family: 'Signika Negative', sans-serif !important;
    }
    </style>
</head>

<body>


    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
                <div class="w-100 d-flex justify-content-center">
                    <img src="<?=base_url().'assets/backoffice/boy-with-rocket-light.png'?>" class="img-fluid" alt="Login image" width="500" data-app-dark-img="<?=base_url().'assets/boy-with-rocket-dark.png'?>" data-app-light-img="<?=base_url().'assets/boy-with-rocket-light.png'?>">
                </div>
            </div>
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                <div class="w-px-400 mx-auto">

                    <h4 class="mb-2">Masuk Backoffice <?=$setting['name']?> 👋</h4>
                    <form id="form_input">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus>
                            <small style="color: #ff3e1d" id="err-username"></small>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" />
                            <small style="color: #ff3e1d" id="err-password"></small>
                        </div>
                        <button class="btn btn-primary btn-loading w-100" type="submit" id="btnSubmit"> Masuk </button>

                    </form>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>




    <script>
    function notif(type = "success", msg = '') {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "3000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "300",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            iconClasses: {
                error: 'bx bx-message-error',
                info: 'bx bx-info-circle',
                success: 'bx bx-check-circle',
                warning: 'bx bx-info-circle'
            },
        };
        if (type === "success") {
            toastr.options.timeOut = 1500; // 1.5s
            msg = msg !== '' ? msg : "Data Berhasil Disimpan";
            toastr.success(msg);
        } else if (type === "hapus") {
            toastr.options.timeOut = 1500; // 1.5s
            msg = msg !== '' ? msg : "Data Berhasil Dihapus";
            toastr.success(msg);
        } else if (type === "failed") {
            toastr.options.timeOut = 1500; // 1.5s
            msg = msg !== '' ? msg : "Terjadi Kesalahan Server";
            toastr.warning(msg);
        } else if (type === "error") {
            toastr.options.timeOut = 1500; // 1.5s
            msg = msg !== '' ? msg : "Terjadi Kesalahan Server";
            toastr.error(msg);
        }

    }
    $("#btnLoading").css({
        "display": "none"
    });
    $(`#form_input`).validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            username: {
                required: "username tidak boleh kosong"
            },
            password: {
                required: "password tidak boleh kosong",
                minlength: "password minimal 5 karakter"
            }
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                return $(placement).append(error)
            } else {
                return error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            $("#err-username").text('')
            $("#err-password").text('')
            $.ajax({
                url: "<?=base_url().'backoffice/auth/login'?>",
                type: "POST",
                dataType: "JSON",
                data: $(`#form_input`).serialize(),
                timeout: 1000,
                beforeSend: function() {
                    $('#btnSubmit').prop('disabled', true);
                    $("#btnSubmit").text('');
                    $("#btnSubmit").append(
                        '<span class="spinner-border" role="status" aria-hidden="true"></span>'
                    )
                    $("#btnSubmit").append(" loading ....")
                },
                complete: function() {
                    $('#btnSubmit').prop('disabled', false);
                    $(".spinner-border").remove();
                    $("#btnSubmit").text('Masuk');
                },
                success: function(res) {
                    if (!res.status) {
                        if (res.field === '') {
                            notif("error", res.msg)
                        } else {
                            $("#" + res.field).focus();
                            $("#err-" + res.field).text(res.msg)
                        }
                    } else {
                        setSite(res.result);
                        window.location.href = "<?=base_url().'backoffice/setting'?>";
                    }
                },
                error: function(jqXHR, ajaxOptions, thrownError) {
                    $('#btnSubmit').prop('disabled', false);
                    $(".spinner-border").remove();
                    $("#btnSubmit").text('Masuk');
                    var msg = '';
                    if (jqXHR.status === 0) {
                        msg = 'No connection.\n Verify Network.';
                    } else if (jqXHR.status === 404) {
                        msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status === 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                    notif("error", msg)
                }
            })
        }
    });

    $(document).ready(function() {
        $("#username").on('keyup', function() {
            $("#err-username").text('')
        });
        $("#password").on('keyup', function() {
            $("#err-password").text('')
        })
    })
    </script>

</body>

</html>
