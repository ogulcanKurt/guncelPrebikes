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
    <link rel="stylesheet" href="assets/cubeMedya.css">
    <!-- Font Yükleme -->
    <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">
    <title>Premium Bikes</title>
</head>

<body>
    <!-- HEADER BAŞLANGIÇ -->
    <header class="headerCube">
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
                    <img class="basketPng siyahBasket" src="assets/icons/basketSiyah.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER BİTİŞ -->

    <div class="cubeBaslik">
        <div class="container-fluid cubeSinirla">
            <div class="col-lg-12 cubeBg">
                <div class="cubeAciklamalar">
                    <div class="cubeBaslik">
                        <h3>CUBE</h3>
                    </div>
                    <div class="cubeKisaAciklama">
                        <p>Cube Mountainbike kopen? Bij ons zijn ze uit voorraad leverbaar!</p>
                    </div>
                    <div class="cubeKisaAciklama2">
                        <p>Cube Mountainbike kopen? 1 van de bekendste & beste fietsenmerk van Nederland. Betrouwbare Duitse kwaliteit mountainbike voor een scherpe prijs? Kies hier de mountainbike die bij jou past!</p>
                    </div>
                </div>
                <div class="cubeHeader">
                    <ul class="menuList">
                        <li><a class="cubeMenu kategori" href="#">Merken<i class="fas fa-chevron-down iconAsagi"></i></a></li>
                        <li><a class="cubeMenu" href="#">Frame Type<i class="fas fa-chevron-down iconAsagi"></i></a></li>
                        <li><a class="cubeMenu" href="#">Frame Size<i class="fas fa-chevron-down iconAsagi"></i></a></li>
                        <li><a class="cubeMenu" href="#">Versnellingen<i class="fas fa-chevron-down iconAsagi"></i></a></li>
                        <li><a class="cubeMenu" href="#">Kleur<i class="fas fa-chevron-down iconAsagi"></i></a></li>
                        <li><a class="cubeMenu" href="#">Wielgrootte<i class="fas fa-chevron-down iconAsagi"></i></a></li>
                        <li><a class="cubeMenu" href="#">Frame materiaal<i class="fas fa-chevron-down iconAsagi"></i></a></li>
                        <li><a class="cubeMenu" href="#">Prijs<i class="fas fa-chevron-down iconAsagi"></i></a></li>
                        <li><a class="cubeMenu" href="#">Voorraadfilter<i class="fas fa-chevron-down iconAsagi"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ÜRÜNLER BAŞLANGIÇ -->
    <div class="container-fluid">
        <div class="col-lg-12">

            <div class="ayniSira">
                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <a href="urunDetay.php">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </a>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube Two15 Pro MTB</p>
                            <p class="sepetAciklamaAlt modelAciklama">275 inch zwart/sand 7V</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="teslimAl">
                            <p>*Mağazadan teslim</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <a href="urunDetay.php">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </a>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">SLT 29,9 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="siyah"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="teslim3-5gun">
                            <p>*3-5 gün içinde teslim</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <a href="urunDetay.php">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </a>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">TM 29,9 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="teslimTarihVar">
                            <p>*30.01.2021 tarihinde teslim</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <a href="urunDetay.php">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </a>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">Race 29,29 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="stoktaYok">
                            <p>*Stokta yok</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <a href="urunDetay.php">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </a>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">Race 29,29 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="stoktaYok">
                            <p>*Stokta yok</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="satir2sinirla">
                <div class="ayniSira2 ikinciSiraKaydir">

                    <div class="cards sepetAlanYukari">
                        <div class="sepetBg sepetBg2">
                            <div class="sale">
                                <h5>KORTING</h5>
                                <h5 class="indirimFiyat">€200</h5>
                            </div>
                            <div class="saleFiyat">
                                <img src="assets/images/bgpics/label.png" alt="">
                                <span>€2.540,-</span>
                            </div>
                            <a href="urunDetay.php">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide kaydirmaBisiklet">
                                            <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                        </div>
                                        <div class="swiper-slide kaydirmaBisiklet">
                                            <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </a>
                            <div class="bisikletModelAciklama">
                                <p class="markaAciklama">Cube Two15 Pro MTB</p>
                                <p class="sepetAciklamaAlt modelAciklama">275 inch zwart/sand 7V</p>
                                <div class="renkSecenekleri">
                                    <div class="gri"></div>
                                    <div class="kirmizi"></div>
                                    <div class="mavi"></div>
                                </div>
                            </div>
                            <div class="incele">
                                <div class="gozat">
                                    <button class="gozatButon">Gözat</button>
                                </div>
                                <div class="sepeteEkle">
                                    <button class="sepeteEkleButon">Sepete Ekle</button>
                                </div>
                            </div>
                            <div class="teslimAl">
                                <p>*Mağazadan teslim</p>
                            </div>
                        </div>
                    </div>

                    <div class="cards sepetAlanYukari">
                        <div class="sepetBg sepetBg2">
                            <div class="sale">
                                <h5>KORTING</h5>
                                <h5 class="indirimFiyat">€200</h5>
                            </div>
                            <div class="saleFiyat">
                                <img src="assets/images/bgpics/label.png" alt="">
                                <span>€2.540,-</span>
                            </div>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="bisikletModelAciklama">
                                <p class="markaAciklama">Cube AMS 100 C:68</p>
                                <p class="sepetAciklamaAlt modelAciklama">SLT 29,9 inch</p>
                                <div class="renkSecenekleri">
                                    <div class="gri"></div>
                                    <div class="kirmizi"></div>
                                    <div class="siyah"></div>
                                </div>
                            </div>
                            <div class="incele">
                                <div class="gozat">
                                    <button class="gozatButon">Gözat</button>
                                </div>
                                <div class="sepeteEkle">
                                    <button class="sepeteEkleButon">Sepete Ekle</button>
                                </div>
                            </div>
                            <div class="teslim3-5gun">
                                <p>*3-5 gün içinde teslim</p>
                            </div>
                        </div>
                    </div>

                    <div class="cards sepetAlanYukari">
                        <div class="sepetBg sepetBg2">
                            <div class="sale">
                                <h5>KORTING</h5>
                                <h5 class="indirimFiyat">€200</h5>
                            </div>
                            <div class="saleFiyat">
                                <img src="assets/images/bgpics/label.png" alt="">
                                <span>€2.540,-</span>
                            </div>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="bisikletModelAciklama">
                                <p class="markaAciklama">Cube AMS 100 C:68</p>
                                <p class="sepetAciklamaAlt modelAciklama">TM 29,9 inch</p>
                                <div class="renkSecenekleri">
                                    <div class="gri"></div>
                                    <div class="kirmizi"></div>
                                    <div class="mavi"></div>
                                </div>
                            </div>
                            <div class="incele">
                                <div class="gozat">
                                    <button class="gozatButon">Gözat</button>
                                </div>
                                <div class="sepeteEkle">
                                    <button class="sepeteEkleButon">Sepete Ekle</button>
                                </div>
                            </div>
                            <div class="teslimTarihVar">
                                <p>*30.01.2021 tarihinde teslim</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="ayniSira3">
                    <div class="cards sepetAlanGenis">
                        <div class="sepetBgGenis">
                            <div class="saleGenis">
                                <h5>KORTING</h5>
                                <h5 class="indirimFiyat">€200</h5>
                            </div>
                            <div class="saleFiyatGenis">
                                <img src="assets/images/bgpics/buyuklabel.png" alt="">
                                <span>€2.540,-</span>
                            </div>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisikletGenis">
                                        <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisikletGenis">
                                        <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>

                            <div class="aciklamaSinirla">
                                <div class="bisikletModelAciklamaGenis">
                                    <p class="markaAciklamaGenis">Cube Two15 Pro MTB</p>
                                    <p class="sepetAciklamaAlt modelAciklama">275 inch zwart/sand 7V</p>
                                    <div class="renkSecenekleri">
                                        <div class="gri"></div>
                                        <div class="kirmizi"></div>
                                        <div class="mavi"></div>
                                    </div>
                                </div>
                                <div class="inceleGenis">
                                    <div class="gozatGenis">
                                        <button class="gozatButonGenis">Gözat</button>
                                    </div>
                                    <div class="sepeteEkle">
                                        <button class="sepeteEkleButonGenis">Sepete Ekle</button>
                                    </div>
                                </div>
                            </div>

                            <div class="teslim3-5gunGenis">
                                <p>*3-5 gün içinde teslim</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ayniSira2 ikinciSiraKaydir siraSinirla">

                    <div class="cards sepetAlanYukari">
                        <div class="sepetBg sepetBg2">
                            <div class="sale">
                                <h5>KORTING</h5>
                                <h5 class="indirimFiyat">€200</h5>
                            </div>
                            <div class="saleFiyat">
                                <img src="assets/images/bgpics/label.png" alt="">
                                <span>€2.540,-</span>
                            </div>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="bisikletModelAciklama">
                                <p class="markaAciklama">Cube Two15 Pro MTB</p>
                                <p class="sepetAciklamaAlt modelAciklama">275 inch zwart/sand 7V</p>
                                <div class="renkSecenekleri">
                                    <div class="gri"></div>
                                    <div class="kirmizi"></div>
                                    <div class="mavi"></div>
                                </div>
                            </div>
                            <div class="incele">
                                <div class="gozat">
                                    <button class="gozatButon">Gözat</button>
                                </div>
                                <div class="sepeteEkle">
                                    <button class="sepeteEkleButon">Sepete Ekle</button>
                                </div>
                            </div>
                            <div class="teslimAl">
                                <p>*Mağazadan teslim</p>
                            </div>
                        </div>
                    </div>

                    <div class="cards sepetAlanYukari">
                        <div class="sepetBg sepetBg2">
                            <div class="sale">
                                <h5>KORTING</h5>
                                <h5 class="indirimFiyat">€200</h5>
                            </div>
                            <div class="saleFiyat">
                                <img src="assets/images/bgpics/label.png" alt="">
                                <span>€2.540,-</span>
                            </div>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="bisikletModelAciklama">
                                <p class="markaAciklama">Cube AMS 100 C:68</p>
                                <p class="sepetAciklamaAlt modelAciklama">SLT 29,9 inch</p>
                                <div class="renkSecenekleri">
                                    <div class="gri"></div>
                                    <div class="kirmizi"></div>
                                    <div class="siyah"></div>
                                </div>
                            </div>
                            <div class="incele">
                                <div class="gozat">
                                    <button class="gozatButon">Gözat</button>
                                </div>
                                <div class="sepeteEkle">
                                    <button class="sepeteEkleButon">Sepete Ekle</button>
                                </div>
                            </div>
                            <div class="teslim3-5gun">
                                <p>*3-5 gün içinde teslim</p>
                            </div>
                        </div>
                    </div>

                    <div class="cards sepetAlanYukari">
                        <div class="sepetBg sepetBg2">
                            <div class="sale">
                                <h5>KORTING</h5>
                                <h5 class="indirimFiyat">€200</h5>
                            </div>
                            <div class="saleFiyat">
                                <img src="assets/images/bgpics/label.png" alt="">
                                <span>€2.540,-</span>
                            </div>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="bisikletModelAciklama">
                                <p class="markaAciklama">Cube AMS 100 C:68</p>
                                <p class="sepetAciklamaAlt modelAciklama">TM 29,9 inch</p>
                                <div class="renkSecenekleri">
                                    <div class="gri"></div>
                                    <div class="kirmizi"></div>
                                    <div class="mavi"></div>
                                </div>
                            </div>
                            <div class="incele">
                                <div class="gozat">
                                    <button class="gozatButon">Gözat</button>
                                </div>
                                <div class="sepeteEkle">
                                    <button class="sepeteEkleButon">Sepete Ekle</button>
                                </div>
                            </div>
                            <div class="teslimTarihVar">
                                <p>*30.01.2021 tarihinde teslim</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="ayniSira">
                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <a href="urunDetay.php">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </a>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube Two15 Pro MTB</p>
                            <p class="sepetAciklamaAlt modelAciklama">275 inch zwart/sand 7V</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="teslimAl">
                            <p>*Mağazadan teslim</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <a href="urunDetay">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </a>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">SLT 29,9 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="siyah"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="teslim3-5gun">
                            <p>*3-5 gün içinde teslim</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <a href="urunDetay.php">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </a>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">TM 29,9 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="teslimTarihVar">
                            <p>*30.01.2021 tarihinde teslim</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <a href="urunDetay.php">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide kaydirmaBisiklet">
                                        <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </a>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">Race 29,29 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="stoktaYok">
                            <p>*Stokta yok</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                </div>
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">Race 29,29 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="stoktaYok">
                            <p>*Stokta yok</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ayniSira">
                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                </div>
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube Two15 Pro MTB</p>
                            <p class="sepetAciklamaAlt modelAciklama">275 inch zwart/sand 7V</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="teslimAl">
                            <p>*Mağazadan teslim</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                </div>
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet22.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">SLT 29,9 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="siyah"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="teslim3-5gun">
                            <p>*3-5 gün içinde teslim</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                </div>
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet3.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">TM 29,9 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="teslimTarihVar">
                            <p>*30.01.2021 tarihinde teslim</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                </div>
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">Race 29,29 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="stoktaYok">
                            <p>*Stokta yok</p>
                        </div>
                    </div>
                </div>

                <div class="cards sepetAlanYukari">
                    <div class="sepetBg sepetBg2">
                        <div class="sale">
                            <h5>KORTING</h5>
                            <h5 class="indirimFiyat">€200</h5>
                        </div>
                        <div class="saleFiyat">
                            <img src="assets/images/bgpics/label.png" alt="">
                            <span>€2.540,-</span>
                        </div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                </div>
                                <div class="swiper-slide kaydirmaBisiklet">
                                    <img src="assets/images/bisikletler/bisiklet4.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="bisikletModelAciklama">
                            <p class="markaAciklama">Cube AMS 100 C:68</p>
                            <p class="sepetAciklamaAlt modelAciklama">Race 29,29 inch</p>
                            <div class="renkSecenekleri">
                                <div class="gri"></div>
                                <div class="kirmizi"></div>
                                <div class="mavi"></div>
                            </div>
                        </div>
                        <div class="incele">
                            <div class="gozat">
                                <button class="gozatButon">Gözat</button>
                            </div>
                            <div class="sepeteEkle">
                                <button class="sepeteEkleButon">Sepete Ekle</button>
                            </div>
                        </div>
                        <div class="stoktaYok">
                            <p>*Stokta yok</p>
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
            <div class="saydamArkaPlan">

            </div>


            <!-- <div class="ikonAlanlari ikonlariOneCikar">
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
    </div>
    <!-- Swiper -->
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
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!-- ÜRÜNLER BİTİŞ -->