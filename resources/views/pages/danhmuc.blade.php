@extends('welcome')
@section('content')


<h2>Bài Giảng</h2>

<div style="background: #0d6efd; margin: 10px 10px;  border: 1px solid #00307a;">
<div class="container">
  </div>
  <div class="row">
  @foreach($category_post as $key => $p)
  
    <div class="col-sm-3" style="background-color:#f9fafb;margin-top:5px;margin-bottom:5px;"><a style="color:black;" href="">{{$p->title}}</a></div>
    
    <div class="col-sm-9" style="background-color:#E0FFFF; color:black; margin-top:5px;margin-bottom:5px;"><p>{!!$p->noidung!!}</p></div>
	@endforeach
  </div>
</div>
</div>
@endsection



