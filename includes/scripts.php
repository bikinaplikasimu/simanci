<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- Moment JS -->
<script src="bower_components/moment/moment.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- ChartJS Horizontal Bar -->
<script src="bower_components/chart.js/Chart.HorizontalBar.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Generate Qrcode -->
<script src="dist/js/jquery.qrcode.min.js"></script>
<!-- Scanner Qrcode -->
<!-- <script src="https://cdn.staticaly.com/gh/mauntrelio/qrcode-reader/master/dist/js/qrcode-reader.min.js?env=dev"></script>
 <link rel="stylesheet" href="https://cdn.staticaly.com/gh/mauntrelio/qrcode-reader/master/dist/css/qrcode-reader.min.css?env=dev"> -->
 <script src="dist-scan/js/qrcode-reader.min.js?v=20190604"></script>
 <link rel="stylesheet" href="dist-scan/css/qrcode-reader.css">
<script>
  
  $(function(){

    // overriding path of JS script and audio 
    // $.qrCodeReader.jsQRpath = "https://cdn.staticaly.com/gh/mauntrelio/qrcode-reader/master/dist/js/jsQR/jsQR.min.js";
    // $.qrCodeReader.beepPath = "https://cdn.staticaly.com/gh/mauntrelio/qrcode-reader/master/dist/audio/beep.mp3";
    $.qrCodeReader.jsQRpath = "dist-scan/js/jsQR/jsQR.min.js";
    $.qrCodeReader.beepPath = "dist-scan/audio/beep.mp3";
    // bind all elements of a given class
    $(".qrcode-reader").qrCodeReader();

    // bind elements by ID with specific options
    $("#openreader-multi2").qrCodeReader({multiple: true, target: "#multiple2", skipDuplicates: false});
    $("#openreader-multi3").qrCodeReader({multiple: true, target: "#multiple3"});

    // read or follow qrcode depending on the content of the target input
    $("#openreader-single2").qrCodeReader({callback: function(code) {
      if (code) {
        window.location.href = code;
      }  
    }}).off("click.qrCodeReader").on("click", function(){
      var qrcode = $("#single2").val().trim();
      if (qrcode) {
        window.location.href = qrcode;
      } else {
        $.qrCodeReader.instance.open.call(this);
      }
    });


  });

</script>

<!-- Active Script -->
<script>
$(function(){
	/** add active class and stay opened when selected */
	var url = window.location;

	// for sidebar menu entirely but not cover treeview
	$('ul.sidebar-menu a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');

	// for treeview
	$('ul.treeview-menu a').filter(function() {
	    return this.href == url;
	}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

});
</script>
<!-- Data Table Initialize -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- Date and Timepicker -->
<script>
$(function(){
  //Date picker
  $('#datepicker_add').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datepicker_edit').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  }) 
});
</script>

<!-- <script>
  //jQuery('#qrcode').qrcode("this plugin is great");
  jQuery('#qrcodeTable').qrcode({
    render  : "table",
    text  : "http://jetienne.com"
  }); 
  jQuery('#qrcodeCanvas').qrcode({
    text  : "R1G1"
  }); 
</script> -->

