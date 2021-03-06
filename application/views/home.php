<title><?php echo $title; ?></title>
<style>
    .title-h1 {
        font-weight: 800;
        font-size: 40px;
    }

    .title-h4 {
        font-weight: 800;
        font-size: 30px;
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
        background: linear-gradient(180deg, #3E1313 0%, #C70000 100%);background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
    }

    #laut {
        width: 100%;
        min-height: 100vh;
        display: flex;
        position: relative;
        /* background: #8B0003;background-size: cover; */
        background: rgb(139,0,3);
        background: linear-gradient(180deg, rgba(139,0,3,1) 27%, rgba(38,7,7,1) 78%, rgba(38,7,7,1) 100%);
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
    }

    #terakhir {
        width: 100%;
        min-height: 100vh;
        display: flex;
        position: relative;
        /* background: #460411;background-size: cover; */
        background: rgb(58,0,0);
        background: linear-gradient(180deg, rgba(58,0,0,1) 65%, rgba(58,0,0,1) 79%, rgba(70,4,17,1) 100%);
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
    }

    #manfaat-laut{
        padding-top:100px;
        padding-bottom:100px;
        width: 100%;
        display: flex;
        position: relative;
        background: #260707;background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
    }

    #kondisi-laut {
        padding-top:150px;
        padding-bottom:150px;
        width: 100%;
        display: flex;
        position: relative;
        /* background: #180606;background-size: cover; */
        background: rgb(36,7,7);
        background: linear-gradient(180deg, rgba(36,7,7,1) 77%, rgba(36,7,7,1) 85%, rgba(24,6,6,1) 100%);
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
    }

    #awig-awig {
        padding-top:150px;
        padding-bottom:150px;
        width: 100%;
        display: flex;
        position: relative;
        /* background: #260707;background-size: cover; */
        background: rgb(24,6,6);
        background: linear-gradient(180deg, rgba(24,6,6,1) 16%, rgba(38,7,7,1) 53%, rgba(38,7,7,1) 54%, rgba(38,7,7,1) 100%);
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
    }

    #lestariang {
        padding-top:150px;
        padding-bottom:150px;
        min-height: 100vh;
        width: 100%;
        /* display: flex; */
        position: relative;
        background: #3A0000;background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        overflow-x:hidden;
        overflow-y:hidden;
    }

    .header-mobile-fixed .wrapper {
        padding-top: 0px;
    }

    .awan2 {
        animation-name: anim;
        animation-duration: 5s;
        animation-delay: 0.2s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    .awan1 {
        animation-name: anim2;
        animation-duration: 5s;
        animation-delay: 0.2s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    .text-beranda {
        font-family: 'bali_simbar_djregular'; width:800px;
    }

    .text-wana {
        font-family: 'bali_simbar_djregular';
    }

    .swiper-slide1{
        width:200px;
    }

     /* .swiper-slide{
        width:50%;
        height:100%;
    } */

    .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 0 4px;
        background: aliceblue;
    }

    .swiper-slide1 {
        height: 430px;
    }

    @keyframes anim {
        from {
            transform: translateX(-6em)
        }

        /* slide down from off-screen */
        to {
            transform: translateX(0em)
        }
    }
    
    @keyframes anim2 {
        from {
            transform: translateX(-0em)
        }

        /* slide down from off-screen */
        to {
            transform: translateX(-6em)
        }
    }

    .con-awan1 {
        position:absolute;top:-50px;right:0;
    }

    .bt-wana {
        position:absolute;bottom:0px;width:100%;
    }

    @media (max-width: 991px){
        #home {
            min-height: 100vh;
        }

        .header-web {
            display:none;
        }

        .text-beranda {
            padding: 0px 20px 0px 20px;
            font-family: 'bali_simbar_djregular'; width:100%;
        }

        .text-wana {
            padding: 0px 20px 0px 20px;
            font-family: 'bali_simbar_djregular'; width:100%;
        }
        
        .con-awan1 {
            position:absolute;top:200px;right:0;
            width:40%;
        }
    }
</style>

<div class="d-flex flex-column-fluid">
    <div class="container-fluid p-0">
        <section id="home">
            <div class="container header-web" style="background-color: transparent;border: 0px;position:absolute;top:0;z-index:9;">
                <!--begin::Container-->
                <div class="container text-center pt-10">
                    <img alt="Logo" src="<?php echo base_url('assets/img/logo.png');?>" width="100" />
                </div>
                <div class="container text-center mt-7 d-flex justify-content-center">
                    <div class="topbar-item ml-5 mr-5 text-white font-weight-bolder" data-offset="10px,0px">
                        <a href="#home" class="text-white" style="text-decoration:none;cursor:pointer;" href="<?php echo base_url('/');?>"><span>Beranda</span></a>
                    </div>
                    <div class="topbar-item ml-5 mr-5 text-white font-weight-bolder" data-offset="10px,0px">
                        <a href="#laut" class="text-white" style="text-decoration:none;cursor:pointer;" href="<?php echo base_url('/');?>"><span>Samudra kerthi</span></a>
                    </div>
                    <div class="topbar-item ml-5 mr-5 text-white font-weight-bolder" data-offset="10px,0px">
                        <a href="#manfaat-laut" class="text-white" style="text-decoration:none;cursor:pointer;" href="<?php echo base_url('/');?>"><span>Manfaat laut</span></a>
                    </div>
                    <div class="topbar-item ml-5 mr-5 text-white font-weight-bolder" data-offset="10px,0px">
                        <a href="#kondisi-laut" class="text-white" style="text-decoration:none;cursor:pointer;" href="<?php echo base_url('/');?>"><span>Kondisi laut</span></a>
                    </div>
                    <div class="topbar-item ml-5 mr-5 text-white font-weight-bolder" data-offset="10px,0px">
                        <a href="#awig-awig" class="text-white" style="text-decoration:none;cursor:pointer;" href="<?php echo base_url('/');?>"><span>Pelestarian</span></a>
                    </div>

                </div>
                <!--end::Container-->
            </div>
            <div class="justify-content-center align-center pt-20" style="position:relative;z-index:9;" data-aos="fade-up">
                <h1 class="title-h1 text-center text-white" data-aos="fade-up">
                    NANGUN SAT KERTHI LOKA Bali
                </h1>
                <p class="text-center text-white mt-5 text-beranda font-size-h2">Melalui Pola Pembangunan Semesta Berencana</p>
            </div>
            <div class="con-awan1">
                <img class="awan1" width="150%" src="<?php echo base_url('assets/img/awan1.png')?>">
            </div>
            <div style="position:absolute;left:-150px;top:50px;">
                <img class="awan2" width="80%" src="<?php echo base_url('assets/img/awan2.png')?>">
            </div>
            <div style="position:absolute;bottom:0px;width:100%;">
                <img alt="Background vector created by pikisuperstar - www.freepik.com" width="100%" src="<?php echo base_url('assets/img/art-samudra.png')?>">
            </div>
        </section>
        <section id="laut">
            <div class="row d-flex justify-content-end" style="position:relative;z-index:9;" data-aos="fade-up">
                <div class="col-md-6 m-6">
                    <h1 class="title-h1 text-center text-white" data-aos="fade-up" style="font-family: 'bali_simbar_djregular';">
                        w n  ek(??  `?? 
                    </h1>
                    <p class="text-center text-white mt-10 text-wana font-size-h2"> m \?? j g et t) t)  p????  j) g?? n??) s?? ri,  er eg?? d,3,51,5, n?? t r*?? m \??  m nu s en si  ?? Z?? g ?? l?? m su m??$?? h l m/, mi n k di:  ?? et??o s????, h) n??i  k????)  n??i k n/, h j%?? h j) \ n??i w ;?? t t m?? n/, tu k d/, k??) bu t  en??o y, mi w ;?? w n.</p>
                    <p class="text-center text-white mt-10 text-wana font-size-h2"> w n  ek(??  `?? y?? \??i ;?? pu ni k?? t?? h \??) s??  r??*?? w n m nU t??&???? g m h?? n????  b l??. k ew n??) n n?? n r&?? j g et pu ni k?? m b?? t??i s    n??o n???? k n???? ek ;?? k wi gu x n?? en s en eZ??o eK*???? k hu ri p n/. s en m \??i n?? n ek(  `?? pu ni k?? ru m su k??&?? si l?? ;??  tu\??i l/ ?? ??? t?? h p) m) ri n?? ;?? ep??o  pi n??i b l?? Z??u su n?? w \u n n?? en m p h?? k) t n??) ek n&?? h l m/, k?? m, mi w ;?? k) bu ??  Y?? n?? l?? m nU  t?????? h?? t k r x h n???? k/\?? k?? n y*?? eK?? en?? p/,     ] ed??( `??.</p>
                </div>
            </div>
            <div class="bt-wana">
                <img alt="Background vector created by pikisuperstar - www.freepik.com" width="100%" src="<?php echo base_url('assets/img/art-ecosistem.png')?>">
            </div>
        </section>
        <section id="manfaat-laut" class="">
            <div class="justify-content-center align-center mr-auto ml-auto" style="position:relative;z-index:9;" data-aos="fade-up">
                <h1 class="title-h1 text-center text-white" data-aos="fade-up" style="font-family: 'bali_simbar_djregular';">
                     kwiguxn 
                </h1>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">eL?? n??(?? vu w n eK?? s,8,2-3, n?? t r*?? w  n pi n k g) n ;?? p Z??u c??  n?? l  m??o n???? k n??i ri k ew n??) n?? t?? hu t wi h) n??i  k????) n??i k n??i w ;?? pi n k  g) n ;?? p m?? l?? n ?? t) ;?? r&?? j g et. k l n???? r*?? h n???? ek?? eg?? d,3,51,5,   s en n?? t r*?? h?? n??i  k???? l m/, t n?? k l?? n???? \i en????o l?? ;?? h l m??u ni k, m nu s en n??) n???? si ?? m \???? h?? n?????? ri p?? en  }??  n??i l n??u t?? p??i.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> m nU t???? t b?? Z???? w t?? ew n??) n?? t?? g k wi gu  x n?? n m \?? w n t)   t)  p??)  s?? ri  mi n k di:</p>
                <div class="row mt-10 mr-auto ml-auto" style="width:90%;" data-aos="fade-up">
                    <div class="col-md-6 d-flex justify-content-center border-right">
                        <img alt="sumber:https://www.freepik.com" style="border-radius:20px;" width="40%" src="<?php echo base_url('assets/img/oxygen-logo.png');?>">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <h6 class="title-h4 text-center text-white" style="font-family: 'bali_simbar_djregular';">
                            kwiguxn 
                        </h6>
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eL?? n??(?? vu w n eK?? s,8,2-3, n?? t r*?? w  n pi n k g) n ;?? p Z??u c??  n?? l  m??o n???? k n??i ri k ew n??) n?? t?? hu t wi h) n??i  k????) n??i k n??i w ;?? pi n k  g) n ;?? p m?? l?? n ?? t) ;?? r&?? j g et. k l n???? r*?? h n???? ek?? eg?? d,3,51,5,   s en n?? t r*?? h?? n??i  k???? l m/, t n?? k l?? n???? \i en????o l?? ;?? h l m??u ni k, m nu s en n??) n???? si ?? m \???? h?? n?????? ri p?? en  }??  n??i l n??u t?? p??i.</p>
                    </div>
                </div>
                <div class="row mt-10 mr-auto ml-auto" style="width:90%;" data-aos="fade-up">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <h6 class="title-h4 text-center text-white" style="font-family: 'bali_simbar_djregular';">
                            kwiguxn 
                        </h6>
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eL?? n??(?? vu w n eK?? s,8,2-3, n?? t r*?? w  n pi n k g) n ;?? p Z??u c??  n?? l  m??o n???? k n??i ri k ew n??) n?? t?? hu t wi h) n??i  k????) n??i k n??i w ;?? pi n k  g) n ;?? p m?? l?? n ?? t) ;?? r&?? j g et. k l n???? r*?? h n???? ek?? eg?? d,3,51,5,   s en n?? t r*?? h?? n??i  k???? l m/, t n?? k l?? n???? \i en????o l?? ;?? h l m??u ni k, m nu s en n??) n???? si ?? m \???? h?? n?????? ri p?? en  }??  n??i l n??u t?? p??i.</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center border-left">
                        <img alt="sumber:https://www.flaticon.com/" style="border-radius:20px;" width="40%" src="<?php echo base_url('assets/img/planet-logo.png');?>">
                    </div>
                </div>
                <div class="row mt-10 mr-auto ml-auto" style="width:90%;" data-aos="fade-up">
                    <div class="col-md-6 d-flex  justify-content-center border-right">
                        <img alt="sumber:https://www.flaticon.com/" style="border-radius:20px;" width="40%" src="<?php echo base_url('assets/img/fish-logo.png');?>">
                    </div>
                    <div class="col-md-6 flex-column d-flex justify-content-center">
                        <h6 class="title-h4 text-center text-white" style="font-family: 'bali_simbar_djregular';">
                            kwiguxn 
                        </h6>
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eL?? n??(?? vu w n eK?? s,8,2-3, n?? t r*?? w  n pi n k g) n ;?? p Z??u c??  n?? l  m??o n???? k n??i ri k ew n??) n?? t?? hu t wi h) n??i  k????) n??i k n??i w ;?? pi n k  g) n ;?? p m?? l?? n ?? t) ;?? r&?? j g et. k l n???? r*?? h n???? ek?? eg?? d,3,51,5,   s en n?? t r*?? h?? n??i  k???? l m/, t n?? k l?? n???? \i en????o l?? ;?? h l m??u ni k, m nu s en n??) n???? si ?? m \???? h?? n?????? ri p?? en  }??  n??i l n??u t?? p??i.</p>
                    </div>
                </div>
                <div class="row mt-10 mr-auto ml-auto" style="width:90%;" data-aos="fade-up">
                    <div class="col-md-6 flex-column d-flex justify-content-center">
                        <h6 class="title-h4 text-center text-white" style="font-family: 'bali_simbar_djregular';">
                            kwiguxn 
                        </h6>
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eL?? n??(?? vu w n eK?? s,8,2-3, n?? t r*?? w  n pi n k g) n ;?? p Z??u c??  n?? l  m??o n???? k n??i ri k ew n??) n?? t?? hu t wi h) n??i  k????) n??i k n??i w ;?? pi n k  g) n ;?? p m?? l?? n ?? t) ;?? r&?? j g et. k l n???? r*?? h n???? ek?? eg?? d,3,51,5,   s en n?? t r*?? h?? n??i  k???? l m/, t n?? k l?? n???? \i en????o l?? ;?? h l m??u ni k, m nu s en n??) n???? si ?? m \???? h?? n?????? ri p?? en  }??  n??i l n??u t?? p??i.</p>
                    </div>
                    <div class="col-md-6 d-flex  justify-content-center border-left">
                        <img alt="sumber:https://www.flaticon.com/" style="border-radius:20px;" width="40%" src="<?php echo base_url('assets/img/ecosistem-logo.png');?>">
                    </div>
                </div>
                <div class="row mt-10 mr-auto ml-auto" style="width:90%;" data-aos="fade-up">
                    <div class="col-md-6 d-flex  justify-content-center border-right">
                        <img alt="sumber:https://www.flaticon.com/" style="border-radius:20px;" width="40%" src="<?php echo base_url('assets/img/fisherman-logo.png');?>">
                    </div>
                    <div class="col-md-6 flex-column d-flex justify-content-center">
                        <h6 class="title-h4 text-center text-white" style="font-family: 'bali_simbar_djregular';">
                            kwiguxn 
                        </h6>
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eL?? n??(?? vu w n eK?? s,8,2-3, n?? t r*?? w  n pi n k g) n ;?? p Z??u c??  n?? l  m??o n???? k n??i ri k ew n??) n?? t?? hu t wi h) n??i  k????) n??i k n??i w ;?? pi n k  g) n ;?? p m?? l?? n ?? t) ;?? r&?? j g et. k l n???? r*?? h n???? ek?? eg?? d,3,51,5,   s en n?? t r*?? h?? n??i  k???? l m/, t n?? k l?? n???? \i en????o l?? ;?? h l m??u ni k, m nu s en n??) n???? si ?? m \???? h?? n?????? ri p?? en  }??  n??i l n??u t?? p??i.</p>
                    </div>
                   
                </div>

                <!-- <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">m k   t t?? g eK?? en?? p??u ni k??  b) ci k??i s n?? h h  nU t??&?? p k n??) n  n?? en m \??i n/. s wi er ;?? w n m ed?? k wi gu  x  n?? ek ;??, h?? r g  p  tU t?? g h?? pu n/. w n pi n k  p p ru  n???? g t?? en j g?? Z?? g k) s) h?? m?? \ n?? l m??i w ;?? g) n ;?? Z???? m??)  en??o y h e\?? hu ri p????i r g k pu \????(?? w) k s/. ey n&?? m k t t?? g  k  wi gu x n?? n pu ni k p?? si ?? k m( g??*??, pu ni k k b eW?? s?? n h s??i. w n  h s??i  M(?? eT?? s???? ew n??) n n?? n s en j g?? mi c y*?? k su k$?? ` n?? pi n&?? s k Z????   n??  en m hu ri  p??&?? j g et.</p> -->

            </div>
            <div class="bt-wana">
                <img alt="Background vector created by pikisuperstar - www.freepik.com" width="100%" src="<?php echo base_url('assets/img/art-ocean.png')?>">
            </div>
        </section>
        <section id="kondisi-laut" class="">
            <div class="justify-content-center align-center mr-4 ml-4" style="position:relative;z-index:9;" data-aos="fade-up">
                <h1 class="title-h1 text-center text-white" data-aos="fade-up" style="font-family: 'bali_simbar_djregular';">
                     k ew n??) n n/ , 
                </h1>
                
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> ???   en??o en s?? h ek ;?? m ed?? w n s en m d g&??   ep??o r  l n?? hu n. m nU t/,  e w ?? e w ??6 p/ ,??? en??o en s??  , s k Z???? n?? en m hu ri p??&?? w n???   en??o en s?? en mi n k di,12, p$ es en???? es?? s?? m l??,7,3, p$ es en???? es?? es?? p??i l???? w ;?? h m??i b??, s h,17 ,   es??  es?? s??  k??i  s k&?? s j) b g?? g et.  S?? n???? k n?? ek ;?? m   ed?? w n tu(?? ep??o r mi w ;?? p hu n,???   en??o en s?? k eL?? k??  ;?? pi n k  p p ru n???? g et. s ek w n??)  n?? en m \??i n/, w n r&?????   en??o en s?? en n??) n??) ci k?? k n??) n n?? en.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">m nU t?? t h Z(??????? ni ep( si t es?? ri el  n/, nu ju h*?? w wi d \  en????o pi s??i c l *??,12,  yu t  eh k??(?? t ru w(  [,2020. s k di w(  [ w( [ s en l?? n??*??, ed  eP??  er s?? si pi ni ;?? h ek ;?? pu ni k S?? n???? k en????o du k??i   eK?? mu di t s?? en m wi  t??  k&?? w n. t ??(?? ew  n??) n?? ek??(o?? l?? n  n?? k di \) b ;?? w n h?? el g l/, w n s en pu wu  n/, h l?? ;?? pu \??i l h n/, l?? m?? ;??  h?? n????  s??????, mi w ;?? s) r \ n???? m.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> r&?????   en??o en s?? p) m) ri n?? ;?? S?? m??u n?? ri Z?????? k n??i n??i k?? Z???? r n??i n??i  k????*?? s en \u s k???? si k?? n. hu ku m?? en m p h?? k) t  n?? \??u*?? h e\?? \u ku m?? en  \u s k???? si k?? n r&?????   en??o en s?? h?? \??i ;?? pu ni k,??? ???, eN?? eM(???? ,18, w(  [,2013, h?? n??i k??) Z??)?? g h n?? n??) m??) r n?? s n??) ru s k n???? t n/. pu ni k ci h?? ey n&?? p) m) ri n?? ;?? hu r t?? k pi n&?? pi eK?? b) t?? n r&?????   en??o en s??.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> p) m) ri n?? ;?? ep??o pi n??i b l?? t ??(?? hu r t?? t) ek n&?? pi eK?? b) et pu ni k??. ep??o pi n??i b l?? eP?? l?? ;?? b  g?? n????  g?? ni et ni n?? n eS?? s?? l???? w ;?? w n?? d t???? s ej??o n&?? ep??o g?? m??$  hu t n en??o s?? l????( [,2020. pu ni k?? w n?? ;?? si l?? ;?? tu \??i l/,?? t?? h p) m) r  T?? en???? eK?? eN?? mi r&?? w wi d \ n?? en k n???? n?? ed?? w n tu(?? si ?? m m( g?? t n?? \???? s k?? ew n??) n n?? en. pu ni k \( y ni n?? n en r&?? b l?? t) t)  p???? j) g??  n??) s?? ri.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> k?? m h?? n???? v k???? pi s n??) ek n&?? k ew n??) n n?? n mi w ;?? k ?? s??   r?? n?? en. si l?? ;?? tu \???? l/ ?? t?? h ni Z???? p \?? s v k???? pu ni k h?? \??i ;?? pu ni k  h n???? k/\?? k?? n y*?? ??  P?? c r tu m??) k?? ri g Z?? b?? n/,6, bu l n/. ?? t?? h pu ni k?? pi n k t?? m?? l?? l?? k?? nu s t) ek n&?? h l m/. r&?? r h?? n en pu ni k?? k?? m h?? n???? Z)?? m?? ;?? h?? d h??*?? wi ??i h n???? ek?? w s \?? r pi n k ed w n&?? h) n??i   k????) n??i k  n??i w ;?? k) su bu r n/. eH?? hu ni k ci h?? ey n&?? k?? m v k???? r&?? h) n??i k????) n??i k n?? en \  wi n*?? k su k$  ` n??&?? j g et s h si ?? mi c y *?? hu ri p/. h) n??i k????) n??i k en k h?? n( g m y*?? s k di  h??   m nu s. ey n&?? ew n??) n????) n??i k n?????? t wi t ru s en k h) b ;, su m \?? en n n????(?? m l?? ;?? h) n??i k n?????? t wi t ru en pu ni k.</p>
            </div>
            <div class="bt-wana">
                <img alt="Background vector created by pikisuperstar - www.freepik.com" width="100%" src="<?php echo base_url('assets/img/art-trash.png')?>">
            </div>
        </section>
        <section id="awig-awig" class="">
            <div class="justify-content-center align-center mr-auto ml-auto" style="position:relative;z-index:9;" data-aos="fade-up">
                <h1 class="title-h1 text-center text-white" data-aos="fade-up" style="font-family: 'bali_simbar_djregular';">
                     ?? wi   g????wi g/  
                </h1>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">< p mi d n?? h?? n??i k???? s k???? si k?? n mu \?? ;?? r&?? s k Z???? n/ ?? wi  g???? wi  eg??   ]?? d t/. si l?? ;?? tu \??i l???? en r&??  ed   ] p k?? m n???? h n/, k?? n?? m ni, b \??i s en eh l&?? r&?? p b) s) n?? \??i \?????? h?? pu n?? \?? s?? t Z?? g w wi d \ n???? l s/. p b) s) n?? \??i \???? pu ni k k su r t??&??,23, ?? m??(?? p?? s s??i s en k b eW??  s???? s s??i v  ` r r tu pi \i t??????(?? k g) n h*?? r&?? b tu ebo l&?? r&?? w n ek ek r n?? en k t) \) t?? n??i n k g) n ;?? eR?? ;?? su ci p \??i \?????? p \??i \?????? h?? pu n??i ri k.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">?? wi g?????? n??i k?? r \ n?????? s k?? n t ??( si ?? k ci \ k?? n??&???? wi eg?? ] t) \ n n?? g???? \??i \ n?? en \ tu(?? h?? n??i k/ ?? t?? h \u p pi r w n. d g&???? wi g??u ni k mi n k di: l r \ n?? l ep??o ;?? eW?? h  n?? k di du er n/, t?? \??i ;??, p \i mi w ;?? l r \  n??) b ;?? t ru ri s ej??o n&?? w n.?? wi g??u ni k?? d h t?? b?? t?? h t) ku n?? l k?? n y*?? \ eg?? p mi d  n?? s en m  t)  r?? l???? w ;?? h?? m t)  r?? l/.</p>
                <div class="row d-flex justify-content-center mb-4">
                    <div class="col-md-4">
                        <div class="card custom-card" style="width: 34rem;">
                            <img class="card-img-top" src="<?php echo base_url('assets/img/stop-plastic.png')?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">stop plastik</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center">
                        <div class="card card-custom " style="width: 34rem;">
                            <img class="card-img-top" src="<?php echo base_url('assets/img/save-energy.png')?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Hemat energy</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="card custom-card" style="width: 34rem;">
                            <img class="card-img-top" src="<?php echo base_url('assets/img/save-ocean.png')?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Ekosistem laut</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center">
                        <div class="card card-custom " style="width: 34rem;">
                            <img class="card-img-top" src="<?php echo base_url('assets/img/good-fishing.png')?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bt-wana">
                <img alt="Background vector created by pikisuperstar - www.freepik.com" width="100%" src="<?php echo base_url('assets/img/art-awig.png')?>">
            </div>
        </section>
        <section id="terakhir" class="">
            <div class="justify-content-center align-center mr-auto ml-auto" style="position:relative;z-index:9;" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6">
                    
                    </div>
                </div>
                <div class="container text-center pt-10 mb-10">
                    <img alt="Logo" src="<?php echo base_url('assets/img/logo.png');?>" width="150" />
                </div>
                
                <p class="text-center text-white mt-5 text-wana font-size-h2"> m \?? j g et t) t)  p????  j) g?? n??) s?? ri,  er eg?? d,3,51,5, n?? t r*?? m \??  m nu s en si  ?? Z?? g ?? l?? m su m??$?? h l m/, mi n k di:  ?? et??o s????, h) n??i  k????)  n??i k n/, h j%?? h j) \ n??i w ;?? t t m?? n/, tu k d/, k??) bu t  en??o y, mi w ;?? w n.</p>
                <!-- <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">I Kadek Kris Sanjaya</p> -->
            </div>
            <p style="position:absolute;bottom:0;z-index:9;" class="text-center ml-auto mr-auto pb-10 text-white mt-10 font-size-sm">I Kadek Kris Sanjaya ?? 2021</p>
            <div class="bt-wana">
                <img alt="Background vector created by pikisuperstar - www.freepik.com" width="100%" src="<?php echo base_url('assets/img/art-terakhir.png')?>">
            </div>
        </section>
    </div>
</div>

<script>
    AOS.init();
    $('.preloader').fadeOut();
     var swiper6 = new Swiper(".mySwiper6", {
        slidesPerView: 3,
        spaceBetween: 30,
        // freeMode: true,
        pagination: {
          el: ".swiper-pagination6",
          dynamicBullets: true,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                slidesPerView: 3,
                spaceBetween: 30
                },
                // when window width is >= 640px
                640: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
      });

       document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    

    // var swiper = new Swiper(".mySwiper", {
    //     slidesPerView: 1,
    //     spaceBetween: 30,
    //     freeMode: true,
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },
    //     breakpoints: {
    //         // when window width is >= 320px
    //         320: {
    //             slidesPerView: 1,
    //             spaceBetween: 30
    //             },
    //             // when window width is >= 480px
    //             480: {
    //             slidesPerView: 1,
    //             spaceBetween: 30
    //             },
    //             // when window width is >= 640px
    //             640: {
    //             slidesPerView: 1,
    //             spaceBetween: 30
    //         }
    //     }
    // });
    

    // $('.count').each(function () {
    //     $(this).prop('Counter',0).animate({
    //         Counter: 10000
    //     }, {
    //         duration: 1000,
    //         easing: 'swing',
    //         step: function (now) {
    //             $(this).text(numberWithCommas(Math.ceil(now)));
    //         }
    //     });
    // });

    // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    //     anchor.addEventListener('click', function (e) {
    //         e.preventDefault();

    //         document.querySelector(this.getAttribute('href')).scrollIntoView({
    //             behavior: 'smooth'
    //         });
    //     });
    // });

    // function numberWithCommas(x) {
    //     return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    // }

    // const myEvents = [
    //   {
    //     start: '2021-05-15T06:00:00',
    //     end: '2021-04-15T20:30:00',
    //     name: 'Event 1',
    //     url: 'https://www.cssscript.com',
    //     desc: 'Description 1',
    //     // more key value pairs here
    //   },{
    //     start: '2021-05-16T06:00:00',
    //     end: '2021-04-16T20:30:00',
    //     name: 'Event 2',
    //     url: 'https://www.cssscript.com',
    //   },{
    //     start: '2021-05-16T06:00:00',
    //     end: '2021-04-17T20:30:00',
    //     name: 'Event 3',
    //     url: 'https://www.cssscript.com',
    //   },
    // ]

    // new Calendar({
    //     id: '#color-calendar',
    //     eventsData: myEvents,
    //     calendarSize: 'large',
    //     theme: 'glass',
    //     primaryColor: '#23479F',
    //     headerColor: '#fff',
    //     headerBackgroundColor: '#23479F',
    // })

    //   var swiper = new Swiper(".mySwiper1", {
    //     effect: "coverflow",
    //     grabCursor: true,
    //     centeredSlides: true,
    //     slidesPerView: "auto",
    //     initialSlide:1,
    //     coverflowEffect: {
    //       rotate: 50,
    //       stretch: 0,
    //       depth: 500,
    //       modifier: 1,
    //       slideShadows: true,
    //     },
    //     pagination: {
    //       el: ".swiper-pagination1",
    //     },
    //     navigation: {
    //       nextEl: ".swiper-button-next1",
    //       prevEl: ".swiper-button-prev1",
    //     },
    //   });

    //   var swiper5 = new Swiper(".mySwiper5", {
    //     effect: "coverflow",
    //     grabCursor: true,
    //     centeredSlides: true,
    //     slidesPerView: "auto",
    //     initialSlide:1,
    //     coverflowEffect: {
    //       rotate: 50,
    //       stretch: 0,
    //       depth: 500,
    //       modifier: 1,
    //       slideShadows: true,
    //     },
    //     pagination: {
    //       el: ".swiper-pagination5",
    //     },
    //     navigation: {
    //       nextEl: ".swiper-button-next5",
    //       prevEl: ".swiper-button-prev5",
    //     },
    //   });

      
    //   var swiper4 = new Swiper(".mySwiper4", {
    //     pagination: {
    //       el: ".swiper-pagination4",
    //       dynamicBullets: true,
    //     },
    //     navigation: {
    //       nextEl: ".swiper-button-next4",
    //       prevEl: ".swiper-button-prev4",
    //     },
    //   });

    //   var swiper7 = new Swiper(".mySwiper7", {
    //     // pagination: {
    //     //   el: ".swiper-pagination7",
    //     //   dynamicBullets: true,
    //     // },
    //     navigation: {
    //       nextEl: ".swiper-button-next7",
    //       prevEl: ".swiper-button-prev7",
    //     },
    //   });

    //   var swiper6 = new Swiper(".mySwiper6", {
    //     slidesPerView: 2,
    //     spaceBetween: 30,
    //     pagination: {
    //       el: ".swiper-pagination6",
    //       dynamicBullets: true,
    //     },
    //     navigation: {
    //       nextEl: ".swiper-button-next6",
    //       prevEl: ".swiper-button-prev6",
    //     },
    //     breakpoints: {
    //         // when window width is >= 320px
    //         320: {
    //             slidesPerView: 1,
    //             spaceBetween: 20
    //             },
    //             // when window width is >= 480px
    //             480: {
    //             slidesPerView: 2,
    //             spaceBetween: 30
    //             },
    //             // when window width is >= 640px
    //             640: {
    //             slidesPerView: 2,
    //             spaceBetween: 40
    //         }
    //     }
    //   });
    

    //   var swiper2 = new Swiper(".mySwiper2", {
    //     effect: "coverflow",
    //     grabCursor: true,
    //     centeredSlides: true,
    //     slidesPerView: "auto",
    //     initialSlide:1,
    //     coverflowEffect: {
    //       rotate: 10,
    //       stretch: 0,
    //       depth: 1000,
    //       modifier: 1,
    //       slideShadows: true,
    //     },
    //     pagination: {
    //       el: ".swiper-pagination2",
    //     },
    //     navigation: {
    //       nextEl: ".swiper-button-next2",
    //       prevEl: ".swiper-button-prev2",
    //     },
    //   });

    //   var swiper2 = new Swiper(".mySwiper3", {
    //     effect: "coverflow",
    //     grabCursor: true,
    //     centeredSlides: true,
    //     slidesPerView: "auto",
    //     initialSlide:1,
    //     coverflowEffect: {
    //       rotate: 10,
    //       stretch: 0,
    //       depth: 1000,
    //       modifier: 1,
    //       slideShadows: true,
    //     },
    //     pagination: {
    //       el: ".swiper-pagination3",
    //     },
    //     navigation: {
    //       nextEl: ".swiper-button-next3",
    //       prevEl: ".swiper-button-prev3",
    //     },
    //   });

    //   var options = {
    //     chart: {
    //         type: 'bar'
    //     },
    //     series: [{
    //         name: 'sales',
    //         data: [30,40,45,50,49,60,70,91,125]
    //     }],
    //         xaxis: {
    //             categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
    //         },
    //         yaxis: [
    //         {
    //             title: {
    //             text: "Series A"
    //             },
    //         }
    //     ],
    //     }

    //     var chart = new ApexCharts(document.querySelector("#chart"), options);

    //     chart.render();
    
</script>