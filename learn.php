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
          Learn <i class="fas fa-book-open"></i>
          </h1>
        </div>
      </div>

      <!--<div><iframe src="https://fritz.chessbase.com" style="width:760px;height:480px"></iframe>-->
      <!--<iframe src="https://play.chessbase.com" style="width:760px;height:480px"></iframe></div>-->
    </section>

    <div class="tile is-ancestor main">
      <div class="tile is-parent is-4by3">
        <article class="tile is-child box homeChessbg">
          <p class="title">How to play chess.</p>
          <div class="tile is-parent is-vertical">
            <article class="tile is-child">
              <p class="title">Step 1: Setup, Turns, and Taking Pieces</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p class="subtitle">Setup:</p>
              <p>The board is setup as shown. There should always be a white square at the closest right-hand side for both players. Remember that the queen must be on a square that matches her color.</p>
              <p class="subtitle">Turns:</p>
              <p>White always moves first, and players alternate turns. Players can only move one piece at a time, except when castling (explained later).</p>
              <p class="subtitle">Taking Pieces:</p>
              <p>Players take pieces when they encounter an opponent in their movement path. Only pawns take differently than they move (explained later). Players cannot take or move through their own pieces.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 2: Pawn Movement</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>Pawns only move forward. On the first move a pawn can move one or two spaces, every subsequent move can only be one space. Pawns move diagonally to take opponents.</p>
              <p class="subtitle">Pawn Promotion:</p>
              <p>If a pawn reaches the opposite side of the board, it is promoted to a higher piece (except king). There is no limit to how many pawns can be promoted.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 3: Rook</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>Rooks move in a continuous line forwards, backwards and side-to-side.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 4: Knight</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>Knights are the only pieces that "jump" off the board. Unlike other pieces they are not blocked if there are pieces between them and their destination square.</p>
              <p>To make it easier to remember how a knight moves think of an L. Two spaces in a direction forward, backward or side-to-side, and one space at a right turn.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 5: Bishop</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>Bishops move in continuous diagonal lines in any direction.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 6: Queen</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>The queen moves in continuous diagonal and straight lines. Forward, backward and side-to-side.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 7: King</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>The king can move in any direction, one square at a time.</p>
              <p>A king cannot move to a square that is under attack by the opponent.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 8: Special Move: Castling</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>Castling is the only move that allows two pieces to move during the same turn.</p>
              <p>During castling a king moves two spaces towards the rook that it will castle with, and the rook jumps to the other side. The king can castle to either side as long as:</p>
              <ol>
                <li>The king has not moved.</li>
                <li>The king is not in check.</li>
                <li>The king does not move through or into check.</li>
                <li>There are no pieces between the king and castling-side rook.</li>
                <li>The castling-side rook has not moved.</li>
              </ol>
              <p>It does not matter:</p>
              <p>A. If the king was in check, but is no longer.</p>
              <p>B. If the rook can be attacked by an opponent's piece before castling.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 9: Special Move: En Passant</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>En passant is a special movement for pawns attacking pawns. It only applies if your opponent moves a pawn two spaces, and its destination space is next to your pawn. You can take the opposing piece by moving forward-diagonal to your pawn's attacked square.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 10: Check</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>A king is in check when an opponent's piece is in a position that can attack the king. A player must move their king out of check, block the check or capture the attacking piece.</p>
              <p>A player cannot move their king into check.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 11: Checkmate</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>Putting an opponent's king in "checkmate" is the only way to win the game.</p>
              <p>A king is in checkmate if it is in check, the opponent's piece that has the king in check cannot be captured, the check cannot be blocked, and the king cannot move to a square that is not under attack.</p>
              <p>In the illustration the white queen has the black king in check, and all of the spaces where the king can move can be attacked by the queen. The king cannot take the queen, because the knight is protecting the queen. The black bishop cannot block the queen. This is checkmate.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 12: Stalemate</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>Simply put, a "Stalemate" is a tie. It is achieved if there are no legal moves for a player to make.</p>
              <p>In this illustration it is white's turn. All spaces around the king are being attacked, but the king is not in check, therefore it cannot move. The only other white piece, the pawn, is blocked by the king. Because movement is impossible, the game is a stalemate.</p>
              <p>If white had another piece somewhere on the board that was not blocked, it would have to move. The game would continue.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 13: Basic Strategy</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>Chess is an incredibly complex strategic game, and it is impossible to go into all of the possible tactics one could use to win. However, I wanted to leave the new player with a few hints that will hopefully aid in victory.</p>
              <p class="subtitle">Piece Value:</p>
              <p>Obviously you want to protect your pieces from capture, but it helps to know which pieces are the strongest so you can decide who to save if you must choose between two. A good explanation of piece value is available on <a href="http://en.wikipedia.org/wiki/Chess_piece_point_value">Wikipedia</a></p>
              <p>Queen: Strongest = Most Value</p>
              <p>Rook</p>
              <p>Bishop, Knight</p>
              <p>Pawn: Weakest = Least Value</p>
              <p>The bishop and the knight are commonly considered equal on the value scale, however many feel (myself included) that the bishop has a slight edge over the knight.</p>
              <p>Pawns become more valuable as they near promotion.</p>
              <p class="subtitle">Pawn Promotion:</p>
              <p>Although a pawn can be promoted to a variety of pieces, the strongest choice is almost always to promote to queen.</p>
              <p class="subtitle">Board Control:</p>
              <p>When building defenses, remember to look at the board and gauge how strong you are in certain areas of the board. Try an keep power distributed fairly evenly, and bring pieces over to add strength if you see an attack coming.</p>
              <p>When attacking, it's a bad idea to let any of your pieces become cut off from your main force. I find it helpful to have a support piece in mind when making an attack. Using pieces in tandem almost always yields a better result than using one piece alone.</p>
            </article>
            <article class="tile is-child">
              <p class="title">Step 14: Go Play</p>
              <img src="assets/img/learn01.jpg" class="learnimg"/>
              <p>So now you know the basics. Go get a board an play! No one around?</p>
              <p><a hreef="https://lichess.org/">Lichess.org</a> is a free/libre, open-source chess server powered by volunteers and donations. In 2010, Thibault Duplessis began work on Lichess as a hobby project. ... Today, Lichess users play more than a million games every day. Lichess is one of the most popular chess websites in the world while remaining 100% free.</p>
            </article>
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