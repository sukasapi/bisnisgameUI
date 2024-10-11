<?php
?>
	<!--begin::Exolore drawer toggle-->
    <button id="kt_explore_toggle" class="explore-toggle btn btn-sm bg-body btn-color-gray-700 btn-active-primary shadow-sm position-fixed px-8 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-5 rounded-top-0" title="Lihat Informasi Lingkungan Bisnis" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
			<span id="kt_explore_toggle_label">Informasi Lingkungan Bisnis</span>
		</button>
		<!--end::Exolore drawer toggle-->
		<!--begin::Exolore drawer-->
		<div id="kt_explore" class="explore bg-white" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '440px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
			<!--begin::Card-->
			<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_explore_header">
					<h5 class="card-title fw-bold text-gray-600">Upgrade To Pro</h5>
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
							<!--begin::Comparision-->
							<table class="table table-row-dashed table-row-gray-300 align-middle fs-6 fw-bold text-gray-800 gs-0 gy-3">
								<tr class="border-bottom-0">
									<th class="fw-bolder text-dark fs-3">Pro Version Benefits</th>
									<th class="text-center">
										<span class="bg-light py-2 px-4 fw-bold fs-6 rounded">Free</span>
									</th>
									<th class="text-center">
										<span class="bg-light py-2 px-4 fw-bold fs-6 rounded">Pro</span>
									</th>
								</tr>
								<tr>
									<td>UI Elements</td>
									<td class="text-center">20</td>
									<td class="text-center">100</td>
								</tr>
								<tr>
									<td>In-house Components</td>
									<td class="text-center">20</td>
									<td class="text-center">40</td>
								</tr>
								<tr>
									<td>Crafted Pages</td>
									<td class="text-center">5</td>
									<td class="text-center">20</td>
								</tr>
								<tr>
									<td>Complete Documentation</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>Product Support</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
												<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>Layout Builder</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
												<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>Source Vectors</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
												<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>Email Templates</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
												<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>User Management App</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
												<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>Calendar App</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
												<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>Chat App</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
												<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>Customers App</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
												<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
							</table>
							<!--end::Comparision-->
						</div>
						<!--end::Licenses-->
						<!--begin::Link-->
						<a href="https://kurniafedora.com/products/" class="btn btn-lg explore-btn-primary w-100">Upgrade to
						<span class="fw-bolder ms-1">Kurnia Fedora</span></a>
						<!--end::Link-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_explore_footer">
					<a href="https://kurniafedora.com/products/" class="btn btn-lg explore-btn-secondary w-100">Download
					<span class="fw-bolder ms-1">Kurnia Fedora</span></a>
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Exolore drawer-->
		<!--end::Drawers-->