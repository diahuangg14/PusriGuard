<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Dashboard</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">

<link rel="stylesheet" href="/dist/css/adminlte.min.css?v=3.2.0">

<link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
</li>

</ul>

<ul class="navbar-nav ml-auto">



<li class="nav-item">
<a class="nav-link"  href="/#" role="button">
<i class="fas fa-sign-out-alt"></i>
</a>
</li>
</ul>
</nav>


@include('dashboard.partials.sidebar')

<div class="modal fade" id="modal-default4">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="post" enctype="multipart/form-data" action="/new-project">
        @csrf
          <div class="card-body">
          <div class="form-group">
              <label for="exampleInputNo">new project</label>
              <input type="No" class="form-control" name="project" id="exampleInputNewproject">
           
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">add new project</button>
            </div>
          </div>
          <!-- /.card-body -->

         
        </form>
      </div>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

</div>



<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Dashboard</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
</ol>
</div>
</div>
</div>
</div>


<section class="content">
<div class="container-fluid">

@yield('container')

</div>
</section>

</div>

<footer class="main-footer">
<strong>Copyright &copy; Departemen TI Pusri <a href="https://www.pusri.co.id">PT Pusri</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 3.2.0
</div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>



<script src="/plugins/jquery/jquery.min.js"></script>

<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/plugins/chart.js/Chart.min.js"></script>

<script src="/plugins/sparklines/sparkline.js"></script>

<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>

<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="/plugins/summernote/summernote-bs4.min.js"></script>

<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="/dist/js/adminlte.js?v=3.2.0"></script>

<script src="/dist/js/demo.js"></script>

<script src="/dist/js/pages/dashboard.js"></script>
<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>




<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   
@if (session()->has('success'))
<script>
    toastr.success("{{ session('success') }}");
</script>
@elseif (session()->has('error'))
<script>
    toastr.error("{{ session('error') }}");
</script>
@elseif (session()->has('info'))
<script>
    toastr.warning("{{ session('info') }}");
</script>
@endif

<!-- jQuery Knob -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>

<script>
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
    var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
    var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })

    sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
    sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
    sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

  })

</script>
</body>
</html>

</body>
</html>