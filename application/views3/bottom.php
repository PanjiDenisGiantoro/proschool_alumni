<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
    <footer class="main-footer">
    <font color="black">Copyright &copy; 2022 <a href="https://www.proschool.id" target="_blank"><font color="black">ProSchool</a></font>.
    Tim ICT Desatech Nusantara.</font>
    <div class="float-right d-none d-sm-inline-block">
      <font color="black">Version 2.0</font>
    </div>
  </footer>
    <!-- <footer class="main-footer" style="background-color: white; font-size : 12px">
    <font color='black'>Copyright &copy; 2022 <a href="http://prodoc.id"><font color='black'>ProSchool</a>.</font></font>
    <font color='black'> All rights reserved.</font>
    <div class="float-right d-none d-sm-inline-block">
        <font color='black'>Version</b> 2.0</a></font></font>
      
    </div>
  </footer> -->
</div>
<!-- <footer class="main-footer">-->
<!--    <?php echo "Copyright © " ."". (int)date('Y');?> <a href="http://prodoc.id" target="_blank">ProSchool</a>. All rights reserved.-->
<!--    <div class="float-right d-none d-sm-inline-block">-->
<!--      <b>Version</b> 1.0-->
<!--    </div>-->
<!--  </footer>-->
<!--</div>-->
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>asset/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>


<script>
  $(function () {
    $('#datatb').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>
<script>
$(document).ready(function(){
  $('.select2').select2();
  $(".tglcalendar").datepicker({
    todayHighlight: true,
    format: "dd-mm-yyyy"
  });  
});
</script>

<script>
        function printDiv(divName) {
             var printContents = document.getElementById(divName).innerHTML;
             var originalContents = document.body.innerHTML;

             document.body.innerHTML = printContents;

             window.print();

             document.body.innerHTML = originalContents;
        }
</script>

<script type="text/javascript">
    $("input").attr("autocomplete", "off");
</script>
</body>
</html>
