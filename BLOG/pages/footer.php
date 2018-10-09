  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; <?php echo date('Y')?> <a href=""> </a>.</strong> All rights
    reserved.
  </footer>

<?php
    if($upload==1)
    {
?>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- jQuery 2.2.3 -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $SERVER;?>bootstrap/js/bootstrap.min.js"  type="text/javascript" ></script>
<!-- AdminLTE App -->
<script src="<?php echo $SERVER;?>dist/js/app.min.js"  type="text/javascript" ></script>
<!-- AdminLTE for demo purposes 
<script src="<?php echo $SERVER;?>dist/js/demo.js"  type="text/javascript" ></script>-->

<?php
    }
    else
    {
?>
<!-- jQuery 2.2.3 -->
<script src="<?php echo $SERVER;?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $SERVER;?>bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $SERVER;?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $SERVER;?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo $SERVER;?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $SERVER;?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $SERVER;?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $SERVER;?>dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "scrollX": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<?php
    }
?>
</body>
</html>
