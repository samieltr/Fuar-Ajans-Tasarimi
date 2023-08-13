<?php 
$sayfa = "Sayfa Güncelle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
$sorgu = $baglanti->prepare("SELECT * FROM etkinlikbilgileri Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.


   $etkinlikadi = $_POST['etkinlikadi'];
      $tarih = $_POST['tarih'];
    $hata = "";

                        //Eklencek veriler diziye ekleniyor
                        $satir = [
							'id' => $_GET['id'],
						    'etkinlikadi' => $etkinlikadi,
							'tarih' => $tarih,
                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "UPDATE etkinlikbilgileri SET etkinlikadi=:etkinlikadi,tarih=:tarih WHERE id=:id;"; 
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
								<h3>Etkinlik Güncelle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
					
							
	<div class="control-group">
											<label class="control-label" for="basicinput">Etkinlik Adı :</label>
											<div class="controls">
                        <textarea name="etkinlikadi" id="etkinlikadi" > <?= $sonuc["etkinlikadi"] ?> </textarea>
												<script>
                        ClassicEditor
                                .create( document.querySelector( '#etkinlikadi' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
											</div>
										</div>
											<div class="control-group">
											<label class="control-label" for="basicinput">Tarih ve Yer :</label>
											<div class="controls">
                        <textarea name="tarih" id="tarih" > <?= $sonuc["tarih"] ?> </textarea>
												<script>
                        ClassicEditor
                                .create( document.querySelector( '#tarih' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
											</div>
										</div>
										
										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Etkinlik Güncelle</button>
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
