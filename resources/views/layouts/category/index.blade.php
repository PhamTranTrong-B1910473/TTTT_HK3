@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh Mục Giảng Dạy
                    <a href="{{url('/home')}}">Back</a>
                </div>
                
                
                <div class="card-body">
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

                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Quản lý</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                            @foreach($category as $categories )
                            @php
                                $i++;
                            @endphp
                            <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$categories->title}}</td>
                            <td>
                                <form action="{{route('category.destroy',[$categories->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger mb-2 btn-sm" type="submit" value="Delete"/>
                                </form>

                                
                                <a class="btn btn-warning btn-sm" href="{{route('category.edit',[$categories->id])}}">Edit</a>
                                
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
@endsection
