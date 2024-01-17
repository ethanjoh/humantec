<?php include "include/header.php";?>			<div role="main" class="main">				<section class="page-header page-header-classic page-header-sm">					<div class="container">						<div class="row">							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">								<h1 data-title-border>견적문의</h1>							</div>							<div class="col-md-4 order-1 order-md-2 align-self-center">								<ul class="breadcrumb d-block text-md-right">									<li><a href="index.php">Home</a></li>									<li class="active">파쇄비용 > 견적문의</li>								</ul>							</div>						</div>					</div>				</section><?phpif ($_GET['area'] == "a1") {    $subject = "제1권역 파쇄 견적문의";} elseif ($_GET['area'] == "a2") {    $subject = "제2권역 파쇄 견적문의";} elseif ($_GET['area'] == "a3") {    $subject = "제3권역 파쇄 견적문의";} elseif ($_GET['area'] == "a4") {    $subject = "제4역 파쇄 견적문의";} elseif ($_GET['area'] == "a5") {    $subject = "제5권역 파쇄 견적문의";} elseif ($_GET['area'] == "a6") {    $subject = "제6권역 파쇄 견적문의";} else {    $subject = "";};?>				<div class="container pb-1">					<div class="row pt-4">						<div class="col-lg-12 mb-4">							<form id="contactForm" class="contact-form appear-animation" action="php/contact-form.php" method="POST" data-appear-animation="fadeIn" data-appear-animation-delay="600">								<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">									<strong>성공!</strong> 견적문의를 발송했습니다.								</div>								<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">									<strong>에러!</strong> 발송 중 에러가 발생했습니다.									<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>								</div>								<div class="form-row">									<div class="form-group col-lg-6">										<label class="required font-weight-bold text-dark">업체명 또는 담당자명</label>										<input type="text" value="" data-msg-required="업체명 또는 담당자명을 입력하세요." maxlength="100" class="form-control" name="name" id="name">									</div>									<div class="form-group col-lg-6">										<label class="required font-weight-bold text-dark">연락처</label>										<input type="text" value="" data-msg-required="연락처를 입력하세요." maxlength="100" class="form-control" name="phone" id="phone">									</div>								</div>								<div class="form-row">									<div class="form-group col">										<label class="font-weight-bold text-dark">제 목</label>										<input type="text" value="<?php echo $subject; ?>" data-msg-required="제목을 입력하세요." maxlength="100" class="form-control" name="subject" id="subject">									</div>								</div>								<div class="form-row">									<div class="form-group col">										<label class="required font-weight-bold text-dark">내 용</label>										<textarea maxlength="5000" data-msg-required="내용을 입력하세요." rows="8" class="form-control" name="message" id="message"></textarea>									</div>								</div>								<div class="form-row">									<div class="form-group col">										<input type="submit" value="보내기" class="btn btn-primary btn-modern" data-loading-text="보내는 중...">									</div>								</div>							</form>						</div>					</div>				</div>			</div><?php include "include/footer.php";?>		</div><?php include "include/script.php";?>	</body></html>