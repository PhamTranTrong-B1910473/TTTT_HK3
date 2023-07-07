

@extends('welcome')
    @section('content')
<div class="container">
    <table  width="100%" cellSpacing="0" cellPadding="1px" align="center" border="3">
    <div style="text-align:center; padding-top: 5px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
					<div style="font-weight:bold;    font-size: 13px;">1. Thứ tự đơn vị lưu trữ thông tin theo chiều tăng dần</div>
					<div style="padding-left:20px;padding-top:10px;">
						<div style="padding:5px;"><input name="rad_cauhoi9" type="radio" value="1"  /> A. Byte, Kilobyte, Megabyte, Gigabyte, Terabyte </div>
						<div style="padding:5px;"><input name="rad_cauhoi9" type="radio" value="2"  /> B. Kilobyte, Byte, Megabyte, Terabyte, Gigabyte </div>
						
						<div style="padding:5px;"><input name="rad_cauhoi9" type="radio" value="3"  /> C. Kilobyte, Byte, Megabyte, Gigabyte, Terabyte</div>
						<div style="padding:5px;"><input name="rad_cauhoi9" type="radio" value="4"  /> D. Byte, Kilobyte, Gigabyte, Megabyte, Terabyte</div>
												
						<input name="rad_dapan9" type="text" style="display:none;" value="1"  /> 
					</div>
					<div>
						<button name="ketqua" onclick="XemKetQuaClick9()" class="btn btn-warning"> Xem kết quả </button>
					</div>
	</div>
</table>
</div>
<script type="text/javascript">
  function chuyendoi(dapan){
	var ketqua = "A";
	if(dapan==1) ketqua = "A";
	if(dapan==2) ketqua = "B";
	if(dapan==3) ketqua = "C";
	if(dapan==4) ketqua = "D";
	if(dapan==5) ketqua = "E";
	return ketqua;
  }
  function xulyketqua(rad_cauhoi, dapandung){
	var ketqua = "Sai"; 
	if(rad_cauhoi == dapandung) ketqua = "Đúng";
	alert("Câu trả lời của bạn: "+ketqua);
  }
  function XemKetQuaClick1(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi1"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan1"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	function XemKetQuaClick2(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi2"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan2"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	function XemKetQuaClick3(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi3"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan3"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	function XemKetQuaClick4(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi4"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan4"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	function XemKetQuaClick5(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi5"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan5"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	function XemKetQuaClick6(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi6"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan6"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	function XemKetQuaClick7(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi7"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan7"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	function XemKetQuaClick8(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi8"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan8"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	function XemKetQuaClick9(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi9"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan9"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	function XemKetQuaClick10(){
		var rad_cauhoi = document.querySelector('input[name="rad_cauhoi10"]:checked').value;
		var dapandung = document.querySelector('input[name="rad_dapan10"]').value;
		xulyketqua(rad_cauhoi, dapandung);
	}
	
</script>

@endsection