        <div class="container">    
        	<div class="row">
        		<div class="box">
        			<div class="col-lg-12">
        				<hr class="visible-xs">
        				<div id="carousel-example-generic" class="carousel slide">
        					<!-- Indicators -->
        					<ol class="carousel-indicators hidden-xs">
        						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
        						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
        					</ol>

        					<!-- Wrapper for slides -->
        					<div class="carousel-inner">
        						<div class="item active">
        							<img class="img-responsive img-full" src="/mycleancity-hackathon/mycleancity/assets/img/clip1.png" alt="">
        						</div>
        						<div class="item">
        							<img class="img-responsive img-full" src="/mycleancity-hackathon/mycleancity/assets/img/clip2.png" alt="">
        						</div>
        						<div class="item">
        							<img class="img-responsive img-full" src="/mycleancity-hackathon/mycleancity/assets/img/clip3.png" alt="">
        						</div>
        					</div>

        					<!-- Controls -->
        					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        						<span class="icon-prev"></span>
        					</a>
        					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        						<span class="icon-next"></span>
        					</a>
        				</div>
        				<p>N'avez vous jamais reve d'une ville propre sans dechet ? D'une ville sans tag ?</p>
        				<p>Le changement peut se faire grace a vous ! Soyez les acteurs de votre ville !</p>
        				<p>Comment faire ? Prenez une photo d'un lieu delabre ou sale et laisser la communaute decider si il faut y remedier. La photo une fois moderee sera traitee avec la particiaption de la mairie ou par vous !. N'attendez plus !</p>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="container">
        	<div class="row">
        		<div class="box">
        			<div class="col-lg-12">
        				<hr>
        				<h2 class="intro-text text-center">Ajouter une photo : </h2>
        				<hr>
        				<!-- <img class="img-responsive img-border img-left" src="img/im1.jpg" alt=""> -->

        				<form enctype="multipart/form-data" action="http://localhost/mycleancity-hackathon/mycleancity/index.php/uploadController/upload" method="post">
        				<input type="hidden" name="user" value="1" />
                        <input type="hidden" name="lon" value="12" />
                        <input type="hidden" name="lat" value="34" />
        				<p><input type="file" name="picture" size=50 /></p>
                        <p> Type de degradations : 
                             <select name="type">
                                <option value="0">Dechet</option>
                                <option value="1" selected="selected">Nature</option>
                                <option value="2">Infrastructure</option>
                            </select>
                        </p>
                        <p> Priorite : 
                             <select name="priorite">
                                <option value="0">Faible</option>
                                <option value="1" selected="selected">Moyenne</option>
                                <option value="2">Forte</option>
                            </select>
                        </p>
        				<p>Commentaire :</p>
                        <p>    
                            <textarea name="commentaire" rows="6" cols="40"></textarea>  
                        </p>
                        <input type="submit" value="Envoyer" />
                    </form>
                </div>
            </div>
        </div>
</div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="/mycleancity-hackathon/mycleancity/assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/mycleancity-hackathon/mycleancity/assets/js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
        	$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
        </script>


