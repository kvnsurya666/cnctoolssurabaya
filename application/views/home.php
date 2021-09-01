<style>
    .stamp-ladies {
        width: 100px;
        position: absolute;
        right: 0px;
        margin: 30;
    }

    .stamp-men {
        width: 100px;
        position: absolute;
        right: 0px;
        margin-right: 30;
        margin-top: -15;
    }

    .stamp-kids {
        width: 100px;
        position: absolute;
        right: 0px;
        margin-right: 30;
        margin-top: -15;
    }

    @media (max-width:767.98px) {
        .clear {
            height: 753;
        }

        .stamp-ladies {
            width: 80px;
            position: absolute;
            right: 0px;
            margin-right: 30;
            margin-top: 15;
        }

        .stamp-men {
            width: 80px;
            position: absolute;
            right: 0px;
            margin-right: 30;
            margin-top: -65;
        }

        .stamp-kids {
            width: 80px;
            position: absolute;
            right: 0px;
            margin-right: 30;
            margin-top: -55;
        }
    }
</style>
<div class="grids_bottom" style="margin-top:5px;">
    <div class="style-grids">
        <div class="col-md-6 style-grid style-grid-1">
            <video width="640" height="640" controls autoplay>
                <source src="assets/video/videomesinbubut.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
            </video>

        </div>

    </div>
    <div class="col-md-6 style-grid style-grid-2">
        <div class="style-image-1_info">
            <div class="style-grid-2-text_info">
                <h3>Industrial Machinery</h3>
                <p>Ingin cari macam - macam mesin?</p>
                <div class="shop-button">
                    <a href="<?= base_url('produk/industrialmachinery'); ?>">Lihat Disini</a>
                </div>

            </div>
        </div>
        <div class="style-image-2">
            <img src="assets/img/backgroundmachinery.jpg">

        </div>
    </div>
    <div class="clearfix"></div>
</div><!-- //grids_bottom-->
<!-- /girds_bottom2-->
<div class="grids_sec_2" style="margin-top:5px;margin-bottom:5px;">
    <div class="style-grids_main">
        <div class="col-md-6 grids_sec_2_left">
            <div class="grid_sec_info">
                <div class="style-grid-2-text_info">
                    <h3>Aksesoris</h3>
                    <p>Ingin cari aksesoris bengkel?</p>
                    <div class="shop-button">
                        <a href="<?= base_url('produk/aksesoris'); ?>">Lihat Disini</a>
                    </div>

                </div>
            </div>
            <div class="style-image-2">
                <img src="assets/img/logojasaperbaikan.jpg">

            </div>
        </div>
        <div class="col-md-6 grids_sec_2_left">
            <div class="style-image-2">
                <img src="assets/img/logoaksesoris.jpg">

            </div>
            <div class="grid_sec_info last">
                <div class="style-grid-2-text_info">
                    <h3>Jasa Perbaikan</h3>
                    <p>Butuh jasa perbaikan mesin?</p>
                    <div class="shop-button">
                        <a href="<?= base_url('produk/jasaperbaikan'); ?>">Lihat Disini</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix clear"></div>
    </div>
</div>
<!-- this so absurd man i can't add text animation to the div. How you do it  -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="modal-body" style="background-image: url(assets/img/bg-1.jpg);">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End modal -->