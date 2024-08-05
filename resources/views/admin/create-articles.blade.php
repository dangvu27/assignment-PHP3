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
                        <h1>Tạo mới bài viết</h1>
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
    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Bài viết</strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Tiêu đề</label>
                                <input type="text" name="title" id="title" placeholder="Nhập tiêu đề"
                                    class="form-control">
                            </div>
                            <div>
                                <label class="form-control-label">Ảnh</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Tải lên</label>
                                    <input type="file" name="image" class="form-control" id="inputGroupFile01">
                                </div>
                            </div>
                            <div class="form-floating">
                                <label class="form-control-label">Nội dung</label>
                                <textarea class="form-control" name="content" placeholder="Nhập nội dung"
                                    style="height: 300px"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header"><strong>Thông tin</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="options_category" class="form-control-label">Thể loại</label>
                                <select class="mb-3 form-control" id="options_category" name="options_category"
                                    onchange="checkSelectCategory(this.value)">
                                    <option selected>Chọn thể loại</option>
                                    <option value="other">Khác</option>
                                    @foreach ($categories as $key => $categorie)
                                        <option value="{{ $key + 1 }}">{{ $categorie }}</option>
                                    @endforeach
                                </select>
                                <div id="customInputCategory" style="display: none;" class="form-control-label">
                                    <label for="customValueCategory">Thể loại:</label>
                                    <input type="text" id="customValueCategory" name="customValueCategory"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="options_author" class="form-control-label">Tác giả</label>
                                <select class="mb-3 form-control" id="options_author" name="options_author"
                                    onchange="checkSelectAuthor(this.value)">
                                    <option selected>Chọn tác giả</option>
                                    <option value="other">Khác</option>
                                    @foreach ($authors as $key => $author)
                                        <option value="{{ $key + 1 }}">{{ $author }}</option>
                                    @endforeach
                                </select>
                                <div id="customInputAuthor" style="display: none;" class="form-control-label">
                                    <label for="customValueAuthor">Tác giả:</label>
                                    <input type="text" id="customValueAuthor" name="customValueAuthor"
                                        class="form-control">
                                </div>
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