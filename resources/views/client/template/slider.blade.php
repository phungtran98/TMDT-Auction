    @if (Request::path() == '/')
        <!-- slider -->
    <div class="tp-banner-container rev-slider-content">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
                <div class="item active">
                    <a href="{{ route('getBanner', ['idBanner'=>$banner[0]->bn_id]) }}"  style="width: 100%; height: 612px; background-size: cover;"><img src="{{ asset('upload/banner/'.$banner[0]->bn_hinhanh) }}" style="width: 100%; height: 100%;"></a>
                </div>
                {{-- @foreach ($banner as $item)
                    <div class="item">
                        <img src="{{ asset('upload/banner/'.$item->bn_hinhanh) }}" alt="Los Angeles">
                    </div>
                @endforeach --}}
                @for ($i = 1; $i < $countBanner; $i++)
                    <div class="item">
                        <a href="{{ route('getBanner', ['idBanner'=>$banner[$i]->bn_id]) }}"  style="width: 100%; height: 612px; background-size: cover;"><img src="{{ asset('upload/banner/'.$banner[$i]->bn_hinhanh) }}" style="width: 100%; height: 100%;"></a>
                    </div>
                @endfor
            </div>
          
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    <!-- / slider -->
    @else
        
    @endif