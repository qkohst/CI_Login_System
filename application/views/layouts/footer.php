</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="<?= base_url('assets'); ?>./vendor/global/global.min.js"></script>
<script src="<?= base_url('assets'); ?>./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?= base_url('assets'); ?>./vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?= base_url('assets'); ?>./js/custom.min.js"></script>
<script src="<?= base_url('assets'); ?>./js/deznav-init.js"></script>

<!-- Counter Up -->
<script src="<?= base_url('assets'); ?>./vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets'); ?>./vendor/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Apex Chart -->
<script src="<?= base_url('assets'); ?>./vendor/apexchart/apexchart.js"></script>

<!-- Chart piety plugin files -->
<script src="<?= base_url('assets'); ?>./vendor/peity/jquery.peity.min.js"></script>

<!-- Dashboard 1 -->
<script src="<?= base_url('assets'); ?>./js/dashboard/dashboard-1.js"></script>


<script>
    $('.custom-control-input').on('click', function() {
        const menuId=$(this).data('menu');
        const roleId=$(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess');?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId:roleId
            },
            success:function(){
                document.location.href="<?= base_url('admin/roleaccess/');?>"+roleId;
            }
        });
    });
</script>

</body>

</html>