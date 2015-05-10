 <div class="container">    
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Liste des problemes remarques</h2>
                <hr>
                <form enctype="multipart/form-data" action="http://localhost/mycleancity-hackathon/mycleancity/index.php/listingController/trierList" method="post">
                    <p> Trier par : 
                         <select name="tri">
                            <option value="plusRecent" selected="selected">Plus recent</option>
                            <option value="moinsRecent">Moins recent</option>
                            <option value="plusPrio">Plus prioritaire</option>
                            <option value="moinsPrio">Moins prioritaire</option>
                            <option value="parTypeAlpha">Type (alphabetique)</option>
                            <option value="parTypeNonAlpha">Type (alphabetique inverse)</option>
                        </select>
                        <input type="submit" value="Afficher" />
                    </p> 
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (!empty($list)) {
    $i = 0;
    foreach ($list as $cleList => $objet) {

        echo '<div class="container">    ';
        echo '<div class="row">';
        echo '<div class="box">';
        echo '<div class="col-lg-12">';
        echo '<a href="" ><img class="img-responsive img-border img-left" src="'. $objet->path .'" alt=""></a>';
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
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        $i++;
    }
}

?>