$(function(){

//header
$(".header nav .gnb li").eq(4).addClass("on");

//faqBox
$(".faqBox ul li").on("click",function(){
	$(this).toggleClass("on");
	$(this).siblings().removeClass("on");

	$(this).find("p").stop().slideToggle();
	$(this).siblings().find("p").stop().slideUp();
});

})