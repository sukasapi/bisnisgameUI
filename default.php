<!DOCTYPE html>
<?php 
   $_SESSION['title']=" <i class='fa fa-file-alt fs-4x' style='color:#FFD700'></i>   Form Input ";
   $_SESSION['idx']="list";
?>
<html lang="en">
	<!--begin::Head-->
	<?php include_once("./header.php");?>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url(./assets/media/patterns/header-bg.png)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <?php include_once("./navbar.php");?>

				
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<div class="card card-page">
									<!--begin::Card body-->
									<div class="card-body">
										<!--begin::Row-->
										<div class="row gy-5 g-xl-8">
											<!--begin::Col-->
											<div class="col-xxl-6">
												<!--begin::Table Widget 1-->
												<div class="card card-xxl-stretch">
													<!--begin::Header-->
													<div class="card-header border-0 pt-5 pb-3">
														<!--begin::Card title-->
														<h3 class="card-title fw-bolder text-gray-800 fs-2">Daftar Simulasi</h3>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<div class="my-1">
																<!--begin::Select-->
																<select class="form-select fw-bold w-125px select2-hidden-accessible" data-control="select2" data-placeholder="Status" data-hide-search="true" data-select2-id="select2-data-1-yohe" tabindex="-1" aria-hidden="true">
																	<option value="1" selected="selected" data-select2-id="select2-data-3-6o2n">Status</option>
																	<option value="2">Initiated</option>
																	<option value="3">In Progress</option>
																	<option value="3">Complete</option>
																</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-2-mmm2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select fw-bold w-125px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-9hny-container" aria-controls="select2-9hny-container"><span class="select2-selection__rendered" id="select2-9hny-container" role="textbox" aria-readonly="true" title="Status">Status</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																<!--end::Select-->
															</div>
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body py-0">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
																<!--begin::Table body-->
																<tbody>
																	<!--begin::Table row-->
																	<tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
																		<th class="min-w-200px px-0">Simulasi</th>
																		<th class="min-w-125px">Progress</th>
																		<th class="text-end pe-2 min-w-70px">Action</th>
																	</tr>
																	<!--end::Table row-->
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Author=-->
																		<td class="p-0">
																			<div class="d-flex align-items-center">
																				<!--begin::Logo-->
																				<div class="symbol symbol-50px me-2">
																					<span class="symbol-label">
																						<img alt="" class="w-25px" src="./assets/media/svg/brand-logos/aven.svg">
																					</span>
																				</div>
																				<!--end::Logo-->
																				<div class="ps-3">
																					<a href="./simulasi_page.php" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Simulasi Bisnis 1</a>
																					<span class="text-gray-400 fw-bold d-block">Deskripsi Simulasi Bisnis 1</span>
																				</div>
																			</div>
																		</td>
																		<!--end::Author=-->
																		<!--begin::Progress=-->
																		<td>
																			<div class="d-flex flex-column w-100 me-2 mt-2">
																				<span class="text-gray-400 me-2 fw-boldest mb-2">65%</span>
																				<div class="progress bg-light-danger w-100 h-5px">
																					<div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
																				</div>
																			</div>
																		</td>
																		<!--end::Company=-->
																		<!--begin::Action=-->
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																				<span class="svg-icon svg-icon-2x">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black"></rect>
																						<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																			<!--begin::Menu 3-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																				<!--begin::Heading-->
																				<div class="menu-item px-3">
																					<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Pengaturan Simulasi</div>
																				</div>
																				<!--end::Heading-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./edit_simulasi.php" class="menu-link px-3"> Ubah Simulasi</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_lingkungan_bisnis.php" class="menu-link px-3"> Lingkungan Bisnis</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_vendor.php" class="menu-link px-3"> Manajemen Vendor</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu 3-->
																		</td>
																		<!--end::Action=-->
																	</tr>
																	<!--end::Table row-->
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Author=-->
																		<td class="p-0">
																			<div class="d-flex align-items-center">
																				<!--begin::Logo-->
																				<div class="symbol symbol-50px me-2">
																					<span class="symbol-label">
																						<img alt="" class="w-25px" src="./assets/media/svg/brand-logos/leaf.svg">
																					</span>
																				</div>
																				<!--end::Logo-->
																				<div class="ps-3">
																					<a href="./simulasi_page.php" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Simulasi Bisnis 2</a>
																					<span class="text-gray-400 fw-bold d-block">Deskripsi Simulasi Bisnis 2</span>
																				</div>
																			</div>
																		</td>
																		<!--end::Author=-->
																		<!--begin::Progress=-->
																		<td>
																			<div class="d-flex flex-column w-100 me-2 mt-2">
																				<span class="text-gray-400 me-2 fw-boldest mb-2">85%</span>
																				<div class="progress bg-light-danger w-100 h-5px">
																					<div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
																				</div>
																			</div>
																		</td>
																		<!--end::Company=-->
																		<!--begin::Action=-->
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																				<span class="svg-icon svg-icon-2x">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black"></rect>
																						<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																			<!--begin::Menu 3-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																				<!--begin::Heading-->
																				<div class="menu-item px-3">
																					<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Pengaturan Simulasi</div>
																				</div>
																				<!--end::Heading-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./edit_simulasi.php" class="menu-link px-3"> Ubah Simulasi</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_lingkungan_bisnis.php" class="menu-link px-3"> Lingkungan Bisnis</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_vendor.php" class="menu-link px-3"> Manajemen Vendor</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu 3-->
																		</td>
																		<!--end::Action=-->
																	</tr>
																	<!--end::Table row-->
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Author=-->
																		<td class="p-0">
																			<div class="d-flex align-items-center">
																				<!--begin::Logo-->
																				<div class="symbol symbol-50px me-2">
																					<span class="symbol-label">
																						<img alt="" class="w-25px" src="./assets/media/svg/brand-logos/atica.svg">
																					</span>
																				</div>
																				<!--end::Logo-->
																				<div class="ps-3">
																					<a href="./simulasi_page.php" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Simulasi Bisnis 1</a>
																					<span class="text-gray-400 fw-bold d-block">Deskripsi Simulasi Bisnis 1</span>
																				</div>
																			</div>
																		</td>
																		<!--end::Author=-->
																		<!--begin::Progress=-->
																		<td>
																			<div class="d-flex flex-column w-100 me-2 mt-2">
																				<span class="text-gray-400 me-2 fw-boldest mb-2">40%</span>
																				<div class="progress bg-light-danger w-100 h-5px">
																					<div class="progress-bar bg-success" role="progressbar" style="width: 40%"></div>
																				</div>
																			</div>
																		</td>
																		<!--end::Company=-->
																		<!--begin::Action=-->
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																				<span class="svg-icon svg-icon-2x">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black"></rect>
																						<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																			<!--begin::Menu 3-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																				<!--begin::Heading-->
																				<div class="menu-item px-3">
																					<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Pengaturan Simulasi</div>
																				</div>
																				<!--end::Heading-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./edit_simulasi.php" class="menu-link px-3"> Ubah Simulasi</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_lingkungan_bisnis.php" class="menu-link px-3"> Lingkungan Bisnis</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_vendor.php" class="menu-link px-3"> Manajemen Vendor</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu 3-->
																		</td>
																		<!--end::Action=-->
																	</tr>
																	<!--end::Table row-->
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Author=-->
																		<td class="p-0">
																			<div class="d-flex align-items-center">
																				<!--begin::Logo-->
																				<div class="symbol symbol-50px me-2">
																					<span class="symbol-label">
																						<img alt="" class="w-25px" src="./assets/media/svg/brand-logos/volicity-9.svg">
																					</span>
																				</div>
																				<!--end::Logo-->
																				<div class="ps-3">
																					<a href="./simulasi_page.php" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Simulasi Bisnis 3</a>
																					<span class="text-gray-400 fw-bold d-block">Deskripsi Simulasi Bisnis 3</span>
																				</div>
																			</div>
																		</td>
																		<!--end::Author=-->
																		<!--begin::Progress=-->
																		<td>
																			<div class="d-flex flex-column w-100 me-2 mt-2">
																				<span class="text-gray-400 me-2 fw-boldest mb-2">71%</span>
																				<div class="progress bg-light-danger w-100 h-5px">
																					<div class="progress-bar bg-info" role="progressbar" style="width: 71%"></div>
																				</div>
																			</div>
																		</td>
																		<!--end::Company=-->
																		<!--begin::Action=-->
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																				<span class="svg-icon svg-icon-2x">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black"></rect>
																						<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																			<!--begin::Menu 3-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																				<!--begin::Heading-->
																				<div class="menu-item px-3">
																					<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Pengaturan Simulasi</div>
																				</div>
																				<!--end::Heading-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./edit_simulasi.php" class="menu-link px-3"> Ubah Simulasi</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_lingkungan_bisnis.php" class="menu-link px-3"> Lingkungan Bisnis</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_vendor.php" class="menu-link px-3"> Manajemen Vendor</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu 3-->
																		</td>
																		<!--end::Action=-->
																	</tr>
																	<!--end::Table row-->
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Author=-->
																		<td class="p-0">
																			<div class="d-flex align-items-center">
																				<!--begin::Logo-->
																				<div class="symbol symbol-50px me-2">
																					<span class="symbol-label">
																						<img alt="" class="w-25px" src="./assets/media/svg/brand-logos/bebo.svg">
																					</span>
																				</div>
																				<!--end::Logo-->
																				<div class="ps-3">
																					<a href="./simulasi_page.php" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Simulasi Bisnis 5</a>
																					<span class="text-gray-400 fw-bold d-block">Deskripsi Simulasi Bisnis 5</span>
																				</div>
																			</div>
																		</td>
																		<!--end::Author=-->
																		<!--begin::Progress=-->
																		<td>
																			<div class="d-flex flex-column w-100 me-2 mt-2">
																				<span class="text-gray-400 me-2 fw-boldest mb-2">45%</span>
																				<div class="progress bg-light-danger w-100 h-5px">
																					<div class="progress-bar bg-warning" role="progressbar" style="width: 45%"></div>
																				</div>
																			</div>
																		</td>
																		<!--end::Company=-->
																		<!--begin::Action=-->
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																				<span class="svg-icon svg-icon-2x">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black"></rect>
																						<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																			<!--begin::Menu 3-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																				<!--begin::Heading-->
																				<div class="menu-item px-3">
																					<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Pengaturan Simulasi</div>
																				</div>
																				<!--end::Heading-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./edit_simulasi.php" class="menu-link px-3"> Ubah Simulasi</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_lingkungan_bisnis.php" class="menu-link px-3"> Lingkungan Bisnis</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="./list_vendor.php" class="menu-link px-3"> Manajemen Vendor</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu 3-->
																		</td>
																		<!--end::Action=-->
																	</tr>
																	<!--end::Table row-->
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::Table Widget 1-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Row-->
										<div class="row gy-5 g-xl-8">
											
									</div>
									<!--end::Card body-->
							</div>
							
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
                    <?php include_once("./footer.php")?>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<?php include_once('./explorer_infolb.php');?>
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<?php include_once("./script.php");?>
	</body>
	<!--end::Body-->
</html>