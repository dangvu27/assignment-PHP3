<div class="topbar">
    <div class="content-topbar container h-100">
        <div class="left-topbar">
            @guest
                <a href="{{ route('login') }}" class="left-topbar-item">
                    Đăng nhập
                </a>
                <a href="{{ route('register') }}" class="left-topbar-item">
                    Đăng ký
                </a>
            @else
                <div class="left-topbar-item">
                    <a href="{{route('admin.dashboard')}}">Chào, {{ Auth::user()->email }}</a>
                </div>

                <a href="{{ route('logout') }}" class="left-topbar-item"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Đăng xuất
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="get" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>

        <div class="right-topbar">
            <a href="#">
                <span class="fab fa-facebook-f"></span>
            </a>

            <a href="#">
                <span class="fab fa-twitter"></span>
            </a>

            <a href="#">
                <span class="fab fa-pinterest-p"></span>
            </a>

            <a href="#">
                <span class="fab fa-vimeo-v"></span>
            </a>

            <a href="#">
                <span class="fab fa-youtube"></span>
            </a>
        </div>
    </div>
</div>