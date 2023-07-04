$(function(){

//header
$(".header nav .gnb li").eq(0).addClass("on");

//visual
let v_num = 0;
let v_len = $(".visual article .inputBox .roll ul li").length-1;

setInterval(function(){
	v_num++;
	if(v_num > v_len){
		v_num = 0;
	}

	let v_h = $(".visual article .inputBox .roll ul li").height();
	let v_t = -1 * v_h * v_num;

	$(".visual article .inputBox .roll ul li").eq(v_num).addClass("on");
	$(".visual article .inputBox .roll ul li").eq(v_num).siblings().removeClass("on");

	$(".visual article .inputBox .roll ul").animate({
		top:v_t
	},600)
},4000);

$(".visual article .inputBox .selBox h4, .visual article .inputBox .selBox > img").on("click",function(){
	$(".visual article .inputBox .selBox").toggleClass("on");
	$(".visual article .inputBox .selBox").find(".valBox").stop().slideToggle("fast");
})

$(".visual article .inputBox .selBox .valBox li p").on("click",function(){
	let v_val = $(this).text();
	$(".visual article .inputBox .selBox h4").text(v_val);
	$(".visual article .inputBox .selBox").removeClass("on");
	$(".visual article .inputBox .selBox").find(".valBox").stop().slideUp("fast");
});

$(".visual article .inputBox input").on("propertychange change keyup paste input", function() {
    var currentVal = $(this).val();
    if(currentVal !== "") {
        $(".visual article .inputBox .delBtn").fadeIn("fast");
    }
});

$(".visual article .inputBox .delBtn").on("click",function(){
	$(".visual article .inputBox input").val("");
	$(this).fadeOut("fast");
})

//what
let w_num = 0;
let w_len = $(".what .inBox .profile .proImg ul li").length-1;

setInterval(function(){
	w_num++;
	if(w_num > w_len){
		w_num = 0;
	}

	$(".what .inBox .profile .proImg ul li").eq(w_num).addClass("on");
	$(".what .inBox .profile .proImg ul li").eq(w_num).siblings().removeClass("on");

	//proName
	$(".what .inBox .profile .proName li").eq(0).clone().appendTo(".what .inBox .profile .proName ul");
	$(".what .inBox .profile .proName li").eq(0).slideUp(function(){
		$(".what .inBox .profile .proName li").eq(0).remove();
	});

	//roll1
	$(".what article .rightBox .rollBox .roll1 ul li").eq(0).clone().appendTo(".what article .rightBox .rollBox .roll1 ul");
	$(".what article .rightBox .rollBox .roll1 ul li").eq(0).slideUp(function(){
		$(".what article .rightBox .rollBox .roll1 ul li").eq(0).remove();
	});

	//roll2
	$(".what article .rightBox .rollBox .roll2 li").eq(0).clone().appendTo(".what article .rightBox .rollBox .roll2 ul");
	$(".what article .rightBox .rollBox .roll2 li").eq(0).slideUp(function(){
		$(".what article .rightBox .rollBox .roll2 li").eq(0).remove();
	});

	//roll3
	$(".what article .rightBox .rollBox .roll3 li").eq(0).clone().appendTo(".what article .rightBox .rollBox .roll3 ul");
	$(".what article .rightBox .rollBox .roll3 li").eq(0).slideUp(function(){
		$(".what article .rightBox .rollBox .roll3 li").eq(0).remove();
	});

	//roll3
	$(".what article .roll4 li").eq(0).clone().appendTo(".what article .roll4 ul");
	$(".what article .roll4 li").eq(0).slideUp(function(){
		$(".what article .roll4 li").eq(0).remove();
	});
},4000);

//why
/*
$(window).scroll(function(){
	let whyspace = $(".header").innerHeight() + ($(".why").innerHeight() - $(".why").height())/2;
	let whyscr = $(window).scrollTop();
	let whytop = new Array();
	let whylen = $(".why .rightBox .inBox").length - 1;

	for(i=0;i<=whylen;i++){
		whytop[i] = $(".why .rightBox .inBox").eq(i).offset().top - whyspace;
	}

	//console.log($(".header").innerHeight() +"/"+ $(".why").innerHeight() +"/"+ $(".why").height());
	
	if(whyscr >= whytop[0] && whyscr <= whytop[1]){
		$(".why .leftBox ul li").eq(0).addClass("on");
		$(".why .leftBox ul li").eq(0).siblings().removeClass("on");
	}
	else if(whyscr >= whytop[1] && whyscr <= whytop[2]){
		$(".why .leftBox ul li").eq(1).addClass("on");
		$(".why .leftBox ul li").eq(1).siblings().removeClass("on");
	}
	else if(whyscr >= whytop[2] && whyscr <= whytop[3]){
		$(".why .leftBox ul li").eq(2).addClass("on");
		$(".why .leftBox ul li").eq(2).siblings().removeClass("on");
	}
	else if(whyscr > whytop[3]){
		$(".why .leftBox ul li").eq(3).addClass("on");
		$(".why .leftBox ul li").eq(3).siblings().removeClass("on");
	}
});

$(".why .leftBox ul li").on("click",function(){
	let whyidx = $(this).index();

	let whygo = $(".why .rightBox .inBox").eq(whyidx).offset().top;
	let whyspace = $(".header").innerHeight() + ($(".why").innerHeight() - $(".why").height())/2;

	$("html, body").animate({
		scrollTop:whygo - 150
	},1000)
});
*/

$(".why .leftBox ul li").on("click",function(){
	let whyidx = $(this).index();
	let whyhei = $(".why .rightBox .inBox").innerHeight();
	let whyval = -1*whyidx*whyhei

	$(this).siblings().removeClass("on");
	$(this).addClass("on");

	$(".why .rightBox .inBox").eq(whyidx).addClass("on");
	$(".why .rightBox .inBox").eq(whyidx).siblings().removeClass("on");

	$(".why .rightBox ul").stop().animate({
		top:whyval
	})
});

//newRecommend
$(".newRecommend article").slick({
	autoplay: false,
	autoplaySpeed: 5000,
	speed: 1000,
	arrows: true,
	dots: true,
})

//faqBox
$(".faqBox ul li").on("click",function(){
	$(this).toggleClass("on");
	$(this).siblings().removeClass("on");

	$(this).find("p").stop().slideToggle();
	$(this).siblings().find("p").stop().slideUp();
});



})