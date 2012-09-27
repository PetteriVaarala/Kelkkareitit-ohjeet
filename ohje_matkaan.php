<?php
$filename = "../gpx/kelkkareitit.fi.gpx";
if (file_exists($filename))
    $updated = date ("d.m.Y H:i:s", filemtime($filename));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Kelkkareitit - Reitit matkaan</title>
    <link rel="stylesheet" href="/css/menu_style.css" type="text/css" />
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <link href="//fonts.googleapis.com/css?family=Cabin:regular,regularitalic,bold" rel="stylesheet" type="text/css">

    <!-- Google Analytics -->
    <script type="text/javascript" src="/js/googleanalytics.js"></script>
</head>

<body>

    <div id="ohje_content">
    <div class="narrow">
        <h2>Garmin</h2>
            <p>Ohjeet kelkkareitit.fi:n karttojen käyttämiseen Garminin laitteissa löydät osoitteesta: <a href="http://laaksola.net/kelkkareitit/" target="_blank">http://laaksola.net/kelkkareitit/</a>
            <br />
            Kiitokset näiden ylläpidosta <a href="http://kelkkalehti.com/keskustelu/index.php?action=profile;u=11956">mcnobody</a>:lle
            </p>
        <h2>Kännykät</h2>
            <p>
                Kelkkareitit.fi:n mobiilisivut löydät osoitteesta: <a href="http://m.kelkkareitit.fi" target="_blank">m.kelkkareitit.fi</a>
            </p>
            <p>
                Voit ladata koko Suomen kelkkareitit GPX-muodossa alla olevista linkeistä (hiiren kakkosnappi ja "Tallenna nimellä"). Koska reittejä on paljon, voi laitteesta ja ohjelmasta riippuen toiminta olla liian hidasta. Tämän vuoksi reiteistä on tarjolla myös kaksi pienempää versiota jotka on karsittu 10 ja 50 metrin tarkkuuteen. Ladattuasi reitit omalle koneellesi, voit myös poistaa itsellesi turhat jäljet esimerkiksi <a href="http://www.easygps.com/" target="_blank">EasyGPS</a>-ohjelmalla.
            </p>
            <p>
                GPX:t päivitetty: <?php echo $updated?>
            </p>
            <ul>
            <li><a href="/gpx/kelkkareitit.fi.gpx" target="_blank">kelkkareitit.fi.gpx</a> ~20Mt
            <li><a href="/gpx/kelkkareitit.fi-10m.gpx" target="_blank">kelkkareitit.fi-10m.gpx</a> ~10Mt
            <li><a href="/gpx/kelkkareitit.fi-50m.gpx" target="_blank">kelkkareitit.fi-50m.gpx</a> ~3Mt
            </ul>
           <p>
                GPX-tiedostoja tukevat ainakin seuraavat ohjelmat:
            </p>
        <h3 style="margin-top: 20px;">Android</h3>
            <ul>
                <li><a href="https://market.android.com/details?id=com.orux.oruxmaps" target="_blank">OruxMaps</a>
                <li><a href="https://market.android.com/details?id=menion.android.locus" target="_blank">Locus</a>
                <li><a href="https://market.android.com/details?id=com.globalmotion.everytrail" target="_blank">EveryTrail</a>
            </ul>
        <h3 style="margin-top: 20px;">iPhone</h3>
             <ul>
               <li><a href="http://www.everytrail.com/iphone.php" target="_blank">EveryTrail</a>
            </ul>
        <h3 style="margin-top: 20px;">Nokia</h3>
            <ul>
                <li><a href="http://www.kolumbus.fi/jarkko.isokoski/dirtviewer/fi/index.html" target="_blank">DirtViewer</a>
            </ul>


    </div>
    </div>

</body>

</html>
