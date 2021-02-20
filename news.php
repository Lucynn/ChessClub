<!DOCTYPE html>
<html lang="en">

<?php include "assets/elements/head.html"; ?>

<body>

  <!-- Navigation -->
  <?php include "assets/elements/nav.html"; ?>

    <!--main content-->
    <section class="hero is-dark is-bold">
      <div class="hero-body">
        <div class="container contactusheader">
          <h1 class="title has-text-left">
          News <i class="fas fa-newspaper"></i>
        </div>
      </div>

      <!--<div><iframe src="https://fritz.chessbase.com" style="width:760px;height:480px"></iframe>-->
      <!--<iframe src="https://play.chessbase.com" style="width:760px;height:480px"></iframe></div>-->
    </section>

    <div class="tile is-ancestor main">
      <div class="tile is-parent is-4by3">
        <article class="tile is-child box homeChessbg">
          <div class="content">
            <p class="title">News!</p>
            <p class="subtitle">Catch up and stay upto date on chess club news.</p>
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.redd.it%2Fhv0uvkywstn31.jpg&f=1&nofb=1">
          </div>
        </article>
      </div>
      <div class="tile is-parent is-4by5">
        <article class="tile is-child box homeChessbg">
          <div class="content">
            <p class="title">Chess in the News!</p>
            <p class="subtitle">See Chess in the media</p>
            <iframe width="820" height="620" frameborder="0" src="https://www.bbc.co.uk/news/av-embeds/54995676/vpid/p08yx2hy"></iframe>   
          </div>
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