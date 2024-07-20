<div class="wrap-logo container">
    <!-- Logo desktop -->
    <div class="logo">
        <a href="/"><img src="/client/images/icons/logo-01.png" alt="LOGO"></a>
    </div>

    <!-- <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
        <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Tìm kiếm">
        <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03" type="submit">
            <i class="zmdi zmdi-search"></i>
        </button>
    </div> -->

    <form action="/search" method="GET">
        <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
            <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Tìm kiếm" value="{{ request('search') }}">
            <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03" type="submit">
                <i class="zmdi zmdi-search"></i>
            </button>
        </div>
    </form>
</div>