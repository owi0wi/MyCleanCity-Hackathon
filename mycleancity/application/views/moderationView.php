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
        echo '<a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonYes.png" alt=""></a>';
        echo '<a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonNo.png" alt=""></a>';
        echo '<a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonSignaler.png" alt=""></a>';
        echo '<a href=""><img class="img-responsive" id="img-button" src="/mycleancity-hackathon/mycleancity/assets/img/buttonDoublon.png" alt=""></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>
<script>
        var map = L.map('map').setView([51.505, -0.09], 13);
        //http://{s}.tiles.mapbox.com/v3/MapID/{z}/{x}/{y}.png' 
        //https://a.tiles.mapbox.com/v4/noux.m502338o/page.html?access_token=pk.eyJ1Ijoibm91eCIsImEiOiJyY0xMaUpVIn0.Wf6E2HX12J5M-XvIGlaA_g#2/-22.4/24.3'
       
        L.tileLayer('http://api.tiles.mapbox.com/v4/noux.m502338o/51.505,-0.09,13/100x100.png?access_token=<pk.eyJ1Ijoibm91eCIsImEiOiJyY0xMaUpVIn0.Wf6E2HX12J5M-XvIGlaA_g>, {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18
        }).addTo(map);
</script>