<!DOCTYPE html>
<?php 
  
   $_SESSION['title']=" <i class='fa fa-file-alt fs-4x' style='color:#FFD700'></i>  Dashboard Simulasi A ";
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
							<div class="row">
								<div class="col-md-4 col-xs-12">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-center flex-column mb-10">
												<!--begin::Avatar--><div class="symbol  mb-3 symbol-100px symbol-circle ">
													<i class="bi bi-building fs-4x text-primary"></i>
												</div><!--end::Avatar-->
												<!--begin::Name-->
												<h3 class="fs-2 text-gray-800 text-hover-primary fw-bold mb-1">
													<input hidden type="text" name="nTeam" value="" class="form-control inputInfo"></input>
													<strong class='dispInfo'><i>[Team Name]</i></strong>
												</h3>
												<!--end::Name-->

												<!--begin::Position-->
												<div class="fs-6 fw-semibold text-gray-400 mb-2">
												<textarea hidden name="dTeam" class="form-control inputInfo"></textarea>
												<strong class='dispInfo'><i>[Team Description]</i></strong>
												</div>
												<!--end::Position-->
												<div class="fs-6 fw-semibold text-gray-400 mb-2">
													<button class="btn btn-light-primary btn-sm py-2 px-4 fw-bold me-2" id="bInfo"><i class="bi bi-pencil-square fs-2x "></i> Ubah</button>
													<button class="btn btn-light-success btn-sm py-2 px-4 fw-bold me-2" id="bSimpanInfo" hidden> <i class="bi bi-save-fill fs-2x "></i>Simpan</button>
												</div>
												<!--begin::Actions-->
												<div class="d-flex flex-center">
													<button class="btn btn-sm btn-light-warning py-2 px-4 fw-bold me-2"> <i class="bi bi-play fs-2x "></i> Launch</button>
													<button class="btn btn-sm btn-light-danger py-2 px-4 fw-bold me-2"><i class="bi bi-skip-end fs-2x"></i> End</button>
												</div>
												<!--end::Actions-->
											</div>
											<ul class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bold fs-5 mb-10">
												<li class="menu-item mb-1">
													<!--begin::Menu link-->
													<a class="menu-link px-6 py-4 active" href="#">
														<span class="menu-bullet"><span class="bullet"></span></span>
														<span class="menu-title">Overview</span>
													</a>
													<!--end::Menu link-->
												</li>
												<li class="menu-item mb-1">
													<!--begin::Menu link-->
													<a class="menu-link px-6 py-4 active" href="#">
														<span class="menu-bullet"><span class="bullet"></span></span>
														<span class="menu-title">Policy</span>
													</a>
													<!--end::Menu link-->
												</li>
												<li class="menu-item mb-1">
													<!--begin::Menu link-->
													<a class="menu-link px-6 py-4 active" href="#">
														<span class="menu-bullet"><span class="bullet"></span></span>
														<span class="menu-title">Team Member</span>
													</a>
													<!--end::Menu link-->
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-8 col-xs-12">
									<div class="flex-lg-row-fluid ms-lg-10">
										<div class="card mb-5 mb-xl-10" id="overview">		
											<div class="card-header cursor-pointer">
												<!--begin::Card title-->
												<div class="card-title m-0">
													<h3 class="fw-bold m-0">Team Overview</h3>
												</div>
												<!--end::Card title-->
											</div>
											<div class="card-body p-9">
												<!--begin::Row-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Visi</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<textarea class="form-control"></textarea>                
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->

												<!--begin::Input group-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Kebijakan Keuangan</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<textarea class="form-control"></textarea>                
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Kebijakan Keuangan</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<textarea class="form-control"></textarea>                
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Kebijakan Penjualan</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<textarea class="form-control"></textarea>                
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Kebijakan Produksi</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<textarea class="form-control"></textarea>                
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Kebijakan Pengadaan</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<textarea class="form-control"></textarea>                
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Row-->
												<div class="row mb-7">
													<button class="btn btn-success btn-sm btn-circle">Ubah Policy</button>
												</div>
												<!--end::Row-->
											</div>
										</div>
										<div class="card mb-5 mb-xl-10" id="indikator">
											<div class="card-header cursor-pointer">
												<!--begin::Card title-->
												<div class="card-title m-0">
													<h3 class="fw-bold m-0">Team Indicator</h3>
												</div>
												<!--end::Card title-->
											</div>
											<div class="card-body p-9">
												<!--begin::Row-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Laba Kumulatif</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<!--begin::Input group-->
														<div class="input-group mb-5">
															<span class="input-group-text">Rp. </span>
															<input type="text" class="form-control" aria-label="Jumlah Laba Target Dalam Rupiah"/>
															<span class="input-group-text">.00</span>
														</div>
														<!--end::Input group-->           
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Saldo Kas Akhir</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<!--begin::Input group-->
														<div class="input-group mb-5">
															<span class="input-group-text">Rp. </span>
															<input type="text" class="form-control" aria-label="Jumlah Laba Target Dalam Rupiah"/>
															<span class="input-group-text">.00</span>
														</div>
														<!--end::Input group-->           
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Persediaan Akhir Bahan</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<!--begin::Input group-->
														<div class="input-group mb-5">
															<input type="text" class="form-control" aria-label="Jumlah Laba Target Dalam Rupiah"/>
															<span class="input-group-text"> Unit/Pcs</span>
														</div>
														<!--end::Input group-->           
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Realisasi Jam Kerja Per Orang</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<!--begin::Input group-->
														<div class="input-group mb-5">
															<input type="text" class="form-control" aria-label="Realisasi jam kerja produktif per orang"/>
															<span class="input-group-text"> %</span>
														</div>
														<!--end::Input group-->           
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Persediaan Akhir Barang Jadi</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<!--begin::Input group-->
														<div class="input-group mb-5">
															<input type="text" class="form-control" aria-label="Jumlah Laba Target Dalam Rupiah"/>
															<span class="input-group-text"> Unit/Pcs</span>
														</div>
														<!--end::Input group-->           
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-7">
													<!--begin::Label-->
													<label class="col-lg-4 fw-semibold text-muted">Persentase Kredit Macet</label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8">                    
														<!--begin::Input group-->
														<div class="input-group mb-5">
															<input type="text" class="form-control" aria-label="Persentase Kredit Macet"/>
															<span class="input-group-text"> %</span>
														</div>
														<!--end::Input group-->           
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-7">
													<button class="btn btn-success btn-sm btn-circle">Ubah indikator</button>
												</div>
												<!--end::Row-->
											</div>
										</div>
										<div class="card mb-5 mb-xl-10" id="team">		
											<div class="card-header cursor-pointer">
												<!--begin::Card title-->
												<div class="card-title m-0">
													<h3 class="fw-bold m-0">Team Player</h3>
												</div>
												<div class="card-toolbar">
													<button class="btn btn-danger btn-sm hover-rotate-start" data-bs-toggle="modal" data-bs-target="#mdAddPlayer"  id="addPlayer">Add Player</button>
												</div>
												<!--end::Card title-->  
											</div>
											<div class="card-body">
												  <!--begin::Step 2-->
												  <div class="flex-column" data-kt-stepper-element="content">
                                                        <div class="table-responsive">
                                                            <table id="teamList" class="table table-row-bordered gy-5">
                                                                <thead>
                                                                    <tr class="fw-semibold fs-6 text-muted">
                                                                        <th>Team Name</th>
                                                                        <th>Player</th>
																		<th>Role</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Team A</td>
                                                                        <td>Player 1</td>
                                                                        <td>General Manager</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="bi bi-tools"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true" style="">
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='1' class="btn btn-sm btn-circle btn-warning-light px-3"  data-bs-toggle="modal" data-bs-target="#mdEditPlayer"><i class="bi bi-pen text-warning"></i> Edit</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='1' class="btn btn-sm btn-circle btn-danger-light px-3"><i class="bi bi-trash text-danger"></i> Hapus</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Team A</td>
                                                                        <td>Player 2</td>
                                                                        <td>Finance Manager</td>
                                                                        <td>    
                                                                            <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="bi bi-tools"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true" style="">
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='2' class="btn btn-sm btn-circle btn-warning-light px-3"  data-bs-toggle="modal" data-bs-target="#mdEditPlayer"><i class="bi bi-pen text-warning"></i> Edit</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='2' class="btn btn-sm btn-circle btn-danger-light px-3"><i class="bi bi-trash text-danger"></i> Hapus</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Team A</td>
                                                                        <td>Player 3</td>
                                                                        <td>Purchasing Manager</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="bi bi-tools"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true" style="">
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='3' class="btn btn-sm btn-circle btn-warning-light px-3"  data-bs-toggle="modal" data-bs-target="#mdEditPlayer"><i class="bi bi-pen text-warning"></i> Edit</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='3' class="btn btn-sm btn-circle btn-danger-light px-3"><i class="bi bi-trash text-danger"></i> Hapus</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                            </div>
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>Team A</td>
                                                                        <td>Player 3</td>
                                                                        <td>Sales Manager</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="bi bi-tools"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true" style="">
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='3' class="btn btn-sm btn-circle btn-warning-light px-3"  data-bs-toggle="modal" data-bs-target="#mdEditPlayer"><i class="bi bi-pen text-warning"></i> Edit</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='3' class="btn btn-sm btn-circle btn-danger-light px-3"><i class="bi bi-trash text-danger"></i> Hapus</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                            </div>
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>Team A</td>
                                                                        <td>Player 4</td>
                                                                        <td>Production Manager</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="bi bi-tools"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true" style="">
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='3' class="btn btn-sm btn-circle btn-warning-light px-3"  data-bs-toggle="modal" data-bs-target="#mdEditPlayer"><i class="bi bi-pen text-warning"></i> Edit</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <button data-sort='3' class="btn btn-sm btn-circle btn-danger-light px-3"><i class="bi bi-trash text-danger"></i> Hapus</button>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--begin::Step 2-->
											</div>
										</div>
									</div>
								
								</div>
							</div>
						</div>
						<!--end::Post-->
						<!--begin::Modal - Add Team-->
			<div class="modal fade" id="mdAddPlayer" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-900px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2>Tambah Player</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body py-lg-10 px-lg-10">
								<!--begin::Input group-->
							<div class="form-floating input-group mb-7">
								<input type="text" class="form-control required" value="" id="nTeam" name="nTeam" placeholder="username"/>
								<label for="username" class="form-label required">Username</label>
								<button class="btn btn-circle btn-sm btn-primary" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" title="info" data-bs-content="username player sebagai login"><i class="bi bi-question-circle"></i></button>
							</div>
							<!--end::Input group-->
							<div class="row g-9 mt-4">
								<div class="col-md-6 col-xs-12 fv-row">
									<!--begin::Input group-->
									<div class="form-floating input-group mb-7">
										<input type="text" class="form-control" value="" id="lTeam" name="lTeam" placeholder=""/>
										<label for="lTeam" class="form-label required">Nama Player</label>
										<button class="btn btn-circle btn-sm btn-primary" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" title="info" data-bs-content="Nama yang akan ditampilkan pada player"><i class="bi bi-question-circle"></i></button>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6 col-xs-12 fv-row">
									<!--begin::Input group-->
									<div class="form-floating input-group mb-7">
										<select class="form-control " id="lnTeam" name="lTeam" placeholder="">
											<option> Finance Manager</option>
											<option> Purchasing Manager</option>
											<option> Sales Manager</option>
											<option> Production Manager</option>
										</select>
										<label for="lnTeam" class="form-label required">Nama Lengkap Leader/Direktur</label>
										<button class="btn btn-circle btn-sm btn-primary" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" title="info" data-bs-content="nama lengkap dari sebagai <i>display</i> pada halaman user"><i class="bi bi-question-circle"></i></button>
									</div>
									<!--end::Input group-->
								</div>
							</div>
							
						</div>
						<!--end::Modal body-->
						<div class="modal-footer">
						<button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Batal</button>
						<button type="button" id="btAddTeam" class="btn btn-success hover-rotate-end">Simpan</button>
						</div>
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Add Team-->
			<!--begin::Modal - Edit Team-->
			<div class="modal fade" id="mdEditPlayer" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-900px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2>Edit Player</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body py-lg-10 px-lg-10">
							<!--begin::Input group-->
							<div class="form-floating input-group mb-7">
								<input type="text" class="form-control required" value="player1" id="nTeam" name="nTeam" placeholder="username"/>
								<label for="username" class="form-label required">Username</label>
								<button class="btn btn-circle btn-sm btn-primary" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" title="info" data-bs-content="username player sebagai login"><i class="bi bi-question-circle"></i></button>
							</div>
							<!--end::Input group-->
							<div class="row g-9 mt-4">
								<div class="col-md-6 col-xs-12 fv-row">
									<!--begin::Input group-->
									<div class="form-floating input-group mb-7">
										<input type="text" class="form-control" value="Ratno Kantoko" id="lTeam" name="lTeam" placeholder=""/>
										<label for="lTeam" class="form-label required">Nama Player</label>
										<button class="btn btn-circle btn-sm btn-primary" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" title="info" data-bs-content="Nama yang akan ditampilkan pada player"><i class="bi bi-question-circle"></i></button>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6 col-xs-12 fv-row">
									<!--begin::Input group-->
									<div class="form-floating input-group mb-7">
										<select class="form-control " id="lnTeam" name="lTeam" placeholder="">
											<option selected> Finance Manager</option>
											<option> Purchasing Manager</option>
											<option> Sales Manager</option>
											<option> Production Manager</option>
										</select>
										<label for="lnTeam" class="form-label required">Nama Lengkap Leader/Direktur</label>
										<button class="btn btn-circle btn-sm btn-primary" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" title="info" data-bs-content="nama lengkap dari sebagai <i>display</i> pada halaman user"><i class="bi bi-question-circle"></i></button>
									</div>
									<!--end::Input group-->
								</div>
							</div>
						
							
						</div>
						<!--end::Modal body-->
						<div class="modal-footer">
						<button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Batal</button>
						<button type="button" id="btAddTeam" class="btn btn-success hover-rotate-end">Simpan</button>
						</div>
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Edit Team-->
					</div>
					<!--end::Container-->
                    <?php include_once("./footer.php")?>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<?php include_once("./explorer_infolb.php")?>
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
		<script>
			$(document).ready(function(){
				$("#bInfo").on("click",function(e){
					$('#bInfo').attr("hidden",true);
					$('#bSimpanInfo').removeAttr("hidden");
					$('.inputInfo').removeAttr("hidden");
					$(".dispInfo").attr("hidden",true);
				})
				$("#bSimpanInfo").on("click",function(e){
					$('#bSimpanInfo').attr("hidden",true);
					$('#bInfo').removeAttr("hidden");
					$('.inputInfo').attr("hidden",true);
					$(".dispInfo").removeAttr("hidden");
					console.log("simpan");
				})
			})
		</script>

	</body>
	<!--end::Body-->
</html>