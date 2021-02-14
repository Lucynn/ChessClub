<?php session_start();

    if(isset($_POST['name'])){
        $r = true;

        $name = $_POST['name'];

        if(strlen($name) <= 0){
            $r = false;
            $_SESSION['e_name'] = 'Fill the empty box!';
        }

        if(strlen($name) > 100){
            $r = false;
            $_SESSION['e_name'] = 'Maximum of 100 characters!';
        }

        $email = $_POST['email'];
        $emailS = filter_var($email, FILTER_SANITIZE_EMAIL);
        if((filter_var($emailS, FILTER_VALIDATE_EMAIL) == false) || ($emailS != $email)){
            $r = false;
            $_SESSION['e_email'] = 'Invalid E-mail!';
        }

        if(strlen($email) <= 0){
            $r = false;
            $_SESSION['e_email'] = 'Fill the empty box!';
        }

        if(strlen($email) > 100){
            $r = false;
            $_SESSION['e_email'] = 'Maximum of 100 characters!';
        }

        $msg = $_POST['msg'];
        $msg = htmlentities($msg, ENT_QUOTES, 'utf-8');

        if(strlen($msg) > 5000){
            $r = false;
            $_SESSION['e_msg'] = 'Maximum of 5000 characters!';
        }

        if(strlen($msg) <= 0){
            $r = false;
            $_SESSION['e_msg'] = 'Fill the empty box!';
        }

        if(!isset($_POST['checkbox'])){
            $r = false;
            $_SESSION['e_checkbox'] = 'Accept terms and conditions!';
        }

        $_SESSION['fr_name'] = $name;
        $_SESSION['fr_email'] = $email;
        $_SESSION['fr_msg'] = $msg;
        if(isset($_POST['checkbox'])) $_SESSION['fr_checkbox'] = true;

        if($r == true){
            $to = ''; // Here provide email
            $subject = '' . $name; // Here put some subject
            $headers = 'From: ' . $email;
            mail($to, $subject, $msg, $headers);

            $_SESSION['success'] = true;
        }else{
            unset($_SESSION['success']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php include "assets/elements/head.html"; ?>

<body>

  <!-- Navigation -->
  <?php include "assets/elements/nav.html"; ?>

    <!--main content-->
    <section class="hero is-dark is-bold main">
      <div class="hero-body">
        <div class="container contactusheader">
          <h1 class="title has-text-left">
          Contact us <i class="fas fa-address-book"></i>
          </h1>
        </div>
      </div>
    </section>
      
    <div class="tile is-ancestor main">
        <div class="tile is-16 is-vertical is-parent">
            <div class="tile is-child box">
                <p class="title has-text-left">Get in touch.</p>
                <div class="content">
                    <p class="subtitle has-text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur earum corporis accusamus est quia sint tenetur nesciunt laboriosam, debitis saepe. Esse laboriosam quae maiores non recusandae odio temporibus odit ad?</p>
                </div>

                <form method="POST">
                    <div class="field">
                        <label class="label has-text-left">Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" placeholder="*Insert name here" value="<?php 
                                if(isset($_SESSION['fr_name'])){
                                    echo $_SESSION['fr_name']; 
                                    unset($_SESSION['fr_name']);
                                }
                            ?>">
                        </div>
                        <?php
                            // Error name
                            if(isset($_SESSION['e_name'])){
                                echo '<p class="help is-danger">' . $_SESSION['e_name'] . '</p>';
                                unset($_SESSION['e_name']);
                            }
                        ?>
                    </div>

                    <div class="field">
                        <label class="label has-text-left">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" type="email" name="email" placeholder="*Insert Email here" value="<?php 
                                if(isset($_SESSION['fr_email'])){
                                    echo $_SESSION['fr_email']; 
                                    unset($_SESSION['fr_email']);
                                }
                            ?>">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                        </div>
                        <?php 
                            // Error email
                            if(isset($_SESSION['e_email'])){
                                echo '<p class="help is-danger">' . $_SESSION['e_email'] . '</p>';
                                unset($_SESSION['e_email']);
                            }
                        ?>
                    </div>

                    <div class="field">
                        <label class="label has-text-left">Message</label>
                        <div class="control">
                            <textarea class="textarea" name="msg" placeholder="*Insert Text"><?php 
                                if(isset($_SESSION['fr_msg'])){
                                    echo $_SESSION['fr_msg']; 
                                    unset($_SESSION['fr_msg']);
                                }
                            ?></textarea>
                        </div>
                        <?php 
                            // Error message
                            if(isset($_SESSION['e_msg'])){
                                echo '<p class="help is-danger">' . $_SESSION['e_msg'] . '</p>';
                                unset($_SESSION['e_msg']);
                            }
                        ?>
                    </div>

                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox" name="checkbox">
                                <a class="has-text-link">I agree to the</a> <a href="#">terms and conditions</a>
                            </label>
                            <?php
                                if(isset($_SESSION['e_checkbox'])){
                                    echo '<p class="help is-danger">' . $_SESSION['e_checkbox'] . '</p>';
                                    unset($_SESSION['e_checkbox']);
                                }
                            ?>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary">Submit</button>
                        </div>
                        <div class="control">
                            <button class="button is-primary is-light">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>   
        <div class="tile is-parent">
            <article class="tile is-child notification is-white">
                <p class="title has-text-left">Find Us here!</p>
                <p class="subtitle has-text-left">Address:</p>
                <p class="content has-text-left">College Rd, Stoke-on-Trent ST4 2DE</p>
                <p class="subtitle has-text-left">Open hours:</p>
                <p class="content has-text-left">Mon - Fri: 09:00-18:00</p>
                <p class="content has-text-left">Sat - Sun: Closed</p>
                <figure class="is-3by1">
                    <iframe width='100%' height='100%' id='mapcanvas' src='https://maps.google.com/maps?q=staffordshire%20university&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'><div class="zxos8_gm"><a href="https://www.compareboilercover.co.uk/">using a service like this</a></div><div style='overflow:hidden;'><div id='gmap_canvas' style='height:100%;width:100%;'></div></div><div><small>Powered by <a href="https://www.embedgooglemap.co.uk">Embed Google Map</a></small></div></iframe>
                </figure>
            </article>
      </div>
    </div>

<!-- Contact us form -->

<!--<div class="notification is-danger">
  <button class="delete"></button>
  Primar lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.
</div>
-->
    <!-- Footer -->
    <?php include "assets/elements/footer.html";?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="js/main.js"></script>
</body>
</html>