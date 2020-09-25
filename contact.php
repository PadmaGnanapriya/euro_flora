<?php
include("asserts/header.php");
?>

<link rel="stylesheet" href="style/style.css">
<div style="background:gray; padding: 5px">
    <div class="pageView">
    <br><br><br><br>
        <hr>
        <img src="images/euroflora-logo.png" alt="imge">
        <p>We are Online! Welcome to Instant Answer Messaging. During the opening hours of the shop, your
        request will be read and managed in real time. If you have already placed an order you can call the
        phone number dedicated to the customers, you received in the summary email.</p>

    <form action="">
                <div style="width:25%; float:left; line-height:36px; text-align:right; padding-right: 20px">
                <!-- <div style="width:25%; float:left; text-align:right; "> -->
                    <label for="name">Name*</label><br>
                    <label for="email">Email*</label><br>
                    <label for="phone">Phone*</label><br>
                    <label for="orderCode">Order Code</label><br>
                    <label for="msg">Message</label><br><br><br>
                    <label for="attachment">Attatachment</label><br>
        

                </div>
                <div style="width:70%; float:left;">
                    <input type="text" name="name" style="width:100%; margin: 5px" required><br>
                    <input type="email" name="email" style="width:100%; margin: 5px" required><br>
                    <input type="text" name="phone" style="width:100%; margin: 5px" required><br>
                    <input type="text" name="orderCode" style="width:100%; margin: 5px"><br>
                    <textarea name="msg" id="" cols="60" rows="5" style="width:100%; margin: 5px"></textarea><br>
                    <input type="file" name="attachment" style="width:100%; margin: 5px"><br>
                    <button>Start</button>
                </div>
                
    </form>
    </div>
</div>

