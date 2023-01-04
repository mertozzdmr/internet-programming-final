<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
    
    
    <meta charset="UTF-8">
    <title>Anasayfa | Mert Muzik</title>

    <link rel="stylesheet" href="style.css"> 
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/d82463d230.js" crossorigin="anonymous"></script>

</head>
<body>
   <?php require 'ustmenu.php' ?>
   
    
    
   
   <section id="iletisim">
    <div class="container">
        <h3 id="h3iletisim">İletişim</h3>
        <form action="index.php" method="post">
        
        <div id="iletisimopak">
        </form>
        
            <div id="formgroup">
                
                <div id="solform">
                    <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                    <input type="text"name="tel" placeholder="Telefon Numarası"required class="form-control">
                </div>
                <div id="sagform">
                    <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                    <input type="text"name="konu" placeholder="Konu Basligi"required class="form-control">
                    </div>
                
                <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
            <input type="submit" value="Gönder">
            

            </div>
            <div id="adres">
                <h4 id="adresbaslik">Adres : </h4>
                <p class="adresp">Dpü mah.

                </p>
                <p class="adresp">Merkez Caddesi</p>
                <p class="adresp">MuratSarı Sokak no:123</p>
                <p class="adresp">0 534 685 4768</p>
                <p class="adresp">Email : mert3333.mz@gmail.com</p>
            </div>


            
              
            </div>
        </div>

        <footer>
        <div id="copyright">2022 | Tüm Hakları saklıdır</div>
       <div id="socialfooter"> 
        <a href="#"><i class="fa-brands fa-facebook social"></i></a>
        <a href="#"><i class="fa-brands fa-square-instagram social"></i></a>
        <a href="#"><i class="fa-brands fa-square-twitter social"></i></a>

        </div>
       <a href="#menu"><i class="fa-solid fa-angle-up" id="up"></i></a>
        </footer>


    </div>
</section>