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
    <section id="anasayfa">
        <div id="black">

        </div>
         
        <div id="icerik">
        <h2>MertMuzik</h2>
        <hr width=300 align=left>
        <p>Mert Ozdemir Sayfasına Hoş Geldiniz.
        </p>
            
        </div>
    </section>
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos aperiam enim fugiat 
                </h5>
            </div>
            <div id="sag">
                <span>L</span>
                <p id="psag">orem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt cum nihil id inventore, beatae, placeat excepturi neque accusantium blanditiis ex rerum quos eos dolorum necessitatibus ipsum, libero veniam voluptatum.
                </p>
            </div>
            <img src="img/about.jpg" alt=""
            class="img-fluid mt100">

            <p id="pson">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, eveniet mollitia.
            </p>
        </div>
    </section>
    <section id="egitimler">
        <div class="container">

            <h3>Eğitimler</h3>
            <div class="owl-carousel owl-theme">
            <div class="card item" data-merge=1.5>
                <img src="img/r11.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">Gitar Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, tenetur?
                </p>
            </div>
            
            <div class="card item" data-merge=1.5>
                <img src="img/r11.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">Gitar Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, tenetur?
                </p>
            </div>
            
            <div class="card item" data-merge=1.5>
                <img src="img/r11.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">Gitar Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, tenetur?
               </p>
            </div>
           

            </div>

        </div>
    </section>
   <section id="ekip">
    <div class="container">
    <h3 id="ekiph3">Ekip</h3>
    
    <div class="sutun-sol-sag">
        <img src="img/ekip4.jpg" alt="" class="img-fluid oval">
        <h4 class="ekipisim">Ahmet Mert Özdemir</h4>
        <p class="ekipp">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, iure.
        </p>
        
        <div class="ekip-ikon">
            <a href="#"><i class="fa-brands fa-facebook social"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram social"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter social"></i></a>
        </div>    

    </div>
    <div class="sutun-sol-sag">
        <img src="img/ekip5.png" alt="" class="img-fluid oval">
        <h4 class="ekipisim">Cemal Sari</h4>
        <p class="ekipp">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, iure.
        </p>
        
        <div class="ekip-ikon">
            <a href="#"><i class="fa-brands fa-facebook social"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram social"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter social"></i></a>
        </div>    

    </div>
    <div class="sutun-sol-sag">
        <img src="img/ekip6.jpg" alt="" class="img-fluid oval">
        <h4 class="ekipisim">Ramazan Caz</h4>
        <p class="ekipp">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, iure.
        </p>
        
        <div class="ekip-ikon">
            <a href="#"><i class="fa-brands fa-facebook social"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram social"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter social"></i></a>
        </div>    

    </div>
    </div>

   </section>
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
    
    <script
  src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
  integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo="
  crossorigin="anonymous"></script>
    
    <script src="owl/owl.carousel.min.js">

</script>
<script src="owl/script.js"></script>
</body>
</html>

<?php

include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
    
    if($baglanti->query($ekle)===TRUE)
    {
     echo "<script>alert('mesajiniz basari ile gonderilmistir')</script>";
    }
    else
    {
        echo "<script>alert('bir hata olustu')</script>";
    }

}



?>