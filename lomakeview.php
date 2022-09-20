<?php require "partials/head.php"; ?>

<h2 class="centered">Muokkaa profiilia</h2>

<!-- Lomakkeen koodi. Tähän lisäksi SELECT-toiminnot erikoistumisille (Gruppon tietokannasta) -->
<!-- <div class="inputarea"> -->
<form  action="/signup" method="post">
    <label for="name">Etunimi</label> 
    <input id="name" type="text" name="name">
    <label for="lname">Sukunimi</label> 
    <input id="lname" type="text" name="lname">
    <label for="title">Titteli</label> 
    <input id="title" type="text" name="title">
    <label for="email">Sähköpostiosoite</label>
    <input id="email" type="text" name="email">
    <label for="phone">Matkapuhelin</label>         
    <input id="phone" type="text" name="phone">
    <label for="address">Katuosoite</label>
    <input id="address" type="text" name="address">
    <label for="postal">Postinumero</label>
    <input id="postal" type="number" name="postal">
    <label for="city">Postitoimipaikka</label>
    <input id="city" type="text" name="city">
    <label for="country">Maa</label>
    <input id="country" type="text" name="country">
    <input id="updatebutton" type="submit" value="Päivitä">
    <!-- <input type="hidden" name="eventID" value="<?=$id?>"/> -->
</form>
</div>

<?php require "partials/footer.php"; ?>
