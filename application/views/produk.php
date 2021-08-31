<div class="ads-grid_shop">

	<!---728x90--->
<div class="left-ads-display col-md-12">
	<div class="wrapper_top_shop">
		<div class="clearfix"></div>
		<div class="product-sec1">
		<?php foreach ($katalog as $row) :?>
		<div class="col-md-3 product-men">
			<div class="product-shoe-info">
				<div class="men-pro-item">
					<div class="men-thumb-item">
						<img class="img" src="<?= base_url('assets/img/barang/'.kategori_help($row['nama_kategori']).'/'. $row['gambar']); ?>" alt="">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="<?= base_url('produk/detail/'.$row['id_barang']); ?>" class="link-product-add-cart">Detail</a>
							</div>
						</div>
						<div class="product-new-top">
							<img src="<?= base_url('assets/img/merk/'.$row['gambar_merk']); ?>" alt="">
						</div>												
					</div>
					<div class="item-info-product">
						<h4>
							<a href="<?= base_url('produk/detail/'.$row['id_barang']); ?>"><?= $row['nama_barang'] ?></a>
						</h4>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ?>												
		<div class="clearfix"></div>
		<div class="col-md-12 text-center">
			<?= $pagination ?>
		</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
		<div class="clearfix"></div>
</div>