@extends('admin.template.master')
@section('content')

<section class="content">
   {{-- {{ (\Auth::guard('nhanvien')->user()->load('quyen')->quyen->q_ten) }} --}}
   <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-4">
          @if (Auth::guard('nhanvien')->user()->q_id == 1)
          <h1>Thông báo nhanh</h1>
          @else
           <h1>Xin chào bạn, {{ Auth::guard('nhanvien')->user()->nv_ten }}</h1>
          @endif
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            {{-- <li class="breadcrumb-item"><a href="#">Trang chủ</a></li> --}}
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  @if (Auth::guard('nhanvien')->user()->q_id == 1)
   <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-olive"><i class="fas fa-money-bill-wave"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Tổng doanh thu</span>
          <span class="info-box-number">{{ number_format($countTT) }} VND </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fas fa-pause"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">ĐH chưa duyệt</span>
          <span class="info-box-number">{{$countDHCD}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>


    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blue"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Khách hàng</span>
          <span class="info-box-number">{{$countKH}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-purple"><i class="ion ion-ios-cart-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">SP bán trong tháng</span>
        <span class="info-box-number">{{$countSP}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </div>
  @else

  @endif
  @if (Auth::guard('nhanvien')->user()->q_id == 1)
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Biểu đồ lượt truy cập</h3>
                    
                  </div>
                </div>
                <div class="card-body">
                  

                  <div class="position-relative mb-4">
                    <canvas id="visitors-chart" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> Lượt truy cập
                    </span>

                    <span>
                      <i class="fas fa-square text-gray"></i> Trang truy cập
                    </span>
                  </div>
                </div>
        </div>
              <!-- /.card -->   
      </div>
            <!-- /.col-md-6 -->

      <div class="col-lg-12">
        <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Lượt truy cập trong tháng</h3>
                
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Địa chỉ</th>
                    <th>Lượt truy cập</th>
                  </tr>
                  </thead>
                  <tbody>
                  {{-- @foreach($data['fetchTopReferrers'] as $key=>$item)
                  <tr>
                    <td>
                      {{$key+1}}
                    </td>
                  <td id="khongxacdinh">{{ $item["url"] }}</td>
                    <td>
                      {{ $item["pageViews"] }}
                    </td>
                  
                  </tr>
                  @endforeach --}}
                  
                  </tbody>
                </table>
              </div>
        </div>
      </div>
            <!-- /.card -->
      <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
              <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Biểu đồ doanh thu trong năm
              </h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                  </button>
              </div>
          </div>
          <div class="card-body">
              <canvas id="line-chart"></canvas>
          </div>
          <!-- /.card-body-->
      </div>
      </div>
    </div>
  @else
    
  @endif
  <!-- /.row -->
  

</section>
<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script>
  $(document).ready(function () {
    $('#khongxacdinh').text('Trang thường');
  });
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164120573-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-164120573-2');
</script> --}}


{{-- <script>
  $(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true



  var $visitorsChart = $('#visitors-chart')
  var visitorsChart  = new Chart($visitorsChart, {
    data   : {
      labels  : {!! json_encode($data['date']->map(function($d){return $d->format("d/m/Y");})) !!},
      datasets: [{
        type                : 'line',
        data                : {!! json_encode($data['visitors']) !!},
        backgroundColor     : 'transparent',
        borderColor         : '#007bff',
        pointBorderColor    : '#007bff',
        pointBackgroundColor: '#007bff',
        fill                : false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
        {
          type                : 'line',
          data                : {!! json_encode($data['pageViews']) !!},
          backgroundColor     : 'tansparent',
          borderColor         : '#ced4da',
          pointBorderColor    : '#ced4da',
          pointBackgroundColor: '#ced4da',
          fill                : false
          // pointHoverBackgroundColor: '#ced4da',
          // pointHoverBorderColor    : '#ced4da'
        }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero : true,
            suggestedMax: 20
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })
  })

</script> --}}
<script>
  
  window.onload = function () {
        Chart.defaults.global.defaultFontColor = '#000000';
        Chart.defaults.global.defaultFontFamily = 'Arial';
        var lineChart = document.getElementById('line-chart');
        var myChart = new Chart(lineChart, {
            type: 'line',
            data: {
                labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"],
                datasets: [
                    {
                        label: 'Doanh thu',
                        data: [{!! $dt1 !!},{!! $dt2 !!},{!! $dt3 !!},{!! $dt4 !!},{!! $dt5 !!},{!! $dt6 !!},{!! $dt7 !!},{!! $dt8 !!},{!! $dt9 !!},{!! $dt10 !!},{!! $dt11 !!}, {!! $dt12 !!}],
                        backgroundColor: 'rgba(0, 128, 128, 0.3)',
                        borderColor: 'rgba(0, 128, 128, 0.7)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
            }
        });
    };

</script>
{{-- Thong ke doanh thu theo thang --}}

@endsection