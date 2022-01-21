<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Css Dahil etme  -->
  <link rel="stylesheet" href="assets/custom.css">
  <!-- icon dahil -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- icon dönüştürücü -->
  <link rel="stylesheet" href="assets/icon.css">
  <!-- Slider -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/slider.css">
  <!-- marka.css -->
  <link rel="stylesheet" href="assets/marka.css">
  <!-- tanitim.css -->
  <link rel="stylesheet" href="assets/tanitim.css">
  <!-- media.css -->
  <link rel="stylesheet" href="assets/media.css">
  <!-- kategori.css -->
  <link rel="stylesheet" href="assets/kategori.css">
  <!-- cube.css -->
  <link rel="stylesheet" href="assets/cube.css">
  <!-- iletisim.css -->
  <link rel="stylesheet" href="assets/urun.css">
  <!-- iletisim.css -->
  <link rel="stylesheet" href="assets/iletisim.css">
  <!-- Font Yükleme -->
  <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">
  <title>Premium Bikes</title>
</head>

<body>
  <header class="headerSabitle headersifir">
    <div class="row">
      <div class="col-lg-2">
        <div class="logoLeft">
          <a href="index.php"><img class="logo logoTanitim" src="assets/images/logo/prebikeslogo.png" alt=""></a>
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
          <a class="sptPop" href="#"><img class="basketPng siyahBasket" src="assets/icons/basketSiyah.png" alt="">
            <div class="sepetPopup">
               <div class="sepetBaslik">
                  <span>Mijn mand</span>
               </div>
               <div class="eklenenUrunler">
                  <div class="urun1">
                     <div class="sepet_gorsel">
                        <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                     </div>
                     <div class="urunBilgileri">
                        <span>Cube AMS 100 C:68 </span> <br>
                        <span>SLT 29, 29 inch</span>
                     </div>
                     <div class="adet_bilgisi">
                           <p>-</p>
                           <p>+</p>
                     </div>
                  </div>
               </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </header>
  <?php include 'mobilHeader.php' ?>
  <!-- Header slider bitiş -->
  <!-- Bisiklet Tanıtım Başlangıç -->
  <div class="bisikletAlani">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="gorsel">
            <img class="gorselimg" src="assets/images/bisikletler/bisikletTanitim.png" alt="">
          </div>
          <!-- <div class="canliChaticon">
            <i class="far fa-comments chatBoyut"></i>
          </div>
          <div class="garantiGorselBisikletTanitim">
            <img src="assets/icons/garanti.png" alt="">
          </div> -->
        </div>
      </div>
               <div class="iconSinirla">
                    <div class="canliChaticon">
                        <i style="color:#afafaf;" class="far fa-comments chatBoyut"></i>
                    </div>
                    <div class="garantiGorsel">
                        <img src="assets/icons/garanti.png" alt="">
                    </div>
                </div>

      <div class="bisikletTanitimiconlari">

        <div class="iconlarSinirla">
          <div class="ucBoyutYazi">
            <img class="iconucBoyut" src="assets/icons/3d2.png" alt="">
            <span class="iconSpan">3D view</span>
          </div>

          <div class="videoYazi">
            <img class="iconOynatma" src="assets/icons/oynatmaButon.png" alt="">
            <span class="iconSpan">Video</span>
          </div>

          <div class="kitapYazi">
            <img class="kitapicon" src="assets/icons/kitap.png" alt="">
            <span class="iconSpan">Brochure</span>
          </div>
        </div>



      </div>
    </div>
  </div>
  <!-- Bisiklet Tanıtım Bitiş -->
  <div class="arkaPlanSiyah">
    <img class="blackBg1" src="assets/images/bgpics/bgBlack.png" alt="">
    <div class="blackArkaPlan">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-6">
            <h3 class="daha">DAHA</h3>
            <h3 class="guclu">GÜÇLÜ</h3>
          </div>
          <div class="col-lg-6 col-6">
            <h3 class="daha">DAHA</h3>
            <h3 class="estetik">ESTETİK</h3>
          </div>
        </div>
      </div>
      <div class="container-fluid yukaridanAsagi">
        <div class="row">
          <div class="col-lg-6 solaSinirlafullBody">
            <div class="solYazi">
              <span class="fullbody">FULL BODY</span>
            </div>
            <img class="dagBlack" src="assets/images/bisikletler/mountain/dagBlack.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="sagAciklama">
              <img class="okYon" src="assets/images/bgpics/okYon.png" alt="">
              <span>A looker it may well be, but don't be deceived by the new Two15 HPC SLT's elegant lines - this is a bike that means business. There's a hint in the Fox 40 Factory fork and matching DHX2 Factory coil shock, which serve up epic quan-tities of smooth, progressive travel. Then there's Sram's X01 DH transmission, giving you the control you need to out-accelerate the competition out of turns. Super-powerful Magura MT7 hydraulic discs for late, hard braking. And a tough, strong RaceFace Atlas wheelset to keep you rolling. Bring it on.</span>
            </div>
          </div>

          

          <div class="alanSinir">
            <div class="sagAciklama solAciklamaSinirla">
                <span>A looker it may well be, but don't be deceived by the new Two15 HPC SLT's elegant lines - this is a bike that means business. There's a hint in the Fox 40 Factory fork and matching DHX2 Factory coil shock, which serve up epic quan-tities of smooth, progressive travel. Then there's Sram's X01 DH transmission, giving you the control you need to out-accelerate the competition out of turns. Super-powerful Magura MT7 hydraulic discs for late, hard braking. And a tough, strong RaceFace Atlas wheelset to keep you rolling. Bring it on.</span>
                <img class="okYon" src="assets/images/bgpics/okYonTers.png" alt="">
            </div>

            <img class="gidon1" src="assets/images/bisikletler/mountain/gidon.png" alt="">
            <div class="sagYazi">
              <span class="fullbody">GİDON</span>
            </div>
          </div>

          <div class="alanSinir">
            <img class="amort" src="assets/images/bisikletler/mountain/amortisor.jpg" alt="">
            <div class="solYazi solYaziYukari">
              <span class="fullbody">AMORTİSOR</span>
            </div>

            <div class="sagAciklama solAciklamaSinirla solAciklamaSinirla2">
              <img class="okYon okYonAyarla" src="assets/images/bgpics/okYon.png" alt="">
                <span>A looker it may well be, but don't be deceived by the new Two15 HPC SLT's elegant lines - this is a bike that means business. There's a hint in the Fox 40 Factory fork and matching DHX2 Factory coil shock, which serve up epic quan-tities of smooth, progressive travel. Then there's Sram's X01 DH transmission, giving you the control you need to out-accelerate the competition out of turns. Super-powerful Magura MT7 hydraulic discs for late, hard braking. And a tough, strong RaceFace Atlas wheelset to keep you rolling. Bring it on.</span>
            </div>

            
          </div>

          <div class="alanSinir">
            <div class="sagAciklama solAciklamaSinirla solAciklamaSinirla3">
                <span>A looker it may well be, but don't be deceived by the new Two15 HPC SLT's elegant lines - this is a bike that means business. There's a hint in the Fox 40 Factory fork and matching DHX2 Factory coil shock, which serve up epic quan-tities of smooth, progressive travel. Then there's Sram's X01 DH transmission, giving you the control you need to out-accelerate the competition out of turns. Super-powerful Magura MT7 hydraulic discs for late, hard braking. And a tough, strong RaceFace Atlas wheelset to keep you rolling. Bring it on.</span>
                <img class="okYon" src="assets/images/bgpics/okYonTers.png" alt="">
            </div>

            <img class="gidon1" src="assets/images/bisikletler/mountain/gidon2.jpg" alt="">
            <div class="sagYazi">
              <span class="fullbody">GİDON</span>
            </div>
          </div>

          <div class="alanSinir">
            <img class="sele" src="assets/images/bisikletler/mountain/sele.jpg" alt="">
            <div class="solYazi solYaziYukari solYaziSele">
              <span class="fullbody">SELE</span>
            </div>

            <div class="sagAciklama solAciklamaSinirla solAciklamaSinirla2">
              <img class="okYon okYonAyarla" src="assets/images/bgpics/okYon.png" alt="">
                <span>A looker it may well be, but don't be deceived by the new Two15 HPC SLT's elegant lines - this is a bike that means business. There's a hint in the Fox 40 Factory fork and matching DHX2 Factory coil shock, which serve up epic quan-tities of smooth, progressive travel. Then there's Sram's X01 DH transmission, giving you the control you need to out-accelerate the competition out of turns. Super-powerful Magura MT7 hydraulic discs for late, hard braking. And a tough, strong RaceFace Atlas wheelset to keep you rolling. Bring it on.</span>
            </div>

            
          </div>

          <div class="alanSinir">
            <div class="sagAciklama solAciklamaSinirla solAciklamaSinirla3">
                <span>A looker it may well be, but don't be deceived by the new Two15 HPC SLT's elegant lines - this is a bike that means business. There's a hint in the Fox 40 Factory fork and matching DHX2 Factory coil shock, which serve up epic quan-tities of smooth, progressive travel. Then there's Sram's X01 DH transmission, giving you the control you need to out-accelerate the competition out of turns. Super-powerful Magura MT7 hydraulic discs for late, hard braking. And a tough, strong RaceFace Atlas wheelset to keep you rolling. Bring it on.</span>
                <img class="okYon" src="assets/images/bgpics/okYonTers.png" alt="">
            </div>

            <img class="gidon1" src="assets/images/bisikletler/mountain/zincir.jpg" alt="">
            <div class="sagYazi">
              <span class="fullbody">ZİNCİR</span>
            </div>
          </div>

          <div class="alanSinir">
            <img class="amort3" src="assets/images/bisikletler/mountain/amortisor2.jpg" alt="">
            <div class="solYazi solYaziYukari solAciklamaAmort2">
              <span class="fullbody">AMORTİSOR</span>
            </div>

            <div class="sagAciklama solAciklamaSinirla solAciklamaSinirla2 solAciklamaAmort2 solAciklamaAmort">
              <img class="okYon okYonAyarla" src="assets/images/bgpics/okYon.png" alt="">
                <span>A looker it may well be, but don't be deceived by the new Two15 HPC SLT's elegant lines - this is a bike that means business. There's a hint in the Fox 40 Factory fork and matching DHX2 Factory coil shock, which serve up epic quan-tities of smooth, progressive travel. Then there's Sram's X01 DH transmission, giving you the control you need to out-accelerate the competition out of turns. Super-powerful Magura MT7 hydraulic discs for late, hard braking. And a tough, strong RaceFace Atlas wheelset to keep you rolling. Bring it on.</span>
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

</body>