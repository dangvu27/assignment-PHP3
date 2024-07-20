@extends('client.layouts.master')
@section('title')
Trang chủ
@endsection
@section('content')
<!-- Feature post  $featurePost-->
<!-- <section class="bg0">
        <div class="container">
            <div class="row m-rl--1">
                <div class="col-md-6 p-rl-1 p-b-2">
                    <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(/client/images/post-01.jpg);">
                        <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                
                            </a>

                            <h3 class="how1-child2 m-t-14 m-b-10">
                                <a href="blog-detail-01.html" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                    Microsoft quisque at ipsum vel orci eleifend ultrices
                                </a>
                            </h3>

                            <span class="how1-child2">
                                <span class="f1-s-4 cl11">
                                    Jack Sims
                                </span>

                                <span class="f1-s-3 cl11 m-rl-3">
                                    -
                                </span>

                                <span class="f1-s-3 cl11">
                                    Feb 16
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 p-rl-1">
                    <div class="row m-rl--1">
                        <div class="col-12 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(/client/images/post-02.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                    <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Culture
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                            London ipsum dolor sit amet, consectetur adipiscing elit.
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(/client/images/post-03.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Life Style
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            Pellentesque dui nibh, pellen-tesque ut dapibus ut
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(/client/images/post-04.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Sport
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            Motobike Vestibulum vene-natis purus nec nibh volutpat
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<!-- Post -->
<section class="bg0 p-t-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="p-b-20">
                    <!-- Thoi su -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl14 tab01-title">
                                Thời sự
                            </h3>

                            <!-- Nav tabs -->
                            <!-- <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab3-1" role="tab">All</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-2" role="tab">Hotels</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-3" role="tab">Flight</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-4" role="tab">Beachs</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-5" role="tab">Culture</a>
                                    </li>

                                    <li class="nav-item-more dropdown dis-none">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>

                                        <ul class="dropdown-menu">

                                        </ul>
                                    </li>
                                </ul>
                                <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                    View all
                                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                </a> -->
                        </div>


                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="m-b-30">
                                            <a href="{{url('/article',$thoiSu[0]->id)}}" class="wrap-pic-w hov1 trans-03">

                                                <img src="{{$thoiSu[0]->img}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('/article',$thoiSu[0]->id)}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        {{$thoiSu[0]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        @foreach ($authorName as $tg)
                                                        @if ($thoiSu[0]->author_id == $tg->id)
                                                        {{$tg->name}}
                                                        @endif
                                                        @endforeach
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$thoiSu[0]->created_at}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        @for ($i = 1; $i < 4; $i++) <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('/article',$thoiSu[$i]->id)}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$thoiSu[$i]->img}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('/article',$thoiSu[$i]->id)}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$thoiSu[$i]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        @foreach ($authorName as $tg)
                                                        @if ($thoiSu[$i]->author_id == $tg->id)
                                                        {{$tg->name}}
                                                        @endif
                                                        @endforeach
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$thoiSu[$i]->created_at}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        @endfor

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- The thao -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl14 tab01-title">
                                Thể thao
                            </h3>

                            <!-- Nav tabs -->
                            <!-- <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab3-1" role="tab">All</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-2" role="tab">Hotels</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-3" role="tab">Flight</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-4" role="tab">Beachs</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-5" role="tab">Culture</a>
                                    </li>

                                    <li class="nav-item-more dropdown dis-none">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>

                                        <ul class="dropdown-menu">

                                        </ul>
                                    </li>
                                </ul>
                                <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                    View all
                                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                </a> -->
                        </div>


                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="m-b-30">
                                            <a href="{{url('/article',$theThao[0]->id)}}" class="wrap-pic-w hov1 trans-03">

                                                <img src="{{$theThao[0]->img}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('/article',$theThao[0]->id)}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        {{$theThao[0]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        @foreach ($authorName as $tg)
                                                        @if ($theThao[0]->author_id == $tg->id)
                                                        {{$tg->name}}
                                                        @endif
                                                        @endforeach
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$theThao[0]->created_at}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        @for ($i = 1; $i < 4; $i++) <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('/article',$theThao[$i]->id)}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$theThao[$i]->img}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('/article',$theThao[$i]->id)}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$theThao[$i]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        @foreach ($authorName as $tg)
                                                        @if ($theThao[$i]->author_id == $tg->id)
                                                        {{$tg->name}}
                                                        @endif
                                                        @endforeach
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$theThao[$i]->created_at}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        @endfor

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doi song -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl14 tab01-title">
                                Đời sống
                            </h3>

                            <!-- Nav tabs -->
                            <!-- <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab3-1" role="tab">All</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-2" role="tab">Hotels</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-3" role="tab">Flight</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-4" role="tab">Beachs</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3-5" role="tab">Culture</a>
                                    </li>

                                    <li class="nav-item-more dropdown dis-none">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>

                                        <ul class="dropdown-menu">

                                        </ul>
                                    </li>
                                </ul>
                                <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                    View all
                                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                </a> -->
                        </div>


                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="m-b-30">
                                            <a href="{{url('/article',$doiSong[0]->id)}}" class="wrap-pic-w hov1 trans-03">

                                                <img src="{{$doiSong[0]->img}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('/article',$doiSong[0]->id)}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        {{$doiSong[0]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        @foreach ($authorName as $tg)
                                                        @if ($doiSong[0]->author_id == $tg->id)
                                                        {{$tg->name}}
                                                        @endif
                                                        @endforeach
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$doiSong[0]->created_at}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        @for ($i = 1; $i < 4; $i++) <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('/article',$doiSong[$i]->id)}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$doiSong[$i]->img}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('/article',$doiSong[$i]->id)}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$doiSong[$i]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        @foreach ($authorName as $tg)
                                                        @if ($doiSong[$i]->author_id == $tg->id)
                                                        {{$tg->name}}
                                                        @endif
                                                        @endforeach
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$doiSong[$i]->created_at}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        @endfor

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-10 col-lg-4">
                <div class="p-l-10 p-rl-0-sr991 p-b-20">
                    <!--  -->
                    <div>
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Phổ biến nhất
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            <!-- pho bien nhat 5 cai -->

                            @foreach ($topView5 as $key => $tv5)
                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                {{$key+1}}
                                </div>

                                <a href="{{url('/article',$tv5->id)}}" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    {{$tv5->title}}
                                </a>
                            </li>
                            @endforeach


                            
                        </ul>
                    </div>

                <!--  -->


                <!-- lu -->

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest -->
<section class="bg0 p-t-60 p-b-35">
    <div class="container">
        <div class="row flex">
            <div class="col-md-10 col-lg-8 p-b-20">
                <div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
                    <h3 class="f1-m-2 cl3 tab01-title">
                        Bài viết mới nhất
                    </h3>
                </div>

                <div class="row p-t-35">
                    <!-- Item latest 6 cai-->
                    @foreach ($newPost as $key)
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">

                        <div class="m-b-45">
                            <a href="#" class="wrap-pic-w hov1 trans-03">
                                <img src="{{$key->img}}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="#" class="f1-m-3 cl2 hov-cl10 trans-03">
                                    {{$key->title}}
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by @foreach ($authorName as $tg)
                                            @if ($key->author_id == $tg->id)
                                                {{$tg->name}}
                                            @endif
                                        @endforeach
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                    {{$key->created_at}}
                                    </span>
                                </span>
                            </div>
                        </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection