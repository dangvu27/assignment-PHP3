@extends('admin.layouts.master')

@section('title2')
Tạo mới bài viết
@endsection

@section('content2')

@if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tạo mới thể loại</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Trang chủ</a></li>
                            <li class="active">Tạo mới</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <form action="{{ route('categories.store') }}" method="post" class="form-horizontal">
        @csrf
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Thể loại</strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Tên loại</label>
                                <input type="text" name="name" id="name" placeholder="Nhập tên loại"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            
            <div class="float-right mr-5">
                <button type="reset" class="btn btn-warning">Đặt lại</button>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </div>
        </div><!-- .animated -->
    </form>
</div><!-- .content -->
@endsection