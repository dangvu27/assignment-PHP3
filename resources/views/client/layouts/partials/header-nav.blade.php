@php
use App\Models\Category;
$categories = (new Category)->Category();
@endphp

<div class="wrap-main-nav mb-3">
    <div class="main-nav">
        <!-- Menu desktop -->
        <nav class="menu-desktop">
            <a class="logo-stick" href="index.html">
                <img src="/client/images/icons/logo-01.png" alt="LOGO">
            </a>

            <ul class="main-menu">

                <a href="/">Trang chủ</a>

                @foreach ($categories as $key)
                <a href="{{url('/category',$key->id)}}">{{ $key->name }}</a>

                @endforeach

                <li>
                    <a href="#">Mở rộng</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">Giới thiệu</a></li>
                        <li><a href="contact.html">Liên hệ</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>