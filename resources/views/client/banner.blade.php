@extends('client.template.master')
@section('title')
    Trang chủ - 
@endsection
@section('content')
<div class="page_title_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="page_title">
                    <h1 style="font-family: 'Playfair Display', serif;">{{ $banner->bn_tieude }}</h1>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bredcrumb">
                    <ul>
                        <li><a href="{{ route('trangchu') }}">Trang chủ</a></li>
                        <li><a href="#">Tin tức</a></li>             
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content margin-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog_content">
                    <article class="single_blog_post">
                        
                        <div style="width:100%;">
                            {!! $banner->bn_noidung !!}
                        </div>

                        <div class="post_metas">
                            <div class="fb-like" data-href="{{ asset('') }}{{ Request::path() }}" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false">
                            </div>
                            <div class="fb-share-button" data-href="{{ asset('') }}{{ Request::path() }}" data-layout="button" data-size="large">
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                Chia sẻ</a>
                            </div>
                        </div> <!-- end of post meta -->
                        <div class="clear-fix"></div>
                    </article> <!-- end of single_blog_post -->
                    <!-- post_comments -->
                    <div class="post_comments">
                        <h2 class="comment_title"><span>Bình luận</span></h2>
                        <div class="fb-comments" data-href="{{ asset('') }}{{ Request::path() }}" data-numposts="5" data-width=""></div>
                    </div> <!-- end of post_comments -->
                </div> <!-- end of blog_content -->
            </div> <!-- end of col-md-9 -->
        </div> <!-- end of row-->
    </div>
</div>
@endsection