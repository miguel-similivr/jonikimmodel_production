<?php require("nav/include_nav.php"); ?>
<?php insertTitle(["title" => "Joni Kim - Vancouver Model"]); ?>

<script type="text/javascript">
  var currentTab = document.getElementById("home-nav");
  currentTab.className = "current";
</script>

    <!-- line break -->
    <hr>

    <!-- page content -->
    <div class="container">
      <div class="row">
        <div class="social-root col-lg-1 col-md-12 col-sm-12 col-xs-12">
          <a href="https://www.facebook.com/JKjoni">
            <img class="img-responsive btn social-icon" src="images/icons/facebook.png">
          </a>
          <a href="https://twitter.com/jonikim92">
            <img class="img-responsive btn social-icon" src="images/icons/twitter.png">
          </a>
          <a href="https://www.instagram.com/jkitsjoni">
            <img class="img-responsive btn social-icon" src="images/icons/instagram.png">
          </a>
        </div>
        <div id="homeSlides" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeSlides" data-slide-to="0" class="active"></li>
            <li data-target="#homeSlides" data-slide-to="1"></li>
            <li data-target="#homeSlides" data-slide-to="2"></li>
            <li data-target="#homeSlides" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/pics/home_0.jpg" alt="Chania">
            </div>

            <div class="item">
              <img src="images/pics/home_1.jpg" alt="Chania">
            </div>

            <div class="item">
              <img src="images/pics/home_2.jpg" alt="Flower">
            </div>

            <div class="item">
              <img src="images/pics/home_3.jpg" alt="Flower">
            </div>
            <div class="item">
              <img src="images/pics/home_4.jpg" alt="Chania">
            </div>

            <div class="item">
              <img src="images/pics/home_5.jpg" alt="Chania">
            </div>

            <div class="item">
              <img src="images/pics/home_6.jpg" alt="Flower">
            </div>

            <div class="item">
              <img src="images/pics/home_7.jpg" alt="Flower">
            </div>

            <div class="item">
              <img src="images/pics/home_8.jpg" alt="Chania">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#homeSlides" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#homeSlides" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  <footer>

  </footer>
</html>