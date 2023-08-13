<?php 
include 'sgpnl/inc/vt.php';
$title="Konuşmacılar";
include 'inc/header.php';
include 'inc/sidebar.php';
?>
					
				<!--Main Content-->
				<div class="main-content relative">
					<div class="container">
						<section id="speaker_sec" class="speaker-sec mt-180 mt-sm-120">
							<h2 class="mb-30 font-white">Konuşmacılar</h2>
							<div class="row">
							<?php

$sorgu = $baglanti->prepare("SELECT * FROM konusmaci");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
								<div class="col-sm-3 mb-30" <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?> >
									<div class="mdl-card pa-0">
										<div class="mdl-card__title pa-0">
											<div><img width="100%"  height= "230px" src="images/konusmaci/<?= $sonuc['foto'] ?>"></div>
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
						</section>	
						<!--/Speakers Sec-->
						<?php 

include 'inc/footer.php';
?>