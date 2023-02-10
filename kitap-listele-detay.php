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

<div class="yayin-row">
    <?php
    $kitapsor = $con->prepare("SELECT * FROM kitaplar where sinif_id=:sinif_id");
    $kitapsor->execute(array(
        'sinif_id' => $sinifcek['sinif_id']
    ));

    while ($kitapcek = $kitapsor->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <div class="wrapper">
            <div class="yayin-col">
                <img src="public/images/kitaplar/PNG/<?php echo $kitapcek['kitap_kapak'] ?>" alt="" width="200px" height="250px">
                <a id="sinifbuton" href="kitap-detay.php?kitap_id=<?php echo $kitapcek['kitap_id'] ?>"><?php echo $kitapcek['kitap_adi'] ?></a>
            </div>
        </div>
    <?php } ?>
</div>
<?php
include("footer.php");
?>