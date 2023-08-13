<div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Ana Sayfa</a></li>
                                <li><a href="sgbilisim.php"><i class="menu-icon icon-bullhorn"></i>Panel Sistem Bildirimleri </a></li>
                                <li><a href="onayliuyelist.php"><i class="menu-icon icon-inbox"></i>Fuar Başvuru Listesi<b class="label green pull-right"><?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM basvuru");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?> </b> </a></li>
      <li><a href="bilgial.php"><i class="menu-icon icon-inbox"></i>Bilgi Al Listesi<b class="label green pull-right"><?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM bilgial");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?> </b> </a></li>
 <li><a href="iletisimformu.php"><i class="menu-icon icon-inbox"></i>İletisim Formu Listesi<b class="label green pull-right"><?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM iletisim");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?> </b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#haberler"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Haberler</a>
                                    <ul id="haberler" class="collapse unstyled">
                                        <li><a href="haberekle.php"><i class="icon-inbox"></i>Haber Ekle </a></li>
                                        <li><a href="haberliste.php"><i class="icon-inbox"></i>Haberleri Listele</a></li>
                                    </ul>
                                </li>
                                <li><a class="collapsed" data-toggle="collapse" href="#kayanresim"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Kayan Resimler</a>
                                    <ul id="kayanresim" class="collapse unstyled">
                                        <li><a href="kresimekle.php"><i class="icon-inbox"></i>Kayan Resim Ekle</a></li>
                                        <li><a href="kresimliste.php"><i class="icon-inbox"></i>Kayan Resim Listele</a></li>
                                    </ul>
                                </li>
								   <li><a class="collapsed" data-toggle="collapse" href="#duyurular"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Duyurular</a>
                                    <ul id="duyurular" class="collapse unstyled">
                                        <li><a href="duyuruekle.php"><i class="icon-inbox"></i>Duyuru Ekle</a></li>
                                        <li><a href="duyuruliste.php"><i class="icon-inbox"></i>Duyuruları Listele</a></li>
                                    </ul>
                                </li>
								<li><a class="collapsed" data-toggle="collapse" href="#yonetim"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Etkinlik</a>
                                    <ul id="yonetim" class="collapse unstyled">
									<li><a href="etkinlikduzenle.php?id=1"><i class="icon-inbox"></i>Etkinlik Adı Düzenle</a></li>
									 <li><a href="konusmaciekle.php"><i class="icon-inbox"></i>Konuşmacı Ekle</a></li>
									 <li><a href="konusmacilistele.php"><i class="icon-inbox"></i>Konuşmacı Listele</a></li>
									 <li><a href="markaekle.php"><i class="icon-inbox"></i>Marka Ekle</a></li>
									 <li><a href="markalistele.php"><i class="icon-inbox"></i>Marka Listele</a></li>
                                       
                                    </ul>
                                </li>
									<li><a class="collapsed" data-toggle="collapse" href="#galeri"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Galeri</a>
                                    <ul id="galeri" class="collapse unstyled">
									 <li><a href="resimg.php"><i class="icon-inbox"></i>Galeriye Resim Ekle</a></li>
									 <li><a href="resimgliste.php"><i class="icon-inbox"></i>Galeri Listele</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a class="collapsed" data-toggle="collapse" href="#sayfalar"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Sayfalar</a>
                                    <ul id="sayfalar" class="collapse unstyled">
                                        <li><a href="etkinlikliste.php"><i class="icon-inbox"></i>Etkinlik Hakkında Metni</a></li>
                                        <li><a href="etkinlik1liste.php"><i class="icon-inbox"></i>Etkinlik Hakkında Alt Bilgi</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!--/.widget-nav-->
							
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Çıkış</a></li>
                            </ul>
                        </div>