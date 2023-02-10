<?php
include("header.php");

$kitapsor = $con->prepare("SELECT * FROM kitaplar where kitap_id=:kitap_id");
$kitapsor->execute(array(
    'kitap_id' => $_GET['kitap_id']
));
$kitapcek = $kitapsor->fetch(PDO::FETCH_ASSOC);

$sinifsor = $con->prepare("SELECT * FROM siniflar where sinif_id=:sinif_id");
$sinifsor->execute(array(
    'sinif_id' => $kitapcek['sinif_id']
));
$sinifcek = $sinifsor->fetch(PDO::FETCH_ASSOC);

$yayinsor = $con->prepare("SELECT * FROM dersler where yayin_id=:yayin_id");
$yayinsor->execute(array(
    'yayin_id' => $sinifcek['grup_adi']
));
$yayincek = $yayinsor->fetch(PDO::FETCH_ASSOC);

?>
<div class="sub-header">
    <div class="sub-header-container">
        <span>Anasayfa > Kitaplar</span>
        <h1>Kitaplar</h1>
    </div>
</div>
<div class="container py-5 ">


    <div class="row">
        <div class="col-md-4 mb-5 mb-md-0">

            <div class="product-thumb-info-image">
                <img alt="" class="img-fluid" src="public/images/kitaplar/PNG/<?php echo $kitapcek['kitap_kapak'] ?>">
            </div>

        </div>

        <div class="col-md-8">

            <div class="summary entry-summary position-relative">
                <h1 class="mb-0 font-weight-bold text-7"><?php echo $kitapcek['kitap_adi'] ?></h1>
                <div class="post-meta mt-2">
                    <span><i class="fas fa-circle text-secondary"></i><strong> Yazar(lar):</strong> <?php echo $kitapcek['kitap_yazar'] ?> </span><br>
                    <span><i class="fas fa-circle text-secondary"></i><strong> Sayfa Sayısı:</strong> <?php echo $kitapcek['kitap_sayfa_sayisi'] ?> </span><br>
                    <span><i class="fas fa-circle text-secondary"></i><strong> Kitap Türü:</strong> <?php echo $kitapcek['kitap_turu'] ?></span><br>
                </div>
                <p class="text-3-5 mb-3">
                    <?php echo $kitapcek['kitap_aciklama'] ?>
                </p>

            </div>
            <div class="col">
                <button type="button" onclick="window.open('<?php echo $kitapcek['kitap_ornek_link'] ?>', '_blank');" class="mb-1 mt-1 me-1 btn-lg btn-primary"><i class="fas fa-file-pdf"></i> DİJİTAL ÖRNEK</button>
                <button type="button" onclick="window.open('<?php echo $kitapcek['kitap_akilli_tahta'] ?>', '_blank');" class="mb-1 mt-1 me-1 btn-lg btn-secondary"><i class="fas fa-download"></i> Z-KİTAP</button>
                <button type="button" onclick="window.open('<?php echo $kitapcek['kitap_satinal_link'] ?>', '_blank');" class="mb-1 mt-1 me-1 btn-lg btn-warning"><i class="fas fa-shopping-cart"></i> SATIN AL</button>
            </div>
        </div>

    </div>
    <div class="video-row">
    <div class="wrapper">
        <h1>Tanıtım Videosu</h1>
        <video width="600" height="450" controls>
            <source src="public/videos/<?php echo $kitapcek['kitap_video_link'] ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
</div>

<!-- 
<div class="yayin-row">
    <img src="images/kitaplar/PNG/<?php echo $kitapcek['kitap_kapak'] ?>" alt="" height="400px" width="340px">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit optio deserunt alias! Iure id officia, dolorum quia, accusamus possimus exercitationem aliquid laborum iusto architecto, sunt placeat assumenda. Provident, cum.
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores animi odio repellat, labore autem suscipit architecto accusantium, repudiandae sequi perferendis eum dignissimos nesciunt et reprehenderit iste fugit aliquid excepturi magnam.
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quod perferendis voluptatum aliquid nemo dolor, explicabo minus asperiores eveniet illum natus, nisi recusandae voluptatem! Ullam voluptatum reiciendis aspernatur accusamus. Expedita?
        <br><br><br>
        <a href="" id="digital-button"><i class="fa-regular fa-file-pdf"></i> Dijital Örnek</a> <br> <br> <br>
        <a href="" id="z-button"><i class="fa-solid fa-download"></i> Z-Kitap</a> <br> <br> <br>
        <a href="" id="buy-button"><i class="fa-solid fa-cart-shopping"></i> Satın Al</a>
    </p>

</div>
<div class="video-row">
    <div class="wrapper">
        <video width="1280" height="720" controls>
            <source src="videos/8-matematik.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
-->

<?php
include("footer.php");
?>