@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Danh Mục Giảng Dạy
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

                    <form autocomplete="off" method="POST" action="{{route('category.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
                        </div>
                        
                        <button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
