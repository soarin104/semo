<?php include './header.php'; ?>
	<!-- 개별 css / js -->
	<!-- <script	src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	<!-- <link href="https://webfontworld.github.io/Noto/NotoSansKR.css" rel="stylesheet"> -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="./include/css/sub.css">
	<link rel="stylesheet" href="./include/css/payback.css">
	<script src="./include/js/payback.js"></script>
	<!-- e::개별 css / js -->

		<!-- contents -->
		<div id="contents">
			<!-- thethethe -->
			<div id="simulator" class="wrapper">
				<div class="simulator-wrap active">
					<ul class="step">
						<li class="on"></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
					<div class="simulator-wrapper">
						<a href="./payback.php" class='go-back'>
							<img src="./include/img/payback/ico-arrow-left.png" alt="">
							<span>메인페이지</span>
						</a>
						<div class="simulator-content simulation-one active wow fadeIn" data-page="1">
							<div class="simulation-header">
								<p class="simulation-title wow fadeInUp">
									방법을 바꾸면<br>
									결과가 달라집니다.
								</p>
								<ul class="wow fadeInUp">
									<li>
										<img src="./include/img/payback/img-emoji-01.png" alt="">
										<span>거래 수수료를 얼마나 지불하는지 <br class="mb">모르겠어요..</span>
									</li>
									<li>
										<img src="./include/img/payback/img-emoji-02.png" alt="">
										<span>이전에 거래소 가입했는데 혜택이나 <br class="mb">페이백이 없어요.</span>
									</li>
									<li>
										<img src="./include/img/payback/img-emoji-03.png" alt="">
										<span>얼마를 페이백을 받는지 <br class="mb">알고 싶어요!</span>
									</li>
									<li>
										<img src="./include/img/payback/img-emoji-04.png" alt="">
										<span>트레이딩으로 수익도 보고 <br class="mb">페이백으로도 수익내고 싶어요!</span>
									</li>
									<li>
										<img src="./include/img/payback/img-emoji-05.png" alt="">
										<span>비교하기 귀찮아요.. <br class="mb"><strong>최고 페이백</strong> 보장 해주세요.</span>
									</li>
								</ul>
							</div>
							<div class="simulation-body"></div>
							<div class="simulation-foot">
								<button class="next-btn active wow fadeInUp" type="button" data-page="2">
									 <span><strong>30초 만에</strong> 예상 페이백 알아보기</span>
									 <img src="./include/img/ico-arrow-right.png" alt="">
								</button>
							</div>

						</div>
						<!-- <div class="simulator-content simulation-one" data-page="1">
							<div class="simulation-header">
								<p class="simulation-title">
									방법을 바꾸면<br>
									결과가 달라집니다.
								</p>
								<ul>
									<li>
										<img src="./include/img/payback/img-emoji-01.png" alt="">
										<span>거래 수수료를 얼마나 지불하는지 모르겠어요..</span>
									</li>
									<li>
										<img src="./include/img/payback/img-emoji-02.png" alt="">
										<span>이전에 거래소 가입했는데 혜택이나 페이백이 없어요.</span>
									</li>
									<li>
										<img src="./include/img/payback/img-emoji-03.png" alt="">
										<span>얼마를 페이백을 받는지 알고 싶어요!</span>
									</li>
									<li>
										<img src="./include/img/payback/img-emoji-04.png" alt="">
										<span>트레이딩으로 수익도 보고 페이백으로도 수익내고 싶어요!</span>
									</li>
									<li>
										<img src="./include/img/payback/img-emoji-05.png" alt="">
										<span>비교하기 귀찮아요.. <strong>최고 페이백</strong> 보장 해주세요.</span>
									</li>
								</ul>
							</div>
							<div class="simulation-body"></div>
							<div class="simulation-foot">
								<button class="next-btn active" type="button" data-page="2">
									 <span><strong>30초 만에</strong> 예상 페이백 알아보기</span>
									 <img src="./include/img/ico-arrow-right.png" alt="">
								</button>
							</div>
						
						</div> -->
						
						<div class="simulator-content simulation-two" data-page="2">
							<div class="simulation-header">
								<p class="simulation-title wow fadeInUp">
									시작 자금으로<br>
									<strong>얼마를 고려하고 계신가요?</strong>
								</p>
								<p class="simulation-sub-title wow fadeInUp">세모에서 <strong>압도적인 수수료 요율</strong>을 경험해 보세요.</p>
							</div>
							<div class="simulation-body wow fadeInUp">
								<div class="imgBox">
									<img src="./include/img/payback/img-seedmoney.png" alt="">
								</div>
								<div class="seed-form">
									<input class="seed-input" id="seed" type="number" name="seed"
										placeholder="투자금을 입력해주세요" autocomplete="off" required=""><label
										class="seed-label" for="seed">USDT</label>
								</div>
							</div>
							<div class="simulation-foot">
								<button class="next-btn seed-next-btn active wow fadeInUp" type="button" data-page="3">
									<span>거래소별 환급금 받으러 가기</span>
									<img src="./include/img/ico-arrow-right.png" alt="">
								</button>
							</div>
						</div>

						<div class="simulator-content simulation-three" data-page="3">
							<div class="simulation-header">
								<p class="simulation-title wow fadeInUp">
									<strong>어느 거래소</strong>를<br>이용중이신가요?
								</p>
								<p class="simulation-sub-title wow fadeInUp">가장 자주쓰는 거래소 <strong style="color: var(--mainCol);">하나만 선택</strong>해 주세요!</p>
							</div>
							<div class="simulation-body">
								<div class="exchange-btn-wrap wow fadeInUp">
									<button class="exchange-btn" type="button" data-exchange="1" data-commission1="0.4">
										<img class="exchange-btn-img" src="./include/img/payback/img-binance.png">
										<div class="txtBox">
											<strong>40%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="2" data-commission1="0.5">
										<img class="exchange-btn-img" src="./include/img/payback/img-bybit.png">
										<div class="txtBox">
											<strong>50%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="3" data-commission1="0.6">
										<img class="exchange-btn-img" src="./include/img/payback/img-bitget.png">
										<div class="txtBox">
											<strong>60%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="4" data-commission1="0.7">
										<img class="exchange-btn-img" src="./include/img/payback/img-okx.png">
										<div class="txtBox">
											<strong>70%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="5" data-commission1="0">
										<img class="exchange-btn-img" src="./include/img/payback/img-deepcoin.png">
										<div class="txtBox">
											<strong>00%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="6" data-commission1="0.65">
										<img class="exchange-btn-img" src="./include/img/payback/img-huobi.png">
										<div class="txtBox">
											<strong>65%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="7" data-commission1="0">
										<img class="exchange-btn-img" src="./include/img/payback/img-kucoin.png">
										<div class="txtBox">
											<strong>00%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="8" data-commission1="0">
										<img class="exchange-btn-img" src="./include/img/payback/img-zoomex.png">
										<div class="txtBox">
											<strong>00%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="9" data-commission1="0">
										<img class="exchange-btn-img" src="./include/img/payback/img-bingx.png">
										<div class="txtBox">
											<strong>00%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="10" data-commission1="0">
										<img class="exchange-btn-img" src="./include/img/payback/img-lbank.png">
										<div class="txtBox">
											<strong>00%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="11" data-commission1="0">
										<img class="exchange-btn-img" src="./include/img/payback/img-gateio.png">
										<div class="txtBox">
											<strong>00%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="12" data-commission1="0">
										<img class="exchange-btn-img" src="./include/img/payback/TAPBIT.png">
										<div class="txtBox">
											<strong>00%</strong>
											<span>페이백</span>
										</div>
									</button>
									<button class="exchange-btn" type="button" data-exchange="13" data-commission1="0">
										<img class="exchange-btn-img" src="./include/img/payback/img-apollox.png">
										<div class="txtBox">
											<strong>00%</strong>
											<span>페이백</span>
										</div>
									</button>
								</div>
							</div>
							<div class="simulation-foot">
								<button class="next-btn next-exchange active wow fadeInUp" type="button" data-page="4">
									<span>거래소별 환급금 받으러 가기</span>
									<img src="./include/img/ico-arrow-right.png" alt="">
								</button>
							</div>

						</div>

						<div class="simulator-content simulation-four" data-page="4">
							<div class="simulation-header">
								<p class="simulation-title wow fadeInUp">
									평균 레버리지는<br>
									<strong>얼마나</strong> 사용하시나요?
								</p>
							</div>
							<div class="simulation-body">
								<div class="imgBox wow fadeInUp">
									<img src="./include/img/payback/leverage.png" alt="">
								</div>
								<div class="leverage-form wow fadeInUp">
									<input class="leverage-input" id="leverage" type="number"
										name="leverage" placeholder="1~125" required="">
									<button class="leverage-delete-btn">
										<img class="leverage-delete-img"
											src="/resources/images/simulator/close.png">
									</button>
								</div>
							</div>
							<div class="simulation-foot">
								<!-- <button class="before-btn" type="button" data-page="3">이전</button> -->
								<button class="next-btn leverage-next-btn active wow fadeInUp" type="button" data-page="5">
									<span>환급금 확인하러가기</span>
									<img src="./include/img/ico-arrow-right.png" alt="">
								</button>
							</div>

						</div>

						<div class="simulator-content simulation-five" data-page="5">
							<div class="simulation-header">
								<p class="simulation-title wow fadeInUp">
									매매는 <strong>얼마나 자주</strong><br>
									하시나요?
								</p>
							</div>
							<div class="simulation-body wow fadeInUp">
								<div class="deal-btns">
									<button class="deal-btn" type="button" data-val="0.6">하루에
										1번 할까 말까해요.</button>
									<button class="deal-btn" type="button" data-val="1.5">하루에
										1회 ~ 2회 정도 합니다.</button>
									<button class="deal-btn" type="button" data-val="3">하루에
										2회 ~ 5회 정도 합니다.</button>
									<button class="deal-btn" type="button" data-val="7.5">하루에
										5회 ~ 10회 정도 합니다.</button>
									<button class="deal-btn" type="button" data-val="20">하루
										10회 이상 정도 합니다.</button>
								</div>
							</div>
							<div class="simulation-foot">
								<button class="next-btn result-btn active wow fadeInUp" type="button" data-page="6">
									<span>환급금 확인하러가기</span>
									<img src="./include/img/ico-arrow-right.png" alt="">
								</button>
							</div>

						</div>
					</div>
				</div>
				<div class="simulator-result-wrap">
					<a href="./payback.php" class='go-back' style="opacity: 1 !important;">
						<img src="./include/img/payback/ico-arrow-left.png" alt="">
						<span>메인페이지</span>
					</a>
					<div class="simulator-result-content simulation-one"
						data-page="1">
						<div class="simulator-result-header">
							<div class="simulator-result-header-inner">
								<div class="loadingBox wow fadeInUp">
									<p class="simulation-result-title">
										<strong>환급액</strong>을 조회 중입니다.
									</p>
									<div class="imgBox">
										<img src="./include/img/payback/semocoin-solo.png" alt="">
									</div>
								</div>								

								<p class="simulation-result-title">
									지금까지 꼬박꼬박<br>
									<strong>남에게 줬던 아까운 금액이에요</strong>
									<img src="./include/img/payback/img-emoji.png" alt="">
								</p>
								<div class="simulator-result-amount">
									<span class="balloon">김세모님 환급금으로 에어팟 사러 가는 중...</span>
									<p class="amount-title wow fadeInUp"><strong>30일 기준</strong> 페이백 예상 금액</p>
									<div class="amount-wrap wow fadeInUp">
										<p class="amount-krw">
											<span id="amount-krw" class="moneyCount">162</span>원
										</p>
										<!-- <p class="amount-usdt">
											(<span id="amount-usdt">1,230.0</span> USDT)
										</p> -->
										<div class="imgBox">
											<img src="./include/img/payback/img-wallet.png" alt="">
										</div>
										<p class="amount-txt mb">
											조건없이 간편하게 <br class="mb"><span style="color: var(--mainCol);">페이백</span> 받으세요!
										</p>
									</div>
								</div>
								<p class="amount-txt pc">
									조건없이 간편하게 <br class="mb"><span style="color: var(--mainCol);">페이백</span> 받으세요!
								</p>
							</div>

						</div>

						<div class="simulation-foot">
							<button class="next-btn active wow fadeInUp" type="button" data-page="2">
								<span>이제 내가 돌려받기</span>
								<img src="./include/img/ico-arrow-right.png" alt="">
							</button>
						</div>

					</div>

				</div>
			</div>
		</div>
		<!-- e::contents -->
<?php include './footer.php'; ?>