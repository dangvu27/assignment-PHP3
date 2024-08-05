@extends('admin.layouts.master')

@section('title2')
Cập nhật bài viết
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
                        <h1>Cập nhật bài viết</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Trang chủ</a></li>
                            <li class="active">Cập nhật</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <form action="{{ route('articles.update', $article) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        @method('PUT')
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
                                    class="form-control" value="{{$article->title}}">
                            </div>
                            <div class="form-floating">
                                <label class="form-control-label">Nội dung</label>
                                <textarea class="form-control" name="content" placeholder="Nhập nội dung"
                                    style="height: 300px">{{$article->content}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header"><strong>Thông tin</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Tác giả</label>
                                <input type="text" name="title" id="title" placeholder="Nhập tiêu đề"
                                    class="form-control" value="{{$article->author->name}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-control-label">Thể loại</label>
                                <input type="text" name="title" id="title" placeholder="Nhập tiêu đề"
                                    class="form-control" value="{{$article->category->name}}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="float-right mr-5">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </div><!-- .animated -->
    </form>
</div><!-- .content -->
@endsection