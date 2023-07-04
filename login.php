<?php include './header.php'; ?>
	<!-- 개별 css / js -->
	<link rel="stylesheet" href="./include/css/sub.css">
	<link rel="stylesheet" href="./include/css/login.css">
	<!-- e::개별 css / js -->

		<!-- contents -->
		<div id="contents" class="login">
			<div class="login-wrapper">
                <div class="bg">
                    <div class="video-wrapper">
                        <video class="view-pc" src="./include/video/main-pc-raw-file.mp4" muted autoplay playsinline></video>
                        <video class="view-mo" src="./include/video/mobile-main.mp4" muted autoplay playsinline></video>
                    </div>
                </div>

                <div class="inner">
                    <h2 class="login-tit">
                        가입하여 더 많은 혜택과<br />
                        페이백을 받아보세요!
                    </h2>

                    <div class="form-container login-form">
                        <h3>세모에 오신 것을 환영합니다.</h3>

                        <div class="form-wrapper">
                            <div class="input-element">
                                <label for="id">
                                    <span class="input-label">ID</span>
                                </label>
                                <div class="input">
                                    <input id="id" type="text" placeholder="Insert Your ID" />
                                </div>
                            </div>
                            <div class="input-element">
                                <label for="password">
                                    <span class="input-label">Password</span>
                                </label>
                                <div class="input">
                                    <input id="password" type="password" placeholder="Insert Your Password" />
                                </div>
                            </div>
                        </div>

                        <div class="login-way">
                            <a class="btn-default btn-login">LOG IN</a>
                            <span class="or">or</span>
                            <a class="btn-default btn-login_kakao">카카오톡으로 로그인</a>
                            <span class="rec-join">
                                아직 사용하고 있지 않으신가요? <a>회원가입</a>
                            </span>
                        </div>
                    </div>

                    <div class="login-bottom">
                        <div class="lb-terms">
                            <a>서비스이용약관</a>
                            <a>개인정보처리방침</a>
                        </div>
                        <div class="copyright">
                            COPYRIGHT(C) Semo all rights reserved
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<!-- e::contents -->
<?php include './footer.php'; ?>