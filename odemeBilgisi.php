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
    <!-- Font Yükleme -->
    <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">
    <title>Premium Bikes</title>
</head>

<body>
    <style>
        body {
            overflow: hidden;
        }
      
    </style>
    <header class="urunDetayHeader">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logoAlan urunDetayLogo">
                        <a href="index.php"><img class="logo urunDetayLogo" src="assets/images/logo/prebikeslogo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="odemeAlani odemAlaniSolaKaydirForm">
                        <ul>
                            <li><a class="odemeAdimlari" href="#">configureren</a></li>
                            <li><a class="odemeAdimlari" href="#">verzekering</a></li>
                            <li><button class="odemeAdimlari butonBorder">betaling</button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="userSepet">
                        <a href="giris.php"><img class="userPng" src="assets/icons/user.png" alt="user"></a>
                        <img class="basketPng" src="assets/icons/basket.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="urunTanitim">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="odemeKismi">
                        <div class="odemeAsamaBar">
                            <div class="solBar"></div>
                            <div class="sagBar"></div>
                        </div>
                        <div class="formBaslik">
                            <ul class="formOrtala">
                                <li><button class="odemeAdimlari butonBorder">verzekering</button></li>
                                <li class="odemeSaga"><a class="odemeAdimlari" href="#">betaling</a></li>
                            </ul>
                        </div>

                        <div class="odemeFormu">
                            <form>
                                <!-- üst taraf 3 input -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label beforeClass yaziAyar" for="form6Example1">Voornaam:</label>
                                            <input placeholder="Voornaam..." type="text" id="form6Example1" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline inputOzel1">
                                            <label class="form-label yaziAyar" for="form6Example2">Last name</label>
                                            <input placeholder="Tussenvoegsel..." type="text" id="form6Example2" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label beforeClass yaziAyar" for="form6Example2">Achternaam:</label>
                                            <input placeholder="Achternaam..." type="text" id="form6Example2" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                </div>

                                <!-- E Mail -->
                                <div class="form-outline mb-4">
                                    <label class="form-label beforeClass yaziAyar" for="form6Example3">E-mailadres:</label>
                                    <input placeholder="E-mailadres..." type="text" id="form6Example3" class="form-control yeniFormGenel" />
                                    
                                    <label class="form-check-label beforeClass yaziAyar" for="form6Example8">Bestelling is:</label>

                                    <input class="form-check-input me-2 radioSaga" type="radio" value="" id="form6Example8" checked />
                                    <label class="form-check-label radioLabelSola" for="form6Example8">Particulier</label>

                                    <input class="form-check-input me-2 radioSaga2" type="radio" value="" id="form6Example8" checked />
                                    <label class="form-check-label radioLabelSola" for="form6Example8">Zakelijk</label>
                                    
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label beforeClass yaziAyar" for="form6Example1">Land:</label>
                                            <input placeholder="Land..." type="text" id="form6Example1" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label beforeClass yaziAyar" for="form6Example2">Provincie:</label>
                                            <input placeholder="Provincie..." type="text" id="form6Example2" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <div class="form-outline">
                                            <label class="form-label beforeClass yaziAyar" for="form6Example1">Straatnaam:</label>
                                            <input placeholder="Straatnaam..." type="text" id="form6Example1" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-outline">
                                            <label class="form-label beforeClass yaziAyar" for="form6Example2">Huisnummer:</label>
                                            <input placeholder="Huisnummer..." type="text" id="form6Example2" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-outline">
                                            <label class="form-label yaziAyar" for="form6Example2">Bus:</label>
                                            <input placeholder="Bus..." type="text" id="form6Example2" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label beforeClass yaziAyar" for="form6Example1">Postcode:</label>
                                            <input placeholder="Postcode..." type="text" id="form6Example1" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label beforeClass yaziAyar" for="form6Example2">Plaats:</label>
                                            <input placeholder="Plaats..." type="text" id="form6Example2" class="form-control yeniFormGenel" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check mb-4 opsiyonYukari">

                                    <label class="form-check-label yaziAyar" id="secenek" for="form6Example8">Afleveladres</label> <span class="opsiyon">(Optionel)</span>

                                    <div class="radioinputs">
                                        <input class="form-check-input me-2 radioinput3" type="radio" value="" id="form6Example8" checked />
                                        <label class="form-check-label" id="secenekYazi" for="form6Example8">Hetzelfde als factuuradres</label>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <span class="beforeClass yaziAyar">Telefoonnumer:</span>
                                            <div class="bayrakinput">
                                                <input placeholder="Telefoonnumer..." type="text" id="form6Example1" class="form-control yeniFormGenel telefonPut" />
                                                <img class="hollandaBayrak2" src="assets/images/bayrak/hollanda.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="submit" id="form6Example1" class="form-control yeniFormGenel butonGonder" />
                                        </div>
                                    </div>
                                    <!-- Submit button -->
                                    
                                </div>



                            </form>
                        </div>
                        <div class="garantiForm">
                            <img src="assets/icons/garanti.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sagUrunDetay">
                    <div class="sagYazi">
                        <div class="bisiklet">
                            <div class="biradetGorsel">
                                <img class="birBisiklet" src="assets/images/bisikletler/urunTanitimBisiklet.png" alt="">
                                <div class="urunAdi">
                                    <span class="bisikletAciklama">Cortina E-U4 elektrische </span>
                                    <span class="bisikletAciklama2">Damesfiets 7V Mat Zwart</span>
                                </div>
                                <div class="urunFiyat">
                                    <span class="guncelFiyat">€1.399,-</span>
                                    <span class="eklenenFiyat">€1.419,-</span>
                                </div>
                                <div class="urunEklendi">
                                    <img src="assets/icons/sepeteeklenenurun.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="urunOzellikler">
                            <div class="ozellikicerik">
                                <div class="icerikOzellik">
                                    <div class="solicerik solicerikOzellik">Selecteer een framemaat:</div>
                                    <div class="sagicerik">50 cm (1,59 - 1,76 m)</div>
                                </div>
                                <div class="icerikOzellik">
                                    <div class="solicerik solicerikOzellik">Selecteer uw accu a.u.b. :</div>
                                    <div class="sagicerik">300 Wh (Gratis)</div>
                                </div>
                                <div class="icerikOzellik">
                                    <div class="solicerik solicerikOzellik">Selecteer type oplader:</div>
                                    <div class="sagicerik">Lader (Gratis)</div>
                                </div>
                                <div class="icerikOzellik">
                                    <div class="solicerik solicerikOzellik">Plan</div>
                                    <div class="sagicerik">standart plan(diefstal)</div>
                                </div>
                            </div>
                        </div>
                        <div class="seceneklerOdemeAdres">
                            <div class="secenekBaslik">
                                <ul>
                                    <li>
                                        <i class="fas fa-check check"></i>
                                        <a class="sigortaAciklama" href="">Eigen bezorgservice.</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-check check"></i>
                                        <a class="sigortaAciklama" href=""> Gratis verzending.</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-check check"></i>
                                        <a class="sigortaAciklama" href="">Meer dan 30.000 fietsen op voorraad.</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-check check"></i>
                                        <a class="sigortaAciklama" href=""> 14 dagen zichttermijn - Niet goed geld terug.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ozellikler">
                            <div class="ozellikicerik">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-5 urunBg urunAsagiKaydir">
                                            <div class="urunicerik">
                                                <img src="assets/images/urunler/sepet.png" alt="">
                                                <div class="urunAciklamaKisa">
                                                    <span class="urunOzellikYazi">Kratten</span>
                                                    <span class="urunOzellikYazi">en</span>
                                                    <span class="urunOzellikYazi">Manden</span>
                                                </div>
                                                <div class="sepeteFiyat">
                                                    <span class="fiyatOzellik">€20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 urunBg urunSagaYanastir urunAsagiKaydir">
                                            <div class="urunicerik">
                                                <img src="assets/images/urunler/canta.png" alt="">
                                                <div class="urunAciklamaKisa">
                                                    <span class="urunOzellikYazi">Kratten</span>
                                                    <span class="urunOzellikYazi">en</span>
                                                    <span class="urunOzellikYazi">Manden</span>
                                                </div>
                                                <div class="sepeteFiyat">
                                                    <span class="fiyatOzellik">€20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 urunBg urunAsagiKaydir">
                                            <div class="urunicerik">
                                                <img src="assets/images/urunler/kask.png" alt="">
                                                <div class="urunAciklamaKisa">
                                                    <span class="urunOzellikYazi">Kratten</span>
                                                    <span class="urunOzellikYazi">en</span>
                                                    <span class="urunOzellikYazi">Manden</span>
                                                </div>
                                                <div class="sepeteFiyat">
                                                    <span class="fiyatOzellik">€20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 urunBg urunSagaYanastir urunAsagiKaydir">
                                            <div class="urunicerik">
                                                <img src="assets/images/urunler/kilit.png" alt="">
                                                <div class="urunAciklamaKisa">
                                                    <span class="urunOzellikYazi">Kratten</span>
                                                    <span class="urunOzellikYazi">en</span>
                                                    <span class="urunOzellikYazi">Manden</span>
                                                </div>
                                                <div class="sepeteFiyat">
                                                    <span class="fiyatOzellik">€20</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fiyatAsamasi asagiSinirla">
                            <div class="eskiFiyat">
                                <del><span>€1.699</span></del>
                            </div>
                            <div class="yeniFiyat">
                                <span>€1.399,-</span>
                            </div>
                            <div class="sonrakiButon">
                                <a href="kategori.php"><button>Next</button></a>
                            </div>
                            <div class="canliicon">
                                <i class="far fa-comments canliDestekicon"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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