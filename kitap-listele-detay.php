<?php
include("header.php");

$sinifsor = $con->prepare("SELECT * FROM siniflar where sinif_id=:sinif_id");
$sinifsor->execute(array(
    'sinif_id' => $_GET['sinif']
));
$sinifcek = $sinifsor->fetch(PDO::FETCH_ASSOC);


$yayinsor = $con->prepare("SELECT * FROM dersler where yayin_id=:yayin_id");
$yayinsor->execute(array(
    'yayin_id' => $sinifcek['grup_adi']
));
$yayincek = $yayinsor->fetch(PDO::FETCH_ASSOC);

?>
<link rel="stylesheet" href="css/sinif.css">
<div class="sub-header">
    <div class="sub-header-container">
        <span>Anasayfa > Yayınlar > <?php echo $yayincek['yayin_adi'] ?> > <?php echo $sinifcek['sinif_adi'] ?></span>
        <h1><?php echo $yayincek['yayin_adi'] ?></h1>
    </div>
</div>
<section class="cozumler" style="width: 70%;">
    <div class="row my-5">
        <?php
        $kitapsor = $con->prepare("SELECT * FROM kitaplar where sinif_id=:sinif_id");
        $kitapsor->execute(array(
            'sinif_id' => $sinifcek['sinif_id']
        ));

        while ($kitapcek = $kitapsor->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="col-sm-3 col-lg-3 mb-3">
                <div class="product mb-0">
                    <div class="product-thumb-info border-0 mb-3">
                        <a href="kitap-detay.php?kitap_id=<?php echo $kitapcek['kitap_id'] ?>">
                            <div class="product-thumb-info-image text-center">
                                <img alt="" width="200" height="auto" class="img-fluid" src="public/images/kitaplar/PNG/<?php echo $kitapcek['kitap_kapak'] ?>">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex" style="justify-content:center;">
                        <div>
                            <a href="kitap-detay.php?kitap_id=<?php echo $kitapcek['kitap_id'] ?>" style="color: #000; text-decoration: none;"><?php echo $kitapcek['kitap_adi'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php
include("footer.php");
?>