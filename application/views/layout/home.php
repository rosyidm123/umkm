<!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#produk">Mulai Telusuri</a>
				
                </div>
                <div class="masthead-heading text-uppercase"></div>
                <div class="masthead-heading text-uppercase"><br></div>
                <div class="masthead-heading text-uppercase"></div>
                
            </div>
			<script async="async" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        </header>
		<div class='ignielToTop'/>
<script>
$(document).scroll(function() {
  return $(document).scrollTop() > 300 ? $('.ignielToTop').addClass('show') : $('.ignielToTop').removeClass('show')
  }), $('.ignielToTop').click(function() {
    return $('html,body').animate({
      scrollTop: '0'
    });
});
</script>
        <!-- Services-->
        <section class="page-section" id="produk">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kategori</h2>
                    <h3 class="section-subheading text-muted">Kategori Produk UMKM</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark js-scroll-trigger">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-box fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Produk Barang</h4></a>
                        <p class="text-muted">Produk hasil UMKM unggul dan berkualitas</p>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-tshirt fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Fashion</h4></a>
                        <p class="text-muted">Produk Fashion Berkualitas dan Unggul dari para UMKM.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Makanan</h4></a>
                        <p class="text-muted">Produk Makanan Berkualitas dan Unggul dari para UMKM.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Teknologi</h4></a>
                        <p class="text-muted">Produk Teknologi Berkualitas dan Unggul dari para UMKM.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- kategori Grid-->
        <section class="page-section bg-light" id="kategori">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Produk UMKM</h2>
                    <h3 class="section-subheading text-muted">Produk unggul dan berkualitas</h3>
                </div>
                <div class="row">
                    <?php 
                    foreach ($join as $row) { ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="kategori-item">
                            <a class="kategori-link" href="<?php echo site_url().'/home/get_detail/'.$row->produk_id;?>#detail">
                                <div class="kategori-hover">
                                    <div class="kategori-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->produk_gambar;?>" alt="" />
                            </a>
                            <div class="kategori-caption">
                                <div class="kategori-caption-heading"><?php echo $row->produk_judul;?></div>
                                <div class="small section-subheading text-muted"><?php echo $row->produk_kategori_nama;?></div>
                                <div class="kategori-caption-subheading text-muted">RP. <?php echo $row->produk_harga;?></div>
                            </div>
                            <!-- kategori-caption-subheading text-muted -->
                        </div>
                    </div>
                <?php }?>
                </div>
            </div>
        </section>