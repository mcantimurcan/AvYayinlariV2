<?php
session_start();
include("header.php");

$yayinsor = $con->prepare("SELECT * FROM dersler ");
$yayinsor->execute();

?>
<link rel="stylesheet" href="public/css/slider.css">
<main class="main-content">
  <section class="slideshow">
    <div class="slideshow-inner">
      <div class="slides">
        <div class="slide is-active ">
          <div class="slide-content">
            <div class="caption">
              <div class="title">LGS Branş Denemelerimiz</div>
              <div class="text">
                <p>Avcı Serisi branş denemelerimizle LGS'yi bizimle AV'layın.</p>
              </div>
              <a href="#" class="btn">
                <span class="btn-inner">İncele</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="public/images/banners/AV-BRANŞ-DENEMELERİ-BANNER.png" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Favori Başlangıç Kitaplarınız</div>
              <div class="text">
                <p>Favori başlangıç kitaplarınızla LGS'yi bizimle AV'layın.</p>
              </div>
              <a href="yayinlar" class="btn">
                <span class="btn-inner">İncele</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="public/images/banners/AV-FAVORİ-KAZANIM-BANNER.png" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Soru Bankalarımız</div>
              <div class="text">
                <p>Yeni nesil soru tarzına adapte olan LGS soru banlalarımızı inceleyin.</p>
              </div>
              <a href="yayinlar" class="btn">
                <span class="btn-inner">İncele</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="public/images/banners/AV-SORU-BANKASI-BANNER.png" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">LGS Denemelerimiz</div>
              <div class="text">
                <p>Averaj ve Nakavt denemelerimizle LGS'yi bizimle AV'layın.</p>
              </div>
              <a href="#" class="btn">
                <span class="btn-inner">İncele</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="public/images/banners/AV-DENEMELER-BANNER.png" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="pagination">
        <div class="item is-active">
          <span class="icon">1</span>
        </div>
        <div class="item">
          <span class="icon">2</span>
        </div>
        <div class="item">
          <span class="icon">3</span>
        </div>
        <div class="item">
          <span class="icon">4</span>
        </div>
      </div>
      <div class="arrows">
        <div class="arrow prev">
          <span class="svg svg-arrow-left">
            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
              <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
            </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
        <div class="arrow next">
          <span class="svg svg-arrow-right">
            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
              <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
            </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
      </div>
    </div>
  </section>
  <section class="cozumler">
    <h1>YAYINLARIMIZ</h1>

    <div class="row mt-5">
      <?php
      while ($yayincek = $yayinsor->fetch(PDO::FETCH_ASSOC)) {
      ?>
        <div class="yayin-col">
          <i class="<?php echo $yayincek['yayin_logo'] ?>"></i>
          <h3><?php echo $yayincek['yayin_adi'] ?></h3>
          <a href="siniflar.php?yayin=<?php echo $yayincek['yayin_id'] ?>" class="yayin-btn">Görüntüle</a>
        </div>
      <?php } ?>
    </div>
  </section>
  <section class="islerOnline">
    <div class="isler-row">
      <h3>Akıllı Tahta Uygulamaları için tıklayınız.</h3>
      <a href="https://isleronline.com/">İşler Online</a>
    </div>
  </section>

  <section class="cozumler">
    <h2>Çözümler</h2>
    <div class="cozumler-row">
      <div class="cozum-col">
        <i class="far fa-file-pdf"></i>
        <h3>PDF Çözümler</h3>
        <a href="" class="cozum-btn">Görüntüle</a>
      </div>
      <div class="cozum-col">
        <i class="far fa-file-video"></i>
        <h3>Video Çözümler</h3>
        <a href="" class="cozum-btn">Görüntüle</a>
      </div>
    </div>
  </section>
  <section class="yazililar">
    <h2>Yazılın Var</h2>
    <div class="yazililar-row">
      <div class="yazili-col">
        <i class="far fa-file-pdf"></i>
        <h3>Yazılın Var</h3>
        <a href="yazililar.php" class="yazili-btn">Görüntüle</a>
      </div>
    </div>
  </section>
</main>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="public/js/slider.js"></script>


<?php
include("footer.php");
?>