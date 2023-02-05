<?php
include("views/partials/header.php");
?>
<div class="sub-header">
    <div class="sub-header-container">
        <span>Anasayfa > Yayınlar</span>
        <h1>Yayınlarımız</h1>
    </div>
</div> 
<section class="yayinlarimiz">
    <label for="">Yayınlarımız</label>
    <h2>Akıllı Versiyon Yayınları Listesi</h2>
    
    <div class="yayin-row">
        <div class="yayin-col">
          <i class="fa-solid fa-book"></i>
            <h3>Türkçe</h3>
            <a href="views/dersler/turkce.php" class="yayin-btn">Görüntüle</a>
        </div>
        <div class="yayin-col">
          <i class="fa-solid fa-calculator"></i>
            <h3>Matematik</h3>
            <a href="matematik" class="yayin-btn">Görüntüle</a>
        </div>
        <div class="yayin-col">
          <i class="fa-solid fa-earth-americas"></i>
            <h3>Sosyal Bilgiler</h3>
            <a href="sosyal-bilgiler" class="yayin-btn">Görüntüle</a>
        </div>
    </div>
    <div class="yayin-row">
        <div class="yayin-col">
          <i class="fa-solid fa-flask"></i>
            <h3>Fen Bilimleri</h3>
            <a href="fen-bilimleri" class="yayin-btn">Görüntüle</a>
        </div>
        <div class="yayin-col">
          <i class="fa-solid fa-landmark"></i>
            <h3>İnkılap Tarihi</h3>
            <a href="inkilap-tarihi" class="yayin-btn">Görüntüle</a>
        </div>
        <div class="yayin-col">
          <i class="fa-solid fa-mosque"></i>
            <h3>Din Kültürü ve Ahlak Bilgisi</h3>
            <a href="din-kulturu" class="yayin-btn">Görüntüle</a>
        </div>
        
    </div>
</section>
    <!--footer section-->
<?php
include("views/partials/footer.php");
?>
