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
          Computer <i class="fas fa-robot"></i>
          </h1>
        </div>
      </div>
    </section>

    <div class="tile is-ancestor main">
      <div class="tile is-parent is-4by3">
        <article class="tile is-child box homeChessbg">
          <p class="title">Play against the Computer!</p>
          <p class="subtitle">Best way to learn is by training.</p>
          <figure class="image">
            <div class="video-container">
              <iframe src="https://fritz.chessbase.com" style="width:860px;height:600px"></iframe>
            </div>
          </figure>
        </article>
      </div>
    </div>

  <!-- Footer -->
  <?php include "assets/elements/footer.html";?>
</body>
</html>