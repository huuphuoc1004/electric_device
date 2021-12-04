<!-- jQuery -->
<script src={{ asset("admin_source/plugins/jquery/jquery.min.js") }}></script>
<!-- Bootstrap 4 -->
<script src={{ asset("admin_source/plugins/bootstrap/js/bootstrap.bundle.min.js") }}></script>
<!-- Select2 -->
<script src={{ asset("admin_source/plugins/select2/js/select2.full.min.js") }}></script>
<!-- Bootstrap4 Duallistbox -->
<script src={{ asset("admin_source/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js") }}></script>
<!-- InputMask -->
<script src={{ asset("admin_source/plugins/moment/moment.min.js") }}></script>
<script src={{ asset("admin_source/plugins/inputmask/min/jquery.inputmask.bundle.min.js") }}></script>
<!-- date-range-picker -->
<script src={{ asset("admin_source/plugins/daterangepicker/daterangepicker.js") }}></script>
<!-- bootstrap color picker -->
<script src={{ asset("admin_source/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js") }}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{ asset("admin_source/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}></script>
<!-- Bootstrap Switch -->
<script src={{ asset("admin_source/plugins/bootstrap-switch/js/bootstrap-switch.min.js") }}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ asset("admin_source/plugins/jquery-ui/jquery-ui.min.js") }}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- ChartJS -->
<script src={{ asset("admin_source/plugins/chart.js/Chart.min.js") }}></script>
<!-- Sparkline -->
<script src={{ asset("admin_source/plugins/sparklines/sparkline.js") }}></script>
<!-- JQVMap -->
<script src={{ asset("admin_source/plugins/jqvmap/jquery.vmap.min.js") }}></script>
<script src={{ asset("admin_source/plugins/jqvmap/maps/jquery.vmap.usa.js") }}></script>
<!-- jQuery Knob Chart -->
<script src={{ asset("admin_source/plugins/jquery-knob/jquery.knob.min.js") }}></script>
<!-- Summernote -->
<script src={{ asset("admin_source/plugins/summernote/summernote-bs4.min.js") }}></script>
<!-- overlayScrollbars -->
<script src={{ asset("admin_source/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{ asset("admin_source/dist/js/pages/dashboard.js") }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset("admin_source/dist/js/demo.js") }}></script>
<!-- AdminLTE App -->
<script src={{ asset("admin_source/dist/js/adminlte.min.js") }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset("admin_source/dist/js/demo.js") }}></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
  })
</script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
</body>
</html>
