@extends('welcome')
@section('content')
 
<div class="container">
</br>
  <button> Mục Tiêu
  </button>

  </br>
<table width="100%" cellSpacing="0" cellPadding="0px" align="center" border="0">  

<tr>
    <th><img src="{{url('images/muctieu/muctieu.png')}}" alt="#"></th>

</tr>  
</br>
</table>
</div>
<style>
button {
  background: #0dcaf0;
  font-family: system-ui;
  padding: 0.6em 1.3em;
  font-weight: 900;
  font-size: 18px;
  border: 1px solid black;
  border-radius: 0.4em;
  box-shadow: 0.1em 0.1em;
}

button:hover {
  transform: translate(-0.05em, -0.05em);
  box-shadow: 0.15em 0.15em;
}

button:active {
  transform: translate(0.05em, 0.05em);
  box-shadow: 0.05em 0.05em;
}
</style>
@endsection
