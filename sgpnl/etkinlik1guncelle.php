<?php 
$sayfa = "Sayfa Güncelle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
$sorgu = $baglanti->prepare("SELECT * FROM hakkinda Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

	$veri1 = $_POST['veri1'];
	$veri2 = $_POST['veri2'];
	$veri3 = $_POST['veri3'];
	$veri4 = $_POST['veri4'];
	$veri5 = $_POST['veri5'];
	$veri6 = $_POST['veri6'];
	$veri7 = $_POST['veri7'];
	$veri8 = $_POST['veri8'];
    $hata = "";

                        //Eklencek veriler diziye ekleniyor
                        $satir = [
							'id' => $_GET['id'],
						    'veri1' => $veri1,
							'veri2' => $veri2,
							'veri3' => $veri3,
							'veri4' => $veri4,
							'veri5' => $veri5,
							'veri6' => $veri6,
							'veri7' => $veri7,
							'veri8' => $veri8,
                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "UPDATE hakkinda SET veri1=:veri1,veri2=:veri2,veri3=:veri3,veri4=:veri4,veri5=:veri5,veri6=:veri6,veri7=:veri7,veri8=:veri8 WHERE id=:id;"; 
                        $durum = $baglanti->prepare($sql)->execute($satir);

                        if ($durum)
             {
                 echo  '<div class="alert alert-success" role="alert">Sayfa Başarıyla Güncellendi.</div>';
				
            } else {
                      echo  '<div class="alert alert-danger" role="alert">Sayfa  Güncellenemedi.</div>'; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
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
								<h3>Sayfa Güncelle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
					
							

	
											<div class="control-group">
											<label class="control-label" for="basicinput">Konuşmacı Başlığı :</label>
											<div class="controls">
												<input type="text" name="veri1" id="veri1" placeholder=" <?= $sonuc["veri1"] ?> " class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Konuşmacı Açıklaması:</label>
											<div class="controls">
												<input type="text" name="veri2" id="veri2" placeholder=" <?= $sonuc["veri2"] ?> " class="span8">
											</div>
										</div>
												<div class="control-group">
											<label class="control-label" for="basicinput">Stant Başlığı :</label>
											<div class="controls">
												<input type="text" name="veri3" id="veri3" placeholder=" <?= $sonuc["veri3"] ?>" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Stant Açıklaması:</label>
											<div class="controls">
												<input type="text" name="veri4" id="veri4" placeholder=" <?= $sonuc["veri4"] ?>" class="span8">
											</div>
										</div>
												<div class="control-group">
											<label class="control-label" for="basicinput">Saat Başlığı :</label>
											<div class="controls">
												<input type="text" name="veri5" id="veri5" placeholder=" <?= $sonuc["veri5"] ?>" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Saat Açıklaması:</label>
											<div class="controls">
												<input type="text" name="veri6" id="veri6" placeholder=" <?= $sonuc["veri6"] ?>" class="span8">
											</div>
										</div>
												<div class="control-group">
											<label class="control-label" for="basicinput">Oturak Başlığı :</label>
											<div class="controls">
												<input type="text" name="veri7" id="veri7" placeholder=" <?= $sonuc["veri7"] ?>" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Oturak Açıklaması:</label>
											<div class="controls">
												<input type="text" name="veri8" id="veri8" placeholder=" <?= $sonuc["veri8"] ?>" class="span8">
											</div>
							
										
										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Sayfa Güncelle</button>
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
