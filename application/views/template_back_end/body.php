<!DOCTYPE html>
<html lang="en">

<?php echo $_head; ?>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- ===== Top-Navigation ===== -->
        <?php echo $_navbar; ?>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <?php echo $_sidebar; ?>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- Page Content -->
        <!-- <div class="page-wrapper"> -->
            
            <?php echo $_content; ?>            
            <!-- /.container-fluid -->
        <?php echo $_footer; ?>
        <!-- </div> -->
        <!-- /#page-wrapper -->
    </div>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/back_end/assets/scripts/main.js"></script>
</body>

</html>
