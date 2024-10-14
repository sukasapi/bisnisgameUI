		<!--begin::Exolore drawer toggle-->
    	<button id="kt_explore_toggle" class="explore-toggle btn btn-sm bg-light-warning btn-color-gray-700 btn-active-warning shadow-sm position-fixed px-8 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-5 rounded-top-0" title="Harga Bahan Baku" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
			<span id="kt_explore_toggle_label">Lingkungan Bisnis</span>
		</button>
		<!--end::Exolore drawer toggle-->
		<!--begin::Exolore drawer-->
		<div id="kt_explore" class="explore bg-white" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'420px', 'lg': '600px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
			<!--begin::Card-->
			<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_explore_header">
					<h5 class="card-title fw-bold text-gray-600">Informasi Lingkungan Bisnis Periode [X]</h5>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_explore_close">
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
				<!--begin::Body-->
				<div class="card-body" id="kt_explore_body">
					<!--begin::Content-->
					<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body" data-kt-scroll-dependencies="#kt_explore_header, #kt_explore_footer" data-kt-scroll-offset="5px">
						
							<!--begin::Licenses-->
							<div class="mb-5">
								<h3 class="text-center"> Informasi Harga Bahan Baku Vendor Periode [X]</h3>
								<!--begin::Comparision-->
								<div class="table-responsive">
									<table class="table table-row-dashed table-row-gray-300 align-middle fs-6 fw-bold text-gray-800 gs-0 gy-3">
										<thead>
											<tr class="border-bottom-0">
												<th class="fw-bolder text-dark fs-6">Vendor </th>
												<th class="text-center">
													<span class="bg-light py-2 px-4 fw-bold fs-8 rounded">Harga Jual</span>
												</th>
												<th class="text-center">
													<span class="bg-light py-2 px-4 fw-bold fs-8 rounded">Diskon > 5000 Unit</span>
												</th>
												<th class="text-center">
													<span class="bg-light py-2 px-4 fw-bold fs-8 rounded">Diskon > 10000 Unit</span>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Vendor A</td>
												<td class="text-center">Rp.x.xxx.xxx,00</td>
												<td class="text-center">5 %</td>
												<td class="text-center">8 %</td>
											</tr>
											<tr>
												<td>Vendor B</td>
												<td class="text-center">Rp.x.xxx.xxx,00</td>
												<td class="text-center">5 %</td>
												<td class="text-center">8 %</td>
											</tr>
											<tr>
												<td>Vendor C</td>
												<td class="text-center">Rp.x.xxx.xxx,00</td>
												<td class="text-center">5 %</td>
												<td class="text-center">8 %</td>
											</tr>
											<tr>
												<td>Vendor D</td>
												<td class="text-center">Rp.x.xxx.xxx,00</td>
												<td class="text-center">5 %</td>
												<td class="text-center">8 %</td>
											</tr>
											<tr>
											<td>Vendor E</td>
												<td class="text-center">Rp.x.xxx.xxx,00</td>
												<td class="text-center">5 %</td>
												<td class="text-center">8 %</td>
											</tr>
											<tr>
											<td>Vendor F</td>
												<td class="text-center">Rp.x.xxx.xxx,00</td>
												<td class="text-center">5 %</td>
												<td class="text-center">8 %</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--end::Comparision-->
							</div>
							<div class="separator separator-content my-5"></div>
							<!--end::Licenses-->
								<div class="mb-5">
									<h3 class="text-center mb-4"> Informasi Lingkungan Bisnis Periode[X]</h3>
									<!--begin::Comparision-->
									<div class="border border-gray-300 mx-auto">		
									<div class="my-5 mx-5">
										<label for="exampleFormControlInput1" class="required form-label">Produktivitas Orang Per Unit</label>
										<input type="email" class="form-control form-control-solid" placeholder="Example input"/>
									</div>
									<div class="my-5 mx-5">
										<label for="exampleFormControlInput1" class="required form-label">Biaya Umum (Overhead)</label>
										<input type="email" class="form-control form-control-solid" placeholder="Example input"/>
									</div>
									<div class="separator my-10"></div>
									<div class="my-5 mx-5">
										<div class="row">
											<div class="col-md-12 col-xs-12">
												<h4>Biaya Penyimpanan</h4>
											</div>
											<div class="col-md-6 col-xs-12">
												<label for="exampleFormControlInput1" class="required form-label">Bahan Baku</label>
												<input type="email" class="form-control form-control-solid" placeholder="Example input"/>
											</div>
											<div class="col-md-6 col-xs-12">
												<label for="exampleFormControlInput1" class="required form-label">Bahan Jadi</label>
												<input type="email" class="form-control form-control-solid" placeholder="Example input"/>
											</div>
										</div>
									</div>
																	
									<div class="separator my-10"></div>		
									<div class="my-5 mx-5">
										<div class="row">
											<div class="col-md-12 col-xs-12">
												<h4>Nilai Persediaan</h4>
											</div>
											<div class="col-md-6 col-xs-12">
												<label for="exampleFormControlInput1" class="required form-label">Bahan Baku</label>
												<input type="email" class="form-control form-control-solid" placeholder="Example input"/>
											</div>
											<div class="col-md-6 col-xs-12">
												<label for="exampleFormControlInput1" class="required form-label">Bahan Jadi</label>
												<input type="email" class="form-control form-control-solid" placeholder="Example input"/>
											</div>
										</div>
									</div>
								</div>	
							<!--end::Comparision-->
						</div>
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->

			</div>
			<!--end::Card-->
		</div>
		<!--end::Exolore drawer-->
		<!--end::Drawers-->