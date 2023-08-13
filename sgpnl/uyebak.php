<?php 
$sayfa = "Uye Listesi";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
?>

<?php
$sayfa = "uyedetay";

$sorgu = $baglanti->prepare("SELECT * FROM basvuru Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $adsoyad = $_POST['adsoyad']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
               $eposta = $_POST['eposta'];
               $telefon = $_POST['telefon'];
               $isletme = $_POST['isletme'];
			   $urunler = $_POST['urunler'];
               $aktif = 0;
               if (isset($_POST['aktif'])) $aktif = 1;
               $hata = '';
	   }
?>
<style>
p
   {
      position: relative;

      right: -20px;
   }
							</style>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                     <?php include 'inc/sidebar.php';?>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <div class="module">
                           
						   
						  
							<div class="module-head">
								<h3>Basvuru Yapan Firma Bilgisi Görüntüle</h3>
							</div>
							<div class="module-body">
								<table class="table table-striped table-bordered table-condensed">
								  <thead>
									<tr>
									  <th>Adı Soyadı:</th>
									  <th><?= $sonuc["adsoyad"] ?></th>
									  <th></th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th>E-Posta:</th>
									  <th><?= $sonuc["eposta"] ?></th>
									    
									</tr>
									<tr>
									   <th>Telefon:</th>
									  <th><?= $sonuc["telefon"] ?></th>
									   
									</tr>
									<tr>
									 <th>İşletme veya Kurum Adı:</th>
									  <th><?= $sonuc["isletme"] ?></th>
									   
									</tr>
									<tr>
									  <th>Ürünler:</th>
									  <th><?= $sonuc["urunler"] ?></th>
									   
									</tr>

								  </tbody>
								</table>
					</div>
							
						</div><!--/.module-->

							<!-- Modül Sonu-->
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
 <?php include 'inc/footer.php';?>
