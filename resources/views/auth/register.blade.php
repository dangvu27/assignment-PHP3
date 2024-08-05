@extends('auth.layouts.master')

@section('title1')
    Đăng ký
@endsection

@section('content1')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="limiter">
    <div class="container-login100" style="background-image: url('auth/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form" method="post" action="{{route('register')}}">
                @csrf
                <span class="login100-form-title p-b-49">
                    Đăng ký
                </span>

                <div class="wrap-input100 m-b-23">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" placeholder="Nhập email">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 m-b-23">
                    <span class="label-input100">Mật khẩu</span>
                    <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="wrap-input100 m-b-23">
                    <span class="label-input100">Xác nhận mật khẩu</span>
                    <input class="input100" type="password" name="password_confirmation" placeholder="Nhập mật khẩu">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Đăng ký
                        </button>
                    </div>
                </div>

                <div class="flex-col-c p-t-155">
                    <span class="txt1 p-b-17">
                        Bạn có tài khoản?
                    </span>

                    <a href="{{route('login')}}" class="txt2">
                        Đăng nhập
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection