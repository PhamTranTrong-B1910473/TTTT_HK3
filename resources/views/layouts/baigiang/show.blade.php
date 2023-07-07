@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập Nhật Bài Giảng
                    <a href="{{url('/home')}}">Back</a>
                </div>


                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    @if (Session::has('failure'))
                        <div class="alert alert-danger" role="alert">
                            <p>{{ Session::get('failure') }}</p>
                        </div>
                    @endif

                    <form autocomplete="off" method="POST" action="{{route('post.update',[$post->id])}}" >
                        @method('PUT')
                        @csrf
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" value="{{$post->title}}" class="form-control" name="title" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Nội dung</label>
                            <textarea name="noidung" id="noidung_ckeditor" class="form-control"  rows="5" style="resize:none">{{$post->noidung}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Chọn danh mục bài giảng:</label>
                            <select name="category_id" class="form-select" aria-label="Default select example">
                                @foreach($category as $key => $cate)
                                <option {{ $cate->id==$post->category_id ? 'selected' : '' }} value="{{$cate->id}}">{{$cate->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
