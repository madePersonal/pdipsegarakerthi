
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

    .cont-item{
        width:700px;
    }

    .tagify.tagify--focus{
        border: solid 1px #2B4C9D;
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
            /* margin: 20px; */
            width:100%;
        }

        .cn{
            padding:15px;
        }
    }
</style>

<div class="d-flex flex-column-fluid">
    <div class="container-fluid p-0">
        <section id="home">
            <div class="justify-content-center align-center cn" data-aos="fade-up">
				<div class="card card-custom gutter-b cont-item" style="position:relative;z-index:9;">
					<div class="card-body p-20">
						<div class="text-center mb-10">
							<h1 class="text-blue font-weight-boldest mb-5" style="font-weight:800;"><span class="text-kuning">Pejuang</span>Ujian.</h1>
							<p style="text-dark-50" style="width:60%;">Daftar dan nikmati belajar dengan soal-soal CPNS yang<br> kami sediakan</p>
						</div>
						<div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark-50">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label class="text-dark-50">Email</label>
                                    <input type="email" class="form-control form-control-solid" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="text-dark-50">No. HP</label>
                                    <input type="number" class="form-control form-control-solid" placeholder="No. HP">
                                </div>
                                <div class="form-group">
                                    <label class="text-dark-50">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-solid" placeholder="Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <label class="text-dark-50">Tanggal Lahir</label>
                                    <div class="radio-inline">
                                        <label class="radio radio-accent radio-primary">
                                        <input type="radio" name="radios20">
                                        <span></span>Pria</label>
                                        <label class="radio radio-accent radio-primary">
                                        <input type="radio" name="radios20" checked="checked">
                                        <span></span>Wanita</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark-50">Provinsi</label>
                                    <select class="form-control form-control-solid">
                                        <option>Aceh</option>
                                        <option>Bali</option>
                                        <option>Bandung</option>
                                        <option>Jakarta</option>
                                    </select>
                                </div>
                               
                                <div class="form-group">
                                     <label class="text-dark-50">Instansi Favorit</label>
                                    <input id="kt_tagify_1" style="border-color:transparent;" class="form-control form-control-solid tagify" name='tags' placeholder='Instansi Favorit Anda...' />
                                    <!-- <div class="mt-3">
                                        <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-primary font-weight-bold">Hapus semua</a>
                                    </div> -->
                                </div>
                                 <div class="form-group">
                                    <label class="text-dark-50">Kata Sandi</label>
                                    <input type="password" class="form-control form-control-solid" placeholder="Kata Sandi">
                                </div>
                                <div class="form-group">
                                    <label class="text-dark-50">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control form-control-solid" placeholder="Konfirmasi Kata Sandi">
                                </div>
                            </div>
                        </div>
						<a class="btn btn-warning btn-block font-weight-bolder pl-7 pr-7 text-center" style="text-decoration:none;cursor:pointer;color:#23479F;background-color:#F3C729;border-color:#F3C729;"><span>Daftar</span></a>
						<p class="text-center mt-5">Sudah punya akun? <a href="<?php echo base_url('login');?>">Masuk disini</a></p>
					</div>
				</div>
                <!-- <h1 class="title-h1 text-center text-white" data-aos="fade-up">Siapkan Diri Hadapi CPNS</h1>
                <h1 class="title-h1 text-center text-white" data-aos="fade-up">Bersama Kami</h1>
                <p class="p-desc text-center text-white pl-10 pr-10 mt-5" data-aos="fade-up">Jangan sampai persiapanmu yang minim menghalangi impianmu menjadi PNS. Pilih programnya sekarang dan mulai belajar lebih awal.</p>
                <div class="text-center mt-10" style="position:relative;z-index:9;">
                    <a data-aos="fade-up" class="btn btn-warning font-weight-bolder pl-7 pr-7 text-center" style="text-decoration:none;cursor:pointer;color:#23479F;background-color:#F3C729;border-color:#F3C729;"><span>Gabung Sekarang, GRATIS!</span></a>
                </div> -->
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

    // Class definition
var KTTagifyDemos = function() {
    // Private functions
    var demo1 = function() {
        var input = document.getElementById('kt_tagify_1'),
            // init Tagify script on the above inputs
            tagify = new Tagify(input, {
                whitelist: ["Kementerian Koordinator Bidang Politik, Hukum dan Keamanan","A# .NET", "A# (Axiom)", "A-0 System", "A+", "A++", "ABAP", "ABC", "ABC ALGOL", "ABSET", "ABSYS", "ACC", "Accent", "Ace DASL", "ACL2", "Avicsoft", "ACT-III", "Action!", "ActionScript", "Ada", "Adenine", "Agda", "Agilent VEE", "Agora", "AIMMS", "Alef", "ALF", "ALGOL 58", "ALGOL 60", "ALGOL 68", "ALGOL W", "Alice", "Alma-0", "AmbientTalk", "Amiga E", "AMOS", "AMPL", "Apex (Salesforce.com)", "APL", "AppleScript", "Arc", "ARexx", "Argus", "AspectJ", "Assembly language", "ATS", "Ateji PX", "AutoHotkey", "Autocoder", "AutoIt", "AutoLISP / Visual LISP", "Averest", "AWK", "Axum", "Active Server Pages", "ASP.NET", "B", "Babbage", "Bash", "BASIC", "bc", "BCPL", "BeanShell", "Batch (Windows/Dos)", "Bertrand", "BETA", "Bigwig", "Bistro", "BitC", "BLISS", "Blockly", "BlooP", "Blue", "Boo", "Boomerang", "Bourne shell (including bash and ksh)", "BREW", "BPEL", "B", "C--", "C++ â€“ ISO/IEC 14882", "C# â€“ ISO/IEC 23270", "C/AL", "CachÃ© ObjectScript", "C Shell", "Caml", "Cayenne", "CDuce", "Cecil", "Cesil", "CÃ©u", "Ceylon", "CFEngine", "CFML", "Cg", "Ch", "Chapel", "Charity", "Charm", "Chef", "CHILL", "CHIP-8", "chomski", "ChucK", "CICS", "Cilk", "Citrine (programming language)", "CL (IBM)", "Claire", "Clarion", "Clean", "Clipper", "CLIPS", "CLIST", "Clojure", "CLU", "CMS-2", "COBOL â€“ ISO/IEC 1989", "CobolScript â€“ COBOL Scripting language", "Cobra", "CODE", "CoffeeScript", "ColdFusion", "COMAL", "Combined Programming Language (CPL)", "COMIT", "Common Intermediate Language (CIL)", "Common Lisp (also known as CL)", "COMPASS", "Component Pascal", "Constraint Handling Rules (CHR)", "COMTRAN", "Converge", "Cool", "Coq", "Coral 66", "Corn", "CorVision", "COWSEL", "CPL", "CPL", "Cryptol", "csh", "Csound", "CSP", "CUDA", "Curl", "Curry", "Cybil", "Cyclone", "Cython", "Java", "Javascript", "M2001", "M4", "M#", "Machine code", "MAD (Michigan Algorithm Decoder)", "MAD/I", "Magik", "Magma", "make", "Maple", "MAPPER now part of BIS", "MARK-IV now VISION:BUILDER", "Mary", "MASM Microsoft Assembly x86", "MATH-MATIC", "Mathematica", "MATLAB", "Maxima (see also Macsyma)", "Max (Max Msp â€“ Graphical Programming Environment)", "Maya (MEL)", "MDL", "Mercury", "Mesa", "Metafont", "Microcode", "MicroScript", "MIIS", "Milk (programming language)", "MIMIC", "Mirah", "Miranda", "MIVA Script", "ML", "Model 204", "Modelica", "Modula", "Modula-2", "Modula-3", "Mohol", "MOO", "Mortran", "Mouse", "MPD", "Mathcad", "MSIL â€“ deprecated name for CIL", "MSL", "MUMPS", "Mystic Programming L"],
                blacklist: [".NET", "PHP"], // <-- passed as an attribute in this demo
            })


        // "remove all tags" button event listener
        document.getElementById('kt_tagify_1_remove').addEventListener('click', tagify.removeAllTags.bind(tagify));

        // Chainable event listeners
        tagify.on('add', onAddTag)
            .on('remove', onRemoveTag)
            .on('input', onInput)
            .on('edit', onTagEdit)
            .on('invalid', onInvalidTag)
            .on('click', onTagClick)
            .on('dropdown:show', onDropdownShow)
            .on('dropdown:hide', onDropdownHide)

        // tag added callback
        function onAddTag(e) {
            console.log("onAddTag: ", e.detail);
            console.log("original input value: ", input.value)
            tagify.off('add', onAddTag) // exmaple of removing a custom Tagify event
        }

        // tag remvoed callback
        function onRemoveTag(e) {
            console.log(e.detail);
            console.log("tagify instance value:", tagify.value)
        }

        // on character(s) added/removed (user is typing/deleting)
        function onInput(e) {
            console.log(e.detail);
            console.log("onInput: ", e.detail);
        }

        function onTagEdit(e) {
            console.log("onTagEdit: ", e.detail);
        }

        // invalid tag added callback
        function onInvalidTag(e) {
            console.log("onInvalidTag: ", e.detail);
        }

        // invalid tag added callback
        function onTagClick(e) {
            console.log(e.detail);
            console.log("onTagClick: ", e.detail);
        }

        function onDropdownShow(e) {
            console.log("onDropdownShow: ", e.detail)
        }

        function onDropdownHide(e) {
            console.log("onDropdownHide: ", e.detail)
        }
    }



    return {
        // public functions
        init: function() {
            demo1();
        }
    };
}();

jQuery(document).ready(function() {
    KTTagifyDemos.init();
});
	
</script>

<!-- end script -->