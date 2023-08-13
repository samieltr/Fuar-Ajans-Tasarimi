<?php 
$sayfa = "Duyuru  Güncelle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
$sorgu = $baglanti->prepare("SELECT * FROM duyurular Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    $baslik = $_POST['baslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $hata = "";

                        //Eklencek veriler diziye ekleniyor
                        $satir = [
							'id' => $_GET['id'],
                            'baslik' => $baslik,
                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "UPDATE duyurular SET baslik=:baslik WHERE id=:id;"; 
                        $durum = $baglanti->prepare($sql)->execute($satir);

                        if ($durum)
             {
                 echo  '<div class="alert alert-success" role="alert">Duyuru Başarıyla Güncellendi.</div>';
				
            } else {
                      echo  '<div class="alert alert-danger" role="alert">Duyuru  Güncellenemedi.</div>'; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
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
								<h3>Duyuru Güncelle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
					
							<div class="control-group">
											
								

											<div class="controls">
												<textarea id="baslik" name="baslik" rows="4" cols="50">
<?= $sonuc["baslik"] ?>
  </textarea>
											</div>

	
										
										
										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Duyuru Güncelle</button>
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
