<!-- jQuery -->
<script src="{{ asset('AdminAssets') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminAssets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminAssets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('AdminAssets') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('AdminAssets') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('AdminAssets') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('AdminAssets') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('AdminAssets') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('AdminAssets') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('AdminAssets') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminAssets')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('AdminAssets') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('AdminAssets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminAssets') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminAssets') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('AdminAssets') }}/dist/js/pages/dashboard.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>