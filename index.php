<?php 
include 'sgpnl/inc/vt.php';
$title="Ana Sayfa";
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<style>
/*Client Sec*/
.client-sec img {
  opacity: .4; }
.client-sec .owl-controls {
  display: none; }
.sec-pad-top-sm {
  padding-top: 40px; }
</style>
				<!--Main Content-->
				<div class="main-content relative">
					<div class="container">
						
						<!--About Sec-->
						<section class="about-sec mt-180 mt-sm-120  mb-30">
							<div class="row">
								<div class="col-lg-12">
									<div class="mdl-card mdl-shadow--2dp relative">
										<div id="carousel" class="carousel slide carousel-fade banner-carousel" data-ride="carousel">
											<!-- Carousel items -->
											<div class="carousel-inner">
											<?php

$sorgu = $baglanti->prepare("SELECT * FROM kayan");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
		    <div class="carousel item active">
						<img class="d-block w-150" src="images/kayan/resim_2023-08-13_230500319.png" alt="Mega Fuar Ajans">
						</div>
											    <div class="carousel item">
						<img class="d-block w-150" src="images/kayan/<?= $sonuc['foto'] ?>" alt="<?= $sonuc['ustBaslik'] ?>">
						</div>
										<?php
}
?>
											</div>
										</div>
										<div class="about-overlay"></div>
										<div class="row about-content-wrap">
											<div class="col-xs-12">
											<?php

$sorgu = $baglanti->prepare("SELECT * FROM etkinlikbilgileri");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
												<div class="info-wrap text-center mt-40">
													<?= $sonuc['etkinlikadi'] ?> <br>
													<h5 class="mt-20">
														<span class="relative mr-5 inline-block">
															<i id="datepickopn" class="zmdi zmdi-calendar-check font-pink pl-5"></i>
																<span id="datepicker1" class="datepicker block"></span>
														</span>
														<span><?= $sonuc['tarih'] ?></span>
													</h5>
													<div class="mt-50">
														<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-pink font-white mr-10" data-toggle="modal" data-target="#responsive_modal_1" href="#">KATIL</a>
														<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-indigo font-white" href="#" data-toggle="modal" data-target="#responsive_modal_2">BİLGİ AL</a>
													</div>
												</div>
											</div>
															<?php
}
?>
										</div>
									</div>
								</div>	
							</div>
						</section>
						
						<!--Booking Form Modal-->
						<div id="responsive_modal_1" class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" style="display: none;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<div  class="mdl-card">
											<h1 class="mb-10 font-unsetcase">Fuar Başvuru Formu </h1>
											<form name="registration-form" action="" method="POST" class="form-horizontal booking-form mb-30">
												<div class="form-group">
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
														<input autocomplete="off" class="mdl-textfield__input" type="text" id="adsoyad" name="adsoyad" required>
														<label class="mdl-textfield__label" for="inputName_1">Adınız ve Soyadınız</label>
													</div>	
												</div>
												<div class="form-group">
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
														<input autocomplete="off" class="mdl-textfield__input" type="email" id="eposta" name="eposta" required>
														<label class="mdl-textfield__label" for="inputEmail_1">E-Posta*</label>
													</div>
												</div>
													<div class="form-group">
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
														<input autocomplete="off" class="mdl-textfield__input" type="text" id="telefon" name="telefon" required>
														<label class="mdl-textfield__label" for="inputName_1">Telefon:</label>
													</div>	
												</div>
													<div class="form-group">
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
														<input autocomplete="off" class="mdl-textfield__input" type="text" id="isletme" name="isletme" required>
														<label class="mdl-textfield__label" for="inputName_1">Firma veya Kuruluş Adı</label>
													</div>	
												</div>
													<div class="form-group">
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
														<input autocomplete="off" class="mdl-textfield__input" type="text" id="urunler" name="urunler" required>
														<label class="mdl-textfield__label" for="inputName_1">Tanıtmak istediğiniz ürünler nelerdir ?</label>
													</div>	
												</div>
												<div class="form-group mt-25">
													<div class="align-center">
														<button type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-indigo font-white">
															Başvur
														</button>
														
													</div>
												</div>
											</form>
											<?php if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

$adsoyad = $_POST['adsoyad']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
$eposta=$_POST['eposta'];
$telefon=$_POST['telefon'];
$isletme=$_POST['isletme'];
$urunler=$_POST['urunler'];
$hata = "";

// Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
if ($adsoyad <> ""  ) {

					//Eklencek veriler diziye ekleniyor
					$satir = [
						'adsoyad' => $adsoyad,
						'eposta'=>$eposta,
						'telefon'=>$telefon,
						'isletme'=>$isletme,
						'urunler'=>$urunler,
					];

					// Veri ekleme sorgumuzu yazıyoruz.
					$sql = "INSERT INTO basvuru SET adsoyad=:adsoyad,eposta=:eposta,telefon=:telefon,isletme=:isletme,urunler=:urunler;";
					$durum = $baglanti->prepare($sql)->execute($satir);

					if ($durum) {
						echo  '<div class="alert alert-success" role="alert">Başvurunuz bize ulaştı. En Kısa sürede geri dönüş yapılacaktır.</div>';
					}


				}
			}
		
?>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!--Notify Form Modal-->
						<div id="responsive_modal_2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<div  class="mdl-card">
											<h4 class="mb-10 font-unsetcase">Sizinle iletişim kurabilmek için bilgileri doldurun.</h4>
											<form  name="registration-form" action="" method="POST"   class="form-horizontal registration-form mb-30">
													<div class="form-group">
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
														<input autocomplete="off" class="mdl-textfield__input" type="text" id="adsoyad1" name="adsoyad1" required>
														<label class="mdl-textfield__label" for="adsoyad1">Adınız ve Soyadınız:</label>
													</div>	
												</div>
													<div class="form-group">
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
														<input autocomplete="off" class="mdl-textfield__input" type="text" id="tel1" name="tel1" required>
														<label class="mdl-textfield__label" for="tel1">Cep Telefon:</label>
													</div>	
												</div>
											
												<div class="form-group">
													<div class="align-center">
														<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-pink font-white">
															Gönder
														</button>
													</div>
												</div>
											</form>
											<?php if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

$adsoyad1 = $_POST['adsoyad1']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
$tel1=$_POST['tel1'];
$hata = "";

// Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
if ($adsoyad1 <> ""  ) {

					//Eklencek veriler diziye ekleniyor
					$satir = [
						'adsoyad1' => $adsoyad1,
					
						'tel1'=>$tel1,

					];

					// Veri ekleme sorgumuzu yazıyoruz.
					$sql = "INSERT INTO bilgial SET adsoyad1=:adsoyad1,tel1=:tel1;";
					$durum = $baglanti->prepare($sql)->execute($satir);

					if ($durum) {
						echo  '<div class="alert alert-success" role="alert">Başvurunuz bize ulaştı. En Kısa sürede geri dönüş yapılacaktır.</div>';
					}


				}
			}
		
?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/About Sec-->	
						
						<!--Event Sec-->
						<section id="event_sec" class="event-sec sec-pad-top-sm">
							<h2 class="mb-30">Etkinlik Hakkında</h2>
							<?php

$sorgu = $baglanti->prepare("SELECT * FROM hakkinda");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
							<div class="mdl-card mb-30 pb-15">
								<div class="row">
									<div class="col-xs-12">
										<div class="about-event-wrap">
											<?= $sonuc['icerik'] ?>
										</div>
									</div>
								</div>
								<div class="row mt-40">
									<div class="col-md-3 col-sm-6 col-xs-12 mb-30">
										<div class="">
											<i class="zmdi zmdi-mic font-indigo profile-icon"></i>
											<h4 class="mb-15"><?= $sonuc['veri1'] ?></h4>
											<p><?= $sonuc['veri2'] ?></p>
											
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12 mb-30">
										<div class="">
											<i class="zmdi zmdi-badge-check font-pink profile-icon"></i>
											<h4 class="mb-15"><?= $sonuc['veri3'] ?></h4>										
											<p><?= $sonuc['veri4'] ?></p>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12 mb-30">
										<div class="">
											<i class="zmdi zmdi-time font-teal profile-icon"></i>
											<h4 class="mb-15"><span ><?= $sonuc['veri5'] ?></h4>
											<p><?= $sonuc['veri6'] ?></p>
											
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12 mb-30">
										<div class="">
											<i class="zmdi zmdi-seat font-lime profile-icon"></i>
											<h4 class="mb-15"><?= $sonuc['veri7'] ?></h4>
											<p><?= $sonuc['veri8'] ?></p>
											
										</div>
									</div>
								</div>
							</div>
							  <?php
}
?>
						</section>
						<!--Event Sec-->

						<!--Speakers Sec-->
						<section id="speaker_sec" class="speaker-sec sec-pad-top-sm">
							<h2 class="mb-30">Konuşmacılarımız</h2>
							<div class="row">
							<?php

$sorgu = $baglanti->prepare("SELECT * FROM konusmaci order by id DESC LIMIT 4");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
								<div class="col-md-3 col-xs-6 mb-30"<?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
									<div class="mdl-card pa-0">
										<div class="mdl-card__title pa-0">
											<div><img width="100%"  height= "230px" src="images/konusmaci/<?= $sonuc['foto'] ?>" alt="MEGA FUAR KONUŞMACILAR"></div>
											<div class="speaker-overlay pl-15 pr-15 pt-35">
												<p><?= $sonuc['bilgi'] ?></p>
						
											</div>
										</div>
										<div class="mdl-card__actions mdl-card--border">
											<span class="speaker-post-date inline-block"><?= $sonuc['adsoyad'] ?></span>
									
										</div>
									</div>
								</div>
    <?php
}
?>
							</div>
							<div class="text-center mt-20 mb-30">
								<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  margin-lr-auto view-more" href="konusmacilar.php">hepsini göster</a>
							</div>	
						</section>	
						<!--/Speakers Sec-->

						<!--Client Sec-->
						<section id="client_sec" class="client-sec sec-pad-top-sm">
							<h2 class="mb-30">Markalar</h2>
					
							<div class="row">
								<div class="col-sm-12 mb-30">
									<div class="client-carousel" >
												<?php

$sorgu = $baglanti->prepare("SELECT * FROM marka ");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
										<img width="150"  src="images/marka/<?= $sonuc['foto'] ?>" alt="Fuara Katılan Markalar" <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
										    <?php
}
?>
										
									</div>
								</div>
							</div>
						</section>
						<!--/Client Sec-->
						
						<!--Portfolio Sec-->
						<section id="portfolio_sec" class="portfolio-sec sec-pad-top-sm">
							<div class="mb-15">
								<h2>Etkinlik Görselleri</h2>
							</div>
							<div class="gallery-wrap mb-30">
								<div class="portfolio-wrap project-gallery">
									<ul id="portfolio" class="portf auto-construct  project-gallery" data-col="3">
														<?php

$sorgu = $baglanti->prepare("SELECT * FROM galeri order by id DESC LIMIT 6");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
										<li  class="item mdl-card pa-0 branding">
											<div class="light-img-wrap mdl-card__title pa-0">
												<img class="img-responsive" src="images/galeri/<?= $sonuc['foto'] ?>"  alt="Fuar Görselleri" />
												<div class="light-img-overlay"></div>
											</div>	
										</li>
									 <?php
}
?>
										
										
										
										
							
										
									</ul>
									
								</div>
							</div>
						</section>
						<!--/Portfolio Sec-->
					
						<!--Blog Sec-->
						<section id="blog_sec" class="blog-sec sec-pad-top-sm">
							<h2 class="mb-30">En Son Haberler</h2>
							<div class="row">
																				<?php

$sorgu = $baglanti->prepare("SELECT * FROM haberler order by id DESC LIMIT 3");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
								<div class="col-sm-4 mb-30">
									<div class="mdl-card pa-0">
										<div class="mdl-card__title pa-0">
										<div><img width="100%"  height= "230px" src="images/haber/<?= $sonuc['foto'] ?>" alt="Mega Fuar Güncel Haberler"></div>
										</div>
										<div class="mdl-card__supporting-text relative">
											<a href="youtube-blog-post.html">
												<h4 class="mt-15 mb-20"><?= $sonuc['ustBaslik'] ?></h4>
											</a>
											<p><?= $sonuc['baslik'] ?></p>
										</div>
										<div class="mdl-card__actions mdl-card--border">
											<span class="blog-post-date inline-block"><?= $sonuc['tarih'] ?></span>
											<div class="mdl-layout-spacer"></div>
											<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-pink font-white mr-10"  href="haberdetay.php?id=<?= $sonuc["id"] ?>">DEVAMINI OKU</a>
										
										
										</div>
									</div>
								</div>
						 <?php
}
?>
						
							</div>
							<div class="text-center mt-20 mb-30">
								<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  margin-lr-auto view-more" href="haberler.php">HEPSİNİ GÖR</a>
							</div>	
						</section>	
						<!--/Blog Sec-->
						
						<!--Duyurular-->
						<section id="references_sec" class="reference-sec sec-pad-top-sm">
							<h2 class="mb-30">DUYURULAR</h2>
							<div class="row">
								<div class="col-sm-12 mb-30">
									<div class="mdl-card border-top-teal pa-35">
										<div class="testimonial-carousel">
							
											<div>
												<blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.

 Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam."</blockquote>
												
											</div>
																																<?php

$sorgu = $baglanti->prepare("SELECT * FROM duyurular");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>	
											<div>
												<blockquote> <?= $sonuc['baslik'] ?></blockquote>

											</div>
											 <?php
}
?>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						
						</section>
						<!--/References Sec-->
						
						<!--Contact Sec-->
						<section id="contact_sec" data-ng-app="contactApp" class="contact-sec sec-pad-top-sm">
							<h2 class="mb-35">İletişim</h2>
							<div class="row">
								<div id="form_card_height" class="col-sm-7 mb-30">
									<div  class="mdl-card" data-ng-controller="ContactController">
										<h4 class="mb-10 font-unsetcase">Aklınıza takılanı sorun.</h4>
										<form action="" method="POST"   class=" form-horizontal mb-30">
											<div class="form-group" data-ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input autocomplete="off" data-ng-model="formData.inputName" class="mdl-textfield__input" type="text" id="adsoyad2" name="adsoyad2" required>
													<label class="mdl-textfield__label" for="inputName">Ad ve Soyad*</label>
												</div>	
											</div>
											<div class="form-group" data-ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input autocomplete="off" data-ng-model="formData.inputEmail" class="mdl-textfield__input" type="email" id="eposta2" name="eposta2" required>
													<label class="mdl-textfield__label" for="inputEmail">E-posta*</label>
												</div>
											</div>
											<div class="form-group" data-ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<textarea 
													data-ng-model="formData.inputMessage" 
													class="mdl-textfield__input"  rows="3" id="inputMessage" name="mesaj2" required></textarea>
													<label class="mdl-textfield__label" for="inputMessage">Mesaj*</label>
												</div>	
											</div>
											<div class="form-group">
												<div class="align-center">
													<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-indigo font-white" data-ng-disabled="submitButtonDisabled">
														Gönder
													</button>
												</div>
											</div>
										</form>
										<?php if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

$adsoyad2 = $_POST['adsoyad2']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
$eposta2=$_POST['eposta2'];
$mesaj2=$_POST['mesaj2'];
$hata = "";

// Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
if ($adsoyad2 <> ""  ) {

					//Eklencek veriler diziye ekleniyor
					$satir = [
						'adsoyad2' => $adsoyad2,
						'eposta2' => $eposta2,
					'mesaj2' => $mesaj2,

					];

					// Veri ekleme sorgumuzu yazıyoruz.
					$sql = "INSERT INTO iletisim SET adsoyad2=:adsoyad2,eposta2=:eposta2,mesaj2=:mesaj2;";
					$durum = $baglanti->prepare($sql)->execute($satir);

					if ($durum) {
						echo  '<div class="alert alert-success" role="alert">Mesajınız bize ulaştı. En Kısa sürede geri dönüş yapılacaktır.</div>';
					}


				}
			}
		
?>
										<p class="block result" data-ng-class="result">{{ resultMessage }}</p>
									</div>
								</div>
								<div class="col-sm-5 mb-30">
									<div class="mdl-card pa-0">
										<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.842148514266!2d32.84695481538089!3d39.92254857942571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34f01eea854a5%3A0x431a53df07622c06!2zS8SxesSxbGF5LCBGZXZ6aSDDh2FrbWFrLTIgU2suIE5vOjMyLCAwNjQyMCDDh2Fua2F5YS9BbmthcmE!5e0!3m2!1str!2str!4v1649102907817!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
									</div>
								</div>
							</div>
						</section>
						<!--/Contact Sec-->
						
	<?php 
include 'inc/footer.php';
?>