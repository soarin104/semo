<!doctype html>
<html lang="ko">
<head>
	<!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" id="meta_viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10">
	<meta name="format-detection" content="telephone=no">

	<!-- seo -->
	<meta property="og:type" content="website">
	<!-- <meta property="og:url" content="https://example.com/page.html"> -->
	<meta property="og:title" content="semo">
	<meta property="og:image" content="./include/img/ogImage.png">
	<meta property="og:description" content="">
	<meta property="og:site_name" content="semo">
	<link rel="shortcut icon" type="image/x-icon" href="./include/img/favicon.ico" />
	<title>Semo</title>

	<!-- font preload -->
	<link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.7/dist/web/variable/pretendardvariable.css" />
	<style>
		body *{
			font-family: "Pretendard Variable", Pretendard, -apple-system, BlinkMacSystemFont, system-ui, Roboto, "Helvetica Neue", "Segoe UI", "Apple SD Gothic Neo", "Noto Sans KR", "Malgun Gothic", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
		}
	</style>
	<!-- e::font preload -->

	<!-- 공통 css -->
	<link rel="stylesheet" href="./include/css/reset.css">
	<link rel="stylesheet" href="./include/css/animate.css">
	<link rel="stylesheet" href="./include/css/common.css?230620">
	<!-- e::공통 css -->

	<!-- 공통 js -->
	<script src="./include/js/jquery-1.12.4.min.js"></script><!-- e::제이쿼리 라이브러리 -->
	<!-- <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
	<script>
		$(function(){
			const lenis = new Lenis()
	
			lenis.on('scroll', (e) => {
			  //console.log(e)
			})
	
			function raf(time) {
			  lenis.raf(time)
			  requestAnimationFrame(raf)
			}
	
			requestAnimationFrame(raf)
		})
	</script> --><!-- e::스크롤 부드럽게 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>
		new WOW().init();
	</script><!-- e::애니메이션 활성화 -->
	<script src="./include/js/common.js"></script>
	<!-- e::공통 js -->


	<!-- slick -->
	<link rel="stylesheet" href="./include/plug/slickSlider/slick.css">
	<link rel="stylesheet" href="./include/plug/slickSlider/slick-theme.css">
	<script src="./include/plug/slickSlider/slick.min.js"></script>
	<!-- e::slick -->
</head>
<body>
	<!-- WRAP -->
	<div id="wrap">
		<!-- HEADER -->
		<header class="header">
			<div class="inner">
				<h1 class="logo">
					<a href="./">
						<img src="./include/img/logo.png" alt="">
						<img src="./include/img/logo_on.png" alt="" class="logoOn">
					</a>
				</h1>
				<nav>
					<ul class="gnb">
						<li><a href="./">홈</a></li>
						<li><a href="./introduction.php">서비스 소개</a></li>
						<li><a href="./">전체 거래소</a></li>
						<li><a href="./payback.php">페이백테스트</a></li>
						<li><a href="./faq.php">자주묻는질문</a></li>
						<li><a href="./">실시간 시그널</a></li>
					</ul>
					<ul class="global">
						<li class="logIn"><a href="#">로그인</a></li>
						<li class="mb join"><a href="#">회원가입</a></li>
					</ul>
				</nav>
				<span class="mb menuBtn">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</div>
		</header>
		<!-- e::HEADER -->