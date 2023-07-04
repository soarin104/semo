$(function(){

//header
$(".header nav .gnb li").eq(3).addClass("on");

$(".next-btn").click(function() {
	var page = $(this).attr('data-page');
	var active = $(this).hasClass('active');

	console.log(active);
	$(".simulator-content").removeClass('active');

	function step(e){
		$("#simulator .simulator-wrap .step li").eq(e-2).addClass("on");
		//$("#simulator .simulator-wrap .step li").eq(e-2).siblings().removeClass("on");
	}

	if (page == 1 && active == true) {
		$(".simulation-one").addClass('active');
		$("#simulator .simulator-wrap .go-back").removeClass("on");
		step(page);
	}else{
		$("#simulator .simulator-wrap .go-back").addClass("on");
		$("#simulator .simulator-wrap .step").addClass("on");
	}

	if (page == 2 && active == true) {
		$(".simulation-two").addClass('active');
		step(page);
	} 
	if (page == 3 && active == true) {
		$(".simulation-three").addClass('active');
		step(page);
	} 
	if (page == 4 && active == true) {
		$(".simulation-four").addClass('active');
		step(page);
	} 
	if (page == 5 && active == true) {
		$(".simulation-five").addClass('active');
		step(page);
	}

});

$("#simulator .simulator-wrap .go-back").on("click",function(){
	
});

//input focus
$(".seed-form, .leverage-form").on("focusin",function(){
	$(this).addClass("on");
});

$(".seed-form, .leverage-form").on("focusout",function(){
	$(this).removeClass("on");
});

$(".exchange-btn").click(function() {
	$(".exchange-btn").removeClass("active");
	$(this).addClass('active');
	$('.next-exchange').addClass('active');
});

$("#seed").keyup(function() {
	var txt = $(this).val();
	if (txt != "" && txt != null) {
		$(".seed-next-btn").addClass('active');
	} else {
		$(".seed-next-btn").removeClass('active');
	}
});

$("#leverage").keyup(function() {
	var txt = $(this).val();
	if (txt != "" && txt != null) {
		$(".leverage-next-btn").addClass('active');
	} else {
		$(".leverage-next-btn").removeClass('active');
	}
});

$(".deal-btn").click(function() {
	$(".deal-btn").removeClass("active");
	$(this).addClass('active');
	$('.result-btn').addClass('active');
})

$(".result-btn").click(function(){
	var exchange = $(".exchange-btn.active").attr('data-exchange');
	var commission = $(".exchange-btn.active").attr('data-commission1');
	console.log(commission);
	var commission2 = $(".exchange-btn.active").attr('data-commission2');

	var seed = $("#seed").val();
	console.log(seed);
	var leverage = $("#leverage").val();
	console.log(leverage);
	var deal = $(".deal-btn.active").attr('data-val');
	console.log(deal);
	var payback = seed * deal * leverage * 0.0004 * commission* 0.99*30;
	console.log(payback);
							
	var krw = payback * 1250;
	//$("#amount-krw").html(krw);
	$("#amount-usdt").html(payback);
	$(".simulator-wrap").removeClass('active');
	$(".simulator-result-wrap").addClass('active');
	$(".simulator-result-content").addClass('active');
	setTimeout(function(){
		$(".simulator-result-content").addClass('on');
	},3000);

	//카운팅 스크립트 소스
	const counter = ($counter, max) => {
		let now = max;
				
		const handle = setInterval(() => {
			let realVal = Math.ceil(max - now).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');;
			$counter.innerHTML = realVal;
							  
			// 목표수치에 도달하면 정지
			if (now < 1) {
				clearInterval(handle);
			}
								
			// 증가되는 값이 계속하여 작아짐
			const step = now / 5;
								
			// 값을 적용시키면서 다음 차례에 영향을 끼침
			now -= step;
		}, 50);
	}
				
	//카운터함수 실행 조건
	let c_code = 0;
				
	if(c_code == 0){
		console.log("카운트함수 실행");
		c_code = 1;
		// 카운트를 적용시킬 요소
		const $counter = document.querySelector(".moneyCount");
								  
		// 목표 수치
		const max = krw;
								  
		setTimeout(function(){counter($counter, max)},3000);
	}else if(c_src < c_val){
		//console.log(c_code+"/"+c_src+"/"+c_val);
	}
});



})