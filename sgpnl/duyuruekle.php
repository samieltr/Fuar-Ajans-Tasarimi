<?php 
$sayfa = "Duyuru Ekle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    $baslik = $_POST['baslik'];
    $hata = "";



                        //Eklencek veriler diziye ekleniyor
                        $satir = [
                            'baslik' => $baslik,

                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "INSERT INTO duyurular SET baslik=:baslik;";
                        $durum = $baglanti->prepare($sql)->execute($satir);

                        if ($durum) {
                            echo  '<div class="alert alert-success" role="alert">Duyuru Başarıyla Eklendi.</div>';
                        }


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
                           
						   
						   <div class="module">
							<div class="module-head">
								<h3>Duyuru Ekle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="duyuruekle.php" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
								
							<div class="control-group">
											<label class="control-label" for="basicinput">Duyuru Metni :</label>
											<div class="controls">
												<textarea id="baslik" name="baslik" rows="4" cols="50">
Duyurunuzu bu alana yazınız
  </textarea>
											</div>
										</div>

										

										
										
										</div>

										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Duyuru Ekle</button>
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
