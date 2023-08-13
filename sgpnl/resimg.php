<?php 
$sayfa = "Galeri Resim Ekle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    $resimaciklama = $_POST['resimaciklama']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    if ($resimaciklama <> "" && isset($_FILES['foto'])) {

        if ($_FILES['foto']['error'] != 0) {
            $hata .= 'Dosya yüklenirken hata gerçekleşti lütfen daha sonra tekrar deneyiniz.';
        } else {

         $dosya_adi = strtolower($_FILES['foto']['name']);
            if (file_exists('images/' . $dosya_adi)) {
                $hata .= " $dosya_adi diye bir dosya var";
            } else {
                $boyut = $_FILES['foto']['size'];
                if ($boyut > (1024 * 1024 * 2)) {
                    $hata .= ' Dosya boyutu 2MB den büyük olamaz.';
                } else {
                    $dosya_tipi = $_FILES['foto']['type'];
                    $dosya_uzanti = explode('.', $dosya_adi);
                    $dosya_uzanti = $dosya_uzanti[count($dosya_uzanti) - 1];

                    if (!in_array($dosya_tipi, ['image/png', 'image/jpeg']) || !in_array($dosya_uzanti, ['png', 'jpg'])) {
                        //if (($dosya_tipi != 'image/png' || $dosya_uzanti != 'png' )&&( $dosya_tipi != 'image/jpeg' || $dosya_uzanti != 'jpg')) {
                        $hata .= ' Hata, dosya türü JPEG veya PNG olmalı.';
                    } else {
                        $foto = $_FILES['foto']['tmp_name'];
                        copy($foto, '../images/galeri/' . $dosya_adi);


                        //Eklencek veriler diziye ekleniyor
                        $satir = [
                            'foto' => $dosya_adi,
                            'resimaciklama' => $resimaciklama,
                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "INSERT INTO galeri SET foto=:foto, resimaciklama=:resimaciklama;";
                        $durum = $baglanti->prepare($sql)->execute($satir);

                        if ($durum) {
                            echo  '<div class="alert alert-success" role="alert">Resim Başarıyla Eklendi.</div>';
                        }


                    }
                }
            }
        }
    }
    if($hata!=""){
		 echo '<div class="alert alert-danger" role="alert">Resim eklenemedi.</div> '.$hata.'';
    }
}
?>


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
                           
						   
						   <div class="module">
							<div class="module-head">
								<h3>Resim Ekle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="resimg.php" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
							<center>
							<div class="control-group">
											
											 <label for="foto">Resim</label>
										<input required type="file" name="foto" class="form-control-file" id="foto">
										</div>	
								</center>
							<div class="control-group">
											<label class="control-label" for="basicinput">Resim Açıklaması :</label>
											<div class="controls">
												<input type="text" name="resimaciklama" id="resimaciklama" placeholder="Fuar Görselimiz" class="span8">
											</div>
										</div>

										
										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Resim Ekle</button>
											</div>
										</div>
									</form>
							
							</div>
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
