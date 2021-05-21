<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
        <?php $this->load->view('layouts/css.php'); ?>
		<?php $this->load->view('layouts/js.php'); ?>
		
		<style>
			.burger-icon span::before, .burger-icon span::after {
				background-color: #ffffff;
			}
			.burger-icon span {
				background-color: #ffffff;
			}
			.topbar-item:hover{
				border-bottom: 5px solid white;
			}
			.topbar-item-active{
				border-bottom: 5px solid white;
			}
			.content {
				padding:0;
			}

			
		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body oncontextmenu="return false" id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
		<!--begin::Main-->
		<div class="preloader">
			<div class="loading">
				<img src="<?php echo base_url('assets/img/loader2.gif') ?>" width="50">
			</div>
		</div>
		<!--begin::Header Mobile-->
		<?php $this->load->view('layouts/partials/header_mobile.php'); ?>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
					<?php $this->load->view('layouts/partials/aside.php'); ?>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<!-- <div class="d-flex flex-column-fluid"> -->
							<!--begin::Container-->
							<!-- <div class="container"> -->
								<!--begin::Dashboard-->
									<?php $this->load->view($content) ?>
								<!--end::Dashboard-->
							<!-- </div> -->
							<!--end::Container-->
						<!-- </div> -->
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" style="background-color:#6A0014;">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		
	</body>
	<!--end::Body-->
	<script>
	    // document.onkeydown = function(e) {
        //   if(event.keyCode == 123) {
        //      return false;
        //   }
        //   if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        //      return false;
        //   }
        //   if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
        //      return false;
        //   }
        //   if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        //      return false;
        //   }
        //   if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        //      return false;
        //   }
        // }
	</script>
</html>