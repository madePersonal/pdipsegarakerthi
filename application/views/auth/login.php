
<title><?php echo $title; ?></title>
<style>

    .title-h1 {
        font-weight: 800;
        font-size: 45px;
    }

    .nav-link.active {
        color: #ffffff;
        background-color: #a00;
        font-weight: 900;
        border: 1px white solid;
        -webkit-transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;
        transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;
        transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease;
        transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease, -webkit-box-shadow 0.15s ease;
    }

    #home {
        width: 100%;
        min-height: 100vh;
        display: flex;
        position: relative;
        background: radial-gradient(50% 50% at 50% 50%, #335CC4 0%, #23479F 100%);            
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
    }

    #fitur {
        width: 100%;
        padding-top:60px;
        /* display: flex; */
        position: relative;          
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
        padding-bottom:100px;

    }

    #keunggulan {
        width: 100%;
        /* display: flex; */
        position: relative;          
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
        padding-top:60px;
        padding-bottom:100px;
    }

    .p-desc {
        font-size:14px;
        width:70%;
        margin-left:auto;
         margin-right:auto;
    }

    .el-1 {
        position:absolute;bottom:-130px;
    }

    .img-arrow-1 {
        width:400px;
    }

    .img-arrow-2 {
        width:600px;
    }

    #visi-misi{
        width: 100%;
        position:relative;
        background-color:#fff;
        background-size: cover;
        background-position: center;
    }

    #program{
        width: 100%;
        position:relative;
        background-color:#fff;
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        padding: 100px 0px 100px 0px;
    }

    #program1{
        width: 100%;
        position:relative;
        background-color:#fff;
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        padding: 100px 0px 100px 0px;
    }

    #kontak{
        width: 100%;
        position:relative;
        background-color:#fff;
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        padding: 100px 0px 100px 0px;
    }

    #ikuti{
        width: 100%;
        position:relative;
        background-size: cover;
        background: linear-gradient(180deg, #FFFFFF 0%, #F7F7F7 99.99%);
        background-position: center;
        align-items: center;
        padding: 100px 0px 100px 0px;
    }

    #siap{
        width: 100%;
        position:relative;
        background-size: cover;
        background: linear-gradient(180deg, #20449A 0%, #3460CE 100%);
        background-position: center;
        justify-content: center;
        align-items: center;
        padding: 100px 0px 100px 0px;
    }

    #partner{
        width: 100%;
        position:relative;
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
    }

    #peserta{
        width: 100%;
        position:relative;
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        padding: 150px 0px 150px 0px;
    }

    #kalendar{
        width: 100%;
        position:relative;
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        padding: 150px 0px 150px 0px;
    }

    #testimonial{
        width: 100%;
        position:relative;
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        padding: 150px 0px 150px 0px;
    }

    .header-mobile-fixed .wrapper {
        padding-top: 0px;
    }

    .title-visi {
        font-weight: 600;font-size: 36px;line-height: 45px;text-align: center;color: #2B4C9D;
    }

    .title-fitur {
        font-weight: 600;font-size: 36px;font-weight:bolder;line-height: 45px;text-align: center;color: #2B4C9D;
    }

    .swiper-slide1{
        width:50%;
        height:100%;
    }

    .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide2{
        width:40%;
        height:100%;
    }

    .swiper-slide {
        background-position: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height:100%;
    }

    .title-program {
        color:#23479F;
        padding-left:70px;
    }

    .text-blue {
        color:#23479F;
    }

    .text-kuning {
        color:#F3C729;
    }

    .calendar__header {
        justify-content: center;
    }

    .color-calendar{
        width:100%;
    }

    .calendar__body{
        justify-content: center;
    }

    .calendar__weekdays {
        justify-content: center;
    }

    .calendar__days{
        justify-content: center;
    }

    .color-calendar.glass .calendar__days .calendar__day-bullet {
        background-color: #f3c827;
        width: 6px;
    }

    .el-bottom{
        position:absolute;bottom:-120px;width:100%;
    }
    

    @media (max-width: 991px){
        #home {
            min-height: 100vh;
        }

        .el-bottom{
            position:absolute;bottom:-10px;width:100%;
        }

        .swiper-slide2{
            width:70%;
            height:100%;
        }

        .p-desc {
            width:100%;
        }

        .title-h1 {
            font-weight: 800;
            font-size: 28px;
        }

        .el-1 {
            position:absolute;bottom:-20px;
        }

        .img-arrow-1 {
            width:200px;
        }

        .img-arrow-2 {
            width:300px;
        }

        .title-visi {
            font-size: 28px;
        }

        .title-program {
            color:#23479F;
            padding-left:10px;
        }

        .o-2 {
            order: 1;
        }

		 .cont-item{
            margin: 20px;
        }
    }
</style>

<div class="d-flex flex-column-fluid">
    <div class="container-fluid p-0">
        <section id="home">
            <div class="justify-content-center align-center" data-aos="fade-up">
				<div class="card card-custom gutter-b cont-item" style="position:relative;z-index:9;">
					<div class="card-body p-20">
						<div class="text-center mb-10">
							<h1 class="text-blue font-weight-boldest mb-5" style="font-weight:800;"><span class="text-kuning">Pejuang</span>Ujian.</h1>
							<p style="text-dark-50" style="width:60%;">Masuk untuk mengerjakan try out gratis dan memilih <br>program belajar lainnya</p>
						</div>
						<div class="form-group">
							<label class="text-dark-50">Username</label>
							<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username">
						</div>
						<div class="form-group">
							<label class="text-dark-50">Password</label>
							<input type="password" class="form-control form-control-lg form-control-solid" placeholder="Password">
						</div>
						<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
							<div class="checkbox-inline">
								<label class="checkbox checkbox-outline m-0 text-muted">
								<input type="checkbox" name="remember" checked>
								<span></span>Ingat saya</label>
							</div>
							<a href="<?php echo base_url('forgot');?>" id="kt_login_forgot" class="text-muted text-hover-primary">Lupa kata sandi?</a>
						</div>
						<a class="btn btn-warning btn-lg btn-block font-weight-bolder pl-7 pr-7 text-center" style="text-decoration:none;cursor:pointer;color:#23479F;background-color:#F3C729;border-color:#F3C729;"><span>Masuk</span></a>
						<p class="text-center mt-5">Belum punya akun? <a href="<?php echo base_url('register');?>">Daftar disini</a></p>
					</div>
				</div>
            </div>
            <div class="el-1">
                <img width="100%" src="<?php echo base_url('assets/img/el-1.png')?>">
            </div>
            <div style="position:absolute;top:-50px;right:-50px;">
                <img class="img-arrow-1" src="<?php echo base_url('assets/img/arrow-1.png')?>">
            </div>
            <div style="position:absolute;bottom:0px;left:-50px;">
                <img class="img-arrow-2" src="<?php echo base_url('assets/img/arrow-2.png')?>">
            </div>
        </section>
    </div>
</div>
<script>
    AOS.init();
	$('.preloader').fadeOut();
	

	$('#btnLogin').click(function(){
		if($('.username').val() == ''){
			$('.username').addClass('is-invalid');
			$('.need-username').fadeIn(3);
		}else if($('.password').val() == ''){
			$('.password').addClass('is-invalid');
			$('.need-password').fadeIn(3);
		}else if($('.warehouse').val() == ''){
			$('.need-warehouse').fadeIn(3);
		}else{
			$('.preloader').fadeIn();
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url('auth/login') ?>',
				data: {
					username: $('.username').val(),
					password: $('.password').val(),
				},
				dataType: 'json',
				success: function(data) {
					console.log(data)
					if(data){
						window.location = "<?php echo base_url('/');?>";
					}else{
						bootbox.alert({
							message: "Wrong username or password",
							backdrop: true,
							size: 'small'
						});
					}
					$('.preloader').fadeOut();
				},
				error: function (xhr, desc, err){
					console.log(xhr.responseText);
				}
			});
		}
	});
</script>

<!-- end script -->