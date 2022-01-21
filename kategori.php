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
  <!-- iletisim.css -->
  <link rel="stylesheet" href="assets/iletisim.css">
  <!-- Font Yükleme -->
  <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">
  <title>Premium Bikes</title>
</head>

<body>
  <style>
    .parallax {
      background-image: url(assets/images/bisikletler/mountain/dagBisikleti.png);
      min-height: 710px;
      background-attachment: fixed;
      background-position: right 174px;
      background-repeat: no-repeat;
      background-size: 1300px;
    }

    @media screen and (max-width:900px) {
      body {
        background-color: #F7F6F4 !important;
      }
    }
  </style>
  <!-- Header slider başlangıç -->
  <header class="headerSabitle">
    <div class="row">
      <div class="col-lg-2">
        <div class="logoLeft">
          <a href="index.php"><img class="logo" src="assets/images/logo/prebikeslogo.png" alt=""></a>
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
          <input class="searchButton kategoriAramainput" type="text" placeholder="bir şey arayın">
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
  <!-- Kategori Top Başlangıç -->
  <div class="dagBisikletiAlan parallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col dagBisikletSinirla">
          <div class="dagBisikletiAciklama">
            <div class="baslik">
              <h3 class="mountainBike">MOUNTAIN BIKE</h3>
            </div>
            <div class="baslikAciklama">
              <p> Mountainbike kopen? Enorm aanbod Mountainbikes tegen de laagste prijzen! Voor 13:00 besteld? Morgen in huis! Mountainbikes voor professionels, sporters, jong en oud. Bestel online jouw nieuwe mountainbike. </p>
            </div>
            <div class="tumunuGoster">
              <a href="#burayaGit">
                <a href="cube.php"><button class="tgButon">Tümünü Göster</button></a>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col">
          <div class="dagBisikletiGorsel">
            <div class="parallax"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mobilTanitim">
    <div class="container-fluid">
      <div class="row">
        <div class="col kategoriAdi">
          <p>Kategori</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="kategoriDesc">
            <h4>Mountain</h4>
            <h4>Bike</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
          </div>
        </div>
        <div class="col">
          <div class="mobilKategoriGorsel">
            <img src="assets/images/bisikletler/dagBisikletimobil.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Kategori Top Bitiş -->
  <!-- kategori 4 alan başlangıç -->
  <div id="burayaGit" class="kategori4alan">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="kategoriAlan">
            <div class="bisikletGorsel">
              <img class="dagBk1" src="assets/images/bisikletler/mountain/dag1.png" alt="">
            </div>
            <div class="dagBkAciklama">
              <div class="dagBaslik">
                <h3>HAIBIKE</h3>
              </div>
              <div class="dagAciklama">
                <p>De Haibike mountainbike specialist van Europa. Wij leveren door heel Europa. Bekijken bestel jouw nieuwe elektrische mountainbike / mountainbike bij Premiumbikes of kom langs in de winkel voor een proefrit of informatie over Haibike mountainbikes!</p>
              </div>
              <div class="dagFiyat">
                <div class="netFiyat">
                  <span class="fiyat">€2.540,-</span>
                  <span id="danBaslayan">'dan başlayan fiyatlar'</span>
                </div>
                <div class="tumunuGorButton">
                  <a href="cube.php"><button class="tmnGorbtn">Tümünü Gör</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 borderSinirla">
          <div class="borderRight">
            <img src="assets/images/bgpics/borderRight.png" alt="">
          </div>
          <div class="kategoriAlan">

            <div class="dagBkAciklama yaziYukari">
              <div class="dagBaslik">
                <h3 class="inceBaslik">LAPIERRE</h3>
              </div>
              <div class="dagAciklama">
                <p>De Haibike mountainbike specialist van Europa. Wij leveren door heel Europa. Bekijken bestel jouw nieuwe elektrische mountainbike / mountainbike bij Premiumbikes of kom langs in de winkel voor een proefrit of informatie over Haibike mountainbikes!</p>
              </div>
              <div class="dagFiyat">
                <div class="netFiyat">
                  <span class="fiyat">€2.540,-</span>
                  <span id="danBaslayan">'dan başlayan fiyatlar'</span>
                </div>
                <div class="tumunuGorButton">
                  <a href="cube.php"><button class="tmnGorbtn">Tümünü Gör</button></a>
                </div>
              </div>
            </div>
            <div class="bisikletGorsel">
              <img class="dagBk1 dagBk2" src="assets/images/bisikletler/mountain/dag2.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="kategoriAlan">
            <div class="bisikletGorsel">
              <img class="dagBk1 dagBk2" src="assets/images/bisikletler/mountain/dag3.png" alt="">
            </div>
            <div class="dagBkAciklama">
              <div class="dagBaslik">
                <h3 class="inceBaslik">CUBE</h3>
              </div>
              <div class="dagAciklama">
                <p>De Haibike mountainbike specialist van Europa. Wij leveren door heel Europa. Bekijken bestel jouw nieuwe elektrische mountainbike / mountainbike bij Premiumbikes of kom langs in de winkel voor een proefrit of informatie over Haibike mountainbikes!</p>
              </div>
              <div class="dagFiyat">
                <div class="netFiyat">
                  <span class="fiyat">€2.540,-</span>
                  <span id="danBaslayan">'dan başlayan fiyatlar'</span>
                </div>
                <div class="tumunuGorButton">
                  <a href="cube.php"><button class="tmnGorbtn">Tümünü Gör</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 borderSinirla">
          <div class="borderRight">
            <img src="assets/images/bgpics/borderRight.png" alt="">
          </div>
          <div class="kategoriAlan">
            <div class="dagBkAciklama yaziYukari">
              <div class="dagBaslik">
                <h3 class="inceBaslik">GHOST</h3>
              </div>
              <div class="dagAciklama">
                <p>De Haibike mountainbike specialist van Europa. Wij leveren door heel Europa. Bekijken bestel jouw nieuwe elektrische mountainbike / mountainbike bij Premiumbikes of kom langs in de winkel voor een proefrit of informatie over Haibike mountainbikes!</p>
              </div>
              <div class="dagFiyat">
                <div class="netFiyat">
                  <span class="fiyat">€2.540,-</span>
                  <span id="danBaslayan">'dan başlayan fiyatlar'</span>
                </div>
                <div class="tumunuGorButton">
                  <a href="cube.php"><button class="tmnGorbtn">Tümünü Gör</button></a>
                </div>
              </div>
            </div>
            <div class="bisikletGorsel">
              <img class="dagBk1 dagBk2" src="assets/images/bisikletler/mountain/dag4.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="iconSinirla">
        <div class="canliChaticon">
          <i class="far fa-comments chatBoyut"></i>
        </div>
        <div class="garantiGorsel">
          <img src="assets/icons/garanti.png" alt="">
        </div>
      </div>
      <!-- <div class="ikonAlanlari">
        <div class="garanti">
          <img src="assets/icons/garanti.png" alt="">
        </div>
        <div class="asagiKaydirma">
          <img src="assets/icons/asagi.png" alt="">
        </div>
        <div class="canliiconChat">
          <i class="far fa-comments chatBoyut"></i>
        </div>
      </div> -->
    </div>
  </div>
  <div class="mobilKartlar">
    <div class="container-fluid">
      <div class="row">
        <div class="col alanGolge">
          <div class="bisikletKart">
            <img src="assets/images/bisikletler/mountain/dag1.png" alt="">
            <div class="mobilKart">
              <div class="dagBaslik">
                <h3 class="inceBaslik">HAIBIKE</h3>
              </div>
              <div class="dagFiyat">
                <div class="netFiyat">
                  <span class="fiyat">€2.540,-</span>
                  <p id="mobilDan">'dan başlayan fiyatlarla</p>
                </div>
                <div class="mobilButon">
                  <a href="cube.php"><button class="mblBtn"><i class="fas fa-arrow-right"></i></button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="bisikletKart asagiKaydirMobil">
            <div class="mobilKart">
              <div class="dagBaslik">
                <h3 class="inceBaslik">LAPIERRE</h3>
              </div>
              <div class="dagFiyat">
                <div class="netFiyat">
                  <span class="fiyat">€2.540,-</span>
                  <p id="mobilDan">'dan başlayan fiyatlarla</p>
                </div>
                <div class="mobilButon">
                  <a href="cube.php"><button class="mblBtn"><i class="fas fa-arrow-right"></i></button></a>
                </div>
              </div>
            </div>
            <img src="assets/images/bisikletler/mountain/dag2.png" alt="">
          </div>
          <div class="bisikletKart asagiKaydirMobil">
            <img src="assets/images/bisikletler/mountain/dag3.png" alt="">
            <div class="mobilKart">
              <div class="dagBaslik">
                <h3 class="inceBaslik">CUBE</h3>
              </div>
              <div class="dagFiyat">
                <div class="netFiyat">
                  <span class="fiyat">€2.540,-</span>
                  <p id="mobilDan">'dan başlayan fiyatlarla</p>
                </div>
                <div class="mobilButon">
                  <a href="cube.php"><button class="mblBtn"><i class="fas fa-arrow-right"></i></button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="bisikletKart asagiKaydirMobil">
            <div class="mobilKart">
              <div class="dagBaslik">
                <h3 class="inceBaslik">LAPIERRE</h3>
              </div>
              <div class="dagFiyat">
                <div class="netFiyat">
                  <span class="fiyat">€2.540,-</span>
                  <p id="mobilDan">'dan başlayan fiyatlarla</p>
                </div>
                <div class="mobilButon">
                  <a href="cube.php"><button class="mblBtn"><i class="fas fa-arrow-right"></i></button></a>
                </div>
              </div>
            </div>
            <img src="assets/images/bisikletler/mountain/dag2.png" alt="">
          </div>
          <div class="bisikletKart asagiKaydirMobil">
            <img src="assets/images/bisikletler/mountain/dag4.png" alt="">
            <div class="mobilKart">
              <div class="dagBaslik">
                <h3 class="inceBaslik">GHOST</h3>
              </div>
              <div class="dagFiyat">
                <div class="netFiyat">
                  <span class="fiyat">€2.540,-</span>
                  <p id="mobilDan">'dan başlayan fiyatlarla</p>
                </div>
                <div class="mobilButon">
                  <a href="cube.php"><button class="mblBtn"><i class="fas fa-arrow-right"></i></button></a>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>

      </div>
    </div>
  </div>
  </div>
  <!-- kategori 4 alan Bitiş -->
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