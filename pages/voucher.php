<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/2.jpg';
	?>
	<style>
	/* mobile */
	@media (min-width: 1px) and (max-width: 1089px) {
			.about-bg{background-image:url('<?php echo $background_images?>');width:100%;-webkit-background-size:100% auto;-moz-background-size:100% auto;-o-background-size:100% auto;background-position:center; background-size: cover; background-repeat:no-repeat;color:#fff;height:100%;padding-top: 70px;}.ml-auto,.mx-auto{padding-top:10px;padding-bottom:10px}.lead{font-size:12px;font-weight:300}.display-4{ font-size:1.5rem;font-weight:300;}.btn,a.btn{line-height:20px!important;height:20px!important;padding:0 5px;text-align:center;font-weight:700;border:0;-webkit-transition:background-color .3s ease-out;-moz-transition:background-color .3s ease-out;-o-transition:background-color .3s ease-out;transition:background-color .3s ease-out}.btn-outline-secondary{font-size:11px;padding:0 5px}
	}
	/* desktop */
	@media (min-width: 1090px) {
		.about-bg{background-image:url('<?php echo $background_images?>');background-position:center center;background-repeat:no-repeat;color:#fff;height:400px}.lead{font-size:1.25rem;font-weight:300}.display-4{font-size:2.5rem;font-weight:300;line-height:1.2}
	}

	.ks5 {
		font-size: 20px;
		line-height: 40px;
		font-weight: 600;
	}
	.card-body {
		text-align:center;
	}

	.card-img-care {
		width:25%;
	}
	.voucher2 {
		background-color:white;
		opacity:80%;
		padding:20px;
	}
	@media (max-width:992px) {
		.card-img-care {
			width:15%;
		}
		.disp-img {
			display:block !important;
		}
		.voucher1-row {
			background-image: none !important;
		}
		.voucher2-row {
			background-image: none !important;
			flex-direction: column-reverse;
		}
		.voucher3-row {
			background-image: none !important;
		}
		.voucher4-row {
			background-image: none !important;
			flex-direction: column-reverse;
		}
		.voucher5-row {
			background-image: none !important;
		}
		.voucher6-row {
			background-image: none !important;
			flex-direction: column-reverse;
		}
	}
	
	.disp-img {
		display:none;
	}

	.voucher1-row {
		background-image: url(/pages/img/voucher1.jpg);
		background-repeat: round;
	}
	.voucher2-row {
		background-image: url(/pages/img/voucher2.jpg);
		background-repeat: round;
	}
	.voucher3-row {
		background-image: url(/pages/img/voucher3.jpg);
		background-repeat: round;
	}
	.voucher4-row {
		background-image: url(/pages/img/voucher4.jpg);
		background-repeat: round;
	}
	.voucher5-row {
		background-image: url(/pages/img/voucher5.jpg);
		background-repeat: round;
	}
	.voucher6-row {
		background-image: url(/pages/img/voucher6.jpg);
		background-repeat: round;
	}
	
	</style>


	<div class="position-relative overflow-hidden p-md-5 text-center bg-white bg-sub-1 ety-mt-main about-bg">

	  <div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-bold" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">남원아동발달센터</h1>
		<p class="lead font-weight-bold ko1" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">
			남원아동발달센터는 행복한 변화를 지원합니다.
		</p>
	  </div>
	  <div class="product-device shadow-sm d-none d-md-block"></div>
	  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>
	<!-------------------------- ./상단배경 수정 -------------------------->


	<style>
		@media only screen and (max-width: 320px) {
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}

		@media only screen and (min-width: 321px) and (max-width: 768px){
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}

		/* 페이지 selec 박스 */
		/* mobile */
		@media (min-width: 1px) and (max-width: 1089px) {
			.mb-5, .my-5 {
				margin-bottom: 0rem!important;
			}
			.select-menu{width:190px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
			.home{display:inline; width:140px; padding:17px 45px 17px 15px; border-left:1px solid #e1e1e1;}
			.menu{display:inline;}
		}
		/* desktop */
		@media (min-width: 1090px) {
			.select-menu{width:190px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
			.home{display:inline; width:140px; padding:17px 45px 17px 15px; border-left:1px solid #e1e1e1;}
			.menu{display:inline;}
		}
	</style>

    <!-- Page Content -->
	<style>
	table td {
		color: #666;
		font-size: 15px;
	}
	</style>


	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">바우처 안내</h2>
		<span class="center-line"></span>
	</div>

	<div class="container margin-top-80 margin-bottom-80">
      <div class="row voucher1-row">
        <div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher1.jpg" style="width:100%;">
        </div>
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="center-heading font-weight-bold">아동청소년심리지원바우처</h4>

					<h5 class="font-weight-bold">서비스 목적</h5>
					<p class="ks3">
					문제행동아동의 조기 발견과 개입을 통하여 문제행동을
					감소시키고, 정서행동장애로의 발전을 막아 정상적 성장 지원</p>
					
					<h5 class="font-weight-bold">서비스 대상</h5>
					<p class="ks3">
					기준 중위소득 160% 이하, 만 18세 이하의 남원시민</p>

					
					<h5 class="font-weight-bold">서비스 가격</h5>
					<p class="ks3">
					월 180,000원 (4회)</p>
					<p class="ks3">
					정부지원금 I 126,000~162,000원</p>
					<p class="ks3">
					본인부담금 I 18,000~54,000원 (소득수준에 따라 상이함)</p>
					
					<h5 class="font-weight-bold">서비스 내용</h5>
					<p class="ks3">
					언어/놀이/미술/음악/심리상담프로그램 40분 + 부모상담 10분</p>
					
				</div>
			</li>
			</ul>
        </div>
      </div>
      <div class="row voucher2-row">
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="center-heading font-weight-bold">보완대체의사소통(AAC)기기 활용 중재서비스</h4>

					<h5 class="font-weight-bold">서비스 목적</h5>
					<p class="ks3">
					장애인의 의사소통 문제를 발견하여 이를 보완하거나 대체할 수 있도록 보완대체 의사소통(ACC) 기기를
					활용함으로써 의사소통 능력의 증진 및 사회활동의 참여를 지원하는 서비스</p>
					
					<h5 class="font-weight-bold">서비스 대상</h5>
					<p class="ks3">
					기준 중위소득 170% 이하, 만 24세 미만(지적·뇌병변·자폐성 장애인) 남원시민</p>
					<p class="ks3">
					* 만6세 이상 : 등록장애인(지적, 뇌병변, 자폐성 장애인)</p>
					<p class="ks3">
					* 만6세 미만 : 장애가 예견되어 AAC중재서비스가 필요하다고 인정한 경우(의사진단서 또는 1급 언어재활사 소견서 필요)</p>

					
					<h5 class="font-weight-bold">서비스 가격</h5>
					<p class="ks3">
					월 20만원(4회)</p>
					<p class="ks3">
					정부지원금 12~18만원 / 본인부담금 2~8만원 (소득수준에 따라 상이함)</p>
					
					
					<h5 class="font-weight-bold">서비스 내용</h5>
					<p class="ks3">
					AAC중재 50분 + 부모상담 10분</p>
					
				</div>
			</li>
			</ul>
        </div>
		<div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher2.jpg" style="width:100%;">
        </div>
      </div>
      <div class="row voucher3-row">
        <div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher3.jpg" style="width:100%;">
        </div>
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="center-heading font-weight-bold">발달재활서비스</h4>

					<h5 class="font-weight-bold">서비스 목적</h5>
					<p class="ks3">
					성장기의 장애아동의 인지, 의사소통, 적응행동, 감각·운동 등의 정신적·감각적
					기능향상과 행동발달을 위한 적절한 발달재활서비스 지원 및 정보 제공</p>
					
					<h5 class="font-weight-bold">서비스 대상</h5>
					<p class="ks3">
					기준 중위소득 180% 이하, 만18세 미만 장애아동</p>
					<p class="ks3">
					* 만 6세 미만 : 서비스가 필요하다는 의사 진단서 필요</p>

					
					<h5 class="font-weight-bold">서비스 가격</h5>
					<p class="ks3">
					월 22만원(4회)</p>
					<p class="ks3">
					정부지원금 14~20만원 / 본인부담금 2~8만원 (소득수준에 따라 상이함)</p>
					
					<h5 class="font-weight-bold">서비스 내용</h5>
					<p class="ks3">
					언어/놀이심리/미술심리/감각발달재활프로그램 40분 + 부모상담 10분</p>
					
				</div>
			</li>
			</ul>
        </div>
      </div>
      <div class="row voucher4-row">
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="center-heading font-weight-bold">언어발달지원</h4>

					<h5 class="font-weight-bold">서비스 목적</h5>
					<p class="ks3">
					장애 부모의 자녀에게 필요한 언어발달지원서비스를 제공하여 아동의
					건강한 성장지원 및 장애가족의 자체 역량 강화</p>
					
					<h5 class="font-weight-bold">서비스 대상</h5>
					<p class="ks3">
					기준 중위소득 120% 이하, 만12세 미만 비장애아동</p>
					<p class="ks3">
					* 한쪽 부모 및 조손가정의 한쪽 조부모가 시각·청각·언어·지적·자폐성·뇌병변 등록장애인일 경우</p>

					
					<h5 class="font-weight-bold">서비스 가격</h5>
					<p class="ks3">
					월</p>
					<p class="ks3">
					정부지원금 만원 / 본인부담금 만원 (소득수준에 따라 상이함)</p>
					
					<h5 class="font-weight-bold">서비스 내용</h5>
					<p class="ks3">
					언어재활서비스 40분 + 부모상담 10분</p>
					
				</div>
			</li>
			</ul>
        </div>
		<div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher4.jpg" style="width:100%;">
        </div>
      </div>
      <div class="row voucher5-row">
        <div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher5.jpg" style="width:100%;">
        </div>
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="center-heading font-weight-bold">성인심리지원서비스</h4>

					<h5 class="font-weight-bold">서비스 목적</h5>
					<p class="ks3">
					성인의 심리정서 지원, 건강성 회복을 통한 삶의 질 향상과 심리적 문제
					예방을 통한 건강한 사회구성원으로서의 역할 촉진</p>
					
					<h5 class="font-weight-bold">서비스 대상</h5>
					<p class="ks3">
					만 35세 이상의 남원시민(소득기준 없음)</p>
					<p class="ks3">
					* 우선순위 대상자:</p>
					<p class="ks3">
					– 법원에 협의 이혼절차를 진행중인 부부</p>
					<p class="ks3">
					– 시·군 맞춤형복지팀 추천자</p>
					<p class="ks3">
					– 등록장애인 또는 정신·신체관련 전문치료가 요구 되는 가족구성원이 포함된 가족</p>
					<p class="ks3">
					– 임산부 또는 출산 후 1년 내 산모</p>
					<p class="ks3">
					– 코로나19로 인해 일상회복이 필요한 자</p>
					<p class="ks3">
					– 사회서비스 제공기관 슈퍼바이저 추천자</p>

					
					<h5 class="font-weight-bold">서비스 가격</h5>
					<p class="ks3">
					월 20만원(4회)</p>
					<p class="ks3">
					정부지원금 12~18만원 / 본인부담금 2~8만원 (소득수준에 따라 상이함)</p>
					
					<h5 class="font-weight-bold">서비스 내용</h5>
					<p class="ks3">
					심리상담 50분</p>
					
				</div>
			</li>
			</ul>
        </div>
      </div>
      <div class="row voucher6-row">
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="center-heading font-weight-bold">청년마음건강</h4>

					<h5 class="font-weight-bold">서비스 목적</h5>
					<p class="ks3">
					-</p>
					<h5 class="font-weight-bold">서비스 대상</h5>
					<p class="ks3">
					소득기준없음, 만 19세 이상 34세 이하의 청년</p>
					<p class="ks3">
					* 우선순위 대상자:</p>
					<p class="ks3">
					– 자립준비청년</p>
					<p class="ks3">
					– 정신건강복지센터에서 연계한 청년</p>
					<p class="ks3">
					– 일반청년</p>

					
					<h5 class="font-weight-bold">서비스 가격</h5>
					<p class="ks3">
					대부분 정부 지원 / 본인부담금 6,000~7,000원(회당)</p>
					
				
					<h5 class="font-weight-bold">서비스 내용</h5>
					<p class="ks3">
					기본 10회(주1회, 3개월) 지원 </p>
					
				</div>
			</li>
			</ul>
        </div>
        <div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher6.jpg" style="width:100%;">
        </div>
      </div>
    </div>

	
	<!-------------------------- 

	지도 : 구글지도로 주소를 검색하신 다음에 공유버튼을 클릭하여 iframe 형식으로 가져오시면 됩니다.

	-------------------------->
	<div class="container-fluid">
		<input type="hidden" value="<?php echo G5_THEME_URL?>" id="send_url">
		<div class="row">
			<div class="col-md-6 text-center" style="padding:30px; background:#f5f5f5; margin:0 auto;">
				<!-- 타이틀 -->
				<div class="margin-bottom-40">
					<h2 class="en1">Contact US</h2>
				</div>
				<div class="row">
					<div class="col-md-12 margin-bottom-20">
						<input class="form-control" type="text" name="ety_name" value="" placeholder="이름">
					</div><!-- /col -->
					<div class="col-md-12 margin-bottom-20">
						<input class="form-control" type="text" name="ety_phone" value="" placeholder="연락처">
					</div><!-- /col -->
					<div class="col-md-12 margin-bottom-20">
						<input class="form-control" type="text" name="ety_email" value="" placeholder="이메일">
					</div><!-- /col -->
				</div><!-- /row -->
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<textarea class="form-control" name="ety_content" value="" id="ety_content" rows="3" placeholder="문의사항"></textarea>
						</div>
					</div>
					<div class="col-md-12 margin-bottom-20" style="text-align:left;">
						<div style="display:block;"><input type="radio" name="ety_program" checked>아동청소년심리지원바우처</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" checked>보완대체의사소통(AAC)기기 활용 중재서비스</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" checked>발달재활서비스</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" checked>언어발달지원</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" checked>성인심리지원서비스</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" checked>청년마음건강</input></div>
					</div><!-- /col -->
					<div class="col-md-12 margin-bottom-20">
						<div class="form-check">
							<input type="checkbox" name="agree" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">약관동의</label>
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-dark ks4 sendmail">문의하기</button>
					</div>
				</div><!-- /row -->					
			</div>
		</div>
	</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>