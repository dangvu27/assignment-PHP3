<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('admin.dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Trang chủ</a>
                </li>
                <li>
                    <a href="{{ route('articles.index') }}"><i class="menu-icon fa fa-table"></i>Danh sách bài viết</a>
                </li>

                <li>
                    <a href="{{ route('categories.index') }}"><i class="menu-icon fa fa-table"></i>Danh sách loại tin</a>
                </li>

                <li>
                    <a href="{{route('logout')}}"><i class="menu-icon fa fa-sign-out"></i>Đăng xuất</a>

                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->