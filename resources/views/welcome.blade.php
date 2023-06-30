<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Khoa Khoa Học Cơ Bản - CTUMP</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/logo/favicon.ico')}}" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/LineIcons.2.0.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/main.css')}}" />

	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/> -->


</head>

<body>

    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Toolbar Start -->
        <div class="toolbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                        <!-- <div class="toolbar-social">
                            <ul>
                                <li><span class="title">Theo Dõi Tại : </span></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="toolbar-login">
                            <div class="button">
                                <a href="registration.html">Tạo Tài Khoản</a>
                                <a href="login.html" class="btn">Đăng Nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                <div class="nav-inner">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{url('/')}}">
							<img src="{{url('images/logo/banner_left.png')}}" class="hidden-xs" width="100%" height="auto" style="width:420px; padding:5px;" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item"><a class="active" href="{{url('/')}}">Home</a></li>
                                <li class="nav-item"><a href="javascript:void(0)">Mục Tiêu</a></li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                        data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">Bài Giảng</a>
                                    <ul class="sub-menu collapse" id="submenu-1-4">
                                        <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="javascript:void(0)">Trắc Nghiệm</a></li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                        data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">Khảo sát ý kiến</a>
                                    <ul class="sub-menu collapse" id="submenu-1-4">
                                        <li class="nav-item"><a href="{{url('/bai-viet/1')}}">Sinh viên</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                        data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">Thực Tập</a>
                                    <ul class="sub-menu collapse" id="submenu-1-4">
                                        <li class="nav-item"><a href="https://htql.ctump.edu.vn/ctump/diemdanh/login.php">Điểm Danh</a></li>
										<li class="nav-item"><a href="https://padlet.com/ttbphuong/l-p-yb-k47-58f2cssywbe8jnvk">Video</a></li>
										<li class="nav-item"><a href="https://docs.google.com/forms/d/e/1FAIpQLSc4n2T182QG7yJXTcQH8U13FytG1FCj2WDpshDOLXfFPpN2fg/viewform?gxids=7757">Đăng Ký Đổi Buổi</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="http://www.ctump.edu.vn/"  ><span>CTUMP</span></a></li>
                            </ul>
                            <!-- <form class="d-flex search-form">
                                <input class="form-control me-2" type="search" placeholder="Search..."
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><i
                                        class="lni lni-search-alt"></i></button>
                            </form> -->
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

	@include('pages.slide')
    
    @yield('content')

 <!-- Start Footer Area -->
 <footer class="footer">
        <!-- Start Middle Top -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="f-about single-footer">
                            <div class="logo">
                                <a href="index.html"><img src="{{url('images/logo/banner_left.png')}}" alt="Logo"></a>
                            </div>
                            <p>Muốn đi nhanh hãy đi một mình muốn đi xa hãy đi cùng nhau</p>
                            <p>Khi bạn lười thì người khác đang nổ lực</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/dhydct.ctump.edu.vn"><i class="lni lni-facebook-original"></i></a></li>
                                    <!-- <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li> -->
                                    <!-- <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li> -->
                                    <li><a href="https://www.youtube.com/truongdaihocyduocct"><i class="lni lni-youtube"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer sm-custom-border recent-blog">
                            <h3>Tin Mới Nhất</h3>
                            <ul>
                                <li>
                                    <a href="blog-single-sidebar.html"><img src="{{url('images/blog/footer-news1.jpg')}}" alt="#">
                                        Top 10 cuốn sách học tin học văn phòng 
                                    </a>
                                    <span class="date"><i class="lni lni-calendar"></i>July 15, 2023</span>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/playlist?list=PLOaJumKVh8BNmQC9YnGbSCpQ7bChfYFDW"><img src="{{url('images/blog/footer-news2.jpg')}}" alt="#">
                                        Cải Thiện Kiến Thức Tin Học Của Bạn

                                    </a>
                                    <span class="date"><i class="lni lni-calendar"></i>July 1, 2023</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer sm-custom-border f-link">
                            <h3>Khoá Học</h3>
                            <ul>
                                <li><a href="javascript:void(0)">Hệ Thống Thông Tin</a></li>
                                <li><a href="javascript:void(0)">Cấu Trúc Tổng Quan Hệ Thống MT</a></li>
                                <li><a href="javascript:void(0)">Hệ Điều Hành Windows</a></li>
                                <li><a href="javascript:void(0)">Internet</a></li>
                                <li><a href="javascript:void(0)">Microsoft Word</a></li>
                                <li><a href="javascript:void(0)">Microsoft Excel</a></li>
                                <li><a href="javascript:void(0)">Microsoft Powerpoint</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer footer-newsletter">
                            <h3>Bản Tin</h3>
                            <p>Theo dõi bộ môn Tin Học trên các kênh truyền thông để cập nhật tin tức mới nhất</p>
                    </br>
                           <p> "Tin học - Khám phá sức mạnh số hóa, tạo nên tương lai sáng tạo."</p>
                            <!-- <form action="mail/mail.php" method="get" target="_blank" class="newsletter-form">
                                <input name="EMAIL" placeholder="Địa chỉ email của bạn" class="common-input"
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Your email address'" required="" type="email">
                                <div class="button">
                                    <button class="btn">Đăng kí ngay</button>
                                </div>
                            </form> -->
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Middle -->
        <!-- Start Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-12">
								<div>
									<p><i class="fa-sharp fa-regular fa-location-dot"></i> Số 179, đường Nguyễn Văn Cừ, P. An Khánh, Q. Ninh Kiều, TP. Cần Thơ</p>
								</div>
								<div>
									<p>Email: bmtinhoc@ctump.edu.vn</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        <!-- End Footer Middle -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{url('/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/js/count-up.min.js')}}"></script>
    <script src="{{url('/js/wow.min.js')}}"></script>
    <script src="{{url('/js/tiny-slider.js')}}"></script>
    <script src="{{url('/js/glightbox.min.js')}}"></script>
    <script src="{{url('/js/main.js')}}"></script>
    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            items: 1,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
        });
        //====== Clients Logo Slider
        tns({
            container: '.client-logo-carousel',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 4,
                },
                1170: {
                    items: 6,
                }
            }
        });
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
</body>

</html>