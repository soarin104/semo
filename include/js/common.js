$(function(){

//스크롤 버튼
$(window).scroll(function(){
	let scrVal = $(window).scrollTop();
	if(scrVal > 100){
		$(".header").addClass("on");
		$(".icoScroll").fadeOut();
	}else{
		$(".header").removeClass("on");
		$(".icoScroll").fadeIn();
	}
});

//header
$(".header .menuBtn").on("click",function(){
	$(this).toggleClass("on");
	$(".header").toggleClass("open");
	$(".header nav").stop().slideToggle("fast");
});

if($(window).width() < 1000){
	$(".header nav").css({
		height:$(window).height()
	})
}

})