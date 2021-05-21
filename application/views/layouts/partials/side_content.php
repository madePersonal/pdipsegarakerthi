<div class="col-md-4">
    <div class="card card-custom mb-10">
        <!--begin::Header-->
        <div class="card-header border-0">
            <h3 class="card-title font-weight-bolder text-dark">Informasi</h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-2">
            <div id="content-informasi">
            
            </div>
            <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_3" data-toggle="tooltip" title="" data-placement="right" data-original-title="Lihat Selengkapnya">
                <a style="text-decoration:none;" href="<?php echo base_url("informasi");?>"><button class="btn btn-secondary font-weight-bolder font-size-sm py-3 px-14">Lihat Selengkapnya</button></a>
            </div>
        </div>
        <!--end::Body-->
    </div>
    <div class="card card-custom mb-10">
        <!--begin::Header-->
        <div class="card-header border-0">
            <h3 class="card-title font-weight-bolder text-dark">Video</h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-2">
            <div id="content-video">
            
            </div>
            <div class="d-flex flex-center" data-toggle="tooltip" title="" data-placement="right" data-original-title="Lihat Selengkapnya">
                <a style="text-decoration:none;" href="<?php echo base_url("galeri");?>"><button class="btn btn-secondary font-weight-bolder font-size-sm py-3 px-14" id="btnLogin">Lihat Selengkapnya</button></a>
            </div>
        </div>
        <!--end::Body-->
        
    </div>
</div>

<script>
        $.ajax({
            type: 'get',
            url: '<?php echo base_url('dashboard/get_top');?>',
            dataType: 'json',
            success: function(data) {
                data.informasi.forEach(item => {
                    $('#content-informasi').append('<div class="d-flex flex-wrap align-items-center mb-10">'+
                    '<div class="flex-shrink-0 mr-4 mb-2">'+
                        '<img style="border-radius:5px;" src="<?php echo base_url('assets/img/informasi/')?>'+item.informasi_foto+'" width="100">'+
                    '</div>'+
                    '<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">'+
                    '<a style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;" href="<?php echo base_url("informasi/");?>'+item.informasi_slug+'" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">'+item.informasi_judul+'</a>'+
                    '<span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;" class="text-muted font-weight-bold font-size-sm my-1">'+item.informasi_isi+'</span>'+
                    '</div>'+
                    '</div>');
                            
                });

                data.video.forEach(item => {
                    $('#content-video').append('<div class="d-flex flex-wrap align-items-center mb-10">'+
                    '<div class="flex-shrink-0 mr-4 mb-2">'+
                        '<img style="border-radius:5px;" src="https://img.youtube.com/vi/'+item.galeri_video_thumbnail+'/0.jpg" width="100">'+
                    '</div>'+
                    '<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">'+
                    '<a style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;" href="<?php echo base_url("galeri");?>" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">'+item.galeri_video_judul+'</a>'+
                    '<span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;" class="text-muted font-weight-bold font-size-sm my-1">'+item.galeri_video_isi+'</span>'+
                    '</div>'+
                    '</div>');
                            
                });
                
            },
            error: function(xhr, desc, err) {
                console.log(xhr.responseText);
            }
        });
</script>