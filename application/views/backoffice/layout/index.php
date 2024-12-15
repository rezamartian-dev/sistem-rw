<body>
<?php $this->load->view("backoffice/layout/header") ?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- SIDEBAR -->
        <?php $this->load->view("backoffice/layout/sidebar") ?>
        <!-- / SIDEBAR -->
        <!-- Layout container -->
        <div class="layout-page">
            <!-- TOPBAR -->
            <?php $this->load->view("backoffice/layout/topbar") ?>
            <!-- / TOPBAR -->
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y" id="resultView">
                <!-- / Content -->
					<?php $this->load->view($page)?>
                </div>
                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->
<?php $this->load->view("backoffice/layout/footer") ?>
</body>
