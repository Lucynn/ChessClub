<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="chessclub-website">
  <title>Chess Club</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <!-- Navigation -->
  <?php include "assets/elements/nav.html"; ?>

    <!--main content-->
    <section class="hero is-dark is-bold">
      <div class="hero-body">
        <div class="container">
          <h1 class="title has-text-left">
          Services <i class="fas fa-concierge-bell"></i>
          </h1>
        </div>
      </div>

      <!--<div><iframe src="https://fritz.chessbase.com" style="width:760px;height:480px"></iframe>-->
      <!--<iframe src="https://play.chessbase.com" style="width:760px;height:480px"></iframe></div>-->
    </section>

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
            <iframe src="https://lichess.org/tv/frame?theme=green-plastic&bg=dark" id="homeChess" allowtransparency="true" frameborder="0"></iframe>
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