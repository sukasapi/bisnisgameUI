<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<?php include_once("./header.php");?>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url(./assets/media/patterns/header-bg.png)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-up -->
				<!--begin::Image placeholder-->
				<style>
					.auth-page-bg {
						background-image: url('./assets/media/illustrations/dozzy-1/14.png');
					}

					[data-bs-theme="dark"] .auth-page-bg {
						background-image: url('./assets/media/illustrations/dozzy-1/14-dark.png');
					}
				</style>
				<!--end::Image placeholder-->

				<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed auth-page-bg">     
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
						<!--begin::Logo-->
						<a href="./" class="mb-12">
							<img alt="Logo" src="./assets/media/logos/logo-trans.png" class="h-50px h-lg-65px logo-default" />
						</a>     
						<!--end::Logo-->

						<!--begin::Wrapper-->
						<div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
							
				<!--begin::Form-->
				<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" data-kt-redirect-url="./authentication/sign-in/basic.html" id="kt_sign_up_form">
					<!--begin::Heading-->
					<div class="mb-10 text-center">
						<!--begin::Link-->
						<div class="text-gray-400 fw-semibold fs-4">
							Apakah anda sudah mendapatkan akses ke Simulasi?

							<a href="./index.php" class="link-primary fw-bold">
								Silahkan Masuk
							</a>
						</div>
						<!--end::Link-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="row fv-row mb-7 fv-plugins-icon-container">
						<!--begin::Col-->
						<div class="col-xl-12">                           
							<label class="form-label fw-bold text-dark fs-6">Username</label>
							<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="first-name" autocomplete="off">
						<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
					</div>
					<!--end::Input group-->

					<!--begin::Input group-->
					<div class="fv-row mb-5 fv-plugins-icon-container">
						<label class="form-label fw-bold text-dark fs-6">Confirm Password</label>
						<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm-password" autocomplete="off">
					<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<a href='./'  id="kt_sign_up_submit" class="btn btn-lg btn-primary">
							<span class="indicator-label">
								Login
							</span>
							<span class="indicator-progress">
								Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
							</span>    
					</a>
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->    
				</div>
				<!--end::Authentication - Sign-up-->
											</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		
        <?php include_once("./script.php");?>
	</body>
	<!--end::Body-->
</html>