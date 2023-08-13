<?php 
$sayfa = "Sayfa Güncelle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
$sorgu = $baglanti->prepare("SELECT * FROM hakkinda Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.


   $icerik = $_POST['icerik'];
    $hata = "";

                        //Eklencek veriler diziye ekleniyor
                        $satir = [
							'id' => $_GET['id'],
						    'icerik' => $icerik,
                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "UPDATE hakkinda SET icerik=:icerik WHERE id=:id;"; 
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
											<label class="control-label" for="basicinput">İçerik :</label>
											<div class="controls">
                        <textarea name="icerik" id="icerik" > <?= $sonuc["icerik"] ?> </textarea>
												<script>
                        ClassicEditor
                                .create( document.querySelector( '#icerik' ) )
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
