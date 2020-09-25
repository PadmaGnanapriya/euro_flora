<?php
include("asserts/header.php");
?>

<link rel="stylesheet" href="style/style.css">
<div style="background:gray; padding: 5px">
    <div class="pageView">
    <br><br><br><br>
        <div style="width:50%; float:left">
            <img src="images/the smile.jpg" alt="image" style="width:50%; align:center;">
            <p>Price(delivery included)</p>
            <hr><br>
            
            <span class="price_option"><input type="radio" name="price_option" value="1">Standrad 78.80 €</span><br><br>
            <span class="price_option"><input type="radio" name="price_option" value="2">Delux 98.90 €</span><br><br>
            <span class="price_option"><input type="radio" name="price_option" value="3">Premium 118.80 €</span><br><br>

            <span style="background: #6a2500; padding: 5px 10px; margin: 10px; color: #ffffff">Total: 78.90 €(delivery included)</span><br>
            <p>The smile 78.90 €</p>
        </div>
        <div style="width:50%; float:left">
            <h2>The Smile</h2><br>
            <p>
                <b>Bouquet of roses and mixed seasonal flowers in vivid colors, decorated with greenery. Suitable
                for every occasion. Conveys joy.</b><br><br>
                Seasonal Flowers or Plants may be changed if unavailable. However, we will try to stick to the type of the
                chosen flowers as much as possible. The vase is not included. The picture usually referring the "Deluxe"
                arrangement.
            </p>
            <br>
            <hr>
            <br>
            <div style="width:25%; float:left; line-height:36px">
            <!-- <div style="width:25%; float:left; text-align:right; "> -->
                <label for="ddate">Delevery Date*</label><br>
                <label for="dtime">Delevery Time</label><br><br>
                <label for="qty">Quantity*</label><br>
                <label for="msg">Messge</label><br>
                <a href="#">Out of ideas? Choose <br>a message</a><br>
                <br>
                <label for="signature">Signature</label><br>
            </div>
            <div style="width:70%; float:left;">
            <!-- <div style="width:65%; float:left"> -->
                <input type="date" name="ddate" id=""><br><br>
                <input type="radio" name="dtime" value="1"> Working day- Free (9.00 a.m.-9.00 p.m.)<br>
                <input type="radio" name="dtime" value="1"> Sunday and Public holidays 4.00 €<br><br>
                <input type="number"><br><br>
                <textarea name="msg" id="" cols="60" rows="5"></textarea><br><br>
                <input type="text" name="signature"><br><br>
            </div>
            <span style="background: #6a2500; padding: 5px 10px; margin: 10px; color: #ffffff; float: right">Continue >>></span><br>

        </div>

    </div>
</div>