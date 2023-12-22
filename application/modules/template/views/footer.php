<script src="<?php echo base_url('assets/js/vendor-all.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/feather.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pcoded.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="<?php echo base_url('assets/js/plugins/clipboard.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/uikit.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/dashboard-sale.js'); ?>"></script>
<script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.js"></script>
    <script src="assets/js/plugins/clipboard.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>
    <script src=" <?php echo base_url('assets/js/plugins/jquery.dataTables.min.js') ?>"></script>
<script src=" <?php echo base_url('assets/js/plugins/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/pages/data-advance-custom.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/moment.js')?>"></script>
<?php if ($this->session->flashdata('success')) { ?>
  <script>
    Swal.fire({
      title: 'SUCCESS !!!',
      text: '<?php echo $this->session->flashdata('success');?>',
      icon: 'success'
    })
  </script>
<?php } else if ($this->session->flashdata('error')) { ?>
  <script>
    Swal.fire({
      title: 'ERROR !!!',
      text: '<?php echo $this->session->flashdata('error');?>',
      icon: 'error',
    })
  </script>
<?php } ?>




      
   
  </body>
</html>

