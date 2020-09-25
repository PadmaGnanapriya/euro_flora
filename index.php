<?php
include("asserts/header.php");
?>

<link rel="stylesheet" href="style/style.css">
<div style="background:gray; padding: 5px">
    <div class="pageView">
    <br><br><br><br>
        <h2><b>Malshan Flora</b> your online Florist to deliver Flowers in Kotikawatta
        </h2>
        <div>
            <img src="images/euroflora-florist-flower-bouquet.jpg" alt="photo" style="width:76%; float: left;">
            <img src="images/Cheyanne.jpg" alt="photo" style="width:24%;float: right;">
        </div>

        <br>

        <hr>
        <hr>

        <p style="padding: 10px">We offer a same day Flowers and Plants delivery service in Kotikawatta even in a few hours.
        From our online Flower shop can order nice Bouquets and Flowers Gifts quickly and easily.
        Choose your Bouquet from 68 € delivery included. Payments accepted: Credit Card and Paypal.
        </p>

<?php
    require_once("dbConfig.php");

    $sql = "SELECT * FROM item"; 
    $result = $_conn->query($sql);
    // print_r($result);
    foreach ($result as $key => $value) { ?>
        <div class="card">
            <img src=<?php echo("images/".$value['image'])?> alt="image">
            <h2><?php echo($value['name'])?></h2>
            <p><?php echo($value['discription'])?></p>
            <span class="priceTag"><?php echo("From ".$value['price']." €")?></span>
            <br>
        </div>
       
        <?php
    };


?>
    </div>
</div>



