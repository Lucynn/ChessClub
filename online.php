<!DOCTYPE html>
<html lang="en">

<?php include "assets/elements/head.amp.html"; ?>

<body>

  <!-- Navigation -->
  <?php include "assets/elements/nav.amp.html"; ?>

    <!--main content-->
    <section class="hero is-dark is-bold">
      <div class="hero-body">
        <div class="container contactusheader">
          <h1 class="title has-text-left">
          Online Multiplayer <i class="fas fa-globe"></i>
          </h1>
        </div>
      </div>
    </section>

    <div class="tile is-ancestor main">
      <div class="tile is-parent is-4by3">
        <article class="tile is-child box homeChessbg">
          <p class="title">Play against others Online!</p>
          <p class="subtitle">Best way to get better is by playing.</p>
          <figure class="image">
            <div class="video-container">
              <iframe src="https://play.chessbase.com" style="width:860px;height:600px"></iframe>
            </div>
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