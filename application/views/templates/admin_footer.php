<div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
            <span class="bigger-120">
                <span class="blue bolder">UPGRIS</span>
                2020
            </span>


        </div>
    </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>

<script src="<?php echo base_url('assets/admin/') ?>js/jquery.2.1.1.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo base_url('assets/admin/') ?>js/jquery.min.js'>" + "<" + "/script>");
</script>


<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/admin/') ?>js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="<?php echo base_url('assets/admin/') ?>js/bootstrap.min.js"></script>


<script src="<?php echo base_url('assets/admin/') ?>js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/jquery.ui.touch-punch.min.js"></script>

<script src="<?php echo base_url('assets/admin/') ?>js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/jquery.flot.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/jquery.flot.resize.min.js"></script>

<script src="<?php echo base_url('assets/admin/') ?>js/jquery.dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/dataTables.tableTools.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/dataTables.colVis.min.js"></script>
<!-- ace scripts -->
<script src="<?php echo base_url('assets/admin/') ?>js/jquery.knob.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/jquery.autosize.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/bootstrap-tag.min.js"></script>

<script src="<?php echo base_url('assets/admin/') ?>js/ace-elements.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>js/ace.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dynamic-table').DataTable();
    });
</script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {

        /////////
        $('#modal-form input[type=file]').ace_file_input({
            style: 'well',
            btn_choose: 'Pilih Foto',
            btn_change: null,
            no_icon: 'ace-icon fa fa-camera',
            droppable: true,
            thumbnail: 'large'
        })
        $('#modal-edit input[type=file]').ace_file_input({
            style: 'well',
            btn_choose: 'Pilih Foto',
            btn_change: null,
            no_icon: 'ace-icon fa fa-camera',
            droppable: true,
            thumbnail: 'large'
        })

        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        $('#modal-form').on('shown.bs.modal', function() {
            if (!ace.vars['touch']) {
                $(this).find('.chosen-container').each(function() {
                    $(this).find('a:first-child').css('width', '210px');
                    $(this).find('.chosen-drop').css('width', '210px');
                    $(this).find('.chosen-search input').css('width', '200px');
                });
            }
        })
        $('#modal-edit').on('shown.bs.modal', function() {
            if (!ace.vars['touch']) {
                $(this).find('.chosen-container').each(function() {
                    $(this).find('a:first-child').css('width', '210px');
                    $(this).find('.chosen-drop').css('width', '210px');
                    $(this).find('.chosen-search input').css('width', '200px');
                });
            }
        })

    })
</script>
</body>

</html>