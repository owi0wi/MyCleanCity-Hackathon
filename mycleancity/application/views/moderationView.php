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
        echo '<div id="map"></div>';
        echo '<p><strong>Ordre de priorite</strong> : '.$objet->priorite.'</p>';
        echo '<p><strong>Type</strong> : '.$objet->type.'</p>';
        echo '<hr>';
        echo '<p><strong>Commentaire </strong> : '.$objet->commentaire.'</p>';
        echo '<div class="col-button">';
        echo '<div id="idblock"><a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonYes.png" alt=""></a>';
        echo '<p id="pblock">'.$numOui.' oui</p></div>';
        echo '<div id="idblock"><a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonNo.png" alt=""></a>';
        echo '<p id="pblock">'.$numNon.' non</p></div>';
        echo '<div id="idblock"><a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonSignaler.png" alt=""></a>';
        echo '<p id="pblock">'.$numAbus.' abus</p></div>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>
<script>
// Provide your access token
L.mapbox.accessToken = 'pk.eyJ1Ijoibm91eCIsImEiOiJyY0xMaUpVIn0.Wf6E2HX12J5M-XvIGlaA_g';
// Create a map in the div #map
var map = L.mapbox.map('map', 'noux.11d3b148').setView([<?php echo $objet->lat; ?>, <?php echo $objet->lon; ?>], 15);;
var marker = L.icon({
    iconUrl: 'markers.png',
    shadowUrl: 'leaf-shadow.png',

    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
L.mapbox.featureLayer({
    // this feature is in the GeoJSON format: see geojson.org
    // for the full specification
    type: 'Feature',
    geometry: {
        type: 'Point',
        // coordinates here are in longitude, latitude order because
        // x, y is the standard for GeoJSON and many formats
        coordinates: [
          <?php echo $objet->lon; ?>,
          <?php echo $objet->lat; ?>
        ]
    },
    properties: {
        'marker-size': 'large',
        'marker-color': '#BE9A6B',
        'marker-symbol': marker;
    }
}).addTo(map);
</script>