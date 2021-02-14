<!DOCTYPE html>
<html lang="en">

<?php include "assets/elements/head.html"; ?>

<body>

  <!-- Navigation -->
  <?php include "assets/elements/nav.html"; ?>

    <!--main content-->
    <section class="hero is-dark is-bold">
      <div class="hero-body">
        <div class="container">
          <h1 class="title has-text-left">
          Local Multiplayer <i class="fas fa-map-marker-alt"></i>
          </h1>
        </div>
      </div>

      <!--<div><iframe src="https://fritz.chessbase.com" style="width:760px;height:480px"></iframe>-->
      <!--<iframe src="https://play.chessbase.com" style="width:760px;height:480px"></iframe></div>-->
    </section>
<!--
    <div class="tile is-ancestor main">
      <div class="tile is-parent is-4by5">
        <article class="tile is-child box homeChessbg">
          <div class="content">
            <p class="title">Welcome!</p>
            <p class="subtitle">To the chess club. Here are the rules.</p>
            <div class="content mainText">
              <ol id="rules">
                <li>| You don’t talk about Chess club.</li>
                <li>|<em> YOU DO NOT TALK ABOUT CHESS CLUB.</em></li>
                <li>| Someone yells stop, gives up, taps out, the match is over.</li> 
                <li>| Only two people to a match.</li>
                <li>| One match at a time Fellas.</li>
                <li>| Matches will go on as long as they have to.</li>
                <li>| If this is your first night at Chess club, you have to Play.</li>             
              </ol>  
            </div>
          </div>
        </article>
      </div>
      <div class="tile is-parent is-4by3">
        <article class="tile is-child box homeChessbg">
          <p class="title">Learn to Play!</p>
          <p class="subtitle">Best way to learn is by watching.</p>
          <figure class="image">
            <iframe src="https://www.openprocessing.org/sketch/309165/embed/" width="1280" height="720"></iframe>
        </figure>
        </article>
      </div>
    </div>-->
    <div class="tile is-ancestor main">
      <div class="tile is-parent is-4by3">
        <article class="tile is-child box homeChessbg">
          <p class="title">Play against others locally!</p>
          <p class="subtitle">A way to play with your friends.</p>
          <figure class="image">
            <!--<iframe src="https://www.openprocessing.org/sketch/309165/embed/" width="1280" height="720"></iframe>-->
              <iframe src="http://plainchess.timwoelfle.de/" width="1280" height="720"></iframe>
          </figure>
        </article>
      </div>
    </div>

    <!-- Footer -->
    <?php include "assets/elements/footer.html";?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="js/main.js"></script>
</body>
</html>