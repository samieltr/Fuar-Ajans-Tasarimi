<?php 
include 'sgpnl/inc/vt.php';
$title="Haberler";
include 'inc/header.php';
include 'inc/navbar.php';
?>
				<!--Main Content-->
				<div class="main-content relative">
					<div class="container">
						<!--Blog Sec-->
						<section id="blog_sec" class="blog-sec mt-180 mt-sm-120">
							<h2 class="mb-30 font-white">Haberler</h2>
							<div class="row">
							<?php

$sorgu = $baglanti->prepare("SELECT * FROM haberler");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
								<div class="col-sm-6 mb-30" <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
									<div class="mdl-card pa-0">
										<div class="mdl-card__title pa-0">
											<div><img width="100%"  height= "230px" src="images/haber/<?= $sonuc['foto'] ?>"></div>
										</div>
										<div class="mdl-card__supporting-text relative">
											<a href="image-blog-post.html">
												<h4 class="mt-15 mb-20"><?= $sonuc['ustBaslik'] ?></h4>
											</a>	
											<p><?= $sonuc['baslik'] ?></p>
										<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-pink font-white mr-10"  href="haberdetay.php?id=<?= $sonuc["id"] ?>">DEVAMINI OKU</a>
										</div>
										<div class="mdl-card__actions mdl-card--border">
											<span class="blog-post-date inline-block"><?= $sonuc['tarih'] ?></span>
											<div class="mdl-layout-spacer"></div>
										</div>
									</div>
								</div>
							  <?php
}
?>
							</div>

							<div class="navigation-block mb-30">
								<a href="#" class="inline-block pull-left prev"><i class="zmdi zmdi-arrow-left font-indigo"></i></a>
								<a href="#" class="inline-block pull-right next"><i class="zmdi zmdi-arrow-right font-indigo"></i></a>
								<div class="clearfix"></div>
							</div>
						</section>	
						<!--/Blog Sec-->
						
						<?php 

include 'inc/footer.php';
?>