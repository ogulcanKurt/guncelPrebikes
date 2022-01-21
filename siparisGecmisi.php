<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Css Dahil etme  -->
    <link rel="stylesheet" href="assets/custom.css">
    <link rel="stylesheet" href="assets/urun.css">
    <link rel="stylesheet" href="assets/icon.css">
    <!-- media.css -->
    <link rel="stylesheet" href="assets/media.css">
    <!-- giris.css -->
    <link rel="stylesheet" href="assets/giris.css">
    <!-- kayit.css -->
    <link rel="stylesheet" href="assets/kayit.css">
    <!-- hesapBilgi.css -->
    <link rel="stylesheet" href="assets/hesapBilgi.css">
    <!-- iletisimDetas.css -->
    <link rel="stylesheet" href="assets/iletisimDetay.css">
    <!-- faturaDetayDuzenle.css -->
    <link rel="stylesheet" href="assets/faturaDetayDuzenle.css">
    <!-- sipraisGecmis.css -->
    <link rel="stylesheet" href="assets/sipraisGecmis.css">
    <!-- Font Yükleme -->
    <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Premium Bikes</title>
</head>

<body>
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    <header class="headerSabitle headersifir">
        <div class="row">
          <div class="col-lg-2">
            <div class="logoLeft">
              <a href="index.php"><img class="logo logoTanitim kayitLogo" src="assets/images/logo/prebikeslogo.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 areaBlock">
            <ul class="headerMenu">
              <li class="menu kategori">
                <a class="menuAktif" href="kategori.php">kies een categorie</a>
                <ul class="acilirMenu">
                  <li>
                    <div class="iconlar">
                      <div class="iconAralik">
                      </div>
                      <div class="bakfiets">
                        <a href="kategori.php">
                          <img src="assets/icons/icon1.png" alt="">
                          <p class="iconText">bakfiets</p>
                        </a>
                      </div>
                      <div class="elektrik iconAralik">
                        <a href="kategori.php">
                          <img src="assets/icons/icon2.png" alt="">
                          <p class="iconText">electricfiets</p>
                        </a>
                      </div>
                      <div class="kinderfiets iconAralik">
                        <a href="kategori.php">
                          <img src="assets/icons/icon3.png" alt="">
                          <p class="iconText">kinderfiets</p>
                        </a>
                      </div>
                      <div class="mountainfiets iconAralik">
                        <a href="kategori.php">
                          <img src="assets/icons/icon4.png" alt="">
                          <p id="mountain" class="iconText">mountainfiets</p>
                        </a>
                      </div>
                      <div class="racefiets iconAralik">
                        <a href="kategori.php">
                          <img src="assets/icons/icon5.png" alt="">
                          <p class="iconText">racefiets</p>
                        </a>
                      </div>
                      <div class="transportfiets iconAralik">
                        <a href="kategori.php">
                          <img src="assets/icons/icon6.png" alt="">
                          <p class="iconText">transportfiets <span class="textBos">..</span></p>
                        </a>
                      </div>
                      <div class="transportfiets iconAralik">
                        <a href="kategori.php">
                          <img class="allesimg" src="assets/icons/alle.png" alt="">
                          <p class="iconText">alle fietsen <span class="textBos">..</span></p>
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="menu"><a href="cube.php">zakelijk</a></li>
              <li class="menu"><a href="#">rijden</a></li>
              <li class="menu"><a href="bisikletTanitim.php">lancering product</a></li>
              <li class="menu iletisimOn"><a href="iletisim.php">contact</a></li>
            </ul>
          </div>
          <div class="col-lg-5 yukariBosluk">
            <div class="input">
              <input class="searchButton  tanitiminput" type="text" placeholder="bir şey arayın">
              <i class="fas fa-search searchicon aramaiconKategori"></i>
            </div>
          </div>
          <div class="col-lg-1 yukariBosluk">
            <div class="account">
              <a href="giris.php"><img class="userPng siyahUser" src="assets/icons/userSiyah.png" alt="user"></a>
              <img class="basketPng siyahBasket" src="assets/icons/basketSiyah.png" alt="">
            </div>
          </div>
        </div>
    </header>
    <div class="urunTanitim">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hesapBilgiBg">
                        <div class="row">
                            <?php include 'hesapSidebar.php' ?>
                            <div class="col-lg-9 filigranSinirla">
                                <div class="row">
                                        <div class="dasboardBg">
                                            <img src="assets/images/bgpics/bgLogo.png" alt="">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="siparisGecmis2">
                                                <div class="siparisgecmisDetay">
                                                    <h5>| Çocuk Bisikleti</h5>
                                                </div>
                                                <div class="siparisDetaylari">
                                                    <div class="siparisGorseli">
                                                        <img src="assets/images/bisikletler/cocuk/cocukBk.png" alt="">
                                                        <div class="kayitAsama">
                                                            <div class="aktifBakilan asama"></div>
                                                            <div class="deAktifBakilan asama"></div>
                                                            <div class="deAktifBakilan asama"></div>
                                                        </div>
                                                    </div>
                                                    <div class="siparisBilgileri">
                                                        <ul class="dashboardMenu">
                                                            <li class="sidebarTop"><a  href="#">Sipariş Kodu: PR2021-37108</a></li>
                                                            <li class="sidebarTop"><a  href="#">Sipariş Tarihi: 01-12-2021</a></li>
                                                            <li class="sidebarTop"><a  href="#">Toplam Tutar: €1.599,00</a></li>
                                                            <li class="sidebarTop"><a  href="#">Sipariş Durumu: Geannuleerd</a></li>
                                                        </ul>
                                                        <div class="goruntuleButon">
                                                            <button class="hesapButon">Görüntüle</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="asagiKaydir">
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="siparisGecmis2">
                                                <div class="siparisgecmisDetay">
                                                    <h5>| Dağ Bisikleti</h5>
                                                </div>
                                                <div class="siparisDetaylari">
                                                    <div class="siparisGorseli">
                                                        <img src="assets/images/bisikletler/cocuk/cocukBk.png" alt="">
                                                        <div class="kayitAsama">
                                                            <div class="deAktifBakilan asama"></div>
                                                            <div class="aktifBakilan asama"></div>
                                                            <div class="deAktifBakilan asama"></div>
                                                        </div>
                                                    </div>
                                                    <div class="siparisBilgileri">
                                                        <ul class="dashboardMenu">
                                                            <li class="sidebarTop"><a  href="#">Sipariş Kodu: PR2021-37108</a></li>
                                                            <li class="sidebarTop"><a  href="#">Sipariş Tarihi: 01-12-2021</a></li>
                                                            <li class="sidebarTop"><a  href="#">Toplam Tutar: €1.599,00</a></li>
                                                            <li class="sidebarTop"><a  href="#">Sipariş Durumu: Geannuleerd</a></li>
                                                        </ul>
                                                        <div class="goruntuleButon">
                                                            <button class="hesapButon">Görüntüle</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="asagiKaydir">
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="siparisGecmis2">
                                                <div class="siparisgecmisDetay">
                                                    <h5>| Kargo Bisikleti</h5>
                                                </div>
                                                <div class="siparisDetaylari">
                                                    <div class="siparisGorseli">
                                                        <img src="assets/images/bisikletler/cocuk/cocukBk.png" alt="">
                                                        <div class="kayitAsama">
                                                            <div class="aktifBakilan asama"></div>
                                                            <div class="deAktifBakilan asama"></div>
                                                            <div class="deAktifBakilan asama"></div>
                                                        </div>
                                                    </div>
                                                    <div class="siparisBilgileri">
                                                        <ul class="dashboardMenu">
                                                            <li class="sidebarTop"><a  href="#">Sipariş Kodu: PR2021-37108</a></li>
                                                            <li class="sidebarTop"><a  href="#">Sipariş Tarihi: 01-12-2021</a></li>
                                                            <li class="sidebarTop"><a  href="#">Toplam Tutar: €1.599,00</a></li>
                                                            <li class="sidebarTop"><a  href="#">Sipariş Durumu: Geannuleerd</a></li>
                                                        </ul>
                                                        <div class="goruntuleButon">
                                                            <button class="hesapButon">Görüntüle</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="asagiKaydir">
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="siparisGecmis2">
                                                <div class="siparisgecmisDetay">
                                                    <h5>| Günlük Bisiklet</h5>
                                                </div>
                                                <div class="siparisDetaylari">
                                                    <div class="siparisGorseli">
                                                        <img src="assets/images/bisikletler/cocuk/cocukBk.png" alt="">
                                                        <div class="siparisGorseli">
                                                        <div class="kayitAsama">
                                                            <div class="deAktifBakilan asama"></div>
                                                            <div class="deAktifBakilan asama"></div>
                                                            <div class="aktifBakilan asama"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="siparisBilgileri">
                                                        <ul class="dashboardMenu">
                                                            <li class="sidebarTop"><a  href="#">Sipariş Kodu: PR2021-37108</a></li>
                                                            <li class="sidebarTop"><a  href="#">Sipariş Tarihi: 01-12-2021</a></li>
                                                            <li class="sidebarTop"><a  href="#">Toplam Tutar: €1.599,00</a></li>
                                                            <li class="sidebarTop"><a  href="#">Sipariş Durumu: Geannuleerd</a></li>
                                                        </ul>
                                                        <div class="goruntuleButon">
                                                            <button class="hesapButon">Görüntüle</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="asagiKaydir">
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
      <div class="container-fluid">
         <div class="row footerAsagi">
            <div class="col-lg-2">
               <a href="index.php">
                  <div class="logoAlani">
                     <img class="footerLogo" src="assets/images/logo/prebikeslogo.png" alt="">
                  </div>
               </a>
               <div class="footerKisayol">
                  <ul class="kisayolBaslik">
                     <li><a class="baslik" href="#">Meer Informatie</a></li>
                  </ul>
                  <ul class="kisayolAlt">
                     <li><a class="footerMenu" href="#">Home</a></li>
                     <li><a class="footerMenu" href="#">E-Bike ultverkoop</a></li>
                     <li><a class="footerMenu" href="#">E-Flets verzekeren?</a></li>
                     <li><a class="footerMenu" href="#">Verzendlng - Afhaken</a></li>
                     <li><a class="footerMenu" href="#">Betaalmogelljkheden</a></li>
                     <li><a class="footerMenu" href="#">Wınkels</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="footericonlar">
                  <div class="teknikDestek">
                     <i class="fas fa-shuttle-van footericon"></i>
                     <p class="footericonYazilari">Gratis verzending door heel Nederland.</p>
                  </div>
                  <div class="calismaSaatleri">
                     <i class="fas fa-location-arrow footericon"></i>
                     <p class="footericonYazilari">Voor 13:00 besteld? Morgen in huis</p>
                  </div>
                  <div class="iadeGaranti">
                     <i class="fas fa-sync-alt footericon"></i>
                     <p class="footericonYazilari">Niet goed? Geld terug</p>
                  </div>
               </div>
               <div class="iconAltiMenuler">
                  <div class="footerKisayol fietsenwinkelBaslik">
                     <ul class="kisayolBaslik">
                        <li><a class="baslik" href="#">Fletsenwinkel</a></li>
                     </ul>
                     <ul class="kisayolAlt">
                        <li><a class="footerMenu" href="#">Fletsenwinkel Amsterda</a></li>
                        <li><a class="footerMenu" href="#">Fletsenwinkel Roterdam</a></li>
                        <li><a class="footerMenu" href="#">Fletsenwinkel Den Haag</a></li>
                        <li><a class="footerMenu" href="#">Fletsenwinkel Dordrecht</a></li>
                        <li><a class="footerMenu" href="#">Fletsenwinkel Ultrecht</a></li>
                     </ul>
                  </div>
                  <div class="footerKisayol musteriServisi">
                     <ul class="kisayolBaslik">
                        <li><a class="baslik" href="#">Klantenservice</a></li>
                     </ul>
                     <ul class="kisayolAlt">
                        <li><a class="footerMenu" href="#">Wınkels en openingstjden</a></li>
                        <li><a class="footerMenu" href="#">Over Premiumbikes</a></li>
                        <li><a class="footerMenu" href="#">Reparatle & Onderhoud</a></li>
                        <li><a class="footerMenu" href="#">Scooter reparatle & Onderhoud</a></li>
                        <li><a class="footerMenu" href="#">Betaalmojejıkheden</a></li>
                     </ul>
                  </div>
                  <div class="footerKisayol hesap">
                     <ul class="kisayolBaslik">
                        <li><a class="baslik" href="#">Mijn account</a></li>
                     </ul>
                     <ul class="kisayolAlt">
                        <li><a class="footerMenu" href="#">Registeren</a></li>
                        <li><a class="footerMenu" href="#">Mijn bestellingen</a></li>
                        <li><a class="footerMenu" href="#">Mijn cerlangljst</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="aboneOl">
                  <p class="aboneOlAciklama">Ontvang de rieuwste aanbiedingen en promoties</p>
                  <div class="aboneOlAlani">
                     <input class="aboneolinput" type="text" placeholder="E-mail Adress"> <button class="aboneButonu">Abonneer</button>
                  </div>
               </div>
               <div class="aboneolAltiMenu">
                  <div class="footerKisayol fietsenwinkelBaslik">
                     <ul class="kisayolBaslik">
                        <li><a class="baslik" href="#">Categorieen</a></li>
                     </ul>
                     <ul class="kisayolAlt">
                        <li><a class="footerMenu" href="#">Elektrische fiets</a></li>
                        <li><a class="footerMenu" href="#">E-Bike Uitverkoop</a></li>
                        <li><a class="footerMenu" href="#">Transportfiets</a></li>
                        <li><a class="footerMenu" href="#">Damesfiets</a></li>
                        <li><a class="footerMenu" href="#">Herenfiets</a></li>
                     </ul>
                  </div>
                  <div class="footerKisayol musteriServisi">
                     <ul class="kisayolBaslik">
                        <li><a class="baslik" href="#">Contact</a></li>
                     </ul>
                     <ul class="kisayolAlt">
                        <li>
                           <div class="telicon"> <i class="fas fa-phone-volume telefonicon"></i></div>
                           <div class="saatSaga">
                              <a class="footerMenu iconFonts" href="#">
                                 010 210 32 54
                                 <p class="saat">(09:00 - 17:00)</p>
                              </a>
                           </div>
                        </li>
                        <li>
                           <div class="telicon"> <i class="fas fa-envelope telefonicon"></i></div>
                           <div class="saatSaga">
                              <a class="footerMenu iconFonts" href="#">info@premiumbikes.nl</a>
                              <p class="mail">(Mal ons voor superleuke win acties)</p>
                           </div>
                        </li>
                        <li>
                           <div class="telicon"> <i class="fab fa-facebook-messenger telefonicon"></i></div>
                           <div class="saatSaga">
                              <a class="footerMenu iconFonts" href="#">Facebook Messenger</a>
                              <p class="mail">(Volg ons voor superleuke win acties)</p>
                           </div>
                        </li>
                        <li>
                           <div class="telicon"> <i class="fab fa-instagram-square telefonicon"></i></div>
                           <div class="saatSaga">
                              <a class="footerMenu iconFonts" href="#">Instagram</a>
                              <p class="mail">(Volg ons)</p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="kartlar">
               <img src="assets/images/kartlar/cards.png" alt="">
            </div>
         </div>
      </div>
   </footer>


    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>