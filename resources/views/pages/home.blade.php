    @extends('welcome')
    @section('content')
        <!-- Start About Us Area -->
        <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="about-left">
                    <div class="about-title align-left">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Giới Thiệu Về Bộ Môn Tin Học</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Chào Mừng Đến Với Bộ Môn Tin Học</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Bộ môn Tin học đã trở thành một lĩnh vực 
                                vô cùng quan trọng và phát triển mạnh mẽ trong thời đại công nghệ thông tin hiện nay. 
                                Tin học không chỉ là một bộ môn học thuật mà còn là một ngành nghề đáng chú ý với nhiều 
                                cơ hội nghề nghiệp hấp dẫn. Bằng cách sử dụng các công nghệ và phương pháp tính toán, 
                                tin học giúp chúng ta giải quyết các vấn đề phức tạp từ việc phân tích dữ liệu đến phát triển 
                                ứng dụng và hệ thống thông tin..</p>
                            <p class="qote wow fadeInUp" data-wow-delay=".8s">Tin học không chỉ cung cấp kiến thức chuyên môn 
                                mà còn phát triển kỹ năng tư duy logic, phân tích và giải quyết vấn đề. Qua việc tìm hiểu 
                                và thực hành, sinh viên được rèn luyện khả năng tạo ra các giải pháp sáng tạo và hiệu quả</p>
                                <div class="button wow fadeInUp" data-wow-delay="1s">
                                <a href="about-us.html" class="btn">Read More</a>
                                <a href="https://www.youtube.com/watch?v=RXAjuM1gGTE"
                                    class="glightbox video btn"> Play Video<i class="lni lni-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                        <img src="{{url('images/about/about-img1.png')}}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End About Us Area -->

 <!-- Start Courses Area -->
 <section class="courses section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="section-icon wow zoomIn" data-wow-delay=".4s">
                            <i class="lni lni-graduation"></i>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Các Khoá Học Nổi Bật</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Dưới đây là một số khoá học về tin học đại cương của bộ môn Tin Học.</p>
                    </div>
                </div>
            </div>
            <div class="single-head">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Course -->
                        <div class="single-course wow fadeInUp" data-wow-delay=".2s">
                            <div class="course-image">
                                <a href="course-details.html"><img src="{{url('images/courses/courses-1.jpg')}}"
                                        alt="#"></a>
                                <!-- <p class="price">$180</p> -->
                            </div>
                            <div class="content">
                                <h3 class="edit_p"><a class="edit_a" href="course-details.html">Phần 1: Hệ Thống Thông Tin</a></h3>
                                <p class="edit_p">Hệ thống thông tin là một hệ thống bao gồm các yếu tố có quan hệ với nhau cùng làm 
                                    nhiệm vụ thu thập, xử lý, lưu trữ và phân phối thông tin và dữ liệu và cung cấp một cơ chế phản hồi để đạt được một mục tiêu định trước.</p>
                            </div>
                            <!-- <div class="bottom-content">
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li>22 Reviews</li>
                                </ul>
                                <span class="tag">
                                    <i class="lni lni-tag"></i>
                                    <a href="javascript:void(0)">Programming</a>
                                </span>
                            </div> -->
                        </div>
                        <!-- End Single Course -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Course -->
                        <div class="single-course wow fadeInUp" data-wow-delay=".4s">
                            <div class="course-image">
                                <a href="course-details.html"><img src="{{url('images/courses/courses-2.jpg')}}"
                                        alt="#"></a>
                                <!-- <p class="price">$200</p> -->
                            </div>
                            <div class="content">
                                <h3 ><a class="edit_a" href="course-details.html">Phần 2: Cấu Trúc Tổng Quát Hệ Thống Máy Tính</a></h3>
                                <p class="edit_p">Tổng quan về cấu trúc máy tính, mô hình máy Turing, 
                                    nguyên lý Von Neumann, sơ đồ tổng quát của một máy tính, 
                                    nguyên lý hoạt động của máy tính</p>
                            </div>
                            <!-- <div class="bottom-content">
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li>10 Reviews</li>
                                </ul>
                                <span class="tag">
                                    <i class="lni lni-tag"></i>
                                    <a href="javascript:void(0)">Business</a>
                                </span>
                            </div> -->
                        </div>
                        <!-- End Single Course -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Course -->
                        <div class="single-course wow fadeInUp" data-wow-delay=".6s">
                            <div class="course-image">
                                <a href="course-details.html"><img src="{{url('images/courses/courses-3.jpg')}}"
                                        alt="#"></a>
                                <!-- <p class="price">Free</p> -->
                            </div>
                            <div class="content">
                                <h3><a class="edit_a" href="course-details.html">Phần 3: HĐH Windows</a></h3>
                                <p class="edit_p">Hệ điều hành Windowscó tên đầy đủ là Microsoft Windows, 
                                    hay có thể gọi đơn giản là Windows. Hệ điều hành này được phát
                                     triển và phân phối bởi “ông lớn” ngành công nghệ là Microsoft.</p>
                            </div>
                            <!-- <div class="bottom-content">
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li>55 Reviews</li>
                                </ul>
                                <span class="tag">
                                    <i class="lni lni-tag"></i>
                                    <a href="javascript:void(0)">Programming</a>
                                </span>
                            </div> -->
                        </div>
                        <!-- End Single Course -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Course -->
                        <div class="single-course wow fadeInUp" data-wow-delay=".2s">
                            <div class="course-image">
                                <a href="course-details.html"><img src="{{url('images/courses/courses-4.jpg')}}"
                                        alt="#"></a>
                                <!-- <p class="price">$299</p> -->
                            </div>
                            <div class="content">
                                <h3><a class="edit_a" href="course-details.html">Phần 4: Internet</a></h3>
                                <p class="edit_p">Internet là hệ thống thông tin toàn cầu. Với chức năng chính là truyền thông 
                                    tin theo kiểu nối chuyển gói dữ liệu dựa trên một giao thức liên mạng đã được 
                                    chuẩn hóa. Internet giúp kết nối hàng tỷ máy tính, thiết bị điện tử thông
                                     minh khác nhau.</p>
                            </div>
                            <!-- <div class="bottom-content">
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li>60 Reviews</li>
                                </ul>
                                <span class="tag">
                                    <i class="lni lni-tag"></i>
                                    <a href="javascript:void(0)">Science</a>
                                </span>
                            </div> -->
                        </div>
                        <!-- End Single Course -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Course -->
                        <div class="single-course wow fadeInUp" data-wow-delay=".4s">
                            <div class="course-image">
                                <a href="course-details.html"><img src="{{url('images/courses/courses-5.jpg')}}"
                                        alt="#"></a>
                                <!-- <p class="price">$150</p> -->
                            </div>
                            <div class="content">
                                <h3><a class="edit_a" href="course-details.html">Phần 5: Microsoft Word</a></h3>
                                <p class="edit_p">Microsoft Word, còn được biết đến với tên khác là Word, là một chương trình soạn 
                                    thảo văn bản phổ biển hiện nay của công ty phần mềm nổi tiếng Microsoft. 
                                    Nó cho phép người dùng làm việc với văn bản thô .</p>
                            </div>
                            <!-- <div class="bottom-content">
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li>25 Reviews</li>
                                </ul>
                                <span class="tag">
                                    <i class="lni lni-tag"></i>
                                    <a href="javascript:void(0)">Design</a>
                                </span>
                            </div> -->
                        </div>
                        <!-- End Single Course -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Course -->
                        <div class="single-course wow fadeInUp" data-wow-delay=".6s">
                            <div class="course-image">
                                <a href="course-details.html"><img src="{{url('images/courses/courses-6.jpg')}}"
                                        alt="#"></a>
                                <!-- <p class="price">$250</p> -->
                            </div>
                            <div class="content">
                                <h3><a class="edit_a" href="course-details.html">Phần 6: Microsoft Excel</a></h3>
                                <p class="edit_p">Microsoft Excel là một ứng dụng bảng tính thuộc bộ Microsoft Office, 
                                    công dụng chính của nó là giúp người dùng tính toán nhanh và chính xác với 
                                    số lượng dữ liệu lớn.</p>
                            </div>
                            <!-- <div class="bottom-content">
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li>35 Reviews</li>
                                </ul>
                                <span class="tag">
                                    <i class="lni lni-tag"></i>
                                    <a href="javascript:void(0)">Medical</a>
                                </span>
                            </div> -->
                        </div>
                        <!-- End Single Course -->
                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Course -->
                        <div class="single-course wow fadeInUp" data-wow-delay=".4s">
                            <div class="course-image">
                                <a href="course-details.html"><img src="{{url('images/courses/courses-7.jpg')}}"
                                        alt="#"></a>
                                <!-- <p class="price">$200</p> -->
                            </div>
                            <div class="content">
                                <h3><a class="edit_a" href="course-details.html">Phần 7: Microsoft Powerpoint</a></h3>
                                <p class="edit_p">Microsoft PowerPoint (gọi tắt là PowerPoint) là một phần mềm trình 
                                    chiếu do Microsoft phát triển.</p>
                            </div>
                            <!-- <div class="bottom-content">
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li>10 Reviews</li>
                                </ul>
                                <span class="tag">
                                    <i class="lni lni-tag"></i>
                                    <a href="javascript:void(0)">Business</a>
                                </span>
                            </div> -->
                        </div>
                        <!-- End Single Course -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Area -->

   

    

    <!-- Start Clients Area -->
    <div class="client-logo-section">
        <div class="container">
            <div class="client-logo-wrapper">
                <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                    <div class="client-logo">
                        <img src="assets/images/clients/client1.svg" alt="">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client2.svg" alt="">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client3.svg" alt="">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client4.svg" alt="">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client5.svg" alt="">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client2.svg" alt="">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client3.svg" alt="">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client4.svg" alt="">
                    </div>
                    <div class="client-logo">
                        <img src="assets/images/clients/client5.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Area -->
    @endsection