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
	@media (max-width:992px) {
		.card-img-care {
			width:15%;
		}
	}
	</style>


	<div class="position-relative overflow-hidden p-md-5 text-center bg-white bg-sub-1 ety-mt-main about-bg">

	  <div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-bold" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">남원윤수민언어심리상담센터</h1>
		<p class="lead font-weight-bold ko1" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">
		남원윤수민언어심리상담센터는 행복한 변화를 지원합니다.
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



	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">상담/교육 프로그램</h2>
		<span class="center-line"></span>
	</div>


    <!-- Page Content -->
	<style>
	table td {
		color: #666;
		font-size: 15px;
	}
	</style>


	<div class="container">
		<div class="row">
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<img src="/pages/img/parents.png" class="card2-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title ks5">부모교육</h5>
					<p class="card-text ks3 f14">자녀에 대한 이해와 지식을 증진시켜<br>
												사고, 감정, 행동에서의<br>
												습관적인 방법을 검토하여<br>
												자녀를 양육하는 새로운 방법을<br>
												습득할 수 있도록 돕는 프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<img src="/pages/img/recog.png" class="card2-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title ks5">인지재활</h5>
					<p class="card-text ks3 f14">인지 및 학습에 문제를 보이는<br>
												아동을 대상으로 기초적인 학습능력을<br>
												배양하고 아동의 잠재력을 충분히<br>
												발휘하여 학교생활 및 또래 사회에서의<br>
												적응력을 향상시키는 프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<img src="/pages/img/audit.png" class="card2-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title ks5">청능재활</h5>
					<p class="card-text ks3 f14">청력에 어려움이 있는 이에게<br>
												청능훈련과 의사소통 훈련을 실시하여<br>
												의사소통 기능을 향상시키는<br>
												프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<img src="/pages/img/dyslexia.png" class="card2-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title ks5">난독증치료</h5>
					<p class="card-text ks3 f14">읽기나 읽기이해에 어려움을 보이는<br>
												아동을 대상으로 음운인식훈련,<br>
												체계적인 파닉스 교육, 해독 훈련,<br>
												유창성 및 절차훈련 등을 통해<br>
												난독증을 개선하는 프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<img src="/pages/img/society.png" class="card2-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title ks5">사회적기술</h5>
					<p class="card-text ks3 f14">개인이 지역사회 및 학교에서<br>
												유연하게 적응하는데 필요한<br>
												대인관계와 관련된 다양한 행동을<br>
												익힐 수 있도록 하는<br>
												프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
		</div>
	</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>