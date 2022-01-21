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
<!-- HEADER-->

<div class="col-lg-12">
    <div class="row">
        <div class="cards sepetAlanYukari col-6 col-lg-3">
            <div style="text-align: center;" class="kartBaslik">
                <h4>Güncel Kart (Ürünler)</h4>
            </div>
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
                        <div class="swiper-button-next kaydirSil"></div>
                        <div class="swiper-button-prev kaydirSil"></div>
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
        <div class="col-lg-3 sepetAlanYukari">
            <div style="text-align: center;" class="kartBaslik">
                <h4>İndex.php Kart (Ürünler)</h4>
            </div>
            <div class="sepetBg">
                <a href="urunDetay.php">
                    <div class="sepetGorselSinirla">
                        <img class="sepetGorsel" src="assets/images/sepet/bisiklet.png" alt="">
                    </div>
                </a>
                <a class="sepetAciklamaOrtala" href="urunDetay.php">
                    <p class="sepetAciklama">Cube Two15 Pro MTB</p>
                    <p class="sepetAciklamaAlt">275 inch zwart/sand 7V</p>
                    <p class="sepetFiyat">€1.399,-</p>
                </a>
                <div class="sepetAdet">
                    <a href="#">
                        <p class="eksi">-</p>
                    </a>
                    <a href="#">
                        <p class="adet">1</p>
                    </a>
                    <a href="#">
                        <p class="arti">+</p>
                    </a>
                    <button class="sepetButon"><i class="fas fa-shopping-cart sepetIcon"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>