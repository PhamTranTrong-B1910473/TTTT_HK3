

@extends('welcome')
    @section('content')


	<button style="    margin-left: 10%"> Câu Hỏi Ôn Tập
  </button>
	<div style="background: #fff; margin: 10px 10px;  border: 1px solid #00307a;border-radius:10px">
<div class="container">
    
    <div style=" padding-top: 21px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
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

	<div style="padding-top: 5px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
					<div style="font-weight:bold;    font-size: 13px;">3. Bảng mã ASCII sử dụng bao nhiêu Bit để biểu diễn thông tin</div>
					<div style="padding-left:20px;padding-top:10px;">
						<div style="padding:5px;"><input name="rad_cauhoi3" type="radio" value="1"  /> A. 8</div>
						<div style="padding:5px;"><input name="rad_cauhoi3" type="radio" value="2"  /> B. 1</div>
						
												<div style="padding:5px;"><input name="rad_cauhoi3" type="radio" value="3"  /> C. 32</div>
												<div style="padding:5px;"><input name="rad_cauhoi3" type="radio" value="4"  /> D. 16</div>
												
						<input name="rad_dapan3" type="text" style="display:none;" value="1"  /> 
					</div>
					<div>
						<button name="ketqua" onclick="XemKetQuaClick3()" class="btn btn-warning"> Xem kết quả </button>
					</div>
				</div>
				
				
								<div style="padding-top: 10px;    color: #c07700; padding-bottom:5px;font-weight:bold;    font-size: 13px;">
									</div>
				<div style="padding-top: 5px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
					<div style="font-weight:bold;    font-size: 13px;">4. Mega Byte (MB) bằng bao nhiêu Byte?</div>
					<div style="padding-left:20px;padding-top:10px;">
						<div style="padding:5px;"><input name="rad_cauhoi4" type="radio" value="1"  /> A. 2 mũ 20</div>
						<div style="padding:5px;"><input name="rad_cauhoi4" type="radio" value="2"  /> B. 2 mũ 30</div>
						
												<div style="padding:5px;"><input name="rad_cauhoi4" type="radio" value="3"  /> C. 2 mũ 10</div>
												<div style="padding:5px;"><input name="rad_cauhoi4" type="radio" value="4"  /> D. 1000</div>
												
						<input name="rad_dapan4" type="text" style="display:none;" value="1"  /> 
					</div>
					<div>
						<button name="ketqua" onclick="XemKetQuaClick4()" class="btn btn-warning"> Xem kết quả </button>
					</div>
				</div>
				
				
								<div style="padding-top: 10px;    color: #c07700; padding-bottom:5px;font-weight:bold;    font-size: 13px;">
									</div>
				<div style="padding-top: 5px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
					<div style="font-weight:bold;    font-size: 13px;">5. Đơn vị GB dùng làm đơn vị đo</div>
					<div style="padding-left:20px;padding-top:10px;">
						<div style="padding:5px;"><input name="rad_cauhoi5" type="radio" value="1"  /> A. Độ phân giải màn hình</div>
						<div style="padding:5px;"><input name="rad_cauhoi5" type="radio" value="2"  /> B. Cường độ âm thanh</div>
						
												<div style="padding:5px;"><input name="rad_cauhoi5" type="radio" value="3"  /> C. Tốc độ xử lý</div>
												<div style="padding:5px;"><input name="rad_cauhoi5" type="radio" value="4"  /> D. Khả năng lưu trữ</div>
												
						<input name="rad_dapan5" type="text" style="display:none;" value="1"  /> 
					</div>
					<div>
						<button name="ketqua" onclick="XemKetQuaClick5()" class="btn btn-warning"> Xem kết quả </button>
					</div>
				</div>
				
				
								<div style="padding-top: 10px;    color: #c07700; padding-bottom:5px;font-weight:bold;    font-size: 13px;">
									</div>
				<div style="padding-top: 5px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
					<div style="font-weight:bold;    font-size: 13px;">6. Thông tin là</div>
					<div style="padding-left:20px;padding-top:10px;">
						<div style="padding:5px;"><input name="rad_cauhoi6" type="radio" value="1"  /> A. Tất cả những sự kiện, khái niệm mang lại cho con người hiểu biết</div>
						<div style="padding:5px;"><input name="rad_cauhoi6" type="radio" value="2"  /> B. Tin tức thu nhận được qua các phương tiện truyền thông </div>
						
												<div style="padding:5px;"><input name="rad_cauhoi6" type="radio" value="3"  /> C. Dữ liệu của máy tính</div>
												<div style="padding:5px;"><input name="rad_cauhoi6" type="radio" value="4"  /> D. Các tín hiệu vật lý</div>
												
						<input name="rad_dapan6" type="text" style="display:none;" value="1"  /> 
					</div>
					<div>
						<button name="ketqua" onclick="XemKetQuaClick6()" class="btn btn-warning"> Xem kết quả </button>
					</div>
				</div>
				
				
								<div style="padding-top: 10px;    color: #c07700; padding-bottom:5px;font-weight:bold;    font-size: 13px;">
									</div>
				<div style="padding-top: 5px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
					<div style="font-weight:bold;    font-size: 13px;">7. Dữ liệu là </div>
					<div style="padding-left:20px;padding-top:10px;">
						<div style="padding:5px;"><input name="rad_cauhoi7" type="radio" value="1"  /> A. Hình thức thể hiện của thông tin trong mục đích lưu trữ, truyền và xử lý thông tin</div>
						<div style="padding:5px;"><input name="rad_cauhoi7" type="radio" value="2"  /> B. Chính là thông tin về đối tượng được xét</div>
						
												<div style="padding:5px;"><input name="rad_cauhoi7" type="radio" value="3"  /> C. Các số liệu </div>
												<div style="padding:5px;"><input name="rad_cauhoi7" type="radio" value="4"  /> D. Mã hoá nhị phân của thông tin</div>
												
						<input name="rad_dapan7" type="text" style="display:none;" value="1"  /> 
					</div>
					<div>
						<button name="ketqua" onclick="XemKetQuaClick7()" class="btn btn-warning"> Xem kết quả </button>
					</div>
				</div>
				
				
								<div style="padding-top: 10px;    color: #c07700; padding-bottom:5px;font-weight:bold;    font-size: 13px;">
									</div>
				<div style="padding-top: 5px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
					<div style="font-weight:bold;    font-size: 13px;">8. Các bước thu nhập, xử lý, thống kê, phân tích, xuất và lưu trữ là của quá trình</div>
					<div style="padding-left:20px;padding-top:10px;">
						<div style="padding:5px;"><input name="rad_cauhoi8" type="radio" value="1"  /> A. Xử lý thông tin</div>
						<div style="padding:5px;"><input name="rad_cauhoi8" type="radio" value="2"  /> B. Xử lý dữ liệu</div>
						
												<div style="padding:5px;"><input name="rad_cauhoi8" type="radio" value="3"  /> C. Thu thông tin</div>
												<div style="padding:5px;"><input name="rad_cauhoi8" type="radio" value="4"  /> D. Xuất thông tin</div>
												
						<input name="rad_dapan8" type="text" style="display:none;" value="1"  /> 
					</div>
					<div>
						<button name="ketqua" onclick="XemKetQuaClick8()" class="btn btn-warning"> Xem kết quả </button>
					</div>
				</div>
				
				
								<div style="padding-top: 10px;    color: #c07700; padding-bottom:5px;font-weight:bold;    font-size: 13px;">
									</div>
				<div style="padding-top: 5px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
					<div style="font-weight:bold;    font-size: 13px;">9. Thứ tự đơn vị lưu trữ thông tin theo chiều tăng dần</div>
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
				
				
								<div style="padding-top: 10px;    color: #c07700; padding-bottom:5px;font-weight:bold;    font-size: 13px;">
									</div>
				<div style="padding-top: 5px;   padding-bottom:20px;    border-bottom: 1px dotted #CCC;">
					<div style="font-weight:bold;    font-size: 13px;">10. Số 15 trong hệ thập phân khi chuyển sang hệ thập lục phân sẽ có giá trị</div>
					<div style="padding-left:20px;padding-top:10px;">
						<div style="padding:5px;"><input name="rad_cauhoi10" type="radio" value="1"  /> A. F</div>
						<div style="padding:5px;"><input name="rad_cauhoi10" type="radio" value="2"  /> B. E</div>
						
												<div style="padding:5px;"><input name="rad_cauhoi10" type="radio" value="3"  /> C. 17	</div>
												<div style="padding:5px;"><input name="rad_cauhoi10" type="radio" value="4"  /> D. 15 </div>
												
						<input name="rad_dapan10" type="text" style="display:none;" value="1"  /> 
					</div>
					<div>
						<button name="ketqua" onclick="XemKetQuaClick10()" class="btn btn-warning"> Xem kết quả </button>
					</div>
				</div>

</div>
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