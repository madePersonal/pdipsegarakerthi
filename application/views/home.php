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
                        w n  ek(¾  `ø 
                    </h1>
                    <p class="text-center text-white mt-10 text-wana font-size-h2"> m \Ñ j g et t) t)  p¾À  j) gÞ nÞ) sÓ ri,  er egÙ d,3,51,5, nÞ t r*¾ m \Ñ  m nu s en si  Œ Zÿ g ò lø m su mã$¾ h l m/, mi n k di:  Á etßo sæ¨, h) nÓi  k¾À)  nÓi k n/, h j%¾ h j) \ nßi w ;¾ t t mã n/, tu k d/, kÞ) bu t  enÓo y, mi w ;¾ w n.</p>
                    <p class="text-center text-white mt-10 text-wana font-size-h2"> w n  ek(¾  `ø yø \ái ;¾ pu ni kú tŠ h \Þ) sÓ  rê*¾ w n m nU tÉ&¾õ g m hø nÑ¡  b lø. k ew nÓ) n nÙ n r&¾ j g et pu ni kø m bÙ tæi s    nŠo nÓ¡ k n¾À ek ;¾ k wi gu x nñ en s en eZÿo eK*ÿ¾ k hu ri p n/. s en m \Ði nÙ n ek(  `ø pu ni kø ru m su kÉ&¾ si lø ;¾  tu\ái l/ ú ᬉ tŠ h p) m) ri nÓ ;¾ epÉo  pi nŠi b lø Zÿu su næ w \u n nŠ en m p hø k) t nÓ) ek n&¾ h l m/, kÉ m, mi w ;¾ k) bu Œ  Yÿ nã lø m nU  tÓËø hø t k r x h nÓ¡ k/\Þ k× n y*¾ eKÿ enŠ p/,     ] edÐ( `ø.</p>
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
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">eLÿ nÓ(¾ vu w n eKÿ s,8,2-3, nÞ t r*¾ w  n pi n k g) n ;¾ p Zÿu cê  nÀ l  mŠo nÓ¡ k nÀi ri k ew nÓ) næ tÉ hu t wi h) nÓi  k¾À) nÓi k nßi w ;¾ pi n k  g) n ;¾ p mÉ lø n ò t) ;¾ r&¾ j g et. k l nÓ¡ r*¾ h nÓ¡ ekÉ egÙ d,3,51,5,   s en nÞ t r*¾ hø nÑi  k¾À l m/, t næ k lø nÑ¡ \i en¾Ào lø ;¾ h l mæu ni k, m nu s en nÓ) næÉ si Œ m \á¡ hø n¾À¡ ri pŠ en  }ÿ  nÕi l nŠu tÊ pÓi.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> m nU tÐø t bæ ZÇÿ w tø ew nÓ) nÓ tø g k wi gu  x nÙ n m \Ñ w n t)   t)  pÞ)  sÓ ri  mi n k di:</p>
                <div class="row mt-10 mr-auto ml-auto" style="width:90%;" data-aos="fade-up">
                    <div class="col-md-6 d-flex justify-content-center border-right">
                        <img alt="sumber:https://www.freepik.com" style="border-radius:20px;" width="40%" src="<?php echo base_url('assets/img/oxygen-logo.png');?>">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <h6 class="title-h4 text-center text-white" style="font-family: 'bali_simbar_djregular';">
                            kwiguxn 
                        </h6>
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eLÿ nÓ(¾ vu w n eKÿ s,8,2-3, nÞ t r*¾ w  n pi n k g) n ;¾ p Zÿu cê  nÀ l  mŠo nÓ¡ k nÀi ri k ew nÓ) næ tÉ hu t wi h) nÓi  k¾À) nÓi k nßi w ;¾ pi n k  g) n ;¾ p mÉ lø n ò t) ;¾ r&¾ j g et. k l nÓ¡ r*¾ h nÓ¡ ekÉ egÙ d,3,51,5,   s en nÞ t r*¾ hø nÑi  k¾À l m/, t næ k lø nÑ¡ \i en¾Ào lø ;¾ h l mæu ni k, m nu s en nÓ) næÉ si Œ m \á¡ hø n¾À¡ ri pŠ en  }ÿ  nÕi l nŠu tÊ pÓi.</p>
                    </div>
                </div>
                <div class="row mt-10 mr-auto ml-auto" style="width:90%;" data-aos="fade-up">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <h6 class="title-h4 text-center text-white" style="font-family: 'bali_simbar_djregular';">
                            kwiguxn 
                        </h6>
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eLÿ nÓ(¾ vu w n eKÿ s,8,2-3, nÞ t r*¾ w  n pi n k g) n ;¾ p Zÿu cê  nÀ l  mŠo nÓ¡ k nÀi ri k ew nÓ) næ tÉ hu t wi h) nÓi  k¾À) nÓi k nßi w ;¾ pi n k  g) n ;¾ p mÉ lø n ò t) ;¾ r&¾ j g et. k l nÓ¡ r*¾ h nÓ¡ ekÉ egÙ d,3,51,5,   s en nÞ t r*¾ hø nÑi  k¾À l m/, t næ k lø nÑ¡ \i en¾Ào lø ;¾ h l mæu ni k, m nu s en nÓ) næÉ si Œ m \á¡ hø n¾À¡ ri pŠ en  }ÿ  nÕi l nŠu tÊ pÓi.</p>
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
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eLÿ nÓ(¾ vu w n eKÿ s,8,2-3, nÞ t r*¾ w  n pi n k g) n ;¾ p Zÿu cê  nÀ l  mŠo nÓ¡ k nÀi ri k ew nÓ) næ tÉ hu t wi h) nÓi  k¾À) nÓi k nßi w ;¾ pi n k  g) n ;¾ p mÉ lø n ò t) ;¾ r&¾ j g et. k l nÓ¡ r*¾ h nÓ¡ ekÉ egÙ d,3,51,5,   s en nÞ t r*¾ hø nÑi  k¾À l m/, t næ k lø nÑ¡ \i en¾Ào lø ;¾ h l mæu ni k, m nu s en nÓ) næÉ si Œ m \á¡ hø n¾À¡ ri pŠ en  }ÿ  nÕi l nŠu tÊ pÓi.</p>
                    </div>
                </div>
                <div class="row mt-10 mr-auto ml-auto" style="width:90%;" data-aos="fade-up">
                    <div class="col-md-6 flex-column d-flex justify-content-center">
                        <h6 class="title-h4 text-center text-white" style="font-family: 'bali_simbar_djregular';">
                            kwiguxn 
                        </h6>
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eLÿ nÓ(¾ vu w n eKÿ s,8,2-3, nÞ t r*¾ w  n pi n k g) n ;¾ p Zÿu cê  nÀ l  mŠo nÓ¡ k nÀi ri k ew nÓ) næ tÉ hu t wi h) nÓi  k¾À) nÓi k nßi w ;¾ pi n k  g) n ;¾ p mÉ lø n ò t) ;¾ r&¾ j g et. k l nÓ¡ r*¾ h nÓ¡ ekÉ egÙ d,3,51,5,   s en nÞ t r*¾ hø nÑi  k¾À l m/, t næ k lø nÑ¡ \i en¾Ào lø ;¾ h l mæu ni k, m nu s en nÓ) næÉ si Œ m \á¡ hø n¾À¡ ri pŠ en  }ÿ  nÕi l nŠu tÊ pÓi.</p>
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
                        <p class="text-center text-white mt-10 text-wana font-size-h2">eLÿ nÓ(¾ vu w n eKÿ s,8,2-3, nÞ t r*¾ w  n pi n k g) n ;¾ p Zÿu cê  nÀ l  mŠo nÓ¡ k nÀi ri k ew nÓ) næ tÉ hu t wi h) nÓi  k¾À) nÓi k nßi w ;¾ pi n k  g) n ;¾ p mÉ lø n ò t) ;¾ r&¾ j g et. k l nÓ¡ r*¾ h nÓ¡ ekÉ egÙ d,3,51,5,   s en nÞ t r*¾ hø nÑi  k¾À l m/, t næ k lø nÑ¡ \i en¾Ào lø ;¾ h l mæu ni k, m nu s en nÓ) næÉ si Œ m \á¡ hø n¾À¡ ri pŠ en  }ÿ  nÕi l nŠu tÊ pÓi.</p>
                    </div>
                   
                </div>

                <!-- <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">m k   t tø g eKÿ enŠ pæu ni kø  b) ci kæi s nŠ h h  nU tÉ&¾ p k nÓ) n  nŠ en m \Ði n/. s wi er ;¾ w n m edÙ k wi gu  x  nÀ ek ;¾, hø r g  p  tU tñ g hø pu n/. w n pi n k  p p ru  n¾é g tŠ en j gø Zÿ g k) s) hø mã \ nÀ l mßi w ;¾ g) n ;¾ Zøÿ mæ)  enÓo y h e\á hu ri p¾Ài r g k pu \Ð¡(¾ w) k s/. ey n&¾ m k t tø g  k  wi gu x nÙ n pu ni k pÉ si Œ k m( gê*¾, pu ni k k b eWÿ sÙ n h sÉi. w n  h sÉi  M(ÿ eTÿ s¾Ð ew nÓ) n nÙ n s en j gø mi c y*¾ k su k$¾ ` nÐ pi n&¾ s k ZÇÿ   nŠ  en m hu ri  pÉ&¾ j g et.</p> -->

            </div>
            <div class="bt-wana">
                <img alt="Background vector created by pikisuperstar - www.freepik.com" width="100%" src="<?php echo base_url('assets/img/art-ocean.png')?>">
            </div>
        </section>
        <section id="kondisi-laut" class="">
            <div class="justify-content-center align-center mr-4 ml-4" style="position:relative;z-index:9;" data-aos="fade-up">
                <h1 class="title-h1 text-center text-white" data-aos="fade-up" style="font-family: 'bali_simbar_djregular';">
                     k ew nÓ) n n/ , 
                </h1>
                
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> ᬇ   enÑo en sê h ek ;¾ m edÙ w n s en m d g&¾   epÞo r  l næ hu n. m nU t/,  e w ¿ e w ¿6 p/ ,ᬇ enÑo en sê  , s k ZÇÿ nŠ en m hu ri pÉ&¾ w nᬇ   enÑo en sê en mi n k di,12, p$ es enŠæ esê sß m lê,7,3, p$ es enŠæ esê esÉ pÓi lßø w ;¾ h mæi bø, s h,17 ,   esæ  esê sæ  k×i  s k&¾ s j) b gé g et.  Sÿ nÓ¡ k nÀ ek ;¾ m   edÙ w n tu(¾ epÞo r mi w ;¾ p hu n,ᬇ   enÑo en sê k eLÿ kÓ  ;¾ pi n k  p p ru n¾é g et. s ek w nÓ)  nŠ en m \Ði n/, w n r&¾ᬇ   enÑo en sê en nÓ) nã) ci kæ k nÓ) n nñ en.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">m nU tÑ t h Z(ÿ¾ᬉ ni ep( si t esß ri el  n/, nu ju h*¾ w wi d \  enÓËo pi såi c l *¾,12,  yu t  eh kÓ(¾ t ru w(  [,2020. s k di w(  [ w( [ s en lø nÓ*¾, ed  ePÿ  er sÓ si pi ni ;¾ h ek ;¾ pu ni k Sÿ nÓ¡ k enæÉo du k×i   eKÿ mu di t sŠ en m wi  tŠ  k&¾ w n. t ò(¾ ew  nÓ) næ ekÓ(o¾ lê n  nŠ k di \) b ;¾ w n hø el g l/, w n s en pu wu  n/, h lø ;¾ pu \Ši l h n/, lø mã ;¾  hø nÑ¡  sÓËø, mi w ;¾ s) r \ n¾À m.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> r&¾ᬇ   enÑo en sê p) m) ri nÓ ;¾ Sÿ mæu nå ri ZÇøÿ k nÀi nÑi ká Zéÿ r nÀi nÑi  k¾Š*¾ s en \u s k¾À si kÙ n. hu ku mŠ en m p hø k) t  nÞ \Šu*¾ h e\á \u ku mŠ en  \u s k¾À si kÙ n r&¾ᬇ   enÑo en sê hø \ái ;¾ pu ni k,ᬉ ᬉ, eNÿ eM(ÿ¾ ,18, w(  [,2013, hø nÑi kæ) ZÇ)ÿ g h nÑ næ) mã) r nÓ s nÐ) ru s k nÀ¡ t n/. pu ni k ci hÂ ey n&¾ p) m) ri nÓ ;¾ hu r tø k pi n&¾ pi eKÿ b) tÙ n r&¾ᬇ   enÑo en sê.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> p) m) ri nÓ ;¾ epÉo pi nŠi b lø t ò(¾ hu r tø t) ek n&¾ pi eKÿ b) et pu ni kø. epÉo pi nŠi b lø ePÿ lø ;¾ b  gê n¾é  gø ni et ni nÙ n eSÿ sê lßø w ;¾ w nÁ d tÉø s ejÉo n&¾ epÉo gÉ mæ$  hu t n enŠo sê l¾Ù( [,2020. pu ni kø w nÓ ;¾ si lø ;¾ tu \ái l/,ú tŠ h p) m) r  Tÿ en¾À eKÿ eNÿ mi r&¾ w wi d \ nŠ en k nÓ¡ nß edÙ w n tu(¾ si Œ m m( gø t næ \É± s kÐ ew nÓ) n nñ en. pu ni k \( y ni nÙ n en r&¾ b lø t) t)  p¾À j) gÞ  nÞ) sÓ ri.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2"> kÉ m hø nÑ¡ v kÓø pi s nÓ) ek n&¾ k ew nÓ) n nÙ n mi w ;¾ k ò sÓ   rê nñ en. si lø ;¾ tu \á¡ l/ ú tŠ h ni ZÇÿ p \É s v kÓø pu ni k hø \ái ;¾ pu ni k  h nÓ¡ k/\Þ k× n y*¾ ú  Pÿ c r tu mæ) kÙ ri g Zÿ bÉ n/,6, bu l n/. ú tŠ h pu ni kø pi n k tø mã lã lø kß nu s t) ek n&¾ h l m/. r&¾ r hø n en pu ni kø kÉ m hø nÑ¡ Z)ÿ mã ;¾ hø d hê*¾ wi Œi h nÓ¡ ekÑ w s \Ð r pi n k ed w n&¾ h) nÓi   k¾À) nÓi k  nßi w ;¾ k) su bu r n/. eHÿ hu ni k ci hÂ ey n&¾ kÉ m v kÓø r&¾ h) nÓi k¾À) nÓi k nŠ en \  wi n*¾ k su k$  ` nÉ&¾ j g et s h si Œ mi c y *¾ hu ri p/. h) nÓi k¾À) nÓi k en k hø n( g m y*¾ s k di  hø   m nu s. ey n&¾ ew nÓ) n¾À) nÓi k n¾À¡ t wi t ru s en k h) b ;, su m \Ñ en n nÑ¡(¾ m lø ;¾ h) nÓi k n¾À¡ t wi t ru en pu ni k.</p>
            </div>
            <div class="bt-wana">
                <img alt="Background vector created by pikisuperstar - www.freepik.com" width="100%" src="<?php echo base_url('assets/img/art-trash.png')?>">
            </div>
        </section>
        <section id="awig-awig" class="">
            <div class="justify-content-center align-center mr-auto ml-auto" style="position:relative;z-index:9;" data-aos="fade-up">
                <h1 class="title-h1 text-center text-white" data-aos="fade-up" style="font-family: 'bali_simbar_djregular';">
                     Á wi   g¾Àwi g/  
                </h1>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">< p mi d nÑ hø nÑi kå¡ s k¾À si kÙ n mu \á ;¾ r&¾ s k ZÇÿ n/ Á wi  g¾À wi  egÑ   ]Á d t/. si lø ;¾ tu \ái l¾ñ en r&¾  ed   ] p kÉ m n®Û h n/, kø nÓ m ni, b \Þi s en eh l&¾ r&¾ p b) s) næ \Þi \Š¨¾ hø pu nß \Ñ sÓ t Zÿ g w wi d \ n¾À l s/. p b) s) næ \Þi \Š¨ pu ni k k su r tÉ&¾,23, ò mã(¾ pÉ s sÓi s en k b eWÿ  sæÉ s sÓi v  ` r r tu pi \i t¾Ó¡(¾ k g) n h*¾ r&¾ b tu ebo l&¾ r&¾ w n ek ek r nŠ en k t) \) tø næi n k g) n ;¾ eRÿ ;¾ su ci p \Þi \Š¨¾ p \Þi \Š¨¾ hø pu nÀi ri k.</p>
                <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">Á wi g¾Àø nÑi kÞ r \ nåË± s kÙ n t ò( si Œ k ci \ kø nÉ&¾Á wi egÑ ] t) \ n næ gÉø \Ši \ nŠ en \ tu(¾ hø nÑi k/ ú tŠ h \u p pi r w n. d g&¾Á wi gæu ni k mi n k di: l r \ nå l epÙo ;¾ eWÿ h  nŠ k di du er n/, tø \Ði ;¾, p \i mi w ;¾ l r \  nå) b ;¾ t ru ri s ejÉo n&¾ w n.Á wi gæu ni kø d h tß bÙ tŠ h t) ku nÐ l k× n y*¾ \ egá p mi d  nÒ s en m  t)  rê lßø w ;¾ hø m t)  rê l/.</p>
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
                
                <p class="text-center text-white mt-5 text-wana font-size-h2"> m \Ñ j g et t) t)  p¾À  j) gÞ nÞ) sÓ ri,  er egÙ d,3,51,5, nÞ t r*¾ m \Ñ  m nu s en si  Œ Zÿ g ò lø m su mã$¾ h l m/, mi n k di:  Á etßo sæ¨, h) nÓi  k¾À)  nÓi k n/, h j%¾ h j) \ nßi w ;¾ t t mã n/, tu k d/, kÞ) bu t  enÓo y, mi w ;¾ w n.</p>
                <!-- <p class="text-center ml-auto mr-auto text-white mt-10 text-wana font-size-h2">I Kadek Kris Sanjaya</p> -->
            </div>
            <p style="position:absolute;bottom:0;z-index:9;" class="text-center ml-auto mr-auto pb-10 text-white mt-10 font-size-sm">I Kadek Kris Sanjaya © 2021</p>
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