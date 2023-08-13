<?php 
include 'sgpnl/inc/vt.php';
$title="Haber Detayı";
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<?php
$sorgu = $baglanti->prepare("SELECT * FROM haberler Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $baslik = $_POST['baslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
               $icerik = $_POST['icerik'];
               $ustBaslik = $_POST['ustBaslik'];
               $sira = $_POST['sira'];
               $aktif = 0;
               if (isset($_POST['aktif'])) $aktif = 1;
               $hata = '';
	   }
?>
					
				<!--Main Content-->
				<div class="main-content relative">
					<div class="container">
						<!--Blog Sec-->
						<section id="blog_sec" class="blog-sec mt-180 mt-sm-120">
							<div class="row">
								<div class="col-sm-12 mb-30">
									<div class="mdl-card pa-0">
										<div class="mdl-card__title pa-0">
											<div><img width="100%" height="400" src="images/haber/<?= $sonuc["foto"] ?>"></div>
										</div>
										<div class="mdl-card__supporting-text relative">
											<div class="text-center">
	
												<h2 class="mt-10"><?= $sonuc["ustBaslik"] ?></h2>
												<span class="blog-post-date inline-block mt-10"><?= $sonuc["tarih"] ?></span>
												<div class="blog-post-info mt-10">
													<a href="" class="pr-10"><i class="zmdi zmdi-account pr-5"></i>Yönetici</a>
												</div>
											</div>	
											<?= $sonuc["icerik"] ?>
										</div>
									</div>
								</div>
							</div>
						</section>	
						<!--/Blog Sec-->
						
			
						
			
						
					<?php 

include 'inc/footer.php';
?>