<?php 
  header("Content-Security-Policy: 
            font-src 'https://fonts.googleapis.com','https://fonts.gstatic.com', 
            img-src 'self'");
?>
<!DOCTYPE html>
<html lang="en">

<?php include "assets/elements/head.amp.html"; ?>
<body>

  <!-- Navigation -->
  <?php include "assets/elements/nav.amp.html"; ?>

    <!--main content-->
    <section class="hero is-dark is-bold header">
      <div class="hero-body">
        <div class="container">
          <h1 class="title has-text-left headerTitle">
          The Chess Club <i class="fas fa-chess-king"></i>
          </h1>
          <a href="https://time.is/London" id="time_is_link" rel="nofollow" style="font-size:15px">Time in London:</a>
          <span id="London_z716" style="font-size:15px"></span>
          <script src="//widget.time.is/t.js"></script>
          <script>
            time_is_widget.init({London_z716:{}});
          </script>
          <a class="weatherwidget-io" href="https://forecast7.com/en/51d51n0d13/london/" data-label_1="London" data-label_2="Weather" data-theme="dark" data-basecolor="#363636" data-accent="rgba(255, 255, 255, 0.0)" >LONDON WEATHER</a>
          <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
          </script>
        </div>
      </div>

      <!--<div><iframe src="https://fritz.chessbase.com" style="width:760px;height:480px"></iframe>-->
      <!--<iframe src="https://play.chessbase.com" style="width:760px;height:480px"></iframe></div>-->
    </section>
    <div class="tile is-ancestor main">
      <div class="tile is-parent is-4">
        <article class="tile is-child box homeChessbg">
          <div class="content"> 
            <p class="title">Welcome!</p>
            <p class="subtitle">To the chess club.</p>
            <img src="/assets/logos/chessclublogo3.png" > 
          </div>
        </article>
      </div>
      <div class="tile is-parent is-4by3">
        <article class="tile is-child box homeChessbg">
          <p class="title">Learn to Play!</p>
          <p class="subtitle">Best way to learn is by watching.</p>
          <figure class="image">
            <iframe src="https://lichess.org/tv/frame?theme=grey&bg=dark" style="width:600px;height:400px;" id="homeChess" allowtransparency="true" frameborder="0"></iframe>
            </figure>
        </article>
      </div>
    </div>

    <!-- Footer -->
    <?php include "assets/elements/footer.amp.html";?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="js/main.js"></script>
</body>
</html>