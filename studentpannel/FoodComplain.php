<?php
include "dashboard.php";
?>
<style>
    input {
        border: 2px solid black;
    }

    #my-form-button {
        background-color: orange;
        width: 150px;
        height: 30px;
        border-radius: 12px;
    }
</style>
<div class="maincontent">

    <!-- <form id="my-form" action="https://formspree.io/f/xbjqqvro" method="post" style="width: 100%;height: 80vh;">
        <label for="email">E-Mail:</label><br>
        <input type="email" id="email" name="gmail" placeholder="abc@gmail.com"><br>
        <label for="text" style="padding-top: 20px;">Name:</label><br>
        <input type="text" id="text" name="Name" placeholder="jiten.."><br>
        <label for="message">Message:</label><br>
         <input type="text" id="message" name="message" placeholder="write your messge here" "> -->
    <!-- <textarea id="message" name="message" rows="6" cols="40"></textarea> <br>
        <input id="my-form-button" type="submit" value="submit">
        <p id="my-form-status"></p>
    </form> -->
    <header>
        <h2 style="text-align: center;color:red;padding-top:20px">Complain Related Food Problems</h2>
    </header>
    <div style="text-align: center;margin-top:20px">
        <form id="my-form" action="https://formspree.io/f/xbjqqvro" method="post">
            <label for="usn">USN:</label><br>
            <input type="text" id="usn" name="usn" style="width:400px;height:25px;padding:10px" placeholder="1BH19CS034"><br>
            <br>
            <br>
            <label for="email">E-mail</label><br>
            <input type="email" id="email" name="gmail" style="width:400px;height:25px;padding:10px" placeholder="Jitendrakohar@gmail.com"><br>
            <br>
            <br>
            <label type="message">Message:</label><br>
            <!-- <input type="text" id="message" name="messsage" placeholder="Write your subject and describe about your problems  in organized Way"> -->
            <textarea type="text" style="padding:10px" id="message" name="messsage" placeholder="Write your subject and describe about your problems  in organized Way" rows="10" cols="80" required></textarea>
            <br><br>
            <input id="my-form-button" type="submit" value="submit">
        </form>
    </div>
</div>
</div>
</body>

</html>