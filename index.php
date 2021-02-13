<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="chessclub-website">
  <title>Chess Club</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5/css/all.min.css">
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
      <div class="tile is-parent is-4by5">
        <article class="tile is-child box homeChessbg">
          <div class="content">
            <p class="title">Welcome!</p>
            <p class="subtitle">To the chess club. Here are the rules.</p>
            <div class="content mainText">
              <ol class="has-text-left" id="rules">
                <li>| You don’t talk about Chess club.</li>
                <li>|<em class="has-text-danger"> YOU DO NOT TALK ABOUT CHESS CLUB.</em></li>
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