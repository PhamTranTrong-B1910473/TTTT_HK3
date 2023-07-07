@extends('welcome')
@section('content')


<div class="mb-3">
<h3 style="font-size: 30px;
    text-align: center;
    color: blue;
    vertical-align: text-bottom;
    margin-top: 8%;
    margin-bottom: 5%;">Bạn có câu hỏi hay muốn đóng góp cho bộ môn </h3>
<div class="mb-3">
  <label for="exampleFormControlInput" class="form-label">Nhập MSSV</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

  <label for="exampleFormControlTextarea" class="form-label">Nhập câu hỏi</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>


<div class="mb-3">
  <label for="exampleFormControlInput" class="form-label">Nhập câu trả lời 1</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput" class="form-label">Nhập câu trả lời 2</label>
  <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput" class="form-label">Nhập câu trả lời 3</label>
  <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput" class="form-label">Nhập câu trả lời 4</label>
  <input type="email" class="form-control" id="exampleFormControlInput4" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput" class="form-label">Nhập câu trả lời đúng</label>
  <input type="email" class="form-control" id="exampleFormControlInput5" placeholder="">
</div>
<div class="form-row text-center">
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Gửi</button>
    </div>
 </div>
</br>
<style>
  .form-label{
    color:#212529;
    font-weight:bold;
    font-size:15px;
    width: 60%;
    margin-left: 20%;
  }
  .form-control{
    width: 60%;
    margin-left: 20%;
  }

</style>

@endsection