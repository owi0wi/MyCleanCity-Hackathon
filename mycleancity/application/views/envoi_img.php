        <div class="container">
        	<div class="row">
        		<div class="box">
        			<div class="col-lg-12">
        				<hr>
        				<h2 class="intro-text text-center">My Clean City</h2>
        				<hr>
        				<!-- <img class="img-responsive img-border img-left" src="img/im1.jpg" alt=""> -->
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
        							<img class="img-responsive img-full" src="/mycleancity-hackathon/mycleancity/assets/img/clip1.jpg" alt="">
        						</div>
        						<div class="item">
        							<img class="img-responsive img-full" src="/mycleancity-hackathon/mycleancity/assets/img/clip2.jpg" alt="">
        						</div>
        						<div class="item">
        							<img class="img-responsive img-full" src="/mycleancity-hackathon/mycleancity/assets/img/clip3.jpg" alt="">
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
        				<form enctype="multipart/form-data" action="http://localhost/mycleancity-hackathon/mycleancity/index.php/uploadController/dataPushed" method="post">
        					<input type="hidden" name="MAX_FILE_SIZE" value="7000000" />
        					<input type="file" name="picture" size=50 /><br>
        					Cle : <input type="text" name="data"/><br>
        					<input type="submit" value="Envoyer" />
        				</form>
        				<p><a href="http://localhost/frames/CodeIgniter/index.php/main/view_image">Liste</a></p>
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


