<div class="col-md-8">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="border-radius:10px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row mt-10 container-berita">
        

    </div>
    <div class="d-flex flex-center mb-20" id="kt_sticky_toolbar_chat_toggler_3" data-toggle="tooltip" title="" data-placement="right" data-original-title="Lihat Selengkapnya">
        <a style="text-decoration:none;" href="<?php echo base_url("berita");?>"><button class="btn btn-secondary font-weight-bolder font-size-sm py-3 px-14">Lihat Selengkapnya</button></a>
    </div>
</div>

<script>
        $.ajax({
            type: 'get',
            url: '<?php echo base_url('dashboard/get_home');?>',
            dataType: 'json',
            success: function(data) {
                let active = '';
                if(data.slider[0]){
                    active = 'active';
                }else{
                    active = '';
                }

                data.slider.forEach(function (item, i) {
                    if(i == 0){
                        $('.carousel-inner').append('<div class="carousel-item active">'+
                            '<img class="d-block w-100" style="border-radius:10px;" src="<?php echo base_url('assets/img/slider/')?>'+item.slider_foto+'" alt="First slide">'+
                            '<div class="carousel-caption d-none d-md-block">'+
                                '<p>'+item.slider_isi+'</p>'+
                            '</div>'+
                        '</div>');
                    }else{
                        $('.carousel-inner').append('<div class="carousel-item">'+
                            '<img class="d-block w-100" style="border-radius:10px;" src="<?php echo base_url('assets/img/slider/')?>'+item.slider_foto+'" alt="First slide">'+
                            '<div class="carousel-caption d-none d-md-block">'+
                                '<p>'+item.slider_isi+'</p>'+
                            '</div>'+
                        '</div>');
                    }
                    
                });

                data.berita.forEach(function (item, i){
                    $('.container-berita').append('<div class="col-md-6">'+
                        '<div class="card card-custom bg-radial-gradient-primary card-stretch gutter-b">'+
                            '<div class="card-body d-flex flex-column p-0" style="position: relative;">'+
                                '<img src="<?php echo base_url('assets/img/berita/')?>'+item.berita_foto+'" width="100%" style="border-top-left-radius:10px;border-top-right-radius:10px;">'+
                                '<div class="card-spacer bg-white flex-grow-1">'+
                                    '<div class="font-size-sm text-muted font-weight-bolder mb-2">'+item.berita_tanggal+'</div>'+
                                    '<a class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg" style="text-decoration:none;" href="<?php echo base_url("berita/");?>'+item.berita_slug+'"><div style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;" class="font-size-h5 font-weight-bolder text-dark-75 mb-2 text-hover-primary">'+item.berita_judul+'</div></a>'+
                                    '<div style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;" class="font-size-md">'+item.berita_isi+'</div>'+
                                '</div>'+
                            '</div>'+
                            '</div>'+
                        '</div>');
                            
                });
                
            },
            error: function(xhr, desc, err) {
                console.log(xhr.responseText);
            }
        });
</script>