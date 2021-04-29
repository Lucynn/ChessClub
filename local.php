<?php include "assets/elements/headers.php" ?>
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
          Local Multiplayer <i class="fas fa-map-marker-alt"></i>
          </h1>
        </div>
      </div>
    </section>
    <div class="tile is-ancestor main">
      <div class="tile is-parent is-4by3">
        <article class="tile is-child box homeChessbg">
          <p class="title">Play against others locally!</p>
          <p class="subtitle">A way to play with your friends.</p>
          <figure class="image">
            <div class="video-container2">
              <iframe src="http://plainchess.timwoelfle.de/" width="1280" height="720" frameborder="0"></iframe>
            </div>
          </figure>
        </article>
      </div>
    </div>

    <!-- Footer -->
    <?php include "assets/elements/footer.html";?>
</body>
</html>