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
foreach ($list as $cleList => $objet) {

    echo '<div class="container">    ';
    echo '<div class="row">';
    echo '<div class="box">';
    echo '<div class="col-lg-12">';
    echo '<img class="img-responsive img-border img-left" src="'. $objet->path .'" alt="">';
    echo '<hr class="visible-xs">';
    echo '<p><strong>Coordonnees</strong> : Longitude :  '.$objet->lon.' | Latitude : '.$objet->lat.'</p>';
    echo '<p><strong>Ordre de priorite</strong> : '.$objet->priorite.'</p>';
    echo '<p><strong>Type</strong> : '.$objet->type.'</p>';
    echo '<hr>';
    echo '<p><strong>Commentaire </strong> : '.$objet->commentaire.'</p>';
    echo '</div>';
    echo '<div class="box">';
    echo '<a href=""><img id="img-button" src="C:/wamp/www/mycleancity-hackathon/mycleancity/assets/img/buttonYes.png" alt=""></a>';
    echo '<a href=""><img id="img-button" src="C:/wamp/www/mycleancity-hackathon/mycleancity/assets/img/buttonNo.png" alt=""></a>';
    echo '<a href=""><img id="img-button" src="C:/wamp/www/mycleancity-hackathon/mycleancity/assets/img/buttonSignaler.png" alt=""></a>';
    echo '<a href=""><img id="img-button" src="C:/wamp/www/mycleancity-hackathon/mycleancity/assets/img/buttonDoublon.png" alt=""></a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

}
?>