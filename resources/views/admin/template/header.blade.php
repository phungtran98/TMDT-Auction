<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trang quản lý</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('front-end/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('front-end/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('front-end/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('front-end/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('front-end/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('front-end/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('front-end/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('front-end/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- JavaScript -->
  <!-- jQuery -->
  <script src="{{ asset('front-end/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('front-end/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('front-end/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('front-end/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('front-end/plugins/sparklines/sparkline.js') }}"></script>
  {{-- <!-- JQVMap -->
  <script src="{{ asset('front-end/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('front-end/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('front-end/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('front-end/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('front-end/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('front-end/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset('front-end/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('front-end/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('front-end/dist/js/adminlte.js') }}"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  {{-- <script src="{{ asset('front-end/dist/js/pages/dashboard.js') }}"></script> --}}
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('front-end/dist/js/demo.js') }}"></script>




  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .checked {
      color: orange;
    }
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
    #rating{border:none;float:left;}
    #rating>input{display:none;}/*ẩn input radio - vì chúng ta đã có label là GUI*/
    #rating>label:before{margin:5px;font-size:1.25em;font-family:FontAwesome;display:inline-block;content:"\f005";}/*1 ngôi sao*/
    #rating>.half:before{content:"\f089";position:absolute;}/*0.5 ngôi sao*/
    #rating>label{color:#ddd;float:right;}/*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
    /*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
    #rating>input:checked~label,
    #rating:not(:checked)>label:hover, 
    #rating:not(:checked)>label:hover~label{color:#FFD700;}
    /* Hover vào các sao phía trước ngôi sao đã chọn*/
    #rating>input:checked+label:hover,
    #rating>input:checked~label:hover,
    #rating>label:hover~input:checked~label,
    #rating>input:checked~label:hover~label{color:#FFED85;}

    .zoomA {
        width: 100px;
        height: auto;
        /* ease | ease-in | ease-out | linear */
        transition: transform ease-in-out 0.3s;
      }
      .zoomA:hover {
        transform: scale(5.5);
      }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">