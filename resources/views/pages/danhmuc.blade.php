@extends('welcome')
@section('content')



<div class="col-lg-12" style="padding-left:0px;padding-right:0px;">
	
		<div class="col-lg-2" style="padding-left:0px;padding-right:0px;background: #0653cd;  min-height: 700px; box-shadow: 2px 2px 12px #7a7a7a;">
			
			<div style="    background: #FFF; margin: 15px 10px;  border: 1px solid #00307a;">
				
				<!-- <div style="padding: 7px; font-size: 13px; background: #ff9400; color: #FFF; font-weight: bold;border-bottom: 2px solid #c20000;">
					<select name="listcat" onchange="catchange();" id="select-bai" class="dropdown" style="width: 100%; background: #ff9400; padding: 7px 5px;    font-family: tahoma;">
                        @foreach($category as $key => $cate)
					  		<option value="" selected >{{$cate->title}}</option>
                        @endforeach
					</select>
				</div> -->
				<div style="padding:5px 10px;">
                @foreach($category_post as $key => $p)
					<ul style="list-style-type: decimal; padding: 7px 15px; font-size: 13px;">
                        			
						<li style="border-bottom: 1px solid #006bba; padding-bottom: 7px;padding-top: 12px;">
							<a href="">{{$p->title}}</a>
						</li>
												
					</ul>
                    <p>{!!$p->noidung!!}</p>
                @endforeach
				</div>
			</div>
			

            


        
			
		</div>
</div>
@endsection