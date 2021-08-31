<link rel="stylesheet" href="<?= base_url('assets/css/frontend.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/frontend.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/global.css') ?>">
<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Quicksand%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CComfortaa%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=4.9.8" type="text/css" media="all">
<style>
	.space {
		height: 450px;
	}
</style>
<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<div class="clearfix"></div>
							<ul class="slides" style="width: 2000%; transition-duration: 0.6s; transform: translate3d(-3331.2px, 0px, 0px);">
								<li data-thumb="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar1']) ?>" class="clone" aria-hidden="true" style="width: 416.4px; float: left; display: block;">
									<div class="thumb-image"> <img src="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar1']) ?>" data-imagezoom="true" class="img-responsive" draggable="false"></div>
								</li>
								<li data-thumb="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar2']) ?>" style="width: 416.4px; float: left; display: block;" class="">
									<div class="thumb-image"> <img src="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar2']) ?>" data-imagezoom="true" class="img-responsive" draggable="false"></div>
								</li>
								<li data-thumb="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar3']) ?>" style="width: 416.4px; float: left; display: block;" class="">
									<div class="thumb-image"> <img src="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar3']) ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
								</li>
								<?php if ($detail['gambar4'] != null) :?>
								<li data-thumb="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar4']) ?>" style="width: 416.4px; float: left; display: block;" class="">
									<div class="thumb-image"> <img src="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar4']) ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
								</li>
								<?php endif ?>
							</ul>
						<ul class="flex-direction-nav">
							<li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
							<li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
						</ul>
					</div>
				</div>
				<div class="space" style="display: none">
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3><?= $detail['nama_sepatu'] ?></h3>
				    <div class="rating1">
						<p><span class="item_price">Rp.&nbsp;<?php $disc = $detail['harga'] * 30 / 100; $hargafix = $detail['harga'] - $disc; echo number_format($hargafix); ?></span></p>
					</div>				
					<div class="color-quality">
						<div class="color-quality-right">
						    <div id="loadingmessage" style="display:none">
                				<img src="<?= base_url('assets/img/tenor.gif'); ?>" style="margin-left:20%;">
                			</div>
							<h5>Warna :</h5>

							<div class="result"></div>
							<?php foreach ($warna as $row):?>
							<input id="color" type="radio" name="warna" value="<?= $row->id_gambar?>"<?= $row->nama_warna == $detail['nama_warna'] ? 'checked':'' ?> onclick="MyAlert()"></input>
							<span class="span"><?= strtoupper($row->nama_warna) ?></span><br>
							<?php endforeach?>						
						</div>
					<br>
					</div>
					<div class="elementor-widget-button">
                        <a id="linkwa" href="https://wa.me/6285655131099?text=Apakah+stok+dengan+nama+produk+%2A<?= $detail['nama_sepatu'] ?>%2A+warna+%2A<?= strtoupper($detail['nama_warna']) ?>%2A+tersedia+%3F" target="blank" class="elementor-button elementor-size-sm" role="button">	
                            <i class="fa fa-whatsapp bold" aria-hidden="true"></i>
                            <span>Beli Via WhatsApp</span>
                        </a>
                    </div>
				<input type="hidden" name="cek_style" id="cek-style" value="">
				<input type="hidden" name="cek_jns" id="cek-jns-stok" value="0">
				<input type="hidden" name="status_fav" id="cek-status-fav" value="1">
				<input type="hidden" name="cek_warna" id="cek-warna" value="">
				<input type="hidden" name="usr_fav" id="cek-user" value="">
				<input type="hidden" name="jns_mbr" id="cek-jns-mbr" value="">
				</a>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<script>
		function MyAlert(){
			$('#loadingmessage').show('slow');
			setTimeout(function(){ 
			var warna = $('input[type="radio"]:checked').val();
			$('#linkwa').attr("href", null);
            $.ajax({
                url: "<?= base_url('produk/requestColor') ?>",
                type: "POST",
                data: {'warna': warna},
                success: function (data) {
					$('#loadingmessage').hide();
					$('.space').attr("style","display: block");
					// $('.flexslider').remove();
					$('.images_3_of_2').html(data);
					$('.space').attr("style","display: none");
					$('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					});
                }
            });
			$.ajax({
                url: "<?= base_url('produk/requestColorName') ?>",
                type: "POST",
                data: {'warna': warna},
                success: function (data) {
					$('#linkwa').attr("href", data);
                }
            });
			}, 1000);
		}
	</script>