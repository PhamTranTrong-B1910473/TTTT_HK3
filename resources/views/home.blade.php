@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bộ Môn Tin Học</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav class="navbar navbar-expand-sm bg-light navbar-light">
                        <div class="container-fluid">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Danh mục giảng dạy</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('category.create')}}">Thêm danh mục giảng dạy</a></li>
                                    <li><a class="dropdown-item" href="{{route('category.index')}}">Liệt kê danh mục giảng dạy </a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Bài giảng</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('post.create')}}">Thêm bài giảng</a></li>
                                    <li><a class="dropdown-item" href="{{route('post.index')}}">Liệt kê bài giảng</a></li>
                                    
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
