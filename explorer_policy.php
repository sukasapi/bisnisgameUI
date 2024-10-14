<!--begin::Exolore drawer toggle-->
<button id="policy_toggle" style="top:70%" class="explore-toggle btn btn-sm bg-light-success btn-color-info-700 btn-active-success shadow-sm position-fixed px-8 fw-bolder zindex-3 mt-10 end-0 transform-90 fs-5 rounded-top-0" title="Lihat Kebijakan Perusahaan" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
	<span id="policy_toggle_label">Kebijakan Perusahaan</span>
</button>
<!--end::Exolore drawer toggle-->
<!--begin::Exolore drawer-->
<div id="policy" class="explore bg-white" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'420px', 'lg': '600px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#policy_toggle" data-kt-drawer-close="#policy_close">
	<!--begin::Card-->
	<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="policy_header">
					<h5 class="card-title fw-bold text-gray-600">Kebijakan Perusahan</h5>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="policy_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<div class="card-body" id="policy_body">
					<div class="row mb-10">
						<div class="col-md-12 col-xs-12">
							<div class="border border-gray-300 mx-auto">
								<div class="my-5 mx-5">
									<h3 class="text-center"> Kebijakan Perusahaan</h3>
								</div>
								<div class="my-5 mx-5">
									<h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">Visi</h6>
									<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
										<p>[visi perusahaan]</p>
									</div>
								</div>
								<div class="my-5 mx-5">
									<h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">Kebijakan Keuangan</h6>
									<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
										<p>[visi perusahaan]</p>
									</div>
								</div>
								<div class="my-5 mx-5">
									<h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">Kebijakan Produksi</h6>
									<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
										<p>[visi perusahaan]</p>
									</div>
								</div>
								<div class="my-5 mx-5">
									<h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">Kebijakan Pengadaan</h6>
									<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
										<p>[visi perusahaan]</p>
									</div>
								</div>
								<div class="my-5 mx-5">
									<h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">Kebijakan Penjualan</h6>
									<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
										<p>[visi perusahaan]</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mb-10">
						<div class="col-md-12 col-xs-12">
							<div class="border border-gray-300 mx-auto">
								<div class="my-5 mx-5">
									<h3 class="text-center"> Indikator Perusahaan</h3>
								</div>
								<div class="my-5 mx-5">
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
								</div>
							</div>
						</div>
					</div>
				</div>
	</div>
</div>
<!--End::Explore drawer-->