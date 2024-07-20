@php
use App\Models\Category;
$categories = (new Category)->Category();
use App\Models\Article;
$topView3 = (new Article)->topView3();
@endphp

<div class="bg2 p-t-40 p-b-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-b-20">
                <div class="size-h-3 flex-s-c">
                    <a href="index.html">
                        <img class="max-s-full" src="/client/images/icons/logo-02.png" alt="LOGO">
                    </a>
                </div>

                <div>
                    <p class="f1-s-1 cl11 p-b-16">
                    Chào mừng bạn đến với MagNew, điểm đến lý tưởng cho những thông tin và dịch vụ chất lượng trong mọi lĩnh vực. 
                    Chúng tôi cung cấp các bài viết cập nhật liên tục, cùng với các dịch vụ hỗ trợ tận tâm. 
                    Tại MagNew, sự hài lòng của bạn là ưu tiên hàng đầu của chúng tôi. 
                    Khám phá ngay hôm nay để trải nghiệm thông tin hữu ích và dịch vụ chuyên nghiệp nhất. Cảm ơn bạn đã chọn MagNew!
                    </p>

                    <p class="f1-s-1 cl11 p-b-16">
                        Bạn có câu hỏi nào không? Hãy gọi cho chúng tôi theo số (+84) 96 716 6879
                    </p>

                    <div class="p-t-15">
                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-pinterest-p"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-vimeo-v"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 p-b-20">
                <div class="size-h-3 flex-s-c">
                    <h5 class="f1-m-7 cl0">
                        Bài viết phổ biến
                    </h5>
                </div>
                <!-- footer-articles -->
                <ul>

                    @foreach ($topView3 as $tv3)
                    <li class="flex-wr-sb-s p-b-20">
                        <a href="{{url('/article',$tv3->id)}}" class="size-w-4 wrap-pic-w hov1 trans-03">
                            <img src="{{$tv3->img}}" alt="IMG">
                        </a>

                        <div class="size-w-5">
                            <h6 class="p-b-5">
                                <a href="{{url('/article',$tv3->id)}}" class="f1-s-5 cl11 hov-cl10 trans-03">
                                {{$tv3->title}}
                                </a>
                            </h6>

                            <span class="f1-s-3 cl6">
                            {{$tv3->create_at}}
                            </span>
                        </div>
                    </li>
                    @endforeach



                    
                </ul>
            </div>

            <div class="col-sm-6 col-lg-4 p-b-20">
                <div class="size-h-3 flex-s-c">
                    <h5 class="f1-m-7 cl0">
                        Thể loại
                    </h5>
                </div>
                <!-- footer-categories -->
                <ul class="m-t--12">
                    @foreach ($categories as $key)
                    <li class="how-bor1 p-rl-5 p-tb-10">
                        <a href="{{url('/category',$key->id)}}" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                            {{$key->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="bg11">
    <div class="container size-h-4 flex-c-c p-tb-15">
        <span class="f1-s-1 cl0 txt-center">
            Copyright © 2024

            <a href="#" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template
                is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </span>
    </div>
</div>

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <span class="fas fa-angle-up"></span>
    </span>
</div>