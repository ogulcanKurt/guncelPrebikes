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
   <!-- media.css -->
   <link rel="stylesheet" href="assets/media.css">
   <!-- Font Yükleme -->
   <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">
   <!-- Popup -->
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
   <!-- hesapBilgi.css -->
   <link rel="stylesheet" href="assets/hesapBilgi.css">
   <!-- istekGorseli.css -->
   <link rel="stylesheet" href="assets/istekGorseli.css">

   <title>Premium Bikes</title>
</head>
<style>
   body {
      overflow-x: hidden;
   }

   .swiper-slide {
      color: white;
      padding: 10px;
   }
   .popup{
      z-index: 11111;
   }
   .ui-widget.ui-widget-content{
      margin-top: 90px !important;
   }
</style>

<body>
         <div class="popup" id="uyari" title="Premium Bikes Yapılanlar" style="display:none; margin-top:20px !important;">

            <h3>19.01.2022</h3>
            <p><b>- Mobil kısmında bazı bölümler gizlendi (index.php)</b></p>
            <p><b>- Mobil kısmında kartlar güncellendi (Düzeltme gelecek) (index.php)</b></p>
            <p><b>- Mobil kısmında kategori gizlendi (index.php)</b></p>
            <p><b>- Mobil kısmında kategori görselleri eklendi (index.php)</b></p>

            <hr>

            <h3>20.01.2022</h3>
            <p><b>- Mobil kısmında kategori gizlendi (index.php)</b></p>
            <p><b>- Mobil kısmında kategori görselleri eklendi web kısmı gizlendi (index.php)</b></p>
            <p><b>- Anasayfa mobili yapıldı</b></p>

            <hr>

            <h3>21.01.2022</h3>
            <p><b>- Mobil ve web sürümünün yazı font ayarları yapıldı</b></p>
            <p><b>- Mobil header açılma işlemi yapıldı</b></p>

            

            
        </div>
   <?php include 'mobilHeader.php' ?>
   <div class="container-fluid">
      <div class="row">

         
            <div class="col-lg-2">
               <a href="index.php">
                  <div class="logoLeft">
                     <img class="logo" src="assets/images/logo/prebikeslogo.png" alt="">
                  </div>
               </a>
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
                  <input class="searchButton" type="text" placeholder="bir şey arayın"><i class="fas fa-search searchicon"></i>
               </div>
            </div>
            <div class="col-lg-1 yukariBosluk">
               <div class="account">
                  <a href="giris.php"><img class="userPng" src="assets/icons/user.png" alt="user"></a>
                  <img class="basketPng" src="assets/icons/basket.png" alt="">
               </div>
            </div>
         
        
         <!-- Swiper -->
         <a href="urunDetay.php">
            <div class="swiper mobilSwiper mySwiper iconSinirla">
               <div class="canliChaticon">
                  <i class="far fa-comments chatBoyut"></i>
               </div>
               <div class="garantiGorsel">
                  <img src="assets/icons/garanti.png" alt="">
               </div>
               <div class="swiper-wrapper sliderSinirla ">

                  <div class="swiper-slide mobilSlider  konumAyarla">
                     <div class="kaydirma1Text">
                        <h3 class="ustuCiziliFiyat"><del>€6.999</del></h3>
                        <h1 class="gercekFiyat">€5.999</h1>
                     </div>
                     <span class="aciklamaGucu">kracht uit <span id="aciklamaDogadan">de natuur</span></span>
                     <div class="kaydirma1">
                        <img class="sliderGorsel" src="assets/images/slider/bisiklet.png" alt="">
                     </div>
                     <div class="sliderAltAciklama">
                        <p class="altAciklama">sterker en esthetischer met zijn vernieuwde ontwerp</p>
                     </div>
                  </div>

                  <div class="swiper-slide mobilSlider konumAyarla">
                     <div class="kaydirma1Text">
                        <h3 class="ustuCiziliFiyat"><del>€6.999</del></h3>
                        <h1 class="gercekFiyat">€5.999</h1>
                     </div>
                     <span class="aciklamaGucu">kracht uit <span id="aciklamaDogadan">de natuur</span></span>
                     <div class="kaydirma1">
                        <img class="sliderGorsel" src="assets/images/slider/bisiklet.png" alt="">
                     </div>
                     <div class="sliderAltAciklama">
                        <p class="altAciklama">sterker en esthetischer met zijn vernieuwde ontwerp</p>
                     </div>
                  </div>
               </div>
               <div class="swiper-button-next ileriButon"></div>
               <div class="swiper-button-prev geriButon"></div>
            </div>
         </a>
      </div>
   </div>
   <!-- Header slider bitiş -->
   <div class="gizliKategoriGorsel">
      <div class="container-fluid">
         <div class="row">
            <div class="col-6 ">
               
                  <div class="gorsel">
                     <img src="assets/images/bisikletler/mobilPics/bakfiets.png" alt="">
                     <div class="gorselKategoriAdi">
                        <span>Bakfiets</span>
                     </div>
                  </div>
               
            </div>
            <div class="col-6">
               <div class="gorsel">
                  <img src="assets/images/bisikletler/mobilPics/ebike.png" alt="">
                  <div class="gorselKategoriAdi">
                     <span>Elektrische fiets</span>
                  </div>
               </div>
            </div>
            <div class="col-6 mobilGorselTop">
               <div class="gorsel">
                  <img src="assets/images/bisikletler/mobilPics/racefiets.png" alt="">
                  <div class="gorselKategoriAdi">
                     <span>Racefiets</span>
                  </div>
               </div>
            </div>
            <div class="col-6 mobilGorselTop">
               <div class="gorsel">
                  <img src="assets/images/bisikletler/mobilPics/mountainbike.png" alt="">
                  <div class="gorselKategoriAdi">
                     <span>Mountain bike</span>
                  </div>
               </div>
            </div>
            <div class="col-12">
               <div class="kategoriButon">
                    <button>Alles zien</button>
                 </div>
            </div>
         </div>
      </div>
   </div>
   <!-- markalar kısmı başlangıç -->
   <div class="container-fluid markaHizala">
      <div class="row">
         <div class="col-lg-7">
            <div class="markalar">
               <div class="marka1">
                  <img class="markaBoyut" src="assets/images/markalar/marka1.png" alt="">
                  <img class="markaBoyut" src="assets/images/markalar/marka2.png" alt="">
                  <img class="markaBoyut" src="assets/images/markalar/marka3.png" alt="">
               </div>
               <div class="marka2">
                  <img class="markaBoyut" src="assets/images/markalar/marka2.png" alt="">
                  <img class="markaBoyut" src="assets/images/markalar/marka3.png" alt="">
                  <img class="markaBoyut" src="assets/images/markalar/marka1.png" alt="">
               </div>
               <div class="marka3">
                  <img class="markaBoyut" src="assets/images/markalar/marka1.png" alt="">
                  <img class="markaBoyut" src="assets/images/markalar/marka3.png" alt="">
                  <img class="markaBoyut" src="assets/images/markalar/marka2.png" alt="">
               </div>
            </div>
         </div>
         <div class="col-lg-5 markaAciklamaHizala">
            <div class="markaAciklama">
               <div class="elipsBg">
                  <img class="elipsPng" src="assets/images/bgpics/elips.png" alt="">
               </div>
               <h3 class="baslikSize">Premium Bikes Assurance en Samenwerking met Twenty-Nine Brands</h3>
               <p class="parag1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                  diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                  aliquam erat volutpat.
               </p>
               <p class="parag1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                  diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                  aliquam erat volutpat.
               </p>
            </div>
         </div>
      </div>
   </div>
   <!-- markalar kısmı bitiş -->
   <!-- ürünKategori Başlangıç -->
   <div class="urunKisim">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-1 col-xs-1 col-s-1 mobilKategori">
               <a href="kategori.php">
                  <div class="urunKategoriAktif">
                     <span class="urunAdetAktif">NEW</span>
                     <img class="urunKategoriGorselAktif" src="assets/icons/icon1Beyaz.png" alt="">
                     <p class="iconTextAktif">bakfiets</p>
                  </div>
               </a>
               <a href="kategori.php">
                  <div class="urunKategori">
                     <span class="urunAdet">NEW</span>
                     <img class="urunKategoriGorsel" src="assets/icons/icon2.png" alt="">
                     <p class="iconText">electricfiets</p>
                  </div>
               </a>
               <a href="kategori.php">
                  <div class="urunKategori">
                     <span class="urunAdet">NEW</span>
                     <img class="urunKategoriGorsel" src="assets/icons/icon3.png" alt="">
                     <p class="iconText">kinderfiets</p>
                  </div>
               </a>
               <a href="kategori.php">
                  <div class="urunKategori">
                     <span class="urunAdet">NEW</span>
                     <img class="urunKategoriGorsel" src="assets/icons/icon4.png" alt="">
                     <p class="iconText">mountainfiets</p>
                  </div>
               </a>
               <a href="kategori.php">
                  <div class="urunKategori">
                     <span class="urunAdet">NEW</span>
                     <img class="urunKategoriGorsel" src="assets/icons/icon4.png" alt="">
                     <p class="iconText">racefiets</p>
                  </div>
               </a>
               <a href="kategori.php">
                  <div class="urunKategori">
                     <span class="urunAdet">NEW</span>
                     <img class="urunKategoriGorsel" src="assets/icons/icon4.png" alt="">
                     <p class="iconText">transportfiets</p>
                  </div>
               </a>
            </div>
            <div class="col-lg-11 col-xs-11 col-s-11">
               <div class="row">
                  <div class="col-lg-3 col-6 sepetAlanYukari">
                     <div class="sepetBg mobilsepetBg">
                        <div class="stok_bilgisi">
                           <div class="teslim35Gün">
                              <span>*Levering in 3-5 dagen</span>
                           </div>
                        </div>
                        <div class="kaydetikon mobilkaydetIkon">
                           <i class="fas fa-bookmark"></i>
                        </div>
                        <a class="sepetAciklamaOrtala mobilSepetAciklama" href="urunDetay.php">
                           <p class="sepetAciklama">Cube Two15 Pro MTB</p>
                           <p class="sepetAciklamaAlt">275 inch zwart/sand 7V</p>
                          
                        </a>
                        <a href="urunDetay.php">
                           <div class="sepetGorselSinirla">
                              <img class="sepetGorsel" src="assets/images/sepet/bisiklet.png" alt="">
                           </div>
                        </a>
                        <div class="fiyat_bilgisi">
                           <p class="eski_Fiyat"><del>€1.500,-</del></p>
                           <p class="sepetFiyat">€1.399,-</p>
                        </div>
                        <div class="sepetAdet">

                           <select class="seceneklerSepet" id="cars">
                              <option value="1" selected>1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>
                           <button class="sepetButon"><i class="fas fa-shopping-cart sepetIcon"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6 sepetAlanYukari">
                     <div class="sepetBg mobilsepetBg">
                        <div class="stok_bilgisi">
                           <div class="teslim35Gün">
                              <span>*Levering in 3-5 dagen</span>
                           </div>
                        </div>
                        <div class="kaydetikon mobilkaydetIkon">
                           <i class="fas fa-bookmark"></i>
                        </div>
                        <a class="sepetAciklamaOrtala mobilSepetAciklama" href="urunDetay.php">
                           <p class="sepetAciklama">Cube Two15 Pro MTB</p>
                           <p class="sepetAciklamaAlt">275 inch zwart/sand 7V</p>
                          
                        </a>
                        <a href="urunDetay.php">
                           <div class="sepetGorselSinirla">
                              <img class="sepetGorsel" src="assets/images/sepet/bisiklet.png" alt="">
                           </div>
                        </a>
                        <div class="fiyat_bilgisi">
                           <p class="eski_Fiyat"><del>€1.500,-</del></p>
                           <p class="sepetFiyat">€1.399,-</p>
                        </div>
                        <div class="sepetAdet">

                           <select class="seceneklerSepet" id="cars">
                              <option value="1" selected>1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>
                           <button class="sepetButon"><i class="fas fa-shopping-cart sepetIcon"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6 sepetAlanYukari">
                     <div class="sepetBg mobilsepetBg">
                        <div class="stok_bilgisi">
                           <div class="teslim35Gün">
                              <span>*Levering in 3-5 dagen</span>
                           </div>
                        </div>
                        <div class="kaydetikon mobilkaydetIkon">
                           <i class="fas fa-bookmark"></i>
                        </div>
                        <a class="sepetAciklamaOrtala mobilSepetAciklama" href="urunDetay.php">
                           <p class="sepetAciklama">Cube Two15 Pro MTB</p>
                           <p class="sepetAciklamaAlt">275 inch zwart/sand 7V</p>
                          
                        </a>
                        <a href="urunDetay.php">
                           <div class="sepetGorselSinirla">
                              <img class="sepetGorsel" src="assets/images/sepet/bisiklet.png" alt="">
                           </div>
                        </a>
                        <div class="fiyat_bilgisi">
                           <p class="eski_Fiyat"><del>€1.500,-</del></p>
                           <p class="sepetFiyat">€1.399,-</p>
                        </div>
                        <div class="sepetAdet">

                           <select class="seceneklerSepet" id="cars">
                              <option value="1" selected>1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>
                           <button class="sepetButon"><i class="fas fa-shopping-cart sepetIcon"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6 sepetAlanYukari">
                     <div class="sepetBg mobilsepetBg">
                        <div class="stok_bilgisi">
                           <div class="teslim35Gün">
                              <span>*Levering in 3-5 dagen</span>
                           </div>
                        </div>
                        <div class="kaydetikon mobilkaydetIkon">
                           <i class="fas fa-bookmark"></i>
                        </div>
                        <a class="sepetAciklamaOrtala mobilSepetAciklama" href="urunDetay.php">
                           <p class="sepetAciklama">Cube Two15 Pro MTB</p>
                           <p class="sepetAciklamaAlt">275 inch zwart/sand 7V</p>
                          
                        </a>
                        <a href="urunDetay.php">
                           <div class="sepetGorselSinirla">
                              <img class="sepetGorsel" src="assets/images/sepet/bisiklet.png" alt="">
                           </div>
                        </a>
                        <div class="fiyat_bilgisi">
                           <p class="eski_Fiyat"><del>€1.500,-</del></p>
                           <p class="sepetFiyat">€1.399,-</p>
                        </div>
                        <div class="sepetAdet">

                           <select class="seceneklerSepet" id="cars">
                              <option value="1" selected>1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>
                           <button class="sepetButon"><i class="fas fa-shopping-cart sepetIcon"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6 sepetAlanYukari mobilGizle">
                     <div class="sepetBg mobilsepetBg">
                        <div class="stok_bilgisi">
                           <div class="teslim35Gün">
                              <span>*Levering in 3-5 dagen</span>
                           </div>
                        </div>
                        <div class="kaydetikon mobilkaydetIkon">
                           <i class="fas fa-bookmark"></i>
                        </div>
                        <a class="sepetAciklamaOrtala mobilSepetAciklama" href="urunDetay.php">
                           <p class="sepetAciklama">Cube Two15 Pro MTB</p>
                           <p class="sepetAciklamaAlt">275 inch zwart/sand 7V</p>
                          
                        </a>
                        <a href="urunDetay.php">
                           <div class="sepetGorselSinirla">
                              <img class="sepetGorsel" src="assets/images/sepet/bisiklet.png" alt="">
                           </div>
                        </a>
                        <div class="fiyat_bilgisi">
                           <p class="eski_Fiyat"><del>€1.500,-</del></p>
                           <p class="sepetFiyat">€1.399,-</p>
                        </div>
                        <div class="sepetAdet">

                           <select class="seceneklerSepet" id="cars">
                              <option value="1" selected>1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>
                           <button class="sepetButon"><i class="fas fa-shopping-cart sepetIcon"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6 sepetAlanYukari mobilGizle">
                     <div class="sepetBg mobilsepetBg">
                        <div class="stok_bilgisi">
                           <div class="teslim35Gün">
                              <span>*Levering in 3-5 dagen</span>
                           </div>
                        </div>
                        <div class="kaydetikon mobilkaydetIkon">
                           <i class="fas fa-bookmark"></i>
                        </div>
                        <a class="sepetAciklamaOrtala mobilSepetAciklama" href="urunDetay.php">
                           <p class="sepetAciklama">Cube Two15 Pro MTB</p>
                           <p class="sepetAciklamaAlt">275 inch zwart/sand 7V</p>
                          
                        </a>
                        <a href="urunDetay.php">
                           <div class="sepetGorselSinirla">
                              <img class="sepetGorsel" src="assets/images/sepet/bisiklet.png" alt="">
                           </div>
                        </a>
                        <div class="fiyat_bilgisi">
                           <p class="eski_Fiyat"><del>€1.500,-</del></p>
                           <p class="sepetFiyat">€1.399,-</p>
                        </div>
                        <div class="sepetAdet">

                           <select class="seceneklerSepet" id="cars">
                              <option value="1" selected>1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>
                           <button class="sepetButon"><i class="fas fa-shopping-cart sepetIcon"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6 sepetAlanYukari mobilGizle">
                     <div class="sepetBg mobilsepetBg">
                        <div class="stok_bilgisi">
                           <div class="teslim35Gün">
                              <span>*Levering in 3-5 dagen</span>
                           </div>
                        </div>
                        <div class="kaydetikon mobilkaydetIkon">
                           <i class="fas fa-bookmark"></i>
                        </div>
                        <a class="sepetAciklamaOrtala mobilSepetAciklama" href="urunDetay.php">
                           <p class="sepetAciklama">Cube Two15 Pro MTB</p>
                           <p class="sepetAciklamaAlt">275 inch zwart/sand 7V</p>
                          
                        </a>
                        <a href="urunDetay.php">
                           <div class="sepetGorselSinirla">
                              <img class="sepetGorsel" src="assets/images/sepet/bisiklet.png" alt="">
                           </div>
                        </a>
                        <div class="fiyat_bilgisi">
                           <p class="eski_Fiyat"><del>€1.500,-</del></p>
                           <p class="sepetFiyat">€1.399,-</p>
                        </div>
                        <div class="sepetAdet">

                           <select class="seceneklerSepet" id="cars">
                              <option value="1" selected>1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>
                           <button class="sepetButon"><i class="fas fa-shopping-cart sepetIcon"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6 sepetAlanYukari mobilGizle">
                     <div class="sepetBg mobilsepetBg">
                        
                        <button class="hepsi_gor">Alles zien</button>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ürünKategori Bitiş -->
   <!-- canlıChat Başlangıç -->
   <div class="canliChat">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <div class="ekipSinirla">
                  <div class="ekipHazir">
                     <img src="assets/images/bgpics/anasayfaBk.png" alt="">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="chatKutuGorsel">
                  <h1>Vol</h1>
                  <h1>Oponthoud</h1>
                  <h2>Geen berg is steil genoeg</h2>
                  <div class="paragraf">
                     <p>Er gaat niets boven de snelheid, het comfort en de controle van een CUBE full suspension fiets. Van downhill- of crosscountry-racers die op jacht zijn naar hun volgende podium tot enduro-enthousiastelingen en alpine ontdekkingsreizigers die een paar dagen rijden, onze ingenieurs hebben een fiets voor elk avontuur en elk parcours. Door de combinatie van geavanceerde frametechnologie met de allernieuwste geometrie en ophangingsontwerp, is een CUBE-fiets met volledige vering de beste manier om nieuwe hoogten van offroad-rijden te verkennen.</p>
                  </div>
                  <div class="detayButonu">
                     <button>In detail onderzoeken</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- canlıChat Bitiş -->
   <!-- bisikletTanitim Baslangic -->
   <div class="anasayfaIletisim">
      <div class="container">
         <div class="row">

            <div class="col-lg-4 col-12">
              <div class="iletisimArkplan">
                 <div class="iletisimGorseli">
                    <img src="assets/images/bgpics/iletisimIkon.png" alt="">
                 </div>
                 <div class="iletisimAciklama">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum itaque fuga est fugit iste, mollitia quam totam alias id maiores at saepe vitae ad consectetur voluptates facilis, ipsum eligendi vel.</p>
                 </div>
                 <div class="iletisimButonlari">
                    <button>Bel me nu</button>
                 </div>
              </div> 
            </div>

            <div class="col-lg-4 col-12">
              <div class="iletisimArkplan">
                 <div class="iletisimGorseli">
                    <img id="mektup" src="assets/images/bgpics/mektup.png" alt="">
                 </div>
                 <div class="iletisimAciklama">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum itaque fuga est fugit iste, mollitia quam totam alias id maiores at saepe vitae ad consectetur voluptates facilis, ipsum eligendi vel.</p>
                 </div>
                 <div class="iletisimButonlari">
                    <button>E-mail verzenden</button>
                 </div>
              </div> 
            </div>

            <div class="col-lg-4 col-12">
              <div class="iletisimArkplan">
                 <div class="iletisimGorseli">
                    <img id="mesajBalon" src="assets/images/bgpics/mesajBalon.png" alt="">
                 </div>
                 <div class="iletisimAciklama">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum itaque fuga est fugit iste, mollitia quam totam alias id maiores at saepe vitae ad consectetur voluptates facilis, ipsum eligendi vel.</p>
                 </div>
                 <div class="iletisimButonlari">
                    <button>Begin chat</button>
                 </div>
              </div> 
            </div>

         </div>
      </div>
   </div>
   <!-- bisikletTanitim Bitişs -->
   <!-- footer başlangıç -->
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
   <!-- footer Bitiş -->
   <!-- Script -->
   <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
       
        <script>
            $(function(){
                // sayfa açılışında dialog kutusunun gelmesi için her hangi bir buton için yerleştirmedik
                $("#uyari").dialog({
                    width:600, //dialog kutusunun genişliği
                    modal:true, //arkaplanın koyu olması
                    autoOpen:true, //gerek yok ama otomatik açılması için
                    position:  { my: "center top", at: "center top" } //konum
                });
            })
            
        </script>
   <script>
      var swiper = new Swiper(".mySwiper", {
         navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
         },
      });
   </script>   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>