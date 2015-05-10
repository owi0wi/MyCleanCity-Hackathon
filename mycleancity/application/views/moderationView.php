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

        echo '<div class="container">    ';
        echo '<div class="row">';
        echo '<div class="box">';
        echo '<div class="col-lg-12">';
        echo '<img class="img-responsive img-border img-left" src="'. $objet->path .'" alt="">';
        echo '<hr class="visible-xs">';
        echo '<div id="map"></div>';
        //echo '<p><strong>Coordonnees</strong> : Longitude :  '.$objet->lon.' | Latitude : '.$objet->lat.'</p>';
        echo '<p><strong>Ordre de priorite</strong> : '.$objet->priorite.'</p>';
        echo '<p><strong>Type</strong> : '.$objet->type.'</p>';
        echo '<hr>';
        echo '<p><strong>Commentaire </strong> : '.$objet->commentaire.'</p>';
        echo '<div class="col-button">';
        echo '<div id="idblock"><a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonYes.png" alt=""></a>';
        echo '<p id="pblock">0 oui</p></div>';
        echo '<div id="idblock"><a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonNo.png" alt=""></a>';
        echo '<p id="pblock">0 non</p></div>';
        echo '<div id="idblock"><a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonSignaler.png" alt=""></a>';
        echo '<p id="pblock">1 abus</p></div>';

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
L.mapbox.map('map', 'noux.11d3b148').setView([<?php echo $objet->lat; ?>, <?php echo $objet->lon; ?>], 15);;
L.marker([<?php echo $objet->lat; ?>, <?php echo $objet->lon; ?>], {
    icon: L.mapbox.marker.icon({
        'marker-size': 'large',
        'marker-symbol': 'bus',
        'marker-color': '#fa0'
    })
}).addTo(map);
</script>