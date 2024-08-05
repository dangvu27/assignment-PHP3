@extends('admin.layouts.master')

@section('title2')
Danh sách bài viết
@endsection

@section('content2')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Danh sách</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Trang chủ</a></li>
                            <li class="active">Danh sách bài viết</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Danh sách bài viết</strong>
                        <a href="{{route('articles.create')}}" class="btn btn-primary float-right">Tạo mới</a>
                    </div>
                    <div class="card-body">
                        <table  class="table ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Thông tin</th>
                                    <th>Bình luận</th>
                                    <th>Lượt xem</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $key => $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>
                                        <ul>
                                            <li><b>Tiêu đề: </b>{{ $article->title }}</li>
                                            <li><b>Tác giả: </b>{{ $article->author->name }}</li>
                                            <li><b>Thể loại: </b>{{ $article->category->name }}</li>
                                            <li><b>Ảnh: </b><img width="100px" src="{{$article->img}}"></li>
                                        </ul>
                                    </td>
                                    <td>{{ $article->comments_count }}</td>
                                    <td>{{ $article->view }}</td>
                                    <td>{{ $article->created_at }}</td>
                                    <td>{{ $article->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning mt-3">Cập nhật</a>
                                        <form action="{{ route('articles.destroy',$article) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Bạn có muốn xóa')"
                                                class="btn btn-danger mt-3">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection