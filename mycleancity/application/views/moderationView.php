 <div class="container">    
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Zone de moderation</h2>
                <hr>
            </div>
        </div>
    </div>
</div>

<?php
if (!empty($list)) {
    $i=0;
    foreach ($list as $cleList => $objet) {
        //pour les oui de la communaute
        if(isset($objet->oui)) {
            $numOui = $objet->oui;
        }else {
            $numOui = 0;
        }
        //pour les non de la communaute
        if(isset($objet->non)) {
            $numNon = $objet->non;
        }else {
            $numNon = 0;
        }
        //pour les abus de la communaute
        if(isset($objet->abus)) {
            $numAbus = $objet->abus;
        }else {
            $numAbus = 0;
        }

        echo '<div class="container">    ';
        echo '<div class="row">';
        echo '<div class="box">';
        echo '<div class="col-lg-12">';
        echo '<img class="img-responsive img-border img-left" src="'. $objet->path .'" alt="">';
        echo '<hr class="visible-xs">';
        echo '<div id="map'.$i.'" class="map"></div>';
        echo "<script>
            var greenIcon = L.icon({
    iconUrl: '/mycleancity-hackathon/mycleancity/assets/img/marker.png',
    shadowUrl: '/mycleancity-hackathon/mycleancity/assets/img/shadow.png',
    iconSize:     [30, 41], // size of the icon
    shadowSize:   [30, 41], // size of the shadow
    iconAnchor:   [".$objet->lat.",".$objet->lon."], // point of the icon which will correspond to marker's location
    shadowAnchor: [".$objet->lat.",".$objet->lon."],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
            // Provide your access token
            L.mapbox.accessToken = 'pk.eyJ1Ijoibm91eCIsImEiOiJyY0xMaUpVIn0.Wf6E2HX12J5M-XvIGlaA_g';
            // Create a map in the div #map
            var map = L.mapbox.map('map".$i."', 'noux.11d3b148').setView([".$objet->lat.",".$objet->lon."], 15);
            L.marker([".$objet->lat.",".$objet->lon."], {icon: greenIcon}).addTo(map);
</script>";
        echo '<p><strong>Ordre de priorite</strong> : '.$objet->priorite.'</p>';
        echo '<p><strong>Type</strong> : '.$objet->type.'</p>';
        echo '<hr>';
        echo '<p><strong>Commentaire </strong> : '.$objet->commentaire.'</p>';
        echo '<div class="col-button">';
        echo '<div id="idblock"><a href="http://localhost/mycleancity-hackathon/mycleancity/index.php/moderationController/updateVo/'.$objet->_id.'"><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonYes.png" alt=""></a>';
        echo '<p id="pblock">'.$numOui.' oui</p></div>';
        echo '<div id="idblock"><a href="http://localhost/mycleancity-hackathon/mycleancity/index.php/moderationController/updateVn/'.$objet->_id.'"><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonNo.png" alt=""></a>';
        echo '<p id="pblock">'.$numNon.' non</p></div>';
        echo '<div id="idblock"><a href="http://localhost/mycleancity-hackathon/mycleancity/index.php/moderationController/updateVa/'.$objet->_id.'"><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonSignaler.png" alt=""></a>';
        echo '<p id="pblock">'.$numAbus.' abus</p></div>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        $i++;
    }
}
?>