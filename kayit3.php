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
    <!-- Font Yükleme -->
    <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">
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
    <?php include 'mobilHeader.php' ?>
    <div class="urunTanitim">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="odemeKismi">

                        
                        

                        <div class="kayitFormu2">
                                <div class="bgLogo">
                                    <img class="kayit2Bg" src="assets/images/bgpics/bgLogo.png" alt="">
                                </div>
                                <div class="asamaSayi">
                                    <div class="sayiArala">1</div>
                                    <div class="sayiArala">2</div>
                                    <div class="sayiAktif sayiArala">3</div>
                                </div>
                                <div class="formBaslik">
                                    <ul class="formOrtalaGiris">
                                        <li><a class="kayitButonu" href="#">Giriş</a></li>
                                        <li class="odemeSaga"><button class="odemeAdimlari butonBorder girisButonu">Kayıt Ol</button></li>
                                    </ul>
                                </div>
                                <div class="oncekiSayfa">
                                    <span class="isaretKucuk"><</span>
                                    <a href="kayit2.php"><span class="sayfaAralik sayfaGeriBilgi">Fatura Bilgileri</span></a>
                                </div>
                            <form action="index.php" class="kayitFormicerik2">


                                

                                <!-- İkinci İsim Soyisim -->
                                <div class="row mb-4">
                                    <div class="col-lg-6 col-xs-12">
                                        <div class="form-outline">
                                            <label id="formYazi" class="form-label yildizBefore yaziAyar" for="form6Example1">Şifre</label>
                                            <input placeholder="İkinci İsim..." type="text" id="form6Example1" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xs-12">
                                        <div class="form-outline">
                                            <label id="formYazi" class="form-label yildizBefore yaziAyar" for="form6Example2">Şifre Onayla:</label>
                                            <input placeholder="Şifre..." type="text" id="form6Example2" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check mb-4 opsiyonYukari">
                                    <div class="radioinputs">
                                        <input class="form-check-input me-2 radioinput3" type="radio" value="" id="form6Example8" checked />
                                        <label class="form-check-label" id="sifreRadio" for="form6Example8">
                                            <span id="sartRengi">Şartlar</span>
                                            <span>ve</span>
                                            <span id="sartRengi">Koşulları</span>
                                            <span>kabul ediyorum ve</span>
                                            <span id="sartRengi">sorumluluk reddinidi</span>
                                            <span>okudum</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="kayitAsama">
                                    <div class="deAktifBakilan asama"></div>
                                    <div class="deAktifBakilan asama"></div>
                                    <div class="aktifBakilan asama"></div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input class="formGonder form-control yeniFormGenel butonGonder" type="submit" id="form6Example1" value="Kayıt Ol" />
                                        </div>
                                    </div>
                                </div>

                                

                                 



                            </form>
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


   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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